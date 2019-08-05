<?php
    ini_set("session.save_path", "/var/lib/php/sessions");
    session_start();
    header('X-Frame-Options: DENY');
    header("X-XSS-Protection: 1; mode=block");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/global.css" />
        <link rel="stylesheet" type="text/css" href="./css/index.css" />
        <link rel="stylesheet" type="text/css" href="./css/navbar.css" />
        <link rel="stylesheet" type="text/css" href="./css/footer.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script src="https://kit.fontawesome.com/55ce7a4948.js"></script>

        <title>Paul Marley Smith Roofing</title>
        <meta name="description" content="Roofing services and supplies based in the North East." />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
    </head>

    <body>
        <div class="topBar_container">
            <div class="topBar">
                <p><i class="fas fa-phone-alt" style="padding-right: 5px; margin-left: 15px;"></i> 01670 828688</p>
                <p><i class="far fa-envelope" style="padding-right: 5px; margin-left: 15px;"></i> info@paulsmithroofing.co.uk</p>
                <p><i class="fas fa-map-marker" style="margin-right: 5px;"></i> Errington House, Blyth, NE24 4TW</p>
            </div>
        </div>
        
        <div class="navbar_container">
            <div class="navbar">
                <a class="navbar_logo" href="/" rel="noopener noreferrer"><img src="images/logo.png" alt="Logo" /></a>
                <div style="display: flex;">
                    <a href="./" rel="noopener noreferrer">Home</a>
                    <a href="./supplies" rel="noopener noreferrer">Supplies</a>
                    <a href="./gallery" rel="noopener noreferrer">Gallery</a>
                </div>
            </div>
        </div>
        
        <div class="jumbotron_container">
            <div class="navbar">
                <a class="navbar_logo" href="/" rel="noopener noreferrer"><img src="images/logo_blue.png"
                        alt="Logo" /></a>
                <div style="display: flex;">
                    <a href="./" rel="noopener noreferrer">Home</a>
                    <a href="./supplies" rel="noopener noreferrer">Supplies</a>
                    <a href="./gallery" rel="noopener noreferrer">Gallery</a>
                </div>
            </div>
        
            <!-- <p>Contact Us</p> -->
        </div>
        
        <div class="content_container">
            <div class="content">
                <div class="whatWeDo" data-aos="fade-up" data-aos-once="true">
                    <h1>Welcome to Marley Paul Smith Roofing Services Limited. We are specialists in carrying out roofing works to domestic and commercial properties
                    throughout the North East of England.</h1>
                </div>
            </div>
        
            <div class="banner_logo">
                <div class="triangle">
                    <p>WHAT WE OFFER</p>
                </div>
                <div class="line"></div>
                <div class="chimney">
                    <div class="chimney_square"></div>
                    <div class="chimney_triangle"></div>
                </div>
            </div>
        
            <div class="banner_container">
                <div class="banner">
                    <div class="banner_item">
                        <img src="./images/roofing-icon.svg" alt="Roof">
                        <p>Roofing services</p>
                    </div>

                    <div class="banner_item">
                        <img src="./images/bricks.svg" alt="Supplies">
                        <p>Roofing Supplies</p>
                    </div>
        
                    <div class="banner_item">
                        <h2>30+</h2>
                        <p>Years of experience</p>
                    </div>
        
                    <div class="banner_item">
                        <h2>£</h2>
                        <p>Competitive prices</p>
                    </div>                    
                </div>
            </div>
        
            <div class="content">
                <div class="roofing_photos">
                    <img data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-once="true" src="./images/roofing-01.jpg"
                        alt="">
                    <img data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="100" data-aos-once="true"
                        src="./images/roofing-02.jpg" alt="">
                    <img data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="200" data-aos-once="true"
                        src="./images/roofing-03.jpg" alt="">
                </div>
        
                <p class="roofing_para" data-aos="fade-up" data-aos-once="true">
                    We offer our expertise in various roofing elements including slate and tile roofing, felt roofing, GRP roofing,
                    leadwork, single ply roofing, chimney work , roofline, gutters, pointing work and joinery work.
                    With more than 30 years experience we provide a range of services from minor repairs to full strip and recovers and new
                    builds. All of our work is guaranteed.
                </p>
        
                <div class="trading_counter" data-aos="fade-up" data-aos-once="true">
                    <h2 class="trading_header">Trade Counter</h2>
                </div>

                <p class="supplies_para" data-aos="fade-up" data-aos-once="true"> 
                    At our premises in Blyth we have a well stocked yard and warehouse providing a wide range of roofing products
                    for sale to trade and the general public. We have a vast selection of reclaimed slates and tiles available - we also
                    buy reclaimed materials.
                </p>
        
                <div class="trading_photos">
                    <img src="./images/supplies-01.jpg" alt="Photo of a yard with supplies" data-aos="fade-up"
                        data-aos-once="true">
                    <img src="./images/supplies-02.jpg" alt="Photo of trading counter" data-aos="fade-up" data-aos-once="true">
                    <img src="./images/supplies-03.jpg" alt="Photo of supplies" data-aos="fade-up" data-aos-once="true">
                    <img src="./images/supplies-04.jpg" alt="Photo of a yard with supplies" data-aos="fade-up"
                        data-aos-once="true">
                    <img src="./images/supplies-05.jpg" alt="Photo of supplies" data-aos="fade-up" data-aos-once="true">
                    <img src="./images/supplies-06.jpg" alt="Photo of supplies" data-aos="fade-up" data-aos-once="true">
                    <img src="./images/supplies-07.jpg" alt="Photo of supplies" data-aos="fade-up" data-aos-once="true">
                    <img src="./images/supplies-08.jpg" alt="Photo of supplies" data-aos="fade-up" data-aos-once="true">
                    <img src="./images/supplies-09.jpg" alt="Photo of supplies" data-aos="fade-up" data-aos-once="true">
                </div>
        
                <a class="trading_button" href="./Supplies" rel="noopener noreferrer" data-aos="fade-up"
                    data-aos-once="true">View Prices</a>
        
                <div id="testimonials" data-aos="fade-up" data-aos-once="true">
                    <div class="testimonial showing" style="text-align: center;">
                        <h2>"Excellent service, reasonably priced"</h2>
                        <p>Mary Taylor, 23rd November 2018</p>
                    </div>
                </div>
        
                <form action="sendMessage.php" method="POST" class="form" data-aos="fade-up" data-aos-once="true" id="form">
                    <h2>Get in contact for a free no obligation quotation</h2>
        
                    <label for="name">Name</label>
                    <input type="text" name="name" required>
        
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
        
                    <label for="message">Your Message</label>
                    <textarea type="text" name="message" rows="8" required></textarea>

                    <div style="display: flex; align-items: center; font-size: 0.7rem; margin-top: 10px;">
                        <input type="checkbox" name="checkbox" required style="margin-right: 10px;">
                        <label for="checkbox" style="margin: 0;">
                            Allow us to store your Name/Email and agree to our <a href="./privacy-policy.php">Privacy Policy</a>
                            and <a href="./terms-and-conditions.php">Terms & Conditions</a>
                        </label>
                    </div>
        
                    <button type="submit" name="submit">Send Message</button>

                    <?php
                        if(isset($_SESSION["contactError"])) {
                            if($_SESSION["contactError"] == true) {
                                echo "<p class='contact_error'>There was a problem sending the email, please try again. If the problem persists you can email directly to <span>info@paulsmithroofing.co.uk</span>. Sorry for the inconvenience.</p>";
                                unset($_SESSION['contactError']);
                            }
                        }
                    ?>
                </form>

                <div class="business_hours" data-aos="fade-up" data-aos-once="true">
                    <h2>Business Hours</h2>
                    <ul>
                        <li>Monday: 07:00 - 17:00</li>
                        <li>Tuesday: 07:00 - 17:00</li>
                        <li>Wednesday: 07:00 - 17:00</li>
                        <li>Thursday: 07:00 - 17:00</li>
                        <li>Friday: 07:00 - 16:00</li>
                        <li>Saturday: 07:00 - 10:30</li>
                    </ul>
                </div>

                <iframe
                    data-aos="fade-up" data-aos-once="true" 
                    frameborder="0" 
                    scrolling="no" 
                    src="https://www.openstreetmap.org/export/embed.php?bbox=-1.5657395124435427%2C55.12489178076784%2C-1.5567809343338015%2C55.12781789488481&amp;layer=mapnik&amp;marker=55.126354864629306%2C-1.5612602233886719">
                </iframe>
                <p id="find_us" data-aos="fade-up" data-aos-once="true">Find us at Unit 1, Errington House, Errington St, Blyth, NE24 4TW</p>
            </div>
        </div>        

        <div class="footer_container">
            <footer>
                <a href="./"><img src="images/logo.png" alt="Logo" /></a>
                <div class="footer_links">                    
                    <div class="footer_links_text">
                        <a rel="noopener noreferrer" href="./">Home</a>
                        <a rel="noopener noreferrer" href="./supplies">Supplies</a>
                        <a rel="noopener noreferrer" href="./gallery">Gallery</a>
                        <a rel="noopener noreferrer" href="./privacy-policy">Privacy Policy</a>
                        <a rel="noopener noreferrer" href="./terms-and-conditions">Terms & Conditions</a>
                    </div>
                    <a class="facebook_a" href="https://www.facebook.com/marleypaulsmithroofing/?epa=SEARCH_BOX" rel="noopener noreferrer" target="_blank">
                        <img class="facebook_logo" src="images/f_logo_RGB-White_250.png" alt="Facebook Logo">
                    </a>
                </div>                
            </footer>
        </div>

        <script src="./index.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
</html>