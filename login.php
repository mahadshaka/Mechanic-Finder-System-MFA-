
<?php 
include('login_validation.php');

if (isset($_SESSION['email'])) {
    if($_SESSION['utype']=="admin"){
		header("location: admin.php");
	}
	else{
		header("location: home.php");
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mechanic Finder Automobile</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="OtherPages/assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery library -->
   
</head>
<body>
    <header>
        <div class="container">
             <nav class="navbar navbar-light">
                <nav class="navbar navbar-expand-lg navbar-dark bg-light w-100">
                    <a class="navbar-brand" href="home.php"> <img src="OtherPages/assets/images/logo-100.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link button" href="signup.php">
                            <button class="btn btn-success my-2 my-sm-0 text-center m-auto w-100 ml-2" type="submit">Signup</button></a>
                        </li>
                      </ul>
                    </div>
                  </nav>
            </nav>
        </div>
    </header>
    <!-- hero section
    ==================================================================
     -->
     <section id="hero">
        <video width="100%" autoplay muted loop id="myVideo">
            <source src="OtherPages/rain.mp4" type="video/mp4">
        </video>
    </section>

    <section id="login" class="to-scrol">
        <div class="container">
            <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
                <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">Log In</h1>
            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email"> 
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" name="password"> 
                            </div>
                            <div class="col-md-12 form-group">
                                <button class="btn btn-outline-success my-2 my-sm-0 text-center m-auto w-100 ml-2" name="signin" type="submit">LOG IN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer class="text-center text-lg-start">
        <!-- Copyright -->
        <div class="container">
            <div class="row top-footer">
                <div class="col-md-5">
                    <ul>
                        <li><div class="icons"><i class="fa fa-map-marker-alt"></i></div><div class="icon-text"> BSE22-20 Plot 21 Makerere Street<br><h3>Kampala, Uganda</h3></div></li>
                        <li>
                        <li><div class="icons"><i class="fa fa-phone-alt"></i></div><div class="icon-text"><h3>+256757185087</h3></div></li>
                        <li>
                        <li><div class="icons"><i class="fa fa-envelope"></i></div><div class="icon-text"><h3><a href="#">support@example.com</a></h3></div></li>
                        
                    </ul>
                </div>
                <div class="col-md-5 offset-md-2 footer-right">
                    <h3>About the company</h3>
                    <p>"We are here to give you services any where you are.</p>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="home.php">MECHANIC FINDER AUTOMOBILE</a></p>
        </div>
        <!-- Copyright -->
      </footer>
                
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
            <script src="OtherPages/assets/js/script.js"></script>
</body>
</html>