<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TIMES VENDING | Home</title>

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

    <!-- icon for tab --> 
    <link rel="icon" href="images/icon.ico">

</head>

<body> 

    <!-- Navigation -->
    <?php include"php/nav.php"; ?>
    

    <!-- Header Carousel -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            
        </ol>

        <!-- Wrapper for slides --> 
      
        <div class="carousel-inner">   
          

            <div class="item active">
                <div class="fill" style="background-image:url('images/coffee_beans_carousal_home_1.jpg');"></div>
                <div class="carousel-caption">
                    <h1 class="index_cor">WELCOME TO <br>TIMES VENDING PVT.LTD.</h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/corousal-home-3.jpg');"></div>
                <div class="carousel-caption">
                    <h2 class="index_cor">YOUR PREFFERED BEVERAGE<br> AT A PUSH OF BUTTON</h2>
                </div>
            </div>
           

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to<span style="color:#af181d"> Times Vending</span>
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i>About Us </h4>
                    </div>
                    <div class="panel-body">
                        <p><b><i>M/s Times Vending Private Limited</b></i> is one of the well-known names in the field of distribution
                in Delhi. Established in <b><i>2003</b></i> it comprises of dynamic experienced management headed by the Directors having 
                vast experience...</p>
                        <a href="about.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-list"></i> Products</h4>
                    </div>
                    <div class="panel-body">
                        <p>Our wide range of tea and coffee vending machines in India designed with finesse and great detail to assure quality that gives you just the exact beverage you want. Install our tea and coffee vending machines...</p>
                        <a href="products.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-book"></i> Labour Compliances</h4>
                    </div>
                    <div class="panel-body">
                        <p>We maintain our records sincerely and systematically.All the documents and pdfs related to our work are available on our website. We update them on a regular basis.To check them please click <span style="font-weight: bold;">learn more</span></p>
                        <a href="lc.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>   
         <!-- Our Customers -->
        <div style="margin:0px 20px;" class="row">
            <div class="col-md-12">
                <h2 class="page-header">Our Customers</h2>
            </div>
            <div class="demo"> 
            
                <img class="img-fluid" src="images/marquee/bese.jpg" alt="" width="270px" height="130px" style="margin:10px;">

                <img  class="img-fluid" src="images/marquee/fortis1.gif" alt="" width="270px" height="130px" style="margin:10px;">
            
           
                <img class="img-fluid" src="images/marquee/icici_logo.jpg" alt="" width="270px" height="130px" style="margin:10px;">
                
           
                <img class="img-fluid" src="images/marquee/indraprastha-apollo.gif" alt="" width="270px"  height="130px" style="margin:10px;">
            
           
                <img class="img-fluid" src="images/marquee/Max_logo.jpg" alt="" width="270px"  height="130px" style="margin:10px;">

                <img class="img-fluid" src="images/marquee/max_life.png" alt="" width="270px"  height="130px" style="margin:10px;">

                 <img class="img-fluid" src="images/marquee/luxor.png" alt="" width="270px"  height="130px" style="margin:10px;">
         
         
            
            
        </div>  
        </div>
        <!-- /.row -->
       

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Times Vending Pvt. Ltd. - All Rights Reserved </p>
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
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

</body>

</html>