<?php

class Validacao{

    public static function validarNome($nome){
		$exp = '/^[^.!@#$%¨&*]{2,40}$/';
	
        if(preg_match($exp,$nome)){
			return true;
		}else{
			return false;
		}
	}

    public static function validarApelido($apelido){
		$exp = '/^[^.!@#$%¨&*]{2,40}$/';
	
        if(preg_match($exp,$apelido)){
			return true;
		}else{
			return false;
		}
	}

	public static function validarIdade($idade){ 
		$exp = '/^[^.!@#$%¨&*a-z A-Z]{2,40}$/'; 
        $restricao = 10;

		if(preg_match($exp,$idade)){
			return true;
		}else{
			return false;
		}
	}

	public static function validarEmail($email){ 
		$exp = '/^{10,80}$/';

		if(preg_match($exp, $email)){
			return true;
		}else{
			return false;
		}
	}
	

	public static function validarSenha($senha){
        $exp = '/^[^.!@#$%¨&*]{2,40}$/';

        if(preg_match($exp,$senha)){
			return true;
		}else{
			return false;
		}
	}

}

?>