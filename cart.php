<!DOCTYPE html>
<?php





$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";



$connect = mysqli_connect($hostname,$username ,$password,$databaseName);
$query = "SELECT * FROM cart";

$result = mysqli_query($connect, $query);


?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

  <div class="row">
      <img src="img/kandy.png" style="width: 1500px; height: 300px;">
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
   			<div class="col-lg-10" style="margin-top: 2px;">
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
   		<a href="#" class="btn btn-outline-primary">Book Now</a>
   	</div>
   		<div id="delayMsg" class="col-lg-2" style="margin-top: 25px;">
   			
       		 <input type="submit" name="submit" class="btn btn-danger" value="Add To Cart" onclick="delayRedirect();"> 
   	</div>
   	

   	

   	
    	                    
        
                    
                   
                     


   
  </div>
  </div>

</div>
</form>
 <?php }
  ?>

</body>
</html>