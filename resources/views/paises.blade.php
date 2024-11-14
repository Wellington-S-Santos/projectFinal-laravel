<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continentes</title>
</head>
<body>
  
    <table>
        <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tamanho</th>
        </tr>
        </thead>
       <tbody>
            @foreach ($paises as $pais)
            <tr>
                <td>{{$pais->name}}</td>
                <td>{{$pais->descricao}}</td>
                <td>{{$pais->tamanho}}</td>
            </tr>
            @endforeach
       </tbody>
    </table>
  
</body>
</html>