<?php


class ConexaoBanco extends PDO
{

    private static $instancia = null;


    public function ConexaoBanco($dsn, $usuario, $senha)
    {
        parent::__construct($dsn, $usuario, $senha);
    }
    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {

            try {

                self::$instancia = new ConexaoBanco("mysql:dbname=jogos;host=localhost:3306", "root", "");
            } catch (Exception $e) {
                echo 'Erro ao conectar com o Banco...' . $e;
                exit();
            }
        }
        return self::$instancia;
    }
}
