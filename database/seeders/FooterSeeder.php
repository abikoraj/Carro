<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'day'=>'Sunday',
            'time'=>'07:00AM-20:00PM'
        ]);
        Footer::create([
            'day'=>'Monday',
            'time'=>'07:00AM-20:00PM'
        ]);
        Footer::create([
            'day'=>'Tuesday',
            'time'=>'07:00AM-20:00PM'
        ]);
        Footer::create([
            'day'=>'Wednesday',
            'time'=>'07:00AM-20:00PM'
        ]);
        Footer::create([
            'day'=>'Thursday',
            'time'=>'07:00AM-20:00PM'
        ]);
        Footer::create([
            'day'=>'Friday',
            'time'=>'07:00AM-20:00PM'
        ]);
        Footer::create([
            'day'=>'Saturday',
            'time'=>'Official Holiday'
        ]);
    }
}
