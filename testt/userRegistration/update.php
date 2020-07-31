<?php
    session_start();

    $con =mysqli_connect($_SESSION['dbPath'],$_SESSION['dbUser'],$_SESSION['dbPass']);
    if($con->connect_error){
        die("connection failed: ".$con->connect_error);
    }
    mysqli_select_db($con,'userregistration');
    $name= $_GET['id'];
    $pass= $_POST['password'];
    //$isAdmin= 0;
    
    $sql = "UPDATE usertable SET password='$pass' WHERE name='$name'";

    if (mysqli_query($con, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($con);
      }
      

    /*$result = mysqli_query($con ,$s);
    $num= mysqli_num_rows($result);

    if($num==1){
        echo "User name already taken";
    }else{
        $sql= "insert into usertable(name,password,isAdmin) values ('$name','$pass','$isAdmin')"; 
        if($con->query($sql) == FALSE){
            echo "cannot add this user: " .$con->error;
            exit();
        }
        echo "registration succefull";
    }
*/
   
?>
