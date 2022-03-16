<?php
    class User{
        private $nome;
        private $cognome;
        protected $registrato; //true / false

        public function __construct($registrato, $cognome, $nome=null){
            $this->setRegistrato($registrato);
            $this->setCognome($cognome);
            $this->setNome($nome);
        }

        public function setRegistrato($registrato){
            if(is_bool($registrato)){
                $this->registrato = $registrato;
                return true;
            }else{
                return false;
            }
        }

        public function getRegistrato(){
            return $this->registrato;
        }

        public function setCognome($cognome){
            if(is_string($cognome)){
                $this->cognome = $cognome;
                return true;
            }else{
                return false;
            }
        }

        public function getCognome(){
            return $this->cognome;
        }

        public function setNome($nome){
            if(is_string($nome)){
                $this->nome = $nome;
                return true;
            }else{
                return false;
            }
        }

        public function getNome(){
            return $this->nome;
        }

    }