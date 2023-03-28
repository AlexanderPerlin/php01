<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var dump apresenta oque está inserido dentro do array, com tipo de variavel.
            //var_dump($_GET);
            
            
            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            echo "<p> É um prazer te conhecer $nome $sobrenome ! Este é meu site";
        ?>
        <!-- javascrip para voltar para pagina anterior -->
        <p><a href="javascript:history.go(-1)">Voltar</a></p>   
    </main>
   
</body>
</html>