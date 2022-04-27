<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    table{
        background-color: lightblue;
    }
</style>
   <center>
       <h5>Reporte de citas medicas</h5>
   </center> 
<?php
//echo(var_dump($Citas));
?>
   <table>
       <thead>
       <tr>
           <td>Paciente</td>
           <td>DNI</td>
           <td>Medico</td>
           <td>Especialidad</td>
           <td>Cubiculo</td>
           <td>Fecha</td>
       </tr>
</thead>
<tbody>
    <?php
    foreach ($Citas as $Data) {
        echo("<tr><td>".$Data->PRIMER_NOMBRE." ".$Data->SEGUNDO_NOMBRE." ".$Data->PRIMER_APELLIDO." ".$Data->SEGNDO_APELLIDO."</td>".
        "<td>".$Data->NOMBRE_MEDICO."</td>".
        "<td>".$Data->ESPECIALIDAD_REQUERIDA."</td>".
        "<td>".$Data->CUBICULO."</td>".
        "<td>".$Data->FEC_ATENCION."</td>".
        "</tr>");
    }
    ?>
</tbody>
   </table>
</body>
</html>