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
<h1>Votre animateur à un message pour vous !</h1>
<section>
    <p>Sujet :</p>
    <h2>{{$mailTitle_data}}</h2>
</section>
<main>
    <p>Contenu du message : </p>
    <div> {{$mailContent_data}}</div>
</main>


</body>
</html>
