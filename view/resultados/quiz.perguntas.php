<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Quiz</title>
</head>

<body class="dr-ht-red-blue">
<header class="wi-100 red ">
        <fieldset>
            <section class=" wi-100 ">
                <div class="text-center">
                    <h3>Imperial Games</h3>
                </div>
            </section>
        </fieldset>
    </header>


    <section >
    <?php
    if (isset($_SESSION['msg']) &&
        isset($_SESSION['img']) &&
        isset($_SESSION['form'])) {

        echo '<h1 class="text-center">'.$_SESSION['msg'].'</h1>';
        echo '<br>';
        echo '<img '.$_SESSION['img'].' class="mg-lf-37 pd-lf-5">';
        echo ''.$_SESSION['form'];
    }
    ?>
    </section>
    <footer class="wi-75 he-25 mg-lf-15 text-center">
        <fieldset>
            <legend></legend>
        <h3>Direitos reservados a Fabricio</h3>
        </fieldset>
    </footer>

        
</body>

</html>