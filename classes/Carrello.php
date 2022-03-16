<?php

    class Carrello{
        public $utente;
        public $prodotti=[];

        public function setUtente($utente){
            $this->utente = $utente;       
        }

        public function getUtente(){
            return $this->utente;
        }

        public function setProdotti($prodotto){
            $this->prodotti[] = $prodotto;       
        }

        public function getProdotti(){
            return $this->prodotti;
        }
    }