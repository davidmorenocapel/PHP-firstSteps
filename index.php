<?php

//DEFINIR ARRAYS

$curso = [];
$grupos = [];
$alumnos = [];

//DEFINIMOS EL CURSO

$curso = [

    "titulo" => "curso PHP",
    "fecha_ini" => "19/05/2020",
    "fecha_fin" => "03/06/2020",
    "grupos" => []
];

//DEFINIMOS GRUPOS

$grupo1 = [
    "numero" => 5,
    "alumnos" => []
];
$grupo2 = [
    "numero" => 5,
    "alumnos" => []
];

//DEFINIMOS ALUMNO

$alumno1 = [
    "nombre" => "David",
    "apellido" => "Moreno",
    "email" => "morenocapeldavid@gmail.com"
];
$alumno2 = [
    "nombre" => "Marino",
    "apellido" => "Moreno",
    "email" => "moreno_marino@yahoo.es"
];
$alumno3 = [
    "nombre" => "Andrew",
    "apellido" => "Edinworth",
    "email" => "Andrewedin@gmail.com"
];

//AÑADIMOS TODOS LOS ELEMENTOS
$curso["grupos"][] = $grupo1;
$curso["grupos"][0]["alumnos"][] = $alumno1;
$curso["grupos"][0]["alumnos"][] = $alumno2;
$curso["grupos"][1]["alumnos"][] = $alumno3;

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

foreach ($curso as $cursoClave => $curlsoItem){
    if($cursoClave === "grupos"){
        echo "<br>";
        echo"-------------";
        foreach ($cursoItem as $grupoClave => $grupoItem){

        }
    }
}

?>

</body>
</html>