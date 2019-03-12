<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include 'html.php'; ?>
        Texto sin programacion
        <br>
        <?php
        $saludo="Cualquier cosa";
        echo "Hola Mundo 2";
        echo "Hola ".$saludo;
        
        ?>
        
        <?php
        $meses["enero"]="mes 1";
        $meses["febrero"]="mes 2";
        $meses["marzo"]="mes 3";
        $meses["abril"]="mes 4";
        $meses["mayo"]="mes 5";
        $meses["junio"]="mes 6";
        $meses["julio"]="mes 7";
        $meses["agosto"]="mes 8";
        $meses["septiembre"]="mes 9";
        $meses["octubre"]="mes 10";
        $meses["noviembre"]="mes 11";
        $meses["diciembre"]="mes 12";
        ?>
        <br>
            <?php
        
        foreach ($meses as $resultado){
            echo "Los meses son " .$resultado."<br>";
        }
        ?>
        
        
        <br>
        Variables Globales $_SERVER
        
        <br>
        <pre>
        <?php
        var_dump($_SERVER);
        //Esta variable global permite ver el contenido del array.
        ?>
</pre>
    </body>
</html>
