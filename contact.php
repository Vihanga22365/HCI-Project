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
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style type="text/css">
    	
  	.container{
  		max-width: 1200px; 
  		
  		width: 100%; 
  		padding-right: 15px; 
  		padding-left: 16px;
  		margin-right: -100px; 
  		margin-left: auto;

  	}

  	#section-heading{
  		
  		letter-spacing: .05rem; 
  		font-size: 2.4rem;
    	line-height: 3.35rem; 
    	margin: 0 0 1.5rem;
    	font-family: "Montserrat", sans-serif;	
	    font-weight: bold;
	    text-transform: uppercase;
	    position: relative;
	    color: #37517e;
	    margin-top: -50px;
  	}
    	
    .section-description{
    	font-size: 1.25rem; 
    	line-height: 1.75rem; 
    	letter-spacing: .018rem; 
    	margin: 0 0 1.5rem;
    	color: #00011a;
    	font-family: "Montserrat", sans-serif;
    	font-weight: 500;
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
    	margin: -7.6rem -10px -16rem -10px!important;
    	height: auto;


    }

    #col-md-9{
    	letter-spacing: 0.05rem; 
    	font-size: 0.9rem; 
    	line-height: 1.25rem; 
    	font-weight: 500; 
    	margin-bottom: 4rem; 
    	position: relative
    }

    .form{
    	border: 1px solid #ccc; 
    	padding: 2.5rem 2rem; 
    	position: relative; 
    	background-color: #fff; 
    	color: #100024; 
    	box-shadow: 2px 5px 10px 0px rgba(0,0,0,0.2); 
    	border-radius: 0 1.5625rem 0 1.5625rem;
    	margin-left: -15px;
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
    	font-family: "Montserrat", sans-serif;
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
    	padding: 0 0 0 -.5rem; 
    	margin-bottom: 8rem; 
    	color: #ffffff;

    
    	

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
  	
  	
</head>
<?php include('header.php'); ?>
<body>
<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Contact Us</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->
<?php


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
$query="INSERT INTO contact_details ( Name, Address, Email,Phone,datea,timess,Flight,Message) VALUES ('$name','$address','$email','$phone','$date','$time','$number','$message')";

$result = mysqli_query($connect, $query);


    
}



?>




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
<br><br><br> 
    <div class="detailsSection">

    	<div class="container" style="padding-bottom: 5rem; ">

			<div class="row" id="row">    
		        <!--Grid column-->

		        <div class="col-md-9 col-lg-9 " id="col-md-9">
		            
		                <div class="form">

					 		<div class="card-body">
		                    	<form id ="contact-form" name="contact-form" method="POST"  onsubmit="return validateForm()">

		                        <!--Grid row-->
		                        <div class="row">

		                            <!--Grid column-->
		                            <div class="col-md-6">
		                                <div class="md-form">
		                                    <div class="md-form">
		                                    	<label for="name" class="" >Name</label>
		                                        <input type="text" id="name" name="name" class="form-control" style="background-color: #f6f6f6;">
		                                        
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
		                                        <input type="number" id="phone" name="phone" min="0" class="form-control" pattern="[2-9]{1}\d{2}" style="background-color: #f6f6f6;">
		                                        
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
		                                    <input type="text" id="date" name="date" class="form-control" style="background-color: #f6f6f6;">
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
		                                        <input type="number" id="number" name="number" min="0" class="form-control" style="background-color: #f6f6f6;">
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
		                        <br><br>
		                    	<div class="center-on-small-only">
								<!-- Button HTML (to Trigger Modal) -->
								<input type="submit" name="submit" class="btn btn-primary" value="Submit" onsubmit="return emailvalid(); return validateForm();"> 								 
								</div>
		                        <!--Grid row-->
		                    	</form>

		                    	

		                    	
		                    	
		                    	

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

									<p >Thank you for visiting Visit Sri Lanka Tours,  you  may use  online form  to request information's,  send us your comments or questions, Alternatively you can contact us via following.</p>
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
  <br><br>   <br><br><br><br>
        <!--Section: Contact v.2-->



    <!-- SCRIPTS -->
    
    
    <!--Custom scripts-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
  $(document).ready(function(){
    var minDate = new Date();
    $("#date").datepicker({
      showAnim: 'drop',
      numberOfMonth: 1,
      minDate : minDate,
      dateFormat:'yy/mm/dd',


    });
  });
</script>
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-12">
            <div class="footer-info">
              <h3>Visit Sri Lanka Tours </h3>
              <p class="pb-3"><em> Registered in England and Wales</em></p>
              <p>
                71-75 Shelton Street <br>
                Covent Garden <br>
                London <br>
                WC2H 9JQ <br>
                ENGLAND <br><br>
              </p>
              <div class="social-links mt-6">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2"></div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Categories</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tour Packages</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Day Trips / Excursions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="booking.php">Taxi Booking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="place_to_visit.php">Place To Visit</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="CoachTicket.php">Coach Tour</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="terms.php">Terms & Conditions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy Policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="faq.php">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
            </ul>
          </div>

        </div>
        <div class="row">
          <!-- Copyright Message -->
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->


	

</body>
<!--<script>
  $(document).ready(function(){
    var minDate = new Date();
    $("#date").datepicker({
      showAnim: 'drop',
      numberOfMonth: 1,
      minDate : minDate,
      dateFormat:'yy/mm/dd',


    });
  });
</script>-->


<script type="text/javascript">

  function  isMail(mail){

    pattuser = /^([A-Z0-9_%+\-!#$&'*\/=?^`{|}~]+\.?)*[A-Z0-9_%+\-!#$&'*\/=?^`{|}~]+$/i;
    pattdomain = /^([A-Z0-9-]+\.?)*[A-Z0-9-]+(\.[A-Z]{2,9})+$/i;

    tab = mail.split("@");
    if (tab.length != 2)
        return false;
    return (pattuser.test(tab[0]) && pattdomain.test(tab[1]));
  }
    
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
    var xmail = isMail(email);
		

		if (name == '') {
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Please enter your name',
			  timer: 2000
			})
			return false;
		} else if ( address == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your address',
			})
			return false;

		} else if ( email == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your email',
			})
		return false;
    	
		}else if ( xmail == false ) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please enter valid email',
      })
    return false;
      
    } else if ( phone == '' )  {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your phone',
			})
			return false;
		} else if ( date == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Pick up date',
			})
			return false;
		} else if ( time == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Pick up time',
			})
			return false;
		} else if ( number == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Flight number',
			})
			return false;
		} else if ( message == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your message',
			})
			return false;

		} else if (name != '' && address != '' && email != '' && phone != '' && date != '' && time != '' && number != '' && message!= '') {
			Swal.fire({
				  icon: 'success',
				  title: 'Successfully',
				  text: 'Thank you for getting in touch! We appreciate you contacting us',
				  showConfirmButton: false,
				  timer: 2000
				})
			return true;
		}
	}
</script>
<script type="text/javascript">
	function emailvalid(){
	var mail = document.getElementById('email').value;
	var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

 if (mail.match(pattern )) {
    Swal.fire({
				  icon: 'success',
				  title: 'Successfully',
				  text: 'Thank you for getting in touch! We appreciate you contacting us',
				  showConfirmButton: false,
				  timer: 2000
				})
    			return true;
   } else{
    	alert("Enter valid Mail")
    }

}
</script>


</html>
