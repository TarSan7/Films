<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../resources/css/style.css">
    <title>Document</title>
</head>

<body>
    <header class="header">
        <img src="../resources/img/logo.png" alt="logo" class="logo">
        <div class="menu">
            <a href="main" class="item">Фільми</a>
            <a href="about" class="item">Опис</a>
            <a href="comment" class="item">Коментар</a>
            <a href="authorized" class="item">Авторизуватися</a>
            <a href="register" class="item">Реєстрація</a>
        </div>
        <p class="tel">+380(99)-88-77-654</p>
    </header>

    @yield('main-content')

    <footer class="footer">
        <div class="phrase">
            <p class="fot-text">@Все права защищены</p>
        </div>
    </footer>
</body>

</html>