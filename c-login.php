<?php
include "logout.php";
 include "connectlogin.php";
if (isset($_POST['email'])&&isset($_POST['password'])){
    function validation($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlentities($data);
        return $data;
}
$email = validation($_POST['email']);
$password = validation($_POST['password']);
if(empty($email)){
    header("location: login.php?error=email is required");
    exit();
}else if(empty($password)){
    header("location: login.php?error=password is required");
    exit();
}else{
    // echo"valid input";
    $sql="SELECT * FROM `admine` WHERE email='$email' AND PASSWORD='$password' " ;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) ){
        $row = mysqli_fetch_assoc($result);
       if($row ['email'] === $email && $row ['PASSWORD'] === $password) {
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['id'] = $row['id'];
        print_r($_SESSION);
        header("location:index.php ");  
        exit();
       }
    }
    else{
      
        header("location: login.php?error= Incorect email or password ");  
        exit();
    }

}

}else{
     header("location: login.php");
     exit();
}