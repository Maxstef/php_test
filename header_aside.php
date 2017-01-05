<?php

?>

<header>
    <div class="logo">
        <a href="index.php"><img src="assets/logo1.png" alt="logo"></a>
    </div>
    <div class="right-header">
        <nav>
                <ul>
                    <a href="index.php"><li>Головна</li></a>
                    <a href="author.php"><li>Автор</li></a>
                    <a href="https://www.softgroup.ua/"><li>Soft Group</li></a>
                </ul>
            </nav>
        <div class="title">
            <?php if(isset($page_title)){
                  echo "<h1>SoftGroup</h1><h2>$page_title</h2>";
            } else {
                echo "<h1>SoftGroup</h1><h2>Тестове завдання</h2>";
            }?>
        </div>
    </div>
</header>
<aside>
    <div class="tasks-nav"> 
        <ul>
                    <a href="task_1.php"><li>Завдання 1</li></a>
                    <a href="task_2.php"><li>Завдання 2</li></a>
                    <a href="task_3.php"><li>Завдання 3</li></a>
                    <a href="task_4.php"><li>Завдання 4</li></a>
                    <a href="task_5.php"><li>Завдання 5</li></a>
                    <a href="task_6.php"><li>Завдання 6</li></a>
        </ul>
        
    </div>
</aside>
