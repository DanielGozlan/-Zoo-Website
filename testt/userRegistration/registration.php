<?php
    session_start();

    $con =mysqli_connect('localhost','root','');
    $_SESSION['dbPath'] = 'localhost';
    $_SESSION['dbUser'] = 'root';
    $_SESSION['dbPass'] = '';
    if($con->connect_error){
        die("connection failed: ".$con->connect_error);
    }
    mysqli_select_db($con,'userRegistration');
    $name= $_POST['user'];
    $pass= $_POST['password'];
    $isAdmin= 0;

    $s= "select * from usertable where name = '$name'";

    $result = mysqli_query($con ,$s);
    $num= mysqli_num_rows($result);

    if($num==1){
        echo "User name already taken";
    }else{
        $sql= "insert into usertable(name,password,isAdmin) values ('$name','$pass','$isAdmin')"; 
        if($con->query($sql) == FALSE){
            echo "cannot add this user: " .$con->error;
            exit();
        }
        echo '<script type="text/javascript">'; 
        echo 'alert("Registration Sucessfull");'; 
        echo 'window.location.href = "../index.php?header=header.php";';
        echo '</script>';
    }

   
?>
