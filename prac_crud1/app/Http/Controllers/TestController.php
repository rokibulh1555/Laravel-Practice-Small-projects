<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
        return view('file.index');
    }

    public function insert()
    {
        return view('file.insert');
    }

    public function create()
    {
        return view('file.create');
    }
}
