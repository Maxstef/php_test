<?php
    if(isset($_POST['array'])){
        $array = $_POST['array'];
        $result_array = array();
        
        for ($i = 0; $i < count($array); $i++) {
            $result_array[$i] = 0;
            for($j = 0; $j < $i; $j++){
                if($array[$i] == $array[$j]){
                    $result_array[$i] = $result_array[$i] + 1;
                }
            }
            echo $result_array[$i] . ' ';
        }
        
        
        
    } else {
        echo 'something wrong';
    }
    

    