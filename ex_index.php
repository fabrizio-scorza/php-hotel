<?php
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