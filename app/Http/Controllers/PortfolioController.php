<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Tag;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio.index');
    }
    public function add()
    {
        return view('portfolio.add');
    }

    public function tag(Request $request)
    {
        $tag = new Tag();
        $tag->tag = $request->tag;
        $tag->save();
        return back()->with('message','Tag Added Successfully!');
    }

    public function tagDel(Tag $tag)
    {
        $tag->delete();
        return back()->with('message','Tag Deleted Successfully!');
    }

    public function submit(Request $request)
    {
        $porto = new Portfolio();
        $porto->image = $request->image->store('data/gallary-pic','public');
        $porto->tag = $request->tag;
        $porto->save();
        return back()->with('message','Portfolio Uploaded Successfully!');
    }

    public function delete(Portfolio $porto)
    {
        $porto->delete();
        return back()->with('message','Image Deleted Successfully!');
    }
}
