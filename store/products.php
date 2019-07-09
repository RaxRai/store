<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<title>My Store</title>	
		<link rel="stylesheet" type="text/css" href="index.css">
    </head>
	<body>
		<?php include 'header.php';?>
		<?php include 'check_if_added.php';?>

			<div class="container container-products">
				<div class="jumbotron text-center">
					<h1>Welcome to our My Store!</h1>
					<p><i>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</i></p>
				</div>
				<div class="row text-center">
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/cam1.jpg" alt="Cannon EOS" class="img-responsive"></img>
							<div class="caption">
								<h3>Cannon EOS</h3>
								<p>Price:Rs 36,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												//We have created a function to check whether this particular product is added to cart or not. 
												if (check_if_added_to_cart(1)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/cam2.jpg" alt="sony DSLR" class="img-responsive"></img>
							<div class="caption">
								<h3>Sony DSLR</h3>
								<p>Price:Rs 47,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(2)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/cam3.jpg" alt="Nikkon DSLR" class="img-responsive">
							<div class="caption">
								<h3>Nikkon DSLR</h3>
								<p>Price:Rs 38,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(3)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/cam4.jpg" alt="Lumix DSLR" class="img-responsive">
							<div class="caption">
								<h3>Lumix DSLR</h3>
								<p>Price:Rs 76,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(4)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/watch1.jpg" alt="Diamond Dior" class="img-responsive">
							<div class="caption">
								<h3>Diamond Dior</h3>
								<p>Price:Rs 120,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(5)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/watch2.jpg" alt="DuBois 1875" class="img-responsive">
							<div class="caption">
								<h3>DuBois 1875</h3>
								<p>Price:Rs 2,00,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(6)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/watch3.jpg" alt="FEstina" class="img-responsive">
							<div class="caption">
								<h3>Festina</h3>
								<p>Price:Rs.35,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(7)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/watch4.jpg" alt="Rolex" class="img-responsive">
							<div class="caption">
								<h3>Rolex</h3>
								<p>Price:Rs 3,50,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(8)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/shirt1.jpg" alt="H&W" class="img-responsive">
							<div class="caption">
								<h3>H&W</h3>
								<p>Price:Rs 800.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(9)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/shirt2.jpg" alt="Luis Phil" class="img-responsive">
							<div class="caption">
								<h3>Luis Phil</h3>
								<p>Price:Rs 1,000.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(10)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/shirt3.jpg" alt="John Zok" class="img-responsive">
							<div class="caption">
								<h3>John Zok</h3>
								<p>Price:Rs 1,500.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												 
												if (check_if_added_to_cart(11)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thumbnail">
                                                    <img src="img/products/shirt4.jpg" alt="Jhalsani" class="img-responsive">
							<div class="caption">
								<h3>Jhalsani</h3>
								<p>Price:Rs 1,300.00</p>
								<?php if (!isset($_SESSION['email'])) { ?> 
									<a href="login.php?email_error=&wrong=" role="button" class="btn btn-primary btn-block">Add To Cart</a>	
								<?php } else { 
												
												if (check_if_added_to_cart(12)) {?>
													<a class="btn btn-block btn-success" disabled>Added to cart</a>; 
												<?php } 
												else { ?> 
													<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span>Add to cart</a> 
												<?php } 
											} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<?php include 'footer.php';?>
	</body>
</html>