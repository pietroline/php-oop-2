<?php

    require_once __DIR__ . "/../traits/DatiUtente.php";

    class CartaDiCredito{
        use DatiUtente;

        private $checkScadenza;

        public function __construct($dataScadenza){   
            $valori = explode("/",$dataScadenza);
            
            if(checkdate($valori[0], $valori[1], $valori[2])){
                //data valida

                $today = strtotime(date("m/d/y"));
                $dataScadenza = strtotime($dataScadenza); 
                if ($dataScadenza >= $today){ 
                    $this->checkScadenza = true;
                }else { 
                    $this->checkScadenza = false;
                }
            }else{
                return false;
            }
        }

        public function getCheckScadenza(){
            return $this->checkScadenza;
        }

    }