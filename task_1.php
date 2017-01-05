<?php
    $page_title = 'Завдання 1';
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
                    <h2>Завдання 1</h2>
                    <p>У форму вводиться число N. Знайти всі досконалі числа до N.
Досконале число - це таке число, що дорівнює сумі всіх своїх дільників,
крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе
самого ділиться на числа 1, 2 і 3, які в сумі дають 6.</p>
                </section>
                <section class="solution">
                    <form action="" method="post">
                        <label for="number">Введіть число: </label>
                        <input type="number" name="number" id="number">
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
        <script src="js/task1.js"></script>
    </body>
</html>
