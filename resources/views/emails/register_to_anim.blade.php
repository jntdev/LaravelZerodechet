<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouvelle reservation</title>
</head>
<body>
<h1>Vous avez une nouvelle reservation !</h1>

<p>{{$data_user->first_name}} s'est inscrit a ton animation "{{$data_event->title}}"</p>
<p>Sa réservation compte pour {{$data_nb_user_to_add}} @if($data_nb_user_to_add > 1 )personnes @else personne @endif</p>

<p>voici l'etat de votre niveau de réservation : {{$data_nb_registration}} / {{$data_event->nb_max_user}} </p>
</body>
</html>
