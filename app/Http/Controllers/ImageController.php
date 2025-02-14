<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

class ImageController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth'); // Protect all routes
//    }


    public function index(Request $request)
    {
        $images = $request->user()->images()->get(); // Get the user's images
        return view('images.index', compact('images')); // Create the images.index view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension(); // Unique filename
            $path = $image->store('images', 'public'); // Store in storage/app/public/images

            $request->user()->images()->create([
                'filename' => $filename,
                'path' => $path,
                'mime_type' => $image->getClientMimeType(),
                'size' => $image->getSize(),
            ]);

            return redirect()->route('images.index')->with('success', 'Image uploaded successfully.');
        }

        return back()->with('error', 'Image upload failed.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image): RedirectResponse
    {
        Gate::authorize('delete', $image);

        Storage::disk('public')->delete($image->path); // Delete from storage
        $image->delete();

        return redirect()->route('images.index')->with('success', 'Image deleted successfully.');
    }
}
