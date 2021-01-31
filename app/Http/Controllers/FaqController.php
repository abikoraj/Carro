<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return view('faq');
    }

    public function add()
    {
        return view('back.addfaq');
    }

    public function submit(Request $request)
    {
        $faq = new Faq();
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        // dd($faq);
        $faq->save();
        return back()->with('message','FAQ Added Successfully!');
    }

    public function edit(Faq $faq, Request $request)
    {
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        // dd($faq);
        $faq->save();
        return back()->with('message','FAQ Updated Successfully!');
    }

    public function delete(Faq $faq)
    {
        $faq->delete();
        return back()->with('message','FAQ Deleted Successfully!');
    }
}
