<?php
require_once "../dbconnect.php";
 if (isset($_GET['id'])){
$mepp_singleblog = $pdo->prepare("SELECT * FROM blogs WHERE id = :id");
$mepp_singleblog ->bindParam(':id', $id);
$id = $_GET['id'];
$mepp_singleblog->execute();
$row_mepp_blog = $mepp_singleblog->fetch(); 
$date = strtotime( $row_mepp_blog["date"]);
$mysqldate = date( 'F-d-Y', $date );
$mysqltime = date( 'H:i:s', $date );

 }
 else{
	header('blog_grid_2.php');
 }
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
	

  <link rel="stylesheet" href="css/style.css" />
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
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
              <li class="nav-item "><a class="nav-link js-scroll-trigger" href="#home">Home</a></li>
              <li class="nav-item dropdown"><a class="nav-link  dropdown-toggle" href="#" id="Click" role="menu"
                data-bs-toggle="dropdown"  aria-expanded="false">About</a>
                <ul class="dropdown-menu" aria-labelledby="Click">
                  <a class="dropdown-item js-scroll-trigger" href="#about">About</a>
                  <a class="dropdown-item" href="aboutus.html">About Us</a>
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
			  <li class="nav-item "><a class="nav-link js-scroll-trigger active" href="blog_grid.php">Blogs</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pack">Our Services</a></li>
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
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href=".../index.html#contact">Contact</a></li>
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
	<!--Page content -->
	
	<section class="py-50" style="font-size:14px;">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-12">
					<div class="blog-post mb-30">
						<div class="entry-image clearfix">
							<img class="img-fluid" src="<?php echo "../images/$row_mepp_blog[imagepath]";?>" alt="">
						</div>
						<div class="blog-detail">
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-folder-open-o"></i> <?php echo $row_mepp_blog['services'];?></a></li>
									<li><a href="#"><i class="fa fa-comment-o"></i> <?php echo $mysqltime;?></a></li>
									<li><a href="#"><i class="fa fa-calendar-o"></i><?php echo $mysqldate;?></a></li>
								</ul>
							</div>
							<hr>
							<div class="entry-title mb-10">
								<a href="#" class="fs-24"><?php echo $row_mepp_blog['name'];?></a>
							</div>
							<div class="entry-content">
								<p><?php echo $row_mepp_blog['description'];?></p>
								<p>David Ogilvy, the advertising legend once said that, On average, five times as many people read the headline as read the body copy. When you have written your headline, you have spent eighty cents out of your dollar." As Ogilvy points out, your headline is the first (and sometimes the only) thing that your audience will read.</p>
								<p>You just need to enter the keyword and select the keyword type to generate a list of 6 title ideas and suggestions. If you’re not satisfied with the results, you can always hit the refresh button to generate a new list of unique titles.</p>
								<p>Once you’ve gotten all the titles and have chosen the best one, the next thing you need to do is to craft a magnetic content. Great content marketers excel at creating content that their readers crave, but even the best struggle with delivering content to the right person at the right time.</p>
							</div>	
							  <blockquote class="blockquote mt-20 pb-0 mb-0">
								  <p>MEPP Communications Ltd is a good balance of being small enough to get to know a lot of colleagues whilst big enough to be an exciting place to work, with a variety of projects to get involved in. It’s a professional place to work without being too corporate. People are friendly and always supportive and willing to help one another. </p>
								  <footer class="blockquote-footer">Mepp Comm<cite title="Source Title"> Riara</cite></footer>
							  </blockquote>	
						</div>
					</div>
					
					<div class="box">
						<div class="box-body">							
						  <div class="widget">
								<h4 class="mt-0 pb-15 mb-25 bb-1">Share</h4>
								<ul class="list-inline mb-0">
									<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li> 
									<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-instagram"><i class="fa fa-instagram"></i></a></li> 
									<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></a></li> 
									<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i class="fa fa-youtube"></i></a></li>  
								</ul>							
							</div>
						</div>
					</div>
					
					<div class="box">
						<div class="box-body">							
						  	<div class="widget">
								<h4 class="mt-0 pb-15 mb-25 bb-1">Leave a Reply</h4>
								<form id="contactform" class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Website URL">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Your Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Email Adress">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group">
											<input type="email" class="form-control" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<textarea class="form-control" rows="7" placeholder="message"></textarea>
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<button name="submit" type="submit" value="Send" class="btn btn-primary"><span>Submit Now</span></button>
									</div>
								</form>							
						  	</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					<div class="side-block px-20 py-10 bg-white">
						<div class="widget courses-search-bx placeholdertx mb-10">
							<div class="form-group">
								<div class="input-group">
									<label class="form-label">Search...</label>
									<input name="name" type="text" required="" class="form-control">
								</div>
							</div>
						</div>	
						
						<div class="widget clearfix">
							<h4 class="pb-15 mb-25 bb-1">Archives</h4>
							<ul class="list list-unstyled">
								<li><a href="#"><i class="fa fa-angle-double-right"></i> November 2020</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> October 2020</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> September 2020</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> August 2020</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> July 2020</a></li>
							</ul>
						</div>
						
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Meta</h4>
							<ul class="list list-unstyled">
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Log in</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Entries RSS</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Comments RSS </a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Online</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> WordPress.org</a></li>
							</ul>
						</div>
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Recent Posts </h4>
							<?php foreach($row_mepp_blogrecent as $blog) {?>
							<div class="recent-post clearfix">
								<div class="recent-post-image">
								<a href="<?php echo "blog_single.php?id=$blog->id" ?>"><img class="img-fluid bg-primary-light" src="<?php echo "../images/$blog->imagepath";?>" alt=""></a>
								</div>
								<div class="recent-post-info">
									<a href="<?php echo "blog_single.php?id=$blog->id" ?>"><?php echo $blog->name ?></a>
									<span><i class="fa fa-calendar-o"></i> <?php echo date( 'F d,Y',  strtotime( $blog->date));?></span>
								</div>
							</div>
							<?php } ?>							
						</div>
						
	
						<div class="widget mb-10">
							<h4 class="pb-15 mb-25 bb-1">Quick contact</h4>
							<form class="gray-form">
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputphone" placeholder="Email">
								</div>

								<div class="form-group">
									<textarea class="form-control" rows="4" placeholder="message"></textarea>
								</div>
								<a class="btn btn-primary w-p100" href="#">Submit</a>
							</form>
						</div>	
					</div>
				</div>
			</div>			
		</div>
	</section>	
	
	
	
	
	<footer class="footer_three">
		<div class="footer-top bg-dark3 pt-50">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">About</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<p class="text-capitalize mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis exercitation ullamco laboris<br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                        </div>
                    </div>											
					<div class="col-lg-3 col-12">
						<div class="widget">
							<h4 class="footer-title">Contact Info</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="list list-unstyled mb-30">
								<li> <i class="fa fa-map-marker"></i> 123, Lorem Ipsum, Dummy City,<br>FL-12345 USA</li>
								<li> <i class="fa fa-phone"></i> <span>+(1) 123-878-1649 </span><br><span>+(1) 123-878-1649 </span></li>
								<li> <i class="fa fa-envelope"></i> <span>info@EduAdmin.com </span><br><span>support@EduAdmin.com </span></li>
							</ul>
						</div>
					</div>					
					<div class="col-12 col-lg-3">
                        <div class="widget widget_gallery clearfix">
                            <h4 class="footer-title">Our Gallery</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
                            <ul class="list-unstyled">
								<li><img src="../images/gallery/thumb/1.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/2.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/3.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/4.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/5.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/6.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/7.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/8.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/9.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/10.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/11.jpg" alt=""></li>
								<li><img src="../images/gallery/thumb/12.jpg" alt=""></li>
							</ul>
                        </div>
                    </div>
					<div class="col-lg-3 col-12">
                        <div class="widget">
                            <h4 class="footer-title">Accept Card Payments</h4>
							<hr class="bg-primary mb-10 mt-0 d-inline-block mx-auto w-60">
							<ul class="payment-icon list-unstyled d-flex gap-items-1">
								<li class="ps-0">
									<a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a>
								</li>
							</ul>
                            <h4 class="footer-title mt-20">Newsletter</h4>
							<hr class="bg-primary mb-4 mt-0 d-inline-block mx-auto w-60">
                            <div class="mb-20">
								<form class="" action="" method="post">
									<div class="input-group">
										<input name="email" required="required" class="form-control" placeholder="Your Email Address" type="email">
										<button name="submit" value="Submit" type="submit" class="btn btn-primary"> <i class="fa fa-envelope"></i> </button>
									</div>
								</form>
							</div>
                        </div>
                    </div>
                </div>				
            </div>
        </div>
		<div class="by-1 bg-dark3 py-10 border-dark">
			<div class="container">
				<div class="text-center footer-links">
					<a href="#" class="btn btn-link">Home</a>
					<a href="#" class="btn btn-link">About Us</a>
					<a href="#" class="btn btn-link">Pricing</a>
					<a href="#" class="btn btn-link">Courses</a>
					<a href="#" class="btn btn-link">Blog</a>
					<a href="#" class="btn btn-link">Contact Us</a>
					<a href="#" class="btn btn-link">Privacy Policy</a>
					<a href="#" class="btn btn-link">Terms Of Conditions</a>
				</div>
			</div>
		</div>
		<div class="footer-bottom bg-dark3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-12 text-md-start text-center"> © <script>document.write(new Date().getFullYear())</script> <span class="text-white">Mepp</span>  All Rights Reserved.</div>
					<div class="col-md-6 mt-md-0 mt-20">
						<div class="social-icons">
							<ul class="list-unstyled d-flex gap-items-1 justify-content-md-end justify-content-center">
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="waves-effect waves-circle btn btn-social-icon btn-circle btn-youtube"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
                </div>
            </div>
        </div>
	</footer>
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>	
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="../assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
	
	<!-- EduAdmin front end -->
	<script src="js/template.js"></script>
	<script src="js/pages/widget.js"></script>
	
	
	
</body>
</html>
