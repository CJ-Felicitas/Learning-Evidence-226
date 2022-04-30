<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class textcontentseeder extends Seeder
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
                    'title' => 'name',
                    'content' => 'Cedrick James Felicitas'
                ],
                [
                    'title' => 'about me',
                    'content' => "About Me
                    Hi, my name is Cedrick James Felicitas a Filipino citizen and a student. I'm currently studying at University of Southeastern Philippines (USeP) and my course is Bachelor of Science in Information Technology major in Information Security. I'm looking forward to learn more about Web Development."
                ],
                [
                    'title' => 'skillone',
                    'content' => 'PHP'
                ],
                [
                    'title' => 'skilltwo',
                    'content' => 'HTML'
                ],
                [
                    'title' => 'skillthree',
                    'content' => 'JAVA'
                ],
                [
                    'title' => 'skillfour',
                    'content' => 'CSS'
                ],
                [
                    'title' => 'skillfive',
                    'content' => 'JAVASCRIPT'
                ],
                [
                    'title' => 'service-1',
                    'content' => 'Build A Web Application'
                ],
                [
                    'title' => 'service-2',
                    'content' => 'MySQL Database'
                ],
                [
                    'title' => 'service-3',
                    'content' => 'Problem Solving'
                ],

                [
                    'title' => 'contact',
                    'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type spsecimen book"
                ],



            ]
        );
    }
}
