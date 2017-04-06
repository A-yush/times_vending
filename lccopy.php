<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Times Vending | HOME</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/liMarquee.css" rel="stylesheet">
    <link href="css/lc_table.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">>
    <link href="css/paginate.css" rel="stylesheet">

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

<?php include"php/nav.php";?>

<!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12 bread">
                <h1 class="page-header">Products
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Labour Compliances</li>
                </ol>
            </div>
        </div>

<!-- table starting-->


<table id="tableData" class="table table-bordered table-hover table-responsive " >
<thead class="cap">
	<tr>
		<th>DOCUMENTS</th>
		<th>DATE</th>
		
	</tr>
</thead>
<tbody>

<?php  
include "init.php";
	
	$query = "SELECT * FROM pdfs ORDER BY DATE DESC";
	
	if ($result = $con->query($query)) {
		while ($row = mysqli_fetch_object($result)) {
			?>		

			<tr >
				<td class="col-md-5"> <a href='$row->location'>
				<?php echo $row->name; ?>
				</a></td>
				<td class="col-md-1"> 
				<?php
	            $newdate=date("d-m-Y",strtotime($row->date));
	            echo "$newdate" ?> 
				</td>			
			</tr>
</tbody>
			<?php
		} // end of while loop
	
	}	// end of if 

     else{
		echo" Error executing query";
	}

?>
			</table>
            

            <!-- Our Customers -->
        <div id="customs" class="row">
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
                    <p>Copyright &copy;Time Vending Pvt. Ltd. - All Rights Reserved </p>
                </div>
            </div>
        </footer>

    
	

 <!-- jQuery -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="js/jquery-3.0.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/paginate.js"></script>
   <script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:5});
            });
        </script>

    
    
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


