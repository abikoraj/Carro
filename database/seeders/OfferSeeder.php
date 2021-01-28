<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offer::create([
            'image' => 'assets/img/bg/10.png',
            'title' => 'Get A Free Car Service',
            'btn_text' => 'GET AN APPOINTMENT',
            'btn_link' => 'appointment'
        ]);
    }
}
