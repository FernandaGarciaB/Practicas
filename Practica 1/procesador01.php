DOCTYPE html 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,0">
    <title>Tarea Procesador 01</title>
    <!-- Incluir bulma.min.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
<section class ="hero is-primary">
        <div class ="hero-body">
            <p class ="title">
        Informacion de la persona
</p>
</div>
</section>

<section class="section is-medium colums">

<div class="column"></div>

<div class="column is-two-fifths">

    <?php
        $Nombre = $_POST ["Nombre"];
        $ApellidoPaterno = $_POST ["ApellidoPaterno"];
        $ApellidoMaterno = $_POST ["ApellidoMaterno"];
        $Cargo = $_POST ["Cargo"];
        $RFC = $_POST ["RFC"];
        $CURP = $_POST ["CURP"];
        $Domicilio = $_POST ["Domicilio"];
        $Telefono = $_POST ["Telefono"];
        $CorreoElectronico = $_POST ["CorreoElectronico"];
        $Genero = $_POST ["Genero"];
        $FechadeNacimiento = $_POST ["FechadeNacimiento"];
        $EstadoCivil = $_POST ["EstadoCivil"];
        $Escolaridad = $_POST ["Escolaridad"];
        $ReferenciaFamiliar = $_POST ["ReferenciaFamiliar"];
        $Observaciones = $_POST ["Observaciones"];


        echo "<h2 class='is-subtitle'>";
        echo "¡Bienvenido! " .$Nombre.$ApellidoMaterno;
        echo "<br> Apellido paterno: " .$ApellidoPaterno;
        echo "<br> Apellido materno: " .$ApellidoMaterno;
        echo "<br> Cargo: " .$Cargo;
        echo "<br> RFC: " .$RFC;
        echo "<br> CURP: " .$CURP;
        echo "<br> Dirección: " .$Domicilio;
        echo "<br> Número de telefono: " .$Telefono;
        echo "<br> Correo electronico: " .$CorreoElectronico;
        echo "<br> Genero: " .$Genero;
        echo "<br> Fecha de nacimiento: " .$FechadeNacimiento;
        echo "<br> Estado civil: " .$EstadoCivil;
        echo "<br> Escolaridad: " .$Escolaridad;
        echo "<br> Referencia familiar: " .$ReferenciaFamiliar;
        echo "<br> Observaciones: " .$Observaciones;

        echo "</h1>";
    ?>

</div>

<div class="column"></div>
</section>

</body>
</html>