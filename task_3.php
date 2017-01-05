<?php
    $page_title = 'Завдання 3';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Maksym Stefanko</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
             <?php require 'header_aside.php';?>
            <div class="main">
                <section>
                    <h2>Завдання 3</h2>
                    <p>Вводяться N натуральних чисел більше 2. Підрахувати, скільки серед них простих чисел.</p>
                </section>
                <section class="solution">
                    <form action="" method="post">
                        <label for="txt">Введіть числа через кому: </label><br>
                        <textarea cols="60" rows="10" name="txt" id="txt" onkeyup="validate()"></textarea>
                        <input type="submit" value="Результат" id="submitBtn" class="button">
                        
                    </form>
                    <img src="assets/loading.jpg" id="loading" alt="load">
                    <div id="result"></div>
                </section>
                
            </div>
            <footer>Автор: Стефанко Максим &copy <br> 2017 рік
            </footer>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/task3.js"></script>
        <script>
            
        </script>
    </body>
</html>
