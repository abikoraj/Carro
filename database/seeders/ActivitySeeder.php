<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create([
            'image' => 'assets/img/bg/5.jpg',
            'title' => 'It’s Our Journey',
            'activity1' => 'Active Clients',
            'value1' => '733',
            'activity2' => 'Cup Of Coffee',
            'value2' => '33K',
            'activity3' => 'Get Rewards',
            'value3' => '100',
            'activity4' => 'Country Cover',
            'value4' => '21'
        ]);
    }
}
