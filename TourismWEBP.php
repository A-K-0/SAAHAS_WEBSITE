<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ADVENTURE</title>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="css/responsive.css" />
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="img/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="img/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="img/favicon-16x16.png"
        />
        <link rel="manifest" href="/site.webmanifest" />
    </head>
    <body
        onload='if (window.location.href.substr(window.location.href.length - 6) == "#about") { introAboutLogoTransition(); }'
    >
    
        <!--navbar-->
        <nav class="navbar glass" style="height: 70px">
            <span
                ><a href="#home" style="display: flex; align-items: center"
                    ><img
                        class="img2"
                        src="./img/mountain.png"
                        width="40"
                        style="margin: -25px -10px -25px -20px"
                    />
                    <h1 class="logo">&nbsp;ADVENTURE</h1></a
                ></span
            >
            <ul class="nav-links">
                <li>
                    <a href="#home" id="pri" class="active cir_border">Home</a>
                </li>
                <li><a href="#events" id="sec" class="cir_border">Events</a></li>
                <li>
                    <a href="#explore" id="tri" class="cir_border">Explore</a>
                </li>
                <li>
                    <a href="#tours" id="quad" class="cir_border">Tours</a>
                </li>
                <li><a href="#about" id="quint" class="cir_border">About</a></li>
                <li>
                    <a href="#contact" id="hept" class="cir_border">Contact</a>
                </li>
                <li>
                    <div>
                        <input
                            type="checkbox"
                            class="checkbox dark"
                            id="checkbox"
                        />
                        <label for="checkbox" class="label">
                            <i class="fa fa-moon-o"></i>
                            <i class="fa fa-sun-o"></i>
                            <div class="ball"></div>
                        </label>
                    </div>
                </li>
            </ul>
            <img src="./img/menu-btn.png" alt="" class="menu-btn" />
        </nav>
        <!--navbar-->

        <header id="home">
            <div class="header-content">
                <h2 id="quote">Explore the colourful World</h2>
                <div class="line"></div>
                <h1>A WONDERFUL GIFT</h1>
                <a
                    href="#about"
                    class="ctn"
                    onclick='removeall(); $("#quad").css("border", "2px solid whitesmoke"); $("#quad").css("border-radius", "20px");'
                    >Learn more</a
                >
            </div>
        </header>

        <!--Events-->
        <section class="events" id="events">
            <div class="container">
                <div class="title">
                    <h1 class="dark">Upcoming Events</h1>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <article class="card col">
                        <img class="card-img" src="./img/img1.jfif" />
                        <h4 class="dark">Everest camp trek</h4>
                        <p class="font-color">
                            Everest base camp trek is without a doubt, one of
                            the most renowned travel destinations in the world.
                        </p>
                        <a href="#" class="ctn">All Details</a>
                    </article>
                    <article class="card col">
                        <img src="./img/img2.jfif" />
                        <h4 class="dark">Walking holidays</h4>
                        <p class="font-color">
                            Join small guided group walks, enjoy a challenging
                            trek, or a luxury private guided walk which can be
                            made especially for you.
                        </p>
                        <a href="#" class="ctn">All Details</a>
                    </article>
                    <article class="card col">
                        <img src="./img/img2.jfif" />
                        <h4 class="dark">Andaman Beaches</h4>
                        <p class="font-color">
                            Diving in Andaman Beaches is exceptional. The costal
                            belt surroundings is one of the richest coral reef
                            ecosystems in the world.
                        </p>
                        <a href="#" class="ctn">All Details</a>
                    </article>
                </div>
            </div>
        </section>
        <!--Events-->

        <!--Explore-->
        <section class="explore" id="explore">
            <div class="explore-content">
                <h1>EXPLORE THE WORLD</h1>
                <div class="line"></div>
                <p>
                    “Travel makes one modest. You see what a tiny place you
                    occupy in the world.”– Gustav Flaubert <br />Exploring will
                    make you want to pack your bag, book that ticket and jet
                    away.
                </p>
                <a href="#" class="ctn">Explore more</a>
            </div>
        </section>
        <!--Explore-->

        <!--tours-->
        <section class="tours" id="tours">
            <div class="container row">
                <div class="col content-col">
                    <h1 class="font-color">UPCOMING TOURS & DESTINATION</h1>
                    <div class="line"></div>
                    <p>
                        Tue 12th Dec 2023 : Arrive in Guwahati, Assam
                         <br />
                        Thurs 13th Dec 2023 :Explore Kamakhya Temple and Umananda Island <br />
                        Tues 14th Dec 2023 : Travel to Shillong, Meghalaya
                        <br />
                        and many more ......
                    </p>
                    <a href="#" class="ctn">Learn more</a>
                </div>
                <div class="image-col">
                    <div class="image-gallery">
                        <img src="./img/img3.png" alt="" />
                        <img src="./img/img4.png" alt="" />
                        <img src="./img/img5.png" alt="" />
                        <img src="./img/img6.png" alt="" />
                    </div>
                </div>
            </div>
            <br /><br /><br /><br />
        </section>
        <!--tours-->

        <!-- About -->
        <section id="about">
            <div class="title">
                <h1 class="font-color">About Us</h1>
                <div class="line"></div>
            </div>
            <br />
            <div id="about_us">
                <div class="boxx">
                    <div class="containerx">
                        <input type="radio" name="slider" id="item-1" checked />
                        <input type="radio" name="slider" id="item-2" />
                        <input type="radio" name="slider" id="item-3" />
                        <div class="cards">
                            <label class="cardt" for="item-1" id="col-img-1">
                                <img src="./img/carousel-img1.jpg" />
                            </label>
                            <label class="cardt" for="item-2" id="col-img-2">
                                <img src="./img/carousel-img2.jpg" />
                            </label>
                            <label class="cardt" for="item-3" id="col-img-3">
                                <img src="./img/carousel-img3.jpg" />
                            </label>
                            
                        </div>
                    </div>
                    <span id="about-quad"
                        ><a href="#home"
                            ><center>
                                <h1
                                    style="
                                        font-family: var(--ff-montserrat);
                                        color: white;
                                    "
                                >
                                    Find that
                                </h1>
                                <br />
                                <img
                                    class="img2"
                                    src="./img/mountain_dark.jpg"
                                    width="200"
                                    style="border-radius: 12%"
                                />
                                <br />
                                <h1 class="logo" style="font-size: 50px">
                                    ADVENTURE
                                </h1>
                            </center>
                        </a>
                    </span>
                </div>
            </div>
        </section>
        <!-- About -->

        

        <!-- contact -->
        <section id="contact">
            <div class="title">
                <h1 class="font-color">Contact Us</h1>
                <div class="line"></div>
            </div>
            <div class="contact_us">
                <form id="myForm" class="cform" action="connects.php" method="post">
                    <div class="crow-message">

                        <h1 class="color">Send us a message</h1>
                        <div></div>
                    </div>
                    <div class="crow-in">
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your name"
                        />
                        <input
                            type="text"
                            id="email"
                            name="email"
                            placeholder="Your Email id"
                        />
                    </div>
                    <div class="crow">
                        <div class="ccol-left">
                            <select name="city" id="city">
                                <option value="Delhi">Delhi</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Bengaluru">Bengaluru</option>
                                <option value="Chennai">Chennai</option>
                            </select>
                        </div>
                    </div>
                    <div class="crow">
                        <div class="ccol-left">
                            <textarea
                                type="text"
                                id="remarks"
                                name="remarks"
                                placeholder="Your Remarks....."
                                style="height: 150px"
                            ></textarea>
                        </div>
                    </div>
                    <input class="crow-s"  type="submit" name= "submit" onclick="submit()" value="submit"> 
                </form>
                <div class="cbox">
                    <div>
                        <p class="cbox-message">
                            Prefer some other way ?<br />Reach us by using the
                            details given below
                        </p>
                        <div class="cbox-line"></div>
                    </div>
                    <div class="c_boxx">
                        <a href="mailto:abc@gmail.com"
                            ><i class="fa fa-envelope"></i>
                            Mail: SAHAS@adventure.com
                        </a>
                    </div>
                    <div class="c_boxx">
                        <a href="tel:+91-12345-67890"
                            ><i class="fa fa-phone"></i>
                            Phone: (+91) 12345-67890
                        </a>
                    </div>
                    <div class="c_boxx">
                        <a href="#"
                            ><i class="fa fa-map-marker"></i>
                            Location: Gurugram,NCR,India.
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact  -->
        <!-- up scroll -->
        <i class="arrow"  onclick="topFunction()" id="upbtn"></i>
        <!-- end -->
        <!--footer-->

        <script>
            const menuBtn = document.querySelector(".menu-btn");
            const navlinks = document.querySelector(".nav-links");

            menuBtn.addEventListener("click", () => {
                navlinks.classList.toggle("mobile-menu");
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="script.js"></script>
    </body>
</html>