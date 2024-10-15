<?php
include_once "config.php";
$error=[];
$success=[];
if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $sql="INSERT INTO `contact`(`Name`, `Email`, `Message`) VALUES (?,?,?)";
        $stmt=$db_conn->prepare($sql);
        $stmt->bind_param("sss",$name,$email,$message);
        if($stmt->execute()){
            $success[]="Your queries submitted successfully";
        }else{
          $error[]="An unknown error occured!   Try again Later;";
        }

        if($error)
    {
      $_SESSION['error']=$error;
      header("Location: ../View/error.php");
    }

    if($success)
    {
      $_SESSION['error']=$success;
      header("Location: ../View/success.php");
    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Css/style3.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/icon.png" alt="" class="icon"><span class="text-primary m-2 text">Abc</span><span class="text">School</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="loginad.php">Admin</a></li>
                  <li><a class="dropdown-item" href="loginte.php">Teacher</a></li>
                  <li><a class="dropdown-item" href="loginst.php">Student</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About Us
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="View/principle.html">Message from Principal</a></li>
                  <li><a class="dropdown-item" href="View/vice.html">Message from Vice Principal</a></li>
                  <li><a class="dropdown-item" href="View/show_student_request.php">History</a></li>
                  <li><a class="dropdown-item" href="#">Infrastructure</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Information
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="View/shownotice.php">Notice Board</a></li>
                  <li><a class="dropdown-item" href="View/techreg.php">Payment Procedure</a></li>
                  <li><a class="dropdown-item" href="#">Faculties</a></li>
                  <li><a class="dropdown-item" href="#">Board Results</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="View/shownotice.php">Notice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Controller/contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="View/techreg.php">Join as Teacher</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/img4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Your Dream School</h5>
              <p>The word school derives from Greek σχολή (scholē), originally meaning "leisure" and also "that in which leisure is employed", but later "a group to whom lectures were given, school".</p>
              <p><a href="View/stdreg.php" class="btn btn-warning mt-3">Addmission </a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/img6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Your Dream School</h5>
                <p>The word school derives from Greek σχολή (scholē), originally meaning "leisure" and also "that in which leisure is employed", but later "a group to whom lectures were given, school".</p>
                <p><a href="View/stdreg.php" class="btn btn-warning mt-3">Addmission</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/img5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5>Your Dream School</h5>
                <p>The word school derives from Greek σχολή (scholē), originally meaning "leisure" and also "that in which leisure is employed", but later "a group to whom lectures were given, school".</p>
                <p><a href="View/stdreg.php" class="btn btn-warning mt-3">Addmission</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!--about-->

      <section id="about" class="about pt-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img">
                <img src="img/school.jpg" alt="" class="img-fluid pt-4">
              </div> 
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
              <div class=" text-center">
                <h2 class="underline2">Our School</h2>
                <!--<hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 150px; background-color: #2563EB; height: 3px"/>-->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ad blanditiis suscipit iure officia voluptas quasi quo exercitationem magnam consequuntur, veritatis sint nostrum, optio minus sunt architecto voluptatum ex reiciendis.</p>
                <a href="#" class="btn btn-warning">Learn More</a>
              </div>
            </div>
            <div class="underline"></div>
          </div>
        </div>
      </section>
      <!--teacher-->

      <section id="about" class="about pt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h1 class="underline2">Authorities</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6 pt-3">
              <div class="card padding-6">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-7 col-md-6 col-12">
                      <div class="about-img">
                        <img src="img/Screenshot 2024-08-27 215107.png" alt="" class="img-fluid">
                      </div>
                      <div class="text-center">
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                      </div> 
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                      <div class="">
                        <h2 class="underline3">Principal</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ad blanditiis suscipit iure officia voluptas quasi quo exercitationem magnam consequuntur, veritatis sint nostrum, optio minus sunt architecto voluptatum ex reiciendis.</p>
                         <a href="#" class="btn btn-warning">Learn More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 pt-3">
              <div class="card ">
                <div class="card-body padding-0">
                  <div class="row">
                    <div class="col-lg-7 col-md-6 col-12">
                      <div class="about-img">
                        <img src="img/Screenshot 2024-08-27 215144.png" alt="" class="img-fluid ">
                      </div> 
                      <div class="text-center">
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                      </div> 
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                      <div class="">
                        <h2 class="underline3">Vice Principal</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ad blanditiis suscipit iure officia voluptas quasi quo exercitationem magnam consequuntur, veritatis sint nostrum, optio minus sunt architecto voluptatum ex reiciendis.</p>
                        <a href="#" class="btn btn-warning">Learn More</a>
                      </div>
                    </div>
                 </div>
                </div>
             </div>
           </div>
           <div class="underline"></div>
          </div>
        </div>
      </section>

      <!--service-->
      
      <section id="service" class="services pt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h1 class="underline2">Our Services</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-4 pt-3">
              <div class="card text-white text-center bgcolor">
                <div class="card-body padding-3">
                  <i class="bi bi-pc-display-horizontal"></i>
                  <h3 class="card-title">Online Class</h3>
                  <p class="lead">It's kdsjf opewire sjdfs ds jdfja slkdjfi</p>
                  <button class="btn btn-warning text-dark">Read More</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 pt-3">
              <div class="card text-white text-center bgcolor2">
                <div class="card-body">
                  <i class="bi bi-pc-display-horizontal"></i>
                  <h3 class="card-title">Library</h3>
                  <p class="lead">It's kdsjf opewire sjdfs ds jdfja slkdjfi</p>
                  <button class="btn btn-warning text-dark">Read More</button>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 pt-3">
              <div class="card text-white text-center bgcolor1">
                <div class="card-body">
                  <i class="bi bi-bus-front"></i>
                  <h3 class="card-title">Transport</h3>
                  <p class="lead">It's kdsjf opewire sjdfs ds jdfja slkdjfi</p>
                  <button class="btn btn-warning text-dark">Read More</button>
                </div>
              </div>
            </div>
            <div class="underline"></div>
          </div>
        </div>
      </section><br>
      <!--values-->
      <section id="about" class="about pt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h1 class="underline2">Key Valus</h1>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6 p-3">
              <div class="">
                <div class="">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-4">
                      <div class="about-img">
                        <img src="img/istockphoto-1468140092-170667a.webp" alt="" class="img-fluid rounded-full">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-8">
                      <div class="">
                        <h3 class="" style="font-family: cursive">Learning & Fun</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 p-3">
              <div class="">
                <div class="">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-4">
                      <div class="about-img">
                        <img src="img/istockphoto-1468140092-170667a.webp" alt="" class="img-fluid rounded-full">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-8">
                      <div class="">
                        <h3 class="" style="font-family: cursive">Healthy Meals</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 p-3">
              <div class="">
                <div class="">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-4">
                      <div class="about-img">
                        <img src="img/istockphoto-1468140092-170667a.webp" alt="" class="img-fluid rounded-full">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-8">
                      <div class="">
                        <h3 class="" style="font-family: cursive">Children Safety</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 p-3">
              <div class="">
                <div class="">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-4">
                      <div class="about-img">
                        <img src="img/istockphoto-1468140092-170667a.webp" alt="" class="img-fluid rounded-full">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-8">
                      <div class="">
                        <h3 class="" style="font-family: cursive">Cute Environment</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           <div class="underline p-5"></div>
          </div>
        </div>
      </section>
     

      
<!--satisfiction-->
      <section id="Parents" class="Parents pt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h2 class="underline-blue">Parents Satisfiction</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, impedit!</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3 pt-2">
                <div class="card text-center">
                  <div class="card-body">
                    <div class="rating">
                      <input type="radio" name="rating" id="star5" value="5"><label for="star5" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star4" value="4"><label for="star4" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star3" value="3"><label for="star3" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star2" value="2"><label for="star2" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star1" value="1"><label for="star1" class="fas fa-star"></label>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, nostrum.</p>
                    <img src="img/Screenshot 2024-08-27 215107.png" alt="" class="img-fluid rounded-circle w-50 "><br>
                    <h3 class="text-center">Name</h3>
                    <h5>Father</h5>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 pt-2">
                <div class="card text-center">
                  <div class="card-body">
                    <div class="rating">
                      <input type="radio" name="rating" id="star5" value="5"><label for="star5" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star4" value="4"><label for="star4" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star3" value="3"><label for="star3" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star2" value="2"><label for="star2" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star1" value="1"><label for="star1" class="fas fa-star"></label>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, nostrum.</p>
                    <img src="img/Screenshot 2024-08-27 215107.png" alt="" class="img-fluid rounded-circle w-50 "><br>
                    <h3 class="text-center">Name</h3>
                    <h5>Father</h5>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 pt-2">
                <div class="card text-center">
                  <div class="card-body">
                    <div class="rating">
                      <input type="radio" name="rating" id="star5" value="5"><label for="star5" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star4" value="4"><label for="star4" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star3" value="3"><label for="star3" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star2" value="2"><label for="star2" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star1" value="1"><label for="star1" class="fas fa-star"></label>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, nostrum.</p>
                    <img src="img/Screenshot 2024-08-27 215107.png" alt="" class="img-fluid rounded-circle w-50 "><br>
                    <h3 class="text-center">Name</h3>
                    <h5>Father</h5>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3 pt-2">
                <div class="card text-center">
                  <div class="card-body">
                    <div class="rating">
                      <input type="radio" name="rating" id="star5" value="5"><label for="star5" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star4" value="4"><label for="star4" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star3" value="3"><label for="star3" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star2" value="2"><label for="star2" class="fas fa-star"></label>
                      <input type="radio" name="rating" id="star1" value="1"><label for="star1" class="fas fa-star"></label>
                    </div>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, nostrum.</p>
                    <img src="img/Screenshot 2024-08-27 215107.png" alt="" class="img-fluid rounded-circle w-50 "><br>
                    <h3 class="text-center">Name</h3>
                    <h5>Father</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="underline"></div>
          </div>
      </section>
 <!--contact-->

      <section id="contact" class="contact pt-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-header text-center pb-5">
                <h2 >Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Sequi, impedit!</p>
              </div>
            </div>
          </div>
          <div class="row m-0">
            <div class="col-md-12 p-0 pt-2 p-2 pb-2">
              <form action="home.php" class="bg-light p-2.m-auto" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="text" class="form-control" required placeholder="Your Full Name" name="name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="email" class="form-control" required placeholder="Your Email here" name="email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <textarea rows="3" required class="form-control" placeholder="Your Query Here" name="message"></textarea>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-lg btn-block mt-3" name="submit">Send Now</button>
                </div>
              </form>
            </div>
            <div class="underline"></div>
          </div>
        </div>
      </section>

        <div class="container my-5">
          <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
            <section class="d-flex justify-content-between p-4"style="background-color: #6351ce">
              <div class="me-5">
                <span>Get connected with us on social networks:</span>
              </div>
              <div>
                <a href="" class="text-white me-4">
                  <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                  <i class="bi bi-google"></i>
                </a>
              </div>
            </section>

            <section class="">
              <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">School360</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto"style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p>
                      Here you can use rows and columns to organize your footer
                      content. Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit.
                    </p>
                  </div>
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Site Links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p>
                      <a href="#!" class="text-white">Fee Submission</a>
                    </p>
                    <p>
                      <a href="#!" class="text-white">Addmission</a>
                    </p>
                    <p>
                      <a href="#!" class="text-white">About Us</a>
                    </p>
                    <p>
                      <a href="#!" class="text-white">Blog</a>
                    </p>
                  </div>
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Useful links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p>
                      <a href="#!" class="text-white">Your Account</a>
                    </p>
                    <p>
                      <a href="#!" class="text-white">Become an Affiliate</a>
                    </p>
                    <p>
                      <a href="#!" class="text-white">Shipping Rates</a>
                    </p>
                    <p>
                      <a href="#!" class="text-white">Help</a>
                    </p>
                  </div>
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p><i class="fas fa-home mr-3"></i> Dhaka, 1100, Bangladesh</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                  </div>
                  <!-- Grid column -->
                </div>
                <!-- Grid row -->
              </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
              © 2024 Copyright:
              <a class="text-white" href="https://mdbootstrap.com/">School360</a
                >
            </div>
            <!-- Copyright -->
          </footer>
          <!-- Footer -->

        </div>
        <!-- End of .container -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>