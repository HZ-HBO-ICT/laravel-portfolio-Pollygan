<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title'=> 'Programming experience',
            'excerpt'=>'My experience began with the basics of programming and learning about computer',
            'body'=> "Not counting my programming experience as a very young gamer.
            My journey began in high school when I applied to a school with an
            ICT program. Where we learned how to use Microsoft Excel, Powerpoint and Word.
            We also learned how to code with CSS, HTML and, C#. I worked on a lot of homework on these subjects.
            Then right in the beginning of 8th grade I joined a robotics club where one of the projects
            was to build a lego robot and code it to move to a line. We even had a coding week almost twice a year.
            I even made a simple website for one of my assignments.
            I had finished a course about Web development, requirements and a Photoshop course.
            This year I made a project in which we didn't finish a short animation clip.",
            'class'=>'pe'
        ]);

            DB::table('articles')->insert([
                'title'=> 'First feedback',
                'excerpt'=>'My feedback very much helped me get to know myself better.',
                'body'=> "My feedback very much helped me get to know myself better.
                 Who I am as a person . But my opportunities were kinda the same as my strength and
                 I had to put more information about me on the SKC document. I learned that
                 sometimes I have to go with the flow, and not stress all the time about organizing.",
                'class'=>'ff'
            ]);
        DB::table('articles')->insert([
            'title'=> 'Just why?',
            'excerpt'=> 'IT the thing you heard me talk about in this blog a lot.',
            'body'=>"IT the thing you heard me talk about in this blog a lot.
             Most of my childhood I was on a computer playing games you know like a normal girl.
             Because of that I started to think how I can make that game or how I could improve this website,
             also I am a very creative person and I randomly come up with solutions that could
             make peoples life more easier or help them. IT is the future and I want to be part of it.
             I find it fascinating how technologies improve every year, how they work and what you could do with
             just technologies these days and they are everywhere.
             My dream job was to become a web designer because I know I like IT and I'm very creative person,
             but then I learned about web development and I found out that is not only about designing the websites,
             it's about building and maintaining the whole aspect of the websites it's more
             complicated than just design and creativeness. This job is much harder and I like
             that thought and I just want to prove myself as a woman that I could be a web
             developer and be in the IT field.",
            'class'=>'b5'
        ]);
    }
}
