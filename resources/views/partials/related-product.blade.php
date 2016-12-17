<div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                            @foreach($related as $r)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">{{$r->title}}</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>${{$r->price}}</ins> <del>$100.00</del>
                                    </div> 
                                </div>
                            @endforeach    
                                                                   
    </div>
</div>