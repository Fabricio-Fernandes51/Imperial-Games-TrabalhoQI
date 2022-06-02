<?php

include "../persistence/conexaobanco.php";

class UsuarioDAO {

    private $conexao = null; 

    public function __construct() {
        $this->conexao = ConexaoBanco::getInstancia();
    }

    public function cadastrarUsuario($usuario) {
      try{
          $stat =  $this->conexao->prepare("insert into paciente(idUsuario,nome,apelido,idade,email,senha)
          values(null,?,?,?,?,?)");

          $stat->bindValue(1,$usuario->nome);
          $stat->bindValue(2,$usuario->apelido);
          $stat->bindValue(3,$usuario->idade);
          $stat->bindValue(4,$usuario->email);
          $stat->bindValue(5,$usuario->senha);
          
          $stat->execute();

          $this->conexao = null;

      }catch(PDOException $error){
          echo 'Erro ao cadastrar usuario! '.$error;
      }
    }
}
