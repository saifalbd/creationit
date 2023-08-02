<x-frontend-layout>
<style>
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
						<img src="/assets/img/{{$data->avatar->path}}" alt="#">
					</div>
					<!--/End About Video  -->
				</div>
				<div class="col-lg-7 col-md-7 col-12">
					<div class="about-content section-title default text-left">
						<div class="section-top">
							<h1><b>{{$data->name}}</b></h1>
						</div>
						<div class="section-bottom">
							<div class="text">
									
								<p>
									{!! $data->details !!}
								<p>
								</div>
								
						</div>
						<hr>
                        <samp><i class="fa fa-check-circle"></i>  Course Fee: {{$data->fee}}/-</samp>
                        <samp><i class="fa fa-calendar"></i>  Course Duration:  {{$data->duration}} Months</samp>

					</div>
					
				</div>
			</div>
			@endif
			
		</div>
	</section>	
	
</x-frontend-layout>