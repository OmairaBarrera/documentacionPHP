<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Incluir Archivos Externos</title>
    <!--CSS-->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <?php include_once('scripts/main.php')?>
    </header>
    <main>
        <?php include('scripts/include.php')?>
        <?php include_once('scripts/includeOnce.php')?>
        <?php include('scripts/include.php')?>
        <?php include_once('scripts/includeOnce.php')?>
    </main>
</body>
</html>