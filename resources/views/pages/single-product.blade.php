@extends('layouts.master')

@section('content') 
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Single Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        @foreach($allProduct as $all)
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="">{{$all->title}}</a></h2>
                            <div class="product-sidebar-price">
                                <ins>${{$all->price}}</ins> <del>$100.00</del>
                            </div>                             
                        </div>
                        @endforeach
                        
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                        @foreach($recent as $r)
                            <li><a href="">{{$r->title}}</a></li>
                            
                        @endforeach
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        @include('partials.product-des')
                        
                        
                       @include('partials.related-product')
                    </div>                    
                </div>
            </div>
        </div>
    </div>

@endsection