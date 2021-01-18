<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        return view('back.header-settings');
    }

    public function edit(Header $header, Request $request)
    {
        // dd($request);
        if($request->hasFile('logo')){
            $header->logo = $request->logo->store('data', 'public');
        }
        $header->address = $request->address;
        $header->phone = $request->phone;
        $header->email = $request->email;
        $header->facebook = $request->facebook;
        $header->twitter = $request->twitter;
        $header->instagram = $request->instagram;
        $header->save();
        // dd($header);
        return back()->with('message','Header Settings Updated Successfully!');
    }
}
