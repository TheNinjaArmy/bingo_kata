<?php
class Numbers_model extends CI_Model {


        public function create() 
        {
            $numbers = range(1, 75);
            shuffle($numbers);
            array_push($numbers, 0);
            return $numbers;
        }

        public function call_number($numbers){
            if($numbers[75]>=75){
                echo "Ya se llamaron todos los números.";
            } else {
                return "El nuevo número es: " . $numbers[$numbers[75]]; //numbers_called;
                $numbers[75]++;
            }
        }
        
}