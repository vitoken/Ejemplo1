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
    </head>
    <body>
        Texto sin programacion
        <br>
        <?php
        $saludo="Cualquier cosa";
        echo "Hola Mundo 2";
        echo "Hola ".$saludo;
        
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
