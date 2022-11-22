    <?php
    include "logout.php";
    include "connectlogin.php";
    function validation($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlentities($data);
        return $data;
    }
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['first_name']) && isset($_POST['last_name'])) {
        $email = validation($_POST['email']);
        $password = validation($_POST['password']);
        $first_name = validation($_POST['first_name']);
        $last_name = validation($_POST['last_name']);
        print_r($_POST);
    if (empty($email)) {
            header("location: signup.php?error=email is required");
            exit();
        } else if (empty($password)) {
            header("location: signup.php?error=password is required");
            exit();
        } else if (empty($first_name)) {
            header("location: signup.php?error=first_name is required");
            exit();
        } else if (empty($last_name)) {
            header("location: signup.php?error=last_name is required");
            exit();
        }
        $query=mysqli_query($conn,"INSERT INTO `admine`(`id`, `firstname`, `lastname`, `email`, `PASSWORD`) VALUES ('','$first_name','$last_name','$email','$password')");
        if(!$query){
            echo "error";
            die();
        }else{
            header("location: login.php");
            die();
        }
    }
