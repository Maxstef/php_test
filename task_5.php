<?php
    $page_title = 'Завдання 5';
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
                    <h2>Завдання 5</h2>
                    <p>Задано текст. Словом вважається послідовність непробільних символів, які йдуть підряд. Слова розділені одним або більшим числом пробілів або символами кінця рядка. Для кожного слова з цього тексту підрахуйте, скільки разів воно зустрічалося в цьому тексті раніше. Використайте словники.</p>
                </section>
                <section class="solution">
                    <form action="" method="post">
                        <label for="txt">Введіть текст: </label><br>
                        <textarea cols="60" rows="10" name="txt" id="txt"></textarea>
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
        <script src="js/task5.js"></script>
    </body>
</html>
