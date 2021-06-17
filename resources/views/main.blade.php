@extends('layout')

@section('main-content')
<section class="section1">
    <div class="title">
        <p class="title-text">Наші Фільми</p>
    </div>
    <div class="content">
        @foreach($films as $film)
            <div class="film">
                <img src= " {{ $film['image'] }} " alt="" class="img">
                <div class="wrap">
                    <h1 class="tit">{{ $film['film'] }}</h1>
                    <p class="text">
                        {{ $film['description'] }}
                    </p>
                    <button onclick="document.location='about'" class="but">Детальніше</button>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</section>
@endsection