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
        min-height: 100vh;
        padding: 20px 0;
    }

    main .contenr {

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
        margin-bottom: 40px;
    }

    main .contenr form input {
        height: 5vh;
        width: 500px;
        padding: 10px;
        outline: none;
        font-size: 20px;
        border-radius: 5px;
    }

    main .contenr form textarea {
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

    .articles {
        height: auto;
        display: grid;
        gap: 50px;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        padding-bottom: 40px;

    }

    .articles .cart{
        background-color: #c9d7da;
        border-radius: 8px;
        min-height: 30vh;
        padding: 20px;
        font-weight: bold;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .articles .title {
        color: #004352;
        font-size: 22px;
        margin-bottom: 5px;
    }
    .articles .cart div {
        margin-top: 10px;
    }
    .articles .cart div button{
        padding: 5px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }
    #num,
    #numd{
        display: none;
    }
    #sup{
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        display: none;
    }
</style>

<body>
    <?php
    require("./includs/header.php");
    ?>

    <main>
        <div class="contenr">
            <form action="./app/art.php" method="POST">
                <input type="text" name="titer" placeholder="entere titer" id="titer">
                <textarea name="article" id="text" placeholder="articles"></textarea>
                <input type="number" id="num" name="nimero">
                <input type="submit" name="ajout_articls" value="add articles" id="sub">
                <!-- <input type="submit" name="edit_articls" value="edite articles" id="sub"> -->
            </form>

            <form action="./app/art.php" method="POST" id="sup" class="supreme">
            <input type="number" id="numd" name="nime">
                <input type="submit" value="delet" name="delete">
            </form>
            <div class="articles">
                <?php
                require("./app/articles.php");
                $data = new Article();
                $aff = $data->affichageId();
                foreach ($aff as $art) {
                    echo "
                   <div class='cart'>
                   <p class='title'> $art[titre] </p>
                   <p> $art[contenu] </p>
                   <div>
                        <button class='edit' value='$art[id]'> Edite </button>
                        <button value='$art[id]' class='delet'> delete </button>
                   </div>
                   </div>
                   ";
                }


                ?>
            </div>
        </div>
    </main>

    <?php
    include("./includs/footer.php");
    ?>

    <script>
        let btn =document.querySelectorAll('.edit');
        let cart =document.querySelectorAll('.cart');
        let text =document.getElementById("text");
        let titer =document.getElementById("titer");
        let sub = document.getElementById("sub");
        let num =document.getElementById("num");
        let supreme =document.querySelector("#sup");
        let delet =document.querySelectorAll(".delet");
        let numd =document.getElementById("numd");
        console.log(supreme);
        console.log(btn);

        btn.forEach((item , index)=>{
            item.addEventListener("click",()=>{
                console.log(item.value);
                text.value = cart[index].children[1].textContent;
                titer.value = cart[index].children[0].textContent;
                sub.name = "edit_articls";
                sub.value = "edit article";
                num.value = item.value;
                console.log(sub);
            })
            
        })
        delet.forEach((item , index)=>{
            item.addEventListener("click",()=>{
                numd.value = item.value;
                supreme.style.display = "flex";
                console.log(numd);
            })
            
        })
    </script>

</body>

</html>