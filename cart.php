<!DOCTYPE html>
<?php





$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";



$connect = mysqli_connect($hostname,$username ,$password,$databaseName);
$query = "SELECT * FROM cart";

$result = mysqli_query($connect, $query);
include'header.php';


?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

 
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Cart</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="section-title" style="margin-top: 3%;">
                  <h2>Cart</h2>
    </div>



<?php 

if(mysqli_num_rows($result)>0){
  while ($row =mysqli_fetch_assoc($result)) {
  	$id[]=$row['id'];
   $s_time[]=$row['start'];
   $re1[]=$row['t_id'];
   $e_time[]=$row['ends'];
    # code...
  }
}else{
	echo "not found";
}

?>
<?php 
                        for($i=0;$i<count($re1);$i++) {

                         
          
                        ?>

<form method="post" id="for">
                        	
                        

                        
<div class="card" style="margin-top: 5%; border-color: #000387; border-width: 2px;">
  <h5 class="card-header" style="background-color: #000387; "> <?php $nm=$re1[$i]; echo '<span style="color:#AFA;">Train :  '.$nm.'</span>'; $_SESSION['nm']=$nm; ?> </h5>
  <div class="card-body" style="background-color: #C2FDD1;">
    
    
   <div class="row">
   	<div class="col-lg-1">
   		<img src="img/train.png" style="width: 50px;">
   		
   	</div>
   	<div class="col-lg-1">
   		<?php $stm=$s_time[$i];

   			echo  $stm;  ?>
   		
   	</div>
   	<div class="col-lg-2">
   		<img src="img/arrow.png" style="width: 100px;">
   	</div>
   	<div class="col-lg-1">
   		<?php
   			$etm=$e_time[$i];

   			 echo  $etm; ?>
   		
   	</div>

   	<div class="col-lg-2">
   		<h5>Number of Passenger</h5>
   		<div class="row">
   			<div class="col-lg-1"></div>
   			<div class="col-lg-11">
   			<select class="browser-default custom-select" name="pas">
   				<option>1</option>
   				<option>2</option>
   				<option>3</option>
   				<option>4</option>
   				<option>5</option>
   			</select>
   		</div>
   		</div>
   		
   	</div>
   	<div class="col-lg-1">
   		<h5>Class</h5>
   		<div class="row">
   			<div class="col-lg-2"></div>
   			<div class="col-lg-10" style="margin-top: 25px;">
   			<select class="browser-default custom-select" name="cls">
   				<option>1st</option>
   				<option>2bd</option>
   				<option>3rd</option>
   				<option>4th</option>
   				<option>5th</option>
   			</select>
   		</div>
   		</div>
   		
   	</div>
   	<div class="col-lg-2" style="margin-top: 25px;">
   		<a href="#" class="btn btn-primary">Book Now</a>
   	</div>
   		<div id="delayMsg" class="col-lg-2" style="margin-top: 25px;">
   			
       		 <input type="submit" name="submit" class="btn btn-danger" value="Remove"> 
   	</div>
   	

   	

   	
    	                    
        
                    
                   
                     


   
  </div>
  </div>

</div>

</form>

 <?php }
  ?>
<div>
  <a href="mode.php" class="btn btn-primary" style="margin-bottom: 5%; margin-top: 2%; margin-left: 1%;"> back</a>
</div>
</body>
<?php include'footer.php'; ?>
</html>