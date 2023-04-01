<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de moeda 1.0</h1>
    <?php 
        $result = $_POST['valor'] * 5.14;
    ?>
     <p>O valor digitado foi <?php echo $_POST['valor']?></p>
     <p>O valor convertido é de <?php echo $result?></p>
     <p><form action="index.html">
        <input type="submit" value="Voltar">
     </form></p>

</body>
</html>