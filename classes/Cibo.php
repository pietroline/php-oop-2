<?php

    require_once __DIR__ . "/Prodotto.php";

    class Cibo extends Prodotto{
        private $peso;
        private $formato;
        private $alimentazione;

        public function setPeso($peso){
            if(is_numeric($peso) && $peso > 0.1){
                $this->peso = $peso . " Kg";
                return true;
            }else{
                return false;
            }
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setFormato($formato){
            if(is_string($formato)){
                $this->formato = $formato;
                return true;
            }else{
                return false;
            }
        }

        public function getFormato(){
            return $this->formato;
        }

        public function setAlimentazione($alimentazione){
            if(is_string($alimentazione)){
                $this->alimentazione = $alimentazione;
                return true;
            }else{
                return false;
            }
        }

        public function getAlimentazione(){
            return $this->alimentazione;
        }

    }