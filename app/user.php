<?php

class Users
{
    private $first_name;
    private $last_name;
    private $username;
    private $email;
    private $password;

    public function firstname($name)
    {
        return $this->first_name = $name;
    }
    public function lastname($name)
    {
        return $this->last_name = $name;
    }
    public function username($name)
    {
        return $this->username = $name;
    }
    public function email($name)
    {
        return $this->email = $name;
    }
    public function password($name)
    {
        return $this->password = $name;
    }
    // public function database()
    // {
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "articles";
    //     $data = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
    //     return $data;
    // }


    // regester
    public function regester()
    {
        
        require("../includs/cnx.php");
        // var_dump($conn);
        echo "$this->first_name <br>";
        echo "$this->last_name <br>";
        echo "$this->username <br>";
        echo $this->password."<br>";
        if(password_verify($this->password,"12345678")){
            echo"ouiiiii <br>";
        }
        echo "$this->email <br>";
        $sql = $data->prepare("INSERT INTO `users`(`id`, `first_name`, `last_name`, `username`, `password_U`, `email`, `role_id`)
        VALUES (null,?,?,?,?,?,1)");
        // $sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `username`, `password_U`, `email`, `role_id`)
        // VALUES (null,$this->first_name,$this->last_name,$this->username,$this->password,$this->email,null)";
        echo "New record created successfully";
        return $sql->execute([
            $this->first_name,
            $this->last_name,
            $this->username,
            $this->password,
            $this->email
        ]);

       

    }
    // login
    public function login()
    {
        require("../includs/cnx.php");
        $sql = $data->prepare("SELECT * FROM `users` WHERE email = ?");
        $sql->execute([
            $this->email,
        ]);
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        echo"<pre>";
        print_r($data);
        echo"$data[password_U]<br>";
        if(password_verify("$data[password_U]",$this->password)){
            echo"ouiiiii <br>";
            echo"$row[password_U]<br>";
        }else{
            echo "$this->password";
        }
    }
    // logout
    private function logout()
    {

    }
    // ajout 
    private function ajout_article()
    {

    }
    // edit
    private function edit_article()
    {

    }
    // supremer 
    private function sipremer_article()
    {

    }
}

?>

