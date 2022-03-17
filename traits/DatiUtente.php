<?php

    trait DatiUtente{
        private $nome;
        private $cognome;

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