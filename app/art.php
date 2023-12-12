<?php

require("./articles.php");
$article = new Article();
    
if (isset($_POST['ajout_articls'])) {
    $article->titre($_POST['titer']);
    $article->contone($_POST['article']);
    $article->ajout_article();
    
}







?>