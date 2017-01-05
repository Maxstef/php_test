<?php
    $page_title = 'Завдання 4';
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
                    <h2>Завдання 4</h2>
                    <p>Політичне життя однієї країни дуже жваве. У країні діє K політичних
партій, кожна з яких регулярно оголошує національний страйк. Дні, коли
хоча б одна з партій оголошує страйк, за умови, що це не субота або неділя
(коли і так ніхто не працює), завдають великої шкоди економіці країни.
i-та партія оголошує страйки строго кожні bi днів, починаючи з дня з
номером ai. Тобто i-та партія оголошує страйки в дні ai, ai + bi, ai + 2bi і т.д.
Якщо в якийсь день кілька партій оголошує страйк, то це вважається
загальнонаціональним страйком.
У календарі країни N днів, пронумерованих від 1 до N. Перший день
року є понеділком, шостий і сьомий дні року - вихідні, тиждень складається
з семи днів.
Вхідні дані
Програма отримує на вхід число днів в році N (1 &ltN&lt1000000) і число
політичних партій K (1&ltK&lt100). Далі йде K рядків, що описують графіки
проведення страйків. i-й рядок містить числа ai і bi (1&ltai,bi&ltN).
Вихідні дані
Виведіть єдине число: кількість страйків, що відбулися протягом року.</p>
                </section>
                <section class="solution">
                    <form action="" method="post">
                        <div id="d-input">
                            <div class="form-field">
                                <label for="days">Число днів в році N (1&ltN&lt1000000): </label><br>
                                <input id="days" name="days" type="number"><br>
                            </div>
                            <div class="form-field">
                                <label for="num">Число політичних партій K (1&ltK&lt100): </label><br>
                                <input id="num" name="num" type="number"><br>
                            </div>
                            <input type="button" value="Продовжити" id="nextBtn" class="button">
                        </div>
                        
                        <hr>
                        <div id="f-input">
                        </div>
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
        <script src="js/task4.js"></script>
        <script>
            
        </script>
    </body>
</html>
