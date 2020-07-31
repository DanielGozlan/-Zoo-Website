<?php
    session_start();

    $con =mysqli_connect('localhost','root','');
    $_SESSION['dbPath'] = 'localhost';
    $_SESSION['dbUser'] = 'root';
    $_SESSION['dbPass'] = '';
    //$_SESSION['con'] = $con;
    if($con->connect_error){
        die("connection failed: ".$con->connect_error);
    }
    mysqli_select_db($con,'userRegistration');
    $_SESSION['usersTable'] = 'userRegistration';
    $name= $_POST['user'];
    $pass= $_POST['password'];
    //$isAdmin= $_POST['isAdmin'];

    $command = "echo $name >> Registration.txt";
    echo '<pre>'. exec("$command") .'<pre>';

    $s= "select * from usertable where (name ='$name') && (password = '$pass')";
    $result = mysqli_query($con ,$s);

    $num= mysqli_num_rows($result);

    if($num==0){
        echo '<script type="text/javascript">'; 
        echo 'alert("Wrong UserName or Password");'; 
        echo 'window.location.href = "login.php";';
       echo '</script>';
    }else{
        $_SESSION['username']=$name;
        $row = $result->fetch_assoc();
        $isAdmin = $row["isAdmin"];
        $_SESSION['isAdmin']=$isAdmin;
        header('location:../index.php?header=header.php');
    }

   
?>
