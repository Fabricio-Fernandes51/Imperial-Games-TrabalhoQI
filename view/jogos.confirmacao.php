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
    <title>Confirme</title>
</head>
<body>
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
                <?php 
			if( isset($_SESSION['msg']) &&
				isset($_SESSION['conta']) ){
				
				include '../model/usuario.class.php';
				$usuario = new usuario();
			
				$usuario = unserialize( $_SESSION['conta'] );

				echo '<h1 />'.$_SESSION['msg'].
					'<br />'.$usuario;
			}
		?>		
        <button style="background-color: lightskyblue;"><a href="jogos.inicio.php" >Continuar</a></button>
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
</body>
</html>