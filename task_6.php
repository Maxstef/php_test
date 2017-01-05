<?php
    $page_title = 'Завдання 6';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Maksym Stefanko</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .half-width{
                width: 48%;
                display: inline-block;
                overflow: hidden;
            }
            .solution{
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        <div class="container">
             <?php require 'header_aside.php';?>
            <div class="main">
                <section>
                    <h2>Завдання 6</h2>
                    <p>Змагання з гри «Тетріс-онлайн» проводяться за такими правилами:
                         Кожен учасник реєструється на сайті гри під певним ігровим ім'ям.
                         Імена учасників не повторюються. Чемпіонат проводиться протягом певного часу.
                         У будь-який момент цього часу будь-який зареєстрований учасник може зайти на сайт чемпіонату і почати залікову гру.
                         Після закінчення гри її результат (кількість балів) фіксується і заноситься до протоколу. Учасники мають право грати кілька разів.
                         Кількість спроб одного учасника не обмежується. Остаточний результат учасника визначається по одній грі, кращою для даного учасника.
                         Більш високе місце в змаганнях займає учасник, що показав кращий результат.
                         При рівності результатів більш високе місце займає учасник, раніше показав кращий результат.
                         В ході змагань заповнюється протокол, кожен рядок якого описує одну гру і містить результат учасника і його ігрове ім'я.
                         Протокол формується в реальному часі по ходу проведення чемпіонату, тому рядки в ньому розташовані в порядку проведення ігор:
                         чим раніше зустрічається рядок у протоколі, тим раніше закінчилася відповідна цьому рядку гра.
                         Напишіть програму, яка за даними протоколу визначає переможця і призерів. Гарантується, що в чемпіонаті бере участь не менше трьох гравців.</p>
                </section>
                <section class="solution" style="overflow: hidden;">
                    <form class="half-width" action="" method="post" id="=add-result-form">
                        <label for="name">Ім'я гравця: </label><br>
                        <input type="text" id="name" name="name"><br>
                        <label for="result">Результат: </label><br>
                        <input type="number" id="result" name="result"><br>
                        <input type="submit" value="Зберегти результат" id="add-result-btn" class="button">
                        <div id="feedback1" style="font-size:  17px; height: 40px;"></div>
                    </form>
                    <form class="half-width" action="" method="post" id="=add-user-form">
                        <label for="new-name">Додати нового гравця: </label><br>
                        <input type="text" id="new-name"><br>
                        <input type="submit" value="Додати гравця" id="add-user-btn" class="button">
                        <div id="feedback2" style="font-size:  17px; height: 40px;"></div>
                    </form>
                    
                    
                    <div  class="half-width" id="list-users">
                        
                        <?php
                          echo  "<h4>Гравці:</h4>";
                        if(!file_exists('users.txt')){
                            file_put_contents('users.txt', '');
                        }
                        
                        $array = file('users.txt');
                        sort($array);
                        echo '<ul>';
                        foreach($array as $item){
                            echo "<li>$item</li>";
                        }
                        echo '</ul>';
                    ?>
                    </div>
                    <div class="half-width" id="list-results">
                        
                        <?php
                        echo "<h4>Кращі результати:</h4>";
                        if(!file_exists('results.txt')){
                            file_put_contents('results.txt', '');
                        }
                        
                        $array = file('results.txt');
                        $new_array = array();
                        foreach($array as $item){
                            $a = explode('+',$item);
                            if(isset($a[0]) && isset($a[1])){
                                $new_array[$a[1]] = $a[0];
                            }
                            
                        }
                        arsort($new_array);
                        //krsort($new_array);
                        
                        //sort($array);
                        if(count($new_array) == 0){
                            echo "<p>На даний момент ніяких результатів немає</p>";
                        }
                        echo '<ul>';

                        foreach($new_array as $key => $item){
                            
                            
                            echo "<li>$key - $item</li>";
                            
                            
                        }
                        echo '</ul>';
                    ?>
                        <input type="button" value="Очистити всі дані" id="reset-btn" class="button">
                        <div id="feedback3" style="font-size:  17px;"></div>
                    </div>
                    <img src="assets/loading.jpg" id="loading" alt="load">
                    <div id="result"></div>
                </section>
                
            </div>
            <footer>Автор: Стефанко Максим &copy <br> 2017 рік
            </footer>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/task6.js"></script>
    </body>
</html>
