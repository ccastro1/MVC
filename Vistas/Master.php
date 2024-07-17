<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="src/icons/css/all.min.css" rel="stylesheet" />
    <link href="build/css/app.css" rel="stylesheet" />
</head>

<body>
    <?php include $rutaVista; ?>
    <script src="build/js/Jquery.min.js"></script>
    <script src="build/js/CodigoGeneral.js"></script>
    <script src="build/js/Codigo<?= $accion ?>.js"></script>
</body>

</html>