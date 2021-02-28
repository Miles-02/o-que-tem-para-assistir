<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/ee.css')}}">



    <title>Parabéns!</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            border: 0;
        }
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('imgs/ee.jpeg')}}" alt="" style="width: 300px; margin-bottom: 35px">
        <p>Parabéns!</p>
        <p>Você encontrou o easter-egg do meu site!</p>

        <p>
            <a href="/home">
                Voltar ao início
            </a>
        </p>
    </div>
   
</body>
</html>