<?php
session_start(); 
if(!isset($_SESSION['user'])) 
{ 
    
    $_SESSION['loggedin']=false;
} 
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog - About Dogs</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="home.php">Veterinarian</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Blog
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="blog-home-1.php">About Cats</a>
            <a class="dropdown-item" href="blog-home-2.php">About Dogs</a>
            <a class="dropdown-item" href="blog-post.php">General Information</a>
          </div>
        </li>
        <?php
          if($_SESSION['loggedin']==true){
            ?>
          
          <li class="nav-item dropdown" id="user_area">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Welcome User
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="appoint.php">Book an appointment</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
          <?php
          } else{
            ?>
            <li class="nav-item" >
            <a class="nav-link" href="login.php">Login/Sign Up</a>
          </li>
          <?php
          }
            ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">About Dogs
    <small>(“A dog is the only thing on earth that loves you more than he loves himself.”)</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="home.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Dogs</li>
  </ol>

  <!-- Blog Post -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <a href="#">
            <img class="img-fluid rounded" src="images/dog.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <h2 class="card-title">Join us to prevent dog bites</h2>
          <p class="card-text">Dog attacks are a nationwide issue and pose a double tragedy to the victim and the fate of the dog.

            In 2018, there were 17,300 dog bite insurance claims and 670,000 dogs were euthanized. The CDC reports nearly 350,000 people were treated at hospital emergency rooms for dog-related injuries in 2017. Children and babies are at the highest risk for injury.

            National Dog Bite Prevention Week is April 7 –13.</p>

        </div>
      </div>
    </div>
    <div class="card-footer text-muted">
      THURSDAY, APR 4TH, 2019
      <a href="#">DR. GAURI SINHA</a>
    </div>
  </div>

  <!-- Blog Post -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <a href="#">
            <img class="img-fluid rounded" src="images/dog2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <h2 class="card-title">How a dog’s eyesight really works</h2>
          <p class="card-text">Why can the same dog who barks his head off at the slightest leaf blowing across the grass seem not to see the treats on the floor right in front of him? It’s all in the mystery of canine vision.Their eyes are adapted to help them see better in low light, for instance. And sighthounds bear that moniker because of their ability to detect motion at a distance, thanks to a long, narrow head that gives them a greater field of vision. They also benefit from a “visual streak,” an elongated area in the retina that provides a panoramic view of their surroundings and excellent peripheral vision. The average dog has a visual field of approximately 250 degrees, while brachycephalic dogs such as pugs have a visual field of approximately 220 degrees. Sighthounds? Their visual field is as much as 290 degrees. </p>

        </div>
      </div>
    </div>
    <div class="card-footer text-muted">
      MONDAY, APR 1ST, 2019
      <a href="#">DR. GAURI SINHA</a>
    </div>
  </div>

  <!-- Blog Post -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <a href="#">
            <img class="img-fluid rounded" src="images/dog3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <h2 class="card-title">Does your pup need to gain weight?</h2>
          <p class="card-text">Obesity is an epidemic in pet dogs and cats, but there are pets who need to gain weight, usually due to a medical problem. So is your “skinny” pup really skinny, or are we just not used to what “normal” looks like? A good rule to live by is “Watch the dog; don’t watch the bowl.” In other words, how the dog looks should tell you whether you’re feeding the right amount. A healthy puppy in good shape looks muscular but not fat.’m a big fan of feeding puppies with puzzle toys instead of bowls. Having to put forth some effort for their food keeps dogs from eating too much or too quickly. </p>

        </div>
      </div>
    </div>
    <div class="card-footer text-muted">
      MONDAY, MAR 25TH, 2019
      <a href="#">DR. GAURI SINHA</a>
    </div>
  </div>

  <!-- Blog Post -->
  <div class="card mb-4">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <a href="#">
            <img class="img-fluid rounded" src="images/dog4.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <h2 class="card-title">How I learned to stop hurrying and let my dog check his pee-mail</h2>
          <p class="card-text">Didn’t I read something, perhaps a soliloquy from a doggy Shakespeare who exclaimed from beside a fire-hydrant, “To pee, or not to pee, that is not the question.”? A dog’s motto is to pee frequently with as much volume and elevation as possible.

            I long ago coined the now popular term “pee-mail,” which is basically a social media platform (or vertical surface) for canines. While some humans like my 94-year-old mother-in-law shun Facebook and Instagram, all dogs use Assbook and Piss-ta-gram. Unlike humans who have to log onto multiple sites and scroll to catch up on all their friend’s news, all a dog needs is a whiff of a very prominent vertical surface such as a tree on the trail, a signpost, or the iconic choice, a fire hydrant.</p>

        </div>
      </div>
    </div>
    <div class="card-footer text-muted">
      WEDNESDAY, MAR 27TH, 2019
      <a href="#">DR. GAURI SINHA</a>
    </div>
  </div>



</div>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Veterinary Care 2019</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
