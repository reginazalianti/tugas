<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenController extends Controller
{
    //
    public function index()
    {
        //
        return view('kalkulator.kalkulator1');
    }
    public function calc1()
    {
        return view('kalkulator.calc1');
    }
}
