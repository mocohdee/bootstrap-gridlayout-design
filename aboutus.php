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
  $email =$_POST['email'];
  $sqlQuery = mysqli_query($conn,"INSERT INTO subscribers(email)
  VALUES('$email') ");

  if($sqlQuery)
  {
    echo "Success";
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
    <title>About us</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Nav bar starts here -->
    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbardisplaynavigations">
                 <div class="navbar-nav">
                     <a href="index.html" class="nav-link active">Home</a>
                     <a href="#" class="nav-link active">About Us</a>
                     <a href="#" class="nav-link active">Contact us</a>

                 </div>

             </div>

        </div>
    </nav> -->
   <!-- Nav bar ends -->
   <main class="p-5 mb-4 bg-light">
       <h1 style="padding-top: 30px;">About us</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, omnis rerum maxime 
           itaque perspiciatis vero, laudantium porro est amet tempore culpa. Ipsam blanditiis vitae dicta dolore aliquid.
            Repellendus, veniam corrupti.
        </p>
   </main>
   
   <div class="container">
       <div class="row">
           <div class="col-lg-6">
               <h1>Our programs</h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, commodi sit iste natus id, minus 
                   dolorem asperiores illum qui quia nam voluptatum officia ipsum vero adipisci. 
                   Sit, velit quis deleniti, ipsam ullam optio dolorem asperiores odio quas tempore perferendis
                    at!
                </p>
             </div>
             <div class="col-lg-6">
                 <img src="images/images bootstrap.jpg.html" alt="image" style="border-radius:20px;height:45vh;width:550px">
            </div>
        </div>
    </div>
               <h1>The programs</h1>
    <div class="row">
        <div class="col-lg-4 bg-light shadow">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Skill Discovery</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias suscipit accusamus nihil enim quisquam dolorum
                         ab ipsam vitae corporis, voluptates debitis, voluptatem porro culpa facere assumenda corrupti a. Non ea magnam
                          aliquid illo pariatur incidunt veniam fuga qui similique animi?
                     </p>
                </div>
                <button class="btn btn-primary">View Details</button>


            </div>

        </div>
        <div class="col-lg-4 bg-light shadow">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Upskilling Programs</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias suscipit accusamus nihil enim quisquam dolorum
                         ab ipsam vitae corporis, voluptates debitis, voluptatem porro culpa facere assumenda corrupti a. Non ea magnam
                          aliquid illo pariatur incidunt veniam fuga qui similique animi?
                     </p>
                </div>
                <button class="btn btn-primary">View Details</button>


            </div>

        </div>
        <div class="col-lg-4 bg-light shadow">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Path Finding</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias suscipit accusamus nihil enim quisquam dolorum
                         ab ipsam vitae corporis, voluptates debitis, voluptatem porro culpa facere assumenda corrupti a. Non ea magnam
                          aliquid illo pariatur incidunt veniam fuga qui similique animi?
                     </p>
                </div>
                <button class="btn btn-primary">View Details</button>


            </div>

        </div>
        <p style="text-align:center; padding-top: 50px; color: gray;">Subscribe to get information,latest news about <br>Zalego Academy</p>
        <form action = "aboutus.php" method = POST>
            <div class="row pt-5">
                <div class="col-lg-12" style="text-align:center;">
                    <input type="email" name="email" placeholder="Enter your email address">
                    <button class="btn btn-primary" name = "submitButton">Subscribe</button>

                </div>
            </div>
        </form>

    </div>
    <hr>
    <footer>
        &copy;Zalego Academy 2022
    </footer>

    
</body>
</html>