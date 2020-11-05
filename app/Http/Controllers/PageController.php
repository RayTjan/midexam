<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('index', compact('animals'));
    }
}
