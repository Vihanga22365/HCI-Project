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
              <div class="card-body d-flex flex-column">

                <div class="section-title">
                  <h4>Personal Details </h4>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-4 col-md-4 col-lg-4">
                    <select id="title" class="form-control">
                      <option value="Title">Title</option>
                      <option value="Mr">Mr</option>
                      <option value="Mrs">Mrs</option>
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
                    <button type="submit"  class="btn btn-primary mt-auto" style="width: 50%;" onclick="send();"> Submit Personal Details </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

  </div>    

  <div id="payment" style="display: none;">

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
              <div class="card-body d-flex flex-column">

                <div class="section-title">
                  <h4>Card Details </h4>
                </div>

                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <select id="method" class="form-control">
                      <option value="Title">Payment Method</option>
                      <option value="Visa">Visa</option>
                      <option value="Master">Master</option>
                      <option value="Discover">Discover</option>
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
                    <input type="text" class="form-control" id="post" placeholder="Post Number" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label for="exampleFormControlInput1">Expiry Date</label>
                    <input type="month" class="form-control" id="exp" placeholder="CVV">
                  </div>
                  <div class="form-group col-sm-6 col-md-6 col-lg-6">
                    <label for="exampleFormControlInput1">CVV</label>
                    <input type="text" class="form-control" id="cvv" >
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-sm-12 col-md-12 col-lg-12" align="center">
                    <button  class="btn btn-primary mt-auto" style="width: 50%;" onclick="send1();"> Submit Card Details </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

</div>

      </div>
      
    </section>

  </main>
  <!-- End #main -->
  <?php include 'footer.php';?>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script type="text/javascript">

    function    isMail(mail){

    pattuser = /^([A-Z0-9_%+\-!#$&'*\/=?^`{|}~]+\.?)*[A-Z0-9_%+\-!#$&'*\/=?^`{|}~]+$/i;
    pattdomain = /^([A-Z0-9-]+\.?)*[A-Z0-9-]+(\.[A-Z]{2,9})+$/i;

    tab = mail.split("@");
    if (tab.length != 2)
        return false;
    return (pattuser.test(tab[0]) && pattdomain.test(tab[1]));
  }
    
    function send()
    {
      var title = document.getElementById('title').value;
      var fname = document.getElementById('fname').value;
      var lname = document.getElementById('lname').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phone').value;
      var pass = document.getElementById('pass').value;
      var cpass = document.getElementById('cpass').value;
      var xmail = isMail(email);

      if(title == 'Title') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please select title!',
        })
      } else if(fname == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter first name!',
        })
      } else if(lname == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter last name!',
        })
      } else if(email == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter email address!',
        })
      } else if(xmail == false) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter valid email address!',
        })
      } else if(phone == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter phone number!',
        })
      } else if(pass == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter passport number!',
        })
      } else if(cpass == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please confirm passport number!',
        })
      } else if(pass != cpass) {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Passport number not confirm correctly!',
        })
      } else {
        Swal.fire({
          icon: 'success',
          title: 'Thank You',
          text: 'Successfully saved your personal data.',
          showConfirmButton: false,
          timer: 1500
        })
        display();
      }

    }

    function display() {
      document.getElementById('payment').style.display = 'block';
      document.getElementById('personal').style.display = 'none';
    }

    function send1()
    {
      var method = document.getElementById('method').value;
      var cnumber = document.getElementById('cnumber').value;
      var cfname = document.getElementById('cfname').value;
      var clname = document.getElementById('clname').value;
      var country = document.getElementById('country').value;
      var city = document.getElementById('city').value;
      var house = document.getElementById('house').value;
      var post = document.getElementById('post').value;
      var exp = document.getElementById('exp').value;
      var cvv = document.getElementById('cvv').value;

      if(method == 'Title') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please select payment method!',
        })
      } else if(cnumber == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter card number!',
        })
      } else if(cfname == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter card first name!',
        })
      } else if(clname == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter card last name!',
        })
      } else if(country == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter country!',
        })
      } else if(city == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter city!',
        })
      } else if(house == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter house number!',
        })
      } else if(post == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter post number!',
        })
      } else if(cvv == '') {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'Please enter cvv code!',
        })
      } else {
        Swal.fire({
          icon: 'success',
          title: 'Thank You',
          text: 'Successfully saved your card data.',
          showConfirmButton: false,
          timer: 1500
        })
      }


    }

  </script>

</body>
</html>