<?php 

 class usuario{
    private $idUsuario;
    private $nome;
    private $apelido;
    private $idade;
    private $email;
    private $senha;

    
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __toString()
    {
        return nl2br("
                      <h2>Nome: $this->nome</h2>
                      <h2>Apelido: $this->apelido </h2>
                      <h2>Idade: $this->idade</h2>
                      <h2>Email: $this->email</h2>
                      <h2>Senha: $this->senha</h2>" );
    }
} 



?>