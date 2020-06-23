<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Idea;

class IdeasController extends Controller
{
    //
    public function index(){
        // another way to get data from the back end
        // $ideas = Idea::all();

        return view('ideas.index')->with('ideas', Idea::all());
    }
}
