<?php 
    class Turma{

        public $id;
        public $descTurma;
        public $ano;

        public function inserir() {

            echo "Turma: ". $this->descTurma . "<br>";
            echo "Ano :".$this->ano . "<br>";
            echo "Turma gravada com sucesso";

        }


    }  
?>