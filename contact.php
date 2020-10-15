<!DOCTYPE html>


<html lang="en"><!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.css">
    <!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></link>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style type="text/css">
    	
  	.container{
  		max-width: 1200px; 
  		padding-bottom: 5rem; 
  		width: 100%; 
  		padding-right: 15px; 
  		padding-left: 16px;
  		margin-right: auto; 
  		margin-left: auto
  	}

  	#section-heading{
  		color:#00011a; 
  		text-transform: uppercase; 
  		letter-spacing: .05rem; 
  		font-size: 2.4rem;
    	line-height: 3.35rem; 
    	margin: 0 0 1.5rem;
    	font-family: 'Playfair Display', serif;
  	}
    	
    .section-description{
    	font-size: 1.25rem; 
    	line-height: 1.75rem; 
    	letter-spacing: .018rem; 
    	margin: 0 0 1.5rem;
    	color: #00011a;
    	font-family: 'Playfair Display', serif;
    }

    .detailsSection{
    	background-color: #00011a; 
    	color: #000000; 
    	padding: 4rem 0; 
    	height: auto;
    }

    #row{
    	position: relative; 
    	display: flex; 
    	flex-wrap: wrap; 
    	font-size: 14px; 
    	margin: -7.2rem 0 -16rem 0!important;
    	height: auto;


    }

    #col-md-9{
    	letter-spacing: 0.05rem; 
    	font-size: 0.9rem; 
    	line-height: 1.25rem; 
    	font-weight: 400; 
    	margin-bottom: 0.4rem; 
    	position: relative
    }

    .form{
    	border: 1px solid #ccc; 
    	padding: 2.5rem 2rem; 
    	margin: 0;
    	position: relative; 
    	background-color: #fff; 
    	color: #100024; 
    	box-shadow: 2px 5px 10px 0px rgba(0,0,0,0.2); 
    	border-radius: 0 1.5625rem 0 1.5625rem
    }

    .card-body{
    	max-width: none; 
    	text-align: left
    }

    #contact-form{
    	font-size: 100%; 
    	font: inherit; 
    	vertical-align: baseline; 
    	color: inherit;
    	font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;
    }

    .form-control{
    	background-color: #f6f6f6;
    }

    .btn-primary{
    	font-size: 1rem;
    	font-weight: 700;
    	padding: 10px 25px;
    	text-transform: uppercase;
    	letter-spacing: .05rem;
    	transition: all .2s;
    	text-decoration: none;
    	cursor: pointer;
    	border: 0;
    	margin-top: 1rem; 
    	overflow: visible; 
    	cursor: pointer
    }
    
    .sidebar{
    	margin-top: 7.2rem; 
    	padding: 0 0 0 1rem; 
    	margin-bottom: 8rem; 
    	color: #ffffff;
    
    	font-family: 'Playfair Display', serif;

    }

    #store-card{
    	text-align: justify;
    }

    .hr{
    	border-top: 1px solid #ffffff;
    }

    .icon{
    	display: block;
    	float: left; 
    	color: #FB8303;
    }

    .info{
    	overflow: hidden; 
    	margin-left: 50px;
    }

    
 </style>
  	
  	<?php include('header.php'); ?>
</head>

<body>

<?php
   
if(isset($_POST['name'])){
  $name = $_POST['name'];
 
}
if(isset($_POST['address'])){
  $address =$_POST['address'];
}
if(isset($_POST['email'])){
  $email = $_POST['email'];
 
}
if(isset($_POST['phone'])){
  $phone =$_POST['phone'];
}if(isset($_POST['date'])){
  $date = $_POST['date'];
 
}
if(isset($_POST['time'])){
  $time =$_POST['time'];
}if(isset($_POST['number'])){
  $number = $_POST['number'];
 
}
if(isset($_POST['message'])){
  $message =$_POST['message'];
}
$_POST['name']= $name;
$_POST['address']=$address;
$_POST['email']= $email;
$_POST['phone']=$phone;
$_POST['date']= $date;
$_POST['time']=$time;
$_POST['number']= $number;
$_POST['message']=$message;


