<?php
session_start();
$_SESSION["glob_ID"] = null;
$_SESSION["in_valid"] = false;
$_SESSION["id_user"] = null;
$_SESSION["nom_user"] = null;
$_SESSION["is_admin"] = null;
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
        echo $this->password . "<br>";
        
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
        echo "<pre>";
        print_r($data);
        echo "$this->password";
        if (password_verify($this->password, "$data[password_U]")) {
            echo "ouiiiii <br>";
            echo "$data[password_U]<br>";
            header("location: /article/index.php");
            $_SESSION["id_user"] = $data["id"];
            $_SESSION["nom_user"] = $data["username"];
        } else {
            header("location: /article/index.php");
        }
    }
    // logout
   public function logout()
    {
        $_SESSION["id_user"] = null;
        echo"hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
        header("location: /article/index.php");
    }
   
}

?>
