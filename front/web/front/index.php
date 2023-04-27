<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
  if (isset($_POST['message']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['captcha'])) {
    if (!empty($_POST['message']) && !empty($_POST['email']) && !empty($_POST['name'])) {
      session_start();
      if(!empty($_POST['captcha'])  && $_POST['captcha'] == $_SESSION['code']){
        include('./mail.php');
        ?>
          <STYLE>
            #sent {display: block !important;}
            #not_sent { display: none !important;}
          </STYLE>
        <?php
       } else {
	?> 
           <STYLE>
             #error_captcha {display: block !important;}
             #not_sent { display: none !important;}
           </STYLE>
        <?php
       }
    } else {
      ?>
        <STYLE>
          #error_sent {display: block !important;}
          #not_sent { display: none !important;}
        </STYLE>
      <?php
    }
    ?>
      <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
      </script>
    <?php
  }
?>
<html lang="en">
	<head>
		<title>New Tech Stack</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                <meta name="description" content="New tech stack Website, innovation in various IT domain, blockchain, e-commerce, AI">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/noscript.css" />
		<link rel="icon" href="images/logo_big.png" type="image/gipng">
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<img id="logo" src="images/logo_big.png" width="80%" style="margin-left: 10%; margin-right: 10%" alt="logo sidebar">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Who we are</a></li>
							<li><a href="#two">What we do</a></li>
							<li><a href="#contact">Get in touch</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1 style="color: #1c94fe"><img src="images/logo_big.png" width="100px" style="bottom: -32px;position: relative; margin-right: 10px" alt="logo"></img>New Tech Stack</h1>
							<p>Take your web applications to the next level <br />
							Evolve, Form, Maintain</p>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Learn More</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper spotlights">
						<section class="style2">
							<div class="content">
								<div class="inner">
									<h2>Who we are</h2>
									<p>NewTechStack is a small company created in 2021 in the field of computer science, we provide innovation in various IT domain, blockchain, e-commerce, AI, support but also professional training in IT.</p>
									<!-- <ul class="actions">
										<li><a href="" class="button">Learn more</a></li>
									</ul> -->
								</div>
							</div>
						</section>
						<section style="background-image: url('/images/background.gif'); background-position: center;">
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>What we do</h2>
							<div class="features" >
								<section>
									<span class="icon solid major fa-code"></span>
									<h3>Custom solution</h3>
									<p>We provide different solutions tailored to the needs of the client. This ranges from accounting management to the creation of blockchain content as well as e-commerce solution</p>
								</section>
								<section>
									<span class="icon solid major fa-lock"></span>
									<h3>Orchestration</h3>
									<p>Orchestration software is a must have in today's IT world, that's why we help you to go into production with peace of mind</p>
								</section>
								<section>
									<span class="icon solid major fa-cog"></span>
									<h3>Open Source</h3>
									<p>We develop in-house software for our needs that can be used by all small structures as a source of information as well as an infrastructure base.
By making this code open-source we want to simplify life for developers and aspiring companies.</p>
								</section>
								<section>
									<span class="icon solid major fa-desktop"></span>
									<h3>Formation</h3>
									<p>Sharing knowledge through code on forums is one thing, transmitting it in an educational way is another.
To do this we dispense professional training in code and in various technologies ranging from initiation to chatbot creation.</p>
								</section>
								<section class="clients">
									<h3>They worked with us</h3>
            								<div>
										<a href="https://www.bonparfumeur.com/">
											<img  width="100%" height="auto" src="/images/client_1.svg" alt="" style="-webkit-filter: invert(100%); filter: invert(100%);"/>
										</a>
            									<a href="https://brai.fr/">
											<img  width="100%" src="/images/client_2.png" alt="" />
										</a>
										<a href="https://z-et-ma.com/">
											<img  width="100%" src="/images/client_3.svg" alt="" style="-webkit-filter: invert(100%); filter: invert(100%);"/>
										</a>
									</div>
									<div>
                                                                                <a href="https://etna.io/"><img width="100%" src="/images/client_4.png" alt="" /></a>
                                                                                <a href="https://www.isg.fr/"> <img width="100%" src="/images/client_5.png" alt="" /></a>
                                                                                <a href="https://www.ecole-89.com/"> <img width="100%" src="/images/client_6.png" alt="" style="-webkit-filter: invert(100%); filter: invert(100%);"/></a>
                                                                        </div>
								</section>
							</div>
							<!-- <ul class="actions">
								<li><a href="" class="button">Learn more</a></li>
							</ul> -->
						</div>
					</section>

				<!-- Three -->
					<section id="contact" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<div class="split style1">
								<section>
									<form id="not_sent" method="post" action="#contact">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" required/>
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="email" name="email" id="email" required/>
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5" required></textarea>
											</div>
                                                                                        <div class="field half">
                                                                                                <label for="captcha">Captcha Image</label>
    										                <img src="captcha.php" onclick="this.src='image.php?' + Math.random();" alt="captcha" style="cursor:pointer;">
                                                                                        </div>
                                                                                         <div class="field half">
                                                                                                <label for="captcha">Captcha Code</label>
                                                                                                <input type="text" name="captcha" id="captcha" required/>
                                                                                        </div>
                                                                                 </div>
                                                                                 <ul class="actions" style="margin: auto">
                                                                                        <li><input type="submit" class="button submit" value="Send Message"></li>
                                                                                 </ul>
									</form>
                                                                        <div class="sent" id='sent'>
 										You're message was sent successfully, we'll do our best to answer it as quickly as possible
                                                                        </div>
                                                                        <div class='sent' id="error_sent">
                                                                                Error, you may have not filled all the mandatory inputs
                                                                        </div>
                                                                        <div class='sent' id="error_captcha">Error, Invalid captcha</div>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Email</h3>
											<a href="mailto:contact@newtechstack.fr">contact@newtechstack.fr</a>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="https://github.com/NewTechStack" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="https://linkedin.com/company/newtechstack" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>NewTechStack © 2022. All Rights Reserved.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
