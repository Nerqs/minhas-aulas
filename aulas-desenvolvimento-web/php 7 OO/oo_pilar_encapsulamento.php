<?php 

class Pai {
    private $nome = 'Jorge';
    protected $sobrenome = 'Silva';
    public $humor = 'Feliz';

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    /*
    public function getNome() {
        return $this->nome;

    }

    public function setNome($value) {
        if (strlen($value)>=3) {
            $this->nome = $value;

        } else {
            echo "<script> alert('O nome deve conter 3 ou mais caracteres!') </script>";
        }

    }
    */

    private function executarMania() {
        echo 'Assobiar';
    }

    protected  function responder() {
        echo 'OI';
    }

    public function executarAcao() {
        $x = rand(1, 10);

        if($x >= 1 && $x <= 8) {
            $this->responder();

        }else {
            $this->executarMania();

        }
        
    }

}

$pai = new Pai();
echo $pai->executarAcao();


/*
echo $pai->getNome();
$pai->setNome('Jean');
echo '<br>';
echo $pai->getNome();
*/