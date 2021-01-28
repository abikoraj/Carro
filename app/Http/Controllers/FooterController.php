<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function add()
    {
        return view('back.footer-setting');
    }

    public function edit(Footer $footer, Request $request)
    {
        $footer->day = $request->day;
        $footer->time = $request->time;
        $footer->save();
        // dd($footer);
        return back()->with('message','Operating Hours Updated Successfully!');
    }
}
