<!DOCTYPE html>
<?php 
include'header.php';
?>
<html>
<head>



	<title>jQuery Datepicker</title>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

</head>
<body>
Choose Date: <input type="text" name="select_date" id="date" style="margin-top: 20%;">
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
<br><br><br><br><br>
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