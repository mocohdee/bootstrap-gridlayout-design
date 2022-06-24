<?php
//1/ database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";

$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_POST ['submitButton'] ) )
{
  //fetch form data
  $fullname = $_POST['fullname'];
  $phonenumber = $_POST['phonenumber'];
  $emailaddress =$_POST['emailaddress'];
  $gender = $_POST['gender'];
  $courses = $_POST['courses'];
   //submit form data   
  $insertData = mysqli_query($conn,"INSERT INTO 
  registernow(fullname,phonenumber,emailaddress,gender,courses);
  VALUES('$fullname','$phonenumber','$emailaddress','$gender','$courses') ");

  if($insertData)
  {
    echo "Data";
  } 
  else
  {
    echo "Error occured";
  }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register now</title>
  <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
  
</head>
<body>
   <!-- Nav bar starts here -->
   <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="aboutus.html" class="nav-link">About us</a>
                    <a href="#" class="btn btn-primary">Register Now</a>

                </div>

            </div>
        </div>

    </nav>
    <!-- Navbar ends -->
    <main class="p-5 mb-4 bg-light">
       <h1 style="padding-top: 30px; text-align:center ">JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
    <div class="container">
    <div class="row">
           <div class="col-lg-6">
            <h1></h1>
     

      </div>

    </div>

    <!-- Register now starts here -->
    <div class="row pt-5">
            
            <p> Looking for a place to kickstart your career in Technology?
              Whether you're a local,new in town or just cruising through we've got 
                   loads of great tips and events for you. 

                   
            </p>
            <p>
              Sign up for today?

            </p>

            <form >
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Fullname</label>
                        <input type="text" class="form-control" placeholder="Enter your full name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Phone number</label>
                        <input type="tel" class="form-control" placeholder="Enter your phone number">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter your email address">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Gender</label>
                        <input type="gender" class="form-control" placeholder="Select your gender">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="firstname" class="form-label">Courses</label>
                        <input type="Courses" class="form-control" placeholder="Select your course">

                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit application</button>
                <p style="text-align:center; padding-top: 50px; color: gray;">Subscribe to get information,latest news about <br>Zalego Academy</p>
            <div class="row pt-5">
                <div class="col-lg-12" style="text-align:center;">
                    <input type="email" name="email" placeholder="Enter your email address">
                    <button class="btn btn-primary" name = "submitButton">Subscribe</button>
            </form>
        </div>
    <!-- end register now -->

    <hr>
    <footer>
        &copy;Zalego Academy 2022
    </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    
  
</body>
</html>