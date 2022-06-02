<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Quiz</title>
</head>

<body class="dr-ht-red-blue">
    <header class="wi-100 red mg-bt-5  ">
        <fieldset>
            <section class=" wi-100 ">
                <div class="text-center">
                    <h3>Imperial Games</h3>
                </div>
            </section>
        </fieldset>
    </header>

    <section class="wi-100 he-100">
        <h2 class="text-white text-center">Este é um quiz de programação aonde deve identificar a linguagem pelo ícone </h2>

        <form action="../controller/quiz.controller.php?op=q1" method="POST" class="wi-100 he-100 font-fantasy">
            <img class="pd-lf-45 pd-top-3" src="../img/imagens-quiz/java.png" alt="">
            <article class="pd-lf-45">
                <div class="pd-top-3">
                    <input type="radio" name="java" id="" value="Java">
                    <span>Java</span>
                </div>
                <div class="pd-top-3">
                    <input type="radio" name="java" id="" value="javaScript">
                    <span>javaScrpit</span>
                </div>
                <div class="pd-top-3">
                    <input type="radio" name="java" id="" value="html">
                    <span>HTML</span>
                </div>
                <div class="pd-top-3">
                    <input type="radio" name="java" id="" value="php">
                    <span>php</span>
                </div>
            </article>
            <div class="wi-50 pd-lf-45">
                <button class="mg-lf-5 float-cnt mg-top-10 wi-15" type="submit">Enviar</button>
            </div>
        </form>
    </section>
    <footer class="wi-75 he-25 mg-lf-15 text-center">
        <fieldset>
            <legend></legend>
        <h3>Direitos reservados a Fabricio</h3>
        </fieldset>
    </footer>


</body>

</html>