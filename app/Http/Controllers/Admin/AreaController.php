<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Area;
use App\Place;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $areas = Area::all();
        return view('admin.area.index')
            ->withAreas($areas);
    }

    public function create()
    {
        return view('admin.area.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:20',
            'cover' => 'required|image'
        ));

        $area = new Area(array(
            'name' => $request->name,
            'cover' => $request->cover
        ));
        $area->save();

        Session::flash('success', 'Area was successfully created.');
        return redirect()->route('admin.areas.index');
    }

    public function show($id)
    {
        $area = Area::find($id);
        return view('admin.area.show')
            ->withArea($area);
    }

    public function edit($id)
    {
        $area = Area::find($id);
        return view('admin.area.edit')
            ->withArea($area);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' => 'required|max:20'
        ));

        $area = Area::find($id);
        $area->update([
            'name' => $request->name,
            'cover' => $request->cover
        ]);

        Session::flash('success', 'Area was successfully updated.');
        return redirect()->route('admin.areas.index');
    }

    public function destroy($id)
    {
        $area = Area::find($id);
        Place::where('area_id', $id)->update(['area_id' => 0]);
        $area->delete();

        Session::flash('success', 'Area was successfully deleted.');
        return redirect()->route('admin.areas.index');
    }
}