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

    public function show(Idea $idea){
        return view('ideas.show')->with('idea', $idea);
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

        session()->flash('success', 'idea created successfully.');

        return redirect('/ideas');
    }

    public function edit(Idea $idea){
        

        return view('ideas.edit')->with('idea', $idea);
    }

    public function update(Idea $idea){
        $this->validate(request(), [
            'name' => 'required|min:4|max:16',
            'description' => 'required'
        ]);

        $data = request()->all();


        $idea->name = $data['name'];

        $idea->description = $data['description'];

        $idea->save();

        
        session()->flash('success', 'idea updated successfully.');

        return redirect('/ideas');
    }

    public function destroy(Idea $idea){
       

        $idea->delete();

        
        session()->flash('success', 'idea deleted successfully.');

        return redirect('/ideas');
    }
}
