<!DOCTYPE html>
<html>
    <head>
        <title>EJ #2</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
    </head>
    <body>
        <div id="wrap">
            <form>
                <p>Favor ingrese el valor de las notas:</p>
                <p>1er Parcial : <input type="text" id="a"></p>
                <p>2do Parcial : <input type="text" id="b"></p>
                <p>1er Final : <input type="text" id="c"></p>
                <p><button onclick="">Calcular</button></p>
            </form>
        <div>
        
        <?php
            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            
            if(($a * 3) > ($b + $c))
            {
                echo 'MAYOR';
            }
            elseif(($a * 3) < ($b + $c))
            {
                echo 'MENOR';
            }
        ?>
    </body>
</html>