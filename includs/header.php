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

 
    header .contenr ul{
        display: flex;
        justify-content: space-between;
        color: #fff;
        gap: 40px;
    }
    header .contenr ul li a{
        color: #d8ffff;
        font-weight: bold;
        
        font-size: 20px;
        font-family: system-ui,'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
    }

    header .contenr div a {
        font-size: 26px;
        font-weight: bold;
        font-family: system-ui,'Segoe UI','Open Sans', 'Helvetica Neue', sans-serif;
        color: #fff;
    }
</style>

<header>
    <div class="contenr">
        <div> <a href="./index.php"> Articles </a></div>
        <ul>
            <li> <a href="./regester.php"> regester </a></li>
            <li> <a href="./login.php"> login </a></li>
        </ul>
    </div>

</header>