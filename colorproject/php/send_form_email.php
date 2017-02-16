<?php
 header('Refresh: 2; URL=http://colorproject.biz/');
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "kai@colorproject.biz";
 
    $email_subject = $_POST['_subject'];
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $_name = $_POST['_name']; // required
 
    $email_from = $_POST['email']; // required
 
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$_name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "A new message from a user \n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     

    $email_message .= "Name: ".clean_string($_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Message: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ColorProject | Home </title>
    <meta name="description" content="Your Description Here">
    <meta name="author" content="Kai Gaemin Lee">
<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <script type="text/javascript" src="../js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <div id="tf-home">
        <div class="overlay">
            <div id="sticky-anchor"></div>
            <nav id="tf-menu" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="index.html"> ColorProject :: Inscribe Tones in Colors </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#tf-home">Home</a></li>
                        <li><a href="#tf-about">About</a></li>
                        <li><a href="#tf-project">Projects</a></li>
                        <li><a href="#tf-team">Our Team</a></li>
                        <li><a href="#tf-contact">Contact</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container">
                <div class="content">
            <section class="main-heading" id="home">
              <div class="overlay">
                  <div class="container">
                      <div class="row">
                          <div class="main-heading-content col-md-12 col-sm-12 text-center">
                      <h1 class="main-heading-title"> Thank you! We'll be in touch with you soon!</h1>
                    </div>
                    </div>
                  </div>
                </div> 
                </div>
            </div>
        </div>
    </div>
  </body>
</html> 

 
 
 
<?php

}
 
?>
