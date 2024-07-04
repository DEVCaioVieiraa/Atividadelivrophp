<?php
class Livro {
    // Atributos
    public $titulo;
    public $autor;
    public $numPaginas;
    
    // Construtor
    public function __construct($titulo, $autor, $numPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numPaginas = $numPaginas;
    }
   
?>
