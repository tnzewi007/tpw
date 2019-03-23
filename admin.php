<?php  
include "controllers/registrationControllers.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>pottersHub</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
       	<meta name="description" content="">
        <meta name="author" content="">


        <!-- css -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row" >
                <div class="col-md-12 col-xs-12" style="text-align: center;">
				    <img src="pot-background.png" width="100" height="150">
			     </div>
			</div>
			<div class="row">
                <div class="col-md-3 col-xs-12">
                    
                </div>
                <div class="col-md-6 col-xs-12">
                    <?php
                        $call = new registrationControllers;
                        $call->login();

                    ?>
			    <form action="admin.php" method="post" class="form-horizontal">
				<div class="form-group">
				    <label for="name" class="control-label col-sm-2">NAME:</label>
				    <div class="col-sm-10 col-md-10">
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group">
					<label for="pwd" class="control-label col-sm-2">PASSWORD:</label>
					<div class="col-sm-10 col-md-10">
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
				</div>
				<div class="form-group"> 
    				<div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
      					<button type="submit"  name="submit" class="btn btn-warning">Submit</button>
    				</div>
  				</div>
                </div>
			    </form>
                <div class="col-md-3 col-xs-12">
                
                </div>
			</div>
            
		</div>
		 <footer> 
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3><i class="fa fa-map-marker"></i> Contact:</h3>
                        <p class="footer-contact">
                        148 Ifite Road, Ifite, Awka<br>
                        Phone: (+234)80-670-7872<br>
                        Email: hello@thepotterswheel.org<br>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3><i class="fa fa-external-link"></i> CATEGORIES</h3>
                        <p> <a href="index.html">HOME</a></p>
                        <p> <a href="media.php">MEDIA</a></p>
                        <p> <a href="blog.html">BLOG</a></p>
                        
                    </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-heart"></i> Socialize</h3>
                    <div id="social-icons">
                        <a href="#" class="btn-group google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="btn-group instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#" class="btn-group twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="btn-group facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                </div>    
            </div>
        </div>
    </footer>

    
    <div class="copyright text center">
        <p>&copy; Copyright 2018, <a href="index.html">thepotterswheel</a>. Theme by <a href="admin.php">PottersHub</a></p>
    </div>

        
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
	</body>
</html>