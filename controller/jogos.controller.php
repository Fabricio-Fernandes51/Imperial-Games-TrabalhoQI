<?php
session_start();

include "../model/usuario.class.php";
include "../util/validacao.class.php";
include '../dao/usuariodao.php';

switch($_GET['op']){
  case 'cadastrar':
	if(isset($_POST['txtnome']) && 
	   isset($_POST['txtapelido']) && 
       isset($_POST['txtidade']) && 
       isset($_POST['txtemail']) &&
	   isset($_POST['txtsenha']) &&
       isset($_POST['txtrepetirsenha']) ){

	$erros = array();	
	
	if(!Validacao::validarNome($_POST['txtnome'])){
		$erros[] = 'Nome invalido.';
	}

    if(!Validacao::validarApelido($_POST['txtapelido'])){
        $erros[] = 'Apelido invalido.';
    }

    if(!Validacao::validarIdade($_POST['txtidade']) >= 10 ){
        $erros[] = 'Precisa ser maior de 10 anos.';
    } 
    
    if(!Validacao::validarSenha($_POST['txtsenha'])){
        $erros[] = 'Senha invalida';
    }   

    if($_POST['txtsenha'] != $_POST['txtrepetirsenha']){
        $erros[] = 'As senhas devem ser iguais';    
    }

	if(count($erros) == 0){
		
		$usuario = new usuario;

		$usuario->nome = $_POST['txtnome'];
		$usuario->apelido = $_POST['txtapelido'];
		$usuario->idade = $_POST['txtidade'];
		$usuario->email = $_POST['txtemail'];
		$usuario->senha = $_POST['txtsenha'];
		$usuario->repetirSenha = $_POST['txtrepetirsenha'];

		$pDAO = new UsuarioDAO();
		$pDAO->cadastrarUsuario($usuario);

		$_SESSION['msg'] = 'Cadastro feito com seu sucesso!';		
		
		$_SESSION['conta'] = serialize($usuario);
	
		
		header("location:../view/jogos.confirmacao.php?");
	
	}else{


		$_SESSION['erros'] = serialize($erros);
		
		header("location:../view/jogos.erros.php");		
	}
		
	
}else{
	echo 'Algo não esta preenchido';
}
break; 



}
