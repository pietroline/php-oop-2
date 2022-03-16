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

    // // Prodotto 1
    //     echo "<h2>Prodotto 1<br></h2>";
    //     $prodotto1 = new Cibo($prodotti[0]["nome"]);

    //     // controllo e set sul nome
    //     if($prodotto1->setNome($prodotti[0]["nome"])){
    //         echo "<b>Nome: </b>" . $prodotto1->getNome() . "<br>";
    //     }else{
    //         echo "Errore!! Nome non valido" . "<br>";
    //     }

    //     // controllo e set sulla classe
    //     if($prodotto1->setClasse($prodotti[0]["classe"])){
    //         echo "<b>Classe: </b>"  . $prodotto1->getClasse() . "<br>"; 
    //     }else{
    //         echo "Errore!! Classe non valida" . "<br>";
    //     }

    //     // controllo e set sull'alimentazione
    //     if($prodotto1->setAlimentazione($prodotti[0]["alimentazione"])){
    //         echo "<b>Alimentazione: </b>"  . $prodotto1->getAlimentazione() . "<br>"; 
    //     }else{
    //         echo "Errore!! Alimentazione non valida" . "<br>";
    //     }

    //     // controllo e set sul formato
    //     if($prodotto1->setFormato($prodotti[0]["formato"])){
    //         echo "<b>Formato: </b>"  . $prodotto1->getFormato() . "<br>"; 
    //     }else{
    //         echo "Errore!! Formato non valido" . "<br>";
    //     }

    //     // controllo e set sul peso
    //     if($prodotto1->setPeso($prodotti[0]["peso"])){
    //         echo "<b>Peso: </b>"  . $prodotto1->getPeso() . "<br>"; 
    //     }else{
    //         echo "Errore!! Peso non valido" . "<br>";
    //     }

    //     // controllo e set sul brand
    //     if($prodotto1->setBrand($prodotti[0]["brand"])){
    //         echo "<b>Brand: </b>" . $prodotto1->getBrand() . "<br>";   
    //     }else{
    //         echo "Errore!! Brand non valido" . "<br>";
    //     }

    //     // controllo e set sul prezzo
    //     if($prodotto1->setPrezzo($prodotti[0]["prezzo"])){
    //         echo "<b>Prezzo: </b>"  . $prodotto1->getPrezzo() . " &euro;<br>";  
    //     }else{
    //         echo "Errore!! Prezzo non valido" . "<br>";
    //     }

    //     // controllo e set sulla quantità disponibile
    //     if($prodotto1->setQuantitaDisponibile($prodotti[0]["quantita"])){
    //         echo "<b>Quantità disponibile: </b>"  . $prodotto1->getQuantitaDisponibile() . " pz. <br>";
    //     }else{
    //         echo "Errore!! Quantità non valido" . "<br>";
    //     }

    //     echo "<br><br><hr><br><br>";





    // // Prodotto 2
    //     echo "<h2>Prodotto 2<br></h2>";
    //     $prodotto2 = new Gioco($prodotti[1]["nome"]);

    //     // controllo e set sul nome
    //     if($prodotto2->setNome($prodotti[1]["nome"])){
    //         echo "<b>Nome: </b>" . $prodotto2->getNome() . "<br>";
    //     }else{
    //         echo "Errore!! Nome non valido" . "<br>";
    //     }

    //     // controllo e set sulla classe
    //     if($prodotto2->setClasse($prodotti[1]["classe"])){
    //         echo "<b>Classe: </b>"  . $prodotto2->getClasse() . "<br>"; 
    //     }else{
    //         echo "Errore!! Classe non valida" . "<br>";
    //     }

    //     // controllo sulla categoria
    //     if($prodotto2->setCategoria($prodotti[1]["categoria"])){
    //         echo "<b>Categoria: </b>"  . $prodotto2->getCategoria() . "<br>"; 
    //     }else{
    //         echo "Errore!! Categoria non valida" . "<br>";
    //     }

    //     // controllo e set sul brand
    //     if($prodotto2->setBrand($prodotti[1]["brand"])){
    //         echo "<b>Brand: </b>" . $prodotto2->getBrand() . "<br>";   
    //     }else{
    //         echo "Errore!! Brand non valido" . "<br>";
    //     }

    //     // controllo e set sul prezzo
    //     if($prodotto2->setPrezzo($prodotti[1]["prezzo"])){
    //         echo "<b>Prezzo: </b>"  . $prodotto2->getPrezzo(). " &euro;<br>";
    //     }else{
    //         echo "Errore!! Prezzo non valido" . "<br>";
    //     }

    //     // controllo e set sulla quantità disponibile
    //     if($prodotto2->setQuantitaDisponibile($prodotti[1]["quantita"])){
    //         echo "<b>Quantità disponibile: </b>"  . $prodotto2->getQuantitaDisponibile() . " pz. <br>";
    //     }else{
    //         echo "Errore!! Quantità non valido" . "<br>";
    //     }

    //     echo "<br><br><hr><br><br>";







    // // Prodotto 3
    //     echo "<h2>Prodotto 3<br></h2>";
    //     $prodotto3 = new Gioco($prodotti[2]["nome"]);

    //     // controllo e set sul nome
    //     if($prodotto3->setNome($prodotti[2]["nome"])){
    //         echo "<b>Nome: </b>" . $prodotto3->getNome() . "<br>";
    //     }else{
    //         echo "Errore!! Nome non valido" . "<br>";
    //     }

    //     // controllo e set sulla classe
    //     if($prodotto3->setClasse($prodotti[2]["classe"])){
    //         echo "<b>Classe: </b>"  . $prodotto3->getClasse() . "<br>"; 
    //     }else{
    //         echo "Errore!! Classe non valida" . "<br>";
    //     }

    //     // controllo sulla categoria
    //      if($prodotto3->setCategoria($prodotti[2]["categoria"])){
    //         echo "<b>Categoria: </b>"  . $prodotto3->getCategoria() . "<br>"; 
    //     }else{
    //         echo "Errore!! Categoria non valida" . "<br>";
    //     }

    //     // controllo e set sul brand
    //     if($prodotto3->setBrand($prodotti[2]["brand"])){
    //         echo "<b>Brand: </b>" . $prodotto3->getBrand() . "<br>";   
    //     }else{
    //         echo "Errore!! Brand non valido" . "<br>";
    //     }

    //     // controllo e set sul prezzo
    //     if($prodotto3->setPrezzo($prodotti[2]["prezzo"])){
    //         echo "<b>Prezzo: </b>"  . $prodotto3->getPrezzo() . " &euro;<br>";
    //     }else{
    //         echo "Errore!! Prezzo non valido" . "<br>";
    //     }

    //     // controllo e set sulla quantità disponibile
    //     if($prodotto3->setQuantitaDisponibile($prodotti[2]["quantita"])){
    //         echo "<b>Quantità disponibile: </b>"  . $prodotto3->getQuantitaDisponibile() . " pz. <br>";
    //     }else{
    //         echo "Errore!! Quantità non valido" . "<br>";
    //     }

    //     echo "<br><br><hr><br><br>";








    // // Prodotto 4
    //     echo "<h2>Prodotto 4<br></h2>";
    //     $prodotto4 = new Cibo($prodotti[3]["nome"]);

    //     // controllo e set sul nome
    //     if($prodotto4->setNome($prodotti[3]["nome"])){
    //         echo "<b>Nome: </b>" . $prodotto4->getNome() . "<br>";
    //     }else{
    //         echo "Errore!! Nome non valido" . "<br>";
    //     }

    //     // controllo e set sulla classe
    //     if($prodotto4->setClasse($prodotti[3]["classe"])){
    //         echo "<b>Classe: </b>"  . $prodotto4->getClasse() . "<br>"; 
    //     }else{
    //         echo "Errore!! Classe non valida" . "<br>";
    //     }

    //     // controllo e set sull'alimentazione
    //     if($prodotto4->setAlimentazione($prodotti[3]["alimentazione"])){
    //         echo "<b>Alimentazione: </b>"  . $prodotto4->getAlimentazione() . "<br>"; 
    //     }else{
    //         echo "Errore!! Alimentazione non valida" . "<br>";
    //     }

    //     // controllo e set sul formato
    //     if($prodotto4->setFormato($prodotti[3]["formato"])){
    //         echo "<b>Formato: </b>"  . $prodotto4->getFormato() . "<br>"; 
    //     }else{
    //         echo "Errore!! Formato non valido" . "<br>";
    //     }

    //     // controllo e set sul peso
    //     if($prodotto4->setPeso($prodotti[3]["peso"])){
    //         echo "<b>Peso: </b>"  . $prodotto4->getPeso() . "<br>"; 
    //     }else{
    //         echo "Errore!! Peso non valido" . "<br>";
    //     }

    //     // controllo e set sul brand
    //     if($prodotto4->setBrand($prodotti[3]["brand"])){
    //         echo "<b>Brand: </b>" . $prodotto4->getBrand() . "<br>";   
    //     }else{
    //         echo "Errore!! Brand non valido" . "<br>";
    //     }

    //     // controllo e set sul prezzo
    //     if($prodotto4->setPrezzo($prodotti[3]["prezzo"])){
    //         echo "<b>Prezzo: </b>"  . $prodotto4->getPrezzo() . " &euro;<br>";  
    //     }else{
    //         echo "Errore!! Prezzo non valido" . "<br>";
    //     }

    //     // controllo e set sulla quantità disponibile
    //     if($prodotto4->setQuantitaDisponibile($prodotti[3]["quantita"])){
    //         echo "<b>Quantità disponibile: </b>"  . $prodotto4->getQuantitaDisponibile() . " pz. <br>";
    //     }else{
    //         echo "Errore!! Quantità non valido" . "<br>";
    //     }

    //     echo "<br><br><hr><br><br>";








    // // Prodotto 5
    //     echo "<h2>Prodotto 5<br></h2>";
    //     $prodotto5 = new Cibo($prodotti[4]["nome"]);

    //     // controllo e set sul nome
    //     if($prodotto5->setNome($prodotti[4]["nome"])){
    //         echo "<b>Nome: </b>" . $prodotto5->getNome() . "<br>";
    //     }else{
    //         echo "Errore!! Nome non valido" . "<br>";
    //     }

    //     // controllo e set sulla classe
    //     if($prodotto5->setClasse($prodotti[4]["classe"])){
    //         echo "<b>Classe: </b>"  . $prodotto5->getClasse() . "<br>"; 
    //     }else{
    //         echo "Errore!! Classe non valida" . "<br>";
    //     }

    //     // controllo e set sull'alimentazione
    //     if($prodotto5->setAlimentazione($prodotti[4]["alimentazione"])){
    //         echo "<b>Alimentazione: </b>"  . $prodotto5->getAlimentazione() . "<br>"; 
    //     }else{
    //         echo "Errore!! Alimentazione non valida" . "<br>";
    //     }

    //     // controllo e set sul formato
    //     if($prodotto5->setFormato($prodotti[4]["formato"])){
    //         echo "<b>Formato: </b>"  . $prodotto5->getFormato() . "<br>"; 
    //     }else{
    //         echo "Errore!! Formato non valido" . "<br>";
    //     }

    //     // controllo e set sul peso
    //     if($prodotto5->setPeso($prodotti[4]["peso"])){
    //         echo "<b>Peso: </b>"  . $prodotto5->getPeso() . "<br>"; 
    //     }else{
    //         echo "Errore!! Peso non valido" . "<br>";
    //     }

    //     // controllo e set sul brand
    //     if($prodotto5->setBrand($prodotti[4]["brand"])){
    //         echo "<b>Brand: </b>" . $prodotto5->getBrand() . "<br>";   
    //     }else{
    //         echo "Errore!! Brand non valido" . "<br>";
    //     }

    //     // controllo e set sul prezzo
    //     if($prodotto5->setPrezzo($prodotti[4]["prezzo"])){
    //         echo "<b>Prezzo: </b>"  . $prodotto5->getPrezzo() . " &euro;<br>";
    //     }else{
    //         echo "Errore!! Prezzo non valido" . "<br>";
    //     }

    //     // controllo e set sulla quantità disponibile
    //     if($prodotto5->setQuantitaDisponibile($prodotti[4]["quantita"])){
    //         echo "<b>Quantità disponibile: </b>"  . $prodotto5->getQuantitaDisponibile() . " pz. <br>";
    //     }else{
    //         echo "Errore!! Quantità non valido" . "<br>";
    //     }

    //     echo "<br><br><hr><br><br>";

 
    

    // ---------------------------------------------------------------------------------------------------------------------------------------


    echo "<br><br><hr><hr><br><br>";

    echo "<h1>Carrello dell'utente:</h1>";

    $nomeUtente = "Mario";
    $cognomeUtente = "Rossi";
    $checkUtenteRegistrato = true;

    $user = new User($checkUtenteRegistrato, $cognomeUtente, $nomeUtente);

    // controllo e set sul nome
    if($user->setNome($nomeUtente)){
        echo "Nome: " . $user->getNome() . "<br>";
    }else{
        echo "Errore!! Nome non valido" . "<br>";
    }

    // controllo e set sul cognome
    if($user->setCognome($cognomeUtente)){
        echo "Cognome: " . $user->getCognome() . "<br>";
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


    $carrello = new Carrello();
    $carrello->setUtente($user);
    $prodottiCarrello = [$prodotto1, $prodotto2];

    if($user->getRegistrato()){
        //utente registrato => 20% di sconto su tutti i prodotti
        foreach($prodottiCarrello as $prodotto){
            $prezzo = $prodotto->getPrezzo();
            $prodotto->setPrezzo($prezzo*0.8); 
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
    
                   
   
    // echo "<h2>Prodotto 1<br></h2>";
    // echo "<b>Nome: </b>" . $carrello->getProdotti()[0]->getNome() . "<br>";
    // echo "<b>Classe: </b>"  . $carrello->getProdotti()[0]->getClasse() . "<br>"; 

    // if($carrello->getProdotti()[0]->getClasse() == "Cibo"){
    //     echo "<b>Alimentazione: </b>"  . $carrello->getProdotti()[0]->getAlimentazione() . "<br>"; 
    //     echo "<b>Formato: </b>"  . $carrello->getProdotti()[0]->getFormato() . "<br>"; 
    //     echo "<b>Peso: </b>"  . $carrello->getProdotti()[0]->getPeso() . "<br>"; 
    // }else if($carrello->prodotti[0]->getClasse() == "Gioco"){
    //     echo "<b>Alimentazione: </b>"  . $carrello->getProdotti()[0]->getCategoria() . "<br>"; 
    // }
    
    // echo "<b>Brand: </b>" . $carrello->getProdotti()[0]->getBrand(). "<br>";   
    // echo "<b>Prezzo: </b>"  . $carrello->getProdotti()[0]->getPrezzo() . " &euro;<br>";
    // echo "<b>Quantità disponibile: </b>"  . $carrello->getProdotti()[0]->getQuantitaDisponibile(). " pz. <br>";





    // echo "<br><br><hr><br><br>";




    // echo "<h2>Prodotto 2<br></h2>";
    // echo "<b>Nome: </b>" . $carrello->prodotti[1]->getNome() . "<br>";
    // echo "<b>Classe: </b>"  . $carrello->prodotti[1]->getClasse() . "<br>"; 

    //  if($carrello->prodotti[1]->getClasse() == "Cibo"){
    //     echo "<b>Alimentazione: </b>"  . $carrello->prodotti[1]->getAlimentazione() . "<br>"; 
    //     echo "<b>Formato: </b>"  . $carrello->prodotti[1]->getFormato() . "<br>"; 
    //     echo "<b>Peso: </b>"  . $carrello->prodotti[1]->getPeso() . "<br>"; 
    // }else if($carrello->prodotti[1]->getClasse() == "Gioco"){
    //     echo "<b>Alimentazione: </b>"  . $carrello->prodotti[1]->getCategoria() . "<br>"; 
    // }

    // echo "<b>Brand: </b>" . $carrello->prodotti[1]->getBrand(). "<br>";
    // echo "<b>Prezzo: </b>" .$carrello->prodotti[1]->getPrezzo() . " &euro;<br>";
    // echo "<b>Quantità disponibile: </b>"  . $carrello->prodotti[1]->getQuantitaDisponibile(). " pz. <br>";
   
    // echo "<br><br><hr><hr><br><br>";



// ---------------------------------------------------------------------------------------------------------------------------------------


    $cartaDiCredito = new CartaDiCredito("6/12/2030"); //data nel formato mm dd yyyy
    $cartaDiCredito->setUtente($user);

    if($cartaDiCredito->getCheckScadenza()){
        echo "<h3>Pagamento confermato! </h3> <br>";
    }else{
        echo "<h3>Pagamento rifiutato! Carta scaduta! </h3> <br>"; 
    }
    
    echo "Carta di credito di " . $cartaDiCredito->getUtente()->getCognome() . " " . $cartaDiCredito->getUtente()->getNome();

    echo "<br><br><hr><hr><br><br>";