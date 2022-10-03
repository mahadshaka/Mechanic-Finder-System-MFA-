<?php

session_start();
$email = $_SESSION["email"];
$admin = $_SESSION["utype"];


if ($admin=="admin") {
   
	
}
else{
		header("location: logout.php");
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic Finder Automobile</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery library -->

    <link rel="stylesheet" href="OtherPages/assets/css/style.css">
    <style>
        .btn_delete {
            text-align: right!important;
        }

        @media all and (max-width: 768px) {
            .btn_delete {
            text-align: left!important;
        }
        }
    
}
    </style>
   
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
                        <li class="nav-item active">
                          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="privacy&policy.php">Privacy & Policy</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link button" href="logout.php">
                            <button class="btn btn-danger my-2 my-sm-0 text-center m-auto w-100 ml-2" type="submit">Log out</button></a>
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



    <!-- users section
    ==================================================================
     -->

    <?php

    include_once 'database.php';
    $result1 = mysqli_query($conn,"SELECT * FROM login");

    ?>
    <section id="users" class="bg-light">
        <div class="container">
            <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
                <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">All Users</h1>
            </div>
            <div class="row  d-flex flex-row">

                    <?php
					$i=0;
					while($row = mysqli_fetch_array($result1)) {
					?>
                                <div class="col-md-12 mb-3 jobs_conetent">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                    <h4><?php echo $row["name"];?></h4>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4"><p><i class="fa fa-id-card" aria-hidden="true"></i> <?php echo $row["id"]; ?></p></div>
                                                    <div class="col-md-4"><p> <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row["email"]; ?></p></div>

                                                    <div class="col-md-4"><p> <i class="fa fa-key" aria-hidden="true"></i> <?php echo $row["password"]; ?></p></div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 btn_delete">
                                                <form action="delete_user.php? id=<?php echo $row["email"]; ?>" method="post">
                                                    <input  class='btn btn-danger' type="submit" name="submit" value="Delete"> 
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                    <?php
                     $i++;
                    }
                    ?>
            </div>                       
        </div>
    </section>



    <!-- mechanic section
    ==================================================================
     -->

     <?php

include_once 'database.php';
$result2 = mysqli_query($conn,"SELECT * FROM mechanics");

?>
<section id="users" class="bg-light">
    <div class="container">
        <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
            <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">All Mechanics</h1>
        </div>
        <div class="row  d-flex flex-row">
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result2)) {
                ?>
                            <div class="col-md-12 mb-3">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <h5><?php echo $row["ownerName"]?> - owner of <?php echo $row["garageName"];?></h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-3"><i class="fa fa-id-card" aria-hidden="true"></i> <?php echo $row["id"]; ?></div>
                                                    <div class="col-md-3"><p> <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row["email"]; ?></p></div>
                                                    <div class="col-md-3"><p> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $row["phone"]; ?></p></div>
                                                    <div class="col-md-3"><p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row["address"]; ?></p></div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 btn_delete">
                                                <form action="delete_mechanic.php?id=<?php echo $row["email"]; ?>" method="post">
                                                    <input  class='btn btn-danger' type="submit" name="submit" value="Delete"> 
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                <?php
                 $i++;
                }
                ?>
        </div>                       
    </div>
</section>


    <!-- review section
    ==================================================================
     -->

     <?php

include_once 'database.php';
$result3 = mysqli_query($conn,"SELECT * FROM review");

