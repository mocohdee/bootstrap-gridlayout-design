<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn= mysqli_connect($server,$username,$password,$database);
if(isset($_POST["enroll"]))
{
    $fullname= $_POST['fullname'];
    $phonenumber= $_POST['phonenumber'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $course= $_POST['course'];

    $insertData =mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phonenumber','$email','$gender','$course')");

    if($insertData)
    {
        echo "Data submitted successfully";
    }
    else{
        echo "error occured";
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Document</title>
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
                    <a href="aboutus.html" class="nav-link ">About us</a>
                    <a href="enrol.php" class="btn btn-primary">Register now</a>

                </div>

            </div>
        </div>

    </nav>

    <!-- Navbar ends -->
    <main class=" text-center p-5 mb-4 bg-light">
       <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
       <ul style="list-style-type:none ;">
            <li>
                   <span><i class="fa fa-calendar"></i></span>
                   <span>20th July 2022</span>
             </li>
             <li>
                   <span><i class="fa fa-map-marker"></i></span>
                   <span>Zalego Academy <br>Devan plaza</span>
             </li>
       </ul>
     </main>
    <div class="row">
        <div class="col-lg-12 text-center">
     
        <p>Looking for a place to kickstart your career in technology?
            Whether you're a local,new in town or just cruising through we've got
                loads of great tips and events for you.
        </p>
        </div>
        </div>
     <div class="card p-5">
        <h3 class="text-center p-5">Sign up today ?</h3>
        <form action="enroll.php" method="POST">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <label for="fullname" class="form-label">Full name</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <label for="phonenumber" class="form-label">Phone number</label>
                            <input type="tel" class="form-control"name="phonenumber" placeholder="+2547...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Please enter your email">
                        </div>
                        <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                            <label for="gender" class="form-label">What's your gender</label>
                            <select name="gender" class="form-select" aria-label="default select example">
                                <option >--Select your gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <p>In order to complete your registration to the bootcamp, you are required to select one course you will be 
                            undertaking.Please NOTE that this will be your learning track during the 2-weeks immersion.

                        </p>
                        <div class="mb-3 col-lg-6">
                            <select name="course" class="form-control multiplchose_questiontypes" id="selector">
                                <option value="" >--choose your course--</option>
                                <option value="web design">web design</option>
                                <option value="cyber security">cyber security</option>
                                <option value="android development">android development</option>

                            </select>
                         </div>
                        <p>
                        You agree by providing your information you understand all our data privacy protection policy
                        outlined in our Terms & conditions and the privacy policy statements
                    </p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                           Agree terms and condition
                        </label>
                        </div>
                    </div>           
                 <button type="submit" name="enroll" class="btn btn-primary">submit application</button>
            </div>
        </form>
                   
 
            

        
     </div>
     
        <div class="mb-3 col-lg-6 col-md-6 col-sm-12" style="text-align: center;">
            <p style="color:gray">Subscribe to get information, latest news about <br>Zalego Academy</p>
        </div>
        <div class="col-lg-12" style="text-align: center; margin-bottom: 3px">
            <input type="email" placeholder="Your email address">
            <button type="submit" name="" class="btn btn-primary">Subscribe</button>
           </div>
    
    <hr>
    <footer class="align-items: center;">
        &copy;Company 2022
    </footer>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>