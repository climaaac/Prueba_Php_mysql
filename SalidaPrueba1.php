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
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'base1', '3306');
        if (!$conn) {
            die('Could not connect to MySQL: ' . mysqli_connect_error());
        }
        mysqli_query($conn, 'SET NAMES \'utf8\'');
        // TODO: insert your code here.
        echo '<table>';
        echo '<tr>';
        echo '<th>id_empresas</th>';
        echo '<th>nombre</th>';
        echo '<th>fecha_fundacion</th>';
        echo '<th>categoria</th>';
        echo '</tr>';
        $result = mysqli_query($conn, 'SELECT id_empresas, nombre, fecha_fundacion, categoria FROM empresas');
        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
            echo '<tr>';
            echo '<td>' . $row['id_empresas'] . '</td>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['fecha_fundacion'] . '</td>';
            echo '<td>' . $row['categoria'] . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
        echo '</table>';
        mysqli_close($conn);
        // put your code here
        ?>
    </body>
</html>
