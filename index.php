<!doctype html>
<html lang="en">
  <!-- alert messeage for email sent freelancer abu laise -->

 <?php
 
 if (isset($_REQUEST['action'])) {
     echo "<script> alert('Thank you  for Contact us . We wil contact you as soon as possible . Have a nice day.')</script>";
 }
  if (isset($_REQUEST['action2'])) {
     echo "<script> alert('Contact With Eamil or Phone number')</script>";
 }
 
 ?> 
 <!-- alert success meseage ennd here -->
 
<head>
  <title>abulaise.com</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- link for fontAwose cdn link -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
    integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- link for favicon icon -->
    <link rel="shortcut icon" href="img/banner-img(3).png" type="image/png">
  <!-- link for custom css -->
  <link rel="stylesheet" href="style.css">
  
</head>

<body>
 


  <!-- navbar start here -->
  <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top" id="navbar">
    <div class="container">
      <a id="text-logo" class="navbar-brand text-white" href="index.php">Abu Laise</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item  ">
            <a class="nav-link text-white" href="index.php">Home </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#about_me">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#service_section">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#portfollio_se">Portfllio</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#contact_us_se">Contact Us</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- navbar end here -->

  <!-- bannner section start here -->
  <section class="banner_section" >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="inner_left_content">
            <h3 id="ba_h3">Welcome to Freelancer Abu Laise</h3>
            <div class="type_text_aniamtin">
              <h3 id="type_heading">I AM</h3>
              <h4 id="change_type_text"> Developer</h4>
            </div>
            <h1 id="ba-h1">Get your website & Mobile Apps developed today</h1>
            <p id="banner-paragraph"> I always try to apply myself and my experience in developing web applications with
              all my zeal, freedom &
              enhanced responsibilities. I have worked for various organization for past 4 years primarily in web
              application developments.</p>
            <div class="solical_media">
              <span class="ss">Follow me</span>
              <a target="_blank" href="https://www.linkedin.com/in/abu-laise-630a13205/"> <i
                  class="fab fa-linkedin-in"></i></i></a>
              <a target="_blank" href="https://twitter.com/AbuLaise17"> <i class="fab fa-twitter"></i></a>
              <a target="_blank" href="https://www.instagram.com/abulaise2022/"> <i class="fab fa-instagram"></i></a>
              <a target="_blank" href="https://github.com/programmerabulaise/programmerabulaise"><i
                  class="fab fa-github"></i></a>
              <a target="_blank" href="https://stackoverflow.com/users/15475562/abu-laise"> <i
                  class="fab fa-stack-overflow"></i> </a>
              <a target="_blank" href="https://www.facebook.com/abu.laise.104"> <i class="fab fa-facebook-f"></i> </a>





            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6  ">
          <div class="banner_right_content">
            <img src="img/banner-img(3).png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bannner section end here -->
 
  <!--  abuout me section start here -->
  <section class="about_me_section" id="about_me">
    <div class="container">

      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="ab-Image">
            <img src="img/me.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="about-dis">
            <small class="ab_f-h">About Me</small>
            <h1 class="ab_titel">Full-Strick Web Developer</h1>
            <p class="about_para">
              Web desinen & Development is my passion , I det deepr to undrstand clients need & problems .my mission
              is
              to satisfy every client and become amy self a poro developer tolear new updates every day . you will get
              lifetime support in any situation, I premise that You will get fanatical support and absolutely
              positively
              one-time Delivery .

            </p>
            <button class="about_btn">
              Hire Me
            </button>
          </div>
        </div>

      </div>


    </div>
  </section>
  <!--  abuout me section end here -->
