<?php
include"../dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<link rel="shortcut icon" href="../images/mepplogo3.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" >

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
	integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
	crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	

  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/skin_color.css">

    <title>Mepp Communications Limited</title> 
  </head>

<body class="theme-primary">
	  <!-- NABVAR PART HTML
  =================================== -->

  <div class="wrapper">
    <header id="home">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a href="index.html" class="navbar-brand"><img src="../images/mepplogo3.png" alt="logo" height="52" width="52"class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="toggle-icon"><i class="navbar-toggler-icon"></i></span>
          </button>
          <div class="collapse navbar-collapse ms-auto" id="menu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item "><a class="nav-link js-scroll-trigger" href=".../index.html">Home</a></li>
              <li class="nav-item dropdown"><a class="nav-link  dropdown-toggle" href="#" id="Click" role="menu"
                data-bs-toggle="dropdown"  aria-expanded="false">About</a>
                <ul class="dropdown-menu" aria-labelledby="Click">
                  <a class="dropdown-item js-scroll-trigger" href=".../index.html#about">About</a>
                  <a class="dropdown-item" href=".../aboutus.html">About Us</a>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link  dropdown-toggle" href="#" id="Click" role="menu"
                data-bs-toggle="dropdown"  aria-expanded="false">Careers</a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="Click">
                  <a class="dropdown-item js-scroll-trigger" href="#Careers">Careers</a>
                  <a class="dropdown-item" href=".../careers.html">Graduates Programmes</a>
                  <a class="dropdown-item" href=".../careers.html">Experienced Candidates</a>
                </ul>
              </li>
              <li class="nav-item "><a class="nav-link js-scroll-trigger active" href="#">Blogs</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href=".../index.html#pack">Our Services</a></li>
              <li class="nav-item dropdown"><a class="nav-link  dropdown-toggle" href="#" id="Click" role="menu"
                data-bs-toggle="dropdown"  aria-expanded="false">Developers</a>
                <ul class="dropdown-menu" id="developers" aria-labelledby="Click">
                 <li> <a class="dropdown-item js-scroll-trigger" href="https://vas.meppcommunications.com/site/register" target="blank">USSD Intergration</a></li>
                 <li><a class="dropdown-item" href="https://vas.meppcommunications.com/site/register" target="blank">Bulk SMS Intergration</a></li>
                 <li><a class="dropdown-item" href="https://vas.meppcommunications.com/site/register" target="blank">Short Codes Intergration</a></li>
                 <li><a class="dropdown-item" href="https://vas.meppcommunications.com/site/register" target="blank">IVR Intergration</a></li>
                 <li><a class="dropdown-item" href="https://vas.meppcommunications.com/site/register" target="blank">Mobile Intergrations</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
              <li class="nav-item">
                <div class="num">
                  <span><i class="fas fa-headset"></i></span>
                  <span>
                    <p>Have any Question? <br>
                      <b> Call: +254704221121</b>
                    </p>
                  </span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  </div>
	
	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">Blog Grid</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Blog Grid</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50" style="font-size:14px;">
		<div class="container">
			<div class="row">
      <?php foreach($row_mepp_blog as $blog){?>
				<div class="col-md-6 col-12">
					<div class="blog-post">
						<div class="entry-image clearfix">
							<a href="<?php echo "blog_single.php?id=$blog->id";?>"><img class="img-fluid" src="<?php echo "../images/$blog->imagepath";?>" alt=""></a>
						</div>
						<div class="blog-detail">
							<div class="entry-title mb-10">
								<a href="#"><?php echo "$blog->name";?></a>
							</div>
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="far fa-folder-open-o" ></i> <?php echo "$blog->services";?></a></li>
									<li><a href="#"><i class="fas fa-comment-o"></i> 5</a></li>
									<li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2020</a></li>
								</ul>
							</div>
							<div class="entry-content">
								<p><?php echo substr_replace($blog->description, "...", 100);?></p>
							</div>
							<div class="entry-share d-flex justify-content-between align-items-center">
								<div class="entry-button">
									<a href="<?php echo "blog_single.php?id=$blog->id";?>" class="btn btn-primary btn-sm" style="font-size:14px;">Read more</a>
								</div>
								<div class="social">
									<strong>Share : </strong>
									<ul class="list-unstyled">
										<li>
											<a href="#"> <i class="fab fa-facebook"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fab fa-instagram"></i> </a>
										</li>
										<li>
											<a href="#"> <i class="fab fa-dribbble"></i> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
       
				</div>
				<?php } ?>
			</div>
    </div>
 
	</section>	
	
	
	
	
	 <!-- FOOTER
  ================================== -->

  <footer>
    <div id="main-footer">
      <div class="container">
        <div class="row text-center text-md-start">
          <div class="col-md-4">
            <h3 class="fh-text">Get In Touch</h3>
            <p><span class="f-icon me-3"><i class="fas fa-map-marker-alt"></i></span>Riara Centre <span class="d-lg-block">off Riara Road</span>
            </p>
            <p><span class="f-icon me-3"><i class="fas fa-phone-alt"></i></span>+254704221121</p>
            <p><span class="f-icon me-3"><i class="fas fa-phone-alt"></i></span>+254704221121</p>
            <p class="pb-5 mb-4"><span class="f-icon me-3"><i
                  class="fas fa-envelope"></i></span>info@meppcommunications.com
            </p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="fh-text" id="sharelove">Share with Love</h3>
            <div class="s-icon pt-2">
              <a href="https://www.facebook.com/meppcom/?ref=pages_you_manage" target="_blank"><i
                  class="fab fa-facebook-f  fs-3"></i></a>
              <a href="https://twitter.com/mepplimitedKE" target="_blank"><i
                  class="fab fa-twitter  fs-3"></i></a>
              <a href="https://www.instagram.com/meppcommunicationsltd/" target="_blank"><i
                  class="fab fa-instagram  fs-3"></i></a>
              <a href="https://ke.linkedin.com/in/meppcommunicationsltd" target="_blank"><i
                  class="fab fa-linkedin fs-3 "></i></a>
            
            </div>
          </div>
          <div class="col-md-4 mt-3 mt-md-0">
            <div class="row justify-content-lg-end justify-content-md-center">
              <div class="col-lg-6">
                <h4 class="  text-light">MEPP COMMUNICATIONS LIMITED</h4>
                <p class="fs-5">The Work of Tomorrow.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <p class="mb-0 fw-bold"> All Copyright Rights Reserved <span id="copyright"></span> © MEPP COMMUNICATIONS LIMITED</p>
          <p class="mt-2 fs-5">Made with <span class="text-danger fs-4">&hearts; </span><span class="text-white"> by
              Mepp Communications Limited</span></p>
        </div>
      </div>
    </div>
    <a href="#home" id="back-to-top-btn"><i class="fas fa-angle-double-up"></i></a>
  </footer>
  
  <!--mepp facebook icon-->
  <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    
 

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "112464197118508");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v13.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    
   

  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Swiper JS  -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- Custom JS  -->
  <script src="js/custom.js"></script>
  
    <!--prevents download of images from the website-->
  <script src="js/protect-image-download.js"></script>
	
	
	<!-- Vendor JS -->
	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<!-- <script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="../assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script> -->
	
	<!-- EduAdmin front end -->
	<script src="js/template.js"></script>
	<script src="js/pages/widget.js"></script>
	
	
	
</body>
</html>
