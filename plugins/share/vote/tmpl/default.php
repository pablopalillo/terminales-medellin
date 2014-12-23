<?php
    echo "<div class='plg-vote-container'>"
        ."<div class='plg-vote-stars'>";
            if(5 == $arrData[0]->PROM){
                echo "<div ref='1' class='plg-vote-star-active'></div>"
                    ."<div ref='2' class='plg-vote-star-active'></div>"
                    ."<div ref='3' class='plg-vote-star-active'></div>"
                    ."<div ref='4' class='plg-vote-star-active'></div>"
                    ."<div ref='5' class='plg-vote-star-active'></div>";
            } else {
                if($arrData[0]->PROM >= 4){
                    echo "<div ref='1' class='plg-vote-star-active'></div>"
                        ."<div ref='2' class='plg-vote-star-active'></div>"
                        ."<div ref='3' class='plg-vote-star-active'></div>"
                        ."<div ref='4' class='plg-vote-star-active'></div>"
                        ."<div ref='5' class='plg-vote-star-inactive'></div>";
                } else {
                    if($arrData[0]->PROM >= 3){
                        echo "<div ref='1' class='plg-vote-star-active'></div>"
                            ."<div ref='2' class='plg-vote-star-active'></div>"
                            ."<div ref='3' class='plg-vote-star-active'></div>"
                            ."<div ref='4' class='plg-vote-star-inactive'></div>"
                            ."<div ref='5' class='plg-vote-star-inactive'></div>";
                    } else {
                        if($arrData[0]->PROM >= 2){
                            echo "<div ref='1' class='plg-vote-star-active'></div>"
                                ."<div ref='2' class='plg-vote-star-active'></div>"
                                ."<div ref='3' class='plg-vote-star-inactive'></div>"
                                ."<div ref='4' class='plg-vote-star-inactive'></div>"
                                ."<div ref='5' class='plg-vote-star-inactive'></div>";
                        } else {
                            if($arrData[0]->PROM >= 1){
                                echo "<div ref='1' class='plg-vote-star-active'></div>"
                                    ."<div ref='2' class='plg-vote-star-inactive'></div>"
                                    ."<div ref='3' class='plg-vote-star-inactive'></div>"
                                    ."<div ref='4' class='plg-vote-star-inactive'></div>"
                                    ."<div ref='5' class='plg-vote-star-inactive'></div>";
                            } else {
                                echo "<div ref='1' class='plg-vote-star-inactive'></div>"
                                    ."<div ref='2' class='plg-vote-star-inactive'></div>"
                                    ."<div ref='3' class='plg-vote-star-inactive'></div>"
                                    ."<div ref='4' class='plg-vote-star-inactive'></div>"
                                    ."<div ref='5' class='plg-vote-star-inactive'></div>";
                            }
                        }
                    }
                }
            }
        $intRating = empty($arrData[0]->PROM) ? 0 : $arrData[0]->PROM;
        echo "</div>"
        ."<div class='plg-vote-prom'>Promedio Puntuación: ".round($intRating, 1)." de 5 /</div>"
        ."<div class='plg-vote-count'>Total Votos: ".round($arrData[0]->COUNT)."</div>"
        ."</div>";
?>