<?php

session_start();

$server_name=$_SESSION['dbPath'];
$user_name=$_SESSION['dbUser'];
$password=$_SESSION['dbPass'];
$database_name="example";

$id = $_GET['id'];

echo "<link rel='stylesheet' type='text/css' href='../main.css' />
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
 <meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'> 
<script type='text/javascript' src='../js_file.js'></script>";

echo "<header>
      <div class='img-responsive'>
        <div class='a' style='margin-bottom:0'>
          <img src='zoo-new.png' class = 'zoo-img'>
        </div>
      </div>
      <nav class='navbar navbar-expand-sm bg-dark navbar-dark'>
        <a class='navbar-brand' href='../index.php'>דף הבית</a>
        <button class='navbar-toggler' onclick=openNav() type='button' data-toggle='collapse' data-target='#collapsibleNavbar' align='left'>
          <span class='navbar-toggler-icon'></span> 
        </button>
        <div class='collapse navbar-collapse' id='collapsibleNavbar'>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link' href='trip.html'>סיורים</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='allAnimals.php'>מאגר בעלי חיים</a>
            </li>
          </ul>
        </div>  
      </nav>
</header>";


//create connection
$conn=new mysqli($server_name,$user_name,$password,$database_name);

//check the connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

//get info from database
$query = "SELECT name, type, inhebitance, nutrition, picture FROM Animals WHERE id = {$id}";
$result = $conn->query($query);

//echo $result;
if($result->num_rows >0)
{
	while($row = $result->fetch_assoc())
	{
		$name = $row["name"];
		$type = $row["type"];
		$inhebitance = $row["inhebitance"];
		$nutrition = $row["nutrition"];
		$picture = $row["picture"];
		echo "<section align='center';>";
		echo "<h1> {$name} </h1>"; 
		echo "<img src='{$picture}' style='width:20%'>";
        //echo " name: " . $row["name"]. " type: " . $row["type"]. " inhebitance: " . $row["inhebitance"]. " nutrition: " . $row["nutrition"].  " picture: " . $row['picture']. "<br>";
		echo "<h5> משפחה: {$type}</h5>"; 
		echo "<h5> אזור מחיה: {$inhebitance} </h5>"; 
		echo "<h5> מזון: {$nutrition} </h5>"; 
		echo "</section>";
	}
		echo "<br>";
}

?>

<html dir="rtl">