<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function add()
    {
        return view('activity.add');
    }

    public function edit(Activity $activity, Request $request)
    {
        if ($request->hasFile('image')) {
            $activity->image = $request->image->store('data/activity-pic','public');
        }
        $activity->title = $request->title;
        $activity->activity1 = $request->activity1;
        $activity->value1 = $request->value1;
        $activity->activity2 = $request->activity2;
        $activity->value2 = $request->value2;
        $activity->activity3 = $request->activity3;
        $activity->value3 = $request->value3;
        $activity->activity4 = $request->activity4;
        $activity->value4 = $request->value4;
        $activity->save();
        // dd($activity);
        return back()->with('message','Activity Updated Successfully!');
    }
}
