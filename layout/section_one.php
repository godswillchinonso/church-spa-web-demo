<style>
	.section_one{
		padding-top: 50px;
		padding-inline: 20px;
	}

	.section_one .display-3{
		font-family: anton;
		letter-spacing: 3px;
	}
	.section_one .d-flex-container{
		display: flex;
		justify-content: space-between;
		align-items: center;
		gap: 20px;
		margin-top: -120px;
	}
	.section_one .d-flex-container .card-body{
		width: 100%;
		height: 120px;
	}

	.section_one .d-flex-container .card-body .fas{
		font-size: 50px;
	}

	.section_one .d-flex-container .card-body h3{
		font-size: 20px;
		font-family: Montserrat;
	}

	.section_one .d-flex-container .card-body p{
		font-size:13px;
		font-family: Poppins;
	}

	@media(max-width:768px){
		.section_one .d-flex-container{
			display: block;
			margin-top: 50px;
		}

		.section_one .d-flex-container .card-body{
			width: 100%;
			height: 100%;
			margin: 20px 0;
		}
	}
</style>

<section class="section_one">
	<div class="container">

		<div class=" d-flex-container" >
			<div class="card card-body">
				<div class="d-flex">
					<span>
						<i class="fas fa-clock"></i>
					</span>
					<div>
						<h3 class="fw-bold">Sunday Services</h3>
						<p class="text-muted">First Service: 6AM-9AM Prompt</p>
						<p class="text-muted">Second Service: 6AM-9AM Prompt</p>
					</div>
				</div>
			</div>

			<!-- midweek services -->
			<div class="card card-body">
				<div class="d-flex">
					<span>
						<i class="fas fa-clock"></i>
					</span>
					<div>
						<h3 class="fw-bold">Midweek Services</h3>
						<p class="text-muted">Every Thursday: 5PM-7PM Prompt</p>
					</div>
				</div>
			</div>


			<!-- midweek services -->
			<div class="card card-body">
				<div class="d-flex">
					<span>
						<i class="fas fa-heart"></i>
					</span>
					<div>
						<h3 class="fw-bold">Join A Cell</h3>
						<p class="text-muted">Through the cells, we are small enough to know you</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>