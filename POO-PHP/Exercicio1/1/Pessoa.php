<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $dia_nascimento;
        private $mes_nascimento;
        private $ano_nascimento;

        public function __construct($nome,$idade,$dia_nascimento,$mes_nascimento,$ano_nascimento){
            $this->nome=$nome;
            $this->idade=$idade;
            $this->dia_nascimento=$dia_nascimento;
            $this->mes_nascimento=$mes_nascimento;
            $this->ano_nascimento=$ano_nascimento;
        }
        public function calcula_idade($dia,$mes,$ano){
            $ano=$ano-$this->ano_nascimento;
            if($mes<$this->mes_nascimento){
                $ano--;
                $mes=$this->mes_nascimento-$mes;
            }else{
                $mes=$mes-$this->mes_nascimento; 
            }
            if($dia<$this->dia_nascimento){
                $mes--;
                $dia=$this->dia_nascimento-$dia;
            }else{
                $dia=$dia-$this->dia_nascimento;
            }
            $this->idade = "$ano ano(s) $mes mes(es) $dia dia(s)"; 
        }
        public function informa_idade(){
            return $this->idade;
        }
        public function informa_nome(){
            return $this->nome;
        }
        public function ajusta_data_de_nascimento($dia,$mes,$ano){
            $this->dia_nascimento=$dia;
            $this->mes_nascimento=$mes;
            $this->ano_nascimento=$ano;
        }
    }
?>