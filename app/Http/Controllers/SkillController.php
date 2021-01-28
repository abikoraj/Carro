<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function add()
    {
        return view('skills.add');
    }

    public function edit(Skill $skill, Request $request)
    {
        if ($request->hasFile('image')) {
            $skill->image = $request->image->store('data','public');
        }
        $skill->title = $request->title;
        $skill->subtitle = $request->subtitle;
        $skill->video = $request->video;
        $skill->skill1 = $request->skill1;
        $skill->progress1 = $request->progress1;
        $skill->skill2 = $request->skill2;
        $skill->progress1 = $request->progress1;
        $skill->skill3 = $request->skill3;
        $skill->progress1 = $request->progress1;
        $skill->save();
        // dd($skill);
        return back()->with('message','Skills Updated Successfully!');
    }
}
