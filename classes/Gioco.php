<?php

    require_once __DIR__ . "/Prodotto.php";

    class Gioco extends Prodotto{
        private $categoria;
        

        public function setCategoria($categoria){
            if(is_string($categoria)){
                $this->categoria = $categoria;
                return true;
            }else{
                return false;
            }
        }

        public function getCategoria(){
            return $this->categoria;
        }

    }