<?php

    require_once __DIR__ . "/Prodotto.php";

    class Antiparassitario extends Prodotto{
        protected $tipologia;

        public function setTipologia($tipologia){
            if(is_string($tipologia)){
                $this->tipologia = $tipologia;
                return true;
            }else{
                return false;
            }
        }

        public function getTipologia(){
            return $this->tipologia;
        }
    }