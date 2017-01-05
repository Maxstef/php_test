<?php
    if(isset($_POST['array'])){
        $array = $_POST['array'];
        $result = 0;
        
        for ($i = 0; $i < count($array); $i++) {
            if(isPrime($array[$i])){
                $result = $result + 1;
            }
        }
        echo 'Кількість простих чисел: ' . $result;
        
        
    } else {
        echo 'something wrong';
    }

    function isPrime($num) {
        if($num % 2 == 0) {
            return false;
        }
        $a = ceil(sqrt($num));
        for($i = 3; $i <= $a; $i = $i + 2) {
            if($num % $i == 0)
                return false;
        }

        return true;
    }
    

  

