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
function trovaCapoluoghiRegione($regione, $dati_json)
{
    $capoluoghi = [];
    foreach ($dati_json['regioni'] as $regione_data) {
        if ($regione_data['nome'] === $regione) {
            $capoluoghi = $regione_data['capoluoghi'];
            break;
        }
    }
    return $capoluoghi;
}


// Esempio di utilizzo della funzione per trovare i capoluoghi della Basilicata
$capoluoghi_basilicata = trovaCapoluoghiRegione('Basilicata', json_decode($json, true));
print_r($capoluoghi_basilicata);


// Funzione per controllare se i capoluoghi trovati sono corretti
function controllaCapoluoghi($capoluoghi_corretti, $capoluoghi_trovati) {
    if ($capoluoghi_corretti === $capoluoghi_trovati) {
        echo "I capoluoghi trovati sono corretti!\n";
        print_r($capoluoghi_trovati);
    } else {
        echo "I capoluoghi trovati non sono corretti! \nho trovato\n";
        print_r($capoluoghi_trovati);
        echo "Mi Aspettavo\n";
        print_r($capoluoghi_corretti);
        // print_r($capoluoghi_trovati);
    }
}
function arrayAsEquals($expected, $to_check) {
    if ($expected === $to_check) {
        echo "I capoluoghi trovati sono corretti!\n";
        print_r($to_check);
    } else {
        echo "I capoluoghi trovati non sono corretti! \nho trovato\n";
        print_r($to_check);
        echo "Mi Aspettavo\n";
        print_r($expected);
        // print_r($capoluoghi_trovati);
    }
}

// Esempio di utilizzo della funzione
$capoluoghi_corretti = ["Chieti", "L'Aquila", "Pescara", "Teramo"];
$capoluoghi_trovati =  $capoluoghi_basilicata;
echo controllaCapoluoghi($capoluoghi_corretti, $capoluoghi_trovati);

$capoluoghi_corretti = ["Matera", "Potenza"];
$capoluoghi_trovati = $capoluoghi_basilicata;
echo controllaCapoluoghi($capoluoghi_corretti, $capoluoghi_trovati);

$capoluoghi_corretti = ["Matera", "Potenza"];
$capoluoghi_trovati = $capoluoghi_basilicata;
echo arrayAsEquals($capoluoghi_corretti, $capoluoghi_trovati);