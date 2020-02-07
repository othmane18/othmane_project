<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @foreach ($reg as $reg)

    {{$reg->nom_directeurregional}}
    {{$reg->dirprv->prenom_directeurprovinciale}} 
        
    @endforeach
</head>
<body>
    
</body>
</html>