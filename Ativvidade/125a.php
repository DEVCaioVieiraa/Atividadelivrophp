<?php
class Empresa {
    private $nome;
    
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
}

$empresa = new Empresa();
$empresa->setNome("Minha Empresa");
echo "Nome da empresa: " . $empresa->getNome(); // Saída: Nome da empresa: Minha Empresa
?>
