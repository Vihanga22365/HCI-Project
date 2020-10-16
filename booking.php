<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Taxi Booking</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.css">
    <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></link>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<style type="text/css">
  
 
.c-body{
  margin-top: 20px;
  min-height: 96px;
  background-color: #080167;
  text-align: center;
  display: flex;
  align-items: center;
  color: #fff;
  justify-content: center;
}

.c-title{
  text-align: center; 
  line-height: 1.33;
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
}

.row{

    display: flex;
    flex-wrap: wrap;
    max-width: 200%;
}

#secondary img, article img, figure, img, img.wp-post-image {
    max-width: 100%;
    height: auto;
}

.img{
    
    vertical-align: middle;
    border-style: none;
}

.h1, .h2, .h3, .h4, .h5, .h6{
    font-family: "Montserrat", sans-serif;
    margin-bottom: .5rem;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
    margin-top: 0;

}

.h1{
    font-size: 32px;
    color: #37517e;
    font-weight: bold;
}

.p{
    margin-top: 0;
    margin-bottom: 0rem;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    text-align: justify;
    
}

.btn-primary{
      font-size: 15px;
      font-weight: 700;
      padding: 10px 25px;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: .05rem;
      transition: all .2s;
      text-decoration: none;
      cursor: pointer;
      border: 0;
      margin-top: auto; 
      margin-bottom: auto;
      overflow: visible; 
      
    }

.center-col {
    margin: auto;
}

.text-center {
    text-align: center!important;
}   

.row-eq-height{
  display: flex!important;
} 

.card-title{
    text-align: left; 
    line-height: 1.33;
    color: #37517e; 
    font-family: "Montserrat", sans-serif;

}

#card-subtitle{
    text-align: left;
    font-family: "Montserrat", sans-serif;
    color: #197BD2; 
}

.card-text{
    margin: auto 10px!important; 
    font-size: 15px!important; 
    text-align: justify;
    
} 

/* Check if the screen size is at least 600px */ 
        @media only screen and (max-width: 600px) { 
            .header-img { 
                display: none; 
            } 
        } 

/* Check if the screen size is at least 600px */ 
        @media only screen and (max-width: 600px) { 
            .v-img{ 
                display: none; 
            } 
        }       

/* Check if the screen size is at least 600px */ 
        @media only screen and (max-width: 800px) { 
            .header-img { 
                display: none; 
            } 
        } 

/* Check if the screen size is at least 800px */ 
        @media only screen and (max-width: 800px) { 
            .v-img{ 
                display: none; 
            } 
        }       

/* Check if the screen size is at least 600px */ 
        @media only screen and (max-width: 600px) { 
            .img { 
                display: none; 
            } 
        } 

/* Check if the screen size is at least 800px */ 
        @media only screen and (max-width: 800px) { 
            .details{ 
                display: none; 
            } 
        }       

/* Check if the screen size is at least 600px */ 
        @media only screen and (max-width: 600px) { 
            .details{ 
                display: none; 
            } 
        }  

/* Check if the screen size is at least 900px */ 
        @media only screen and (max-width: 900px) { 
            .details{ 
                display: none; 
            } 
        }

/* Check if the screen size is at least 1000px */ 
        @media only screen and (max-width: 1000px) { 
            .details{ 
                display: none; 
            } 
        }                           

.section-title {
    text-align: center;
    padding-bottom: 30px;
}

.section-title h2 {
    font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
    color: #37517e;
}




</style>
<?php include('header.php'); ?>
</head>

<body>
    

        <section class="section" >
                <div class="card" style="border: none; width: auto;">
                  <div class="c-body">
                    
                    <h2 class="c-title">Taxi Booking</h2>
                    <!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs" style="background-color:#080167; margin-left: -190px; ">
  <div class="container" >

    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Taxi Booking</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->
                  </div>
                </div>
            
            
                <div class="row row-eq-height">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    
                      <img src="image/sigiriya.png" class="header-img">
                    
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 text-center center-col ">

                    <div class="shadow p-3 mb-5 bg-white rounded" style="width: 100%; height: auto;">
                      <div class="card-body">
                      <h1 class="h1"><b> How it works?</b></h1><br>
                      <p class="p">Click on book now button and select your pick up location and destination address, and follow the onscreen instruction to complete your booking, once we received your booking we will contact you to confirmation your booking with the information of where to meet and contact details of our local office /driver, </p>
                      <br>
                      
                      <a class="btn btn-primary" href="mode.php" role="button" type="button">Book Now</a><br>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    
                    <img src="image/trains.png" style="margin-right: -100px;" class="header-img">

                  </div>
                </div>

                <div class="details" data-aos="zoom-in">
                	<div class="shadow p-1 mb-2 bg-white rounded" style="width: auto; margin-left: 400px;margin-right: 400px; text-align: center; margin-top: -30px; background-image: url('image/faq-background.jpg'); border: #999 1px dotted; color: #37517e; ">
                    	<div class="card-body">
                    		Airport transfer / Taxi From £12pp<br>
                    		MOST RELIABLE AND SECURE AIRPORT TRANSFERS IN SRI LANKA<br>
                    		24/7 GPS Tracked and call centre
                    		
                    	</div>
                    	
                    </div> 
                </div>	
                
