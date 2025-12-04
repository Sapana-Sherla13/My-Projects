<?php

@include 'config.php';

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

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">


        <div class="content">
            <h3>why choose us?</h3>
            <p>Plantopia offers fresh, healthy plants at affordable prices with safe packaging and fast delivery.
We make plant shopping easy, reliable, and satisfying for every customer.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We provide high-quality plants, plant accessories, and a smooth online shopping experience.
Each order includes proper care instructions, secure packing, and timely delivery.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        

    </div>

    <div class="flex">

        <div class="content">
            <h3>who we are?</h3>
            <p>Plantopia is an online plant store dedicated to bringing nature closer to homes and offices.
We are a passionate team focused on delivering healthy plants and a green experience.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
          
            <p>The website is easy to use and the plant categories are clearly organized.Ordering feels smooth and the instructions are easy to follow.
Overall,it provides a comfortable shopping experience.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
        </div>

        <div class="box">
           
            <p>The plants arrived in good condition with healthy leaves.
Packaging was neat and protected the plant well during delivery.
I am satisfied with the quality of the product.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Riya Sharma</h3>
        </div>

        <div class="box">
            
            <p>Customer support responded quickly and politely to my questions.
They provided clear information about delivery status.
This made the overall process more convenient.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Arjun Patel</h3>
        </div>

        <div class="box">
           
            <p>The system needs better search filters for plant types and sizes.
Sometimes it takes time to find the exact plant I want.
Improving the search feature would help a lot.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Rahul Mehta</h3>
        </div>

        <div class="box">
            
            <p>The plant descriptions were very detailed and helpful.
They made it easy for me to choose the right plant for my home.
I appreciate the clarity provided on care instructions.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Virat kohli</h3>
        </div>

        <div class="box">
            
            <p>Delivery was on time and the tracking updates were accurate.
I liked how I could easily monitor my order.
The overall service was reliable.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kabir Singh</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>