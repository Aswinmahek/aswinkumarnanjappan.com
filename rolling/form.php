<?php
if(isset($_POST['email'])) {

        // EDIT THE 2 LINES BELOW AS REQUIRED
        $email_to = "aswinmahek@gmail.com.com";
        $email_subject = "Form Response";

        function died($error) {
                // your error code can go here
                echo "We are very sorry, but there were error(s) found with the form you submitted. ";
                echo "These errors appear below.<br /><br />";
                echo $error."<br /><br />";
                echo "Please go back and fix these errors.<br /><br />";
                die();
        }


        // validation expected data exists
        if(!isset($_POST['name']) ||
                !isset($_POST['email']) ||
                !isset($_POST['website']) ||
                !isset($_POST['subject']) ||
                !isset($_POST['message'])) {
                died('We are sorry, but there appears to be a problem with the form you submitted.');
        }



        $first_name = $_POST['name']; // required
        $last_name = $_POST['email']; // required
        $email_from = $_POST['website']; // required
        $telephone = $_POST['subject']; // not required
        $comments = $_POST['message']; // required

        $error_message = "";
        $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }

        $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$website)) {
        $error_message .= 'The website you entered does not appear to be valid.<br />';
    }

    if(!preg_match($string_exp,$subject)) {
        $error_message .= 'The subject you entered does not appear to be valid.<br />';
    }

    if(strlen($message) < 2) {
        $error_message .= 'The message you entered do not appear to be valid.<br />';
    }

    if(strlen($error_message) > 0) {
        died($error_message);
    }

        $email_message = "Form details below.\n\n";


        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            return str_replace($bad,"",$string);
        }



        $email_message .= "name: ".clean_string($name)."\n";
        $email_message .= "email: ".clean_string($email)."\n";
        $email_message .= "website: ".clean_string($website)."\n";
        $email_message .= "subject: ".clean_string($subject)."\n";
        $email_message .= "message: ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
header("index.html")

?>



<!-- include your own success html here -->

<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">


    <title>Aswin Kumar Nanjappan</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images\favicon\favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" type="image/png" href="images\favicon\apple-touch-icon.png">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">


    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


 </head>

  <body>



    <!-- Preloader Start -->
    <div id="preloader">
      <div class="loader"></div>
    </div>
    <!-- Preloader End -->



    <!-- Home & Menu Section Start-->
    <header id="home" class="home-section">

        <div class="header-top-area">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index-2.html">er.aswinkumar</a>
                        </div>
                    </div>

                    <!--div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">About</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#portfolio">Portfolio</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#testimonials">Testimonial</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#services">services</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--div class="home-section-background" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <p>Hi! This is Aswin Kumar</p>
                                    <h2><span class="typing"></span></h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Home & Menu Section End-->

    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">

      <div class="col-md-4 text-right">
       <p><span><a href="#about" class="smoth-scroll">About Me</a></span> | <span><a href="#portfolio" class="smoth-scroll">Portfolio</a></span></p>
          </div>

            <div class="col-md-4 text-center">
               <h3>"We've received your message"</h3>
               </div>

             <div class="col-md-4 uipasta-credit text-left">
                <p>Design with <i class="fa fa-heart"></i> By <a href="http://www.dsackce.com/" target="_blank" title="DSAC">Aswin</a></p>
                </div>

             </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>


  </body>
 </html>

<?php

}
?>