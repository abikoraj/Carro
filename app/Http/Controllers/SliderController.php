<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function add()
    {
        return view('slider.add');
    }

    public function submit(Request $request)
    {
        $slider = new Slider();
        $slider->image = $request->image->store('data/slider-img','public');
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->description = $request->description;
        $slider->btn_text1 = $request->btn_text1;
        $slider->btn_link1 = $request->btn_link1;
        $slider->btn_text2 = $request->btn_text2;
        $slider->btn_link2 = $request->btn_link2;
        $slider->has_video = $request->has_video!=null ?1:0;
        $slider->video_link = $request->video_link;
        // dd($slider);
        $slider->save();
        return back()->with('message','Slider Added Successfully!');
    }

    public function edit(Slider $slider, Request $request)
    {
        if ($request->getMethod() == 'POST') {
            if ($request->hasFile('image')) {
                $slider->image = $request->image->store('data/slider-img','public');
            }
            $slider->title = $request->title;
            $slider->subtitle = $request->subtitle;
            $slider->description = $request->description;
            $slider->btn_text1 = $request->btn_text1;
            $slider->btn_link1 = $request->btn_link1;
            $slider->btn_text2 = $request->btn_text2;
            $slider->btn_link2 = $request->btn_link2;
            $slider->has_video = $request->has_video!=null ?1:0;
            $slider->video_link = $request->video_link;
            // dd($slider);
            $slider->save();
            return redirect()->route('slider.add')->with('message','Slider Updated Successfully!');
        }else {
            return view('slider.edit',['item'=>$slider]);
        }
    }

    public function delete(Slider $slider)
    {
        $slider->delete();
        return back()->with('message','Slider Deleted Successfully!');
    }
}
