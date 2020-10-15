<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>


  <style type="text/css">
    .services .icon-box {
      box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
      padding-bottom: 30px;
      padding-top: 50px;
      padding-right: 40px;
      padding-left: 40px;
      transition: all ease-in-out 0.4s;
      background: #fff;
    }

    .services .icon-box .icon {
      margin-bottom: 10px;
    }

    .services .icon-box .icon i {
      font-size: 36px;
    }

    .services .icon-box h5 {
      font-weight: 500;
      margin-bottom: 15px;
      font-size: 24px;
    }

    .services .icon-box h5 a {
      color: #37517e;
      transition: ease-in-out 0.3s;
    }

    .services .icon-box p {
      line-height: 24px;
      font-size: 14px;
      margin-bottom: 0;
    }

    .services .icon-box:hover {
      transform: translateY(-10px);
      background-color: #010483;
      color: white;
      cursor: pointer;
    }

    .services .icon-box:hover h5 a {
      color: white;
    }

    .services .icon-box:hover .btn-hover {
      background-color: white;
      color: black;
      border: none;
    }

#facts {
  background: url("images/tot2.jpg") center top no-repeat fixed;
  background-size: cover;
  padding: 60px 0 0 0;
  position: relative;
}

#facts::before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.88);
  z-index: 9;
}

#facts .container {
  position: relative;
  z-index: 10;
}

#facts .counters span {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 48px;
  display: block;
  color: #18d26e;
}

#facts .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  color: #111;
}

#facts .facts-img {
  text-align: center;
  padding-top: 30px;
}

#call-to-action {
  background: linear-gradient(rgba(2, 5, 161, 0.91), rgba(2, 5, 161, 0.91)), url("../img/hero-bg.jpg") fixed center center;
  background-size: cover;
  padding: 60px 0;
}

#call-to-action h3 {
  color: #fff;
  font-size: 28px;
  font-weight: 700;
}

#call-to-action p {
  color: #fff;
}

#call-to-action .cta-btn {
  font-family: "Montserrat", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 25px;
  transition: 0.5s;
  margin-top: 10px;
  border: 2px solid #fff;
  color: #fff;
}

#call-to-action .cta-btn:hover {
  background: #18d26e;
  border: 2px solid #18d26e;
}

.card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 40%;
          border-radius: 5px;
        }

        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
          padding: 2px 16px;
        }



  </style>

