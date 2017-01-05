<?php

if(isset($_POST['array']) && isset($_POST['days']) && isset($_POST['number'])){
        $array = $_POST['array'];
        $days = $_POST['days'];
        $number = $_POST['number'];
        $result = 0;
        
        for ($number_of_day = 1; $number_of_day <= $days; $number_of_day++) {
            $add = FALSE;
            
            if(($number_of_day % 7) == 6 || ($number_of_day % 7) == 0){
                
                continue;
            }
            
            for($i = 0; $i < count($array); $i++){
                
                for($j = intval($array[$i]['ai']); $j <= $number_of_day; $j = $j + intval($array[$i]['bi'])){
                    
                        if($j == $number_of_day){
                            
                            $add = TRUE;
                            break;
                        }
                    }
                if($add){
                    $result = $result + 1;
                    break;
                } 
            }
        }
        echo "Кількість страйків: " . $result;
        
        
        
    } else {
        echo 'something wrong';
    }