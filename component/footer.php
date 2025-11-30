<style>
	/*footer*/
	.footer_section{
		padding-inline: 20px;
	}

	.footer_section .display-5{
		font-family: Anton;
		letter-spacing: 4px;
	}

	.footer_section .d-flex-container{
		display: flex;
		justify-content: space-between;
		gap: 20px;
		overflow-x: auto;
		flex: 0 0 auto;
	}

	.footer_section .d-flex-container ul li{
		line-height: 40px;
	}

	.footer_section .d-flex-container ul li a{
		color: white;
		font-size: 15px;
	}

	.footer_section .d-flex-container .information_centre{
		width: 100%;
	}


	.footer_section .d-flex-container .information_centre .d-flex{
		gap: 10px;
	}
	

	.footer_section .d-flex-container .service_days{
		width: 700px;
	}

	.footer_section .d-flex-container .media-department{
		width: 400px;
	}

	.footer_section .d-flex-container .media-department ul li a{
		text-decoration: underline;
	}

	@media(max-width:768px){
		


		/*footer */
		.footer_section .information_centre .d-flex{
			display: block!important;
		}

		.footer_section .d-flex-container ul li a{
			color: black;
			font-size: 14px;
		}
		.footer_section .d-flex-container{
			display: block;
		}

		.footer_section .d-flex-container div{
			margin-top: 40px;
		}

		.footer_section .d-flex-container .service_days{
			width: 100%!important;
		}


		.footer_section .d-flex-container .media-department{
			width: 100%!important;
		}
	}
</style>



<footer class="footer_section" style="background:black;">
	<div class="container py-5">

		<div class="row">

			<div class="col-md-8 offset-md-2" align="center">
				<h4 class="display-5 text-white">
					RENAISSANCE ASSEMBLY CHURCH
				</h4>
				<p class=" pt-2 text-muted">
					Our mission statement: Raising ambassadors for the kingdom and a people that will legislate in the cosmos with tireless zeal and passion until the kingdom is established here on earth. 
				</p>
			</div>

		</div>


		<div class="row pt-5">
			<div class="col-md-12 d-flex-container pt-3">

				<!-- Information Centre -->
				<div class="information_centre" style="margin-top:50px;">
					<h3 class="fw-bold" style="color:<?=APP_COLOR ?>;">INFORMATION <span class="text-white">CENTRE</span></h3>
					<div class="d-flex">
						<ul class="list-unstyled">
							<li>
								<a href="" class="text-white">
									ABOUT THE CHURCH <i class="fas fa-arrow-right"></i>
								</a>
							</li>

							<li>
								<a href="" class="text-white">
									CHURCH EVENTS & PROGRAMS <i class="fas fa-arrow-right"></i>
								</a>
							</li>


							<li>
								<a href="" class="text-white">
									PARTNERSHIP SIGN-UP <i class="fas fa-arrow-right"></i>
								</a>
							</li>


							<li>
								<a href="" class="text-white">
									JOIN A DEPARTMENT <i class="fas fa-arrow-right"></i>
								</a>
							</li>

							<li>
								<a href="" class="text-white">
									ANOUNCEMENT <i class="fas fa-arrow-right"></i>
								</a>
							</li>
						</ul>


						<ul class="list-unstyled">
							<li>
								<a href="" class="text-white">
									SHARE YOUR TESTIMONIES <i class="fas fa-arrow-right"></i>
								</a>
							</li>

							<li>
								<a href="" class="text-white">
									SEND IN YOUR PRAYER REQUEST <i class="fas fa-arrow-right"></i>
								</a>
							</li>


							<li>
								<a href="" class="text-white">
									DISCOVER OUR VARIOUS BRANCHES <i class="fas fa-arrow-right"></i>
								</a>
							</li>


							<li>
								<a href="" class="text-white">
									INVITE SOMEONE TO CHURCH <i class="fas fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>



				<!-- Service Days -->
				<div class="service_days" style="margin-top:50px;">
					<h3 class="fw-bold"  style="color:<?=APP_COLOR ?>;">SERVICE  <span class="text-white">DAYS</span></h3>
					<div class="mt-2">
						<h4 class="badge badge-light p-2">SUNDAYS :</h4>
						<p class="text-white">Service Time- 7AM-9AM First Service and 11AM-1PM Second Service</p>
					</div>

					<hr>
					<div class="mt-2">
						<h4 class="badge badge-light p-2">TUESDAY :</h4>
						<p class="text-white">Cell Meeting- 5PM-7PM PROMPT</p>
					</div>

					<hr>
					<div class="mt-2">
						<h4 class="badge badge-light p-2">THURSDAY :</h4>
						<p class="text-white">MID WEEK SERVICE-5PM PROMPT</p>
					</div>

					<hr>
					<div class="mt-2">
						<h4 class="badge badge-light p-2">LAST FRIDAY OF THE MONTH :</h4>
						<p class="text-white">NIGHT VIGIL SERVICES</p>
					</div>
				</div>


				
				<!-- Media -->
				<div class="media-department" style="margin-top:50px;">
					<h3 class="fw-bold"  style="color:<?=APP_COLOR ?>;">MEDIA  <span class="text-white">STORE</span></h3>
					<ul class="list-unstyled">
						<li>
							<a href="" class="text-white">
								E-books 
							</a>
						</li>

						<li>
							<a href="" class="text-white">
								24/7 Radio Online 
							</a>
						</li>


						<li>
							<a href="" class="text-white">
								Audio Messages 
							</a>
						</li>


						<li>
							<a href="" class="text-white">
								24/7 TV Online 
							</a>
						</li>

						<li>
							<a href="" class="text-white">
								Pastors Quote 
							</a>
						</li>


						<li>
							<a href="" class="text-white">
								Bible Courses 
							</a>
						</li>
					</ul>
				</div>

			</div>
		</div>


	</div>
</footer>











<script src="asset/js/jquery-3.7.1.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="asset/js/bootstrap-five.bundle.min.js"></script>
<script src="asset/js/bootstrap-four.bundle.min.js"></script>
<script src="asset/js/owl.carousel.min.js"></script>
<script src="asset/js/scrollreveal.min.js"></script>