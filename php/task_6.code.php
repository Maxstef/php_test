<?php
    if(isset($_POST['newname'])){
        $new_name = htmlspecialchars($_POST['newname']);
        $array = file('../users.txt');
        $new_arr = array();
        $i = 0;
        foreach($array as $item){
            
            $new_arr[$i] = $item;
            $i++;
        }
        foreach($array as $item){
            if(rtrim($item) == $new_name){
                echo 'гравець з таким ім\'ям уже існує';
                die;
            }
        }
        file_put_contents('../users.txt', "\n$new_name", FILE_APPEND);
        echo 'гравця додано до списку. Перезавантажте сторінку щоб побачити його у списку.';
        
        
    } else if(isset($_POST['name']) && isset($_POST['result'])){
        $name = htmlspecialchars($_POST['name']);
        $result = htmlspecialchars($_POST['result']);
        $user_exist = FALSE;
        $users_array = file('../users.txt');
        foreach($users_array as $item){
            if(rtrim($item) == $name){
                $user_exist = TRUE;
            }
        }
        if(!$user_exist){
            echo 'Гравця з таким ім\'ям немає в списку. Спочатку додайте його в список.';
            die;
        }
        $result_array = file('../results.txt');
        foreach($result_array as $item){
            $a = explode('+',$item);
            if(isset($a[1]) && isset($a[0])){
                if(rtrim($a[1]) == $name){
                    if($a[0] >= $result){
                        echo 'Гравець показав кращий результат раніше тому даний не буде враховано';
                        die;
                    } else {
                   
                        $contents = file_get_contents('../results.txt');
                        $contents = str_replace($item, '', $contents);
                        file_put_contents('../results.txt', $contents);
                        file_put_contents('../results.txt', "\n$result" . "+" . $name, FILE_APPEND);
                        echo 'Результат додано. Перезавантажте сторінку щоб відобразити його у списку.';
                        die;
                    }
                }
            }
            
        }
        file_put_contents('../results.txt', "\n$result" . "+" . $name, FILE_APPEND);
        echo 'Результат додано. Перезавантажте сторінку щоб відобразити його у списку.';
    } else if(isset($_POST['reset'])){
        file_put_contents('../results.txt', '');
        echo 'Результати очищено. Перезавантажте стрінку.' ;  
    } else {
        echo 'something wrong';
    }
    

    