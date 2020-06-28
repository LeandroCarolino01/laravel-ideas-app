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

    public function show($ideaId){
        return view('ideas.show')->with('idea', Idea::find($ideaId));
    }

    public function create(){
        return view('ideas.create');
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required|min:4|max:16',
            'description' => 'required'
        ]);

        $data = request()->all();

        $idea = new Idea();

        $idea->name = $data['name'];

        $idea->description = $data['description'];

        $idea->completed = false;

        $idea->save();

        return redirect('/ideas');
    }

    public function edit($ideaId){
        $idea = Idea::find($ideaId);

        return view('ideas.edit')->with('idea', $idea);
    }

    public function update($ideaId){
        $this->validate(request(), [
            'name' => 'required|min:4|max:16',
            'description' => 'required'
        ]);

        $data = request()->all();

        $idea = Idea::find($ideaId);

        $idea->name = $data['name'];

        $idea->description = $data['description'];

        $idea->save();

        return redirect('/ideas');
    }
}
