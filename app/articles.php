<?php

class Article
{
    private $titer;
    private $contone;

    public function titre($titre)
    {
        return $this->titer = $titre;
    }
    public function contone($contone)
    {
        return $this->contone = $contone;
    }
    // ajout 
    public function ajout_article()
    {
        echo "$this->titer <br>";
        echo "$this->contone <br>";
        require("../includs/cnx.php");
        session_start();
        $id = $_SESSION["id_user"];
        echo "$id";
        $sql = $data->prepare("INSERT INTO `article`(`id`, `titre`, `contenu`, `date_de_création`, `user_id`)
        VALUES (null,?,?,CURRENT_DATE,$id)");
        return $sql->execute([
            $this->titer,
            $this->contone,
        ]);
    }
    // edit
    public function edit_article()
    {

    }
    // supremer 
    private function sipremer_article()
    {

    }
}


?>