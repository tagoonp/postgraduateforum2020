<?php
include "config.inc.php";
include "domain.inc.php";
include "connect.inc.php";
include "function.inc.php";

$language = 1;
if((isset($_GET['lang'])) && ($_GET['lang'] != '')){
  $language = mysqli_real_escape_string($conn, $_GET['lang']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Postgraduateforum 2020</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Postgraduateforum, Postgraduateforum 2020, Postgraduateforum2020, PFG2020, Health Systems and Policy, Conference" name="keywords">
  <meta content="“Ensuring healthy lives and promoting well-being for all at all ages” is one of the 17 UN Sustainable Development Goals, to be achieved by 2030. The essential components of these goals need to be prioritized so that all countries can integrate them into their health systems and policies. Achieving universal health coverage and providing safe and high-quality healthcare using appropriate evidence-based technology are common challenges for all health systems. The core components of a well-established health system are infrastructure, human resources, finance and well-organized and properly-managed facilities. In order to achieve an efficient and cost-effective health system, the World Health Organization recommends four indicators for monitoring health systems: (1) provision of healthcare services; (2) investment in equipment, facilities, and the training of health personnel; (3) health finance, and; (4) monitoring and evaluation. The measurable outcomes of this monitoring process are the people’s state of health, equity of access to healthcare, health system responsiveness, the responsibility of people on their health, and the financial burden across socioeconomic gradients. Data and research on the progress and achievement of universal health coverage around the world are crucial to health policy makers and researchers in order to monitor the situations of each country and explore the interventions to introduce in multi-stakeholder platforms. Therefore, “Research in the Era of Universal Health Coverage” will be the theme for the 14th Postgraduate Forum on Health Systems and Policies in 2020." name="description">

  <!-- Favicons -->
  <!-- <link href="./template/img/favicon.png" rel="icon">
  <link href="./template/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Kanit:300,400&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

  <!-- Bootstrap css -->
  <link href="./template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="./template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="./template/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="./template/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="./template/lib/animate/animate.min.css" rel="stylesheet">
  <link href="./template/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="./template/css/style.css" rel="stylesheet">
  <link href="./template/custom/css/style.css" rel="stylesheet">

  <style media="screen">
    strong{
      font-weight: 600;
    }
  </style>

</head>

<body>

  <header id="header" class="header header-hide pt-2 pb-2" style="height: 65px; ">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span>Postgraduateforum</span>2020</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="./template/img/iw-logo.png" alt="" title="" style="width: 150px;" /></a> -->
      </div>

      <nav id="nav-menu-container" class="menu_position_1">
        <ul class="nav-menu">
            <li class="menu-active"><a href="#Home">Home</a></li>
            <li><a href="#Background">About</a></li>
            <!-- <li class="menu-has-children"><a href="Javascript:void(0)">Date</a>
            <ul>
                <li><a href="#ImportantDate">Important Dates</a></li>
                <li><a href="#Timetable">Timetable</a></li>
            </ul> -->
            <li><a href="#Registration">Registration & Submission</a></li>
            <li><a href="#Accommodation">Accommodation</a></li>
            <li><a href="#Contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="Home" class="wow fadeIn" style="margin-top: 40px;">
    <div class="hero-container">
      <video width="100%" controls autoplay muted id="mainVideo">
        <source src="https://fxplor.com/media/upload/FullClip1Minwithsound.mp4" type="video/mp4">
      </video>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Features Section
  ============================-->

  <section id="Background" class="padd-section text-center wow fadeInUp-  pb-2">
    <div class="container">
      <div class="section-title text-left mb-3">

        <h1 class="text-center" style="font-size: 44px; font-weight: 600;">The 14<sup>th</sup> Postgraduate Forum <br>on Health Systems and Policy</h1>
        <h2 class="text-center" style="font-size: 30px; font-weight: 600; margin-top: 20px; margin-bottom: 50px;">Research in the Era of Universal Health Coverage</h2>

        <!-- <h2 class="th" style="color: #71c65d;">About</h2>
        <hr> -->
        <h3 class="th">Background</h3>
        <p class="separator th">
        <strong>“Ensuring healthy lives and promoting well-being for all at all ages”</strong> is one of the 17 UN
        Sustainable Development Goals, to be achieved by 2030. The essential components of these goals
        need to be prioritized so that all countries can integrate them into their health systems and policies.
        Achieving universal health coverage and providing safe and high-quality healthcare using appropriate
        evidence-based technology are common challenges for all health systems. The core components of a
        well-established health system are infrastructure, human resources, finance and well-organized and
        properly-managed facilities. In order to achieve an efficient and cost-effective health system, the
        World Health Organization recommends four indicators for monitoring health systems: (1) provision
        of healthcare services; (2) investment in equipment, facilities, and the training of health personnel;
        (3) health finance, and; (4) monitoring and evaluation. The measurable outcomes of this monitoring
        process are the people’s state of health, equity of access to healthcare, health system
        responsiveness, the responsibility of people on their health, and the financial burden across socioeconomic gradients. Data and research on the progress and achievement of universal health coverage
        around the world are crucial to health policy makers and researchers in order to monitor the
        situations of each country and explore the interventions to introduce in multi-stakeholder platforms.
        Therefore, “Research in the Era of Universal Health Coverage” will be the theme for the 14th
        Postgraduate Forum on Health Systems and Policies in 2020.
        </p>

      </div>
    </div>

    <div class="container">
      <div class="section-title text-left mb-3">
        <h3 class="th">Aims</h3>
        <ol class="pl-3">
          <li>To share knowledge and disseminate findings of research in all aspects of universal health coverage
at both national and international levels.</li>
          <li>To promote and demonstrate utilization of national data to measure and improve universal health
          coverage.</li>
          <li>
            To strengthen the cooperation and network among educational institutions at national and
            international levels on health systems and policies.
          </li>
        </ol>
      </div>
    </div>

    <div class="container">
      <div class="section-title text-left  mb-3">
        <h3 class="th">Date</h3>
        <p>13-14 July 2020</p>
      </div>
    </div>

    <div class="container">
      <div class="section-title text-left  mb-3">
        <h3 class="th">Venue</h3>
        <p>Conference Center and Health Science Library Building, Faculty of Medicine, Prince of Songkla
University</p>
        <div class="row">
          <div class="col-sm-4">
            <img src="./template/img/vanue-1.png" alt="" class="" style="width: 100%;">
          </div>
          <div class="col-sm-4">
            <img src="./template/img/vanue-2.png" alt="" class="" style="width: 100%;">
          </div>
          <div class="col-sm-4">
            <img src="./template/img/vanue-3.png" alt="" class="" style="width: 100%;">
          </div>
        </div>
      </div>

    </div>

    <div class="container">
      <div class="section-title text-left mb-3">
        <h3 class="th">Activities</h3>
        <ol class="pl-3">
          <li>Keynote Lecture/Plenary sessions/Symposiums</li>
          <li>Oral Presentation</li>
          <li>Poster Presentations</li>
          <li>Presentation of Awards</li>
        </ol>
      </div>
    </div>

    <div class="container">
      <div class="section-title text-left mb-3">
        <h3 class="th">Important date</h3>
        <table class="table table-striped">
          <tbody>
            <tr>
              <td>Registration and abstract submission opening:</td>
              <td>15 November 2019</td>
            </tr>
            <tr>
              <td>Abstract Submission Deadline:</td>
              <td>15 March 2020</td>
            </tr>
            <tr>
              <td>Abstract Acceptance Notification: </td>
              <td>15 April 2020</td>
            </tr>
            <tr>
              <td>Registration Deadline: </td>
              <td>31 May 2020</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="container">
      <div class="section-title text-left mb-3">
        <h3 class="th">Timetable</h3>
          <table class="table table-striped-">
            <tbody>
              <tr style="background: rgb(235, 235, 235);">
                <td colspan="2"><strong>13 July 2020</strong></td>
              </tr>
              <tr>
                <td>     - Opening session</td>
                <td></td>
              </tr>
              <tr>
                <td>     - Keynote lecture</td>
                <td></td>
              </tr>
              <tr>
                <td>     - Plenary sessions</td>
                <td></td>
              </tr>
              <tr>
                <td>     - Symposium</td>
                <td></td>
              </tr>
              <tr>
                <td>     - Oral presentations</td>
                <td></td>
              </tr>
              <tr>
                <td>     - Welcome dinner</td>
                <td></td>
              </tr>

              <tr style="background: rgb(235, 235, 235);">
                <td colspan="2"><strong>14 July 2020</strong></td>
              </tr>
              <tr>
                <td>     - Plenary sessions</td>
                <td></td>
              </tr>
              <tr>
                <td>     - Symposium</td>
                <td></td>
              </tr>
              <tr>
                <td>     - Oral presentations</td>
                <td></td>
              </tr>
            </tbody>
          </table>
      </div>

      <div class="section-title text-left mb-3">
        <h3 class="th mb-2">Agenda</h3>
          <table class="table table-striped- mt-2 table-bordered">
            <tbody>
              <tr>
                <td style="width: 50%;">
                  <strong>Keynote lecture:</strong><br>
                  Moving from evidence to policy: opportunities in the era of universal health coverage (UHC)
                </td>
                <td>
                  <div class="row">
                    <div class="col-4 text-center">
                      <img src="./template/img/Suwit.png" alt="" style="width: 70%;">
                    </div>
                    <div class="col-8 pt-2">
                      <strong>Dr. Suwit Wibulpolprasert</strong><br>
                      International Health Policy Program Foundation and Health Intervention and Technology Assessment Foundation, Thailand
                    </div>
                  </div>

                </td>
              </tr>
              <tr style="background: rgb(232, 232, 232);">
                <td colspan="2"><strong>Plenary session 1: Country experiences on UHC</strong></td>
              </tr>
              <tr>
                <td>•	Managing financial resources for UHC of NCDs in Malaysia</td>
                <td>
                  <strong>Prof Dato' Dr Syed Mohamed Aljunid</strong><br>
                  International Centre for Casemix and Clinical Coding, Faculty of Medicine
                  Universiti Kebangsaan Malaysia, Malaysia
                </td>
              </tr>
              <tr>
                <td>•	Public and private financing in achieving equitable UHC in Indonesia</td>
                <td>
                  <strong>Prof. Laksono Trisnantoro</strong><br>
Health Policy & Management Department,
Faculty of Medicine, Public Health, and Nursing,
Gadjah Mada University, Indonesia
                </td>
              </tr>
              <tr>
                <td>•	Utilization of national data for monitoring UHC in Thailand</td>
                <td>
                  <div class="row">
                    <div class="col-4 text-center">
                      <img src="./template/img/Tippawan.png" alt="" style="width: 70%;">
                    </div>
                    <div class="col-8 pt-2">
                      <strong>Prof. Tippawan Liabsuetrakul</strong><br>
                      Epidemiology Unit, Faculty of Medicine,
                      Prince of Songkla University, Thailand
                    </div>
                  </div>
                </td>
              </tr>
              <tr style="background: rgb(232, 232, 232);">
                <td colspan="2"><strong>Plenary session 2: Research needs for UHC</strong></td>
              </tr>
              <tr>
                <td>•	Research needs for monitoring UHC advancement</td>
                <td>
                  <strong>Prof. Supasit Panurothai</strong><br>
Centre for Health Equity Monitoring Foundation, Phitsanulok Thailand
                </td>
              </tr>
              <tr>
                <td>•	Preparation of UHC for epidemiological and dempgraphic transition</td>
                <td>
                  <div class="row">
                    <div class="col-4 text-center">
                      <img src="./template/img/Mori.png" alt="" style="width: 70%;">
                    </div>
                    <div class="col-8 pt-1">
                      <strong>Dr. Rintato Mori</strong><br>
                      Regional Adviser for Population Aging and Scustainable Development, UNFPA Asia-Pacific Region
                    </div>
                  </div>
                </td>
              </tr>
              <tr style="background: rgb(232, 232, 232);">
                <td colspan="2"><strong>Plenary session 3: Role of policy makers and academia for UHC</strong></td>
              </tr>
              <tr>
                <td>•	What is National Health Security Office (NHSO) needs from academic research?</td>
                <td>
                  <strong>Dr. Wirat Eungpoonsawat</strong><br>
National Health Security Office (NHSO), region 12 Songkhla, Thailand
                </td>
              </tr>
              <tr>
                <td>•	What is academic ready to serve NSHO/UHC mission?</td>
                <td>
                  <strong>Prof. Virasakdi Chongsuvivatwong</strong><br>
Epidemiology Unit, Faculty of Medicine,
Prince of Songkla University, Thailand
                </td>
              </tr>
            </tbody>
          </table>
      </div>

    </div>

  </section>

  <!-- <section id="ImportantDate" class="padd-section text-center wow fadeInUp- pb-2">

  </section> -->

  <!-- <section id="Timetable" class="padd-section text-center wow fadeInUp- pb-2">

  </section> -->

  <section id="Registration" class="padd-section text-center wow fadeInUp- pb-2">
    <div class="container">
      <div class="section-title text-left mb-3">
        <h2 class="th" style="color: #71c65d;">Registration & Submission</h2>
        <hr>
        <h3>Registration</h3>
        <div class="row">
          <div class="col-12 pt-3">
            <button type="button" class="btn btn-success btn-lg" style="font-size: 1em;" onclick="window.location = 'login'">Register</button>
            <div class="text-danger pt-2">
              ** For presenter or author, please submit your abstract first and register after get an acceptant. <a href="login">- Click here to submit your abstract -</a>
            </div>
          </div>
        </div>
        <p>
          <h4>Estimated participants :</h4>
          100 persons.
        </p>
        <p>
          <h4>Registration fee :</h4>
           3,500 baht or 120 USD per person.
           <div class="text-muted" style="font-size: 0.8em;">
             <strong>Note:</strong> Send the registration fee via bank transfer to the bank account shown below. After the transfer,
please attach the scanned receipt in the registration system.
           </div>
        </p>
        <div class="p-3 mb-4" style="background: rgb(241, 241, 241); font-family: 'Montserrat', sans-serif !important;">
          <strong>Account Holder’s Name:</strong> Faculty of Medicine, Prince of Songkla University (Meeting)<br>
          <strong>Bank Name:</strong> The Siam Commercial Bank PCL<br>
          <strong>Bank Address:</strong> 15 Karnjanawanich Road, Hat Yai, Songkhla, Thailand, 90110<br>
          <strong>Account Number:</strong> 565-2-64561-2<br>
          <strong>Swift Code:</strong> SICOTHBK
          <hr>
          <div class="text-danger">
            Please send proof of payment to the congress secretariat, Anyawadee Limwachirachot (E-mail:
            bags.anyawadee@gmail.com)
          </div>
        </div>
        <h4>Remarks</h4>
        <ol>
          <li>Registration fee includes coffee breaks, lunch and lecture materials.</li>
          <li>Registration form without payment will NOT be processed.</li>
          <li>Please do NOT send cash.</li>
          <li>Congress Secretariat will send a letter of confirmation upon receipt of your registration
          form and full payment. Kindly check the letter of confirmation. Any changes or alterations must be made in writing to the Congress Secretariat.</li>
          <li>On-site registration is not encouraged.</li>
          <li>
            Cancellation policy:
            <ul>
              <li>Before 15 June 2020: Refund 50% of the registration fee.</li>
              <li>After 30 June 2020: No refund.</li>
            </ul>
          </li>
          <li>The program is subject to change without prior notice. In the event of cancellation, the
          organizers will refund all fees paid. The organizers will accept no other liability.</li>
          <li>All personal information collected will be solely used for registration and communication
          purposes.</li>
          <li>For registrants from Prince of Songkla University in Thailand, Universitas Gadjah Mada in
          Indonesia and Universiti Kebangsaan Malaysia in Malaysia, please contact the contact person
          of the Networking Project for International Postgraduate Forum of Health Systems and
          Policies in your university</li>
        </ol>
      </div>
    </div>

    <div class="container">
      <div class="section-title text-left mb-3 mt-5">
        <h3 class="mb-3">Submission</h3>
        <div class="row">
          <div class="col-12 pt-1  pb-3">
            <button type="button" class="btn btn-success btn-lg" style="font-size: 1em;" onclick="window.location = 'login'">Submit your abstract.</button>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-8 col-md-9">
            <h4>Abstract Submission Guidelines </h4>
            <p>
              Abstracts should report an original work that has not been previously published or presented in other
    conferences. All abstracts will be published in the supplementary issue of the Journal of Health
    Science and Medical Research. <a href="https://www.jhsmr.org/index.php/jhsmr" target="_blank">https://www.jhsmr.org/index.php/jhsmr</a>
            </p>

            <h4>Presentations</h4>
            <p class="mb-1">
              The presenting author must be registered as a delegate to the conference after receiving notification
    for their abstract acceptance. The presenting author is responsible for all expenses incurred in the
    production of their presentations and for travel and accommodation during the conference. <u class="text-danger">Please
    register as a delegate before 31 May 2020</u > to ensure that the abstract is published in the program
    book.
            </p>

          </div>
          <div class="col-12 col-sm-4 col-md-3">
            <img src="./template/img/poster_jhsmr.jpg" alt="" style="width: 100%;">
          </div>
        </div>

      </div>

      <!-- <div class="section-title text-left mb-3">

      </div> -->

      <div class="section-title text-left mb-3">
        <h4>Abstract categories</h4>
        <p class="mb-1">
          Scientific abstracts for oral or poster presentation of research related to the universal health
coverage are welcome. For review purposes, submitted abstracts will be grouped into the following
categories:
            <p class="pl-4">
              - Health system and policy<br>
              - Health workforce and finance<br>
              - Primary health care<br>
              - Health equity<br>
              - Health in sustainable development goals
            </p>
        </p>
      </div>

      <div class="section-title text-left mb-3">
        <h4>Abstract format</h4>
        <p class="mb-1">
          • Abstracts should have a maximum length of 250 words and be structured as follows:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Title should be brief but clearly indicating the content of the paper. Abbreviations may not
          be used.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Authors' names and their institutional affiliations. The name of the presenter should be
          underlined.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Objective(s) should be clearly stated.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Methods should contain sufficient detail to evaluate their appropriateness and novelty<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Results should be stated in sufficient detail to support the conclusions. Any abstracts
          containing “results will be discussed” or “data will be presented” will not be accepted.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Conclusions reached.<br>
          • Font name and size: Times New Roman, sized 12 points, 1.5 line spacing.<br>
          • Indent each paragraph with a tab space before beginning the text.<br>
          • Do not use underlining, bold, or capitalization for emphasis.<br>
          • Do not include tables, graphs or figures.
        </p>
        <p class="text-danger">
          ** Abstracts will be rejected if they do not comply with the above format.
        </p>
      </div>

      <div class="section-title text-left mb-3">
        <h4>Instructions for abstract submission </h4>
        <p class="mb-1">
          • All abstracts must be submitted through the online abstract system. The presenting author will
          receive an email acknowledging that the abstract has been successfully submitted.<br>
          • The following contact information is required for the presenting author: first name, last name,
          department, institution, street address, city, state/province, country, phone number and a valid
          e-mail address.<br>
          • One of the following presentation preferences must be selected:<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Oral presentation: the abstract will be considered for oral presentation only.<br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Poster presentation: the abstract will be considered for poster presentation only.
        </p>
      </div>

    </div>


  </section>

  <section id="Accommodation" class="padd-section text-center wow fadeInUp- pb-2">
    <div class="container">
      <div class="section-title text-left">
        <h2 class="th" style="color: #71c65d;">Accommodation</h2>
        <hr>
        <p>
          Special arrangements have been made with the following hotels for participants of our conference.
We will arrange transportation from the hotel to the meeting venue if you stay in these hotels.
Information concerning transportation to and from these hotels will be announced each day.
        </p>

      </div>
    </div>
  </section>

  <section id="Contact" class="padd-section text-center wow fadeInUp- pb-2">
    <div class="container">
      <div class="section-title text-left">
        <h2 class="th" style="color: #71c65d;">Congress Secretariat:</h2>
        <hr>
        <p>
          <strong>Tel:</strong> Local contact: 074-451165, 074-451166<br>
          <strong>International contact:</strong> +66 816981092<br>
          <strong>Email:</strong> bags.anyawadee@gmail.com
        </p>

      </div>
    </div>
  </section>

  <!--==========================
    Footer
  ============================-->
  <?php include "./template/componants/footer.php"; ?>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="./template/lib/jquery/jquery.min.js"></script>
  <script src="./template/lib/jquery/jquery-migrate.min.js"></script>
  <script src="./template/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./template/lib/superfish/hoverIntent.js"></script>
  <script src="./template/lib/superfish/superfish.min.js"></script>
  <script src="./template/lib/easing/easing.min.js"></script>
  <script src="./template/lib/modal-video/js/modal-video.js"></script>
  <script src="./template/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="./template/lib/wow/wow.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="./template/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="./template/js/main.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      // $('#mainVideo').play();
    })
  </script>

</body>
</html>
