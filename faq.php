<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FAQ</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.css">
    <!-- Your custom styles (optional) -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></link>

<style type="text/css">
    

    .section-content{
        padding: 0; 
        margin: 30px 30px; 
        position: relative;
    }


    .card-body{
    text-align: justify;
    font-family: 'Rubik',sans-serif;
}

.collapse.in {
    display: block;
}

/*.question-item{
    padding: 30px 0;
    border-bottom: #999 1px dotted;
}*/

.faq-question{
    font-weight: bold;
    color: black;
}
a {
    background-color: transparent;
}

.page-header {
    border-bottom: 1px dotted #858585;
    margin-left: -15px;
    margin-right: -15px;
    

}

@media (max-width: 768px)
.page-header .page-header__title--page {
    font-size: 59px;
    line-height: 1;
}

.page-header .page-header__title--page {
    
    font-size: 40px;
    font-family: "Montserrat", sans-serif;
    color: #37517e;
    
}
 .page-header .page-header__title {
    padding-left: 15px;
    padding-right: 15px;
    font-weight: bold;
}

body {
    background: #fff url(image/faq-background.jpg) 0 0;
    min-width: 320px;
    color: #212121;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857;
}

.faq-container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
   
   
}



@media (max-width: 992px)
.col-md-10 {
    width: 83.33333%;
}





.faq-container input[name="search"] {
    height: 40px;
    background: none;
    width: 100%;
    outline: none;
}

input[type=text]{
    padding: 0;
    border: none;
    border-radius: 0;
    box-shadow: inset 0 -1px 0 #ddd;
    font-size: 14px;    
}

@media (max-width: 992px)
.col-md-2 {
    width: 16.66667%;
}

@media (max-width: 992px)
.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
}

element.style {
    font-size: 16px;
    background-color: #ffc836;
    color: #212121;
    padding: 10px 25px;
}
.btn {
    border-right: none;
    border-bottom: none;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    transition: all 0.2s;
}  

.btn-primary {
    background-size: 200%;
    background-position: 100%;
}   

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}  

#myInput {
  background-image: url('image/search.png');
  background-position: 680px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  border: 3px solid #080167;
  /*margin-bottom: 12px;*/
  padding: 16px 26px 16px 10px; 
  font-size: 16px;   
  box-sizing: border-box; 
  box-shadow: 5px 8px 8px 1px rgba(0,0,0,0.2), 2px 10px 20px 0 rgba(0,0,0,0.19);
  
} 
#myUL li a {
  border-bottom: #999 1px dotted;
  margin-top: 1px; /* Prevent double borders */
  background-image: url('image/faq-background.jpg');
  padding: 5px 20px 20px 20px;
  text-decoration: none;
  margin-bottom: 20px;
  display: block;
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}


           
</style>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myUL li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>-->
</head>
<?php include('header.php'); ?>
<body>
	<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>FAQ</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs Section -->
    

        <section class="section" >

            <div class="container">
               
        
                <div class="page-header" style="margin-left: 15px; margin-right: 15px; margin-bottom: -40px; margin-top: -50px;">
                    <div class="page-header__title page-header__title--page">Frequently Asked Questions </div>
                </div> 
                  
            </div>
            
        </section> 
