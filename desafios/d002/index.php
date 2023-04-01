<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $gera = rand(1,100);
    ?>
    <h1>Gerador de número aleatório de 1 a 100</h1>
    <p><?php echo $gera?></p>
    
    <form action="index.php">
        <input type="submit" name="enviar" value="Gerar">
    </form>
</body>
</html>