<?php
ob_start();

if  (isset($_POST['login-submit'])){
 require 'dbh.inc.php';

 $email = $_POST['email'];
 $password = $_POST['pwd'];

 if(empty($email) || empty($password)){
    header("Location: ../index.php?error=emptyFields");
                    ob_end_flush();
    exit();
 }
else{
$sql="SELECT * FROM users WHERE emailUsers=?";
$stmt= mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: ../index.php?error=SQL");
                    ob_end_flush();
    exit();
}

else{
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

//check if result is taken from the database and if it is equals the matched email password
    if($row = mysqli_fetch_assoc($result)){
        $pwdCheck = password_verify($password, $row['pwdUsers']);
    if($pwdCheck == false){
        header("Location: ../index.php?error=invaliduserORpass");
                        ob_end_flush();
        exit();
    }

    else if($pwdCheck == true){
        session_start();
        $_SESSION['userId'] = $row['idUsers'];
        $_SESSION['email'] = $row['emailUsers'];
        $_SESSION['accountType'] = $row['accountType'];

       // echo "SUCCESS";
        header("Location: ../index.php?login=success");
                       ob_end_flush();
exit();
    }

    else{
        header("Location: ../index.php?error=invaliduserORpass");
                ob_end_flush();
        exit();

    }

}
else{
    
    header("Location: ../index.php?error=nouser");
            ob_end_flush();
    exit();

}
}
}
}



?>