<?php
session_start();

if ($_SESSION["id_user"] === null) {
    header("location: /article/index.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./includs/index.css">
</head>
<style>
    main {
        background-color: #eaeaea;
    }

    main .contenr {
        height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    main .contenr form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        line-height: 5;
        font-size: 22px;
        color: #073b3b;
        font-weight: bold;
        gap: 30px;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    main .contenr form input {
        height: 5vh;
        width: 500px;
        padding: 10px;
        outline: none;
        font-size: 20px;
        border-radius: 5px;
    }
    main .contenr form textarea{
        outline: none;
        width: 500px;
        padding: 10px;
        font-size: 18px;
        height: 40vh;
        border-radius: 5px;
    }
    main .contenr form input:last-child {
        width: 200px;
        color: #fff;
        background-color: #073b3b;
        cursor: pointer;
        padding: 0;

    }

   
</style>

<body>
    <?php
    require("./includs/header.php");
    ?>
  
    <main>
        <div class="contenr">
        <form action="./app/art.php" method="POST">
                <input type="text" name="titer" placeholder="entere titer">
                <textarea name="article" id="" placeholder="articles"></textarea>
                <input type="submit" name="ajout_articls" value="add articles">
            </form>
        </div>
    </main>
  
    <?php
    include("./includs/footer.php");
    ?>

</body>

</html>