</head>
<body>

	<?php include 'header.php';?>

  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Visit Sri Lanka Tours</span></h1>
            <h2>The service like no other</h2>
            <div class="text-center text-lg-left">
              <a href="" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="images/main.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>

  <main id="main">

    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="images/intro.png" style="width: 80%;">
          </div>

          <div class="col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Holiday with Visit Sri Lanka tours</h3>

            <div data-aos="zoom-in" data-aos-delay="100">
              <p class="text-justify">Sri Lanka offer perfect escape, with combination of relaxing tropical beach holidays, wildlife safari, scenic hill country, UNESCO world heritage sites, snorkeling, whales watching, water sports and Sri Lankan rich culture with Buddhist monasteries.</p>
            </div>

            <div data-aos="zoom-in" data-aos-delay="200">
              <p class="text-justify">Due to the our close relationship with vase selections of hotel operator’s from luxury beach resorts, Boutique hotels to Eco friendly villas we can guarantee  very competitive rates,</p>
            </div>

            <div data-aos="zoom-in" data-aos-delay="300">
              <p class="text-justify">Booking with us you can be certain that your booking will be handle by our professional tour consultants. Our airport representative will meet you on arrival to discuss any concern you may have before proceed, while your tour consultant will be in touch throughout the holiday.</p>
            </div>

            <div data-aos="zoom-in" data-aos-delay="400">
              <p class="text-justify">We have modern feet of luxury cars to mini buses driven by fully qualified English speaking chauffeur guides. Our inbound operators are fully approved by governing body of Sri Lanka  including Sri Lankan Associate of Inbound Tour Operators (SLAITO) and Sri Lankan Tourism Authorities to guarantee of excellence in service. </p>
            </div>

          </div>
        </div>

      </div>
    </section>

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tour Packages </h2>
        </div>

        <div class="row">
          <div class="col-xl-4 col-md-6  mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box h-100 d-flex flex-column">
              <div class="icon"><i class="fas fa-skiing-nordic fa-2x"></i></div>
              <h5><a href="">Classic Culture Triangle</a></h5>
              <p>3 Days private Tour</p>
              <p style="margin-bottom: 5%;">2 Nights Accommodations </p>
              <a href="" class="btn btn-primary btn-hover mt-auto" style="width: 100%;"> FROM £245.00 PP </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6  align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box h-100 d-flex flex-column">
              <div class="icon"><i class="fas fa-plane fa-2x"></i></div>
              <h5><a href="">Culture Triangle and Kandy</a></h5>
              <p>4 Days private Tour</p>
              <p style="margin-bottom: 5%;">3 Nights Accommodations</p>
              <a href="" class="btn btn-primary btn-hover mt-auto" style="width: 100%;"> FROM £280.00 PP </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6  align-items-stretch mt-4 mt-md-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box h-100 d-flex flex-column">
              <div class="icon"><i class="fas fa-map-marked-alt fa-2x"></i></div>
              <h5><a href="">Culture Triangle, Kandy & Safari</a></h5>
              <p>6 Days private Tour</p>
              <p style="margin-bottom: 5%;">5 Nights Accommodations </p>
              <a href="" class="btn btn-primary btn-hover mt-auto" style="width: 100%;"> FROM £362.00 PP </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6  align-items-stretch  mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box h-100 d-flex flex-column">
              <div class="icon"><i class="fas fa-bus fa-2x"></i></div>
              <h5><a href="">Best of Sri Lanka Budget</a></h5>
              <p>14 Days private Tour</p>
              <p style="margin-bottom: 5%;">13 Nights Accommodations </p>
              <a href="" class="btn btn-primary btn-hover mt-auto" style="width: 100%;"> FROM £595.00 PP </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 align-items-stretch mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box h-100 d-flex flex-column">
              <div class="icon"><i class="fas fa-globe-americas fa-2x"></i></div>
              <h5><a href="">Best of Sri Lanka affortable</a></h5>
              <p>14 Days private Tour</p>
              <p style="margin-bottom: 5%;">13 Nights Accommodations </p>
              <a href="" class="btn btn-primary btn-hover mt-auto" style="width: 100%;"> FROM £845.00 PP </a>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 align-items-stretch mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box h-100 d-flex flex-column">
              <div class="icon"><i class="fas fa-hotel fa-2x"></i></div>
              <h5><a href="">Best of Sri Lanka Luxury</a></h5>
              <p>14 Days private Tour</p>
              <p style="margin-bottom: 5%;">13 Nights Accommodations </p>
              <a href="" class="btn btn-primary btn-hover mt-auto" style="width: 100%;"> FROM £999.00 PP </a>
            </div>
          </div>

        </div>

      </div>
    </section>


    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3>BOOK COACH TOUR</h3>
        <p>10 Days Tour ,9 Nights Accommodations , Breakfast included </p>
        <p>Negambo-Sigiriya-Dambulla-Polonnaruwa- Pinnawala -Kandy- Ella- Yala National park- Galle / Bentota - Airport </p>
        <a class="cta-btn" href="coachTours1.php"> ONLY FROM £349.00 PP </a>
      </div>
    </section>


    <section id="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2> Excursion - Day Trips </h2>
        </div>

        <div>
          <h5 style="text-align: center;">From £34.00pp</h5>
          <h3 style="text-align: center;">Kandy Temple of tooth</h3>
          <h5 style="text-align: center;">&</h5>
          <h3 style="text-align: center;">Elephant Orphanage</h3>
          <h5 style="text-align: center;">Departure Daily  at 07:30hrs from Bentota</h5>
          <div align="center">
            <a href=""  class="btn btn-primary" style="width: 30%; margin-top: 3%;"> Book Now </a>
          </div>
        </div>

        <div class="facts-img">
          <img src="images/day.png" alt="" class="img-fluid" style="width: 80%;">
        </div>

      </div>
    </section>

    <section id="skills">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
          <h2> Our Media Presence </h2>
        </div>

  <div class="container-fluid">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-1 " style="margin-top: 2%;"><a href="https://www.theguardian.com/travel/2018/may/05/worlds-best-rail-journeys-train-travel" target="_blank"> <div class="card" style="width: 100%; height: 100px; max-height: 100px;"><div class="card-body"><img class="img-responsive" style="width: 100%; height: 50px;" src="images/guard.png"></div></div></a></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-1 " style="margin-top: 2%;"><a href="https://www.thetimes.co.uk/article/the-big-trip-sri-lanka-2hpz83tsv" target="_blank"> <div class="card" style="width: 100%; height: 100px; max-height: 100px;"><div class="card-body"><img class="img-responsive" style="width: 100%; height: 50px;" src="images/times.png"></div></div></a></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-1 " style="margin-top: 2%;"><a href="https://www.pressreader.com/uk/grazia-uk/20171010/283502206228118" target="_blank"> <div class="card" style="width: 100%; height: 100px; max-height: 100px;"><div class="card-body"><img class="img-responsive" style="width: 100%; height: 50px;" src="images/press.png"></div></div></a></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-1 " style="margin-top: 2%;"><a href="https://inews.co.uk/inews-lifestyle/travel/the-worlds-most-scenic-train-journeys-93772" target="_blank"> <div class="card" style="width: 100%; height: 100px; max-height: 100px;"><div class="card-body"><img class="img-responsive" style="width: 100%; height: 50px;" src="images/inews.jpg"></div></div></a></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-1 " style="margin-top: 2%;"><a href="https://books.google.co.uk/books?id=xJ6WDwAAQBAJ&pg=PT54&lpg=PT54&dq=visitsrilankatour.co.uk&source=bl&ots=un5yJ5ICB-&sig=ACfU3U2OFz9JNHiolt3G9W6V3lTwar4Qnw&hl=en&sa=X&ved=2ahUKEwjrz57__MHlAhU4QUEAHdamC244ChDoATASegQICRAB#v=onepage&q=visitsrilankatour.co.uk&f=false" target="_blank"> <div class="card" style="width: 100%; height: 100px; max-height: 100px;"><div class="card-body"><img class="img-responsive" style="width: 100%; height: 50px;" src="images/rough.png"></div></div></a></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-1 " style="margin-top: 2%;"><a href="https://www.nytimes.com/2019/01/30/travel/budget-travel-sri-lanka.html" target="_blank"> <div class="card" style="width: 100%; height: 100px; max-height: 100px;"><div class="card-body"><img class="img-responsive" style="width: 100%; height: 50px;" src="images/newyork.jpg"></div></div></a></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-1 " style="margin-top: 2%;"><a href="https://thepointsguy.com/reviews/sri-lanka-railways-second-class/" target="_blank"> <div class="card" style="width: 100%; height: 100px; max-height: 100px;"><div class="card-body"><img class="img-responsive" style="width: 100%; height: 50px;" src="images/thepoint.jpg"></div></div></a></div>
        <div class="col-3 col-sm-3 col-md-3 col-lg-1 " style="margin-top: 2%;"><a href="" target="_blank"> <div class="card" style="width: 100%; height: 100px; max-height: 100px;"><div class="card-body"><img class="img-responsive" style="width: 100%; height: 50px;" src="images/the travel.png"></div></div></a></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-1"></div>
      </div>
    </div>
  </div>


      </div>
    </section>



  </main>

	<?php include 'footer.php';?>
</body>
</html>