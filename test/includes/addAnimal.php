<?php

session_start();

$server_name=$_SESSION['dbPath'];
$user_name=$_SESSION['dbUser'];
$password=$_SESSION['dbPass'];
$database_name="example";

//create connection
$conn=new mysqli($server_name,$user_name,$password,$database_name);

//check the connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}


//get info from html
$id=$_POST['id'];
$name=$_POST['fullName'];
$type=$_POST['type'];
$inhebitance=$_POST['inhebitance'];
$nutrition=$_POST['nutrition'];
$picture=$_POST['picture'];
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$picture = $target_file;
echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//echo $imageFileType;
// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  echo $check;
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
echo $picture;
//add use
$sql="insert into Animals(id,name, type, inhebitance, nutrition, picture) values ('".$id."','".$name."','".$type."', '".$inhebitance."','".$nutrition."' ,'".$picture."')";
//echo $sql ;
echo "<br>";
echo "<br>";
if ($conn->query($sql)==FALSE){
    echo "Can not add new user.  Error is: ".$conn->error;
    exit();
}


$query = "SELECT id,name, type, inhebitance, nutrition, picture FROM Animals";
$result = $conn->query($query);
if($result->num_rows >0)
{
	while($row = $result->fetch_assoc())
	{
		echo "id: " . $row["id"]. " name: " . $row["name"]. " type: " . $row["type"]. " inhebitance: " . $row["inhebitance"]. " nutrition: " . $row["nutrition"].  " picture: " . $row['picture']. "<br>";
	}
}

?>