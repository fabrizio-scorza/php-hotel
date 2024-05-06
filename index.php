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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="text-bg-dark">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <div class="container text-center mt-5">
        <div class="row">
            <!-- ciclo l'array hotels per generare in pagina un elemento con i dati di ogni hotel -->
            <?php
            // ciclo che restituisce ogni array contenete gli hotel
                foreach ($hotels as $hotel){
                    // ciclo che restituisce ogni dato dell'hotel
                    ?>
                    <!-- div che contiene l'elemento con i dettagli dell'hotel -->
                    <div class="col">
                        <div class="card">
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
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    
</body>
</html>