<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>

	<title>The Multitouch Table - A 4K UHD PCAP Touch Table</title>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no minimal-ui">

	<!-- begin meta / ogp data -->
	<meta name="description" content="The Platform 55 inch multi-touch table is a high-performance projected capacitive 4K UHD touchtable with 3M touch technology. Designed and built in the USA by Ideum.">
	<meta property="og:site_name" content="The Platform Multitouch Table by Ideum">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://themultitouchtable.com"> 
	<meta property="og:title" content="The Multitouch Table by Ideum">
	<meta property="og:image" content="http://themultitouchtable.com/images/multitouchtable-share.jpg">
	<meta property="og:description" content="The Platform 55 inch multi-touch table is a high-performance projected capacitive 4K UHD touchtable with 3M touch technology. Designed and built in the USA by Ideum."/>
		
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="css/skeleton.css"/>
	<link rel="stylesheet" type="text/css" href="css/colorbox.css" />

	<link href='https://fonts.googleapis.com/css?family=Lato:3900,700,400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:900,700,400,300' rel='stylesheet' type='text/css'>

	<script src="js/jquery.js"></script>

	<script src="snap.svg.js"></script>
	<script src="js/svg-n-movie.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.colorbox.js"></script>
	<script src="js/navigation-toggle.js"></script>

	<script>
		$(document).ready(function(){
			//Examples of how to assign the Colorbox event to elements
			$(".group1").colorbox({rel:'group1'});
			$(".group2").colorbox({rel:'group2'});
			$(".group3").colorbox({rel:'group3'});
			$(".group4").colorbox({rel:'group4'});
			$(".mgroup1").colorbox({rel:'mgroup1'});
			$(".mgroup2").colorbox({rel:'mgroup2'});
			$(".mgroup3").colorbox({rel:'mgroup3'});
			$(".mgroup4").colorbox({rel:'mgroup4'});
			$(".share").colorbox({iframe:true, width:"600", height:"300px"});
			$(".dvimeo").colorbox({iframe:true, width:"100%", height:"100%"});
			$(".mvimeo").colorbox({iframe:true, width:"100%", height:"100%"});


			//Examples of how to assign the Colorbox event to elements
			$(".groupa").colorbox({rel:'groupa'});
			$(".groupb").colorbox({rel:'groupb', transition:"fade"});
			$(".groupc").colorbox({rel:'groupc', transition:"none", width:"75%", height:"75%"});
			$(".groupd").colorbox({rel:'groupd', slideshow:true});
			$(".ajax").colorbox();
			$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
			$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
			$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
			$(".inline").colorbox({inline:true, width:"50%"});
			$(".callbacks").colorbox({
				onOpen:function(){ alert('onOpen: colorbox is about to open'); },
				onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
				onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
				onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
				onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
			});

			$('.non-retina').colorbox({rel:'group5', transition:'none'})
			$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
			
			//Example of preserving a JavaScript event for inline calls.
			$("#click").click(function(){ 
				$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
				return false;
			});
		});
	</script>

</head>

<body>

