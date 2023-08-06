<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta meta name="viewport" content="width=device-width, user-scalable=no" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link rel="icon" href="Images/bye.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <title>Sameer(Portfolio)</title>
</head>

<body>
    <header class="header">
        <a href="Images/Navy & White Modern Professional Resume.pdf" target="_blank" class="logo">Sameer. <span class="animate" style="--i:1;"></span></a>

        <div class="bx bx-menu" id="menu-icon"><span class="animate" style="--i:2;"></span></div>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>

            <span class="active-nav"></span>
            <span class="animate" style="--i:2;"></span>
        </nav>
    </header>
    <section class="home show-animate " id="home">
        <div class="home-content col-lg-7">
            <h1>Hi, I'm <span>Sameer P. Sahu</span><span class="animate" style="--i:2;"></span></h1>
            <div class="text-animate">
                <h3>Full Stack Developer</h3>
                <span class="animate" style="--i:3;"></span>
            </div>
            <p class="para">
                I am a Full Stack Developer. My expertise is to Create and Design Website and many more...
                <span class="animate" style="--i:4;"></span>
            </p>
            <div class="btn-box">
                <a href="#contact" class="btn">Hire me</a>
                <a href="#contact" class="btn">Let's Talk</a>
                <span class="animate" style="--i:5;"></span>
            </div>
        </div>
        <div class="home-sci">
            <a href="#contact" target="_blank"><i class='bx bxl-gmail'></i></a>
            <a href="https://github.com/Sameer0708" target="_blank"><i class='bx bxl-github'></i></a>
            <a href="https://www.linkedin.com/in/sameer-sahu-48a810251/" target="_blank"><i class='bx bxl-linkedin'></i></a>
            <span class="animate" style="--i:6;"></span>
        </div>
        <div class="home-imghover col-lg-5">
            <img class="home-imghover" src="Images/web-development-banner.png" alt="Banner Image">
        </div>
        <span class="animate home-img" style="--i:7;"></span>
    </section>
    <section class="about" id="about">
        <h2 class="heading">About <span>Me</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="about-img">
            <img src="Images/Good.png" alt="for home page">
            <span class="circle-spin"></span>
            <span class="animate scroll" style="--i:2;"></span>
        </div>
        <div class="about-content">
            <h3>Full Stack Developer<span class="animate scroll" style="--i:3;"></span></h3>
            <p>I am a Full Stack Developer, I know the basics of Frontend as well as backend development like html5, css as well as
                bootstrap and after this I have Designed my Ideas in my Projects from this, I have completed my Full course in Heuristic
                Academy, By the help of them I completed this course by full of creativity.
                <span class="animate scroll" style="--i:4;"></span>
            </p>
            <div class="btn-box btns" width="100px" height="5px">
                <a href="Images/Navy & White Modern Professional Resume.pdf" class="btn" target="_blank">Download Resume</a>
                <span class="animate scroll" style="--i:5;"></span>
            </div>
        </div>
    </section>

    <section class="projects show-animate" id="projects">
        <h2 class="heading">My <span>Projects</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="video-card-container">
            <div class="video-card">
                <div class="video-card-body">
                    <div class="video-thumbnail">
                        <img src="thumbnails Images/ark.png" class="thumb-img" alt="1st-thumbnail">
                        <video src="videos/ark.mp4" class="thumb-video" muted autoplay loop></video>
                    </div>
                    <p class="video-card-title" title="Ark Studio Based on Heuristic Academy Ideas and my implementation">Ark Studio Based on Heuristic Academy Ideas and my implementation</p>
                    <div class="video-card-info">
                        <a href="" class="user"><i class='bx bxs-user'></i>Sameer Sahu</a>
                        <span class="uploaded-time"><i class='bx bx-time-five'></i> Feb 2023</span>
                    </div>
                </div>
                <div class="video-modal-screen">
                    <i class="fa-solid fa-square-xmark"></i>
                </div>
            </div>

            <div class="video-card">
                <div class="video-card-body">
                    <div class="video-thumbnail">
                        <img src="thumbnails Images/chair.png" class="thumb-img" alt="1st-thumbnail">
                        <video src="videos/chair.mp4" class="thumb-video" muted autoplay loop></video>
                    </div>
                    <p class="video-card-title" title="Ark Studio Based on Heuristic Academy Ideas and my implementation">Comforty Based on Heuristic Academy Ideas and my implementation</p>
                    <div class="video-card-info">
                        <a href="" class="user"><i class='bx bxs-user'></i>Sameer Sahu</a>
                        <span class="uploaded-time"><i class='bx bx-time-five'></i> March 2023</span>
                    </div>
                </div>
            </div>

            <div class="video-card">
                <div class="video-card-body">
                    <div class="video-thumbnail">
                        <img src="thumbnails Images/clock.png" class="thumb-img" alt="1st-thumbnail">
                        <video src="videos/clock.mp4" class="thumb-video" muted autoplay loop></video>
                    </div>
                    <p class="video-card-title" title="Ark Studio Based on Heuristic Academy Ideas and my implementation">Javascript Clock Based on Heuristic Academy Ideas and my implementation</p>
                    <div class="video-card-info">
                        <a href="" class="user"><i class='bx bxs-user'></i>Sameer Sahu</a>
                        <span class="uploaded-time"><i class='bx bx-time-five'></i> April 2023</span>
                    </div>
                </div>
            </div>

            <div class="video-card">
                <div class="video-card-body">
                    <div class="video-thumbnail">
                        <img src="thumbnails Images/compo.png" class="thumb-img" alt="1st-thumbnail">
                        <video src="videos/compo.mp4" class="thumb-video" muted autoplay loop></video>
                    </div>
                    <p class="video-card-title" title="Ark Studio Based on Heuristic Academy Ideas and my implementation">Competition Website Based on Heuristic Academy Ideas and my implementation</p>
                    <div class="video-card-info">
                        <a href="" class="user"><i class='bx bxs-user'></i>Sameer Sahu</a>
                        <span class="uploaded-time"><i class='bx bx-time-five'></i> May 2023</span>
                    </div>
                </div>
            </div>

            <div class="video-card">
                <div class="video-card-body">
                    <div class="video-thumbnail">
                        <img src="thumbnails Images/login.png" class="thumb-img" alt="1st-thumbnail">
                        <video src="videos/login.mp4" class="thumb-video" muted autoplay loop></video>
                    </div>
                    <p class="video-card-title" title="Ark Studio Based on Heuristic Academy Ideas and my implementation">Login Form Based on Heuristic Academy Ideas and my implementation</p>
                    <div class="video-card-info">
                        <a href="" class="user"><i class='bx bxs-user'></i>Sameer Sahu</a>
                        <span class="uploaded-time"><i class='bx bx-time-five'></i> May 2023</span>
                    </div>
                </div>
            </div>

            <div class="video-card">
                <div class="video-card-body">
                    <div class="video-thumbnail">
                        <img src="thumbnails Images/stack.png" class="thumb-img" alt="1st-thumbnail">
                        <video src="videos/stack.mp4" class="thumb-video" muted autoplay loop></video>
                    </div>
                    <p class="video-card-title" title="Ark Studio Based on Heuristic Academy Ideas and my implementation">Stack Based on Heuristic Academy Ideas and my implementation</p>
                    <div class="video-card-info">
                        <a href="" class="user"><i class='bx bxs-user'></i>Sameer Sahu</a>
                        <span class="uploaded-time"><i class='bx bx-time-five'></i> May 2023</span>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="education" id="education">
        <h2 class="heading">My <span>Journey</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="education-row">
            <div class="education-column">
                <h3 class="title">Education<span class="animate scroll" style="--i:2;"></span></h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2018 - 2019</div>
                            <h3>10th(Maharashtra Board)</h3>
                            <p>I have completed my 10th board from SSC(Maharashtra Board)
                            </p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2020 - 2021</div>
                            <h3>12th(Maharashtra Board)</h3>
                            <p>I have completed my 12th board from SSC(Maharashtra Board)
                            </p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2022 - 2023</div>
                            <h3>Web Development - Full Stack Development(Heuristic Academy)</h3>
                            <p>I am pursing my IT Engineering in M.H. Saboo Siddik College Of Engineering, and doing in this I did
                                My Web Development Course from Heuristic Academy.
                            </p>
                        </div>
                    </div>

                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>

            <div class="education-column">
                <h3 class="title">Experience</h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2018 - 2019</div>
                            <h3>10th(Maharashtra Board)</h3>
                            <p>I have completed my 10th board from SSC(Maharashtra Board)
                            </p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2020 - 2021</div>
                            <h3>12th(Maharashtra Board)</h3>
                            <p>I have completed my 12th board from SSC(Maharashtra Board)
                            </p>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i>2022 - 2023</div>
                            <h3>Web Development - Full Stack Development(Heuristic Academy)</h3>
                            <p>I am pursing my IT Engineering in M.H. Saboo Siddik College Of Engineering, and doing in this I did
                                My Web Development Course from Heuristic Academy.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="heading">My <span>Skills</span></h2>

        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">Coding Skills</h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>HTML <span>90%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>CSS <span>80%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>JavaScript <span>85%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>PHP <span>75%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="skills-column">
                <h3 class="title">Programming Skills</h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <h3>C <span>70%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>C++ <span>75%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Python <span>85%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Java <span>55%</span></h3>
                            <div class="bar"><span></span></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form id="action" method="post">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="name" placeholder="Full Name" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" name="email" placeholder="Email Address" required>
                    <span class="focus"></span>
                </div>
            </div>


            <div class="textarea-field">
                <textarea name="msg" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
                <span class="focus"></span>
            </div>

            <div class="btn-box btns">
                <button name="send" type="submit" class="btn">Submit</button>
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Sameer | All Rights Reserved.</p>
        </div>

        <div class="footer-icontop">
            <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer>
    <script src="script.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    //Load Composer's autoloader
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'sahu.211624.et@mhssce.ac.in';                     //SMTP username
        $mail->Password   = 'zdcrtytqkvlnproj';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('sahu.211624.et@mhssce.ac.in', 'Contact Form');
        $mail->addAddress('sahu.211624.et@mhssce.ac.in', 'Sameer Website');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Portfolio Contact Form';
        $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> Message - $msg";

        $mail->send();
        echo "<div class='success'>Message has been Sent!</div>";
    } catch (Exception $e) {
        echo "<div class='alert'>Message Couldn't Send </div>";
    }
}
?>