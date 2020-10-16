<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DayTrips/Excursions</title>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
	
			
	.first-section{
			
			color:#000000;
			font-size:100%;
			background-color: #F3F3F3;
			width: 100%;
			position: absolute;
			top:120px;
			padding: 30px;
			border-style:solid;
		    border-width:5px;  
		    border-color:#B2BEC3;
		    border-radius: 20px;

			}
	
	.second-section{
			
			color:#F3EFEE;
			font-size:100%;
			width: 50%;
			background-color: #EAF7FA;
			position: absolute;
			top:490px;
			padding: 30px;
			border: solid;
			border-style:solid;
		    border-width:5px;  
		    border-color:#3591B4;
		    border-radius: 20px;
			
		}
		.third-section{
			
			color:#F3EFEE;
			font-size:100%;
			height: 1290px;
			width: 45%;
			position: absolute;
			top:490px;
			padding: 30px;
			border: solid;
			border-style:solid;
		    border-width:5px;  
		    border-color:#3591B4;
		    border-radius: 20px;
		    align-self: right;
		    right: 0px;

			}
			
			
			
		.jt{
			text-align: justify;
		}
	
		#black{

			color:#000000;

		}
		</style>	
</head>
<?php


    
if(isset($_POST['submit']))
{	
	 if(isset($_POST['start'])){
  $start = $_POST['start'];
 
}
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Date = $_POST['Date'];
    $Time = $_POST['Time'];
    $Passenger = $_POST['Passenger'];
    $Tour = $_POST['Tour'];
    $Destination = $_POST['Destination'];
    $Location = $_POST['Location'];


$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";




$connect = mysqli_connect($hostname,$username ,$password,$databaseName);
$query="INSERT INTO daytrip ( fname, lname, email,phone,tour,destination,dates,timess,location,passenger) VALUES ('$fname','$lname','$Email','$Phone','$Tour','$Destination','$Date','$Time','$Location','$Passenger')";

$result = mysqli_query($connect, $query);


    
}



?>
<body>
	<?php include 'header.php' ?>

	    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs" >
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li> Tours/Excursions</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="section-title">
                  <h4>Tours/Excursions </h4>
          </div>

	<div class="container-fluid" style="">
		
	
		<div class="first-section">
		<h3><strong>How its Works:</strong></h3>
	
		
		<p class="text-justify, font-weight-light"> Please see the below available excursions and tours, if you wish to book any of those please complete the booking form duly,We will be very happy to pick you up from your hotel either from Bentota. Induruwa. Aluthgama Beruwala or near by, All our vehicles are air-conditioned and well maintained with regular inspection carried out by qualified engineers, our driver's are fully qualified and speak English.</p>

		
		
	
		<h3><strong>Payment:</strong></h3>
	
		
		<p class="text-justify, font-weight-light">Payment can be made  prior to the departure in LKR, or by Credit / Debit cart or paypal in advance.</p>

	
	
		<h3><strong>Please Note:</strong></h3>
	
		
		<p class="text-justify, font-weight-light">Entrance Fees/Safari Jeep/Boat </p>
		</div>

		<div class="COL-LG-6">
		<div class="second-section">
		<img width="375px" height="200px" src="https://www.srilankalocaltours.com/wp-content/uploads/when-is-the-best-time-to-visit-sri-lanka.jpg" class="img-fluid" alt="Responsive">

		<form method="POST" onsubmit="return validateForm()">
			<div class="form-group">


			<p><input type="text" id="fname"  name="fname" placeholder="First Name" class="form-control"> <br>
			<p><input type="text" id="lname"  name="lname" placeholder="Last Name" class="form-control"></p>
			<p>Gender: 
				<select class="form-control" name="gender">
					<option selected="">Male</option>
					<option>Female</option>
					<option>Other</option>
				</select>


			</p><br>
			<p><input type="text"  id="Email" name="Email" placeholder="Email" class="form-control"><br></p>
			<p><input type="text" id="Phone"  name="Phone" placeholder="Phone" class="form-control"><br></p>
			<p><input type="text"  id="Tour" name="Tour" placeholder="Tour Type" class="form-control"><br></p>
			<p><input type="text"  id="Destination" name="Destination" placeholder="Destination" class="form-control"><br>
			<p><input type="date"  id="Date" name="Date" placeholder="Date (DD/MM/YY)" class="form-control"><br></p>
			<p><input type="text"  id="Time" name="Time" placeholder="Pick Up Time" class="form-control"><br></p>
			<p><input type="text"  id="Location" name="Location" placeholder="Location" class="form-control"><br></p>
			<p><input type="text"  id="Passenger" name="Passenger" placeholder="Number of Passenger(s)" class="form-control"><br></p>
			<p id="black"><strong>Stay Sign in?</strong>
			</p> 
			</div>
			<div class="form-group form-check">

				<input type="checkbox" name=""><br>
			</div>
			
			<input type="submit" name="submit" class="btn btn-primary" value="submit">

			
		

			</form>
		</div>
	</div>

			<div class="COL-LG-6">
			<div class="third-section">
			<div class="table-responsive">
			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Departure From</th>
      <th scope="col">Destination</th>
      <th scope="col">Number of Passengers</th>
      <th scope="col">Fare</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Bentota, Aluthgama, Beruwala, Induruwa</th>
      <td>Yala National Park ( Safari) </td>
      <td>4-6</td>
      <td>£145.00</td>
    </tr>
    <tr>
      <th scope="row">Bentota, Aluthgama, Beruwala, Induruwa</th>
      <td>Sigiriya Rock Fortress</td>
      <td>4-6</td>
      <td>£135.00</td>
    </tr>
    <tr>
      <th scope="row">Bentota,
