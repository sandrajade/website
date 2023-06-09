<?php
$conn = mysqli_connect
('localhost', 'root','', 'contact-form')
or die ('connection failed');

if(isset($_post['submit'])) {
$name = mysqli_real_escape_string($conn, $_post['name']);
$email = mysqli_real_escape_string($conn, $_post['email']);
$number = $_post['number'];
$date$ = _post['date'];

$insert = mysqli_query($conn, "INSERT INTO 'contact-form'(name,email,number,date) VALUES ('$name','$email','$number','$date'));
or die ('query failed');
}
if ($insert) {
$message[]= 'appointement made successfully';
}else{
   $message[]= 'appointement failed'; 
    }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="./script.js" defer></script>
    <title>Complete responsive hospital exercice</title>
</head>

<body>

    //  header section starts 

    <header class="header">
        <a href="#" class="logo"> <i class="fas fas fa-heartbeat"></i> <strong>WC</strong>medical</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#service">Service</a>
            <a href="#doctor">Doctor</a>
            <a href="#appointment">Appointment</a>
            <a href="#review">Review</a>
            <a href="#blogs">Blogs</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>

    </header>
    // <!-- header section end -->


    <section class="home" id="home">
        <div class="">
            <img src="./images/home-img.svg" alt="home" width="100%">
        </div>
        <div class="content">
            <h3>We take care of your healty life</h3>
            <p>A person who has good physical health is likely to have bodily functions and processes working at their
            <p>
                <a href="#appointment" class="btn">appointment us <span class="fa fa-chevron-right"></span> </a>
        </div>

    </section>

    // home section starts //

    //icon section starts //

    <section class="icons-container">
        <div class="icons">
            <i class="fa fa-user-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1030+</h3>
            <p>satisfied patients</p>
        </div>

        <div class="icons">
            <i class="fa fas fa-procedures"></i>
            <h3>490+</h3>
            <p>bed facility</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>70+</h3>
            <p>available hospitals</p>
        </div>

        <div class="icons">
            <i class="fa fa-user-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>

    </section>

    // <!-- icon section ends -->

    // <!-- about section starts -->

    <section class="about" id="about">
        <h2 class="heading"> <span>About us</span></h2>
        <div class="row">
            <div class="image">
                <img src="./images/about-img.svg" alt="">

            </div>
            <div class="content">
                <h3>Take the world's best quality treatment</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id iusto natus dolores nam doloribus rem.
                </p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id iusto natus dolores nam doloribus</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>

            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- service section starts -->

    <section class="services" id="services">
        <h2 class="heading">Our <span>Services</span> </h2>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>Free checkups</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, distinctio.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 Ambulance</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, distinctio.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>Expert doctors</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, distinctio.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, distinctio.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>Bed facility</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, distinctio.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fas fa-heartbeat"></i>
                <h3>Total care</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, distinctio.</p>
                <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

    </section>

    //  services section ends //

    //  doctors section start //

    <section class="doctors" id="doctors">
        <h2 class="heading"> Our <span>Doctors</span></h2>
        <div class="box-container">
            <div class="box">
                <img src="./images/medecin.jpg" alt="doctor-woman">
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/medecin2.jpg" alt="doctor-woman">
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/medecin3.jpg" alt="doctor-man" >
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/medecin4.jpg" alt="doctor-woman">
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/medecin5.jpg" alt="doctor-man">
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/medecin6.jpg" alt="doctor-man">
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/doctor7.jpg" alt="doctor-woman">
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/doctor8.jpg" alt="doctor-man">
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="./images/doctor9.jpg" alt="doctor-man">
                <h3>Win coder</h3>
                <span>Expert doctor</span>
                <div class="share">
                    <a href="#" class="fab fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fab fa-instagram"></a>
                    <a href="#" class="fab fab fa-linkedin"></a>
                </div>
            </div>

        </div>
    </section>
    //  doctors section end

    // appointmening section start 

    <section class="appointment" id="appointment">
        <h2 class="heading"> <span>Appointment</span> now </h2>
        <div class="row">
            <div class="image">
                <img src="./images/appointment-img.svg" alt="">

            </div>
            <form action="<?php echo $_SERVEUR['PHP_SELF'];?>" method="post">
            <?php
            if(isset($message)) {
                foreach($message as $message){
                echo'<p class ="message">'.$message.'</p>';
}
}
            ?>
                <h3>Make appointment</h3>
                <input type="name" name="" placeholder="your name" class="box">
                <input type="number" name="number" placeholder="your number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="date" name="date" class="box">
                <input type="submit" name="submit" value="appointment now" class="btn">
            </form>
        </div>
    </section>

    // <!-- appointmening section ends -->

    // <!-- review section starts -->
    <section class="review" id="review">
        <h2 class="heading"> Client's <span>Review</span></h2>
        <div class="box-container">

            <div class="box">
                <img src="./images/avatar1.jpg" alt="coder-man">
                <h3>Win coder</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, ducimus aliquid.
                </p>
            </div>
            <div class="box">
                <img src="./images/avatar2.jpg" alt="coder-man">
                <h3>Win coder</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, ducimus aliquid.
                </p>
            </div>
            <div class="box">
                <img src="./images/avatar3.jpg" alt="coder-man">
                <h3>Win coder</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, ducimus aliquid.
                </p>

            </div>

        </div>
    </section>

    // <!-- review section ends -->

    // <!-- blogs section starts -->

    <section class="blogs" id="blogs">
        <h1 class="heading"> Our <span>Blogs</span> </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="./images/blog1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> By win coder </a>
                    </div>
                    <h3>blog title win coder goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, rerum.</p>
                    <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./images/blog2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> By win coder </a>
                    </div>
                    <h3>blog title win coder goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, rerum.</p>
                    <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./images/blog3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> By win coder </a>
                    </div>
                    <h3>blog title win coder goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, rerum.</p>
                    <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./images/blog4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> By win coder </a>
                    </div>
                    <h3>blog title win coder goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, rerum.</p>
                    <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./images/blog5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> By win coder </a>
                    </div>
                    <h3>blog title win coder goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, rerum.</p>
                    <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./images/blog6.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> 21 november, 2022 </a>
                        <a href="#"> <i class="fas fa-user"></i> By win coder </a>
                    </div>
                    <h3>blog title win coder goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, rerum.</p>
                    <a href="#" class="btn">Learn more <span class="fas fa-chevron-right"></span></a>
                </div>
            </div>

        </div>
    </section>

    // <!-- blogs section ends -->
    // <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> Home</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> About</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Services</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Doctors</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Appointements</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Review</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Blogs</a>
            </div>
            <div class="box">
                <h3>Our services</h3>
                <a href="#"> <i class="fas fa-chevron-right"></i> dental care</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> message therapy</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Cardiologie</a>
                <a href="#"> <i class="fas fa-chevron-right"></i> Diagnostics/a>
                    <a href="#"> <i class="fas fa-chevron-right"></i>Ambulance service</a>

            </div>
            <div class="box">
                <h3>Appointment info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +8801688238801</a>
                <a href="#"> <i class="fas fa-phone"></i> +8801782546978</a>
                <a href="#"> <i class="fas fa-envelope"></i> wincoder9@gmail.com</a>
                <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com</a>
                <a href="#"> <i class="fas fas fa-map-marker-alt"></i> Sylhet, Bangladesh</a>

            </div>
            <div class="box">
                <h3>Follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> faceappointment</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest</a>

            </div>
        </div>
        <div class="credit">Createb by <span>win coder</span> | all rights reserved </div>

    </section>
    

    // <!-- footer section ends -->

</body>

</html>