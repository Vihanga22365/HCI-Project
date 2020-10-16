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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	<style type="text/css">
		body{


}
	</style>
</head>
<body>

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Confirm</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="section-title" style="margin-top: 3%;">
                  <h2>Confirm Booking</h2>
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
  ?>

<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 800 600">
          <g>
            <defs>
              <clipPath id="GlassClip">
                <path
                  d="M380.857,346.164c-1.247,4.651-4.668,8.421-9.196,10.06c-9.332,3.377-26.2,7.817-42.301,3.5
                s-28.485-16.599-34.877-24.192c-3.101-3.684-4.177-8.66-2.93-13.311l7.453-27.798c0.756-2.82,3.181-4.868,6.088-5.13
                c6.755-0.61,20.546-0.608,41.785,5.087s33.181,12.591,38.725,16.498c2.387,1.682,3.461,4.668,2.705,7.488L380.857,346.164z" />
              </clipPath>
              <clipPath id="cordClip">
                <rect width="800" height="600" />
              </clipPath>
            </defs>

            <g id="planet">
              <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-miterlimit="10" cx="572.859" cy="108.803"
                r="90.788" />

              <circle id="craterBig" fill="none" stroke="#0E0620" stroke-width="3" stroke-miterlimit="10" cx="548.891"
                cy="62.319" r="13.074" />

              <circle id="craterSmall" fill="none" stroke="#0E0620" stroke-width="3" stroke-miterlimit="10" cx="591.743"
                cy="158.918" r="7.989" />
              <path id="ring" fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round"
                stroke-miterlimit="10" d="
      M476.562,101.461c-30.404,2.164-49.691,4.221-49.691,8.007c0,6.853,63.166,12.408,141.085,12.408s141.085-5.555,141.085-12.408
      c0-3.378-15.347-4.988-40.243-7.225" />

              <path id="ringShadow" opacity="0.5" fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round"
                stroke-miterlimit="10" d="
      M483.985,127.43c23.462,1.531,52.515,2.436,83.972,2.436c36.069,0,68.978-1.19,93.922-3.149" />
            </g>
            <g id="stars">
              <g id="starsBig">
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="518.07" y1="245.375" x2="518.07" y2="266.581" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="508.129" y1="255.978" x2="528.01" y2="255.978" />
                </g>
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="154.55" y1="231.391" x2="154.55" y2="252.598" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="144.609" y1="241.995" x2="164.49" y2="241.995" />
                </g>
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="320.135" y1="132.746" x2="320.135" y2="153.952" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="310.194" y1="143.349" x2="330.075" y2="143.349" />
                </g>
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="200.67" y1="483.11" x2="200.67" y2="504.316" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="210.611" y1="493.713" x2="190.73" y2="493.713" />
                </g>
              </g>
              <g id="starsSmall">
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="432.173" y1="380.52" x2="432.173" y2="391.83" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="426.871" y1="386.175" x2="437.474" y2="386.175" />
                </g>
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="489.555" y1="299.765" x2="489.555" y2="308.124" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="485.636" y1="303.945" x2="493.473" y2="303.945" />
                </g>
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="231.468" y1="291.009" x2="231.468" y2="299.369" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="227.55" y1="295.189" x2="235.387" y2="295.189" />
                </g>
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="244.032" y1="547.539" x2="244.032" y2="555.898" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="247.95" y1="551.719" x2="240.113" y2="551.719" />
                </g>
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="186.359" y1="406.967" x2="186.359" y2="415.326" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="190.277" y1="411.146" x2="182.44" y2="411.146" />
                </g>
                <g>

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="480.296" y1="406.967" x2="480.296" y2="415.326" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                    x1="484.215" y1="411.146" x2="476.378" y2="411.146" />
                </g>
              </g>
              <g id="circlesBig">

                <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                  cx="588.977" cy="255.978" r="7.952" />

                <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                  cx="450.066" cy="320.259" r="7.952" />

                <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                  cx="168.303" cy="353.753" r="7.952" />

                <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                  cx="429.522" cy="201.185" r="7.952" />

                <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                  cx="200.67" cy="176.313" r="7.952" />

                <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                  cx="133.343" cy="477.014" r="7.952" />

                <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                  cx="283.521" cy="568.033" r="7.952" />

                <circle fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-miterlimit="10"
                  cx="413.618" cy="482.387" r="7.952" />
              </g>
              <g id="circlesSmall">
                <circle fill="#0E0620" cx="549.879" cy="296.402" r="2.651" />
                <circle fill="#0E0620" cx="253.29" cy="229.24" r="2.651" />
                <circle fill="#0E0620" cx="434.824" cy="263.931" r="2.651" />
                <circle fill="#0E0620" cx="183.708" cy="544.176" r="2.651" />
                <circle fill="#0E0620" cx="382.515" cy="530.923" r="2.651" />
                <circle fill="#0E0620" cx="130.693" cy="305.608" r="2.651" />
                <circle fill="#0E0620" cx="480.296" cy="477.014" r="2.651" />
              </g>
            </g>
            <g id="spaceman" clip-path="url(cordClip)">
              <path id="cord" fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" stroke-miterlimit="10"
                d="
      M273.813,410.969c0,0-54.527,39.501-115.34,38.218c-2.28-0.048-4.926-0.241-7.841-0.548
      c-68.038-7.178-134.288-43.963-167.33-103.87c-0.908-1.646-1.793-3.3-2.654-4.964c-18.395-35.511-37.259-83.385-32.075-118.817" />

              <path id="backpack" fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" stroke-miterlimit="10" d="
      M338.164,454.689l-64.726-17.353c-11.086-2.972-17.664-14.369-14.692-25.455l15.694-58.537
      c3.889-14.504,18.799-23.11,33.303-19.221l52.349,14.035c14.504,3.889,23.11,18.799,19.221,33.303l-15.694,58.537
      C360.647,451.083,349.251,457.661,338.164,454.689z" />
              <g id="antenna">
                <line fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" x1="323.396" y1="236.625" x2="295.285" y2="353.753" />
                <circle fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" cx="323.666" cy="235.617" r="6.375" />
              </g>
              <g id="armR">

                <path fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" d="
        M360.633,363.039c1.352,1.061,4.91,5.056,5.824,6.634l27.874,47.634c3.855,6.649,1.59,15.164-5.059,19.02l0,0
        c-6.649,3.855-15.164,1.59-19.02-5.059l-5.603-9.663" />

                <path fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" d="
        M388.762,434.677c5.234-3.039,7.731-8.966,6.678-14.594c2.344,1.343,4.383,3.289,5.837,5.793
        c4.411,7.596,1.829,17.33-5.767,21.741c-7.596,4.411-17.33,1.829-21.741-5.767c-1.754-3.021-2.817-5.818-2.484-9.046
        C375.625,437.355,383.087,437.973,388.762,434.677z" />
              </g>
              <g id="armL">

                <path fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" d="
        M301.301,347.66c-1.702,0.242-5.91,1.627-7.492,2.536l-47.965,27.301c-6.664,3.829-8.963,12.335-5.134,18.999h0
        c3.829,6.664,12.335,8.963,18.999,5.134l9.685-5.564" />

                <path fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" d="
        M241.978,395.324c-3.012-5.25-2.209-11.631,1.518-15.977c-2.701-0.009-5.44,0.656-7.952,2.096
        c-7.619,4.371-10.253,14.09-5.883,21.71c4.371,7.619,14.09,10.253,21.709,5.883c3.03-1.738,5.35-3.628,6.676-6.59
        C252.013,404.214,245.243,401.017,241.978,395.324z" />
              </g>
              <g id="body">

                <path fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" d="
        M353.351,365.387c-7.948,1.263-16.249,0.929-24.48-1.278c-8.232-2.207-15.586-6.07-21.836-11.14
        c-17.004,4.207-31.269,17.289-36.128,35.411l-1.374,5.123c-7.112,26.525,8.617,53.791,35.13,60.899l0,0
        c26.513,7.108,53.771-8.632,60.883-35.158l1.374-5.123C371.778,395.999,365.971,377.536,353.351,365.387z" />
                <path fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" d="
        M269.678,394.912L269.678,394.912c26.3,20.643,59.654,29.585,93.106,25.724l2.419-0.114" />
              </g>
              <g id="legs">
                <g id="legR">

                  <path fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" d="
          M312.957,456.734l-14.315,53.395c-1.896,7.07,2.299,14.338,9.37,16.234l0,0c7.07,1.896,14.338-2.299,16.234-9.37l17.838-66.534
          C333.451,455.886,323.526,457.387,312.957,456.734z" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" x1="304.883" y1="486.849" x2="330.487" y2="493.713" />
                </g>
                <g id="legL">

                  <path fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" d="
          M296.315,452.273L282,505.667c-1.896,7.07-9.164,11.265-16.234,9.37l0,0c-7.07-1.896-11.265-9.164-9.37-16.234l17.838-66.534
          C278.993,441.286,286.836,447.55,296.315,452.273z" />

                  <line fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" x1="262.638" y1="475.522" x2="288.241" y2="482.387" />
                </g>
              </g>
              <g id="head">

                <ellipse transform="matrix(0.259 -0.9659 0.9659 0.259 -51.5445 563.2371)" fill="#FFFFFF"
                  stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" cx="341.295" cy="315.211" rx="61.961" ry="60.305" />
                <path id="headStripe" fill="none" stroke="#0E0620" stroke-width="3" stroke-linecap="round"
                  stroke-linejoin="round" stroke-miterlimit="10" d="
        M330.868,261.338c-7.929,1.72-15.381,5.246-21.799,10.246" />

                <path fill="#FFFFFF" stroke="#0E0620" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                  stroke-miterlimit="10" d="
        M380.857,346.164c-1.247,4.651-4.668,8.421-9.196,10.06c-9.332,3.377-26.2,7.817-42.301,3.5s-28.485-16.599-34.877-24.192
        c-3.101-3.684-4.177-8.66-2.93-13.311l7.453-27.798c0.756-2.82,3.181-4.868,6.088-5.13c6.755-0.61,20.546-0.608,41.785,5.087
        s33.181,12.591,38.725,16.498c2.387,1.682,3.461,4.668,2.705,7.488L380.857,346.164z" />
                <g clip-path="url(#GlassClip)">
                  <polygon id="glassShine" fill="none" stroke="#0E0620" stroke-width="3" stroke-miterlimit="10" points="
          278.436,375.599 383.003,264.076 364.393,251.618 264.807,364.928         " />
                </g>
              </g>
            </g>
          </g>
        </svg>
      </div>
      <div class="col-md-6 align-self-center">
        <h1>404</h1>
        <h2>UH OH! You're lost.</h2>
        <p>There is no matching transport mode in selected Date..please select 
          other transport mode or othere date to continue..
        </p>
        
      </div>
    </div>
  </div>