Aluthgama, Beruwala, Induruwa</th>
      <td>Pinnawala Elephant Orphanage ,Kandy temple of tooth,</td>
      <td>4-6</td>
      <td>£150.00</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Departure From</th>
      <th scope="col">Destination</th>
      <th scope="col">Number of Passengers</th>
      <th scope="col">Fare</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Bentota, Aluthgama, Beruwala, Induruwa</th>
      <td>Pinnawala Elephant Orphanage</td>
      <td>4-6</td>
      <td>£110.00</td>
    </tr>
    <tr>
      <th scope="row">Bentota, Aluthgama, Beruwala, Induruwa</th>
      <td>Galle , Dutch fort, city tour, Mesuem</td>
      <td>4-6</td>
      <td> £60.00</td>
    </tr>
    <tr>
      <th scope="row">Bentota, Aluthgama, Beruwala, Induruwa</th>
      <td>Galle , Dutch fort, city tour, Mesuem</td>
      <td>4-6</td>
      <td> £60.00</td>
    </tr>
    </tbody>

  <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Departure From</th>
      <th scope="col">Destination</th>
      <th scope="col">Number of Passengers</th>
      <th scope="col">Fare</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Bentota, Aluthgama, Beruwala, Induruwa</th>
      <td>Pinnawala Elephant Orphanage</td>
      <td>2-3</td>
      <td>£75.00</td>
    </tr>
    <tr>
      <th scope="row">Bentota, Aluthgama, Beruwala, Induruwa</th>
      <td>Galle , Dutch fort, city tour, Mesuem</td>
      <td>2-3</td>
      <td>£65.00</td>
    </tr>
    <th scope="row">Bentota, Aluthgama, Beruwala, Induruwa</th>
      <td>Galle , Dutch fort, city tour, Mesuem</td>
      <td>4-6</td>
      <td> £60.00</td>
    </tr>
    </tbody>
</table>
				

				
			</div>
		</div>
	</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!--  <script src="js/bootstrap.min.js"></script>	 -->	



</div>	

    <script type="text/javascript">
	function validateForm()
	{

		var fname = document.getElementById('fname').value;
		var lname = document.getElementById('lname').value;
		var Email = document.getElementById('Email').value;
		var Phone = document.getElementById('Phone').value;
		var Dates = document.getElementById('Date').value;
		var Time = document.getElementById('Time').value;
		var Passenger = document.getElementById('Passenger').value;
		var Tour = document.getElementById('Tour').value;
		var Destination = document.getElementById('Destination').value;
		var Location = document.getElementById('Location').value;

		if (fname == '') {
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Please enter your fname',
			})
			return false;
		} else if ( lname == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your lname',
			})
			return false;
		} else if ( Email == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Email',
			})
			return false;
		} else if ( Phone == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Phone',
			})
			return false;
		} else if ( Dates == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Pick up Dates',
			})
		} else if ( Time == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Pick up Time',
			})
			return false;
		} else if ( Passenger == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Flight Passenger',
			})
			return false;
		} else if ( Tour == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Tour',
			})
			return false;
			} else if ( Destination == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Tour',
			})
			return false;
			} else if ( Location == '' ) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please enter your Tour',
			})
			return false;

		} else if (fname != '' && lname != '' && Email != '' && Phone != '' && Dates != '' && Time != '' && Passenger != '' && Tour!= '' && Destination!= '' && Location!= '') {
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

</body>
</html>