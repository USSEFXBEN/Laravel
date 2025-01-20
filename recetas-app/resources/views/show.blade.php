<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Detalle de la receta <?= $receta ?></h1>
    <?php if ($categoria != null): ?>
        <h3>La categoria es: <?= $categoria ?></h3>
    <?php endif; ?>
</body>

</html>