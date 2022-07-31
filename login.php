<?php

session_start();
if(isset($_SESSION["loggedin"]))
{
header("Location:index.html");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="bootstrap.bundle.min.js">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
  <div class="row min-vh-100">
    <div class="maincol">
     <div class="col-lg-10">
      <div class="card">
        <div class="card-body">
          <div class="row min-vh-100">
            <div class="col-lg-6">
              <div class="leftside">
                <img src="assets/images/fingerprintpass.jpg">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="rightside mt-5">
                <div class="px-4 py-3">
                  <div class="icon">
                    <i class="fa-solid fa-tower-broadcast"></i>
                  </div>
                  <div class="name">Hello Again!</div>
                  <div class="description">Welcome to the login of your future</div>
                  <br>

                  <?php
                  
                  if(isset($_GET["error"]))
                  {

                  ?>
                    
                    <div class="alert alert-danger">
                      <?php echo $_GET["error"]; ?>
                    </div>
                    
                <?php  } ?>

                  <form method="POST" action="functions/functions.php">
                    <div class="form_input mb-3">
                      <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username">
                    </div>
                    <div class="form_input mb-3">
                      <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                    </div>
                    <input type="submit" name="login" value="LOGIN" class="btn btn-primary w-100"/>
                  </form>

            </div>
              </div>   
            </div>
          </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        </div>
      </div>
     </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

  