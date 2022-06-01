<?php
require_once 'Controlador.php';
class ControleRemote implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;
    //Métodos especiais
    function __construct()
    {
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;        
    }
    
    //get e set
    private function getVolume() 
    {
        return $this->volume;
    }

    private function getLigado() 
    {
        return $this->ligado;
    }

    private function getTocando() 
    {
        return $this->tocando;
    }

    private function setVolume($volume): void 
    {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void 
    {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void 
    {
        $this->tocando = $tocando;
    }
    
//Controladores    
    
    public function ligar() 
    {
        $this ->setLigado(true);
    }
    
    public function desligar() 
    {
        $this->setLigado(false);
    }

    public function abrirMenu() 
    {
        echo "<br>Está ligado?: ";
        echo ($this->getLigado())?"SIM":"NÃO";
        echo "<br>Está tocando?: ";
        echo ($this->getTocando())?"SIM":"NÃO";
        echo "<br> Volume: " . $this->getVolume();
        for ($i = 1; $i <= $this->getVolume(); $i +=10)
        {
            echo "|_";
        }
        echo "<br>";
    }
    
    public function fecharMenu() 
    {
        echo "Fechando menu.";
    }
    
    public function desligarMudo() 
    {
        if ($this -> getLigado() && $this ->getVolume() == 0)
        {
            $this ->setVolume(50);
        }
    }
    
    public function ligarMudo() 
    {
        if ($this -> getLigado() && $this ->getVolume() > 0)
        {
            $this ->setVolume(0);
        }
    }

    public function maisVolume() 
    {
        if ($this -> getLigado())
        {
            $this ->setVolume($this -> getVolume() + 5); 
        }       
    }
    public function menosVolume() 
    {
        if ($this -> getLigado())
        {
            $this ->setVolume($this -> getVolume() - 5); 
        }       
    }

    public function pause() 
    {
        if ($this -> getLigado() && $this -> getTocando())
        {
            $this ->setTocando(false);
        }
    }

    public function play() 
    {
        if ($this -> getLigado() && !($this ->getTocando()))
        {
            $this ->setTocando(true);
        }
    }

}
