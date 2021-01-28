<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'title' => 'We Have A Skillest Team Ever',
            'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore',
            'image' => 'assets/img/others/5.jpg',
            'video' => '',
            'skill1' => 'Car Repair',
            'progress1' => '72%',
            'skill2' => 'Car Rental Service',
            'progress2' => '74%',
            'skill3' => 'Car Cleaning & Parts',
            'progress3' => '81%',
        ]);
    }
}
