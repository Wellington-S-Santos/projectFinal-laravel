<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continentes</title>
</head>
<body>
   
    <table>
        
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tamanho</th>
        </tr>
        
            @foreach ($continentes as $continente)
            <tr>
                <td>{{$continente->name}}</td>
                <td>{{$continente->descricao}}</td>
                <td>{{$continente->tamanho}}</td>
            </tr>
          @endforeach
     
   
</body>
</html>