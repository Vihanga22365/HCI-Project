<!DOCTYPE html>
<?php
session_start();
if (!empty($_POST)) {
  if ($_POST['start'] != '') {
    $st= $_POST['start'];
    $_SESSION['st'] = $st;
  }
}


  $st = $_SESSION['st'];


  if (!empty($_POST)) {
  if ($_POST['end'] != '') {
    $ed= $_POST['end'];
    $_SESSION['ed'] = $ed;
  }
}


  $ed = $_SESSION['ed'];

   if (!empty($_POST)) {
  if ($_POST['date'] != '') {
    $date= $_POST['date'];
    $_SESSION['date'] = $date;
  }
}


  $date = $_SESSION['date'];
include'header.php';
// $st= $_POST['start'];
// $ed= $_POST['end'];
// $date= $_POST['date'];
$mds=$_SESSION['md'];
$_SESSION['md'] = $mds ;
$s_time=array();
$e_time=array();
$re1=array();
$st_time=array();
$ed_time=array();
$re2=array();
$re3=array();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<style type="text/css">
		body{
  width: 100%;
  height: 100%;
  background-color: #DCF2F2;

}
	</style>
</head>
<body>

   <div class="row">
      <img src="img/tr.png" style="width: 1500px;">
    </div>
    <div class="row" style="margin-top: 15px;">
    <div class="col-lg-4"></div>
    <div class="col-lg-2">
    	<i class="fa fa-map-marker"></i><?php echo "  ". $st. "  To  ".$ed; ?>
    </div>
    <div class="col-lg-6">
    	<i class="fa fa-calendar"></i> <?php echo "   ".$date;?>
    </div>

    
    
	
</div>
<div class="row">


</div>
	

<?php


$hostname ="localhost";
$username ="root";
$password = "";
$databaseName= "booking";



$connect = mysqli_connect($hostname,$username ,$password,$databaseName);

$query = "SELECT * FROM $mds where start='$st' && ends='$ed' && dates='$date' " ;
$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query);
$result3 = mysqli_query($connect, $query);







 $pas='';
  $cls='';
  $nm='';
  if(isset($_POST['pas'])){
  $pas = $_POST['pas'];
 
}
if(isset($_POST['cls'])){
  $cls =$_POST['cls'];
}

$_SESSION['st'] = $st;
$_SESSION['ed'] = $ed;
$_POST['pas']= $pas;
$_POST['cls']=$cls;








