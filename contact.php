<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HOME | Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/liMarquee.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <?php include("/php/nav.php");?>

           <!-- Page Content -->
           <div class="mar_con">
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
          
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-7">
                <h3 style="font-size: 30px;font-weight: bold;">Send us a Message</h3>
                

                <form name="sentMessage" id="contactForm" action="" method="post" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name." name="firstname">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." name="phonenumber">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." name="email">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" name="message"></textarea>
                        </div>
                    </div>
                    <div id="success"></div> 
                    
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>


      <!-- Contact Details Column -->
            <div class="col-md-4 con_det">
                <h3 style="font-weight:bold;font-size: 25px;">Contact Details</h3>
                <p>
                    E-99,KALKAJI<br>NEW DELHI-110019<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (011) 41629971</p>
                <p><i class="fa fa-mobile-phone"></i> 
                    <abbr title="Phone">M-N</abbr>: (+91) 9811320041</p>    
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="timesvending@yahoo.co.in">timesvending@yahoo.co.in</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Saturday: 9:30 AM to 7:30 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                   
                </ul>
                </div>
            
        </div>
        </div>
        <!-- /.row -->

         <!-- Our Customers -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Customers</h2>
            </div>
            <div class="demo"> 
            <div class=" str-wrap">
            
                <img src="images/marquee/bese.jpg" alt="" width="270px" height="130px" style="margin:10px;">

                <img  src="images/marquee/fortis1.gif" alt="" width="270px" height="130px" style="margin:10px;">
            
           
                <img src="images/marquee/icici_logo.jpg" alt="" width="270px" height="130px" style="margin:10px;">
          
           
                <img src="images/marquee/indraprastha-apollo.gif" alt="" width="270px"  height="130px" style="margin:10px;">
            
           
                <img  src="images/marquee/Max_logo.jpg" alt="" width="270px"  height="130px" style="margin:10px;">
         
            
            
        </div>
        </div>  
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy;Time Vending Pvt. Ltd. - All Rights Reserved</p>
                </div>
            </div>
        </footer>
        </div>


    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.liMarquee.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(".demo").liMarquee({
    loop:-1, 
    scrolldelay:0,
    circular:true,
    direction: 'left',
    scrollamount: 90    
    });
    
    </script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>


</body>

</html>



<?php  
if(isset($_POST['firstname']) && isset($_POST['phonenumber']) && isset($_POST['email']) && isset($_POST['message'])){
    $name = $_POST['firstname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $message = $_POST['message'];


$to = "arvind@timesvending.com";
$message_final = $message."\n\n\n\n".$email."\n\n".$phonenumber;

if (mail($to,$name." :FEEDBACK", $message_final)) {
    echo "<div class='alert alert-success'><h1>Mail was sent</h1></div>";
}else{
    echo "<div class='alert alert-warning'><h1>Mail was not sent !!</h1></div>";
}
}
?>
