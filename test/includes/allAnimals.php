<?php

session_start();

$database_name="example";
$server_name=$_SESSION['dbPath'];
$user_name=$_SESSION['dbUser'];
$password=$_SESSION['dbPass'];

if(isset($_SESSION['username'])!=FALSE)
{
  //echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
  echo "good";
  $name = $_SESSION['username'];
}
else
  echo "baad";


echo "<link rel='stylesheet' type='text/css' href='../main.css' />
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
 <meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'> 
<script type='text/javascript' src='../js_file.js'></script>";

//create connection
$conn=new mysqli($server_name,$user_name,$password,$database_name);

//check the connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

/*header*/

echo "<header>
      <div class='img-responsive'>
        <div class='a' style='margin-bottom:0'>
          <img src='zoo-new.png' class = 'zoo-img'>
        </div>
      </div>
      <nav class='navbar navbar-expand-sm bg-dark navbar-dark'>
        <a class='navbar-brand' href='../index.php'>דף הבית</a>
        <button class='navbar-toggler' onclick=openNav() type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='collapsibleNavbar'>
          <ul class='navbar-nav'>
            <li class='nav-item'>
              <a class='nav-link' href='trip.html'>סיורים</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='allAnimals.php'>מאגר בעלי חיים</a>";
     if(isset($_SESSION['username']) && $_SESSION['isAdmin'] == 1)
     {
       echo "<li class='nav-item'>
       <a class='nav-link' href='addAnimal.html'>הוספת חיה</a>";
     }         
echo "      </li>
          </ul>
        </div>  
      </nav>
</header>";


//get info from database
$query = "SELECT id,name, picture FROM Animals";
$result = $conn->query($query);

echo "<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta content='text/html; charset=iso-8859-2' http-equiv='Content-Type'>
<link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
<style>
.mySlides {display:none;height: 200px;width: 70%;  margin: auto;}
</style>
</head>

<body>

<h2 class='title1'>בעלי החיים</h2>

<div class='w3-content w3-section' style='max-width:500px'>";

if($result->num_rows >0)
{
	while($row = $result->fetch_assoc())
	{
		$id = $row["id"];
		$picture = $row["picture"];
		echo "<a href='Animal.php?id={$id}'>   <img class='mySlides' src='${picture}' style='width:100% height:50px'> </a>";
		echo "</section>";
	}
		//echo "<br>";
}

echo "</div>";

echo "<script> carousel(); </script>

</body>";


?>

<html dir="rtl">