@extends('layout')

@section('main-content')
<section class="section1">
    <div class="title">
        <p class="title-text">Вартові галактики</p>
    </div>
    <div class="content">
        <div class="wrap">
            <h1 class="tit">Герої</h1>
            <div class="heroes">
                <div class="hero">
                    <img src="../resources/img/1.png" alt="" class="h">
                    <p class="t">Грут</p>
                </div>
                <div class="hero">
                    <img src="../resources/img/2.png" alt="" class="h">
                    <p class="t">Ракета</p>
                </div>
                <div class="hero">
                    <img src="../resources/img/3.png" alt="" class="h">
                    <p class="t">Небула</p>
                </div>
                <div class="hero">
                    <img src="../resources/img/4.png" alt="" class="h">
                    <p class="t">Гамора</p>
                </div>
            </div>
            <button onclick="document.location='coment'" class="but">Залишити коментар</button>
        </div>
    </div>
</section>
@endsection