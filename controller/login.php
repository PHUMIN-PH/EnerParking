<?php

if (isset($_POST['submit'])){
    include "conn_db.php";

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
        echo reset(header);
    }else if(empty($password)){
        header("Location: ../login.php?error=Password is required&$user_data ");
    }else{

        $sql = "INSERT INTO users(Uname,Pass) 
                VALUES('$username' , '$password')";
        $result = sqlsrv_query($conn, $sql);

        if ($result) {
            echo "success";
        }else {
            header("Location: ../login.php?error=unknow error occurred&$user_data ");
        }
    }

}

?>