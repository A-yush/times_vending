<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TIMES VENDING | About Us</title>

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

    <?php include("php/nav.php");?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
            <h1 class="page-header">
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">About us</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-5">
                <img class="image-rounded" src="images/about.jpg" alt="" height="300px" width="430px" padding="10px 0px 0px 0px">
            </div>
            <div class="col-md-7">
                <h2>About<span style="color:#af181d"><b> Times Vending</b></span></h2>   
                <p><b><i>M/s Times Vending Private Limited</b></i>is one of the well-known names in the field of distribution
                in Delhi. Established in <b><i>2003</b></i> it comprises of dynamic experienced management headed by the Directors having 
                vast experience in the same field. Action and planning are essential components of a successfull business and that what 
                <b><i>M/s Times Vending Private Limited</b></i> is implementing. One without the other is futile. 
        </p>  
        <p>The oragnisation being a "Group of well experienced and competent People"has an objective to give utter satisfaction to the clients.
        The specification of <b><i>M/s Times Vending Private Limited</b></i>is to keep the name in the field of Vending Machines. We are the authorised
        vending distributors of the <b>HINDUSTAN UNILEVER LIMITED(LIPTON VENDING MACHINES).</b> We install Automatic Tea and Coffee Vending Machines and 
        undertake all supplies of ingredients,unkeep hygiene and serving/maintainence of Machine to give you trouble free operation. </p>
            </div>
        </div>
        <!-- /.row -->

       
        <!-- /.row -->
        
        <!-- aim-->
        <div class="row">
            <div class="col-md-8">
        <h2><i class="glyphicon glyphicon-blackboard"></i>AIM</h2> 
        <p>Each day should be marked with advancement toward our personal and professional pinnacles of success.We are happy to be a mentor to your company and
        we will give you the best services that we promised about.</p>
        <p>We believe that our attention and commitment to ythe above will bring about an immediate improvement. The objective opinion is sometimes swayed by subjective
        thought.Our individual backgrounds and experiences have a tendency to influence our perceptions.
        </p>
        <p>Our Office is fully computerized and equipped with the modern facilities. We are dealing with Multi-National Companies apart from Indian Reknowned Company.</p>
        </div>
        
        <div class="col-md-4" id="contact">
        <h3><a href="contact.php"><i class="glyphicon glyphicon-earphone"></i>Contact Us</a></h3> 
        <p>If you are interested in our vending machines, premixes and our other products and services that we offer, contact us! </p>
        <a href="contact.php">Mail us</a>
        </div>
        </div>

        <!-- Our Customers -->
        <div style="margin:0px 20px;" class="row">
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

                <img  src="images/marquee/max_life.png" alt="" width="270px"  height="130px" style="margin:10px;">

                 <img  src="images/marquee/luxor.png" alt="" width="270px"  height="130px" style="margin:10px;">
         
         
            
            
        </div>
        </div>  
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy;Times Vending Pvt. Ltd. - All Rights Reserved </p>
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

</body>

</html>
