<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/input.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuario</title>
</head>

<body class="dr-ht-red-blue font-garamond">
    <header class="wi-75 he-25 mg-lf-15 text-center mg-bt-5">
        <fieldset>
            <legend class="wi-100"></legend>
            <h3>Imperial Games</h3>
        </fieldset>
    </header>
    <main>
        <section class="wi-75 mg-lf-15 mg-bt-5 text-center">
            <fieldset>
                <legend></legend>
                <form action="controller/jogos.controller.php?op=cadastrar" method="post">

                    <div class="grupo">
                        <input type="text" name="txtnome" class="input"  required>
                        <span class="highlight"></span>
                        <span class="barra"></span>
                        <label>Digite seu nome</label>
                    </div>

                    <div class="grupo">
                        <input type="text" name="txtapelido" class="input" required>
                        <span class="highlight"></span>
                        <span class="barra"></span>
                        <label>Digite seu apelido</label>
                    </div>

                    <div class="grupo">
                        <input type="number" name="txtidade" class="input" required>
                        <span class="highlight"></span>
                        <span class="barra"></span>
                        <label>Digite sua idade</label>
                    </div>

                    <div class="grupo">
                        <input type="email" name="txtemail" class="input" required>
                        <span class="highlight"></span>
                        <span class="barra"></span>
                        <label>Digite seu email</label>
                    </div>

                    <div class="grupo">
                        <input type="password" name="txtsenha" class="input" required>
                        <span class="highlight"></span>
                        <span class="barra"></span>
                        <label>Crie uma senha</label>
                    </div>

                    <div class="grupo">
                        <input type="password" name="txtrepetirsenha" class="input" required>
                        <span class="highlight"></span>
                        <span class="barra"></span>
                        <label>Repita senha</label>
                    </div>

                    <div>
                        <button type="submit" class="verde">Concluir Cadastro</button> <button type="reset" class="red">Resetar Cadastro</button>
                    </div>
            </fieldset>
            </form>
            </fieldset>
        </section>
    </main>
    <footer class="wi-75 he-25 mg-lf-15 text-center">
        <fieldset>
            <legend></legend>
        <h3>Direitos reservados a Fabricio</h3>
        </fieldset>
    </footer>


</body>

</html>