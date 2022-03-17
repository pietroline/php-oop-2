<?php

    require_once __DIR__ . "/../traits/DatiUtente.php";
    class User{

        use DatiUtente;
    
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

    }