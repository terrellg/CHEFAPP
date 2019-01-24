<?php
ob_start();
if  (isset($_POST['signup-submit'])){
    require 'dbh.inc.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $accountType = $_POST['accountType'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $passwordconfirm = $_POST['pwd-confirm'];
    $pno = $_POST['pno'];

    $errors= array();
    
if(empty($email) || empty($fname) || empty($lname) || 
    empty($accountType) || empty($email) || empty($password) ||
    empty($passwordconfirm) ||    empty($pno))  {
    exit();
    }

else if($password !== $passwordconfirm){
    header("Location: https://chefme.000webhostapp.com/includes/signup.inc.php?error=passwordsnotmatch");
                    ob_end_flush();
    exit();
 } else {

    $sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
    $stmt = mysqli_stmt_init($conn);    
if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location: https://chefme.000webhostapp.com/includes/signup.inc.php?error=SQLERROR");
                    ob_end_flush();
    exit();


} else {
    mysqli_stmt_bind_param($stmt,"s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultCheck = mysqli_stmt_num_rows($stmt);
    if($resultCheck >0){
        header("Location https://chefme.000webhostapp.com/includes/signup.inc.php?error=SQLERROR");
                        ob_end_flush();
        exit();
    }
    else{
        $sql = "INSERT INTO users (fnameUsers,lnameUsers,accountType,emailUsers,pwdUsers,pnoUsers) 
        VALUES (?,?,?,?,?,?)";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: https://chefme.000webhostapp.com/includes/signup.inc.php?error=SQLERROR");
                            ob_end_flush();
            exit();
        }

        else{
            //bcrypt encryption of password before storing in database 
$hashedPwd =password_hash($password, PASSWORD_DEFAULT);


//stored procedure of the 6 used variables to prevent sql injection
            mysqli_stmt_bind_param($stmt,"ssssss", $fname, $lname, $accountType, $email, $hashedPwd, $pno );
            mysqli_stmt_execute($stmt);
            header("Location: https://chefme.000webhostapp.com/includes/signup.inc.php?signup=success");
                            ob_end_flush();
            exit();
        }


    }
}


}

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else{
    //if user tries to access page without going through sign up page send them to correct page
    header("Location: https://chefme.000webhostapp.com/includes/signup.inc.php?signup=success");
                    ob_end_flush();
    exit();
}