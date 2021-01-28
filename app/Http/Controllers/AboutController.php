<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }
    public function add()
    {
        return view('about.add');
    }

    public function edit(About $about, Request $request)
    {
        if ($request->hasFile('image')) {
            $about->image = $request->image->store('data/about-pic','public');
        }
        $about->title = $request->title;
        $about->experience = $request->experience;
        $about->subtitle = $request->subtitle;
        $about->feature1 = $request->feature1;
        $about->feature2 = $request->feature2;
        $about->feature3 = $request->feature3;
        $about->feature4 = $request->feature4;
        $about->description = $request->description;
        $about->save();
        return back()->with('message','About Updated Successfully!');
    }
}