<div id="desktop-n-tablet">

	<!-- 
	<div class="skip_animation">
		<a id="skip_animation">Skip Animation</a>
	</div>

	<div class="svg_animation">
		<svg id="svg"></svg>
	</div>

	<video id="video">
	</video>
	-->

	<div class="row" id="starting_links">

		<div class="three columns left-side" id="logo">

			<a id="ideumicon" href="/" target="_blank">
				<img src="images/ideum_logo.png">
			</a>

		</div>

		<div class="six columns">&nbsp;<!-- nothing to see here - placeholder -->&nbsp;</div>
		
		<div class="three columns right-side" id="utility">

			<a id="downloadicon" href="http://ideum.com/spec-sheets/Ideum-Specs-Platform.pdf" target="external">
				<img src="images/download.png" height="64px" width="64px">
			</a>
			<a id="socialicon" class="share" href="share.html">
				<img src="images/share_this.png">
			</a>
			<a id="tableicon" href="http://ideum.com/touch-tables/platform/" target="external">
				<img src="images/table_icon.png">
			</a>

		</div>
		
	</div>

	<div class="row table" id="content-display">

		<div class="three columns left-side" id="menu">
			
			<nav id="tablemenu" class="nav">
				<ul>
					<li id="section1navitem" class="on"><a id="section1navitem1" href="#section1">The Multitouch Table</a>
						<ul>
							<li id="section1-navitem1"><a href="#" id="section1navitem2">LATEST IN TOUCH</a></li>
							<li id="section1-navitem2"><a href="#" id="section1navitem3">KEY FEATURES</a></li>
						</ul>
					</li>	
					<li id="section2navitem"><a href="#section2">Gallery</a></li>
					<li id="section3navitem"><a href="#section3">Contact</a></li>
				</ul>
			</nav>
		</div>

		<div class="six columns offset-by-three" id="content-information">

			<div id="table">

				<div id="text-block">
					The Platform 55 4K P-Cap Multitouch Table uses the latest in touch technology, graphics performance and industrial design for a world-class interactive experience. The Platform 55 is the new standard in quality and performance for any application.
				</div>

			</div>

			<div id="latest-in-touch">

			</div>

			<div id="key-features">

			</div>

			<div id="gallery" class="row">
				<div class="one-fourth" id="gallery1">
					<div class="v-center-container">
						<a class="touchme v-center-element group1" href="images/gallery/Manufacturing/manu-1.jpg" title="Manufacturing"></a>
						<a class="group1 hide" href="images/gallery/Manufacturing/manu-2.jpg" title=""></a>
						<a class="group1 hide" href="images/gallery/Manufacturing/manu-3.jpg" title=""></a>
						<a class="group1 hide" href="images/gallery/Manufacturing/manu-4.jpg" title=""></a>
						<a class="group1 hide" href="images/gallery/Manufacturing/manu-5.jpg" title=""></a>
						<a class="group1 hide" href="images/gallery/Manufacturing/manu-6.jpg" title=""></a>
						<a class="group1 hide" href="images/gallery/Manufacturing/manu-7.jpg" title=""></a>
						<a class="group1 hide" href="images/gallery/Manufacturing/manu-8.jpg" title=""></a>
						<a class="group1 hide" href="images/gallery/Manufacturing/manu-9.jpg" title=""></a>
					</div>
				</div>
				<div class="one-fourth" id="gallery2">
					<div class="v-center-container">
						<a class="touchme v-center-element group2" href="images/gallery/DoE/doe-1.jpg" title="Department of Energy"></a>
						<a class="group2 hide" href="images/gallery/DoE/doe-2.jpg" title=""></a>
						<a class="group2 hide" href="images/gallery/DoE/doe-3.jpg" title=""></a>
						<a class="group2 hide" href="images/gallery/DoE/doe-4.jpg" title=""></a>
					</div>
				</div>
				<div class="one-fourth" id="gallery3">
					<div class="v-center-container">
						<a class="touchme v-center-element group3" href="images/gallery/SLAC/slac-1.jpg" title="Stanford Linear Accelarator Center"></a>
						<a class="group3 hide" href="images/gallery/SLAC/slac-2.jpg" title=""></a>
						<a class="group3 hide" href="images/gallery/SLAC/slac-3.jpg" title=""></a>
						<a class="group3 hide" href="images/gallery/SLAC/slac-4.jpg" title=""></a>
					</div>
				</div>
				<div class="one-fourth" id="gallery4">
					<div class="v-center-container">
						<a class="touchme v-center-element dvimeo" href="https://player.vimeo.com/video/143400280" title="The table in action"></a>
					</div>
				</div>
			</div>

			<div id="contact" class="row">

				<div>

					<h1>Ready to start?</h1>

					<table id="contact-table">
						<tr class="contact-element">
							<td class="icon-column">
								<img id="nm_phone_nmbr" src="images/nm_nbr.png"/>
							</td>
							<td class="datan-column">
								(505) 702-1110 ext.1
							</td>
						</tr>
						<tr class="contact-element">
							<td class="icon-column">
								<img id="us_can_phone_nmbr" src="images/us_can.png"/>
							</td>
							<td class="datan-column">
								(855) 898-6824
							</td>
						</tr>
						<tr class="contact-element">
							<td class="icon-column">
								<a id="inquiry" href="http://www.ideum.com/contact/" target="_blank">
									<img src="images/web_default.png" onmouseover="this.src='images/web_selected.png'" onmouseout="this.src='images/web_default.png'"/>
								</a>
							</td>
							<td class="text-column">
								<a id="inquiry" href="http://www.ideum.com/contact/" target="_blank">online inquiry form</a>
							</td>
						</tr>
						<tr class="contact-element">
							<td class="icon-column">
								<a id="sales" href="mailto:sales@ideum.com" target="_blank">
									<img src="images/email_default.png" onmouseover="this.src='images/email_selected.png'" onmouseout="this.src='images/email_default.png'"/>
								</a>
							</td>
							<td class="text-column">
								<a id="sales" href="mailto:sales@ideum.com" target="_blank">sales@ideum.com</a>
							</td>
						</tr>
					</table>

					<p style="text-align: center;">
						Platforms are sold domestically and internationally.</br>We also rent Platforms in the US and Canada.
					</p>

				</div>

			</div><!-- /#contact .row -->

		</div><!-- /#content-information .six .columns .offset-by-three -->

		<div class="three columns right-side" id="scrollnav">

			<div class="up-down-arrows">

				<div id="up_arrow">
					<img src="images/up_arrow.png">
				</div>

				<div id="down_arrow" class="on goto1a">
					<img src="images/down_arrow.png">
				</div>

				<div id="dig_deeper" class="on">
					<p>DIG DEEPER</p>
				</div>

			</div><!-- /.up-down-arrows -->

		</div><!-- /#scrollnav .three .columns -->

	</div><!-- /#content-display .row -->

	<section class="row" id="content-scroller">

		<a class="anchorlink" name="section1"></a>
		<section class="one-column" id="section1">

			<!-- placeholder for scroll - maybe delete later -->

		</section><!-- /#section1 -->

		<a class="anchorlink" name="section2"></a>
		<section  class="one-column" id="section2"><!-- the images and captions will be changing - these are placeholdrers -->

			<!-- placeholder for scroll - maybe delete later -->

		</section><!-- /#section2 -->

		<a class="anchorlink" name="section3"></a>
		<section class="one-column" id="section3">

			<!-- placeholder for scroll - maybe delete later -->

		</section><!-- /#section3 -->

	</section>

