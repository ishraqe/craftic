<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach($cateory as $categories)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">{{$categories->category_name}}</a></h4>
								</div>
							</div>
						@endforeach	
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									
								@foreach($brand as $brands)
									<li><a href="#"> <span class="pull-right">(50)</span>{{$brands->brand_name}}</a></li>
								@endforeach	
								</ul>
							</div>
						</div><!--/brands_products-->
</div>