?>
<section id="reviews" class="bg-light">
    <div class="container">
        <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
            <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">All Reviews</h1>
        </div>
        <div class="row  d-flex flex-row">

                <?php
                $i=0;
                while($row = mysqli_fetch_array($result3)) {
                ?>
                            <div class="col-md-12 mb-3 jobs_conetent">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                    <h5> <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row["author"];?></h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4"> <p><i class="fa fa-star" aria-hidden="true"></i> <?php echo $row["rating"]; ?></p></div>

                                                    <div class="col-md-4"><p><i class="fa fa-warehouse" aria-hidden="true"></i> <?php echo $row["shopName"]; ?></p></div>

                                                    <div class="col-md-4"><p> <i class="fa fa-comment" aria-hidden="true"></i> <?php echo $row["experience"]; ?></p></div>

                                                </div>
                                            </div>
                                            <div class="col-md-2 btn_delete">
                                                <form action="delete_review.php?id=<?php echo $row["id"]; ?>" method="post">
                                                    <input  class='btn btn-danger' type="submit" name="submit" value="Delete"> 
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                <?php
                 $i++;
                }
                ?>
        </div>                       
    </div>
</section>


    <!-- feedback section
    ==================================================================
     -->

     <?php

include_once 'database.php';
$result4 = mysqli_query($conn,"SELECT * FROM feedback");

?>
<section id="feedback" class="bg-light">
    <div class="container">
        <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
            <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">All Feedbacks</h1>
        </div>
        <div class="row  d-flex flex-row">

                <?php
                $i=0;
                while($row = mysqli_fetch_array($result4)) {
                ?>

                    <div class="col-md-12 mb-3 jobs_conetent">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-4"> <p> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $row["name"];?></p></div>

                                            <div class="col-md-4"><p> <i class="fa fa-comment-alt" aria-hidden="true"></i> <?php echo $row["message"]; ?></p></div>

                                        </div>
                                    </div>
                                    <div class="col-md-2 btn_delete">
                                        <form action="delete_feedback.php?id=<?php echo $row["id"]; ?>" method="post">
                                            <input  class='btn btn-danger' type="submit" name="submit" value="Delete"> 
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                <?php
                 $i++;
                }
                ?>
        </div>                       
    </div>
</section>


    <!-- contact section
    ==================================================================
     -->

     <?php

include_once 'database.php';
$result5 = mysqli_query($conn,"SELECT * FROM contact");

?>
<section id="contact" class="bg-light">
    <div class="container">
        <div class="mgb-40 padb-30 auto-invert line-b-4 align-center">
            <h1 class="font-cond-b fg-text-d lts-md fs-300 fs-300-xs no-mg" contenteditable="false">All Contact Messages</h1>
        </div>
        <div class="row  d-flex flex-row">

        <?php
                $i=0;
                while($row = mysqli_fetch_array($result5)) {
                ?>
                            <div class="col-md-12 mb-3 jobs_conetent">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                    <h5> <i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $row["email"];?></h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-4"> <p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $row["phone"]; ?></p></div>

                                                    <div class="col-md-4"><p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row["name"]; ?></p></div>

                                                    <div class="col-md-4"><p> <i class="fa fa-comment" aria-hidden="true"></i> <?php echo $row["message"]; ?></p></div>

                                                </div>
                                            </div>
                                            <div class="col-md-2 btn_delete">
                                                <form action="delete_message.php?id=<?php echo $row["id"]; ?>" method="post">
                                                    <input  class='btn btn-danger' type="submit" name="submit" value="Delete"> 
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                <?php
                 $i++;
                }
                ?>
        </div>                       
    </div>
</section>


    <footer class="text-center text-lg-start">
        <!-- Copyright -->
        <div class="container">
            <div class="row top-footer">
                <div class="col-md-5">
                    <ul>
                        <li><div class="icons"><i class="fa fa-map-marker-alt"></i></div><div class="icon-text">plot 21 Makarere Street<br><h3>Kampala, Uganda</h3></div></li>
                        <li>
                        <li><div class="icons"><i class="fa fa-phone-alt"></i></div><div class="icon-text"><h3>+256757185087</h3></div></li>
                        <li>
                        <li><div class="icons"><i class="fa fa-envelope"></i></div><div class="icon-text"><h3><a href="#">support@example.com</a></h3></div></li>
                        
                    </ul>
                </div>
                <div class="col-md-5 offset-md-2 footer-right">
                    <h3>About the company</h3>
                    <p>"We are here to give you services where you are.</p>
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
</html>