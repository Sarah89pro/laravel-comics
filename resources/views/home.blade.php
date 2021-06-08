  
@extends('layouts.main')

@section('content')

<!--Main-->
    <section class="hero">
        <div class="container">
            <div class="cards">
                @foreach ($cards as $card)
                    <div class="card">
                        <img src="{{ $card['image']}}" alt="{{$card['title'] }}">
                        <h4 class="card-title"> {{ $card['title'] }}</h4>
                    </div>
                    
                @endforeach
            </div>
            <button>Load more</button>
        </div>
    </section>
@endsection