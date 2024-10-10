<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar Dígitos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="number"] {
            padding: 5px;
            width: 100px;
        }
        input[type="submit"] {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Sumar Dígitos de un Número</h1>
    
    <form method="post">
        <input type="number" name="numero" required>
        <input type="submit" value="Sumar Dígitos">
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $suma = 0;

        $digitos = str_split($numero);

        foreach ($digitos as $digito) {
            $suma += (int)$digito; }

        echo "<h3>La suma de los dígitos de $numero es: $suma</h3>";
    }
    ?>
</body>
</html>
