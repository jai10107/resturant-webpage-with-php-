<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restraunt</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body>


    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#testimonials">Testimonial</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <h1 class="logo">JBM</h1>
        </div>
    </nav>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Eat Food At JBM</h1>
            <p>Let our food feed your emotions </p>
            <a href="#food-menu" class="btn btn-primary">Menu</a>
        </div>
    </section>

    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We've beem making healthy food last for 10 years</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse ab eos omnis, nobis dignissimos
                    perferendis et officia architecto, fugiat possimus eaque qui ullam excepturi suscipit aliquid optio,
                    maiores praesentium soluta alias asperiores saepe commodi
                    consequatur? Perferendis est placeat facere aspernatur!
                </p>
            </div>
            <div class="about-img">
                <img src="./Images/logo-removebg-preview.png" alt="food" />
            </div>
        </div>

    </section>
    <section id="food">
        <h2>Types of food</h2>
        <div class="food-container container">
            <div class="food-type fruite">
                <div class="img-container">
                    <img src="https://i.postimg.cc/yxThVPXk/food1.jpg" alt="error" />
                    <div class="img-content">
                        <h3>fruite</h3>
                        <a href="https://en.wikipedia.org/wiki/Fruit" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="food-type vegetable">
                <div class="img-container">
                    <img src="https://i.postimg.cc/Nffm6Rkk/food2.jpg" alt="error" />
                    <div class="img-content">
                        <h3>vegetable</h3>
                        <a href="https://en.wikipedia.org/wiki/Vegetable" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="food-type grin">
                <div class="img-container">
                    <img src="https://i.postimg.cc/76ZwsPsd/food3.jpg" alt="error" />
                    <div class="img-content">
                        <h3>grin</h3>
                        <a href="https://en.wikipedia.org/wiki/Grain" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="food-menu">
        <h2 class="food-menu-heading">Food Menu</h2>
        <div class="food-menu-container container">
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.licious.in/blog/wp-content/uploads/2022/02/shutterstock_1339636625-600x600.jpg"
                        alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Shawarmaaaa</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quae.
                    </p>
                    <p class="food-price">Price: &#8377; 80/-</p>
                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://static.toiimg.com/thumb/resizemode-4,width-1200,height-900,msid-87930581/87930581.jpg"
                        alt="error" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Pizza</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quae.
                    </p>
                    <p class="food-price">Price: &#8377; 249/-</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://static.toiimg.com/thumb/83565509.cms?width=1200&height=900" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Burger</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quae.
                    </p>
                    <p class="food-price">Price: &#8377; 199/-</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.licious.in/blog/wp-content/uploads/2020/12/Grilled-Chicken-Sandwich-600x600.jpg"
                        alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Sandwich</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quae.
                    </p>
                    <p class="food-price">Price: &#8377; 149/-</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://image.pixstory.com/optimized/Pixstory-image-165766989421663.jpeg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">French Fries</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quae.
                    </p>
                    <p class="food-price">Price: &#8377; 99/-</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://www.licious.in/blog/wp-content/uploads/2020/12/Egg-Noodles-min.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Noodles</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, quae.
                    </p>
                    <p class="food-price">Price: &#8377; 129/-</p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <h2 class="testimonial-title">What Our Customers Say</h2>
        <div class="testimonial-container container">
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="./Images/B.Jayveer.jpg" alt="" />
                        <p class="customer-name">Jayveer</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit voluptas cupiditate aspernatur
                    odit doloribus non.
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="./Images/bhar.jpg" alt="" />
                        <p class="customer-name">Bhargav</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit voluptas cupiditate aspernatur
                    odit doloribus non.
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="./Images/JUUG21LBTECH21709.jpg" alt="" />
                        <p class="customer-name">Mugundhan</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit voluptas cupiditate aspernatur
                    odit doloribus non.
                </p>

            </div>


        </div>
    </section>
    <section id="UserData">
        <div class="Data">
            <div class="user_title">
                <h3>Dont worry your data is safe with JBM</h3>
            </div>


            <?php
            $name = $_POST["name"];
            $email = $_POST["mail"];
            $phone = $_POST["phone"];
        
            echo "<p> <h1> Your name  : </h1>   $name </p> ";
            echo "<p> <h1> Your Email : </h1>   $email </p> ";
            echo "<p> <h1> Your Phone : </h1>   $phone </p> ";
            ?>


        </div>
    </section>
    <section id=" contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="https://i.postimg.cc/1XvYM67V/restraunt2.jpg" alt="" />
            </div>

            <div class="form-container">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Your Name" />
                <input type="email" placeholder="E-Mail" />
                <textarea cols="30" rows="6" placeholder="Type Your Message"></textarea>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
    </section>

    <footer class="footer-distributed">

        <div class="footer-right">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

        <div class="footer-left">

            <p class="footer-links">
                <a class="link-1" href="#home">Home</a>

                <a href="#">Blog</a>

                <a href="#testimonials">Testimonals</a>

                <a href="#contact">Contact</a>
            </p>

            <p>JBM &copy; 2022 All rights Reserved</p>
        </div>

    </footer>




</html>

</body>

</html>

</html>