<br>
                <hr>

                <br>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                          <div class="text-center">
                              <img src="image/lighthouse.png" class="img">
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="text-center">
                          <img src="image/rsz_1divide_1.jpg" style="height: 400px;" class="v-img">
                          </div>
                          
                        </div>


                        <div class="col-sm-5">
                          <div class="shadow p-3 mb-5 bg-white rounded" style="width: 100%; height: auto;" data-aos="zoom-in">
                              <div class="card-body">
                                  <h2 class="card-title">Meeting points</h2>
                                  <h4 class="card-subtitle mb-2" id="card-subtitle">Pick up, </h4>
                                  <br>
                                  <p class="card-text" style="text-align: justify;"><li>Arrive at the airport , after collecting your luggage you will come to waiting area where you will find our driver waiting for you with Visit Sri Lanka Tours sign board.</li> </p>
                                  <hr>
                                  <p class="card-text" style="text-align: justify;"><li>Please meet our driver at the hotel reception area , our driver will report to the reception upon arrival.</li> </p>
                              </div> 
                          </div>   
                        </div>
                    </div>
                </div>

                <br>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                          <div class="shadow p-3 mb-5 bg-white rounded" style="width: 100%; height: auto;" data-aos="zoom-in">
                              <div class="card-body">
                                                  
                                  <p class="card-text" style="text-align: justify;"><li>All our vehicles are non smoking, no foods and drinks allowed apart from bottled water.</li></p>
                                  <hr>
                                  <p class="card-text" style="text-align: justify;"><li>
                                  If your destination is not listed above please contact us for the fare, our fares are including the toll, airport parking and airport charges, all our drivers are fully qualified and can speak in moderate English.</li> </p>
                                  <hr>
                                  <p class="card-text" style="text-align: justify;"><li>While we are pleased to accommodate your last minutes request,  any booking made less that 24hrs will be subject to the availability</li> </p>
                                                  
                                                  
                              </div>
                          </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="text-center">
                          <img src="image/rsz_2divide_1.jpg" style="height: 400px;" class="v-img">
                          </div>
                        </div>

                        <div class="col-sm-5">
                          <div class="text-center">
                              <img src="image/fishing.png" class="img"> 
                          </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                          <div class="text-center">
                              <img src="image/demodara.png" class="img" >
                          </div>
                        </div>

                        <div class="col-sm-2">
                          <div class="text-center">
                          <img src="image/rsz_1divide_1.jpg" style="height: 400px; " class="v-img">
                          </div>
                          
                        </div>

                        <div class="col-sm-5">
                          <div class="shadow p-3 mb-5 bg-white rounded" style="width: 100%; height: auto;" data-aos="zoom-in">
                              <div class="card-body">
                                                  
                                <br>
                                <h4 class="card-subtitle mb-2" id="card-subtitle">Terms & Conditions </h4>
                                <br>
                                <p class="card-text" style="text-align: justify;"><li>Please note, number of passenger must be as per the booking, we can only transport you regular traveling luggage ( not over size goods eg surfing board, donation goods) , any cancellation should be informed as early as possible T&C apply,</li><p>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>

                <br>
                <hr>
                <br>
                <br>
            <div class="section" data-aos="fade-up">
                <div class="section-title">
		          <h2> Security & Payments </h2>
		        </div>

                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                          <div class="card">
                                            <img src="image/re-godday.png" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                          </div>  
                                        </div>
                                        <div class="col">
                                          <div class="card">
                                            <img src="image/re-tourism.png" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                          </div>  
                                        </div>
                                        <div class="col">
                                          <div class="card">
                                            <img src="image/slaito.png" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                          </div>  
                                        </div>
                                        <div class="col">
                                          <div class="card">
                                            <img src="image/re-trust.png" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                          </div> 
                                        </div>
                                        <div class="col">
                                          <div class="card">
                                            <img src="image/re-paypal.png" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                          </div>  
                                        </div>
                                    </div>
                                </div>

                   </div>           
      
        </section>


    
</body>
<?php include_once('footer.php'); ?>
</html>
