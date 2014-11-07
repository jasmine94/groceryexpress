<?php 
	/*$connect = mysql_connect("localhost") or die(mysql_error($connect));*/
	// mysql_select_db("groceryexpress",$connect);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>GROCERY EXPRESS</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <?php include('navigationbar.php');?>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>Contact.</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->

	<!--  <div id="contactwrap"></div> -->
	 
	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->
	<?php
		include("contact2.php");
	?>
	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h4>Just Get In Touch!</h4>
	 			<div class="hline"></div>
		 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
		 			<form role = "form" enctype="multipart/form-data" id = "form" method = "post">
						
						    <label for="name">Your Name</label>
						    <input type = "text" name="name" class="form-control" id="name">
				
						    <label for="emailadd">Email address</label>
						    <input type = "email" name="email" class="form-control" id="emailadd">

						    <label for="subject">Subject</label>
						    <input type = "text" name="subj" class="form-control" id="subject">

						  	<label for="message1">Message</label>
						  	<textarea name = "message1" class="form-control" id="message1" rows="3"></textarea>

						  <button name = "submit" type="submit" class="btn btn-theme">Submit</button>
					</form>
			</div><!--/col-lg-8 -->
	 		
	 		<div class="col-lg-4">
		 		<h4>Our Address</h4>
		 		<div class="hline"></div>
		 			<p>
		 				Some Ave, 987,<br/>
		 				23890, New York,<br/>
		 				United States.<br/>
		 			</p>
		 			<p>
		 				Email: hello@solidtheme.com<br/>
		 				Tel: +34 8493-4893
		 			</p>
		 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
	 		</div>
	 	</div><!--/row -->
	 </div><!--/container -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 	 <?php include('footer.php');?>
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>


  </body>
</html>
