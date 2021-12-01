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
L'un des participants a modifier sa réservation !


{{$data_user->first_name}} a modifié sa reservation à ton animation "{{$data_event->title}}.

Sa réservation compte maintenant pour {{$data_nb_user_to_add}} @if($data_nb_user_to_add > 1)personnes @else personne @endif.

Voici l'état de votre niveau de réservation : {{$data_nb_registration}} / {{$data_event->nb_max_user}}


Bonne journée !
</body>
</html>
