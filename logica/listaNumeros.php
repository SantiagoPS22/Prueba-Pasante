<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Resultado FizzBuzz</h1>

    <table>
        <tr>
            <th>Número</th>
            <th>Resultado</th>
        </tr>

        <?php
        $numeros = range(1, 20);

        for ($i = 0; $i < count($numeros); $i++) {
            echo "<tr>";
            echo "<td>" . $numeros[$i] . "</td>";

            if ($numeros[$i] % 3 == 0 && $numeros[$i] % 5 == 0) {
                echo "<td>FizzBuzz</td>";
            } elseif ($numeros[$i] % 3 == 0) {
                echo "<td>Fizz</td>";
            } elseif ($numeros[$i] % 5 == 0) {
                echo "<td>Buzz</td>";
            } else {
                echo "<td>" . $numeros[$i] . "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
