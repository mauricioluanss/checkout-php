<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>erro</h1>
    <?php
    if (isset($_SESSION['payload'])) {
        echo "<pre>";  // <pre> formata a saída para melhor legibilidade
        print_r($_SESSION['payload']);
        echo "</pre>";
    }
    ?>
</body>

</html>