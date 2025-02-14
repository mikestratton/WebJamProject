// /*
// let publicKey; // Store the private key here
// let privateKey; // Store the private key here
//
// async function generateKeypair() {
//     try {
//         const keypair = await window.crypto.subtle.generateKey(
//             {
//                 name: "RSA-OAEP",
//                 modulusLength: 2048,
//                 publicExponent: new Uint8Array([1, 0, 1]),
//                 hash: "SHA-256",
//             },
//             true,
//             ["encrypt", "decrypt"]
//         );
//         publicKey = keypair.publicKey;
//         privateKey = keypair.privateKey; // Store the private key
//
//         // ... (Rest of your key generation code, if any)
//     } catch (error) {
//         console.error("Error generating key pair:", error);
//     }
// }
//
// async function exportPrivateKeyJWK() {
//     if (!privateKey) {
//         console.error("No private key available.");
//         return;
//     }
//
//     try {
//         const exportedPublicKey = await window.crypto.subtle.exportKey("jwk", publicKey);  // Export as JWK
//         const exportedPublicKeyJson = JSON.stringify(exportedPublicKey, null, 2);
//
//         const exportedKey = await window.crypto.subtle.exportKey("jwk", privateKey);
//         const exportedKeyJson = JSON.stringify(exportedKey, null, 2); // Pretty print JSON
//
//         const exportPublicKeyOutput = document.querySelector(".exported-public");
//         exportPublicKeyOutput.textContent = exportedPublicKeyJson;
//
//         const exportKeyOutput = document.querySelector(".exported-private");
//         exportKeyOutput.textContent = exportedKeyJson;
//
//         console.log("Exported Public Key (JWK):", exportedPublicKeyJson);
//         console.log("Exported Private Key (JWK):", exportedKeyJson);
//     } catch (error) {
//         console.error("Error exporting private key:", error);
//     }
// }
//
// const exportPrivateKeyButton = document.querySelector(".export-private");
// exportPrivateKeyButton.addEventListener("click", exportPrivateKeyJWK);
//
//
//
//
//
//
//
//
// async function storePrivateKeyInIndexedDB() {
//     const statusDiv = document.getElementById('status');
//     const keyJwk = document.querySelector(".exported-private").value;
//
//     if (!keyJwk) {
//         statusDiv.textContent = "No private key to store. Please export first.";
//         return;
//     }
//
//     try {
//         const keyData = JSON.parse(keyJwk); // Parse the JWK from the textarea
//
//         const dbName = "myKeysDB";
//         const storeName = "privateKeys";
//
//         const request = indexedDB.open(dbName, 1);
//
//         request.onerror = (event) => {
//             statusDiv.textContent = "Error opening IndexedDB: " + event.target.error;
//             console.error("IndexedDB error:", event.target.error);
//         };
//
//         request.onupgradeneeded = (event) => {
//             const db = event.target.result;
//             if (!db.objectStoreNames.contains(storeName)) {
//                 db.createObjectStore(storeName, { keyPath: "id" });
//             }
//         };
//
//         request.onsuccess = (event) => {
//             const db = event.target.result;
//             const transaction = db.transaction([storeName], "readwrite");
//             const store = transaction.objectStore(storeName);
//
//             const dataToStore = {
//                 id: "rsa-private-key",
//                 privateKey: keyData,
//             };
//
//             const addRequest = store.put(dataToStore);
//
//             addRequest.onsuccess = () => {
//                 statusDiv.textContent = "Private key stored in IndexedDB!";
//             };
//
//             addRequest.onerror = (event) => {
//                 statusDiv.textContent = "Error storing private key: " + event.target.error;
//                 console.error("IndexedDB store error:", event.target.error);
//             };
//
//             transaction.onerror = (event) => {
//                 statusDiv.textContent = "Transaction error: " + event.target.error;
//                 console.error("IndexedDB transaction error:", event.target.error);
//             };
//             db.close();
//         };
//
//     } catch (error) {
//         statusDiv.textContent = "Error parsing key or storing in IndexedDB: " + error.message;
//         console.error("Error:", error);
//     }
// }
//
// //... (Your other functions)...
//
// // Add an event listener to a "Store in IndexedDB" button (you'll need to add this button to your HTML)
// const storeButton = document.createElement('button');
// storeButton.textContent = "Store in IndexedDB";
// storeButton.addEventListener('click', storePrivateKeyInIndexedDB);
// document.body.appendChild(storeButton);
// */


