<?php

class Article
{
    private $titer;
    private $contone;
    private $id_A;
    public function titre($titre)
    {
        return $this->titer = $titre;
    }
    public function contone($contone)
    {
        return $this->contone = $contone;
    }
    public function idA($id)
    {
        return $this->id_A = $id;
    }
    // ajout 
    public function ajout_article()
    {
        echo "$this->titer <br>";
        echo "$this->contone <br>";
        require("../includs/cnx.php");
        session_start();
        $id = $_SESSION["id_user"];
        $sql = $data->prepare("INSERT INTO `article`(`id`, `titre`, `contenu`, `date_de_création`, `user_id`)
        VALUES (null,?,?,CURRENT_DATE,$id)");
        return $sql->execute([
            $this->titer,
            $this->contone,
        ]);
    }
    public function affichage()
    {
        require("./includs/cnx.php");
        $sql = $data->prepare("SELECT * FROM `article`");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);

    }
    // affichageId()

    public function affichageId()
    {
        require("./includs/cnx.php");
        $id = $_SESSION["id_user"];
        $sql = $data->prepare("SELECT * FROM `article` WHERE user_id = $id");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);

    }
    // edit
    public function edit_article($ida)
    {
        session_start();
        echo "$this->titer <br>";
        echo "$this->contone <br>";
        require("../includs/cnx.php");
        $sql = $data->prepare("UPDATE `article` SET titre = ? ,  contenu = ? WHERE id = $ida");
        // VALUES (null,?,?,CURRENT_DATE,$id_U) WHERE id = $ids");
        return $sql->execute([
            $this->titer,
            $this->contone,
            
        ]);

    }
    // supremer 
    public function sipremer_article($id)
    {
        require("../includs/cnx.php");
        $sql = $data->prepare(" DELETE FROM `article` WHERE id = $id");
        return $sql->execute();
    }
}

?>