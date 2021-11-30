<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vous etes inscrit</title>
</head>
<body>
<h1>Votre reservation est confirmée !</h1>

<p>Vous avez rendez-vous avec {{$event_data->user->first_name}} le {{$event_data->date->format('d/m/Y')}} à {{$event_data->time}}</p>

<p>infos pratiques : </p>
<p>{{$event_data->address}}</p>
<p>{{$event_data->city}}</p>

</body>
</html>
