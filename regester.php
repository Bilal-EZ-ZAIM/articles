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
     main .contenr{
        height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
     }
    main .contenr form  {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        line-height: 5;
        font-size: 22px;
        color: #073b3b;
        font-weight: bold;
        gap: 30px;
        font-family: system-ui,'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
    }
    main .contenr form input{
        height: 5vh;
        width: 300px;
        padding: 5px;
        outline: none;
        font-size: 20px;
        border-radius: 5px;
    }
    main .contenr form input:last-child{
        width: 200px;   
        color: #fff;
        background-color:#073b3b ;
        cursor: pointer;

    }
    main .contenr section button{
        padding: 10px 20px;
        color: #fff;
        background-color:  #073b3b;
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
            <form action="./reg.php" method="POST">
                <input type="text" name="first_name" placeholder="first name">
                <input type="text" name="last_name" placeholder="last name">
                <input type="text" name="username" placeholder="username">
                <input type="email" name="email"   placeholder="email">
                <input type="password" name="password" placeholder="password">
                <input type="submit" name="submit">
            </form>
        </div>
    </main>
    <?php
    require_once("./includs/footer.php");
    ?>

</body>

</html>