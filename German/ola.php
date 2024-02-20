<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>13433. Estaciones del Año</h1>
     <table border="1">
        <tr>
            <td>Puntos</td>
            <td>23.98</td>
            <td>Límite de memoria</td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td>Límite de tiempo (caso)</td>
            <td>1s</td>
            <td>10 KiB</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño límite de entrada (bytes)</td>
        </tr>
     </table>
     <h2>Descripción</h2>
     <p>
     Brithany quiere combinar la programación con el inglés, y se encuentra empezando
     a usar las estructuras de control selectivas en la programación estructurada, como ejercicio
     necesita desarrollar un programa que sea capaz de especificar a que estación (su nombre en inglés) 
     del año pertenece una fecha en especifico compuesta por un día "d" y un mes "m" según lo siguiente:
     </p>
        <p>
        * Winter del 21 de diciembre al 20 de marzo <br>
        * Spring del 21 de marzo al 21 de junio <br>
        * Summer del 22 de junio al 22 de septiembre <br>
        * Fall del 23 de septiembre al 20 de diciembre <br>
        </p>
    <p>Considerando la siguiente cantidad de días para cada mes:</p>
        <p>
        * Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días. <br>
        * Abril, Junio, Septiembre y Noviembre 30 días. <br>
        * Febrero 28 días. <br>
        </p>
    <p>
    Cualquier fecha fuera de estos rangos debe considerarse como no existente
    Ayuda a Brithany a crear ese programa usando estructuras de control selectivas.
    </p>
    <h2>Entrada</h2>
    <p>
    Dos números enteros d y m separados por un espacio que corresponden al día y mes de una fecha determinada
    </p>
    <h2>Salida</h2>
    <p>
    Una cadena S que indique la estación del año a la que pertenece la fecha ingresada o un mensaje
    que indique no existe la fecha, si la fecha no es válida
    </p>
    <h2>Ejemplo</h2>
    <table border="1">
        <tr>
            <td>15 10</td>
            <td>Fall</td>
        </tr>
        <tr>
            <td>23 2</td>
            <td>Spring</td>
        </tr>
        <tr>
            <td>31 4</td>
            <td>no existe la fecha</td>
        </tr>
    </table>
    <?php


    ?>
    <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h1>7294. ¿Cuántos valen 7?</h1>
    <table border="1">
        <tr>
            <td>Puntos</td>
            <td>10.21</td>
            <td>Límite de memoria</td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td>Límite de tiempo (caso)</td>
            <td>1s</td>
            <td>10 KiB</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño límite de entrada (bytes)</td>
        </tr>
     </table>
     <h2>Descripción</h2>
     <p>
        Escribe un programa que lea dos enteros e imprima cuántos de ellos valen 7.
     </p>
     <h2>Entrada</h2>
     <p>
        Dos enteros en el rango de -1000 a +1000.
     </p>
     <h2>Salida</h2>
     <p>
        La cantidad de enteros iguales a 7.
     </p>
     <h2>Ejemplo</h2>
     <table border="1">
        <tr>
            <td>-3 8</td>
            <td>0</td>
        </tr>
        <tr>
            <td>7 57</td>
            <td>1</td>
        </tr>
        <tr>
            <td>62 7</td>
            <td>1</td>
        </tr>
        <tr>
            <td>7 7</td>
            <td>2</td>
        </tr>
    </table>
    <?php
    $v3 = 0;

    if ($v1 == 7) {
        $v3++;
    }
    if ($v2 == 7) {
        $v3++;
    }
    echo $v3;
    
    ?>
    ?>

    <p>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
    <h1>7341. El mayor de tres números</h1>
    <table border="1">
        <tr>
            <td>Puntos</td>
            <td>23.98</td>
            <td>Límite de memoria</td>
            <td>32 MiB</td>
        </tr>
        <tr>
            <td>Límite de tiempo (caso)</td>
            <td>1s</td>
            <td>10 KiB</td>
            <td>1m0s</td>
        </tr>
        <tr>
            <td>Tamaño límite de entrada (bytes)</td>
        </tr>
    </table>
        <h2>Descripción</h2>
        <p>
            Realiza un problema que imprima el mayor de tres números.
        </p>
        <h2>Entrada</h2>
        <p>
            Escribe tres números enteros a, b y c
        </p>
        <h2>Salida</h2>
        <p>
            El número entero mayor de los tres números introducidos.
        </p>
        <h2>Ejemplo</h2>
        
        <table border="1">
        <tr>
            <td>10 <br> 8 <br> -7 <br> </td>
            <td>10</td>
        </tr>
        <tr>
            <td>10 <br> 81 <br> 101 </td>
            <td>101</td>
        </tr>
        <tr>
            <td>11 <br> 11 <br> 11 </td>
            <td>11</td>
        </tr>
        <tr>
            <td>10 <br> 810 <br> 101</td>
            <td>810</td>
        </tr>
    </table>
        
</body>
</html>