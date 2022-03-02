<?php
    //modelo

use LDAP\Result;

    class Funcionario {
        //atricutos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading / sobrecarga)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        //setters (normalmente void, que não retornam valores)
        /*function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($nFilhos) {
            $this->numFilhos = $nFilhos;
        }

        function setTelefone($tel) {
            $this->telefone = $tel;
        }

        //getters(retornam valores)
        function getNome() {
            return $this->nome;
        }
        
        function getNumFilhos() {
            return $this->numFilhos;
        }

        function getTelefone() {
            return $this->telefone;
        }
        */
        //metodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s), telefone: $this->telefone, cargo: $this->cargo, salario: $this->salario.";
        }

        function modificarNumFilhos($Filhos) {
            //afetar um atributo do obj
            $this->numFilhos = $Filhos;
        }

    }

    $y = new Funcionario();
    $y->__set('nome', 'Jean');
    $y->__set('telefone', '(19) 98888-0000');
    $y->__set('numFilhos', '0');
    $y->__set('cargo', 'Diretor');
    $y->__set('salario', 'R$5000');
    echo $y->resumirCadFunc();
    echo '<hr>';

    $x = new Funcionario();
    $x->__set('nome', 'José');
    $x->__set('telefone', '(11) 97777-0000');
    $x->__set('numFilhos', '2');
    $x->__set('cargo', 'Montador');
    $x->__set('salario', 'R$1500');
    echo $x->resumirCadFunc();
    echo '<hr>';

 ?>