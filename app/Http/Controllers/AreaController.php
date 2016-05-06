<?php

namespace App\Http\Controllers;
use App\Area;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all()->sortByDesc(function($a){
            return $a->places->count();
        });
        return view('area.index')
            ->withAreas($areas);
    }

    public function show($id)
    {
        $area = Area::find($id);
        $places = $area->places()->paginate(12);
        return view('area.show')
            ->withArea($area)
            ->withPlaces($places);
    }
}