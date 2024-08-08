<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
        <h1>About Us</h1>
        <p>Welcome to <strong>ReadStack</strong>, your one-stop destination for all things books! We are passionate about connecting readers with the stories and knowledge that inspire, entertain, and educate.</p>
        
        <p><strong>Our Mission</strong><br>To foster a love for reading by offering a curated selection of books that cater to all ages and interests.</p>
        
        <p><strong>What We Offer</strong><br>A wide selection of genres, a user-friendly experience, and personalized recommendations tailored to your reading preferences.</p>
        
        <p><strong>Our Story</strong><br>Founded by book lovers and tech enthusiasts, ReadStack was created to make quality books accessible to everyone.</p>
        
        <p><strong>Why Choose Us?</strong><br>Quality books at affordable prices, a strong reader community, and a commitment to exceptional service.</p>
        
        <p>Thank you for choosing ReadStack. Happy Reading!</p>
    </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

    <div class="box">
        <img src="images/pic-1.png" alt="">
        <p>ReadStack has an amazing collection of books. I found exactly what I was looking for with ease. Highly recommended!</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Jane Smith</h3>
    </div>

    <div class="box">
        <img src="images/pic-2.png" alt="">
        <p>The user interface is so smooth and intuitive. Shopping for books online has never been this easy. Great job, ReadStack!</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h3>Michael Johnson</h3>
    </div>

    <div class="box">
        <img src="images/pic-3.png" alt="">
        <p>Excellent customer service and a fantastic selection of books. I love the personalized recommendations!</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Emily Davis</h3>
    </div>

    <div class="box">
        <img src="images/pic-4.png" alt="">
        <p>I was impressed with how quickly I received my order. The books were well-packaged and in perfect condition. Thank you, ReadStack!</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>David Brown</h3>
    </div>

    <div class="box">
        <img src="images/pic-5.png" alt="">
        <p>ReadStack’s collection is diverse, and the prices are unbeatable. I’ve found some real gems here that I couldn’t find elsewhere.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h3>Sarah Wilson</h3>
    </div>

    <div class="box">
        <img src="images/pic-6.png" alt="">
        <p>The community aspect of ReadStack is wonderful. I’ve joined book discussions and made new friends who share my passion for reading.</p>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <h3>Linda Thompson</h3>
    </div>

</div>


</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>