<br><br>
        <div class="container">
                        <div class="row">
                            <div class="col-lg-2">
                      
                            </div>
                            <div class="col-lg-8">
                                
                                <div class="input-icons">
                                    
                                    <input class="input-field" type="text" placeholder="Search"  id="myInput" onkeyup="myFunction()" >
                                </div>
                            </div>
                            <div class="col-lg-2">
                      
                            </div>
                        </div>
                    </div>
                    <br><br>
  <hr style="border: 1px dotted #999; width: 77%;">

        <section>
            <div class="container" >
            
                    <div class="section-content" >
                        <ul id="myUL" style="margin-top: -50px;">
                        <div id="accordion">
                          <div >
                            <div id="headingOne" >
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" href="" style="border-bottom: #999 1px dotted;">
                                  1. How do I receive my tickets ?</a></li>
                                
                              </div>
                            </div>
                            
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                Please refer to the confirmation email which will outline the procedure, its depend on the service provider, most of our tickets will be issue at the station occasionally we may have to deliver to a hotel,  the method  will be base on the availability.
                              </div>
                            </div>
                          </div>
                          <div >
                            <div id="headingTwo">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" href="">
                                  2. What are the opening hours of railway station ticket counter?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body text-justify">
                                Colombo fort main ticketing counter should be open 7 days a week and will open prior to the train depart , if your train is  very early morning/late night departure, the ticket counter will be open to issue the tickets, if you are catching the train from Colombo there will always a counter to serve you prior to the departure. but there is counter 17 at fort station specially for Pre-booked tickets collection during peak hours.
                              </div>
                            </div>
                          </div>
                          
                          <div>
                            <div id="headingThree">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" href="">
                                 3. Where  can I collect my tickets? 
                                </a></li>
                              </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingTee" data-parent="#accordion">
                              <div class="card-body">
                                You can collect your tickets at any of major railway stations, including: Colombo fort, Gampaha, Kandy, Peradeniya, Nawalapitiya,Nanuoya, Ella, Badulla, Haputale, Bandarawela, Hatton,  Galle, Wallawatte, Kalutara, Aluthgama, Polgahawela, Hikkaduwa, Matara, Jaffna, Anuradhapura, Vauniya, Trincolamee, Galoya, Polonnaruwa,Valachchenai, Baticoalo, Anuradhapura, Kurunegala,
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading4">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" href="">
                                 4. Can I collect my tickets at the airport? 
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                              <div class="card-body">
                                Sorry, tickets can only be collected at the any above mentioned stations. and if you used any third party printing point (Mobitel) you will be more likely to encounter problems and might loose your ticket completely and SLR will not reprint your tickets. 
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading5">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" href="">
                                5. Which counter at the station?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                              <div class="card-body">
                                If you are collecting at Colombo fort station then go to the counter 17 ,unless otherwise Please go to the main ticket counter at station.
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading6">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" href="">
                                 6. Why do I have to enter the passport number?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                              <div class="card-body">
                                Your passport will be used to secure your tickets therefore you will need it to collect your tickets
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading7">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7" href="">
                                 7. I have entered wrong passport number, can I change it later stage?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                              <div class="card-body">
                                No, you can not change it, as we will provide your details to railway company  at the time completion and we don’t  have  facilities to change or railway will not accept any changes

                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading8">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8" href="">
                                 8. Can I change my travel date / time / train or cancel at all?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                              <div class="card-body">
                                Sorry, no changes /cancellation possible,
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading9">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9" href="">
                                9. Can I select seats /side of the train?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                              <div class="card-body">
                                Sorry we don’t have any facilities to select any particular seat/side and tickets will be issued according to availability by Sri Lanka railway at the time of the booking and seat numbers will be printed on your ticket.
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading10">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10" href="">
                                 10. Why my ticket state different time / destination than I originally booked for?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
                              <div class="card-body text-justify">
                                 Some time your paper tickets will state time and destination as per train originally starting point to end point, but you are allowed to board and exit and any station between your destination, therefore please refer to the time and destination you have booked with us, eg if you book 08:47s train from Kandy to Ella, your original paper ticket may print as 05:55s (which the time this train setting off at the its origin (Colombo) and heading to Badulla , but this train will arrive Kandy at 08:47s and goes to Badulla via Ella.
                                 <br><br>
                                 In other words, ticket is valid from:  A to D but you use from B to C<br>
                                    A = Colombo<br>
                                    B = Kandy or any other station, as per your booking<br>
                                    C = Ella, Nanuoya or any other station as per your booking<br>
                                    D = Badulla

                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading11">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11" href="">
                                11. How do I find my carriage and seat (s),
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
                              <div class="card-body">
                                please note that you must board in to correct carriage as per your tickets to find your allocated seat(s), please note that all our bookings come with reserved seating and seat number (s) will be printed on your ticket.
                                <br><br>
                                <b>Finding correct carriage:</b> Pls note if you wish? you can ask station staff about where stand for correct carriage, please refer to below picture for example ticket, you should have received one of them, your ticket should carry one of these abbreviation or Letter representing your carriage and number indicating your allocated seat(s).
                                <br><br>
                                FCR (first class reserved) , AFC (Air-conditioned first class) OFV (Observation wagon), SCR (Second class reserved)TCR (third class reserved), Or Letter A,B,C,D,E,F,G,H (these letter represent 1st class to 3rd class reserved carriages depend on how may carriages attached to particular train,
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading12">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12" href="">
                                 12. How do I find my seat(s)?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
                              <div class="card-body">
                                Next to the one of above abbreviations of which represent your carriage then you will see a number (pls refer to the number in the box of illustrate ticket below) so this will be your allocated seat(s).
                                <br>
                                <br>
                                Please note one of (below pictured) ticket can be carry up to 5 seats, if you book more than one tickets and have received only on of below paper (don’t be panic) just see how many seats listed on that ticket.   As per below ticket, carriage is TCR Third class reserved and seat numbers are 33,34 and so on and valid for 4 passengers, 
                                <br><br>
                                <img src="img/trainticket.jpg">
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading13">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13" href="">
                                 13. How do I know which class I have booked?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
                              <div class="card-body">
                                The class you have booked should be stated on your payment receipt unless otherwise agreed.

                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading14">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14" href="">
                                 14. What are the differences between classes?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
                              <div class="card-body">
                                Observation class = Non AC, reserved only carriage with large window<br>
                                1st class = Air Conditioned, reserved only carriage<br>
                                2nd class= Non AC, reserved only carriage<br>
                                3rd class = Non AC, reserved only carriage
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading15">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15" href="">
                                 15. Will I get reserved seat for my booking?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
                              <div class="card-body">
                                Yes, all our bookings comes with reserved seat including 3rd class carriage
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading16">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16" href="">
                                 16. Do I have to pay for my Luggage?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordion">
                              <div class="card-body">
                                No, You can carry regular traveling luggage but if your luggage is over size you may have to, please speak with railway staff on arrival 
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading17">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17" href="">
                                 17. Will there be enough space for my luggage? 
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
                              <div class="card-body">
                                There will be enough space for the regular traveling baggage’s but if your have over size goods/ luggage then you will have to speak with station staff to sort it out , you may be able to  load in guards carriage for extra cost.
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="heading18">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18" href="">
                                 18. Is there discount rate for children?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordion">
                              <div class="card-body">
                                Unfortunately no, these bookings are for the seats regardless age of passenger, therefore if you need separate seat for your child then you will need to book one, however children under 4  years old can travel free in they don’t requires separate seat. 
                              </div>
                            </div>
                          </div>
                        
                          <div>
                            <div id="heading19">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19" href="">
                                 19. How far in advance I can book train tickets tough Visit Sri Lanka tours?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordion">
                              <div class="card-body">
                                You can send us your booking request at any time , the sales will only open just 30 days prior to the travel dates except 1126 -Nanuoya - Ellla and coastal train to /from Colombo - Matara, we will attempt to process your request as soon as they become available. Tickets must be booked a minimum of 2 days in advance  of your desired travel dates. sending your request in advance does not guarantee your reservation but it will give better chance as we  serve first come first serve basis, 
                              </div>
                            </div>
                          </div>
                          
                          <div>
                            <div id="heading20">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20" href="">
                                 <p style="text-align: left;">20. I still have my cancelled ticket with me, will that ticket be valid if the train resume its service? or I am on the train and with printed ticket but there is other passenger with same seat number on same carriage, what should I do?</p>
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordion">
                              <div class="card-body">
                                For some season , your ticket has been cancelled / reissued therefore if you think you are the valid ticket holder , please contact the train guard / TC , he will be able to find valid ticket and allow you to continue your journey while other party  will be issued with penalty notice and will disembark at the next stop.  
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading21">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21" href="">
                                 21. Can any nationality book train tickets with VSLT?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordion">
                              <div class="card-body">
                                Yes. If you book a ticket with a Passport number you need to pick it up yourself. The ticket issuing service is available at the railway stations for the most of the booking but some occasion we have to deliver them to you.
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading22">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22" href="">
                                 22. Can I print my tickets myself or get an e-ticket?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordion">
                              <div class="card-body">
                                 No. Only the official paper tickets are available and can be picked up at the station unless we have delivered them to your or otherwise advised.
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading23">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23" href="">
                                 23. Can I pick up my tickets at the train station after purchasing online with VSLT?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordion">
                              <div class="card-body">
                                Yes. Train tickets can be picked up at several railway stations as listed on FAQ. unless otherwise already delivered. 
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading24">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapse24" href="">
                                 24. Can I have the tickets delivered to the hotel and have them signed for?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordion">
                              <div class="card-body">
                                 Yes. On extra cost, Please make sure there will be someone available to sign for your tickets on delivery.
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading25">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse25" aria-expanded="false" aria-controls="collapse25" href="">
                                  25. What documents do I need to make my booking? Do I need to provide a copy of my passport?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordion">
                              <div class="card-body">
                                 You only need to input your full name as it appears on your passport and the number. unless otherwise you are booking for large  group where we need a copy of main traveler passport/ proof of address etc.

                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading26">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse26" aria-expanded="false" aria-controls="collapse26" href="">
                                 26. How do I book round-trip tickets or multi-leg tickets?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordion">
                              <div class="card-body">
                                You can only book one-way or single-leg tickets in each order. Tickets are limited to a maximum of five per order (must be for the same date, same train number and same seat type). A separate order should be made for tickets for different dates, train numbers or seat types. VSLT cannot guarantee ticket availability, nor cancel or modify tickets after issue. If change or cancellation is required, please go to the refund window at the boarding station with ticket and valid ID (this should be the same as that used for booking). You will only receive partially refund minus, UK VAT, SL Tax, Mobitel Booking admin fee, Paypal/Credit card fee and international money transferring fee and VSLT booking fee.
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading27">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse27" aria-expanded="false" aria-controls="collapse27" href="">
                                 27. If I book several tickets at a time, can I get seats next to each other?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordion">
                              <div class="card-body">
                                Seat / tickets bought at the same time are usually next to each other. VSLT will try best to book adjacent seats on your behalf but cannot guarantee success due to random ticket distribution, your seat allocation will be assigned by train company and we can not be help responsible if those are not together due to the availability. 
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading28">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse28" aria-expanded="false" aria-controls="collapse28" href="">
                                 28. How can I pay for my ticket(s)?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordion">
                              <div class="card-body">
                                We currently accept debit and credit cards, paypal, international credit cards (Visa, Mastercard, JCB, and American Express).
                              </div>
                            </div>
                          </div>
                                                         
                          <div>
                            <div id="heading29">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse29" aria-expanded="false" aria-controls="collapse29" href="">
                                 29. How long after submitting my reservation will I know whether or not tickets are available?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#accordion">
                              <div class="card-body">
                                Ticket availability for bookings made before 3:00 p.m.  Will be confirmed before 5:30 p.m. on next working day

                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading30">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapse30" href="">
                                  30. If there are no tickets available, will I get my money back?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordion">
                              <div class="card-body">
                                Yes. If the ordered tickets are no longer available, VSLT will refund the full price paid (subject to confirmation). Refunds will be made using the same method as your initial payment. Refund payment date is subject to bank or credit card provider.

                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading31">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse31" aria-expanded="false" aria-controls="collapse31" href="">
                                 31. What is the delivery process?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#accordion">
                              <div class="card-body">
                                Email address details cannot be modified after tickets have been paid for and confirmed. Tickets confirmation will be sent to the email address provided as per payment/paypal / or by post 
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading32">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse32" aria-expanded="false" aria-controls="collapse32" href="">
                                 32. How do I change or cancel my train ticket reservation?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse32" class="collapse" aria-labelledby="heading32" data-parent="#accordion">
                              <div class="card-body">
                                 VSLT cannot cancel or modify tickets after issue. If change or cancellation is required, please go to the refund window at the boarding station with ticket and valid ID (this should be the same as that used for booking). Change or cancellation at the boarding station will be made according to local railway authority ticket refund regulations.
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading33">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse33" aria-expanded="false" aria-controls="collapse33" href="">
                                 33. Are the train schedules accurate?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#accordion">
                              <div class="card-body">
                                The information provided is for reference only. Please refer to data issued by local railway authority for most up-to-date information.
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading34">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse34" aria-expanded="false" aria-controls="collapse34" href="">
                                  34. Can I book train tickets by calling VSLT customer service?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse34" class="collapse" aria-labelledby="heading34" data-parent="#accordion">
                              <div class="card-body">
                                Currently train tickets can only be booked on our website or app. But if you need further help please call us.

                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading35">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse35" aria-expanded="false" aria-controls="collapse35" href="">
                                 35. Does successful payment mean I will definitely get my tickets?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse35" class="collapse" aria-labelledby="heading35" data-parent="#accordion">
                              <div class="card-body">
                                We cannot guarantee ticket availability, but will try our best to purchase tickets for you. If the tickets are not available, we will refund your payment in full.
                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading36">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse36" aria-expanded="false" aria-controls="collapse36" href="">
                                 36. Do I need to pay handling fees when picking up my ticket?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse36" class="collapse" aria-labelledby="heading36" data-parent="#accordion">
                              <div class="card-body">
                                No handling fees will be charged. Your tickets will be printed free of charge

                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading37">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse37" aria-expanded="false" aria-controls="collapse37" href="">
                                 37. Are the train schedules accurate?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse37" class="collapse" aria-labelledby="heading37" data-parent="#accordion">
                              <div class="card-body">
                                The information provided is for reference only. Please refer to data issued by the local railway authority for most up-to-date information.

                              </div>
                            </div>
                          </div>
                                 
                          <div>
                            <div id="heading38">
                              <div class="question-item">
                                <li><a class="faq-question" data-toggle="collapse" data-target="#collapse38" aria-expanded="false" aria-controls="collapse38" href="">
                                 38. Can't find the information you are looking for?
                                </a></li>
                              </div>
                            </div>
                            <div id="collapse38" class="collapse" aria-labelledby="heading38" data-parent="#accordion">
                              <div class="card-body text-justify">
                                Did we miss something? If you can't find the information you are looking for in our FAQ section, please help us improve this page by sending your query to [visitsrilankatours@hotmail.com].
                              </div>
                            </div>
                          </div>
                        </div>  
                      </div>
</ul>

                        
                    </div>
            
            </div>    
        </section>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        } 
    }
}
</script>



    <?php include_once('footer.php'); ?>
</body>




</html>
