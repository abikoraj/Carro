<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function add()
    {
        return view('Offer.add');
    }

    public function edit(Offer $offer, Request $request)
    {
        if ($request->hasFile('image')) {
            $offer->image = $request->image->store('data','public');
        }
        $offer->title = $request->title;
        $offer->btn_text = $request->btn_text;
        $offer->btn_link = $request->btn_link;
        // dd($offer);
        $offer->save();
        return back()->with('message','Offer Updated Successfully!');
    }
}