if(isset($_POST['submit']))
{	
	$name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $number = $_POST['number'];
    $message = $_POST['message'];


$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";



$connect = mysqli_connect($hostname,$username ,$password,$databaseName);
$query="INSERT INTO contact_details( Name,Address,Email,Phone,datea,timess,Flight,Message) VALUES ('kk','cc','c','f','f','f','f','f')";

$result = mysqli_query($connect, $query);

    
}


?>


<br>
<br>

<section>
    <!--Section: Contact v.2-->
    <div class="section">

            <!--Section heading-->
        <div class="container">
            <h1  class="section-heading h1 pt-4" id="section-heading">Contact us</h1>
        
            <!--Section description-->
            
            <p class="section-description">If you wish to contact us , please complete either the below contact form or you can use any of below method to contact us, </p>
        	
        	        
        </div>
    </div>

    <div class="detailsSection">

    	<div class="container">

			<div class="row" id="row">    
		        <!--Grid column-->

		        <div class="col-md-9 col-lg-9 " id="col-md-9">
		            
		                <div class="form">

					 		<div class="card-body">
		                    	<form id ="contact-form" name="contact-form" method="POST"  >
		                    		<!-- onsubmit="return validateForm()"
 -->
		                        <!--Grid row-->
		                        <div class="row">

		                            <!--Grid column-->
		                            <div class="col-md-6">
		                                <div class="md-form">
		                                    <div class="md-form">
		                                    	<label for="name" class="" >Name</label>
		                                        <input type="text" required id="name" name="name" class="form-control" style="background-color: #f6f6f6;">
		                                        
		                                    </div>
		                                </div>
		                            </div>
		                            <!--Grid column-->

		                            <!--Grid column-->
		                            <div class="col-md-6">
		                                <div class="md-form">
		                                    <div class="md-form">
		                                    	<label for="address" class="" >Address</label>
		                                        <input type="text" id="address" name="address" class="form-control" style="background-color: #f6f6f6;">
		                                        
		                                    </div>
		                                </div>
		                            </div>
		                            <!--Grid column-->

		                        </div>
		                        <!--Grid row-->
		                        <br>
		                        <!--Grid row-->
		                        <div class="row">

		                            <!--Grid column-->
		                            <div class="col-md-6">
		                                <div class="md-form">
		                                    <div class="md-form">
		                                    	<label for="email" class="">Email</label>
		                                        <input type="text" id="email" name="email" class="form-control" style="background-color: #f6f6f6;">
		                                        
		                                    </div>
		                                </div>
		                            </div>
		                            <!--Grid column-->

		                            <!--Grid column-->
		                            <div class="col-md-6">
		                                <div class="md-form">
		                                    <div class="md-form">
		                                    	<label for="phone" class="">Phone</label>
		                                        <input type="text" id="phone" name="phone" class="form-control" style="background-color: #f6f6f6;">
		                                        
		                                    </div>
		                                </div>
		                            </div>
		                            <!--Grid column-->

		                        </div>
		                        <!--Grid row-->
		                        <br>
		                        

		                        <!--Grid row-->
		                    	<div class="row">

		                            <!--Grid column-->
		                        	<div class="col-md-6">
		                            <div class="md-form">
		                                <div class="md-form">
		                                    <label for="name" class="">Pick up Date</label>
		                                    <input type="date" id="date" name="date" class="form-control" style="background-color: #f6f6f6;">
		                                </div>
		                            </div>
		                        	</div>
		                            <!--Grid column-->

		                            <!--Grid column-->
		                        	<div class="col-md-6">
		                            <div class="md-form">
		                                <div class="md-form">
		                                    <label for="time" class="">Pick up Time</label>
		                                    <input type="time" id="time" name="time" class="form-control" style="background-color: #f6f6f6;">
		                                </div>
		                            </div>
		                        	</div>
		                            <!--Grid column-->
		                    	</div>
		                        <!--Grid row-->

		                        <br>

		                        <!--Grid row-->
		                        <div class="row">

		                            <!--Grid column-->
		                            <div class="col-md-6">
		                                <div class="md-form">
		                                    <div class="md-form">
		                                    	<label for="name" class="">Flight Number</label>
		                                        <input type="number" id="number" name="number" class="form-control" style="background-color: #f6f6f6;">
		                                    </div>
		                                </div>
		                            </div>
		                            <!--Grid column-->
		                        </div>
		                        <!--Grid row-->

		                        <br>

		                        <!--Grid row-->
		                        <div class="row">

		                            <!--Grid column-->
		                            <div class="col-md-12">
		                                <div class="md-form">
		                                    <div class="md-form">
		                                    	<label for="name" class="">Message</label>
		                                        <textarea id="message" name="message" class="form-control" style="background-color: #f6f6f6;"></textarea>
		                                    </div>
		                                </div>
		                            </div>
		                            <!--Grid column-->
		                        </div>
		                    	
		                        <!--Grid row-->
		                    	</form>

		                    	<br>
		                    	<br>

		                    	<div class="center-on-small-only">
								<!-- Button HTML (to Trigger Modal) -->
								<input type="submit" name="submit" class="btn btn-outline-primary" value="Add To Cart"> 								<!-- onclick="validateForm()" -->
								</div>
		                    	
		                    	

		                    	<div class="status" id="status">
		                    	</div>
		                    </div>
		                </div>
		            
		        </div>
		        <!--Grid column-->

		        <!--Grid column-->
		       	<div class="col-md-3 col-lg-3">

		       		<aside class="sidebar">
						
							<div class="single contact-info">
								<div class="store-card card-select" id="store-card">

									<h6 style="font-family: 'Playfair Display', serif">Thank you for visiting Visit Sri Lanka Tours,  you  may use  online form  to request information's,  send us your comments or questions, Alternatively you can contact us via following.</h6>
								</div>	
								<hr class="hr">
								<ul class="list-unstyled">

									<li style="margin-top: 10px">
										<div class="icon"><i class="fa fa-map-marker fa-2x"></i></div>
										<div class="info"><p>Visit Sri Lanka tours Pvt Ltd<br>
				                            71-75 Shelton Street <br>
				                            Covent Garden <br>
				                            London <br>
				                            WC2H 9JQ​ </p>
				                        </div>
									</li>

									<li style="margin-top: 10px">
										<div class="icon" style="text-align: center"><i class="fa fa-phone fa-2x"></i></div>
										<div class="info"><p>From UK: 01273 306049 /<br> 079 444 34 557</p>
											<p>From outside the UK : <br> ++ 44 1273 306 049 /<br> ++ 44 79 444 34 557</p>
										</div>
									</li>
						
									<li style="margin-top: 10px">
										<div class="icon" style="text-align: center"><i class="fa fa-envelope fa-2x"></i></div>
										<div class="info"><p>Email@visitsrilankatours.co.uk</p>
										</div>
									</li>

								</ul>
							</div>
							
					</aside>
		       		
		        </div>
		        <!--Grid column-->
			</div>
		</div>	
	</div>

</section>	
     
        <!--Section: Contact v.2-->



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!--Custom scripts-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
	

</body>

<script type="text/javascript">
	function validateForm()
	{

		var name = document.getElementById('name').value;
		var address = document.getElementById('address').value;
		var email = document.getElementById('email').value;
		var phone = document.getElementById('phone').value;
		var date = document.getElementById('date').value;
		var time = document.getElementById('time').value;
		var number = document.getElementById('number').value;
		var message = document.getElementById('message').value;

		if (name == '') {
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Please enter your name',
			})
		} else if ( address == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your address',
			})
		} else if ( email == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your email',
			})
		} else if ( phone == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your phone',
			})
		} else if ( date == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Pick up date',
			})
		} else if ( time == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Pick up time',
			})
		} else if ( number == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Flight number',
			})
		} else if ( message == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your message',
			})

		} else if (name != '' && address != '' && email != '' && phone != '' && date != '' && time != '' && number != '' && message!= '') {
			Swal.fire({
				  icon: 'success',
				  title: 'Successfully',
				  text: 'Thank you for getting in touch! We appreciate you contacting us',
				  showConfirmButton: false,
				  timer: 2000
				})
		}
	}
</script>


<?php include_once('footer.php'); ?>
</html>
