<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([

            'question'=> 'How can you print a document from your laptop at HZ?',
            'answer'=> 'Go to https://print.hz.nl -> login with your hz account ->
            Choose a file and upload it -> select the printer -> place the card on printer card scaner
            -> choose the file-> click print-Easy right!',
            'link'=> 'tab-1'
        ]);

        DB::table('faqs')->insert([

            'question'=> 'How can you scan a document a send it to your laptop at HZ?',
            'answer'=> 'Register using your HZ pass on the TouchID next to the multifunctional printer.
            In the TouchID menu, select option Scanning - Scan.
            Lay the original sheet on the feeder or glass plate.
            Press Scan and Send.Press Scan to me.Press Yes.
            Press the Start button.Press the green Start button on the printer to scan page by page.
            Once this is ready, press Start Sending.When scanning is completed, press Stop on the TouchID
            , followed by Logout.',
            'link'=> 'tab-2'
        ]);

        DB::table('faqs')->insert([

            'question'=> 'What do you need to do when you are sick / show symptoms of coronavirus?',
            'answer'=> 'Stay at home and inform your study programme coordinator or manager.If the symptoms worsen,
            contact your doctor by telephone.Also immediately inform your study programme
            coordinator or manager if you suspect you are infected with the coronavirus.
            Are you an international student? Then please also inform International Office,
            by e-mail: internationaloffice@hz.nl',
            'link'=> 'tab-3'
        ]);

        DB::table('faqs')->insert([

            'question'=> 'How can you book a project space in one of the wings?',
            'answer'=> 'Go to myHz.nl -> click on AVReserveren on the personal
            menu ->Login in if you need to -> chose a room (available) ->
            click and slide until the desired time-> fill out your phone number and and info
             about why your gonna use the room and how many people there gonna be-> and click reserve',
            'link'=> 'tab-4'
        ]);

        DB::table('faqs')->insert([

            'question'=> 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer'=> 'Free parking is possible on the car park of PZEM at the
            Poelendaelesingel 10 in Middelburg. Students and staff can only enter
            by presenting their HZ pass at the barriers, guests can ring the bell at
            the barrier. After passing the barrier, follow the signs to the HZ parking
             places, marked with a white sign with the HZ logo.',
            'link'=> 'tab-5'
        ]);
    }
}
