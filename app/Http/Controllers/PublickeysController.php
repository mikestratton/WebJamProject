<?php

namespace App\Http\Controllers;

use App\Models\Publickey;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use Illuminate\View\View;

class PublickeysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('keys.index', [
            'key' => Publickey::with('user')->latest()->first(),
        ]);

//        return view('keys.index', compact('key'));
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
        $data = ([
            'key' => $request->get('key')
        ]);

        $user = Auth::user();
        if ($user->publickey()->count() === 0){
            $request->user()->publickey()->create($data);
        }


        return redirect(route('keys.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Publickey $publickey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publickey $publickey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publickey $publickey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publickey $publickey)
    {
        //
    }
}
