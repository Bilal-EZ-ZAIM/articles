<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>articels</title>
    <link rel="stylesheet" href="./includs/index.css">
</head>
<style>
    main {
        background-color: #eaeaea;
    }

    main .contenr section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 90vh;
        gap: 40;
        line-height: 5;
        font-size: 22px;
        color: #073b3b;
        font-weight: bold;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    main .contenr section button {
        padding: 10px 20px;
        color: #fff;
        background-color: #073b3b;
        font-size: 22px;
        border-radius: 10px;
    }
</style>

<body>
    <?php
    require_once("./includs/header.php");
    ?>
    <main>
        <div class="contenr">
            <section>
                <p class="p">Bonjour , soyez la bienvenue sur votre site</p>
                <button>Articles</button>
            </section>
        </div>
    </main>
    <?php
    require_once("./includs/footer.php");
    ?>
</body>

</html>