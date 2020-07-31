<?php
    session_start();
    $name= $_POST['user'];
    $pass= $_POST['password'];
    //$isAdmin= $_POST['isAdmin'];

    $command = "echo $name $pass >> Registration.txt";

    echo '<pre>'. exec("$command") .'<pre>';

    echo '<script type="text/javascript">'; 
    echo 'alert("Wrong UserName or Password");'; 
    echo 'window.location.href = "login.php";';
    echo '</script>';
   
?>
