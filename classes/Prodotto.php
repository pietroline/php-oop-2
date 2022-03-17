<?php
    class Prodotto{
        private $nome; //ad esempio: crocchette, snack, cuccia, cappotto
        protected $classe; // alimentazione, accessori, giochi, abbigliamento
        protected $brand; // Virtus, Next, Disney, Croci
        protected $prezzo;
        protected $quantitàDisponibile;

        public function __construct($nome){
            $this->setNome($nome);
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

        public function setBrand($brand){
            if(is_string($brand)){
                $this->brand = $brand;
                return true;
            }else{
                return false;
            }
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setClasse($classe){
            if(is_string($classe)){
                $this->classe = $classe;
                return true;
            }else{
                return false;
            }
        }

        public function getClasse(){
            return $this->classe;
        }

        public function setPrezzo($prezzo){
            if(is_numeric($prezzo) && $prezzo > 0.01){
                $this->prezzo = $prezzo;
                return true;
            }else{
                return false;
            }
        }
    
        public function getPrezzo(){
            return $this->prezzo;
        }

        public function setQuantitaDisponibile($quantitàDisponibile){
            if(is_numeric($quantitàDisponibile) && $quantitàDisponibile > 1){
                $this->quantitàDisponibile = $quantitàDisponibile;
                return true;
            }else{
                return false;
            }
        }

        public function getQuantitaDisponibile(){
            return $this->quantitàDisponibile;
        }

        public function setSconto($prezzo, $sconto, $key){
            if($sconto < 0){
                throw new Exception("Percentuale sconto negativa! Prodotto ". ($key+1) . " non scontatao");
            }else{
                $prezzoScontato = $prezzo - ($prezzo*$sconto/100);
                $this->setPrezzo($prezzoScontato);
            }
            
        }
    }