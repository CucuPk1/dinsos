<?php

session_start();
$database= 'localhost';
$database_user= 'root';
$database_password= '';
$database_name= 'login';

//connect slur

$con=mysqli_connect($database, $database_user, $database_password, $database_name);

if(mysqli_connect_errno()){
    exit('ga connect db cuy : ' . mysqli_connect_errno());
}

if($stmt=$con->prepare('SELECT id, password FROM accounts WHERE username= ?')){
    $stmt->bind_param('s', $POST['username']);
    $stmt->execute();

    $stmt->store_result();

    if($stmt->num_rows > 0){
        $stmt->bind_result($id, $$password);
        $stmt->fetch();

        if($_POST['password'] === $password){
            session_regenerate_id();
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;

            echo "Verifikasi berhasil!";
            header('Location: php/index.php');
        }
        header('Location: php/index.php');
    }
} header('Location: php/index.php');

?>