<?php

    require_once __DIR__ . "/../traits/DatiUtente.php";
    class Carrello{
        
        use DatiUtente;
       
        protected $prodotti=[];

        public function setProdotti($prodotto){
            $this->prodotti[] = $prodotto;       
        }

        public function getProdotti(){
            return $this->prodotti;
        }
    }