<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sample extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('textcontents')->insert(
            [
                [
                    'title' => 'socialmedialinkone',
                    'content' => "https://www.facebook.com/Joyful.Burgerr/"
                ],
                [
                    'title' => 'socialmedialinktwo',
                    'content' => "https://www.linkedin.com/in/cedrick-james-felicitas-851547203/"
                ],
                [
                    'title' => 'socialmedialinkthree',
                    'content' => "https://github.com/CJ-Felicitas"
                ]

            ]




        );
    }
}
