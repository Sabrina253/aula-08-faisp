<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 do curso EAD em fullstack na Faisp</title>
</head>
<body>
    <h1>Introdução à programação backend</h1>
    <br/>

    <?php
        echo 'Olá, Sabrina';
        echo '<br/>';

        $ano_faculdade = 2023;    

        $ano_atual = 2024;

        $resultado = $ano_atual - $ano_faculdade;

        //No PHP, o caracter ponto "." concatena (junta) strings.
        echo 'Você está cursando bacharelado em Sistemas de Informação há '. $resultado . ' ano(s).';
    ?>     

    <br/>
    <a href="formulario.php">Ir para o formulário</a>
</body>
</html>