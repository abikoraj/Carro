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
        if($request->hasFile('header_img')){
            $header->header_img = $request->header_img->store('data', 'public');
        }
        $header->address = $request->address;
        $header->address2 = $request->address2;
        $header->phone = $request->phone;
        $header->phone2 = $request->phone2;
        $header->email = $request->email;
        $header->email2 = $request->email2;
        $header->facebook = $request->facebook;
        $header->twitter = $request->twitter;
        $header->instagram = $request->instagram;
        $header->save();
        // dd($header);
        return back()->with('message','Header Settings Updated Successfully!');
    }
}
