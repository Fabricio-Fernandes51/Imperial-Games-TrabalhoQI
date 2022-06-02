<?php

class jogos
{
    private $cumplice;
    private $assassino;

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



    function qualCumplice()
    {

        switch ($this->cumplice) {
            case 'cumplice-filho':
                return false;

            case 'cumplice-faxineira':
                return true;

            case 'cumplice-cozinheiro':
                return false;

            case 'cumplice-esposa':
                return false;
        }
    }

    function qualAssassino()
    {

        switch ($this->assassino) {
            case 'assassino-filho':
                return false;

            case 'assassino-faxineira':
                return false;

            case 'assassino-cozinheiro':
                return false;

            case 'assassino-esposa':
                return true;
        }
    }


}
