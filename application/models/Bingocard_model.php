<?php
class Bingocard_model extends CI_Model {


    
        public function create() 
        {     
            for($i=0; $i<5; $i++){
                $bingo_card[$i] = range(15*$i+1, 15*($i+1));
                shuffle($bingo_card[$i]);
                $bingo_card[$i] = array_slice($bingo_card[$i], 0, 5);
            }
            $bingo_card[2][2] = 0;
            return $bingo_card;
        }

        public function print_card($bingo_card ){
            for($i=0; $i<5; $i++){
                for($j=0; $j<5; $j++){
                    echo sprintf("%02d", $bingo_card[$i][$j]) . " ";
                }
                echo "<br>";
            }
        }
        
}