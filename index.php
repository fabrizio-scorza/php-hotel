<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel</title>
</head>
<body>
    <!-- ciclo l'array hotels per generare in pagina un elemento con i dati di ogni hotel -->
    <?php
    // ciclo che restituisce ogni array contenete gli hotel
        foreach ($hotels as $hotel){
            // ciclo che restituisce ogni dato dell'hotel
            ?>
            <!-- div che contiene l'elemento con i dettagli dell'hotel -->
            <div>
                <?php
                foreach ($hotel as $key => $value){
                    if($key == 'name'){                        
                        echo "<h2> $value </h2>";
                    } elseif ($key == 'description'){
                        echo "<p> $value </p>";
                    } elseif ($key == 'parking'){
                        if($value){
                            echo "<p>L'hotel è dotato di parcheggio</p>";
                        } else{
                            echo "<p>L'hotel non è dotato di parcheggio</p>";
                        }
                    } elseif ($key == 'vote'){
                        echo "<p> Voto: $value </p>";
                    } else {
                        echo "<p> Distanza dal centro: $value km</p>";
                    }
                }
                ?>
            </div>
            <?php
        }
     ?>
</body>
</html>