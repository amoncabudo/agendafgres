<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Minimalista</title>
    <link rel="stylesheet" href="/public/style.css">
</head>
<body>

    <div class="container">
        <h1><?php echo "Bienvenido a mi Página Minimalista"; ?></h1>
        <p>
            <?php
                // Mensaje dinámico en PHP
                echo "Hoy es " . date("l, d F Y") . ". Espero que tengas un excelente día!";
            ?>
        </p>
    </div>

</body>
</html>
