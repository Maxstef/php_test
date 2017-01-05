<?php
    if(isset($_POST['number'])){
        $number = $_POST['number'];
        $result_array = array();
        for ($x = 1; $x < $number; $x++) {
            
            $x1 = 0;
            
            for ($y = 1; $y < $x / 2 + 0.5; $y++) {
                
                if($x % $y == 0){
                    $x1 += $y;
                    
                }
            }
            if($x1 == $x){
                
                array_push($result_array, $x);
            }
        }
        echo "Досконалі числа менші за $number: (";
        if(count($result_array) == 0){
            echo 'відсутні';
        }
        for($x = 0; $x < count($result_array); $x++) {
            echo $result_array[$x];
            if($x != count($result_array) - 1){
                echo ", ";
            }
            
        }
        echo ')';
    } else {
        echo 'something wrong';
    }
    

    