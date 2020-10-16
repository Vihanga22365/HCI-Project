<!DOCTYPE html>
<?php 
include'header.php';
session_start();


if (!empty($_POST)) {
  if ($_POST['mode'] != '') {
    $md= $_POST['mode'];
    $_SESSION['md'] = $md;
  }
}


  $md = $_SESSION['md'];



$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";
$str = array();
$ends=array();


$connect = mysqli_connect($hostname,$username ,$password,$databaseName);

$query = "SELECT * FROM $md";
$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query);

if(mysqli_num_rows($result1)>0){
  while ($row =mysqli_fetch_assoc($result1)) {
    $str[]=$row['start'];
    # code...
  }
}
if(mysqli_num_rows($result2)>0){
  while ($row =mysqli_fetch_assoc($result2)) {
    $ends[]=$row['ends'];
    # code...
  }
}
$strt= array_unique($str);
$ed=array_unique($ends);


 ?>

<html>
<head>
<!-- 	<link rel="stylesheet" type="text/css" href="booking.css">
 -->	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> -->
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<style type="text/css">

body{

}

	
</style>
<body>
    

  <?php
  $start='';
  $end='';
  $date='';
  if(isset($_POST['start'])){
  $start = $_POST['start'];
 
}
if(isset($_POST['end'])){
  $end =$_POST['end'];
}
if(isset($_POST['date'])){
  $date =$_POST['date'];
}


$_POST['start']= $start;
$_POST['end']=$end;
$_POST['date']=$date;

  ?>
     <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Destination</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="section-title" style="margin-top: 3%;">
                  <h2>Destination and Date</h2>
    </div>
	
	<div class="container">
		<div class="card" style="margin-bottom: 5%; background-color: #C2FDD1; border-color: #000387; border-width: 5px;">
		<form  method="post" action="select.php" onsubmit="return validateForm()">
	



       <div class="row" style="margin-top: 10%;">
        <div class="col-lg-1">
          <h5 style="margin-left: 5px;">From</h5>
          
        </div>
       	<div class="col-lg-3">
       	
       <select class="browser-default custom-select" name="start">
                        <?php 
                        foreach ($strt as $key) {
          
                        ?>
                        <option><?php echo $key; ?> </option>
                      <?php } ?>
       </select> 

       	</div>
        <div class="col-lg-1">
          <h5>To</h5>
          
        </div>
       	<div class="col-lg-3">
       		 
		<select class="browser-default custom-select" name="end">
                     <?php 
                        foreach ($ed as $key1) {
          
                        ?>
                        <option><?php echo $key1; ?> </option>
                      <?php } ?>
                     
        </select> 
       		
       	</div>
       	<div class="col-lg-4">
        <input type="text" name="date" id="date" class="form-control">


 


       	</div>
       	


       </div> 
      
    <br>
    <br>
       <div class="row" style="margin-bottom: 15px;">
       	<div class="col-lg-9 col-sm-9" style="margin-left: 15px">
          <a href="mode.php" class="btn btn-primary"> Back</a>
       	</div>
       	<div class="col-lg-2 col-sm-2">
       		 <input type="submit" name="submit" class="btn btn-primary" value="Next" > 
       	</div>

       </div>
    
  
  
   

 
  </form>
  
    </div>
</div>
<script type="text/javascript">
  function validateForm()
  {

    var date = document.getElementById('date').value;

    if (date == '') {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please enter the Date',
      })
      return false;
    }
    else{
      return true;
    }
  }
  </script> 

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Taxi Booking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="place_to_visit.php">Place To Visit</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="CoachTicket.php">Coach Tour</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="terms.php">Terms & Conditions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="privacy.php">Privacy Policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
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


</html>