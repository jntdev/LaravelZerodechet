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
Vous avez rendez-vous avec {{$event_data->user->first_name}}
le {{$event_data->date->format('d/m/Y')}} à {{$event_data->time}}
à l'adresse :  {{$event_data->address}}, {{$event_data->city}}.


Si vous avez une question à poser à {{$event_data->user->first_name}}, contactez le
à l'adresse {{$event_data->user->email}}.

Bonne journée !
</body>
</html>
