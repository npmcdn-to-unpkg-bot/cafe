<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Gallery;
use Session;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index')
            ->withGalleries($galleries);
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:60',
            'cover' => 'required|image'
        ));

        $gallery = new Gallery(array(
            'name' => $request->name,
            'cover' => $request->cover
        ));
        $gallery->save();

        Session::flash('success', 'Gallery was successfully created.');
        return redirect()->route('admin.galleries.index');
    }

    public function show($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.show')
            ->withGallery($gallery);
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit')
            ->withGallery($gallery);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|max:60'
        ));

        $gallery = Gallery::find($id);
        $gallery->update([
            'name' => $request->name,
            'cover' => $request->cover
        ]);

        Session::flash('success', 'Gallery was successfully updated.');
        return redirect()->route('admin.galleries.index');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->places()->detach();
        $gallery->delete();

        Session::flash('success', 'Gallery was successfully deleted.');
        return redirect()->route('admin.galleries.index');
    }

    public function removePlace($gallery_id, $place_id){
        $gallery = Gallery::find($gallery_id);
        $gallery->places()->detach($place_id);

        Session::flash('success', 'Place was successfully removed.');
        return redirect()->route('admin.galleries.show', $gallery_id);
    }
}