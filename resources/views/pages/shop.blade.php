@extends('layouts.master')  
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            @foreach($product->chunk(4) as $proChunk)
                <div class="row">
                @foreach($proChunk as $p)
                    <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="img/product-2.jpg" alt="">
                        </div>
                        <h2><a href="">{{$p->title}}</a></h2>
                        <div class="product-carousel-price">
                            <ins>${{$p->price}}</ins> <del>$999.00</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{action('ProductController@show',[$p->id])}}">View Details</a>
                        </div>                       
                    </div>
                </div>
                @endforeach
               
                </div>
            @endforeach

            
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          {!! $product->render() !!}
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection