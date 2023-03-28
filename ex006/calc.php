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
    $result1 = $_POST['number'] -1;
    $result2 = $_POST['number'] +1;
    ?>

    <p>numer escolhido <?php echo $_POST['number']?></p>
    <p>antecessor <?php echo $result1?></p>
    <p>sucessor <?php echo $result2?></p>

    <form action="index.php">
        <input type="submit" name="voltar" value="Voltar">
    </form>

</body>
</html>