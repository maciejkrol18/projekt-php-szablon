<?php
    include "funkcje.php"
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>Imię Nazwisko 4BT</header>

        <main>
            <section>
                <h1>Tytuł sekcji</h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </section>
        </main>


        <aside>
            <?php 
                quiz();
            ?>
        </aside>

        <footer>
            <p>
                Źródła informacji: <br>
                
            </p>

            <p>
                <?php
                    czas();
                ?>
            </p>
        </footer>
</body>
</html>