<?php
session_start();
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['error_message'] = 'Please complete all fields';
        header("Location: #contact-form");
        exit();
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error_message'] = "Invalid email";
            header("Location: #contact-form");
            exit();
        } else {

            // if (
            //     isset($_POST['name']) && $_POST['name'] != "" &&
            //     isset($_POST['email']) && $_POST['email'] != "" &&
            //     isset($_POST['message']) && $_POST['message'] != ""
            // ) {

            $to = "nour.test34@gmail.com";
            $subject = "Nouveau message de :" . $email;
            $message = "
            <p>Vous avez reçu un message de <strong>" . $email . "</strong></p>
            <p><strong>Nom :</strong>" . $name . "</p>
            <p><strong>Message :</strong>" . $message . "</p>";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <' . $email . '>' . "\r\n";


            $send = mail($to, $subject, $message, $headers);
            if ($send) {
                $_SESSION['success'] = 'Your message has been sent';

                header("Location: " . $_SERVER["REQUEST_URI"] . "#contact-form");
                exit();
            } else {
                $_SESSION['error_message'] = "Your message has not been sent";
                header("Location: #contact-form");
                exit();
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nour Ferraoun</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:ital@1&family=Poppins:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:ital@1&family=Poppins:wght@500;900&display=swap" rel="stylesheet">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>





</head>

<body>
    <div class="main">
        <section class="home" id="home">
            <div class="container">
                <nav>
                    <div class="navBar">
                        <div class="links">
                            <a class="link" href="#home">Home</a>
                            <a class="link" href="#about">About Me </a>
                            <a class="link" href="#portfolio">Portfolio</a>
                            <a class="contactMe" href="#contact">Contact Me</a>
                        </div>
                    </div>

                    <div class="burger">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                </nav>
                <div class="align">
                    <div class="intro">
                        <div class="name">
                            <h3>Hi, There!</h3>
                            <h1>I&nbsp; Am <span class="auto"> </span> </h1>
                            <p> I am a passionate web developer who specializes in creating dynamic <br> and responsive websites.</p>
                            <div class="social">
                                <a href="https://www.facebook.com/corail34" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="https://www.instagram.com/nourferraoun/" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/nour-ferraoun-aa7b68222/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="https://github.com/Nour3427" target="_blank"><i class="fa-brands fa-square-github"></i></a>
                            </div>
                            <div class="button"><a class="pdf" href="#about">More About Me</a></div>

                        </div>
                    </div>

                    <img class="duck" src="img/giphy2.gif" alt="">
                </div>
            </div>

        </section>
        <section class="about" id="about">
            <div class="aboutMe">
                <div class="image" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800"> <img src="img/nour&.jpg" alt=""></div>
                <div class="me_container">
                    <div class="me">
                        <h2 data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">About <span> &nbsp;Me</span>
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="800" data-aos-duration="500">My name is Nour,
                            and I'm passionate about both mathematics and information technology. I have a Master's degree in Mathematics,
                            and I recently decided to switch to web development.Well, there's a close link between mathematics, logic,
                            and web development. I've always felt comfortable in this field, ever since my first year of studies when I followed
                            a program combining mathematics and IT. So it was a natural choice for me to pursue web development.
                            I love logical challenges and projects that require complex thinking.
                            My academic background has allowed me to develop strong analytical and problem-solving skills,
                            which are just as useful in mathematics as in web development. I'm now eager to apply my skills in web development and contribute to the creation of innovative and effective websites."</p>

                        <div class="titles" data-aos="fade-up" data-aos-delay="1100" data-aos-duration="500">
                            <p class="title_link p1">Skills</p>
                            <p class="title_link p2">Education</p>
                            <p class="title_link p3">Experience</p>
                        </div>
                        <div class="skills list" data-aos="fade-up" data-aos-delay="1400" data-aos-duration="500">
                            <ul>
                                <li><span>Front-End</span><br>HTML, CSS, JavaScript, jQuery, Boostrap. </li>
                                <li><span>Back-End</span><br>PHP, MySQL, C, Matlab. </li>
                                <li><span>Tools</span><br>Git, GitHub, Figma.</li>
                            </ul>
                        </div>

                        <div class="skills educ">
                            <ul>
                                <li><span>2022-Current</span><br>Full Stack Web Developer </li>
                                <li><span>2012-2017</span><br>Master's Degree in Mathematics </li>
                            </ul>
                        </div>

                        <div class="skills experience">
                            <ul>
                                <li><span>2017-2021</span><br>Teacher of Mathematics</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="portfolio" id="portfolio">
            <div class="works ">
                <h2> <span>Port</span>folio</h2>
                <div class="worksgrid">
                    <div class="row" data-aos="flip-down" data-aos-delay="100" data-aos-duration="500" data-aos-easing="linear">
                        <img src="img/Screenshot 2023-01-10 110549.png" alt="">
                        <div class="description">
                            <h5> Creating a Dynamic Weather App using API</h5>
                            <p>The app allows users to search for weather forecasts for a specific location and displays detailed weather information in real-time.</p>
                            <a class="lien" href=""><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>

                    <div class="row" data-aos="flip-down" data-aos-delay="100" data-aos-duration="500" data-aos-easing="linear">
                        <img src="img/Screenshot 2023-01-10 115135.png" alt="">
                        <div class="description">
                            <h5>My personal website built with HTML, CSS, JavaScript, and PHP</h5>
                            <p> This personal website showcases my skills and my projects in web development,it's ncludes information about me and my contact information. With a clean and modern design.</p>
                            <a class="lien" href=""><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>


                    <div class="row" data-aos="flip-down" data-aos-delay="100" data-aos-duration="500" data-aos-easing="linear">
                        <img src="img/resp.PNG" alt="">
                        <div class="description">
                            <h5>Creating a Responsive Website as a Team</h5>
                            <p>The website was designed to be accessible and user-friendly across a range of devices, including desktops, laptops, tablets, and smartphones. </p>
                            <a class="lien" href="https://nour3427.github.io/SITE-RESPONSIVE/"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>

                    </div>

                    <div class="row" data-aos="flip-down" data-aos-delay="200" data-aos-duration="500" data-aos-easing="linear">
                        <img src="img/site.png" alt="">
                        <div class="description">
                            <h5>Creating a Showcase Website with HTML and CSS</h5>
                            <p>This Project was Completed at the Beginning of My Training: Creation of a Static Website Using HTML and CSS.</p>
                            <a class="lien" href="https://nour3427.github.io/SITE-RESPONSIVE/"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>

                    </div>
                    <div class="row" data-aos="flip-down" data-aos-delay="200" data-aos-duration="500" data-aos-easing="linear">
                        <img src="img/tajine.PNG" alt="">
                        <div class="description">
                            <h5>Developing a Website using the Scrum Methodology</h5>
                            <p>This project likely involved working in sprints, holding daily stand-up meetings, and collaborating closely with a cross-functional team to create a successful website.</p>
                            <a class="lien" href=""><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>

                    </div>

                    <div class="row" data-aos="flip-down" data-aos-delay="200" data-aos-duration="500" data-aos-easing="linear">
                        <img src="img/Screenshot 2023-01-10 131613.png" alt="">
                        <div class="description">
                            <h5>Form Validation with Restrictions</h5>
                            <p> This project focuses on creating a form validation system that includes restrictions using JavaScript. The goal is to ensure that users can only submit data that meets specific requirements and to provide clear error messages when data is not valid</p>
                            <a class="lien" href="https://nour3427.github.io/validation-d-un-formulaire/"><i class="fa-sharp fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="contact">
            <div class="contact_container">
                <div class="left">
                    <h2>Contact <span> &nbsp;Me</span></h2>
                    <a data-aos="fade-up" data-aos-delay="100" data-aos-duration="500" data-aos-easing="linear" class="mail" href=""><i id="icone" class="fa-solid fa-paper-plane"></i>nourelyakine.moumene@gmail.com</a>

                    <div class="social" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500" data-aos-easing="linear">
                        <a href="https://www.facebook.com/corail34" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/nourferraoun/" target="_blank"> <i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/nour-ferraoun-aa7b68222/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/Nour3427" target="_blank"><i class="fa-brands fa-square-github"></i></a>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="linear" class="button"><a class="pdf" href="./CV Nour.pdf" download>Download CV</a></div>

                </div>
                <div class="right">
                    <div class="info_message">
                        <?php if (isset($_SESSION['error_message'])) { ?>
                            <p class="error_message" style="color:red"><?= $_SESSION['error_message']?></p>
                             <?php unset($_SESSION['error_message']);
                        } ?>
                    </div>
                    <div class="info_message">

                        <?php if (isset($_SESSION['success'])) { ?>
                            <p class="error_message" style="color:green"><?= $_SESSION['success'] ?></p>
                        <?php unset($_SESSION['success']);
                        } ?>
                    </div>
                    <form id="contact-form" action="" method="post">
                        <input id="namee" type="text" name="name" placeholder="Your Name" required>
                        <input id="emaiil" type="email" name="email" placeholder="Your Email" required>
                        <textarea id="messagee" name="message" rows="6" placeholder="Your Message"></textarea>
                        <input id="button" class="button submit" name="submit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </section>


    </div>

    <script src="./App.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("YF6BuOSs5Gf8RtgP93");
        })();
    </script>

    <script>
        var typed = new Typed(".auto", {
            strings: [" Nour Ferraoun.", "Nour Ferraoun.", " a Web Developer"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true

        })
    </script>
    <script>
        $(document).ready(function() {
            $(".burger").click(function() {

                $(".navBar").animate({
                    'height': 'toggle'
                }, "slow");
            });
        });
    </script>

    <script>
        AOS.init();
    </script>

</body>

</html>