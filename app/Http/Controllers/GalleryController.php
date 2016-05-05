<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12);
        return view('gallery.index')
            ->withGalleries($galleries);
    }

    public function show($id)
    {
        $gallery = Gallery::find($id);
        $places = $gallery->places()->paginate(8);
        return view('gallery.show')
            ->withGallery($gallery)
            ->withPlaces($places);
    }
}
