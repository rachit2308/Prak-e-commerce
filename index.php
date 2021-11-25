<?php
session_start();
echo "WELCOME"."  ".strtoupper($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/fa28b20391.js" crossorigin="anonymous"></script>
</head>
<body>
<!--NAVIGATION BAR -->
  <nav class ="navbar">
    <div class="nav">

        <h1>PRAK</h1>
        <div class="nav-items">
          <div class="search">
            <input type="text" class="search-box" placeholder="Search-unique">
            <button class="search-btn"> Search</button>
          </div>
        <a href="login.php"><img src="user.png" alt="user"></a>
        <a href="#"><img src="cart.png" alt="cart"></a>      
      </div>
    </div>
  </nav>

<!--DROPDOWN MENU-->  
  <div class="menu">
    <ul>

        <!--JEWELLERY-->

      <li>
        <a href="#"></i>Jewellery<i class="fa fa-caret-down"></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore1-1.html">Rings</a></li>
            <li><a href="viewmore1-2.html">Necklace</a></li>
            <li><a href="viewmore1-3.html">earings</a></li>
            <li><a href="viewmore1-4.html">Braclets</a></li>
            <li><a href="viewmore1-4.html">Braclets</a></li>
          </ul>                      
        </div>
      </li>

          <!--CLOTHING-->
      
      <li>
        <a href="#">Clothing<i class="fa fa-caret-down" ></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore2-1.html">Women's</a></li>
            <li><a href="viewmore2-2.html">Men's</a></li>
            <li><a href="viewmore2-3.html">Kid's</a></li>
            <li><a href="viewmore2-4.html">Old people</a></li>
          </ul>
        </div>
      </li>

            <!--FOOTWEAR-->

      <li>
        <a href="#">Footwear<i class="fa fa-caret-down" ></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore3-1.html">Men's </a></li>
            <li><a href="viewmore3-2.html">Women's</a></li>
            <li><a href="viewmore3-3.html">Kid's</a></li>
            <li><a href="viewmore3-4.html">Kohlapuri</a></li>
          </ul>
        </div>
      </li>

            <!--VINTAGE-->

      <li>
        <a href="#">Vintage <i class="fa fa-caret-down" ></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore4-1.html">Telephone</a></li>
            <li><a href="viewmore4-2.html">Telescope </a></li>
            <li><a href="viewmore4-3.html">Gramophone</a></li>
            <li><a href="viewmore4-4.html">Handicraft</a></li>
          </ul>
        </div>
      </li>

            <!--GIFT ITEM-->

      <li>
        <a href="#">Gift items<i class="fa fa-caret-down" ></i></a>
        <div class="dropdown1">
          <ul>
            <li><a href="viewmore5-1.html">Wallet</a></li>
            <li><a href="viewmore5-2.html">Watch</a></li>
            <li><a href="viewmore5-3.html">Charcuterie</a></li>
            <li><a href="viewmore5-4.html">Custom Name Necklace</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

<!--ITEM-->
    <div class="first">
      <div class = "container2">
        <div class="images">
            <img src="rings.jpg" width="80%" height="75%">
            Handmade Rings
            <br>
            <button class="btn"><a href="viewmore1-1.html">View More</a></button>
        </div>
        <div class="images">
            <img src="necklace.jpg" width="100%" height="75%">
             Handmade Necklace
            <br> 
            <button class="btn"><a href="viewmore1-2.html">View More</a></button>
        </div>
        <div class="images">
            <img src="earings.jpg" width="100%" height="75%">
           Handmade Earrings
            <br>
            <button class="btn"><a href="viewmore1-3.html">View More</a></button>
        </div>
        <div class="images">
            <img src="bangles.jpg" width="100%" height="75%">
           Handmade Bangles
            <br> 
            <button class="btn"><a href="viewmore1-4.html">View More</a></button>
        </div>
        <div class="images">
            <img src="purse.jpg" width="100%" height="75%">
           Handmade Bags and Purses
            <br> 
            <button class="btn"><a href="viewmore1-5.html">View More</a></button>
        </div>
    </div>

    
    <div class="second">
      <div class = "container3">
        <div class="images">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5MpRjYORCUlqzCcs4oqq6xUM7zOxUgNoj1Q&usqp=CAU" width="100%" height="75%">
             Men's Traditional Kurta <br>
            <button class="btn"><a href="viewmore2-1.html">View More</a></button>
        </div>
        <div class="images">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbNyWEoo7ycMkUECRi71AKZiSomoEnwNiiig&usqp=CAU" width="100%" height="75%">
            Women's Traditional Saree
            <br> 
            <button class="btn"><a href="viewmore2-2.html">View More</a></button>
        </div>
        <div class="images">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqbdCk1r4hrPmobaU5wYY3pk1bRUXpAiqanQ&usqp=CAU" width="100%" height="75%">
            Kids Traditional Wear 
            <br>
            <button class="btn"><a href="viewmore2-3.html">View More</a></button>
        </div>
        <div class="images">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuxkHcokMz26VKamz1bi2oYHZfnZB-ohvROg&usqp=CAU" width="100%" height="75%">       
            Old Age Group Wear
            <br> 
            <button class="btn"><a href="viewmore2-4.html">View More</a></button>
        </div>
    </div>
    </div>
    <div class="third">
      <div class = "container">
        <div class="images" style="width: 55%;">
            <img src="men slipper.jpg" width="100%" height="75%">
            Men's Handmade 
            <br>
            <button class="btn"><a href="viewmore3-1.html">View More</a></button>
        </div>
        <div class="images" >
            <img src="ladie slipper.jpg" width="80%" height="75%"><br>
            Ladies Handmade
            <br> 
            <button class="btn"><a href="viewmore3-2.html">View More</a></button>
        </div>
        <div class="images">
            <img src="shoe kid.jpg" width="80%" height="75%"><br>
            Kid's Handmade
            <br>
            <button class="btn"><a href="viewmore3-3.html">View More</a></button>
        </div>
        <div class="images">
            <img src="kohlapuri.jpg" width="100%" height="75%">
            Kohlapuri Chhapal Handmade
            <br> 
            <button class="btn"><a href="viewmore3-4.html">View More</a></button>
        </div>  
    </div>
    </div>
    <!-- names -->
    <div class="fourth">
      <div class = "container4">
        <div class="images" style="width:45%" >
            <img src="telephone.jpg" width="100%" height="75%"><br>
            Antique Telephone Vintage Item<br>
            <button class="btn"><a href="viewmore4-1.html">View More</a></button>
        </div>
        <div class="images">
            <img src="telescope.jpg" width="100%" height="75%">
            VINTAGE TELESCOPE AND COMPAS<br>
            <button class="btn"><a href="viewmore4-2.html">View More</a></button>
        </div>
        <div class="images" style="width: 50%;">
            <img src="gramophone.jpg" width="80%" height="75%">
            Gramophone Record Player <br>
            <button class="btn"><a href="viewmore4-3.html">View More</a></button>
        </div>
        <div class="images" style="width: 50%;">
            <img src="handicraft.jpg" width="80%" height="75%"><br>
            Brk Handicraft Premium Antique Wine Set<br>
            <button class="btn"><a href="viewmore4-4.html">View More</a></button>
        </div>
    </div>
    <br><br>

    </div>
    <div class="fifth">
      <div class = "container">
        <div class="images">
            <img src="gift1.jpg" width="100%" height="65%">
            Anniversary Gift for Him,Personalized Wallet,Mens Wallet,Engraved Wallet,Leather Wallet<br>
            <button class="btn"><a href="viewmore5-1.html">View More</a></button>
        </div>
        <div class="images">
            <img src="gift2.jpg" width="100%" height="65%">
            Anniversary Gift for Him,Wood Watch,Personalized Watch,Engraved Watch,Wooden Watch<br>
            <button class="btn"><a href="viewmore5-2.html">View More</a></button>
        </div>
        <div class="images">
            <img src="gift3.jpg" width="100%" height="65%">
            Personalized Charcuterie Planks and Beer Flights - 4 Styles and Gift Sets Available for Cooking<br>
            <button class="btn"><a href="viewmore5-3.html">View More</a></button>
        </div>
        <div class="images">
            <img src="gift4.jpg" width="100%" height="65%">
            Custom Name Necklace with Birth Flower,Dainty Personalized Minimalist Jewelry<br>
            <button class="btn"><a href="viewmore5-4.html">View More</a></button>
        </div>
    </div>
    </div>
  
  <br>
  <br>
  <br>
  <br>
  <div class="bottom-mid">WHAT IS PRAK ?</div>
  <br>
  <h3><a href="files/story.html">Read our wonderfully weird story</a></h3>
 
 
  <br>
  <div class="main">
    <div class="outer">
      <h4>Organisation for handmade </h4><br>
        <p> Prak is an Indian Based e-commerce website which is a go-to trending b2b site for millions of makers of handmade goods,vintage items and craft products.It is a small start up where people will come together go buy items and surely take advantage of it.</p>
          <strong><a href=""><u>Here are some of the ways we’re making a positive impact, together.</u></a></strong>
     
    </div>
 
 
    <div class="outer1">
      <h4>Efficient Creators</h4><br>
        <p>There's no Prak warehouse just few of people selling the things they love.we make the whole process easy,helping you connect directly with makers to find something extraordinary.</p>
   
    </div>
 
 
    <div class="outer2">
      <h4>Composure</h4><br>
        <p>Your Privacy is the highest priority of our dedicated team,and if you ever need assistance, we are always ready to step in for support.</p>
     
    </div>
  </div>
 
  <br>
  <br>
<!-- reach us at -->
  <div class="bottom-container">
    <h2>Reach us at:</h2>
    <a class="footer-link" href="mailto:prakhub.inc@gmail.com"><i class="social-icon fas fa-envelope fa-2x"></i></a>
    <a class="footer-link" href="https://www.instagram.com/"><i class="social-icon fab fa-instagram fa-2x"></i></a>
    <a class="footer-link" href="https://www.telegram.com/9170852086"><i class="social-icon fab fa-telegram fa-2x"></i></a>
    <a class="footer-link" href="https://twitter.com/home"><i class="social-icon fab fa-twitter fa-2x"></i></a>
  </div>


  <br>
  <br>
  <footer class="footer"> 
    <div class="contain">
        <div class="row"> 
        <div class="foot-col">
        <h3>The Company</h3>
        <ul>
            <li><a href="index.html">Prak-in</a></li>
            <li><a href="Termsofuse.html">Terms Of Use</a></li><!-- terms of use -->
            <li><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448916.46637213975!2d77.02115597496018!3d28.47473097589749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cddb5f03b5b71%3A0x391747e4bedfcb19!2sHaldiram&#39;s!5e0!3m2!1sen!2sin!4v1622612697128!5m2!1sen!2sin" target="iframe_a">Site Map</a></li>
            <li><iframe src="" name="iframe_a" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </ul>
        </div>
      <div class="foot-col">
        <h3>Guide</h3>
              <ul>
            <li><a href="#">How To Buy</a></li>
            <li><a href="#">How To Sell</a></li>
           </ul>
        </div>
      <div class="foot-col">
        <h3>Apple-Pie Order</h3>
        <ul>
            <li><a href="bulkorder.html">Bulk Orders</a></li>
            <li><a href="affilates.html">Affilates</a></li>
       </ul>
    </div>
      <div class="foot-col">
        <h3>Help & Support</h3>
        <ul>
            <li><a href="contactUs.html">Contact Us</a></li>
            <li><a href="FAQ.html">FAQ's</a></li>
            <li><a href="privacypolicy.html">Privacy Policy</a></li>
            <li><a href="termsnconditions.html">Terms & Conditions</a></li>
           </ul>
        </div>
      </div>
    </div>
    <div class="foot1">
      <p>Register for Free - <a href="#">  Signup!</a></p>
    </div>
    <div class="foot2">
      <ul>
        <a href="mailto:prakhub.inc@gmail.com"><i class="fa fa-envelope"></i></a>
        <a href="https://www.telegram.com/9170852086"><i class="fab fa-telegram"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a>
      </ul>
    </div>
  <div class="foot3">
    <p>Copyright &copy; 2021 All Rights by Prakhub.inc</p>
  </div>
 
</body>

<script src="index.js"></script>
</html>