</div><!-- end desktop-n-tablet -->

<div id="mobile">

	<!-- this will be mobile menu -->
	<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#tablemenu-mobile">

		<a id="ideumicon-mobile" href="/" target="_blank">
			<img src="images/ideum_logo.png">
		</a>

		<div id="utility">

			<a id="downloadicon" href="http://ideum.com/spec-sheets/Ideum-Specs-Platform.pdf">
				<img src="images/download.png" height="64px" width="64px">
			</a>

			<a id="socialicon" class="share cboxElement" href="share.html">
				<img src="images/share_this.png">
			</a>

			<a id="tableicon" href="http://ideum.com/touch-tables/platform/" target="_blank">
				<img src="images/table_icon.png">
			</a>

			<span><img src="images/hamburger.png"></span>

		</div><!-- /#utility .three .columns .right-side -->

	</div><!-- / .navigation-toggle -->

	<nav id="tablemenu-mobile">

		<ul>
			<li><a href="#mobile-intro">The Multitouch Table</a>
				<ul>
					<li><a href="#mobile-latest-in-touch">LATEST IN TOUCH</a></li>
					<li><a href="#mobile-key-features">KEY FEATURES</a></li>
				</ul>
			</li>	
			<li><a href="#mobile-gallery">Gallery</a></li>
			<li><a href="#mobile-contact">Contact</a></li>
		</ul>

	</nav>
	<!-- end mobile menu -->
	
	<a name="mobile-intro"></a>
	<section id="mobile-table-intro">

		<p class="mobile-title">
			Touch the world with the <br>PLATFORM 55 4K P-CAP <br>MULTITOUCH TABLE
		</p>

		<img src="images/table-content/table-mobile2.png" alt="The PLATFORM 55 4K P-CAP MULTITOUCH TABLE">

	</section><!-- /#mobile-table-intro -->

	<section id="mobile-table-description">

		<p>
			The Platform 55 4K P-Cap Multitouch Table uses the latest in touch technology, graphics performance and industrial design for a world-class interactive experience. The Platform 55 is the new standard in quality and performance for any application.
		</p>

	</section><!-- /#mobile-table-descritpion -->

	<a name="mobile-latest-in-touch"></a>
	<section id="mobile-table-latest-in-touch">

		<header class="section-header">

			<div>
				<h2>
					The Latest<br>in Touch
				</h2>
			</div>
		</header>

		<div class="item-group-wrap">	

			<div class="item-group">

				<h3>
					Capacitive Touch
				</h3>

				<div class="item-element">
					High-performance 3M™<br>projected capacitive touch
				</div>

				<div class="item-element">
					50+ touch points<br>with palm rejection
				</div>

			</div><!-- /.item-group -->

			<div class="item-group">

				<h3>
					UHD 4K Display
				</h3>

				<div class="item-element">
					Ultra high-resolution 4K display
				</div>

				<div class="item-element">
					A new standard for<br>immersive interaction
				</div>

				<div class="item-element">
					Active 3D LED display
				</div>

			</div><!-- /.item-group -->

			<div class="item-group">

				<h3>
					Rugged Design
				</h3>

				<div class="item-element">
					Constructed with<br>aircraft-grade aluminum
				</div>

				<div class="item-element">
					Fully integrated<br>turnkey solution
				</div>

				<div class="item-element">
					Single push button operation
				</div>

			</div><!-- /.item-group -->

		</div><!-- /.item-group-warp -->

	</section><!-- /#mobile-table-latest-in-touch -->

	<a name="mobile-key-features"></a>
	<section id="mobile-table-key-features">

		<header class="section-header">
			<div><h2>Key Features</h2></div>
		</header>

		<div class="item-group-wrap" style="padding:1em 0;">	

			<div class="item-group">

				<h3>
					Stay Connected
				</h3>

				<div class="item-element">
					Ethernet
				</div>

				<div class="item-element">
					WiFi
				</div>

				<div class="item-element">
					Bluetooth
				</div>

			</div><!-- /.item-group -->

			<div class="item-group">

				<h3>
					Windows 8 &amp; Beyond
				</h3>

				<div class="item-element">
					Windows 10 64-bit Professional installed
				</div>

				<div class="item-element">
					Intel<sup>&reg;</sup> i7 Quad Core Processor
				</div>

				<div class="item-element">
					Solid-State Drive
				</div>

			</div><!-- /.item-group -->

			<div class="item-group">

				<h3>
					Intelligent Design
				</h3>

				<div class="item-element">
					Lifetime license for<br>GestureWorks Core
				</div>

				<div class="item-element">
					Timely support and<br>upgrades for life
				</div>

				<div class="item-element">
					Solid-State Drive
				</div>

			</div><!-- /.item-group -->

		</div><!-- /.item-group-warp -->

	</section><!-- /#mobile-table-lkey-features -->

	<a name="mobile-gallery"></a>
	<section id="mobile-gallery">

		<header class="section-header">
			<div><h2>Gallery</h2></div>
		</header>
		
		<div class="gallery-item-group">

			<a class="mgroup1" href="images/gallery/Manufacturing/mobile/manu-1.jpg" title="Manufacturing">Manufacturing</a>
			<a class="mgroup1 hide" href="images/gallery/Manufacturing/mobile/manu-2.jpg" title=""></a>
			<a class="mgroup1 hide" href="images/gallery/Manufacturing/mobile/manu-3.jpg" title=""></a>
			<a class="mgroup1 hide" href="images/gallery/Manufacturing/mobile/manu-4.jpg" title=""></a>
			<a class="mgroup1 hide" href="images/gallery/Manufacturing/mobile/manu-5.jpg" title=""></a>
			<a class="mgroup1 hide" href="images/gallery/Manufacturing/mobile/manu-6.jpg" title=""></a>
			<a class="mgroup1 hide" href="images/gallery/Manufacturing/mobile/manu-7.jpg" title=""></a>
			<a class="mgroup1 hide" href="images/gallery/Manufacturing/mobile/manu-8.jpg" title=""></a>
			<a class="mgroup1 hide" href="images/gallery/Manufacturing/mobile/manu-9.jpg" title=""></a>

			<a class="mgroup2" href="images/gallery/DoE/mobile/doe-1.jpg" title="Short caption - this long">Department of Energy</a>
			<a class="mgroup2 hide" href="images/gallery/DoE/mobile/doe-2.jpg" title=""></a>
			<a class="mgroup2 hide" href="images/gallery/DoE/mobile/doe-3.jpg" title=""></a>
			<a class="mgroup2 hide" href="images/gallery/DoE/mobile/doe-4.jpg" title=""></a>

			<a class="mgroup3" href="images/gallery/SLAC/mobile/slac-1.jpg" title="Stanford Linear Accelarator Center">Stanford Linear<br>Accelarator Center</a>
			<a class="mgroup3 hide" href="images/gallery/SLAC/mobile/slac-2.jpg" title=""></a>
			<a class="mgroup3 hide" href="images/gallery/SLAC/mobile/slac-3.jpg" title=""></a>
			<a class="mgroup3 hide" href="images/gallery/SLAC/mobile/slac-4.jpg" title=""></a>

			<a class="mvimeo" href="https://player.vimeo.com/video/143400280" title="The Table in Action">The Table in Action</a>

		</div><!-- /.gallery-item-group -->

	</section><!-- /#mobile-table-latest-in-touch -->

	<a name="mobile-contact"></a>
	<section id="mobile-contact">

		<header class="section-header">
			<div><h2>Ready to Start?</h2></div>
		</header>

		<table id="contact-table">
			<tr class="contact-element">
				<td class="icon-column">
					<img id="nm_phone_nmbr" src="images/nm_nbr.png"/>
				</td>
				<td class="text-column">
					(505) 702-1110 ext.1
				</td>
			</tr>
			<tr class="contact-element">
				<td class="icon-column">
					<img id="us_can_phone_nmbr" src="images/us_can.png"/>
				</td>
				<td class="text-column">
					(855) 898-6824
				</td>
			</tr>
			<tr class="contact-element">
				<td class="icon-column">
					<a id="inquiry" href="http://www.ideum.com/contact/" target="_blank">
						<img src="images/web_default.png" onmouseover="this.src='images/web_selected.png'" onmouseout="this.src='images/web_default.png'"/>
					</a>
				</td>
				<td class="text-column">
					<a id="inquiry" href="http://www.ideum.com/contact/" target="_blank">online inquiry form</a>
				</td>
			</tr>
			<tr class="contact-element">
				<td class="icon-column">
					<a id="sales" href="mailto:sales@ideum.com" target="_blank">
						<img src="images/email_default.png" onmouseover="this.src='images/email_selected.png'" onmouseout="this.src='images/email_default.png'"/>
					</a>
				</td>
				<td class="text-column">
					<a id="sales" href="mailto:sales@ideum.com" target="_blank">sales@ideum.com</a>
				</td>
			</tr>
		</table>

		<p>
			Platforms are sold domestically and internationally. We also rent Platforms in the US and Canada.
		</p>

	</section><!-- /#mobile-contact -->

	<section id="footer">

		<a class="ideum-link" href="http://ideum.com">Ideum</a>

		<a href="http://ideum.com/legal/">PRIVACY &amp; TERMS</a>

		<span>COPYRIGHT 2015</span>

	</section>

</div><!-- end mobile -->

</body>
</html>