<!-- 
    Ciao ragazzi, esercizio di oggi:

    nome repo: php-oop-2

    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.

    L’e-commerce vende prodotti per gli animali.
    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
 -->


<?php

    require_once __DIR__ . "/classes/User.php";
    require_once __DIR__ . "/classes/Prodotto.php";
    require_once __DIR__ . "/classes/Cibo.php";
    require_once __DIR__ . "/classes/Gioco.php";

    
    $prodotti = [
        [
            "nome" => "Virtus Dog Adult Rustic",
            "brand" => "Virtus",
            "classe" => "Cibo",
            "alimentazione" => "Cibo secco",
            "formato" => "busta",
            "peso" => 11.2,
            "prezzo" => 21.90,
            "quantita" => 5
        ],
        [
            "nome" => "Peluche Marvel Disney Spiderman",
            "brand" => "Disney",
            "classe" => "Gioco",
            "categoria" => "Peluche",
            "prezzo" => 16,95,
            "quantita" => 2
        ],
        [
            "nome" => "Trixie Palla Tennis Cane",
            "brand" => "Trixie",
            "classe" => "Gioco",
            "categoria" => "Palla",
            "prezzo" => 1,56,
            "quantita" => 18
        ],
        [
            "nome" => "Next Dog Adult Coniglio Piselli 400g",
            "brand" => "Next",
            "classe" => "Cibo",
            "alimentazione" => "Cibo umido",
            "formato" => "lattina",
            "peso" => 0.40,
            "prezzo" => 1.69,
            "quantita" => 15
        ],
        [
            "nome" => "Edgard & Cooper Snack Doggy Dental Mela Eucalipto",
            "brand" => "EDGARD & COOPER",
            "classe" => "Cibo",
            "alimentazione" => "Snack dentale",
            "formato" => "busta",
            "peso" => 0.240,
            "prezzo" => 4,75,
            "quantita" => 7
        ]

    ];

    $nomeUtente = "Mario";
    $CognomeUtente = "Rossi";
    $CheckUtenteRegistrato = false;

    $user = new User($CheckUtenteRegistrato, $CognomeUtente, $nomeUtente);
    
    // controllo sul nome
    if($user->setNome($nomeUtente)){
        echo "Nome: " . $user->getNome() . "<br>";
    }else{
        echo "Errore!! Nome non valido" . "<br>";
    }

    // controllo sul cognnome
    if($user->setNome($CognomeUtente)){
        echo "Cognome: " . $user->getCognome() . "<br>";
    }else{
        echo "Errore!! Cognome non valido" . "<br>";
    }

    // controllo sul cognnome
    if($user->setRegistrato($CheckUtenteRegistrato)){
        if($user->getRegistrato()){
            echo "<b>Utente registrato</b>";
        }else{
            echo "<b>Utente NON registrato</b>";
        }
    }else{
        echo "Errore!! Login non valido" . "<br>";
    }

    echo "<br><br><hr><br><br>";



    // ---------------------------------------------------------------------------------------------------------------------------------------




    foreach($prodotti as $key => $prodotto){

        echo "<h2>Prodotto ". ($key+1) ."<br></h2>";
        
        //istanzio oggetto in maniera opportuna basandomi sulla classe del prodotto
        if($prodotto["classe"] == "Cibo"){
            $flag_prodotto = new Cibo($prodotto["nome"]);
        }else if($prodotto["classe"] == "Gioco"){
            $flag_prodotto = new Gioco($prodotto["nome"]);
        }

        
 


        // controllo sul nome
        if($flag_prodotto->setNome($prodotto["nome"])){
            echo "<b>Nome: </b>" . $flag_prodotto->getNome() . "<br>";
        }else{
            echo "Errore!! Nome non valido" . "<br>";
        }

        // controllo sulla classe
        if($flag_prodotto->setClasse($prodotto["classe"])){
            echo "<b>Classe: </b>"  . $flag_prodotto->getClasse() . "<br>"; 
        }else{
            echo "Errore!! Classe non valida" . "<br>";
        }





        

        //condizioni valide solo per l'istanza dell'oggetto Cibo
        if($prodotto["classe"] == "Cibo"){
            // controllo sull'alimentazione
            if($flag_prodotto->setAlimentazione($prodotto["alimentazione"])){
                echo "<b>Alimentazione: </b>"  . $flag_prodotto->getAlimentazione() . "<br>"; 
            }else{
                echo "Errore!! Alimentazione non valida" . "<br>";
            }

            // controllo sul formato
            if($flag_prodotto->setFormato($prodotto["formato"])){
                echo "<b>Formato: </b>"  . $flag_prodotto->getFormato() . "<br>"; 
            }else{
                echo "Errore!! Formato non valido" . "<br>";
            }

            // controllo sul peso
            if($flag_prodotto->setPeso($prodotto["peso"])){
                echo "<b>Peso: </b>"  . $flag_prodotto->getPeso() . "<br>"; 
            }else{
                echo "Errore!! Peso non valido" . "<br>";
            }
        }


        //condizioni valide solo per l'istanza dell'oggetto Giochi
        if($prodotto["classe"] == "Gioco"){
            // controllo sulla categoria
            if($flag_prodotto->setCategoria($prodotto["categoria"])){
                echo "<b>Categoria: </b>"  . $flag_prodotto->getCategoria() . "<br>"; 
            }else{
                echo "Errore!! Categoria non valida" . "<br>";
            }
        }


        




        
        
        // controllo sul brand
        if($flag_prodotto->setBrand($prodotto["brand"])){
            echo "<b>Brand: </b>" . $flag_prodotto->getBrand() . "<br>";   
        }else{
            echo "Errore!! Brand non valido" . "<br>";
        }

        // controllo sul prezzo
        if($flag_prodotto->setPrezzo($prodotto["prezzo"])){
            echo "<b>Prezzo: </b>"  . $flag_prodotto->getPrezzo() . "<br>";  
        }else{
            echo "Errore!! Prezzo non valido" . "<br>";
        }

        // controllo sulla quantità disponibile
        if($flag_prodotto->setQuantitaDisponibile($prodotto["quantita"])){
            echo "<b>Quantità disponibile: </b>"  . $flag_prodotto->getQuantitaDisponibile() ."<br>";
        }else{
            echo "Errore!! Quantità non valido" . "<br>";
        }

       

        echo "<br><br><hr><br><br>";
    }


   
    

    