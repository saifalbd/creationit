
<x-frontend-layout>
	<style>
		.custom-row {
			display: flex;
		}
		.custom-item {
			width: 40%;
		}
	

		h2{
			text-transform: uppercase;
			font-weight: bold;
			font-size: 30px;
			color: #666;
		}

	
	.founer {
		margin-right: 20px;
		box-shadow: 1px 1px 2px 3px rgba(0,0,0,.1);
		border-radius: 2px;
		margin-top: 20px;
		padding: 5px;
	}

	.founer img{
		height: 300px;
	}
	
		
	/* responsive */
	@media(max-width:768px){
	
	.custom-item {
		width: 100%;
	}
	
	.custom-item {
		width: 100%;
		display: block;
	}

.section-top h1 {
	margin-bottom: 0;
	margin-top: 50px;
}

	
	}
	
		
</style>
	<!-- About Us -->
	<section class="about-us section-space mt-3">
		<div class="container">
			@if($data == null)
			<h2>data not found</h2>
			@else

			<div class="row">
				<div class="col-lg-4 offset-lg-1 col-md-5 col-12">
					<!-- About Video -->
					<div class="modern-img-feature">
						<img src="{{$data[0]->photo}}" alt="#">
					</div>
					<!--/End About Video  -->
				</div>
				<div class="col-lg-7 col-md-7 col-12">
					<div class="about-content section-title default text-left">
						<div class="section-top">
							<h1><b>{{$data[0]->page_title}}</b></h1>
						</div>
						<div class="section-bottom">
							<div class="text">
									
								<p>
									{!! $data[0]->description !!}
								<p>
								</div>
								@if(!empty($data[0]->file))
									<div><a href="{{$data[0]->file}}" download class="btn btn-primary">  download <i class="fas fa-download"></i></a> </div>
								
								@endif
						</div>
						

					</div>
					
				</div>
			</div>
			@endif
			
		</div>
	</section>	
	
	
	</x-frontend-layout>
	