if($mds =='Train'){
	





if(mysqli_num_rows($result1)>0){
  while ($row =mysqli_fetch_assoc($result1)) {
   $s_time[]=$row['s_time'];
   $re1[]=$row['name'];
   $e_time[]=$row['e_time'];
    # code...
  }
}else{
	echo "not found";
}

?>
<?php 
                        for($i=0;$i<count($re1);$i++) {

                         
          
                        ?>

<form action="insert.php" method="post" id="for">
                        	
                        

                        
<div class="card" style="margin-top: 5%; border-color: #000387; border-width: 2px;">
  <h5 class="card-header" style="background-color: #000387; "> <?php $nm=$re1[$i]; echo '<span style="color:#AFA;">Train :  '.$nm.'</span>'; $_SESSION['nm']=$nm; ?> </h5>
  <div class="card-body" style="background-color: #C2FDD1;">
    
    
   <div class="row">
   	<div class="col-lg-1">
   		<img src="img/train.png" style="width: 50px;">
   		
   	</div>
   	<div class="col-lg-1">
   		<?php echo $st; ?>
   		<div class="row">
   			<div class="col-lg-2"></div>
   			<div class="col-lg-10">
   			<?php 
   			$stm=$s_time[$i];

   			echo  $stm; ?>
   			</div>
   		</div>
   		
   	</div>
   	<div class="col-lg-2">
   		<img src="img/arrow.png" style="width: 100px;">
   	</div>
   	<div class="col-lg-1">
   		<?php echo $ed; ?>
   		<div class="row">
   			<div class="col-lg-2"></div>
   			<div class="col-lg-10">

   			<?php
   			$etm=$e_time[$i];

   			 echo  $etm; ?>
   			</div>
   		</div>
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
   		<a href="#" class="btn btn-outline-primary">Book Now</a>
   	</div>
   		<div id="delayMsg" class="col-lg-2" style="margin-top: 25px;">

       		 <input type="submit" name="submit" class="btn btn-outline-primary" value="Add To Cart" onclick="delayRedirect();"> 
   	</div>
   	

   	

   	
    	                    
        
                    
                   
                     


   
  </div>
  </div>

</div>
</form>
 <?php }
 }elseif($mds=='Bus'){
 if(mysqli_num_rows($result2)>0){
  while ($row =mysqli_fetch_assoc($result2)) {
   $st_time[]=$row['s_time'];
   $re2[]=$row['id'];
   $ed_time[]=$row['e_time'];
    # code...
  }
}else{
	echo "not found";
}
    for($i=0;$i<count($re2);$i++) {
  

?>

               
<div class="card">
  <h5 class="card-header "  style="background-color: #EDF685"> <?php echo "Bus ID . ". $re2[$i]; ?> </h5>
  <div class="card-body">
    
    
   <div class="row">
   	<div class="col-lg-1">
   		<img src="img/bus.png" style="width: 50px;">
   		
   	</div>
   	<div class="col-lg-1">
   		<?php echo $st; ?>
   		<div class="row">
   			<?php echo  $st_time[$i] ?>
   			
   		</div>
   		
   	</div>
   	<div class="col-lg-2">
   		<img src="img/arrow.png" style="width: 100px;">
   	</div>
   	<div class="col-lg-2">
   		<?php echo $ed; ?>
   		<div class="row">
   			<?php echo  $ed_time[$i] ?>
   			
   		</div>
   	</div>

   	<div class="col-lg-2">
   		<h5>Number of Passenger</h5>
   		<div class="row">
   			<select>
   				<option>1</option>
   				<option>2</option>
   				<option>3</option>
   				<option>4</option>
   				<option>5</option>
   			</select>
   		</div>
   		
   	</div>
 
   	<div class="col-lg-2">
   		<a href="#" class="btn btn-outline-primary">Book Now</a>
   	</div>
   		<div class="col-lg-2" id="delayMsg">
   		<a href="#" class="btn btn-outline-secondary" name="cart"> Add Cart</a>
   	</div>
   	


</div>
</div>




  <?php }

}elseif($mds=='Van'){




if(mysqli_num_rows($result3)>0){
  while ($row =mysqli_fetch_assoc($result3)) {
   $re3[]=$row['id'];
    # code...
  }
}else{
	echo "not found";
}

for($i=0;$i<count($re3);$i++) {


	?>

                      
<div class="card">
  <h5 class="card-header "  style="background-color: #EDF685"> <?php echo "Taxt ID . ". $re3[$i]; ?> </h5>
  <div class="card-body">
    
    
   <div class="row">
   	<div class="col-lg-1">
   		<img src="img/taxi.png" style="width: 50px;">
   		
   	</div>
   	<div class="col-lg-1">
   		<?php echo $st; ?>
   		
   		
   	</div>
   	<div class="col-lg-2">
   		<img src="img/arrow.png" style="width: 100px;">
   	</div>
   	<div class="col-lg-2">
   		<?php echo $ed; ?>
   		
   	</div>

   	<div class="col-lg-2">
   		<h5>Number of Passenger</h5>
   		<div class="row">
   			<select>
   				<option>1</option>
   				<option>2</option>
   				<option>3</option>
   				<option>4</option>
   				<option>5</option>
   			</select>
   		</div>
   		
   	</div>


 
   	<div class="col-lg-2">
   		<a href="#" class="btn btn-outline-primary">Book Now</a>
   	</div>
   		<div class="col-lg-2">
   		<a href="#" class="btn btn-outline-secondary"> Add Cart</a>
   	</div>
   	

   	

   	
    	 
                       
         
                    
                   
                 


   
  </div>

  </div>
    
</div>




 <?php  }}?>

<div class="row" style="margin-top: 20px;">
	<div style="margin-left:20px;"></div>
 	<a href="date.php" class="btn btn-outline-primary"> back</a>
 </div>


</body>
<script type="text/javascript">

function delayRedirect(){

    document.getElementById('delayMsg').innerHTML = 'Please wait <span id="countDown">2 </span>........';
    var count = 2;
    	Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Add Cart successfuly!',
  showConfirmButton: false,
  timer: 2000
})


    setInterval(function(){
        count--;
        document.getElementById('countDown').innerHTML = count;
        if (count == 0) {
            window.location = 'insert.php'; 
        }
    },1000);

}

// 		function validateForm()
// 	{
// 		Swal.fire({
//   position: 'top-end',
//   icon: 'success',
//   title: 'Your work has been saved',
//   showConfirmButton: false,
//   timer: 1000
// })
// 	}


</script>
<?php include'footer.php'; ?>
</html>