<?php

    //I prodotti antiparassitari saranno disponibili solo nel mese di MAG, GIU, LUG, AGO
    //Tutti gli altri prodotti saranno presenti tutto l'anno

    $tuttiProdotti = [
        [
            "nome" => "Virtus Dog Adult Rustic",
            "brand" => "Virtus",
            "classe" => "Cibo",
            "alimentazione" => "Cibo secco",
            "formato" => "busta",
            "peso" => 11.2,
            "prezzo" => 21.90,
            "quantita" => 5,
            "disponibilita"=> ["GEN", "FEB", "MAR", "APR", "MAG", "GIU", "LUG", "AGO", "SET", "OTT", "NOV", "DIC"]
        ],
        [
            "nome" => "Peluche Marvel Disney Spiderman",
            "brand" => "Disney",
            "classe" => "Gioco",
            "categoria" => "Peluche",
            "prezzo" => 16,95,
            "quantita" => 2,
            "disponibilita"=> ["GEN", "FEB", "MAR", "APR", "MAG", "GIU", "LUG", "AGO", "SET", "OTT", "NOV", "DIC"]
        ],
        [
            "nome" => "Trixie Palla Tennis Cane",
            "brand" => "Trixie",
            "classe" => "Gioco",
            "categoria" => "Palla",
            "prezzo" => 1,56,
            "quantita" => 18,
            "disponibilita"=> ["GEN", "FEB", "MAR", "APR", "MAG", "GIU", "LUG", "AGO", "SET", "OTT", "NOV", "DIC"]
        ],
        [
            "nome" => "Next Dog Adult Coniglio Piselli 400g",
            "brand" => "Next",
            "classe" => "Cibo",
            "alimentazione" => "Cibo umido",
            "formato" => "lattina",
            "peso" => 0.40,
            "prezzo" => 1.69,
            "quantita" => 15,
            "disponibilita"=> ["GEN", "FEB", "MAR", "APR", "MAG", "GIU", "LUG", "AGO", "SET", "OTT", "NOV", "DIC"]
        ],
        [
            "nome" => "Edgard & Cooper Snack Doggy Dental Mela Eucalipto",
            "brand" => "EDGARD & COOPER",
            "classe" => "Cibo",
            "alimentazione" => "Snack dentale",
            "formato" => "busta",
            "peso" => 0.240,
            "prezzo" => 4,75,
            "quantita" => 7,
            "disponibilita"=> ["GEN", "FEB", "MAR", "APR", "MAG", "GIU", "LUG", "AGO", "SET", "OTT", "NOV", "DIC"]
        ],
        [
            "nome" => "Collare Antiparassitario per Cani Scalibor 65cm",
            "brand" => "SCALIBOR",
            "classe" => "Antiparassitario",
            "tipologia" => "Collare",
            "prezzo" => 26.65,
            "quantita" => 4,
            "disponibilita"=> ["MAG", "GIU", "LUG", "AGO"]
        ],
        [
            "nome" => "Tri-Act 10-20Kg 6 Pipette",
            "brand" => "FRONTLINE",
            "classe" => "Antiparassitario",
            "tipologia" => "Pipette",
            "prezzo" => 38.50,
            "quantita" => 12,
            "disponibilita"=> ["MAG", "GIU", "LUG", "AGO"]
        ]

    ];

    $filtroMese = "LUG";  //visualizza la lista di disponibilità prodotti per  il mese indicato

    $prodotti = [];
    foreach($tuttiProdotti as $prodotto){
        if(in_array($filtroMese, $prodotto["disponibilita"])){
            $prodotti[] = $prodotto;
        }
    }
    echo "<b>Prodotti disponibili nel mese di: ". $filtroMese . "</b>";