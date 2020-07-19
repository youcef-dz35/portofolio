<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Getting to know Youcef</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">





  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span>Y</span>oucef</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
            @if(Session::has('flash_messsage'))
                    <div class="alert alert-success" > {{Session::get('flash_message')}} </div>
                @endif
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container">

        <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
          	<div class="text text-center">

          		<span class="subheading">Hey! I am</span>
		  				<h1>Youcef Kebir</h1>
			  				<h2>I'm a
								  <span
								     class="txt-rotate"
								     data-period="2000"
								     data-rotate='[ "Web Designer.", "Developer.", "Marketer.", "Blogger" ]'></span>
								</h2>
							</div>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/me.png);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 id="about-me" class="mb-4">About Me</h2>
		            <p>Hello my name is youcef and I'm an Algerian PHP Web Developer / CS Student
                        My favorite stack is Laravel, I made so much with it keep scrolling down to see some of my works   </p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span> Youcef Kebir</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>January 20, 1998</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>Mehammed HOUALEM N02 city KEDDARA, BOUMMERDES</span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span>35038</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>kebiryoucef07@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>+213 659170503</span></li>
		            </ul>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text">
              	<p class="mb-4">
	                <span class="number" data-number="3">0</span>
	                <span>Project complete</span>
                </p>
                <p><a href="https://drive.google.com/file/d/1g7dfCXlpuncg3i2GkD9AkjXgqvDeRgf3/view?usp=sharing" class="btn btn-primary py-3 px-3">Download CV</a></p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>



    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
				    <nav id="navi">
					    <ul>
					      <li><a href="#page-1">Education</a></li>
					      <li><a href="#page-2">Experience</a></li>
					      <li><a href="#page-3">Skills</a></li>

					    </ul>
					  </nav>
					</div>
					<div class="col-md-9">
					  <div id="page-1" class= "page one">
					  	<h2 class="heading">Education</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">2016-2019</span>
		    					<h2>Bachelor of Science in Computer Systems (CS) </h2>
		    					<span class="position">University of M'hamed Bougara Boumerdes</span>
								<p>The objective is to handle any business management activity: commercial, administrative, production, financial. Certain piloting activities Any software design and development activity</p>
							</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">From Septembre 2019 intil now</span>
		    					<h2> Software Engineering and Information Processing</h2>
								<span class="position">University of M'hamed Bougara Boumerdes</span>
								<p>
									The objective is to ensures an activity where the associated trades can also be practiced
									both in business and in academic institutions and organizations
									public or private research.</p>
		    					</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">March 2018 - Octobre 2018</span>
		    					<h2>CCNA - Cisco</h2>
		    					<span class="position">Training School Elyacine (Ecole de formation ELYACINE)</span>
								<p>
								Build simple LANs, perform basic configurations for routers and switches, and implement IPv4 and IPv6 addressing schemes. <br>
								Configure routers, switches, and end devices to provide access to local and remote network resources and to enable end-to-end connectivity between remote devices. <br>
								Develop critical thinking and problem-solving skills using real equipment and Cisco Packet Tracer. <br>
								Configure and troubleshoot connectivity a small network using security best practices <br>
								</p>
							</div>
						</div>
					  </div>

					  <div id="page-2" class= "page two">
					  	<h2 class="heading">Experience</h2>
					    <div class="resume-wrap d-flex ftco-animate">
					    	<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">Febuary 2019 - june 2019</span>
		    					<h2>Data scientist trainee </h2>
		    					<span class="position">Nokia Solutions</span>
								<p>Successfully implementing a system to detect any failures in the network and forecasting any upcoming malfunction using Deep Learning LSTM model</p>
							</div>
	    				</div>
	    				<div class="resume-wrap d-flex ftco-animate">
	    					<div class="icon d-flex align-items-center justify-content-center">
					    		<span class="flaticon-ideas"></span>
					    	</div>
					    	<div class="text pl-3">
		    					<span class="date">From 2018</span>
		    					<h2>Full stack Web Developer</h2>
		    					<span class="position">Freelancer</span>
		    					<p>Freelance Developer with 2 plus years of experience. My goal is to
									obtain a remote position as a web developer to learn and advance my
									current skill set and improve the services of the establishment.
								</p>
		    				</div>
	    				</div>

					  </div>
					  <div id="page-3" class= "page three">
					  	<h2 class="heading">Skills</h2>
					  	<div class="row progress-circle mb-5">
					  		<div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
								<h2 class="h5 font-weight-bold text-center mb-4">PHP/Laravel</h2>
								<br>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='80'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">

						          </div>
						        </div>
						        <!-- END -->


						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
								<h2 class="h5 font-weight-bold text-center mb-4">MySQL</h2>
								<br>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='80'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">

						          </div>
						        </div>
						        <!-- END -->


						      </div>
						    </div>

						    <div class="col-lg-4 mb-4">
						      <div class="bg-white rounded-lg shadow p-4">
						        <h2 class="h5 font-weight-bold text-center mb-4">Front End Technologies</h2>

						        <!-- Progress bar 1 -->
						        <div class="progress mx-auto" data-value='75'>
						          <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
						          </span>
						          <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">

						          </div>
						        </div>
						        <!-- END -->


						      </div>
						    </div>
					  	</div>
					  	<div class="row">
					  		<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Laravel</h3>
										<div class="progress">
										 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
										  	aria-valuemin="0" aria-valuemax="100" style="width:85%">

										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>Python</h3>
										<div class="progress">
										 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
										  	aria-valuemin="0" aria-valuemax="100" style="width:80%">

										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>HTML5</h3>
										<div class="progress">
										 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
										  	aria-valuemin="0" aria-valuemax="100" style="width:95%">

										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>CSS3</h3>
										<div class="progress">
										 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
										  	aria-valuemin="0" aria-valuemax="100" style="width:90%">

										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>WordPress</h3>
										<div class="progress">
										 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
										  	aria-valuemin="0" aria-valuemax="100" style="width:70%">

										  	</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 animate-box">
									<div class="progress-wrap ftco-animate">
										<h3>OOP</h3>
										<div class="progress">
										 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
										  	aria-valuemin="0" aria-valuemax="100" style="width:80%">

										  	</div>
										</div>
									</div>
								</div>
					  	</div>
					  </div>

					</div>
			  </div>
    	</div>
    </section>

    <section class="ftco-section" id="services-section">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Services</h1>
            <h2 class="mb-4">Services</h2>

          </div>
        </div>
    		<div class="row">
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Web Design</h3>
								<p>custom website design services help you convert more website visitors to calls, leads, and sales.</p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-flasks"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Full stack development </h3>
								<p> full stack web development with elite UI / UX design, frontend & backend development technologies using Angular, Reactjs, Node & Laravel </p>
							</div>
						</a>
					</div>
					<div class="col-md-4 text-center d-flex ftco-animate">
						<a href="#" class="services-1 shadow">
							<span class="icon">
								<i class="flaticon-ideas"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5">Data science </h3>
								<p>Help your business grow with our top-rated data science services</p>
							</div>
						</a>
					</div>


				</div>
    	</div>
    </section>


    <section class="ftco-section ftco-hireme img" style="background-image: url(images/bg_1.jpg)">
    	<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for freelancing</h2>
						<p>I'm looking for new partnerships,If you are interested can contact me at the email or send me a message.</p>
						<p class="mb-0"><a href="#page-contact" class="btn btn-primary py-3 px-5">Hire me</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p>Drop Me a line</p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Address</h3>
		            <p>Mehammed HOUALEM N02 city KEDDARA, BOUMMERDES</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Contact Number</h3>
		            <p><a href="tel://1234567920">+213 659170503</a></p>
	            </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">Email Address</h3>
		            <p><a href="mailto:kebiryoucef07@gmail.com">Email Me</a></p>
		          </div>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4 shadow">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<div>
	          		<h3 class="mb-4">About Me</h3>
		            <p><a href="#about-me">See My Info</a></p>
	            </div>
	          </div>
          </div>
        </div>

        <div id="page-contact" class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="POST" action="{{ route('contact.store')}}"  class="bg-light p-4 p-md-5 contact-form">
                {{csrf_field()}}
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
                @if($errors->has('name'))
                <small>{{$errors->first('name')}}</small>
                @endif
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email">
                @if($errors->has('email'))
                <small>{{$errors->first('email')}}</small>

                @endif
                </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
                @if($errors->has('subject'))
                <small>{{$errors->first('subject')}}</small>
                @endif
              </div>

              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                @if($errors->has('message'))
                <small>{{$errors->first('message')}}</small>
                @endif
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/me.png);"></div>
          </div>
        </div>
      </div>
    </section>
    <br>



    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Algerian PHP Web Developer.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

                <li class="ftco-animate"><a href="https://www.facebook.com/youce.kebir/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/youcef.kebir/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">



	          	<li ><a href="#about-section" class="icon-long-arrow-right mr-2"><span>About</span></a></li>
	          	<li ><a href="#resume-section" class="icon-long-arrow-right mr-2"><span>Resume</span></a></li>
	          	<li ><a href="#services-section" class="icon-long-arrow-right mr-2"><span>Services</span></a></li>
	          	<li ><a href="#contact-section" class="icon-long-arrow-right mr-2"><span>Contact</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><span class="icon-long-arrow-right mr-2"></span>Web Design</li>
                <li><span class="icon-long-arrow-right mr-2"></span>Web Development</li>
                <li><span class="icon-long-arrow-right mr-2"></span>Business Strategy</li>
                <li><span class="icon-long-arrow-right mr-2"></span>Data Analysis</li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Mehammed HOUALEM N02 city KEDDARA, BOUMMERDE</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">+213 659170503</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">kebiryoucef07@gmail.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">


          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
