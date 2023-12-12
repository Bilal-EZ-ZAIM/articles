<style>
    header {
        background-color: rgb(3, 103, 103);
        height: 10vh;
        color: #fff;
    }

    header .contenr {
        display: flex;
        height: 100%;
        justify-content: space-between;
        align-items: center;
    }


    header .contenr ul {
        display: flex;
        justify-content: space-between;
        color: #fff;
        gap: 40px;
    }

    header .contenr ul li a {
        color: #d8ffff;
        font-weight: bold;

        font-size: 20px;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    header .contenr div a {
        font-size: 26px;
        font-weight: bold;
        font-family: system-ui, 'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;
        color: #fff;
    }

    header .contenr form input {
        background-color: red;
        color: #fff;
        padding: 5px;
        cursor: pointer;
        font-weight: bold;
        font-size: 18px;
        border-radius: 8px;
    }
</style>

<header>
    <div class="contenr">

        <div> <a href="./index.php"> Articles </a></div>
        <?php


        // echo $_SESSION["id_user"];
        // echo $_SESSION["nom_user"];
        


        if (!$_SESSION["id_user"] && !$_SESSION["nom_user"]) {
            echo "
            
            <ul>
            <li> <a href='./regester.php'> regester </a></li>
            <li> <a href='./login.php'> login </a></li>
        </ul>
            ";
            // echo $_SESSION["id_user"];
            // echo $_SESSION["nom_user"];
        } else {
            // echo $_SESSION["id_user"];
            // echo $_SESSION["nom_user"];
            $nom = $_SESSION["nom_user"];

            echo "
            <ul>
            <li> <a href='./profile.php'> $nom </a></li>
            <li>
            <form action='http://localhost/article/app/reg.php' method='POST'>
                <input type='submit' name='logout' value='log out'>
            </form>
            
            </li>
        </ul>
            ";

        }
        ?>
       



    </div>

</header>