</main>
<?php
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
   		<a href="payment.php" class="btn btn-primary">Book Now</a>
   	</div>
   		<div id="delayMsg" class="col-lg-2" style="margin-top: 25px;">

       		 <input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" onclick="delayRedirect();"> 
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

    <form action="insert.php" method="post" id="for">           
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
   		<a href="payment.php" class="btn btn-primary">Book Now</a>
   	</div>
   		<div class="col-lg-2" id="delayMsg">
   		<input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" onclick="delayRedirect();"> 
   	</div>
   	


</div>
</div>

</div>
</form>


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

     <form action="insert.php" method="post" id="for">                 
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
   		<a href="payment.php" class="btn btn-primary">Book Now</a>
   	</div>
   		<div class="col-lg-2">
   		<input type="submit" name="submit" class="btn btn-primary" value="Add To Cart" onclick="delayRedirect();"> 
   	</div>
   	

   	

   	
    	 
                       
         
                    
                   
                 


   
  </div>

  </div>
    
</div>

</form>



 <?php  }}?>

<div class="row" style="margin-top: 20px;">
	<div style="margin-left:20px;"></div>
 	<a href="date.php" class="btn btn-primary"> back</a>
 </div>
<script type="text/javascript">
  function abc()
  {

 
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Please enter the Date',
      })
     
    }
    
  
  </script> 

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