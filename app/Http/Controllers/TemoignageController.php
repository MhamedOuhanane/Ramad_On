<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    public function index()
    {
        return view('client.temoignages.index');
    }

    public function show($id)
    {
        return view('client.temoignages.show');
    }
}
