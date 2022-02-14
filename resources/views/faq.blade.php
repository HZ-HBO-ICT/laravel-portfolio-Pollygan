@extends('layout')

@section('header')
<head>
    <link rel="stylesheet" href=".\css\faq.css">
    <title>FAQ</title>
</head>
@endsection
@section('content')
    <div class="wrapper">
        <h6>FAQ</h6>

        <ul>
            @foreach($faq as $post)
                <li>{{ $post->question }}</li>
            @endforeach
        </ul>

        <ul>
            @foreach($faq as $post)
                <li>{{ $post->answer }}</li>
            @endforeach
        </ul>
        <div class="wrap-1">
            <input type="radio" id="tab-1" name="tabs">
            <label for="tab-1"><div>1. How can you print a document from your laptop at HZ?</div><div class="cross"></div></label>
            <div class="content">Go to https://print.hz.nl -> login with your hz account -> Choose a file and upload it -> select the printer -> place the card on printer card scaner -> choose the file-> click print-Easy right!</div>
        </div>

        <div class="wrap-2">
            <input type="radio" id="tab-2" name="tabs">
            <label for="tab-2"><div>2. How can you scan a document a send it to your laptop at HZ?</div><div class="cross"></div></label>
            <div class="content">Register using your HZ pass on the TouchID next to the multifunctional printer.In the TouchID menu, select option Scanning - Scan.Lay the original sheet on the feeder or glass plate.Press Scan and Send.Press Scan to me.Press Yes.Press the Start button.Press the green Start button on the printer to scan page by page. Once this is ready, press Start Sending.When scanning is completed, press Stop on the TouchID, followed by Logout.
            </div>
        </div>

        <div class="wrap-3">
            <input type="radio" id="tab-3" name="tabs">
            <label for="tab-3"><div>3. What do you need to do when you are sick / show symptoms of coronavirus?</div><div class="cross"></div></label>
            <div class="content">Stay at home and inform your study programme coordinator or manager.If the symptoms worsen, contact your doctor by telephone.Also immediately inform your study programme coordinator or manager if you suspect you are infected with the coronavirus.Are you an international student? Then please also inform International Office, by e-mail: internationaloffice@hz.nl</div>
        </div>

        <div class="wrap-4">
            <input type="radio" id="tab-4" name="tabs">
            <label for="tab-4"><div>4. How can you book a project space in one of the wings?</div><div class="cross"></div></label>
            <div class="content">Go to myHz.nl -> click on AVReserveren on the peronal menu ->Login in if you need to -> chose a room (available) -> click and slide untill the desired time-> fill out your phone number and and info about why youre gonna use the room and how many people there gonna be-> and click reserve</div>
        </div>

        <div class="wrap-5">
            <input type="radio" id="tab-5" name="tabs">
            <label for="tab-5"><div>5. What are the instructions if you want to park your car at the HZ parking lot?</div><div class="cross"></div></label>
            <div class="content">Free parking is possible on the car park of PZEM at the Poelendaelesingel 10 in Middelburg. Students and staff can only enter by presenting their HZ pass at the barriers, guests can ring the bell at the barrier. After passing the barrier, follow the signs to the HZ parking places, marked with a white sign with the HZ logo.</div>
        </div>
    </div>
@endsection
