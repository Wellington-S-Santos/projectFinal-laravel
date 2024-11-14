<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Aossociação de Países a Contisnentes</h1>

<form action="/criar_continentes_paises" method="post">
    @csrf
</form>
    <label for="">User:</label>
      <select name="user" id="user">
$continente = Continente::find(1); // Encontrar um continente
$pais = Pais::find(1); // Encontrar um país

// Associar o país ao continente
$continente->paises()->attach($pais->id);
</body>
</html>