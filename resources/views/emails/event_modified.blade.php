<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

</style>
<body>
<h1>Votre animation {{$event_data->title}} à été modifié</h1>
<section>
    <h2>Voici les infos pratiques mises à jour :</h2>
</section>
<main>
    <p>{{$event_data->date->format('d/m/Y')}} à {{$event_data->time}}</p>
    <p>à l'adresse : {{$event_data->address}}, {{$event_data->city}}.</p>


    <p>Si vous avez une question, contactez {{$event_data->user->first_name}}
        à l'adresse {{$event_data->user->email}}.</p>

    <p>Bonne journée !</p>
</main>


</body>
</html>
