<?php require 'header.php'; ?>

<br><br><br><br><br><br><br><br><br>

<div align="center">
    <table border="1" style="text-align:center ">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Hecho</th>
            <th>Fecha Creación</th>
        </tr>

        <?php

        $i = 0;
        while ($i < count($resultados)) {
            echo "<tr>";
            echo "<td>";
            echo $resultados[$i]["id"];
            echo "</td>";
            echo "<td>";
            echo $resultados[$i]["title"];
            echo "</td>";
            echo "<td>";
            if ($resultados[$i]["done"] == 0){echo "No";}
            else {echo "Si";}
            echo "</td>";
            echo "<td>";
            echo $resultados[$i]["created_at"];
            echo "</td>";
            echo "</tr>";
            $i++;
        }
        ?>

    </table>

    <p><a href="add-item.php">Nuevo Item</a></p>

</div>

</body>
</html>