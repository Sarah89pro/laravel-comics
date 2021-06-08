@extends('layouts.main')

@section('content')

<!--News Section-->
<main>
    <div class="container">
        <div class="center">
            <video autoplay controls loop>
                <source src="{{ asset('img/Obi-Wan Says Hello There.mp4') }}" type="video/mp4">
                <source src="{{ asset('img/Obi-Wan Says Hello There.mp4') }}"type="video/webm">
            </video>
        </div>
        
    </div>
</main>

@endsection