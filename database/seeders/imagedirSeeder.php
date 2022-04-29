<?php

/**
 * Note: The reason this seeder is created is to seed * the "dir" table.
 * 
 * -default images for my website portfolio
 * 
 */


namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class imagedirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dir')->insert(
            [
                [
                    'imagename' => 'profilepicture',
                    'imagepath' => 'images/profilepicture.JPG'
                ],
                [
                    'imagename' => 'skillone',
                    'imagepath' => 'images/skillone.png'
                ],
                [
                    'imagename' => 'skilltwo',
                    'imagepath' => 'images/skilltwo.png'
                ],   [
                    'imagename' => 'skillthree',
                    'imagepath' => 'images/skillthree.png'
                ],
                [
                    'imagename' => 'skillfour',
                    'imagepath' => 'images/skillfour.png'
                ],
                [
                    'imagename' => 'skillfive',
                    'imagepath' => 'images/skillfive.png'
                ],
                [
                    'imagename' => 'c-1',
                    'imagepath' => 'images/c-1.png'
                ],
                [
                    'imagename' => 'c-2',
                    'imagepath' => 'images/c-2.png'
                ],
                [
                    'imagename' => 'c-3',
                    'imagepath' => 'images/c-3.png'
                ],
                [
                    'imagename' => 'service-1',
                    'imagepath' => 'images/service-1.png'
                ],
                [
                    'imagename' => 'service-2',
                    'imagepath' => 'images/service-2.png'
                ],
                [
                    'imagename' => 'service-3',
                    'imagepath' => 'images/service-3.png'
                ],

            ]
        );
    }
}
