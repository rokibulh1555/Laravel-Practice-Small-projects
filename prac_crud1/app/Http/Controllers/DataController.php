<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('file.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('file.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string'],
        ]);

        $name = $request->input('name');
        $email = $request->input('email');

        DB::insert('INSERT INTO info(name, email) VALUES(?, ?)', [$name, $email]);

        return redirect()->route('file.insert')->with('message', 'Data stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Data $rokib)
    {
        $temp = DB::select('SELECT * from info');
        return view('file.show', ['rokib' => $temp]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Data $data)
    {
        $id = $data;
        DB::select('SELECT * from info WHERE id = ?',[$id]);
        return view('file.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data $data)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        DB::update('UPDATE info SET name = ?, email = ?  WHERE id=?',[$name, $email, $data->id] );

        return redirect()->route('file.show')->with('message', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        $data->delete();

        return redirect()->route('file.show')->with('message', 'Data deleted successfully');
    }

    public function insert()
    {
        return view('file.insert');
    }
}
