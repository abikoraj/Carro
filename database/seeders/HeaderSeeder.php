<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Seeder;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::create([
            'logo'=>'assets/img/logo.png',
            'address'=>'15/A, Nest Tower, NYC',
            'phone'=>'9800000000',
            'email'=>'test@example.com',
            'facebook'=>'facebook.com',
            'twitter'=>'twitter.com',
            'instagram'=>'instagram.com'
        ]);
    }
}
