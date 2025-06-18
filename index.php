
<?php
$conn = new mysqli("localhost", "root", "", "autojin");
$result = $conn->query("SELECT * FROM products");


$result2 = $conn->query("SELECT * FROM product2");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoJin</title>
    <style>

        
* {
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
  background-color:rgb(13, 12, 12);
    color: #fff;
        padding: 10;

}

.container {

    max-width: 1200px;
    margin: 0 auto;
    padding: 10px;
}

/* Header */
.header {
    display: flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
    background:rgb(255, 255, 255);
    backdrop-filter: blur(10px);
    margin-bottom: 1%;
   
}

.nav1 {
    display: flex;
    align-items: center;
    padding: 1rem 2rem;
}


.nav-menu1 {
    background:rgb(0, 0, 0);
    padding:  1rem;
    
    border-radius: 0.5rem;
    color: white;
    display: flex;
    list-style: none;
    gap: 2rem;
    align-items: center;
}

.nav-menu1 a {
    color:rgb(255, 255, 255);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
}

.nav-menu1 a:hover {
    color: #1B2E3C;
}


 .nav-menu1  {
    background:rgb(19, 18, 18);
    padding:  1rem;
    
    border-radius: 0.5rem;
    
    display: flex;
    list-style: none;
    gap: 2rem;
    align-items: center;
}


.admin-btn {
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    transition: background 0.3s;
}

.admin-btn:hover {
    background:rgb(255, 255, 255);
    color: #000000 !important;
}

/* Hero Section */
/* .hero {
  
    
    margin: 10px ;
    margin-top: 5%;

}
.hero img {
    width: 100%;
    height: 100%;
    object-fit: cover;

} */


/* Sections */


.parent {
    height: 70vh;
     display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(5, 1fr);
    gap: 8px;
    margin: 10px;
    margin-top: 6%;
}
   

    
.div1 {
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;

    color: #ff0202;
    background: url(bg1.jpg);
    background-size: cover;
    font-size: 2rem;
    font-weight: bold;
    transition: filter 0.7s ease;  /* smoother transition */
    
    grid-column-start: 1;
    grid-row-start: 1;
    grid-column: span 2 / span 2;
    grid-row: span 3 / span 3;

    backdrop-filter: blur(5px);
    filter: grayscale(100%);  /* apply grayscale initially */
}

.div1:hover {
    filter: grayscale(0);  /* remove grayscale on hover */
    transition: filter 0.7s ease;  /* smoother transition */
}

.div1 a {
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    width: 100%;
    height: 100%;
    text-decoration: none;
    font-weight: bold;  /* corrected from 7rem */
}

.div2 {
        border-radius: 10px;

        display: flex;
    justify-content: center;
    align-items: center;
    object-fit: cover;

    background-size: cover;
    color: #fff;
    font-size: 2rem;
    font-weight: bold;
   
    filter: grayscale(50%);

    grid-row: span 5 / span 5;
    grid-column-start: 3;
}

.video-background {
    border-radius: 10px;

  position: relative;
  width: 100%;
  height: 70vh;
  overflow: hidden;
}
.video-background video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  transform: translate(-50%, -50%);
  object-fit: cover;
}
.video-background .content {
  position: relative;
  z-index: 2;
  color: white;
  text-align: center;
  padding-top: 200px;
}

.div2 a {
        border-radius: 10px;

    display: flex;
    justify-content: center;
    align-items: center;
    color: #ff0202;
width: 100%;    
height: 100%;
    text-decoration: none;
    font-weight: 7rem;
    
   
}

.div3 {
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ff0202;
    background: url(bg4.jpg);
    background-size: cover;
    background-position: center;
    font-size: 2rem;
    font-weight: bold;
    transition: filter 0.7s ease;
    backdrop-filter: blur(5px);
    filter: grayscale(100%);
    grid-column: span 2 / span 2;
    grid-row: span 2 / span 2;
    grid-row-start: 4;
}

.div3:hover {
    filter: grayscale(0);
}

.div3 a {
    border-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    width: 100%;
    height: 100%;
    text-decoration: none;
    font-weight: bold;
}


/* Footer */
.footer {
    background: #000;
    border-top: 1px solid #333;
    padding: 3rem 0;
    text-align: center;
}

.footer-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
}

.footer-content i {
    color: #dc2626;
}

.footer p {
    color: #999;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-title {
        font-size: 4rem;
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
    }
    
    .nav-menu {
        gap: 1rem;
    }
    
    .races-container {
        grid-template-columns: 1fr;
    }
    
    .teams-grid {
        grid-template-columns: 1fr;
    }
    
    .hero-stats {
        gap: 1.5rem;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 3rem;
    }
    
    .section-title {
        font-size: 2rem;
    }
    
    .nav {
        padding: 1rem;
    }
    
    .container {
        padding: 0 1rem;
    }
}

        .product-section {
            text-decoration: none;

    padding: 60px 20px;
    color: #1B2E3C;
    text-align: center;
}

