<!DOCTYPE html>
	<?php
  include'header.php';
	$mode='';
	if(isset($_POST['mode'])){
	$mode = $_POST['mode'];
 
}

$_POST['mode']= $mode;

	?>
<html>
<head>
<!-- 	<link rel="stylesheet" type="text/css" href="booking.css">
 -->	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- <script src="https://kit.fontawesome.com/b99e675b6e.js"></script> -->
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

</head>
<style type="text/css">


.option_item {
  display: block;
  position: relative;
  width: 175px;
  height: 175px;
  margin: 10px;
}

 .option_item .checkbox {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  opacity: 0;
}

.option_item .option_inner {
  width: 100%;
  height: 100%;
  background: #C2FDD1;
  border-radius: 5px;
  text-align: center;
  padding: 58px 40px;
  cursor: pointer;
  color: #585c68;
  display: block;
  border: 5px solid transparent;
  position: relative;
}

.option_item .option_inner .icon {
  margin-bottom: 10px;
}

.option_item .option_inner .icon .fab {
  font-size: 32px;
}

.option_item .option_inner .name {
  user-select: none;
}


.option_item .checkbox:checked ~ .option_inner.linkedin {
  border-color: #000387;
  color: #000387;
}

.option_item .checkbox:checked ~ .option_inner.whatsapp {
   border-color: #000387;
  color: #000387;
}

.option_item .checkbox:checked ~ .option_inner.google {
  border-color: #000387;
  color: #000387;
}







.option_item .option_inner .tickmark {
  position: absolute;
  top: 0;
  left: 0;
  border: 20px solid;
  border-color: #000 transparent transparent #000;
  display: none;
}

.option_item .option_inner .tickmark:before {
  content: "";
  position: absolute;
  top: -18px;
  left: -18px;
  width: 15px;
  height: 5px;
  border: 3px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
}

.option_item .checkbox:checked ~ .option_inner .tickmark {
  display: block;
}


.option_item .option_inner.linkedin .tickmark {
  border-color: #000387 transparent transparent #000387;
}

.option_item .option_inner.whatsapp .tickmark {
 border-color: #000387 transparent transparent #000387;
}

.option_item .option_inner.google .tickmark {
 border-color: #000387 transparent transparent #000387;
}



body{
  width: 100%;
  height: 100%;

}

</style>
<body>

      <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Mode</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <div class="section-title" style="margin-top: 3%;">
                  <h2>Mode Of Transport </h2>
    </div>
 
  

      

  <div class="container">
    <div class="card" style="background-color: #C2FDD1; border-color: #000387; border-width: 5px; margin-bottom: 5%;">
    <form  name="form" action="date.php"  method="post" onsubmit="return validateForm()">

  <h1 style="text-align: center; color: #000387;"></h1>



       <div class="row" style="margin-top:10%;">
        <div class="col-lg-4">
          <label class="option_item">
      <input type=radio class="checkbox" name="mode" id="train" value="Train" >
      <div class="option_inner linkedin">
        <div class="tickmark"></div>
        <div class="icon"><i class="fas fa-subway fa-4x" ></i></div>
        <div class="name">Train</div>
      </div>
    </label>
          

        </div>
        <div class="col-lg-4">
            <label class="option_item">
<input type=radio class="checkbox" name="mode" id="bus" value="Bus" >
      <div class="option_inner whatsapp">
        <div class="tickmark"></div>
        <div class="icon"><i class="fas fa-bus fa-4x"></i></div>
        <div class="name">Bus</div>
      </div>
    </label>
          
          
        </div>
        <div class="col-lg-4">
           <label class="option_item">
<input type=radio class="checkbox" name="mode" id="taxi" value="Van">
      <div class="option_inner google">
        <div class="tickmark"></div>
        <div class="icon"><i class="fas fa-shuttle-van fa-4x"></i></div>
        <div class="name">Taxi</div>
      </div>
    </label>
 
          
        </div>
        


       </div> 
       <div class="row" style="margin-bottom: 15px;">
        <div class="col-lg-11">
        </div>
        <div class="col-lg-1">
           <input type="submit" name="submit" class="btn btn-primary" value="Next" > 
        </div>

       </div>
    
  
  
   

 
  </form>
  
    </div>
</div>

      
 

  </main>
  <!-- End #main -->

</body>
<script type="text/javascript">
	function validateForm()
	{

		var valid = false;
    var x = document.form.mode;
     for(var i=0; i<x.length; i++){
      if(x[i].checked){
        valid = true;
        break;
      }


     }
     if(valid){
      return true;
     }
     else{
   alert("select");

            return false;
    }
}
	// 	if (name == '') {
	// 		Swal.fire({
	// 		  icon: 'error',
	// 		  title: 'Oops...',
	// 		  text: 'Name eka dapan....',
	// 		})
	// 	} else if ( address == '' ) {
	// 		Swal.fire({
	// 			icon: 'error',
	// 			title: 'Oops...',
	// 			text: 'Address eka dapan....',
	// 		})
	// 	} else if (name != '' && address != '') {
	// 		Swal.fire({
	// 			  icon: 'success',
	// 			  title: 'Successfully Submit',
	// 			  showConfirmButton: false,
	// 			  timer: 1500
	// 			})
	// 	}
	// }
</script>
<?php include'footer.php'; ?>
</html>