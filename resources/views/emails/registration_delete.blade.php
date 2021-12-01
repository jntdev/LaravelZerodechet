<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>L' un de vos participant s'est désisté !</h1>


L'utilisateur {{$data_user->first_name}} s'est finalement désisté.

Il libère donc {{$data_slots}} @if($data_slots >1) places @else place @endif pour votre animation "{{$data_event->title}}".

Si vos réservations étaient complètes, pensez à contacter les personnes de votre liste d'attente :)

Bonne journée !
</body>
</html>
