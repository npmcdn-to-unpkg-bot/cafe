<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Place;

class QueryController extends Controller
{
    public function search(Request $request){
        $q = $request->q;

        if($q != ''){
            $query = '%'.$q.'%';

            $result = Place::where('name', 'like', $query)
                ->orWhere('description', 'like', $query)
                ->orWhere('address', 'like', $query)
                ->orWhere('character', 'like', $query)
                ->orWhere('review', 'like', $query)
                ->paginate(20)
                ->appends(['q' => $q]);

            return view('query.search')
                ->with('q', $q)
                ->withResult($result);
        }
        else{
            $error = 'Please specify a search query';
            return view('query.search')
                ->withError($error);
        }
    }
}