<?php  ?>
  <!-- my service sectio start here -->

  <section class="myservice_secton" id="service_section">
    <div class="container">
      <div class="head_title">

        <h2 class="sill_to">MY Services</h2>
      </div>
      <div class="service_wrappe">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="inner_ser">
              <i class="fas fa-laptop"></i>
              <h3 id="ser_inner_h">WEB DESIGN</h3>
              <p id="ser_i_p">We provide Professional and affordable websites from a team you can trust</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="inner_ser">
                <i class="fas fa-code"></i>
              <h3 id="ser_inner_h">WEB DEVELOPMENT</h3>
              <p id="ser_i_p">We are dedicated to providing best services. Our goal is your satisfaction</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="inner_ser">
              <i class="fas fa-mobile-alt"></i>
              <h3 id="ser_inner_h">RESPONSIVE DESIGN</h3>
              <p id="ser_i_p">We provide responsive web design which attracts & engages your customers across all platforms</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="inner_ser">
                  <i class="fab fa-android"></i>
              <h3 id="ser_inner_h">APPS DEVELOPMENT</h3>
              <p id="ser_i_p">We Built World-Class Apps for World’s Most-Used OS with perfect coding structure</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="inner_ser">
              <i class="fab fa-wordpress-simple"></i>
              <h3 id="ser_inner_h">WORDPRESS</h3>
              <p id="ser_i_p">We offer 24/7 WordPress support services for website owners & white-label partners.</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="inner_ser">
              <i id="seo_icon" class="fas fa-sort-amount-down-alt"></i>
             
              <h3 id="ser_inner_h">SEO</h3>
              <p id="ser_i_p">We can help the search engines find your pages and get them in front of your audience</p>
            </div>
          </div>
           <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="inner_ser">
              <i class="fas fa-database"></i>
             
              <h3 id="ser_inner_h">Database Managment</h3>
              <p id="ser_i_p">we will mantain your any type of database like My Sql,Mongodb,Sqilit and so more</p>
            </div>            
          </div>
                 <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="inner_ser">
             <i class="fas fa-palette"></i>
              <h3 id="ser_inner_h">GRAPHICS DESIGN</h3>
              <p id="ser_i_p">Our designers are experienced in creating the graphics that truly reflect our clients business</p>
            </div>            
          </div>
            
        
        
      
         
       
        </div>
      </div>
    </div>
  </section>
  <!-- my service sectio end here -->

  <!-- my-skill section start hare -->
  <section class="my_skill_section">
    <div class="container">
      <div class="head_title">

        <h2 class="sill_to">My skills</h2>
      </div>
      <div class="skill_wrapper">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="skill_under_wrapper">
              <div class="pro_slill_grace">
                <h4 id="spe-skill">Design</h4>
                <div class="Pro_con">
                  <small id="design_pre_pr"> </small>
                  <small id="design_pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">Css</h4>
                <div class="Pro_con">
                  <small id="css"> </small>
                  <small id="css-pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">Bootstrap</h4>
                <div class="Pro_con">
                  <small id="bootstrap"> </small>
                  <small id="boo-pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">Laravel</h4>
                <div class="Pro_con">
                  <small id="larvel"> </small>
                  <small id="laravel-pro"> </small>
                </div>
              </div>


            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="skill_under_wrapper">
              <div class="pro_slill_grace">
                <h4 id="spe-skill">WEB DEVELOPMETN</h4>
                <div class="Pro_con">
                  <small id="development"> </small>
                  <small id="development_pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">JAVA SCRIPT</h4>
                <div class="Pro_con">
                  <small id="javs"> </small>
                  <small id="javs-pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">WORDPRESS</h4>
                <div class="Pro_con">
                  <small id="Wordpress"> </small>
                  <small id="Wordpress-pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">AJAX</h4>
                <div class="Pro_con">
                  <small id="ajax"> </small>
                  <small id="ajax-pro"> </small>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="skill_under_wrapper">
              <div class="pro_slill_grace">
                <h4 id="spe-skill">HTML</h4>
                <div class="Pro_con">
                  <small id="html"> </small>
                  <small id="html-pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">JQUERY</h4>
                <div class="Pro_con">
                  <small id="jquery"> </small>
                  <small id="jquery-pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">PHP</h4>
                <div class="Pro_con">
                  <small id="php"> </small>
                  <small id="php-pro"> </small>
                </div>
              </div>
              <div class="pro_slill_grace">
                <h4 id="spe-skill">REACT.JS</h4>
                <div class="Pro_con">
                  <small id="react"> </small>
                  <small id="react-pro"> </small>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- my-skill section end hare -->



  <!-- how i work section start here -->
  <section class="how_i_work">
    <div class="container">
      <div class="head_title">
        <h6 id="hit_title">How do i work ?</h6>
        <h2 id="contact_us">I'm Available For Hire</h2>
      </div>
      <div class="how-w-wrapper">

        <div class="row">
          <div class="col-lg-4  col-sm-12 col-md-6">
            <div class="work-wrapper">
              <div class="work-icon">
                <i class="fas fa-lightbulb"></i>
              </div>
              <h3 id="work-span"> Discussion</h3>
              <p id="work_par">To understand the project needs & requirements it’s very important for me, for that I
                discuss with every details to related projects if needed I communicate by video or audio conversations.
              </p>
            </div>
          </div>
          <div class="col-lg-4  col-sm-12 col-md-6">
            <div class="work-wrapper">
              <div class="work-icon">
                <i class="fab fa-readme"></i>
              </div>
              <h3 id="work-span"> Planning</h3>
              <p id="work_par">Then I can create a plan for the interior projects. Planning gives high potential to
                every projects. Every single detail listed in the plan, when I deliver, when I need website data form
                you.
              </p>
            </div>
          </div>
          <div class="col-lg-4  col-sm-12 col-md-6">
            <div class="work-wrapper">
              <div class="work-icon">
                <i class="fab fa-accessible-icon"></i>
              </div>
              <h3 id="work-span"> Design</h3>
              <p id="work_par">I give highly concentration to website design, every time I try to give my best to do
                clean and services related awesome design for the website. A nice design can improve your business
                quality.</p>
            </div>
          </div>
          <div class="col-lg-4  col-sm-12 col-md-6">
            <div class="work-wrapper">
              <div class="work-icon">
                <i class="fas fa-code"></i>
              </div>
              <h3 id="work-span"> Coding</h3>
              <p id="work_par"> Coding The website is built by web language that’s why we need to code for every
                website. it’s very important to have hand coding, clean and developer friendly coding. I give 100%
                guarantee in all of them.
              </p>
            </div>
          </div>
          <div class="col-lg-4  col-sm-12 col-md-6">
            <div class="work-wrapper">
              <div class="work-icon">
                <i class="fas fa-user-edit"></i>
              </div>
              <h3 id="work-span"> Submit for Review</h3>
              <p id="work_par"> Submit for Review After design and coding, I send for review to client. After client’s
                checking, If have to change or revision, I say client to send all of them in a list and I am happy to do
                all changes every time.
              </p>
            </div>
          </div>
          <div class="col-lg-4  col-sm-12 col-md-6">
            <div class="work-wrapper">
              <div class="work-icon">
                <i class="fas fa-check-double"></i>
              </div>
              <h3 id="work-span"> Website Is Ready!</h3>
              <p id="work_par">After reviewing everything, we are going to the final step, if everything has done, then
                I can publish it for everyone. In every project, i make sure to give full support to the clients.
                .</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- how i work section end here -->

  <!-- section for lightbo start here  -->
  <section class="light_bx"  >
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-12"></div>
      <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="lightbox_inner_dive_box">
          <i id="close_lightbox" class="far fa-times-circle"></i>
          <div class="innerim">
            <img id="inne_l_im" src=" " alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-12"></div>
    </div>
  </section>
  <!-- section for lightbo end here  -->
  <!-- my portfollio section start here  -->
  <section class="my_portfollio"  id="portfollio_se">
    <div class="container">
      <div class="head_title">

        <h2 id="contact_us">My Portfollio</h2>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="port_itme_navbar">


            <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'London')">All Project</button>
              <button class="tablinks" >Woocommarece </button>
              <button class="tablinks"  >Corporrate</button>
              <button class="tablinks"  >Portfollio</button>
              <button class="tablinks"  >Busniess</button>
            </div>

            <div id="London" class="tabcontent">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="p_img">
                    <img class="p-img1" src="img/my_port_short.png" alt="">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="p_img">
                    <img class="p-img2" src="img/eonrealit (2).jpg" alt="">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="p_img">
                    <img class="p-img3" src="img/recume_home.png" alt="">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="p_img">
                    <img class="p-img4" src="img/crar_short.png" alt="">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="p_img">
                    <img class="p-img5" src="img/abu_prot1_shor.png" alt="">
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="p_img">
                    <img class="p-img6" src="img/topjob_home.png" alt="">
                  </div>
                </div>



              </div>

            </div>
 

             
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- my portfollio section end here  -->

  <!-- contact us section start here -->
  <section class="contact_us" id="contact_us_se">
    <div class="container">
      <div class="head_title">
        <h2 id="contact_us">Contact Us</h2>
      </div>
      <div class="cont_header">
        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cont_wrapper">
              <div class="cont-img">
                <i class="fas fa-mobile-alt"></i>
              </div>
              <h6>Call me</h6>
              <h6> (+91)<a href="tel:9365421673">9365421673</a></h6>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 ">
            <div class="cont_wrapper">
              <div class="cont-img">
                <i class="fas fa-home"></i>
              </div>
              <h6>My Location</h6>
              <h6>Assam,Guwahati,India</h6>

            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cont_wrapper">
              <div class="cont-img">
                <i class="fas fa-envelope"></i>
              </div>
              <h6>Mail</h6>
              <h6>abulaise2099@gmail.com</h6>
            </div>
          </div>



        </div>
      </div>

      <div class="row">

        <div class="col-lg-12 ">
          <div class="cont_form_wrapper">
            <form action="mail.php" method="POST" >
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="form-group  ">

                    <input type="text" name="name" required class="form-control" id="name" placeholder="Enter your Name"/>
                  </div>
                  <div class="form-group  ">
                       <div class="form-group  ">

                    <input type="email" name="email" required  class="form-control" id="email" placeholder="Enter your Email"/>
                  </div>

                    <input type="number" name="phone_number" required class="form-control" id="phon" placeholder="Enter your phone Number"/>
                  </div>
               
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group  ">

                    <textarea name="messeage" class="form-control" required  placeholder="Enter your messeage"   id="text_area" cols="100"
                      rows="5"></textarea>
                  </div>
                </div>
              </div>

              </div>
              <div class="form_sb">
                <input class="btn btn-danger" type="submit" vlaue="Submit"   id="submitdata"/>  
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- contact us section end here -->

  <!-- start fotter section  -->
  <footer>
    <section class="fotter_secton1">
      <div class="fone_content">
        <h6> &copy; Copyright | 2021 | Abu Laise | All rights reserved</h6>

      </div>
    </section>
  </footer>
  <!-- end fotter section  -->
 
 
  <script>
 


    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>
  <!-- Optional JavaScript -->
  <script type="text/javascript" src="typing.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>