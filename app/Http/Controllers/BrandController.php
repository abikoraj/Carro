<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function add()
    {
        return view('back.brands');
    }

    public function submit(Request $request)
    {
        $brand = new Brand();
        $brand->image = $request->image->store('data/brand-img','public');
        $brand->save();
        return back()->with('message','Brand Added Successfully!');
    }

    public function delete(Brand $brand)
    {
        $brand->delete();
        return back()->with('message','Brand Deleted Successfully');
    }
}
