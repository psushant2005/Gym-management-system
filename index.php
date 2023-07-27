<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fitness website</title>
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    <!-- fontawesome cdn file link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script type="module" src="script.js"></script>
</head>

<body>
    <!-- header section start -->

    <header class="header">
        <!-- The <header> tag in HTML is used to define the header for a document or a section as it contains the information related to the title and heading of the related content. -->
        <a href="#" class="logo">POWER<span>ZONE</span></a>
        <nav class="navbar">
            <a href="#homepage">home</a>
            <a href="#footerpage">about</a>
            <a href="#schedulepage">services</a>
            <a href="#blogspage">news</a>
            <a href="#footerpage">contact</a>
        </nav>
        <div class="icons">
            <a href="payment.php" class="btn">Become a member</a>
            <div id="menu-btn" class="fas fa-bars"></div>

        </div>





    </header>

    <!-- header section end -->
    <!-- home section start -->
    <section class="home" id="homepage">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box"
                    style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),url('images/home-3.jpeg');">
                    <div class="content">
                        <h3>join today</h3>
                        <p>If you're ready to commit to a healthy lifestyle and find room in your budget, signing up for
                            a gym membership may bring great value. It can even save you money in the long run despite
                            the short-term sting of an additional monthly bill.</p>
                        <div class="button">
                            <a href="register.php" class="btn btn-1">get started</a>
                            <a href="poster.php" class="btn">download</a>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide box"
                    style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),url('images/home-4.jpeg');">
                    <div class="content">
                        <h3>Health is wealth</h3>
                        <p>Health is the biggest wealth for a human being in his/her entire lifetime. One can survive
                            without excess money but can't survive without good health. Health is something that we
                            can't buy with money but we can take care of it and we can cure it when needed with the help
                            of the money.</p>
                        <div class="button">
                            <a href="register.php" class="btn btn-1">get started</a>
                            <a href="poster.php" class="btn">download</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- script.js link -->

    <script type="module" src="script.js"></script>


    <!-- home section end -->
    <!-- feature section start -->
    <section class="feature">
        <h1 class="heading">feature <span>Classses</span></h1>
        <div class="swiper feature-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/Feature-classes.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price" href="payment.php">$30.2</div>
                        <h3>Yoga</h3>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/Feature-classes-2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">$34.56</div>
                        <h3>Barre</h3>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/Feature-classes-3.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">$33.44</div>
                        <h3>Boot Camp</h3>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/Feature-classes-4.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">$37.64</div>
                        <h3>Pilates</h3>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/Feature-classes-5.jpeg" alt="">
                    </div>
                    <div class="content">
                        <div class="price">$31.56</div>
                        <h3>Spin</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- feature section end -->

    <!-- schedule section start -->
    <section class="schedule" id="schedulepage">
        <h1 class="heading"><span>our</span> schedule</h1>
        <div class="box-container">
            <div class="box">
                <div class="content">
                    <h3>Yoga</h3>
                    <p>yoga is a good way to build muscle tone and strength. By regularly doing yoga, you can build
                        muscle, improve your flexibility, improve your posture, and help you maintain a healthy weight.
                    </p>

                </div>
                <div class="icons">
                    <span><i class="far fa-clock"></i>5:30 am</span>
                    <span><i class="far fa-calendar-alt"></i>oct 25,2022</span>

                </div>
                <a href="payment.php" class="btn">join form </a>
            </div>
            <div class="box">
                <img src="images/pic-5.jpeg" alt="">
            </div>


            <div class="box">
                <div class="content">
                    <h3>Barre</h3>
                    <p>Barre classes combine disciplines with ballet, Pilates, and yoga. They incorporate a barre, which
                        you typically see in dance studios, for you to use as a prop while you focus on isometric
                        strength training.</p>

                </div>
                <div class="icons">
                    <span><i class="far fa-clock"></i>5:30 am</span>
                    <span><i class="far fa-calendar-alt"></i>oct 25,2022</span>

                </div>
                <a href="payment.php" class="btn">join form </a>
            </div>
            <div class="box">
                <img src="images/pic-6.jpeg" alt="">
            </div>



            <div class="box">
                <img src="images/pic-7.jpeg" alt="">
            </div>
            <div class="box">
                <div class="content">
                    <h3>Boot Camp</h3>
                    <p>Boot camp workouts can vary significantly from one location to the next. But overall, they
                        consist of a combination of calisthenics, plyometrics, and aerobics.</p>

                </div>
                <div class="icons">
                    <span><i class="far fa-clock"></i>5:30 am</span>
                    <span><i class="far fa-calendar-alt"></i>oct 25,2022</span>

                </div>
                <a href="payment.php" class="btn">join form </a>
            </div>



            <div class="box">
                <img src="images/pic-8.jpeg" alt="">
            </div>
            <div class="box">
                <div class="content">
                    <h3>Pilates</h3>
                    <p>Pilates consists of about 500 separate exercises designed to strengthen and lengthen all major
                        muscle groups. It's similar to yoga, but pilates is focused on relaxing tense muscles.
                        Meanwhile, yoga focuses on improving the overall flexibility of your body.</p>

                </div>
                <div class="icons">
                    <span><i class="far fa-clock"></i>5:30 am</span>
                    <span><i class="far fa-calendar-alt"></i>oct 25,2022</span>

                </div>
                <a href="payment.php" class="btn">join form </a>
            </div>

        </div>
    </section>
    <!-- schedule section end -->
    <!-- trainer section start -->
    <section class="trainer">
        <h1 class="heading">Expert <span>Trainer</span></h1>
        <div class="swiper trainer-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/trainer-1.jpeg" alt="">
                    </div>
                    <div class="name">
                        <h1>jhon smith</h1>
                        <p>gym trainer</p>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/trainer-4.jpeg" alt="">
                    </div>
                    <div class="name">
                        <h1>Chiri Kitsu</h1>
                        <p>gym trainer</p>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/trainer-2.jpeg" alt="">
                    </div>
                    <div class="name">
                        <h1>Akari Akaza</h1>
                        <p>gym trainer</p>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/trainer.jpeg" alt="">
                    </div>
                    <div class="name">
                        <h1>Alex petter</h1>
                        <p>gym trainer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- trainer section end -->
    <!-- testimonial section start -->
    <section class="testimonial">
        <h1 class="heading">testimonial</h1>
        <div class="box-container">

            <div class="box">
                <div class="images">
                    <img src="images/t-2.jpeg" alt="">
                </div>
                <div class="name">
                    <h3>Mike rechardson</h3>
                    <p>CEO. <span>xyz company</span></p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque quasi consequuntur veritatis
                    facilis quas possimus vitae rerum, sunt libero, hic dignissimos dolores, recusandae placeat corrupti
                    consectetur voluptatum officia tempore fuga iste! Natus deserunt labore sit voluptate numquam unde
                    commodi.</p>

            </div>
            <div class="box">
                <div class="images">
                    <img src="images/t-3.jpeg" alt="">
                </div>
                <div class="name">
                    <h3>Eva Green</h3>
                    <p>CEO. <span>xyz company</span></p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque quasi consequuntur veritatis
                    facilis quas possimus vitae rerum, sunt libero, hic dignissimos dolores, recusandae placeat corrupti
                    consectetur voluptatum officia tempore fuga iste! Natus deserunt labore sit voluptate numquam unde
                    commodi.</p>

            </div>
            <div class="box">
                <div class="images">
                    <img src="images/t-4.jpeg" alt="">
                </div>
                <div class="name">
                    <h3>Alexa Davalos</h3>
                    <p>CEO. <span>xyz company</span></p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque quasi consequuntur veritatis
                    facilis quas possimus vitae rerum, sunt libero, hic dignissimos dolores, recusandae placeat corrupti
                    consectetur voluptatum officia tempore fuga iste! Natus deserunt labore sit voluptate numquam unde
                    commodi.</p>

            </div>
        </div>
    </section>




    <!-- testimonial section end -->
    <!-- blog section start -->

    <section class="blogs" id="blogspage">
        <h1 class="heading">our <span>blogs</span></h1>
        <div class="swiper blogs-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/blog-5.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>fitness class name here</h3>
                        <span><i class="far fa-calendar-alt"></i>oct 25,2022</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, rerum.</p>

                    </div>
                    <div class="button">
                        <a href="https://app.qoruz.com/profile/rohitkhatrifitness?_gl=1*yi9jzf*_ga*MTYwNzkyNjExNC4xNjY3ODM2NzM2*_ga_MP2H7Y27G5*MTY2NzgzNjczNi4xLjAuMTY2NzgzNjczNi4wLjAuMA..&_ga=2.121815499.13056511.1667836737-1607926114.1667836736" class="btn">Read more</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/blog-2.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>fitness class name here</h3>
                        <span><i class="far fa-calendar-alt"></i>oct 25,2022</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, rerum.</p>

                    </div>
                    <div class="button">
                        <a href="https://www.glofox.com/blog/10-membership-retention-best-practices-you-need-to-know/" class="btn">Read more</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/blogc-3.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>fitness class name here</h3>
                        <span><i class="far fa-calendar-alt"></i>oct 25,2022</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, rerum.</p>

                    </div>
                    <div class="button">
                        <a href="https://www.glofox.com/blog/the-new-normal-for-boutique-fitness/" class="btn">Read more</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="images">
                        <img src="images/blogc-4.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>fitness class name here</h3>
                        <span><i class="far fa-calendar-alt"></i>oct 25,2022</span>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, rerum.</p>

                    </div>
                    <div class="button">
                        <a href="https://www.glofox.com/blog/a-quick-guide-to-great-gym-customer-service/" class="btn">Read more</a>
                    </div>
                </div>

            </div>


        </div>
    </section>




    <!-- blog section end -->
    <!-- footer section start -->
    <section class="footer" id="footerpage">

        <div class="box-container">

            <div class="box">
                <h1>about</h1>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="icon">
                    <a href="https://m.facebook.com/Bumstead1995/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/c_bumstead?t=pxWVJHXduV-8WNglwkmAkg&s=09"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/cbum/?igshid=YmMyMTA2M2Y%3D"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.linkedin.com/in/chakchiuma/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="box">
                <h1>contact info</h1>
                <div class="icons">
                    <a href="#"><i class="fas fa-map-marker-alt"> </i> street Name, city name here,united state</a>
                    <a href="#"><i class="fas fa-phone-alt"></i>+1 243 4942 250</a>
                    <a href="#"><i class="fas fa-envelope"></i>example@gmail.com</a>
                </div>
            </div>
            <div class="box">
                <h1>quick link</h1>
                <div class="icons">
                    
                    <a href="#homepage">home</a>
                    <a href="#footerpage">about</a>
                    <a href="#schedulepage">services</a>
                    <a href="#blogspage">news</a>
                    <a href="#footerpage">contact</a>
                </div>
            </div>
        </div>
        <div class="credit">created by <span>By Enterpreter</span></div>
    </section>
    <!-- footer section end -->

</body>

</html>