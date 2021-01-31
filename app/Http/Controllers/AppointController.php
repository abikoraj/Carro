<?php

namespace App\Http\Controllers;

use App\Models\Appoint;
use App\Models\Bodystyle;
use App\Models\CarBrand;
use App\Models\Location;
use App\Models\Solution;
use Illuminate\Http\Request;

class AppointController extends Controller
{
    public function add()
    {
        return view('back.appoint');
    }
    public function submit(Request $request)
    {
        $request->validate([
            'location_id'=>'required',
            'car_brand_id'=>'required',
            'bodystyle_id'=>'required'
        ]);
        $appoint = new Appoint();
        $appoint->name = $request->name;
        $appoint->email = $request->email;
        $appoint->phone = $request->phone;
        $appoint->location_id = $request->location_id;
        $appoint->car_brand_id = $request->car_brand_id;
        $appoint->bodystyle_id = $request->bodystyle_id;
        $appoint->model = $request->model;
        $appoint->year = $request->year;
        $appoint->service =implode(", ",$request->service) ;
        $appoint->message = $request->message;
        $appoint->save();
        // dd($appoint);
        return back()->with('Message','Appointment Submitted Successfully!');
    }

    public function carbrand(Request $request)
    {
        $brand = new CarBrand();
        $brand->name = $request->name;
        $brand->save();
        return back();
    }
    public function cardel (CarBrand $carbrand)
    {
        $carbrand->delete();
        return back();
    }

    public function bodystyle(Request $request)
    {
        $style = new Bodystyle();
        $style->name = $request->name;
        $style->save();
        return back();
    }
    public function bodydel (Bodystyle $bodystyle)
    {
        $bodystyle->delete();
        return back();
    }

    public function location(Request $request)
    {
        $location = new Location();
        $location->name = $request->name;
        $location->save();
        return back();
    }
    public function locndel (Location $location)
    {
        $location->delete();
        return back();
    }

    public function solution(Request $request)
    {
        $solution = new Solution();
        $solution->name = $request->name;
        $solution->save();
        return back();
    }

    public function solndel(Solution $solution)
    {
        $solution->delete();
        return back();
    }
}
