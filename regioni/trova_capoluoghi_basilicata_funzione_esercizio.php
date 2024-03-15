<?php
$json = '{
    "regioni": [
        {
            "nome": "Abruzzo",
            "capoluoghi": [
                "Chieti",
                "L\'Aquila",
                "Pescara",
                "Teramo"
            ],
            "province": [
                "CH",
                "AQ",
                "PE",
                "TE"
            ]
        },
        {
            "nome": "Basilicata",
            "capoluoghi": [
                "Matera",
                "Potenza"
            ],
            "province": [
                "MT",
                "PZ"
            ]
        },
        {
            "nome": "Calabria",
            "capoluoghi": [
                "Catanzaro",
                "Cosenza",
                "Crotone",
                "Reggio Calabria",
                "Vibo Valentia"
            ],
            "province": [
                "CZ",
                "CS",
                "KR",
                "RC",
                "VV"
            ]
        }
    ]
}';

// Funzione per trovare i capoluoghi di una regione



// Esempio di utilizzo della funzione per trovare i capoluoghi della Basilicata
function trovaCapoluoghiRegione($regione, $dati_json)
{
    
    return $capoluoghi;
}

// Funzione per controllare se i capoluoghi trovati sono corretti
$capoluoghi_basilicata = trovaCapoluoghiRegione('Basilicata', json_decode($json, true));
print_r($capoluoghi_basilicata);


function controllaCapoluoghi($capoluoghi_corretti, $capoluoghi_trovati)
{

}

// Esempio di utilizzo della funzione
$capoluoghi_corretti = ["Chieti", "L'Aquila", "Pescara", "Teramo"];
$capoluoghi_trovati =  $capoluoghi_basilicata;
controllaCapoluoghi($capoluoghi_corretti, $capoluoghi_trovati);



