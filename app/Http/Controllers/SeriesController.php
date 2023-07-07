<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    
    public function index(Request $request)
    
    {
       //return  $request->get(key:'id');
       //return redirect(to: 'https://google.com');

        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatony'
        ];

        return view('series.index',compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }
}
