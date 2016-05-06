<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Place;
use App\Gallery;
use App\Post;
use App\Area;

class HomeController extends Controller
{
    public function index()
    {
        $bestPlaces = Place::all()->sortByDesc(function($p){
            return $p->likeCount;
        })->take(6);

        $bestGalleries = Gallery::all()->sortByDesc(function($g){
            return $g->places->count();
        })->take(6);

        $bestAreas = Area::all()->sortByDesc(function($a){
            return $a->places->count();
        })->take(6);

        $latestPosts = Post::all()->sortByDesc('created_at')->take(6);

        return view('home.index')
            ->with('bestPlaces', $bestPlaces)
            ->with('bestGalleries', $bestGalleries)
            ->with('bestAreas', $bestAreas)
            ->with('latestPosts', $latestPosts);
    }
}
