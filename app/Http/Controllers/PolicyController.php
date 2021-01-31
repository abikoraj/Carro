<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index()
    {
        return view('privacy-policy');
    }

    public function add()
    {
        return view('back.addPrivacyPolicy');
    }

    public function edit( Request $request)
    {
        $policy=Policy::first();
        if($policy==null){
            $policy=new Policy();
        }
        $policy->details = $request->details;
        $policy->save();
        return back()->with('message','Privacy Policy Updated Successfully!');
    }
}
