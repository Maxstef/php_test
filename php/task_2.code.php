<?php
    if(isset($_POST['array'])){
        $array = $_POST['array'];
        $result_array = array();
        $max_length = 0;
        
        for ($i = 0; $i < count($array); $i++) {
            if(strlen($array[$i]) > $max_length){
                $max_length = strlen($array[$i]);
            }
        }
        for ($i = 0; $i < count($array); $i++) {
            if(strlen($array[$i]) == $max_length){
                array_push($result_array, $array[$i]);
            }
        }
        for ($i = 0; $i < count($result_array); $i++) {
            echo $result_array[$i];
            echo ' ';
        }
        
        
    } else {
        echo 'something wrong';
    }
    

    