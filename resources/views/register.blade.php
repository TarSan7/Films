@extends('layout')

@section('main-content')
<section class="section2">
    <div class="title">
        <p class="title-text">Зареєструйтеся</p>
    </div>

    <div class="content">
        <form action="{{ route('register-data') }}" class="form" method="post">
            @csrf
            <label for="text" class="label">Введіть ім'я</label>
            <input type="text" placeholder="Введіть ім'я..." required class="name" name="user_name">
            <label for="text" class="label">Введіть логін</label>
            <input type="text" placeholder="Введіть логін..." required class="name" name="login">
            <label for="password" class="label">Введіть пароль</label>
            <input type="password" required class="password" name="password">
            <a href="{{ route('register-data') }}" class="btn"><button type="submit" class="but">Зареєструватися</button></a>
        </form>
       
    </div>
</section>
@endsection