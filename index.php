<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud simples em PHP</title>
</head>
<body>
    <?php 
        include("Class/Conexao.php");
        $Con = new Conexao;
        $Con->connectDB();
        var_dump($Con)
    ?>

</body>
</html>