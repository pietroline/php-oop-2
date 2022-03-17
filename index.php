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
    require_once __DIR__ . "/classes/Antiparassitario.php";
    require_once __DIR__ . "/classes/Carrello.php";
    require_once __DIR__ . "/classes/CartaDiCredito.php";
    

    require_once __DIR__ . "/prodotti.php";

    

    foreach($prodotti as $key => $prodotto){

        // sintassi per creare nome variabile dinamico
        // ${"nome" .$key} -> nome0, nome1, nome2...
        // ${"prodotto" .($key+1)} --> prodotto1, prodotto2, prodotto3...
        
        if($prodotto["classe"] == "Cibo"){
            ${"prodotto" .($key+1)} = new Cibo($prodotto["nome"]);
        }else if($prodotto["classe"] == "Gioco"){
            ${"prodotto" .($key+1)} = new Gioco($prodotto["nome"]);
        }else if($prodotto["classe"] == "Antiparassitario"){
            ${"prodotto" .($key+1)} = new Antiparassitario($prodotto["nome"]);
        }

        echo "<h2>Prodotto ". ($key+1) . "</h2>";

        // controllo e set sul nome
        if(${"prodotto" .($key+1)}->setNome($prodotto["nome"])){
            echo "<b>Nome: </b>" . ${"prodotto" .($key+1)}->getNome() . "<br>";
        }else{
            echo "Errore!! Nome non valido" . "<br>";
        }

        // controllo e set sulla classe
        if(${"prodotto" .($key+1)}->setClasse($prodotto["classe"])){
            echo "<b>Classe: </b>"  . ${"prodotto" .($key+1)}->getClasse() . "<br>"; 
        }else{
            echo "Errore!! Classe non valida" . "<br>";
        }




        
        //controlli e set opportuni in base al tipo di istanza oggetto
        if($prodotto["classe"] == "Cibo"){
            // controllo e set sull'alimentazione
            if(${"prodotto" .($key+1)}->setAlimentazione($prodotto["alimentazione"])){
                echo "<b>Alimentazione: </b>"  . ${"prodotto" .($key+1)}->getAlimentazione() . "<br>"; 
            }else{
                echo "Errore!! Alimentazione non valida" . "<br>";
            }

            // controllo e set sul formato
            if(${"prodotto" .($key+1)}->setFormato($prodotto["formato"])){
                echo "<b>Formato: </b>"  . ${"prodotto" .($key+1)}->getFormato() . "<br>"; 
            }else{
                echo "Errore!! Formato non valido" . "<br>";
            }

            // controllo e set sul peso
            if(${"prodotto" .($key+1)}->setPeso($prodotto["peso"])){
                echo "<b>Peso: </b>"  . ${"prodotto" .($key+1)}->getPeso() ." Kg". "<br>"; 
            }else{
                echo "Errore!! Peso non valido" . "<br>";
            }
        }else if($prodotto["classe"] == "Gioco"){
            //controllo e set sulla categoria
            if(${"prodotto" .($key+1)}->setCategoria($prodotto["categoria"])){
                echo "<b>Categoria: </b>"  . ${"prodotto" .($key+1)}->getCategoria() . "<br>"; 
            }else{
                echo "Errore!! Categoria non valida" . "<br>";
            }
        }else if($prodotto["classe"] == "Antiparassitario"){
            //controllo e set sulla tipologia
            if(${"prodotto" .($key+1)}->settipologia($prodotto["tipologia"])){
                echo "<b>Tipologia: </b>"  . ${"prodotto" .($key+1)}->getTipologia() . "<br>"; 
            }else{
                echo "Errore!! Tipologia non valida" . "<br>";
            }
        }






        // controllo e set sul brand
        if(${"prodotto" .($key+1)}->setBrand($prodotto["brand"])){
            echo "<b>Brand: </b>" . ${"prodotto" .($key+1)}->getBrand() . "<br>";   
        }else{
            echo "Errore!! Brand non valido" . "<br>";
        }

        // controllo e set sul prezzo
        if(${"prodotto" .($key+1)}->setPrezzo($prodotto["prezzo"])){
            echo "<b>Prezzo: </b>"  . ${"prodotto" .($key+1)}->getPrezzo() . " &euro;<br>";  
        }else{
            echo "Errore!! Prezzo non valido" . "<br>";
        }

        // controllo e set sulla quantità disponibile
        if(${"prodotto" .($key+1)}->setQuantitaDisponibile($prodotto["quantita"])){
            echo "<b>Quantità disponibile: </b>"  . ${"prodotto" .($key+1)}->getQuantitaDisponibile() . " pz. <br>";
        }else{
            echo "Errore!! Quantità non valido" . "<br>";
        }

        echo "<br><br><hr><br><br>";
    }



    // ---------------------------------------------------------------------------------------------------------------------------------------

    

    echo "<br><br><hr><hr><br><br>";

    echo "<h1>Carrello dell'utente:</h1>";

    $nomeUtente = "Mario";
    $cognomeUtente = "Rossi";
    $checkUtenteRegistrato = true;

    $user = new User($checkUtenteRegistrato, $cognomeUtente, $nomeUtente);
    $carrello = new Carrello();
    $carrello->setNome($user->getNome());
    $carrello->setCognome($user->getCognome());
    $prodottiCarrello = [$prodotto1, $prodotto2];

    // controllo e set sul nome
    if($user->setNome($nomeUtente)){
        echo "Nome: " . $carrello->getNome() . "<br>";
    }else{
        echo "Errore!! Nome non valido" . "<br>";
    }

    // controllo e set sul cognome
    if($user->setCognome($cognomeUtente)){
        echo "Cognome: " . $carrello->getCognome() . "<br>";
    }else{
        echo "Errore!! Cognome non valido" . "<br>";
    }

    // controllo e set sul registrato
    if($user->setRegistrato($checkUtenteRegistrato)){
        if($user->getRegistrato()){
            echo "<b>Utente registrato</b>";
        }else{
            echo "<b>Utente NON registrato</b>";
        }
    }else{
        echo "Errore!! Login non valido" . "<br>";
    }


    echo "<br><br><hr><br><br>";



    if($user->getRegistrato()){
        //utente registrato => 20% di sconto su tutti i prodotti
        foreach($prodottiCarrello as $key => $prodotto){
            $prezzo = $prodotto->getPrezzo();
            try{
                $prodotto->setSconto($prezzo, -20, $key);
            }catch(Exception $e){
                echo "Eccezione: " . $e->getMessage() . "<br>";
            }
            $carrello->setProdotti($prodotto);
        }
    }else{
        //utente non registrato
        foreach($prodottiCarrello as $prodotto){
            $carrello->setProdotti($prodotto);
        }
         
    }


    //rendering dati del carrello
    foreach($prodottiCarrello as $key => $prodotto){
        echo "<h2>Prodotto " . ($key+1) ."</h2>";

        echo "<b>Nome: </b>" . $carrello->getProdotti()[$key]->getNome() . "<br>";
        echo "<b>Classe: </b>"  . $carrello->getProdotti()[$key]->getClasse() . "<br>"; 
       
        if($carrello->getProdotti()[$key]->getClasse() == "Cibo"){
            echo "<b>Alimentazione: </b>"  . $carrello->getProdotti()[$key]->getAlimentazione() . "<br>"; 
            echo "<b>Formato: </b>"  . $carrello->getProdotti()[$key]->getFormato() . "<br>"; 
            echo "<b>Peso: </b>"  . $carrello->getProdotti()[$key]->getPeso() ." Kg" . "<br>"; 
        }else if($carrello->getProdotti()[$key]->getClasse() == "Gioco"){
            echo "<b>Categoria: </b>"  . $carrello->getProdotti()[$key]->getCategoria() . "<br>"; 
        }else if($carrello->getProdotti()[$key]->getClasse() == "Gioco"){
            echo "<b>Antiparassitario: </b>"  . $carrello->getProdotti()[$key]->getCategoria() . "<br>"; 
        }

        echo "<b>Brand: </b>" . $carrello->getProdotti()[$key]->getBrand(). "<br>";   
        echo "<b>Prezzo: </b>"  . $carrello->getProdotti()[$key]->getPrezzo() . " &euro;<br>";
        echo "<b>Quantità disponibile: </b>"  . $carrello->getProdotti()[$key]->getQuantitaDisponibile(). " pz. <br>";


        echo "<br><br><hr><br><br>";
    }
    

    $cartaDiCredito = new CartaDiCredito("6/12/2020"); //data nel formato mm dd yyyy
    $cartaDiCredito->setNome($user->getNome());
    $cartaDiCredito->setCognome($user->getCognome());

    if($cartaDiCredito->getCheckScadenza()){
        echo "<h3>Pagamento confermato! </h3> <br>";
    }else{
        echo "<h3>Pagamento rifiutato! Carta scaduta! </h3> <br>"; 
    }

    
    echo "Carta di credito di " . $cartaDiCredito->getCognome() . " " . $cartaDiCredito->getNome();

    echo "<br><br><hr><hr><br><br>";
