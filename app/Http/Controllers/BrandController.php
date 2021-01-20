<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function add()
    {
        return view('back.brands');
    }

    public function submit(Request $request)
    {
        return $request->input();
    }
}
