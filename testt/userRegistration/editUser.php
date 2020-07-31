<?php
    $username = $_GET['id'];
    $updatePath = "update.php?id=$username"
?>


<html>
    <head>
        <title>User Login And Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
          <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2><?php echo "Hello $username"; ?></h2>
                    <form action= <?php echo $updatePath ?> method="post">
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" required>

                        </div>
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </form>

                </div>
            </div>
          </div>
        </div>
    </body>

</html>