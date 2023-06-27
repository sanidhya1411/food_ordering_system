<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:admin/signup.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
</head>
<body>
    <!-- header section starts -->
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>foody</a>
        <div id="menu-bar" class="fas fa-bars"></div>
        <nav class="navbar">
        <a href="#home">home</a>
        <a href="#dishes">dishes</a>
        <a href="#about">about us</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="admin/order.php">order</a>
        <a href="admin/index.php">order status</a>
        <a href="admin/logout.php">logout</a>
        </nav>
    </header>
    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
        <div class=" swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>crispy samosas</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, ut?</p>
                        <a href="admin/order.php" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/slide3.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>hot pizza</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, ut?</p>
                        <a href="admin/order.php" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/slide1.png" alt="">
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>delicious sweets</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, ut?</p>
                        <a href="admin/order.php" class="btn">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/slide2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
            
        </div>
    </section>
    <!-- home section ends -->

    <!-- dishes section starts -->
    <section class="dishes" id="dishes">
        <h3 class="subheading">our dishes</h3>
        <h3 class="heading">popular dishes</h3>
        <div class="box-container">
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish1.png" alt=""> 
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">order</a>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish2.jpg" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">order</a>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"> </a>
                <a href="#" class="fas fa-eye"> </a>
                <img src="images/dish3.jpg" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">order</a>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"> </a>
                <a href="#" class="fas fa-eye"> </a>
                <img src="images/dish4.jpg" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">order</a>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"> </a>
                <a href="#" class="fas fa-eye"> </a>
                <img src="images/dish5.jpg" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">order</a>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"> </a>
                <a href="#" class="fas fa-eye"> </a>
                <img src="images/dish6.png" alt="">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <a href="#" class="btn">order</a>
            </div>
            
        </div>
    </section>

    <!-- dishes section ends -->

    <!-- about section starts -->

    <section class="about" id="about">

        <h3 class="subheading">about us</h3>
        <h3 class="heading">why to choose us?</h3>

        <div class="row">
            <div class="image">
                <img src="images/noodlesbg.png" alt="">
            </div>
            <div class="content">
                <h3>best food in the country</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo labore quis aut pariatur, in rerum? Nobis id culpa commodi aliquam?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid facilis sapiente tenetur porro commodi rerum necessitatibus modi labore dolorem delectus.</p>
                <div class="icons-container">
                  <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                  </div>
                  <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payment</span>
                  </div>
                  <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                  </div>
                </div>
                <a href="" class="btn">learn more</a>
            </div>
        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts -->

    <section class="menu" id="menu">
      
        <h3 class="subheading">our menu</h3>
        <h3 class="heading">today's speciality</h3>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/menu1.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Burger</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 50</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu2.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Ice Tea</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 60</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu3.jpg" alt="">
                    <div class="overlay"></div>
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Pizza</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 220</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu4.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Paneer Tikka</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 90</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu5.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Cake</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 300</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu6.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Fries</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 120</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu7.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Chilli Paneer</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 150</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu8.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Cold Drink</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 40</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu9.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Noodles</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 80</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu10.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Sweets</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 500</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu11.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Samosa</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 50</span>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="images/menu12.jpg" alt="">
                    <a href="#" class="fas fa-heart"></a>
                </div>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Ice Cream</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque hic tenetur repellendus laudantium, recusandae nostrum sunt dolores asperiores est esse?</p>
                    <span class="price">Rs 100</span>
                </div>

            </div>
        </div>

    </section>

    <!-- menu section ends -->

    <!-- review section starts -->

    <section class="review" id="review">

        <h3 class="subheading">customer's review</h3>
        <h3 class="heading">what they say about us</h3>

        <div class="review-slider">
            <div class="wrapper">
                <div class="slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review1.jpg" alt="">
                        <div class="userinfo">
                            <h3>john deo</h3>
                        </div>

                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, magnam. Et, a dignissimos? Adipisci illo voluptas, atque sit minus culpa?</p>

                </div>
                <div class="slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review2.jpg" alt="">
                        <div class="userinfo">
                            <h3>john deo</h3>
                        </div>

                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, magnam. Et, a dignissimos? Adipisci illo voluptas, atque sit minus culpa?</p>

                </div>
                <div class="slide">
                    <i class="fas fa-quote-right"></i>
                    <div class="user">
                        <img src="images/review3.jpg" alt="">
                        <div class="userinfo">
                            <h3>john deo</h3>
                        </div>

                    </div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id, magnam. Et, a dignissimos? Adipisci illo voluptas, atque sit minus culpa?</p>

                </div>


            </div>
     

        </div>
    </section>
    
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>locations</h3>
                <a href="">indore</a>
                <a href="">bhopal</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="">home</a>
                <a href="">dishes</a>
                <a href="">about</a>
                <a href="">menu</a>
                <a href="">review</a>
            </div>
            <div class="box">
                <h3>contacts</h3>
                <a href="">9165362065</a>
                <a href="mailto:sanidhyapatidar14@gmail.com" class="mail">sanidhyapatidar14@gmail.com</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.instagram.com/">instagram</a>
                <a href="https://web.whatsapp.com/">whatsapp</a>
            </div>

        </div>
        <div class="credit">copyright @ 2023 by <i class="fas fa-utensils"></i><span></span> foody</span></div>
    </section>

    <!-- review section ends -->





    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>