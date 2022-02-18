<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MockupController extends Controller
{
    //
    public function index()
    {
        return view('mockup.files');
    }

    public function resultado()
    {
        return view('mockup.resultado');
    }

    public function cargas()
    {
        return view('mockup.cargas');
    }
}
