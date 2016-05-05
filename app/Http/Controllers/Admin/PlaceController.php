<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Place;
use App\Gallery;
use DB;

class PlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $places = Place::all();
        return view('admin.place.index')->withPlaces($places);
    }

    public function create()
    {
        $galleries = DB::table('galleries')->select('id', 'name')->get();
        return view('admin.place.create')
            ->withGalleries($galleries);
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'cover' => 'required|image',
            'description' => 'required|max:255',
            'space_point' => 'required|numeric',
            'service_point' => 'required|numeric',
            'quality_point' => 'required|numeric',
            'address_point' => 'required|numeric',
            'price_point' => 'required|numeric',
            'address' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'open_time' => 'required|max:255',
            'close_time' => 'required|max:255',
            'start_price' => 'required|numeric',
            'end_price' => 'required|numeric',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'character' => 'required',
            'review' => 'required'
        ));

        $place = new Place(array(
            'name' => $request->name,
            'cover' => $request->cover,
            'description' => $request->description,
            'space_point' => $request->space_point,
            'service_point' => $request->service_point,
            'quality_point' => $request->quality_point,
            'address_point' => $request->address_point,
            'price_point' => $request->price_point,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'start_price' => $request->start_price,
            'end_price' => $request->end_price,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'character' => $request->character,
            'review' => $request->review
        ));
        Auth::user()->places()->save($place);
        Place::find($place->id)->galleries()->attach($request->galleries);

        Session::flash('success', 'Place was successfully saved.');
        return redirect()->route('admin.places.index');
    }

    public function edit($id)
    {
        $place = Place::find($id);
        $galleries = DB::table('galleries')->select('id', 'name')->get();
        $selectedGalleries = DB::table('gallery_place')->select('gallery_id')->where('place_id', $id)->get();

        $galleriesMap = [];
        foreach($galleries as $gallery){
            $galleriesMap[$gallery->id] = $gallery->name;
        }

        $selectedGalleriesMap = collect($selectedGalleries)->map(function($g){
            return $g->gallery_id;
        })->toArray();

        return view('admin.place.edit')
            ->withPlace($place)
            ->with('galleriesMap', $galleriesMap)
            ->with('selectedGalleriesMap', $selectedGalleriesMap);
    }

    public function update(Request $request, $id)
    {
        $place = Place::find($id);

        $this->validate($request, array(
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'space_point' => 'required|numeric',
            'service_point' => 'required|numeric',
            'quality_point' => 'required|numeric',
            'address_point' => 'required|numeric',
            'price_point' => 'required|numeric',
            'address' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'open_time' => 'required|max:255',
            'close_time' => 'required|max:255',
            'start_price' => 'required|numeric',
            'end_price' => 'required|numeric',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'character' => 'required',
            'review' => 'required'
        ));

        $place->update([
            'name' => $request->name,
            'cover' => $request->cover,
            'description' => $request->description,
            'space_point' => $request->space_point,
            'service_point' => $request->service_point,
            'quality_point' => $request->quality_point,
            'address_point' => $request->address_point,
            'price_point' => $request->price_point,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'start_price' => $request->start_price,
            'end_price' => $request->end_price,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'character' => $request->character,
            'review' => $request->review
        ]);

        $place->galleries()->sync($request->galleries);

        Session::flash('success', 'Place was successfully updated.');
        return redirect()->route('admin.places.index');
    }

    public function destroy($id)
    {
        $place = Place::find($id);
        $place->comments()->delete();
        $selectedGalleries = collect(DB::table('gallery_place')->select('gallery_id')->where('place_id', $id)->get())
            ->map(function($g){
                return $g->gallery_id;
            })
            ->toArray();
        $place->galleries()->detach($selectedGalleries);
        $place->delete();

        Session::flash('success', 'Place was successfully deleted.');
        return redirect()->route('admin.places.index');
    }
}