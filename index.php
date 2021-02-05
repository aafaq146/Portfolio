<?php 
include('db_connect.php');
 ?>
<!DOCTYPE html>
<html class='no-js' >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Portfolio</title>
		<link rel="icon" href="img/port.png">
		<!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >		
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.theme.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.transitions.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		<link rel='stylesheet' type='text/css' href='css/color-default.css' >
		<script type="text/javascript" language="JavaScript">
			function success(){
				confirm("You Send Message successfully.Thanku!")
			}
		</script>
	</head>
	<body>	
		<!--=============================================================================
			Preloader
		===============================================================================-->
		<div id='preloader' >
			<div class='loader' >
				<img src='img/load.gif' alt='symp' >
			</div>
		</div>
		<!--=============================================================================
			Main Wrapper
		===============================================================================-->
		<div id='wrapper'>
			<!--=============================================================================
				Front Section
			===============================================================================-->
			<section class='front-section' >
				<div class='container' >
				  <div class='transition-mask' ></div>
					<div class='front-person-img' >
						<!--person's image-->
						<img src='img/aafaq3.jpg' alt='Symp' >
						<!--/person's image-->
				    </div>				
					<nav class='front-person-links'>
						<!--
							navigation links, data-section attribute points towards the section with id to be opened. -->
						<ul class="nav navbar-nav">
							<li>
								<a href='#' data-section='about' >About Me</a>
							</li>
							<li>
								<a href='#' data-section='resume' >Resume</a>
							</li>							
							<li>
								<a href='#' data-section='blog' >My Blog</a>
							</li>	
							<li>
								<a href='#' data-section='contact' >Contact</a>
							</li>
						</ul>
					</nav>
					<div class='front-heading text-center' >
						<h2>
							AaFaq Ahmad
						</h2>
					</div>
				</div>
			</section>
			<!--=============================================================================
				/Front Section
			===============================================================================-->
		
			<!--=============================================================================
				About Section
			===============================================================================-->
			<section id='about' class='about-section section' >
				<div class='basic-info section-block' >
					<div class='container' >
						<div class='section-header text-center' >
							<h2>Basic Info About Me</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
						</div>
						<div class='row' >
							<div class='col-md-4' >
								<div class='about-person-img' >
									<img src='img/aafaq.jpg' alt='symp'>
								</div>							
							</div>
							<div class='col-md-8 about-info' >
								<p align="justify">
							ASSALAM-O-ALAIKUM.
							 Hi This is Aafaq Ahmad.i am From Daska Sialkot.I done my Basic Study in Daska.
							 i done Matric in GOVT KASHMIR HIGH SCHOOL KOTLI FAQIR CHAND.After Completed My Matric,i got admission in Punjab College Daska.I Got scholarship in PGC Daska.I done My INTERMEDIATE Free with Scholarship.Two year i studied here in ICS(STAT).After Completed MY ICs I have got admiison in GC UNIVERSITY FAISALABAD in BS(SE).Here Actually i became Expert.Now i am Expert in
							 HTML,CSS,JS,PHP,MYSQL,LARAVEL,BOOTSTRAP.
								<div class='clearfix' ></div>								
								<ul class='info-list' >
									<li>
										<div class='inner' >
											<h4>Name</h4>
											<p>Aafaq Ahmad</p>
										</div>
									</li>
									<li>
										<div class='inner' >
											<h4>Age</h4>
											<p>21 Years</p>
										</div>
									</li>
									<li>
										<div class='inner' >
											<h4>Website</h4>
											<p>Sunrise.com</p>
										</div>
									</li>
									<li>
										<div class='inner' >
											<h4>Hometown</h4>
											<p>Daska</p>
										</div>
									</li>
								</ul>
								<p style="font-size: 30px"> For Hiring</p>Contact Me
							</div>
						</div>
					</div>
				</div>
				<div class='about-icons section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-lightbulb' ></i>
									</div>
									<div class='content' >
										<h4>Creative</h4>
										<p>
											i done my Projects With Creative mind
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >	
									<div class='icon' >
										<i class='ion-trophy' ></i>
									</div>									
									<div class='content' >
										<h4>Winner</h4>
										<p>
											i'm Winner in Work.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >	
									<div class='icon' >
										<i class='ion-ios-glasses' ></i>
									</div>
									<div class='content' >
										<h4>Smart</h4>
										<p>
											i'm done my Work smartly.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >	
									<div class='icon' >
										<i class='ion-ios-bolt' ></i>
									</div>
									<div class='content' >
										<h4>Powerful</h4>
										<p>
											Yes,I'm Powerful in my work.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >	
									<div class='icon' >
										<i class='ion-help-buoy' ></i>
									</div>
									<div class='content' >
										<h4>Helper</h4>
										<p>
											i'm help others if they need.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >	
									<div class='icon' >
										<i class='ion-happy' ></i>
									</div>
									<div class='content'>
										<h4>Intelligent</h4>
										<p>
											i done My work Intelligently.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >	
									<div class='icon' >
										<i class='ion-ios-game-controller-b' ></i>
									</div>
									<div class='content' >
										<h4>Gamer</h4>
										<p>
											Free Time, I am played Games
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >	
									<div class='icon' >
										<i class='ion-ios-pulse-strong' ></i>
									</div>
									<div class='content' >
										<h4>Healthy</h4>
										<p>
											Yes i'm.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='funfacts-block section-block' data-stellar-background-ratio='.2' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-3 col-sm-6 funfact' >
								<div class='content' >
									<h4>2</h4>
									<p>Awards Won</p>
								</div>
							</div>
							<div class='col-md-3 col-sm-6 funfact' >
								<div class='content' >
									<h4>4</h4>
									<p>Happy Customers</p>
								</div>
							</div>
							<div class='col-md-3 col-sm-6 funfact' >
								<div class='content' >
									<h4>5</h4>
									<p>Projects Done</p>
								</div>
							</div>
							<div class='col-md-3 col-sm-6 funfact' >
								<div class='content' >
									<h4>342</h4>
									<p>Games Played</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='footer bg-lightgray section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-xs-6 text-left' >
								<h4>Aafaq Ahmad</h4>
							</div>
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/aafaq.gujjar' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=============================================================================
				/About Section
			===============================================================================-->
			
			<!--=============================================================================
				Resume Section
			===============================================================================-->
			<section id='resume' class='resume-section section' >
				<div class='container' >
					<div class='row' >
						<div class='col-md-6 col-md-offset-3' >
							<div class='section-header text-center' >
								<h2 class='animate text-over-block' >My Resume</h2>
								<!--divider-->
								<div class='divider-draft center' ></div>
								<!--/divider-->
							</div>
						</div>
					</div>
				</div>
				<div class='timeline-block section-block' >
					<div class='container' >
						<ul class='timeline' >		
							<li class='timeline-header' >
								<h4>Education</h4>
							</li>
							<li>
								<div class='timeline-desc' >	
									<h4>2016-2020</h4>
								</div>
								<div class='timeline-content' >
									<h4>Masters Degree</h4>
									<span>@GC University Faisalabad</span>
									<p align="justify">
										Hi this is Aafaq.i have done my Master Degree from GCUF.
										i Got 3.44 CGPA.
									</p>
								</div>
							</li>
							<li class='inverse' >
								<div class='timeline-desc' >
									<h4>2014-2016</h4>
								</div>
								<div class='timeline-content' >
									<h4>INTERMEDIATE Degree</h4>
									<span>@PUNJAB COLLEGE DASKA</span>
									<p align="justify">
										Hi This is AAFAQ AHMAD.i have done my Intermediate degree in ICS in PGC Daska.i got 875 MArks.
									</p>
								</div>
							</li>
							<li>
								<div class='timeline-desc' >	
									<h4>2012-2014</h4>
								</div>
								<div class='timeline-content' >
									<h4>Matriculation Degree</h4>
									<span>@GOVT KASHMIR HIGH SCHOOL KOTLI FAQIR CHAND</span>
									<p align="justify">
											Hi This is AAFAQ AHMAD.i have done my Intermediate degree GOVT KASHMIR HIGH SCHOOL KOTLI FAQIR CHAND.i got 884 MArks.
									</p>
								</div>
							</li>
							<li class='timeline-header' >
								<h4>Experience</h4>
							</li>
							<li>
								<div class='timeline-desc' >	
									<h4>2018-2019</h4>
								</div>
								<div class='timeline-content' >
									<h4>Web Devolper</h4>
									<span>@Themeforest</span>
									<p align="justify">
										i have great experience here as a web devolper.i done my things easily here.i did well here.i have comleted my project or work with great creativity and effort.Some month i workhere during my study.
									</p>
								</div>
							</li>
							<li class='inverse' >
								<div class='timeline-desc' >
									<h4>2019-2020</h4>
								</div>
								<div class='timeline-content' >
									<h4>Web Developer</h4>
									<span>@CodeCanyon</span>
									<p align="justify">
										i have great experience here as a web devolper.i done my things easily here.
										i did well here.i have comleted my project or work with great creativity and effort.
										some month i work here during my study.i gave it some time not much more.
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class='hobbies-block bg-lightgray section-block' >
					<div class='container' >	
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >My Hobbies</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
						</div>
						<div class='row' >
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-game-controller-b' ></i>
									</div>
									<h4>Gaming</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-book' ></i>
									</div>
									<h4>Reading</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-chatboxes' ></i>
									</div>
									<h4>Chat</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-musical-notes' ></i>
									</div>
									<h4>Cricket</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-beer' ></i>
									</div>
									<h4>Study</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-football' ></i>
									</div>
									<h4>Coding</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='skills-block section-block' >
					<div class='container' >
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >My Skills</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
						</div>
						<div class='row' >
							<div class='col-md-6'>
								<div class='skill' >
									<h4>HTML/CSS</h4>
									<div class='skill-bar' data-percent='96' >
										<div class='bar' >
											<div class='percent' >96%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>php+MYSQL</h4>
									<div class='skill-bar' data-percent='80' >
										<div class='bar' >
											<div class='percent' >80%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>LARAVEL</h4>
									<div class='skill-bar' data-percent='90' >
										<div class='bar' >
											<div class='percent' >90%</div>
										</div>
									</div>
								</div>
							</div>
							<div class='col-md-6' >
								<div class='skill' >
									<h4>JS</h4>
									<div class='skill-bar' data-percent='90' >
										<div class='bar' >
											<div class='percent' >90%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>Wordpress</h4>
									<div class='skill-bar' data-percent='85' >
										<div class='bar' >
											<div class='percent' >85%</div>
										</div>
									</div>
								</div>
								<div class='skill' >
									<h4>Bootstrap</h4>
									<div class='skill-bar' data-percent='95' >
										<div class='bar' >
											<div class='percent' >95%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='footer bg-lightgray section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-xs-6 text-left' >
								<h4>Aafaq Ahmad</h4>
							</div>
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/aafaq.gujjar' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=============================================================================
				/Resume Section
			===============================================================================-->
			<!--=============================================================================
				Blog Section
			===============================================================================-->
			<section id='blog' class='blog-section section' >
				<div class='container' >
					<div class='row' >
						<div class='col-md-6 col-md-offset-3' >
							<div class='section-header text-center' >
								<h2>My Blog</h2>
								<!--divider-->
								<div class='divider-draft center' ></div>
								<!--/divider-->
								<p>
									This is my blog where my thoughts live. Check it out to know more about me. 
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class='posts-block section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-12' >
								<div class='post' >
									<div class='media' >
										<img alt='symp' src='img/blog/z.png' >
									</div>
									<div class='content' >
										<h4>
											<a href='post.html' >
												Simple Post With Image
											</a>
										</h4>
										<ul class='post-icons' >
 										    <li>
												<i class='ion-ios-person' ></i>
												<span>Aafaq Ahmad</span>
											</li>
											<li>
												<i class='ion-ios-clock' ></i>
												<span>14 Jan 2017</span>
											</li>
											<li>
												<i class='ion-ios-chatbubble' ></i>
												<span>5</span>
											</li>
										</ul>
										<p align="justify">
											This is my blog image check it out, and guess my work.
										</p>
									</div>
								</div>
								<div class='post' >
									<div class='media' >
										<img alt='symp' src='img/blog/d.png' >
									</div>
									<div class='content' >
										<h4>
											<a href='post.html' >
												Simple Post With Image
											</a>
										</h4>
										<ul class='post-icons' >
											<li>
												<i class='ion-ios-person' ></i>
												<span>Aafaq Ahmad</span>
											</li>
											<li>
												<i class='ion-ios-clock' ></i>
												<span>14 June 2018</span>
											</li>
											<li>
												<i class='ion-ios-chatbubble' ></i>
												<span>7</span>
											</li>
										</ul>
										<p align="justify">
											You guess my hard working wit my blog and projects check it out.
										</p>
									</div>
								</div>
								<div class='post' >
									<div class='media' >
										<img alt='symp' src='img/blog/g.png' >
									</div>
									<div class='content' >
										<h4>
											<a href='post.html' >
												Simple Post With Image
											</a>
										</h4>
										<ul class='post-icons' >
											<li>
												<i class='ion-ios-person' ></i>
												<span>Aafaq Ahmad</span>
											</li>
											<li>
												<i class='ion-ios-clock' ></i>
												<span>14 sep 2018</span>
											</li>
											<li>
												<i class='ion-ios-chatbubble' ></i>
												<span>9</span>
											</li>
										</ul>
										<p align="justify">
											checked it out my work.i hope uguess my hard work with this blog.
										</p>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</div>
				<div class='footer bg-lightgray section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-xs-6 text-left' >
								<h4>Aafaq Ahmad</h4>
							</div>
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
								<li>
										<a href='https://www.facebook.com/aafaq.gujjar' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--=============================================================================
				/Blog Section
			===============================================================================-->
			<!--=============================================================================
				Contact Section
			===============================================================================-->
			<section id='contact' class='contact-section section' >
				<div class='contact-block section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-6 col-md-offset-3' >
								<div class='section-header text-center' >
									<h2 class='animate text-over-block' >Contact Me</h2>
									<!--divider-->
									<div class='divider-draft center' ></div>
									<!--/divider-->
									<p>
										I'm available. If you want something to be built or just to say hi, feel free to shoot me a message.i will try to get back soon.
									</p>
								</div>
							</div>
						</div>
						<div class='row' >
							<div class='col-md-8 col-md-offset-2' >	
								<form id='contact-form' class='contact-form'  action='user_process.php' onsubmit="return validate()" method='post' >
									<div id='contact-form-result'></div>
									<div class='row'>
										<div class='col-md-6'>
											<div class='form-group' >
												<input type='text' name="name" class='form-control' placeholder='Name' required>
											</div>
										</div>
										<div class='col-md-6' >
											<div class='form-group'>
												<input type='email' name="email" class='form-control' placeholder='Email' required >	
											</div>
										</div>
									</div>
									<div class='row' >
										<div class='col-md-6' >
											<div class='form-group' >
												<input type='text' name="phone" class='form-control' placeholder='Phone' required>
											</div>
										</div>
										<div class='col-md-6'>
											<div class='form-group' >
												<input type='text' class='form-control' name="website" placeholder='Website' required>	
											</div>
										</div>
									</div>
									<div class='form-group' >
										<textarea rows='5' class='form-control' name="message" placeholder='Message' required></textarea>
									</div>
									<div class='form-group text-center' >
										<button type='submit' onclick="success()" value="submit" class='symp-btn' >Send Message</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class='footer bg-lightgray section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-xs-6 text-left' >
								<h4>Aafaq Ahmad</h4>
							</div>
							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
								<li>
										<a href='https://www.facebook.com/' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
			</section>
			<!--=============================================================================
				/Contact Section
			===============================================================================-->
			<!--close button-->
			<div class='close-btn' >
				<span></span>
				<span></span>
			</div>
			<!--/close button-->
		</div>
		<!--=============================================================================
			/Main Wrapper
		===============================================================================-->
		<!--=============================================================================
			JavaScript Files
		===============================================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.stellar.min.js' ></script>
		<script src='js/modernizr.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/smoothscroll.js' ></script>
		<script src='js/script.js' ></script>
	</body>
</html>