.product-title {
    font-size: 2rem;
    margin-bottom: 40px;
    color:rgb(0, 0, 0);
}

.product-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.product-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    overflow: hidden;
    width: 220px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
}

.product-card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
}

.product-info {
    padding: 15px;
    text-align: left;
}

.product-info h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color:rgb(0, 0, 0);
}

.product-info p {
    font-size: 0.95rem;
    margin: 5px 0;
}

    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <span><img src="logo.png" alt=""></span>
        <nav class="nav1">
            <ul class="nav-menu1">
                <li><a href="#home">Home</a></li>
                <li><a href="#product1">GADGETS</a></li>
                <li><a href="#product2">CAR CARE</a></li>
                <li><a href="profile.php">PROFILE</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="dashboard.php" class="admin-btn"><i class="fas fa-cog"></i> Admin</a></li>
                <li><a href="view_cart.php">🛒 View Cart</a> <li> 
            </ul>
             
        </nav>
   
    </header>
     <!-- Hero Section -->
   <!-- <section id="home" class="hero">
    <img src="m.jpg" alt="">
  
</section> -->

   

<div class="parent" id="home">
    <div class="div1"><a href="#product1">CAR GADGETS</a></div>
    <div class="div2">

    <div class="video-background">
  <video autoplay muted loop playsinline>
    <source src="bg3.mp4" type="video/mp4">
  </video>
  <div class="content">
  </div>
</div>

    </div>
    <div class="div3"><a href="#product2">CAR CARE</a></div>
</div>
    
   

<section class="product-section" id="product1">
    <h2 class="product-title">CAR GADGETS</h2>


    
        
    <div class="product-grid">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= $row['image'] ?>" alt="Product Image">
                <div class="product-info">
                    <h3><?= $row['productname'] ?></h3>
                    <p><strong>Brand:</strong> <?= $row['brand'] ?></p>
                    <p><strong>Price:</strong> $<?= $row['price'] ?></p>
                       <form action="add_to_cart.php" method="POST">
    <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
    <button type="submit">Add to Cart</button>
</form>


                </div>
            </div>
        <?php endwhile; ?>
    </div>
    
</section>

<section class="product-section" id="product2">
    <h2 class="product-title">CAR CARE</h2>
    <div class="product-grid">
        <?php while($row = $result2->fetch_assoc()): ?>
            <div class="product-card">
                <img src="<?= $row['image'] ?>" alt="Product Image">
                <div class="product-info">
                    <h3><?= $row['productname'] ?></h3>
                    <p><strong>Brand:</strong> <?= $row['brand'] ?></p>
                    <p><strong>Price:</strong> $<?= $row['price'] ?></p>
                       <form action="add_to_cart2.php" method="POST">
    <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
    <button type="submit">Add to Cart</button>
</form>


                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>


    <!-- Footer -->

    
<!-- Footer Start -->
<footer style="background-color: #1c1c1c; color: #fff; padding: 40px 0; font-family: Arial, sans-serif;">
  <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">

    <!-- Why Section -->
    <div style="flex: 1 1 100%;">
      <h2 style="color: #e60000; font-size: 22px; margin-bottom: 10px;">Why AutoJin</h2>
      <p style="color: #ccc; font-size: 14px;">
        AutoJin is your trusted store for premium car gadgets and care products. We bring you top-quality automotive gear at your doorstep, making your driving experience smarter, safer, and more enjoyable.
      </p>
    </div>

    <!-- Contact Info -->
    <div style="flex: 1; min-width: 250px;">
      <img src="logo2.png" alt="AutoGearHub Logo" style="width: 100px; margin-bottom: 5px;">
      <p><strong>📞</strong> 0312-2093410</p>
      <p><strong>📧</strong> support@autojin.pk</p>
      <p><strong>📍</strong> 12-B, Main Boulevard, Gulshan-e-Iqbal, Karachi, Pakistan</p>
      <p>Mon - Sat: 11:00 am - 8:00 pm</p>
    </div>

    <!-- Information Links -->
    <div style="flex: 1; min-width: 200px;">
      <h4>Information</h4>
      <ul style="list-style: none; padding: 0; font-size: 14px;">
        <li><a href="#" style="color: #ccc; text-decoration: none;">About Us</a></li>
        <li><a href="#" style="color: #ccc; text-decoration: none;">Our Brands</a></li>
        <li><a href="#" style="color: #ccc; text-decoration: none;">Terms & Conditions</a></li>
        <li><a href="#" style="color: #ccc; text-decoration: none;">Privacy Policy</a></li>
      </ul>
    </div>


  </div>

</footer>
<!-- Footer End -->

</body>
</html>
