<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function add()
    {
        return view('testimonial.add');
    }

    public function submit(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->image =  $request->image->store('data/testimonial-img','public');
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->message = $request->message;
        $testimonial->save();
        return back()->with('message','Testimonial Uploaded Successfully!');
    }

    public function edit(Testimonial $testimonial, Request $request)
    {
        if ($request->getMethod() == 'POST') {
            if ($request->hasFile('image')) {
                $testimonial->image =  $request->image->store('data/testimonial-img','public');
            }
            $testimonial->name = $request->name;
            $testimonial->designation = $request->designation;
            $testimonial->message = $request->message;
            $testimonial->save();
            return redirect()->route('testimonial.add')->with('message','Testimonial Updated Successfully!');
        }else {
            return view('testimonial.edit',['item'=>$testimonial]);
        }
    }

    public function delete(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('message','Testimonial Deleted Successfully!');
    }
}
