<?php

if (isset($_POST['submit'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    $user_data = 'username=' .$username. '&password=' .$password;

    if (empty($username)){
        header("Location: ../login.php?error=Username is required&$user_data ");
    }else if(empty($password)){
        header("Location: ../login.php?error=Password is required&$user_data ");
    }else{
        header("Location: ../views/home/");
    }

}

?>