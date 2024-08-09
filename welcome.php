<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'] ?? null; // Use null coalescing operator to avoid undefined index notice

if ($user_id) {
   header('Location: home.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="Favicon.ico" type="image/x-icon">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Hand Picked Book to your door.</h3>
      <p>One stop solution for all Bookworms. Your Reading journey awaits...</p>
      <a href="about.php" class="white-btn">discover more</a>
   </div>

</section>
<section class="products">

   <h1 class="title">latest products</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
      ?>
     <div class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <a href="login.php" class="option-btn">Buy Now</a>
     </div>
      <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
      ?>
   </div>
   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" style="font-style: italic;"class="option-btn">Load More</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="About ReadStack">
      </div>

      <div class="content">
         <h3>About ReadStack</h3>
         <p>At ReadStack, we believe that every reader deserves a gateway to new worlds, fresh perspectives, and endless adventures. Whether you’re a fan of thrilling horror, imaginative fiction, or cutting-edge science, our curated collection offers something for everyone. We pride ourselves on being more than just a bookstore; we are a community of avid readers and passionate learners.Our mission is to provide an unparalleled reading experience, where quality meets diversity.</p>

         <a href="about.php" class="btn">Read More</a>
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

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Feel Free to Reach out to us!</p>
      <a href="contact.php" class="white-btn">contact us</a>
   </div>

</section>

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
