<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .letter {
            color: red; /* Красный цвет символов */
            font-size: 200%; /* Размер шрифта в процентах */
            font-family: serif; /* Шрифт с засечками */
            position: relative; /* Относительное позиционирование */
            top: 5px; /* Сдвиг сверху */
        }
    </style>
</head>
<body>
<h2>Моя любимая строчка из книги: {{ $detachment }} </h2>
<ol>
    <li>{{$item}}</li>
</ol>
<div>
    <p><span class="letter">Р</span>азумные люди приспосабливаются к окружающему миру.
        Неразумные люди приспосабливают мир к себе. Вот почему прогресс определяется
        действиями неразумных людей.</p>
    <p>Бернард Шоу</p>
</div>
</body>
</html>
