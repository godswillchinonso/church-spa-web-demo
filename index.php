<?php require_once __DIR__."/config/config.php"; ?>
<?php require_once __DIR__."/component/header.php"; ?>



	<!-- Navbar -->
	<?php require_once __DIR__."/component/navbar.php"; ?>
	

	<!-- Banner Image -->
	<img src="<?=ASSET_LINK?>church_website_default_img/banner1.png" width="100%" alt="Homepage" style="margin-top:100px;">





	<!-- Section one -->
	<?php require_once __DIR__."/layout/section_one.php"; ?>

	<!-- Section Two -->
	<?php require_once __DIR__."/layout/section_two.php"; ?>

	<!-- Section three -->
	<?php require_once __DIR__."/layout/section_three.php"; ?>

	
	<!-- section four -->
	<?php require_once __DIR__."/layout/section_four.php"; ?>
	

	<!-- section five -->
	<?php require_once __DIR__."/layout/section_five.php"; ?>
	

	<!-- section six -->
	<?php require_once __DIR__."/layout/section_six.php"; ?>
	








	<!-- section seven -->
	<?php require_once __DIR__."/layout/section_seven.php"; ?>
	









	<!-- Google business page -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.8840382503586!2d6.9934375!3d4.789937500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cf1729e2ce83%3A0xd3362f676634c57f!2sGodswill%20Chinonso%20Sonex!5e0!3m2!1sen!2sng!4v1749587431697!5m2!1sen!2sng" width="100%" height="300" style="border:0;height:400px!important; margin-top: 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>







	<!-- footer -->
	<?php require_once __DIR__."/component/footer.php"; ?>


	<!-- back to top -->
	<div class="fixed-bottom p-4" align="right">
		<button class="btn btn btn-sm back_to_top" style="background:<?=APP_COLOR ?>;">
			<i class="fas fa-arrow-up text-white"></i>
		</button>
	</div>





	


	


	<script>
		ScrollReveal().reveal(".scroll-top-section-two",{duration:1500,distance:"60px",origin:"top",easing:"ease",viewFactor:.5}),ScrollReveal().reveal(".scroll-down-section-two",{duration:2e3,distance:"60px",origin:"bottom",easing:"ease",viewFactor:.5}),$(".church-major-category-feature").owlCarousel({loop:!0,margin:10,nav:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:3}}}),ScrollReveal().reveal(".scroll-left-section",{duration:2e3,distance:"60px",origin:"top",easing:"ease",viewFactor:.5}),ScrollReveal().reveal(".scroll-right-section",{duration:2e3,distance:"60px",origin:"bottom",easing:"ease",viewFactor:.5}),$(".our-event").owlCarousel({loop:!0,margin:10,nav:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:3}}}),$(".pastors-quote").owlCarousel({loop:!0,margin:10,nav:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:4}}}),ScrollReveal().reveal(".scroll-bottom",{duration:2e3,distance:"60px",origin:"bottom",easing:"ease",viewFactor:.5}),document.querySelector(".back_to_top").addEventListener("click",function(){window.scrollTo({top:0,behavior:"smooth"})}),document.addEventListener("contextmenu",function(e){e.preventDefault()}),document.addEventListener("keydown",function(e){"F12"===e.key&&e.preventDefault(),e.ctrlKey&&e.shiftKey&&"I"===e.key&&e.preventDefault(),e.ctrlKey&&e.shiftKey&&"C"===e.key&&e.preventDefault(),e.ctrlKey&&e.shiftKey&&"J"===e.key&&e.preventDefault(),e.ctrlKey&&"s"===e.key&&e.preventDefault(),e.ctrlKey&&"u"===e.key&&e.preventDefault()});
	</script>
</body>
</html>