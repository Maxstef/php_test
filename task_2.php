<?php
    $page_title = 'Завдання 2';
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
                    <h2>Завдання 2</h2>
                    <p>У форму вводиться текст, слова в якому розділені пробілами і
розділовими знаками. Вилучити з цього тексту всі слова найбільшої
довжини. (Слів найбільшої довжини може бути декілька).</p>
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
        <script src="js/task2.js"></script>
    </body>
</html>
