<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .list6b {
            padding:0;
            list-style: none;
        }
        .list6b li{
            padding:6px;
        }
        .list6b li:before {
            padding-right:10px;
            font-weight: bold;
            color: #C0C0C0;
            content: "\2714";
            transition-duration: 0.5s;
        }
        .list6b li:hover:before {
            color: #337AB7;
            content: "\2714";
        }
    </style>
</head>
<body>

    @foreach($var_li as $li)
            <ul class="list6b">
                <li>{{$li}}</li>
            </ul>
    @endforeach
</body>
</html>
