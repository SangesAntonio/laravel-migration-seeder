<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($trains as $train)
    <div class="card">
        <h1>{{$train['azienda']}}</h1>
        <p>{{$train['stazione_di_partenza']}}</p>
        <p>{{$train['stazione_di_arrivo']}}</p>
        <p>{{$train['orario_di_partenza']}}</p>
        <p>{{$train['orario_di_arrivo']}}</p>
        <p>{{$train['codice_treno']}}</p>
    </div>
    @endforeach
    
</body>
</html>