<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('OurServices.index');
    }

    public function add()
    {
        return view('OurServices.add');
    }
}
