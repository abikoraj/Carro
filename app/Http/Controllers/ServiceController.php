<?php

namespace App\Http\Controllers;

use App\Models\Service;
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

    public function submit(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->subtitle = $request->subtitle;
        $service->feature1 = $request->feature1;
        $service->feature2 = $request->feature2;
        $service->feature3 = $request->feature3;
        $service->feature4 = $request->feature4;
        $service->image = $request->image->store('data/service-img','public');
        $service->save();
        return back()->with('message','Service Uploaded Successfully!');
        // dd($service);
    }

    public function edit(Service $service, Request $request)
    {
        if ($request->getMethod() == 'POST') {
            if ($request->hasFile('image')) {
                $service->image = $request->image->store('data/service-img','public');
            }
            $service->title = $request->title;
            $service->subtitle = $request->subtitle;
            $service->feature1 = $request->feature1;
            $service->feature2 = $request->feature2;
            $service->feature3 = $request->feature3;
            $service->feature4 = $request->feature4;
            $service->save();
            return redirect()->route('services.add')->with('message','Service Updated Successfully!');
        }else {
            return view('OurServices.edit',['item'=>$service]);
        }
    }

    public function delete(Service $service)
    {
        $service->delete();
        return back()->with('message','Service Deleted Successfully!');
    }
}
