<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algo deu errado</title>
</head>
<body>
    <section class="mx-auto" style="width: 50%; margin-top: 5%">

        <h5 class="titulo2">Ops! Algo deu errado...</h5>


        <hr>

        <?php
        //isset - verificando se a variável possui algum valor ou não 

        if (isset($_SESSION['erros'])) {
            // criando uma variável $erros que recebe a função array
            $erros = array();

            //descriptografa a variável de sessão erros e armazenando na variável $erros
            $erros = unserialize($_SESSION['erros']);

            //mostrando os erros na tela 
            foreach ($erros as $e) {
                echo '<br />' . $e;
            }
        } //fecha if
        ?>

        <hr>

    </section>
    <footer class="wi-75 he-25 mg-lf-15 text-center">
        <fieldset>
            <legend></legend>
        <h3>Direitos reservados a Fabricio</h3>
        </fieldset>
    </footer>


</body>
</html>