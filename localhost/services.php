<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Послуги</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <div class="logo"><img src="logo.jpg" alt=""></div>
        <div class="tabs">
            <a href="index.html">Головна</a>
            <a href="services.html">Послуги</a>
            <a href="about.html">Про нас</a>
        </div>
        <div class="phone">+3800000000</div>
    </header>

    <main>
    <div class="image-container">
            <div class="image-wrapper">
                <img src="a.jpg" alt="Зображення 1">
                <div class="image-text">
                    <p>Ціна від 550 до 800 грн</p>
                </div>
            </div>
            <div class="image-wrapper">
                <img src="b.jpg" alt="Зображення 2">
                <div class="image-text">
                    <p>Ціна від 200 до 800 грн</p>
                </div>
            </div>
            <div class="image-wrapper">
                <img src="c.jpg" alt="Зображення 3">
                <div class="image-text">
                    <p>Ціна від 100 до 700 грн</p>
                </div>
            </div>
            <div class="image-wrapper">
                <img src="d.jpg" alt="Зображення 4">
                <div class="image-text">
                    <p>Ціна договірна</p>
                </div>
            </div>
        </div>
        
        <table>
            <tr>
                <th colspan="2" style="background-color: #000; color: #fff;">КОМПЛЕКСНИЙ ДОГЛЯД ЗА СОБАКАМИ</th>
            </tr>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "services";
            $conn_dogs = new mysqli($servername, $username, $password, $dbname);
            if ($conn_dogs->connect_error) 
            {
                die("Помилка підключення до бази даних: " . $conn_dogs->connect_error);
            }

            $sql_dogs = "SELECT service, price FROM dogs";
            $result_dogs = $conn_dogs->query($sql_dogs);
            if ($result_dogs->num_rows > 0) {
                while($row = $result_dogs->fetch_assoc())
                {
                    echo "<tr><td>" . $row["service"] . "</td><td>" . $row["price"] . "</td></tr>";
                }
            } 
            else 
            {
                echo "<tr><td colspan='2'>Немає результатів</td></tr>";
            }
            $conn_dogs->close();
            ?>
        </table>
        
        <table>
            <tr>
                <th colspan="5" style="background-color: #000; color: #fff;">ДОГЛЯД ЗА КОТИКАМИ ТА КРОЛИКАМИ</th>
            </tr>
            <?php
            $conn_cats = new mysqli($servername, $username, $password, $dbname);

            if ($conn_cats->connect_error) {
                die("Помилка підключення до бази даних: ". $conn_cats->connect_error);
            }

            $sql_cats = "SELECT service, price FROM animal";
            $result_cats = $conn_cats->query($sql_cats);

            // Перевірка результатів запиту та виведення їх у таблицю HTML
            if ($result_cats->num_rows > 0) {
                while($row = $result_cats->fetch_assoc()) {
                    echo "<tr><td>" . $row["service"] . "</td><td>" . $row["price"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Немає результатів</td></tr>";
            }

            // Закриваємо підключення до бази даних для таблиці cats
            $conn_cats->close();
            ?>
        </table>
        
        <table>
            <tr>
                <th colspan="5" style="background-color: #000; color: #fff;">ДОДАТКОВІ ПОСЛУГИ</th>
            </tr>
            <?php
            // Третє підключення для таблиці other
            $conn_other = new mysqli($servername, $username, $password, $dbname);

            if ($conn_other->connect_error) {
                die("Помилка підключення до бази даних: " . $conn_other->connect_error);
            }

            $sql_other = "SELECT service, price FROM other";
            $result_other = $conn_other->query($sql_other);

            // Перевірка результатів запиту та виведення їх у таблицю HTML
            if ($result_other->num_rows > 0) {
                while($row = $result_other->fetch_assoc()) {
                    echo "<tr><td>" . $row["service"] . "</td><td>" . $row["price"] . "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Немає результатів</td></tr>";
            }

            // Закриваємо підключення до бази даних для таблиці other
            $conn_other->close();
            ?>
        </table>
        <p class="text-center large-text">
            Ми знаємо, як складно іноді знайти вільний час, щоб відвезти собачку на процедури. Тому пропонуємо додаткову послугу - 
            Зоотаксі.<br> Послуга надається для собачок до 10 кг і на відстань до 10 км від салону. Ми заберемо та відвеземо собачку в 
            будь-який район Львова.<br> І найголовніше - це фінансово вигідніше і безпечніше ніж таксі, оскільки ми перевозимо собачку 
            в спеціальному автокріслі.<br>Ви можете спостергати за процесом грумінгу з будь-якої локації через онлайн трансляцію. 
            <br> Важливо! Якщо Ваша собачка дуже стресує в незнайомій обстановці, не рекомендуємо користуватись даною послугою
        </p>
    </main>
    
    <footer>
        <div class="social-links">
            <a href="https://www.facebook.com/">Facebook</a>
            <a href="https://twitter.com/">Twitter</a>
            <a href="https://www.instagram.com/">Instagram</a>
        </div>
    </footer>
</body>
</html>
