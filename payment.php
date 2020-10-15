<!DOCTYPE html>
<html>
<head>
  <title>HCI Project</title>

  <style type="text/css">
    #contact {
      padding: 60px 0;
    }

    #contact .contact-info {
      margin-bottom: 20px;
      text-align: center;
    }

    #contact .contact-info i {
      font-size: 48px;
      display: inline-block;
      color: #18d26e;
    }

    #contact .contact-info address, #contact .contact-info p {
      margin-bottom: 0;
      color: #000;
    }

    #contact .contact-info h3 {
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
      color: #999;
    }

    #contact .contact-info a {
      color: #000;
    }

    #contact .contact-info a:hover {
      color: #18d26e;
    }


    @media (min-width: 768px) {
      #contact .contact-address, #contact .contact-phone, #contact .contact-email {
        padding: 20px 0;
      }
    }

    @media (min-width: 768px) {
      #contact .contact-phone {
        border-left: 1px solid #ddd;
        border-right: 1px solid #ddd;
      }
    }

    #contact .php-email-form {
      box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
      padding: 30px;
    }

    #contact .php-email-form .validate {
      display: none;
      color: red;
      margin: 0 0 15px 0;
      font-weight: 400;
      font-size: 13px;
    }

    #contact .php-email-form .error-message {
      display: none;
      color: #fff;
      background: #ed3c0d;
      text-align: left;
      padding: 15px;
      font-weight: 600;
    }

    #contact .php-email-form .error-message br + br {
      margin-top: 25px;
    }

    #contact .php-email-form .sent-message {
      display: none;
      color: #fff;
      background: #18d26e;
      text-align: center;
      padding: 15px;
      font-weight: 600;
    }

    #contact .php-email-form .loading {
      display: none;
      background: #fff;
      text-align: center;
      padding: 15px;
    }

    #contact .php-email-form .loading:before {
      content: "";
      display: inline-block;
      border-radius: 50%;
      width: 24px;
      height: 24px;
      margin: 0 10px -6px 0;
      border: 3px solid #18d26e;
      border-top-color: #eee;
      -webkit-animation: animate-loading 1s linear infinite;
      animation: animate-loading 1s linear infinite;
    }

    #contact .php-email-form input, #contact .php-email-form textarea {
      padding: 10px 14px;
      border-radius: 0;
      box-shadow: none;
      font-size: 15px;
    }

    #contact .php-email-form input::focus, #contact .php-email-form textarea::focus {
      background-color: #18d26e;
    }

    #contact .php-email-form button[type="submit"] {
      background: #18d26e;
      border: 0;
      padding: 10px 30px;
      color: #fff;
      transition: 0.4s;
      cursor: pointer;
    }

    #contact .php-email-form button[type="submit"]:hover {
      background: #13a456;
    }

    @-webkit-keyframes animate-loading {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes animate-loading {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>

  <?php include 'header.php';?>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Payment</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">

      <div class="container-fluid">


<div id="personal">    
          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10 card shadow p-3 mb-5 bg-white rounded">
              <form class="card-body d-flex flex-column">

                <div class="section-title">
                  <h4>Personal Details </h4>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-4 col-md-4 col-lg-4">
                    <select id="title" class="form-control">
                      <option selected>Title</option>
                      <option>Mr</option>
                      <option>Mrs</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                  </div>
                  <div class="form-group col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="pass" placeholder="Passport Number">
                  </div>
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="cpass" placeholder="Confirm Passport Number">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-sm-12 col-md-12 col-lg-12" align="center">
                    <button  class="btn btn-primary mt-auto" style="width: 50%;" onclick="send(); display();"> Submit Personal Details </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

  </div>    

  <div id="payment">

    <section id="contact">
      <div class="container" data-aos="fade-up">

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i style="color: #5376f5;" class="fab fa-cc-visa fa-5x"></i>
              <h3>Visa</h3>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i style="color: #5376f5;" class="fab fa-cc-mastercard fa-5x"></i>
              <h3>Master</h3>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i style="color: #5376f5;" class="fab fa-cc-discover fa-5x"></i>
              <h3>Discover</h3>
            </div>
          </div>

        </div>
      </div>
    </section>

          <div class="row justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10 card shadow p-3 mb-5 bg-white rounded">
              <form class="card-body d-flex flex-column">

                <div class="section-title">
                  <h4>Card Details </h4>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <select id="method" class="form-control">
                      <option selected>Payment Method</option>
                      <option>Visa</option>
                      <option>Master</option>
                      <option>Discover</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="cnumber" placeholder="Card Number">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="cfname" placeholder="Card First Name">
                  </div>
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="clname" placeholder="Card Last Name">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="country" placeholder="Country">
                  </div>
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="city" placeholder="City">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="house" placeholder="House Number">
                  </div>
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <input type="text" class="form-control" id="post" placeholder="Post Code">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label for="exampleFormControlInput1">Expiry Date</label>
                    <input type="month" class="form-control" id="house" placeholder="CVVr">
                  </div>
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label for="exampleFormControlInput1">CVV</label>
                    <input type="text" class="form-control" id="post" placeholder="Post Code">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-sm-12 col-md-12 col-lg-12" align="center">
                    <button  class="btn btn-primary mt-auto" style="width: 50%;"> Submit Card Details </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

</div>

      </div>
      
    </section>

  </main>
  <!-- End #main -->
  <?php include 'footer.php';?>


  <script type="text/javascript">
    
    function send()
    {
      
    }

  </script>

</body>
</html>