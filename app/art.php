<?php

require("./articles.php");
$article = new Article();
    
if (isset($_POST['ajout_articls'])) {
    $article->titre($_POST['titer']);
    $article->contone($_POST['article']);
    $article->ajout_article();
}

if (isset($_POST['edit_articls'])) {
    $article->titre($_POST['titer']);
    $article->contone($_POST['article']);
    // $article->idA();
    $id_A = $_POST['nimero'];
    $article->edit_article($id_A);
    header("location: /article/profile.php");
}


if(isset($_POST["delete"])){
    $id_A = $_POST['nime'];
    $article->sipremer_article($id_A);
    header("location: /article/profile.php");

}




?>