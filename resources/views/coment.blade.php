@extends('layout')

@section('main-content')
<section class="section2">
    <div class="title">
        <p class="title-text">Залиште Ваш коментар</p>
    </div>

    @if($errors->any())
    <div class="">
        <ul>
            @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="content">
        <form action="comment/data" class="form" method="POST">
            @csrf
            <label for="name" class="label">ПІБ (прізвище, ім’я, по-батькові)</label>
            <input type="text" placeholder="Введіть ім'я..." required class="name" name="name">
            <label for="date" class="label">Сьогоднішня дата</label>
            <input type="date" required class="date" name="date">
            <label for="comment" class="label">Ваш Коментар</label>
            <textarea type="comment" placeholder="Введіть текст..." required class="coment" name="comment"></textarea>
            <p class="btn"><button type="submit" class="but">Відправити</button></p>
        </form>
        <h1 class="title-text">Всі коментарі</h1>
        <form action="comment/user" class="form" method="POST">
            <label for="name" class="label">Пошук по імені користувача</label>
            <input type="text" placeholder="Введіть ім'я..." required class="name" name="user_name">
            <p class="btn"><button type="submit" class="but">Шукати</button></p>
        </form>
        @foreach($data as $oneCom)
        <div class="comentar">
            <div class="comentWrap">
                <h2 class="title">{{ $oneCom -> name }}</h2>
                <p class="dateCom">{{ $oneCom -> date }}</p>
            </div>

            <hr>
            <p class="content-com">{{ $oneCom -> comment }}</p>
        </div>
        @endforeach
    </div>
</section>
@endsection