let publicKey;
let privateKey;

async function generateKeypair() {
    try {
        const keypair = await window.crypto.subtle.generateKey(
            {
                name: "RSA-OAEP",
                modulusLength: 2048,
                publicExponent: new Uint8Array([1, 0, 1]),
                hash: "SHA-256",
            },
            true,
            ["encrypt", "decrypt"]
        );
        publicKey = keypair.publicKey;
        privateKey = keypair.privateKey;
    } catch (error) {
        console.error("Error generating key pair:", error);
    }
}

async function exportKeysRaw() {
    if (!publicKey || !privateKey) {
        console.error("No keys available.");
        return;
    }

    try {
        const exportedPublicKey = await window.crypto.subtle.exportKey("spki", publicKey); // "spki" for public key
        const exportedPrivateKey = await window.crypto.subtle.exportKey("pkcs8", privateKey); // "pkcs8" for private key

        const publicKeyBase64 = btoa(String.fromCharCode.apply(null, new Uint8Array(exportedPublicKey)));
        const privateKeyBase64 = btoa(String.fromCharCode.apply(null, new Uint8Array(exportedPrivateKey)));

        // const publicKeyPem = `-----BEGIN PUBLIC KEY-----\n${publicKeyBase64}\n-----END PUBLIC KEY-----`;
        const publicKeyPem = `${publicKeyBase64}`;
        const privateKeyPem = `${privateKeyBase64}`;
        // const privateKeyPem = `-----BEGIN PRIVATE KEY-----\n${privateKeyBase64}\n-----END PRIVATE KEY-----`;

        const exportPublicKeyOutput = document.querySelector(".exported-public");
        exportPublicKeyOutput.textContent = publicKeyPem;

        const exportKeyOutput = document.querySelector(".exported-private");
        exportKeyOutput.textContent = privateKeyPem;

        console.log("Exported Public Key (PEM):", publicKeyPem);
        console.log("Exported Private Key (PEM):", privateKeyPem);

    } catch (error) {
        console.error("Error exporting keys:", error);
    }
}


const exportKeysButton = document.querySelector(".export-keys"); // Assuming you have a button with this class
exportKeysButton.addEventListener("click", exportKeysRaw);


generateKeypair(); // Generate keys on page load.



async function storePrivateKeyInIndexedDB() {
    const statusDiv = document.getElementById('status');
    const privateKeyPem = document.querySelector(".exported-private").value;

    if (!privateKeyPem) {
        statusDiv.textContent = "No private key to store. Please export first.";
        return;
    }

    // You'll need to convert the PEM format to something storable in IndexedDB (e.g., base64)
    // Here, we are storing the PEM string directly.
    // const privateKeyBase64 = privateKeyPem.replace(/-----BEGIN PRIVATE KEY-----/g, '').replace(/-----END PRIVATE KEY-----/g, '').replace(/\n/g, '');
    const privateKeyBase64 = privateKeyPem;


    try {
        const dbName = "myKeysDB";
        const storeName = "privateKeys";

        const request = indexedDB.open(dbName, 1);

        request.onerror = (event) => {
            statusDiv.textContent = "Error opening IndexedDB: " + event.target.error;
            console.error("IndexedDB error:", event.target.error);
        };

        request.onupgradeneeded = (event) => {
            const db = event.target.result;
            if (!db.objectStoreNames.contains(storeName)) {
                db.createObjectStore(storeName, { keyPath: "id" });
            }
        };

        request.onsuccess = (event) => {
            const db = event.target.result;
            const transaction = db.transaction([storeName], "readwrite");
            const store = transaction.objectStore(storeName);

            const dataToStore = {
                id: "rsa-private-key",
                privateKey: privateKeyBase64, // Store the base64 or PEM
            };

            const addRequest = store.put(dataToStore);

            addRequest.onsuccess = () => {
                statusDiv.textContent = "Private key stored in IndexedDB!";
            };

            addRequest.onerror = (event) => {
                statusDiv.textContent = "Error storing private key: " + event.target.error;
                console.error("IndexedDB store error:", event.target.error);
            };

            transaction.onerror = (event) => {
                statusDiv.textContent = "Transaction error: " + event.target.error;
                console.error("IndexedDB transaction error:", event.target.error);
            };
            db.close();
        };

    } catch (error) {
        statusDiv.textContent = "Error parsing key or storing in IndexedDB: " + error.message;
        console.error("Error:", error);
    }
}


