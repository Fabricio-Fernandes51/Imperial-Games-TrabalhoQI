<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/input.css">
    <title>Jogo da Velha</title>
</head>

<body class="dr-ht-red-blue">
    <header class="wi-100 red text-center ">
        <fieldset>
            <section class="wi-100 pd-top-3 pd-bt-3">
                <div class=" text-center ">
                    <a href="jogos.inicio.php">
                        <h3 class="perfil text-black">Imperial Games</h3>
                    </a>
                </div>
            </section>
        </fieldset>
    </header>
    <section>

        <div style="font-size:50px; text-align:center; margin-top:50px">
            <?php
            session_start();

            $ganhou = false;

            $jogandoComBot = true;



            function jogadaDoBot()
            {
                $jogadaValida = false;
                while ($jogadaValida == false) {
                    $linha = rand(0, 2);
                    $coluna = rand(0, 2);
                    if ($_SESSION['tabuleiro'][$linha][$coluna] == ' ') {
                        $jogadaValida = true;
                    }
                }
                return [$linha, $coluna];
            }

            if (!isset($_SESSION['tabuleiro']) || (isset($_GET['acao']) && $_GET['acao'] == "reset")) {
                $linha1  = [' ', ' ', ' '];
                $linha2  = [' ', ' ', ' '];
                $linha3  = [' ', ' ', ' '];
                $matriz = [$linha1, $linha2, $linha3];
                $_SESSION['tabuleiro'] = $matriz;
                $_SESSION['quemjoga'] = "X";
            } else {
                if (isset($_GET['j1']) && isset($_GET['j2'])) {
                    if ($_SESSION['tabuleiro'][$_GET['j1']][$_GET['j2']] == ' ') {
                        $_SESSION['tabuleiro'][$_GET['j1']][$_GET['j2']] = "X";
                        $ganhou = verificaGanhador();

                        if ($jogandoComBot == true) {
                            $jogada = jogadaDoBot();
                            if ($_SESSION['tabuleiro'][$jogada[0]][$jogada[1]] == ' ') {
                                $_SESSION['tabuleiro'][$jogada[0]][$jogada[1]] = "O";
                                $_SESSION['quemjoga'] = "X";
                                $ganhou = verificaGanhador();
                            }
                        } else {
                            $_SESSION['quemjoga'] = "O";
                        }
                    } else {
                        echo '<div style="color:red; background-color:yellow">Isso e ilegal</div><br><br>';
                    }
                } else if ($jogandoComBot == false) {
                    if (isset($_GET['j3']) && isset($_GET['j4'])) {
                        if ($_SESSION['tabuleiro'][$_GET['j3']][$_GET['j4']] == ' ') {
                            $_SESSION['tabuleiro'][$_GET['j3']][$_GET['j4']] = "O";
                            $_SESSION['quemjoga'] = "X";
                            $ganhou = verificaGanhador();
                        } else {
                            echo '<div style="color:red; background-color:yellow">Isso e ilegal</div><br><br>';
                        }
                    }
                }
            }

            function verificaGanhador()
            {
                $m  = $_SESSION['tabuleiro'];

                $ganhou = false;
                if (($m[0][0] == "X" && $m[0][1] == "X" && $m[0][2] == "X") || ($m[0][0] == "O" && $m[0][1] == "O" && $m[0][2] == "O")) {
                    $ganhou = true;
                }
                if (($m[1][0] == "X" && $m[1][1] == "X" && $m[1][2] == "X") || ($m[1][0] == "O" && $m[1][1] == "O" && $m[1][2] == "O")) {
                    $ganhou = true;
                }
                if (($m[2][0] == "X" && $m[2][1] == "X" && $m[2][2] == "X") || ($m[2][0] == "O" && $m[2][1] == "O" && $m[2][2] == "O")) {
                    $ganhou = true;
                }
                if (($m[0][0] == "X" && $m[1][0] == "X" && $m[2][0] == "X") || ($m[0][0] == "O" && $m[1][0] == "O" && $m[2][0] == "O")) {
                    $ganhou = true;
                }
                if (($m[0][1] == "X" && $m[1][1] == "X" && $m[2][1] == "X") || ($m[0][1] == "O" && $m[1][1] == "O" && $m[2][1] == "O")) {
                    $ganhou = true;
                }
                if (($m[0][2] == "X" && $m[1][2] == "X" && $m[2][2] == "X") || ($m[0][2] == "O" && $m[1][2] == "O" && $m[2][2] == "O")) {
                    $ganhou = true;
                }
                if (($m[0][0] == "X" && $m[1][1] == "X" && $m[2][2] == "X") || ($m[0][0] == "O" && $m[1][1] == "O" && $m[2][2] == "O")) {
                    $ganhou = true;
                }
                if (($m[0][2] == "X" && $m[1][1] == "X" && $m[2][0] == "X") || ($m[0][2] == "O" && $m[1][1] == "O" && $m[2][0] == "O")) {
                    $ganhou = true;
                }
                return $ganhou;
            }

  
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    echo '[' . $_SESSION['tabuleiro'][$i][$j] . ']';
                }
                echo '<br>';
            }

            if ($ganhou == true) {
                echo "<h2>GAME OVER</h2>";
            }


            ?>

            <form>
                <input type="hidden" name='acao' value="reset" />
                <input type="submit" value="Reset" />
            </form>

            <?php if ($_SESSION['quemjoga'] == "X") { ?>
                <form>
                    <div style="margin-top:40px;">
                        <h3>Jogada do X</h3>
                        <select name="j1" class="wi-15" id="">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <select name="j2" aria-placeholder="linha" class="wi-15" id="">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        <input type="submit" />
                </form>
            <?php } ?>
            <?php if ($_SESSION['quemjoga'] == "O") { ?>
                <form>
                    <br>
                    <h3>Jogada da O</h3>
                    <input type="text" placeholder="coluna" name="j3" />
                    <input type="text" placeholder="linha" name="j4" />
                    <input type="submit" />
                </form>
            <?php } ?>
        </div>
        </div>
    </section>
    <footer class="wi-75 he-25 mg-lf-15 text-center">
        <fieldset>
            <legend></legend>
        <h3>Direitos reservados a Fabricio</h3>
        </fieldset>
    </footer>

</body>