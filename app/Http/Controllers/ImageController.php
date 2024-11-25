<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $images = Image::paginate();

        return view('image.index', compact('images'))
            ->with('i', ($request->input('page', 1) - 1) * $images->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $image = new Image();

        return view('image.create', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $file = $request->file('image');
        $path = $file->store('images', 'public');
    
        $image = new Image();
        $image->filename = $file->getClientOriginalName();
        $image->path = $path;
        $image->save();
    
        return redirect()->route('images.index')
                         ->with('image', $image) // Pasar la imagen a la vista
                         ->with('success', 'Imagen subida exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $image = Image::find($id);

        return view('image.show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $image = Image::find($id);

        return view('image.edit', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ImageRequest $request, Image $image): RedirectResponse
    {
        $image->update($request->validated());

        return Redirect::route('images.index')
            ->with('success', 'Image updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Image::find($id)->delete();

        return Redirect::route('images.index')
            ->with('success', 'Image deleted successfully');
    }
}
