<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
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
        ]);

        DB::table('post')->insert([
            'title'=> 'Why this study choice?',
            'excerpt'=>'The study choice that I wanted to make was an important choice I
                had to make before coming to the Netherlands',
            'body'=> "Ever since I was little I have wanted to study abroad,
                fascinated by the beauty of the Netherlands and how good the people are.
                It got me interested in searching for a university here.
                I started by going to an exposition about different universities.
                Hz really caught my eye but it turned out that they didn't have an ICT program in English.
                A few years went by and I got myself into one of the open days at Hz.
                At that moment I just knew that this was the place for me by how you applied
                your studies and got to do so many real world projects and assignments.
                When I met the people then I understood that the environment was the best option for me too.
                I saw my future career starting here and all the connections I was going to
                make here. Those things motivate me. After 4 years I think I’m going to get not only the
                knowledge I need, but also experiences and friends that will last a lifetime, and maybe even a job.
                My goal is to become a Web Developer and by choosing this program
                I think I’m on the right path to achieving that goal.",
        ]);
        DB::table('post')->insert([
            'title'=> 'Personality analysis',
            'excerpt'=> 'What am I good at? What is my passion and dream job?',
            'body'=>"My strength is that I'm a very organized person.
            I like to plan out my week to know what I have to do and not to forget something important.
            I’m also a very optimistic person, and when I set my mind to something
            I do it no matter what. But on the flip side, when I get to planned out or overwork myself, I feel lost.
            One of my weaknesses is that sometimes I get too much in my head doing stuff or multitasking.
            But there’s always something good in the bad things, when I overwork myself
            I usually do something to get my mind off of it like running or reading which is good for your well-being.
            The threat that I have to face on my journey is that I get distracted easily, because
            I have too many thoughts in my head.",
        ]);
    }
}
