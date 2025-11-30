<style>
	/*navbar*/
	.fixed-top .navbar-brand{
		font-weight: 700;
		margin-top: -15px;
	}

	.fixed-top .nav-link{
		font-size: 14px;
	}

	.fixed-top .nav-link.active{
		color:<?=APP_COLOR ?>!important;
		font-weight: 700;
	}
</style>

<div class="fixed-top bg-white px-4 pt-3">
	<div align="right">
		<p class="text-muted">
			Connect With Us: 
			<a href=""><i class="fab fa-facebook text-muted"></i></a> |
			<a href=""><i class="fab fa-instagram text-muted"></i></a> |
			<a href=""><i class="fab fa-youtube text-muted"></i></a> |
			<a href=""><i class="fab fa-tiktok text-muted"></i></a>
		</p> 
	</div>
	<nav class="navbar navbar-expand-md navbar-light ">
	  <a class="navbar-brand" href="#">
	  	Church Template
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

	      <li class="nav-item dropdown mx-2">
		      <a class="nav-link <?= ($current_page == 'home' || 'share-your-testimony' ? 'active' : '') ?> dropdown-toggle" 

		      	href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		        INFORMATION CENTRE
		      </a>
		      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		        <a class="dropdown-item" href="#">About The Church</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">Ministry Department</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">Discover Our Various Branches</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="<?=BURL ?>share-your-testimony">Share Your Testimonies</a>
		      </div>
		  </li>


	      <li class="nav-item dropdown mx-2">
		      <a class="nav-link <?= ($current_page == 'bookstore' ? 'active' : '') ?> dropdown-toggle" 

		      	href="#" 
		      	id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

		        BOOKSTORE
		      </a>
		      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		        <a class="dropdown-item" href="#">E-books</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">Audio Messages</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">Word Of Inspiration</a>
		      </div>
		  </li>

	      <li class="nav-item mx-2">
	        <a class="nav-link " href="#" >GIVE</a>
	      </li>

	      <li class="nav-item mx-2">
	        <a class="nav-link " href="#" >EVENTS</a>
	      </li>


	      <li class="nav-item dropdown mx-2">
		      <a class="nav-link <?= ($current_page == 'livestream' ? 'active' : '') ?> dropdown-toggle" 

		      	href="#" 
		      	id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

		        LIVE STREAM
		      </a>
		      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		        <a class="dropdown-item" href="#">24/7 Radio Online</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">Live Services</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">24/7 TV Online</a>
		      </div>
		  </li>


		  <li class="nav-item mx-2">
		    <a class="nav-link " href="#" >PARTNERSHIP SIGN-UP</a>
		  </li>


		  <li class="nav-item dropdown mx-2">
		      <a class="nav-link <?= ($current_page == 'livestream' ? 'active' : '') ?> dropdown-toggle" 

		      	href="#" 
		      	id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

		        ONLINE COURSES
		      </a>
		      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		        <a class="dropdown-item" href="#">24/7 Radio Online</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">Live Services</a>
		        <div class="dropdown-divider"></div>
		        <a class="dropdown-item" href="#">24/7 TV Online</a>
		      </div>
		  </li>
		  <li class="nav-item mx-2 rounded" style="background:<?=APP_COLOR ?>;">
		    <a class="nav-link text-white btn btn btn-sm" style="font-size:12px;" href="#" >CONTACT US</a>
		  </li>

	    </ul>
	  </div>
	</nav>
</div>