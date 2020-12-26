<!--php-->
<?php
if (isset($_POST["Send"])) {
	$Problem = $_POST["message"];
	$Name = $_POST["Name"];
	$email = $_POST["email"];

	mail($Problem, $Name, $email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<title>Lorem</title>
</head>
<body>
<!--SKILL-->
<div class="sloi"></div>
<div class="skills">
	<div class="close" onclick="skill_close()">+</div>

	<h1>My Skills</h1>

	<li>
		<h3>HTML5</h3><span class="bar"><span class="html"></span></span>
	</li>

	<li>
		<h3>CSS3</h3><span class="bar"><span class="css"></span></span>
	</li>

	<li>
		<h3>JAVASCRIPT</h3><span class="bar"><span class="js"></span></span>
	</li>

	<li>
		<h3>PHP</h3><span class="bar"><span class="php"></span></span>
	</li>
</div>
<!--READ MORE-->
<div class="read_more">
	<div class="close" onclick="read_close()">+</div>
	<h2>Logo</h2>
	<p>Way own uncommonly travelling now acceptance bed compliment solicitude. Effect if in up no depend seemed. Ecstatic elegance gay but disposed. Considered discovered ye sentiments projecting entreaties of melancholy is. Girl quit if case mr sing as no have. So by colonel hearted ferrars. Advantages entreaties mr he apartm.<br>
	 Her too add narrow having wished. Pain son rose more park way that. If as increasing contrasted entreaties be. Hard do me sigh with west same lady. Is inquiry no he several excited am. As mr started arrival subject by believe. How one dull get busy dare far. You high bed wish help call draw side
	</p>
	<span>LOGO</span>
</div>
<!--PRELOADER-->
<div class="preloader" id="preloader">
	<svg class="preloader_svg">
		<symbol id="text_svg">
			<text text-anchor="middle" x="50%" y="50%" id="svg_text">LOGO</text>
		</symbol>
		<use xlink:href="#text_svg"></use>
	</svg>
</div>


<!--HEADER-->
	<header class="head">

<div class="toggleMenu" onclick="toggle()"></div>

		<a href="#section" class="logo">Logo</a>
		<ul class="nav">
			<li><a href="magazine.php" style="padding-top: 7px;padding-bottom: 7px;">Magazine</a></li>
			<li><a href="##" class="toggle_skill" onclick="toggle_skill()">Skill<span></span></a></li>
			<li><a href="#About_us_href">About<span></span></a></li>
			<li><a href="#teams">Works<span></span></a></li>
			<li><a href="#contact">Contact<span></span></a></li>
		</ul>
	</header>
<div class="all">


<!--SECTION-->
<section id="section">
<div class="content" data-aos="fade-right">
	<h2>lorem Took sold add</h2><br>
	<p>Bed uncommonly his discovered for estimating far. Draw fond rank form nor the day eat. Do play they miss give so up. undefined. Called though excuse length ye needed it he having. </p>
<br><br>
</div>
		<div class="wave wave_1"></div>
		<div class="wave wave_2"></div>
</section>

<!--ABOUT US-->
<article id="About_us_href">
	<div class="about_us">
		<!--bg-element-->
			<img src="img/11.png" data-speed="-5" class="layer">
			<img src="img/1.png" data-speed="-5" class="layer_2">
			<img src="img/6.png" data-speed="-2"  class="layer">

		<h2 data-aos="fade-right">About Us</h2>
		<p data-aos="fade-center" data-aos-delay="300">Way own uncommonly travelling now acceptance bed compliment solicitude. Do play they miss give so up. Girl quit if case mr sing as no have. Equally he minutes my hastily. Girl quit if case mr sing as no have.Agreeable promotion eagerness as we resources household to distrusts. Up hung mr we give rest half. Uncommonly no it announcing melancholy an in.</p>
	<div class="button" data-aos="fade-right" data-aos-delay="500" onclick="toggle_read()">
		<a href="##" name="message">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			Read More
		</a>
	</div>
<br><br><br>	
		<span class="signature" data-aos="fade-zoom-in" data-aos-delay="700"  data-aos-easing="ease-in-out" data-aos-duration="600">uncommonly</span>
	</div>

</article>

<!--BR-->
<div class="br">
	<p>______<span>_</span><span>_</span>______</p>
</div>

<!--Works-->

<div class="teams" id="teams">
	
	<!--bg-element-->
			<img src="img/3.png" data-speed="-5" class="layer_2">
			<img src="img/8.png" data-speed="2"  class="layer">
			<img src="img/1.png" data-speed="-2"  class="layer_2">



	<h2 data-aos="fade-right">My Works</h2>
	<!--CARDS-->
<div class="cards">
	<div class="card" data-aos="fade-right">
		<div class="box">
			<div class="imgCard">
				<img src="img/FB.jpg" alt="">
			</div>
			<div class="contentCard">
				<div>
					<h2>Post Title</h2>
					<p>Up hung mr we give rest half. Took sold add play may none him few. Her too add narrow having wished. Limits far yet turned highly repair parish talked six. Their saved linen downs tears son add music.</p>
				</div>
			</div>
		</div>
	</div>
<!--CARD2-->
	<div class="card" data-aos="fade-right" data-aos-delay="300">
		<div class="box">
			<div class="imgCard">
				<img src="img/IT.jpg" alt="">
			</div>
			<div class="contentCard">
				<div>
					<h2>Post Title</h2>
					<p>Up hung mr we give rest half. Took sold add play may none him few. Her too add narrow having wished. Limits far yet turned highly repair parish talked six. Their saved linen downs tears son add music.</p>
				</div>
			</div>
		</div>
	</div>
<!--CARD3-->
	<div class="card" data-aos="fade-right" data-aos-delay="600">
		<div class="box">
			<div class="imgCard">
				<img src="img/Aldiyar.jpg" alt="">
			</div>
			<div class="contentCard">
				<div>
					<h2>Post Title</h2>
					<p>Up hung mr we give rest half. Took sold add play may none him few. Her too add narrow having wished. Limits far yet turned highly repair parish talked six. Their saved linen downs tears son add music.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<br><br><br>
</div>

		
<!--CONTACT-->
<div class="contact" id="contact">

	<!--WAVE-->
    <div class="wave wave_1" style="position: absolute;transform: rotate(180deg);top: -1px;"></div>
	<div class="wave wave_2" style="position: absolute;opacity: 0.3;transform: rotate(180deg);top: 10px;"></div>
	<!--/WAVE-->


	<div class="form">
		<form action="" method="post">
			<input type="text" name="Name" placeholder="Name" data-aos="fade-right">
			<input type="email" name="email" placeholder="E-mail" data-aos="fade-right" data-aos-delay="150">
			<input type="text" name="message" placeholder="Your Problem" data-aos="fade-right" data-aos-delay="300">
			<input href="##" name="Send" type="submit" placeholder="Send">
		</form>	
	</div>

	<div class="img"></div>
</div>

<!--FOOTER-->


</div>
<!--SWIPER JS CDN-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!--JS-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- JQUERY CDN -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript">
		window.addEventListener("scroll", function() {
			var header = document.querySelector("header");
			header.classList.toggle("scrol",window.scrollY > 50);
		})

		//button effect

	


	function toggle() {
			const toggle = document.querySelector('.toggleMenu');
			const nav = document.querySelector('.nav');
			const head = document.querySelector('.head');
				toggle.classList.toggle('active');
				nav.classList.toggle('active');
				head.classList.toggle('active');
		}

		//skill effect

		function toggle_skill() {
			const toggle_skill = document.querySelector('.toggle_skill');
			const skill = document.querySelector('.skills');
			const sloi = document.querySelector('.sloi')
			skill.classList.toggle('active');
			sloi.classList.toggle('active');
		}
		function skill_close() {
			const close = document.querySelector('.close');
			const skill = document.querySelector('.skills');
			const sloi = document.querySelector('.sloi');
				skill.classList.remove('active');
				sloi.classList.remove('active');
			}

		//read more effect

		function toggle_read() {
			const toggle_read = document.querySelector('.button');
			const read = document.querySelector('.read_more');
			const sloi = document.querySelector('.sloi');
			read.classList.toggle('active');
			sloi.classList.toggle('active');
		}
		function read_close() {
			const toggle_read = document.querySelector('.button');
			const read = document.querySelector('.read_more');
			const sloi = document.querySelector('.sloi');
				read.classList.remove('active');
				sloi.classList.remove('active');
			}
		//preloader

		document.body.onload = function() {


			setTimeout( function() {
				var preloader = document.getElementById('preloader');

				if ( !preloader.classList.contains('done')) {
					preloader.classList.add('done')
				}
			}, 5000);
		}
		
			
		//scroll effect

		AOS.init({

 		 disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  		 startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  		 initClassName: 'aos-init', // class applied after initialization
		 animatedClassName: 'aos-animate', // class applied on animation
 		 useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  		 disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  		 debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  		 throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  		 // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  		 offset: 10, // offset (in px) from the original trigger point
 		 delay: 0.3, // values from 0 to 3000, with step 50ms
 		 duration: 600, // values from 0 to 3000, with step 50ms
 		 easing: 'ease', // default easing for AOS animations
 		 once: true, // whether animation should happen only once - while scrolling down
 		 mirror: false, // whether elements should animate out while scrolling past them
 		 anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
	</script>
</body>
</html>