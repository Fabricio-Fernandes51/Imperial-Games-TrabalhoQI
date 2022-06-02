<?php

session_start();

include "../model/usuario.class.php";
include '../model/jogos.class.php';
include "../util/validacao.class.php";
include '../dao/usuariodao.php';

  
      $jogos = new jogos;


      $jogos->cumplice = $_POST['cumplice'];
      $jogos->assassino = $_POST['assassino'];

      if ($jogos->qualAssassino() && $jogos->qualCumplice()) {
          header("location:../view/resultados/detetive.acerto.php");
      } else {
          header("location:../view/resultados/detetive.erro.php");
      }

      

  

