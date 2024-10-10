<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        table {
            width: 30%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Ordenar Números con el Algoritmo Burbuja</h1>
    <?php
            $numeros = [5, 3, 8, 6, 2, 9, 4];

    echo "<h3>" . implode(", ", $numeros) . "</h3>";
?>

    <table>
        <tr>
            <th>Posición</th>
            <th>Número Ordenado</th>
        </tr>

        <?php

        for ($i = 0; $i < count($numeros); $i++) {
            for ($j = 0; $j < count($numeros) - 1; $j++) {
                if ($numeros[$j] > $numeros[$j + 1]) {
                    $temp = $numeros[$j];
                    $numeros[$j] = $numeros[$j + 1];
                    $numeros[$j + 1] = $temp;
                }
            }
        }

        for ($i = 0; $i < count($numeros); $i++) {
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>" . $numeros[$i] . "</td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    <?php
        echo "<h3>" . implode(", ", $numeros) . "</h3>";

    ?>
    
</body>
</html>
