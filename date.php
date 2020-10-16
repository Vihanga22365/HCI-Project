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
		<form  method="post" action="select.php">
	



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
 
 		<input type="date" id="date" name="date" class="form-control">
       		
       	</div>
       	


       </div> 
      
    <br>
    <br>
       <div class="row" style="margin-bottom: 15px;">
       	<div class="col-lg-9 col-sm-9" style="margin-left: 15px">
          <a href="mode.php" class="btn btn-primary"> Back</a>
       	</div>
       	<div class="col-lg-2 col-sm-2">
       		 <input type="submit" name="submit" class="btn btn-primary" value="Next" onclick="validateForm()"> 
       	</div>

       </div>
    
  
  
   

 
  </form>
  
    </div>
</div>
</body>
<script type="text/javascript">
	function validateForm()
	{

		var name = document.getElementById('name').value;
	

		if (name == '') {
			Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Name eka dapan....',
			})
	
		} else if (name != '' && address != '') {
			Swal.fire({
				  icon: 'success',
				  title: 'Successfully Submit',
				  showConfirmButton: false,
				  timer: 1500
				})
		}
	}
</script>
<?php include'footer.php'; ?>
</html>