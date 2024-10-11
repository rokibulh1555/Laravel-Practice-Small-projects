<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Controllers\Client;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('note.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    public function insert()
    {
        return view('note.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person = new Note;
        $person->name = $request->input('name');
        $person->email = $request->input('email');
        $person->message = $request->input('message');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'. $extension;
            $file->move('uploads/', $filename);
            $person->image = $filename;
        }
//        @dd($request->file('image'));
        $person->save();

        return redirect()->route('note.insert')->with('success', 'Note added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        $person = Note::all();
        return view('note.show', compact('person'))->with('success', 'Note added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {


        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'. $extension;
            $file->move('uploads/', $filename);
            $note->image = $filename;


        }

        $note->save();
        return redirect()->route('note.show')->with('success', 'Note updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('note.show')->with('success', 'Note deleted successfully');
    }

}
