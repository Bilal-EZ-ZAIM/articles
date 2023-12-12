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

    .articles {
        height: auto;
        display: grid;
        gap: 50px;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        padding-bottom: 40px;

    }

    .articles div {
        background-color: #c9d7da;
        border-radius: 8px;
        height: 30vh;
        padding: 20px;
        font-weight: bold;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .articles .title{
        color: #004352;
        font-size: 22px;
        margin-bottom: 5px;

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
            <div class="articles">
                <?php
                require("./app/articles.php");
                $data = new Article();
                $aff = $data->affichage();
                foreach ($aff as $art) {
                    echo "
                   <div>
                   <p class='title'> $art[titre] <p>
                   <p> $art[contenu] <p>
                   
                   </div>
                   ";
                }


                ?>
            </div>
        </div>
    </main>
    <?php
    require_once("./includs/footer.php");
    ?>
</body>

</html>