// ... (Your other functions) ...

// Add an event listener to a "Store in IndexedDB" button (you'll need to add this button to your HTML)
const storeButton = document.createElement('button');
storeButton.textContent = "Store in IndexedDB";
storeButton.addEventListener('click', storePrivateKeyInIndexedDB);
document.body.appendChild(storeButton);









async function saveToIndexedDB() {
    const statusDiv = document.getElementById('status');
    const textValue = document.getElementById('myTextArea').value;

    if (!textValue) {
        statusDiv.textContent = "No text to save.";
        return;
    }

    try {
        const dbName = "myTextDB"; // Database name
        const storeName = "textStore"; // Object store name

        const request = indexedDB.open(dbName, 1); // Open the database (version 1)

        request.onerror = (event) => {
            statusDiv.textContent = "Error opening IndexedDB: " + event.target.error;
            console.error("IndexedDB error:", event.target.error);
        };

        request.onupgradeneeded = (event) => {
            const db = event.target.result;
            if (!db.objectStoreNames.contains(storeName)) {
                db.createObjectStore(storeName, { keyPath: "id" }); // Create store (keyPath is important!)
            }
        };

        request.onsuccess = (event) => {
            const db = event.target.result;
            const transaction = db.transaction([storeName], "readwrite"); // Readwrite transaction
            const store = transaction.objectStore(storeName);

            const data = {
                id: "privateKey", // Unique ID for your data (important!)
                text: textValue, // The text from the textarea
            };

            const putRequest = store.put(data); // Use 'put' to store or update

            putRequest.onsuccess = () => {
                statusDiv.textContent = "Text saved to IndexedDB!";
            };

            putRequest.onerror = (event) => {
                statusDiv.textContent = "Error saving text: " + event.target.error;
                console.error("IndexedDB put error:", event.target.error);
            };

            transaction.onerror = (event) => {
                statusDiv.textContent = "Transaction error: " + event.target.error;
                console.error("IndexedDB transaction error:", event.target.error);
            };
            db.close();
        };

    } catch (error) {
        statusDiv.textContent = "Error: " + error.message;
        console.error("Error:", error);
    }
}








// Retrive from private key from indexedDB
const textArea = document.getElementById('myTextArea');
const myButton = document.getElementById('myButton'); // Get the button element

function getTextFromIndexedDB(dbName, storeName, keyText) {
    const request = indexedDB.open(dbName);

    request.onerror = (event) => {
        console.error("Database open error:", event.target.error);
        textArea.value = "Error opening database.";
        myButton.style.display = 'block'; // Show button if error
    };

    request.onsuccess = (event) => {
        const db = event.target.result;

        // Check if the store exists *before* trying to use it
        if (!db.objectStoreNames.contains(storeName)) {
            console.log("Store does not exist:", storeName);
            myButton.style.display = 'block'; // Show the button if the store doesn't exist
            textArea.value = "Store not found.";
            db.close();
            return; // Exit early
        }


        const transaction = db.transaction(storeName, 'readonly');
        const store = transaction.objectStore(storeName);
        const getKeyRequest = store.get(keyText);

        getKeyRequest.onerror = (event) => {
            console.error("Get key error:", event.target.error);
            textArea.value = "Error retrieving data.";
            myButton.style.display = 'block'; // Show the button if there's an error
        };

        getKeyRequest.onsuccess = (event) => {
            myButton.style.display = 'none';

            if (event.target.result) {
                const value = event.target.result.text;
                textArea.value = value;
            } else {
                textArea.value = "Key not found.";
                myButton.style.display = 'block'; // Show the button if the key isn't found
            }
        };

        transaction.onerror = (event) => {
            console.error("Transaction error:", event.target.error);
            textArea.value = "Error during transaction.";
            myButton.style.display = 'block'; // Show the button if there's an error
        };

        transaction.oncomplete = () => {
            db.close();
        };
    };
}


// Example usage:
const dbName = 'myTextDB';
const storeName = 'textStore';
const keyText = 'privateKey';

document.addEventListener('DOMContentLoaded', () => {
    const myButton = document.getElementById('myButton'); // Make sure myButton is defined
    myButton.style.display = 'none'; // Initially hide the button
    getTextFromIndexedDB(dbName, storeName, keyText);
});
