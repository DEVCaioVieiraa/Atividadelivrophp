<?php
class Adulto {
    private $peso; 
    
    public function __construct($pesoInicial) {
        $this->peso = $pesoInicial;
    }
    
    public function engordar($quilos) {
        $this->peso += $quilos;
    }
    
    public function emagrecer($quilos) {
        $this->peso -= $quilos;
        if ($this->peso < 0) {
            $this->peso = 0;
        }
    }
    
    public function getPeso() {
        return $this->peso;
    }
}
?>