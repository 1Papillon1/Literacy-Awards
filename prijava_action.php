<?php 
session_start();
include "pdo.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
$username = validate($_POST['username']);
$password = validate($_POST['password']);
if (empty($username)) {
    header("Location: prijava.php?error=Loše korisničko ime");
    exit();
}else if(empty($password)){
    header("Location: prijava.php?error=Lozinka nije točna");
    exit();
}else{
    $upit = $db->query("SELECT * FROM admin WHERE username='$username'");
    $result = $upit->fetchAll();
    if (count($result) === 1) {
        if(!password_verify($password, $result[0]['password'])) {
            header("Location: prijava.php?error=Pogrešno korisničko ime ili lozinka");
            exit();
        }
        $_SESSION['username'] = $result[0]['username'];
        $_SESSION['id'] = $result[0]['id'];
        header("Location: index.php");
        exit();
    }else{
        header("Location: prijava.php?error=Pogrešno korisničko ime ili lozinka");
        exit();
    }
}
}else{
header("Location: index.php");
}
