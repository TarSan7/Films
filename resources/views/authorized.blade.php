@extends('layout')

@section('main-content')
<section class="section2">
    <div class="title">
        <p class="title-text">Авторизуйтеся</p>
    </div>

    <div class="content">
        <form action="{{ route('userdata') }}" class="form" method="get">
            @csrf
            <label for="text" class="label">Введіть логін</label>
            <input type="text" placeholder="Введіть логін..." required class="name" name="login">
            <label for="password" class="label">Введіть пароль</label>
            <input type="password" required class="password" name="password">
            <a href="{{ route('userdata') }}" class="btn"><button type="submit" class="but">Зайти</button></a>
        </form>
        
    </div>
</section>
@endsection