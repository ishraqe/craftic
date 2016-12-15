@extends('layouts.master')


@section('content')
	
@include('partials.indexSlider')
	<!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('partials.left-sidebar')
				</div>
					@include('partials.tab-content')
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
					@include('partials.recomended')	
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
@endsection	