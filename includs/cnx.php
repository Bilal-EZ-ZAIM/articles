<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "articles";
$data = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// if (!$conn) {
//     die("erroo");
// }

// $s = $data->prepare("INSERT INTO `users`(`id`, `first_name`, `last_name`, `username`, `password_U`, `email`, `role_id`)
//         VALUES (null,'bilal','zaim','ff','ddf','fffff',1)");
// // $sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `username`, `password_U`, `email`, `role_id`)
// // VALUES (null,$this->first_name,$this->last_name,$this->username,$this->password,$this->email,null)";
// echo "New record created successfully";
// $s->execute();
?>