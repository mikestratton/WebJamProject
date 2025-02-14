<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
{{--                    {{ __("You're logged in!") }}--}}



                    <button class="export-keys inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-4">Generate Public/Private Key</button> <div id="status"></div>
                    <br>
                    <h1>Public Key</h1>
                    <form action="{{ route('keys.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <textarea name="key" class="exported-public" cols="120" rows="5" readonly placeholder="Public Key will be displayed here">

                        </textarea>
                            <button class="export-public inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-4">
                                Save Public Key to Server
                            </button>
                    </form>
{{--                    <div class="exported-public"></div>--}}

                   <br>
                    <br>
                    <h1>Private Key</h1>
                    <textarea id="myTextArea" class="exported-private" cols="120" rows="5" readonly placeholder="Private Key will be displayed here"></textarea>

                    <br><br>
                    <button onclick="saveToIndexedDB()" class="export-private export-keys inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mt-4">
                        Store Private Key in IndexedDB
                    </button>
                    <br>
                    <div id="status"></div>
                    <script src="{{ asset('js/crypto.js') }}"></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
