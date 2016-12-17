  <div class="product-content-right">
                        @if(Session::has('cart'))
                            <div class="woocommerce">
                          
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                     
                                    <tbody>
                                     @foreach($product as $products)
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html">{{$products['item']->title}}</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">{{$products['item']->price}}</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="{{$products['qty']}}" min="0" step="1">
                                                    <input type="button" class="plus" value="+">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">{{$products['item']->price*$products['qty']}}</span> 
                                            </td>
                                        </tr>
                                         @endforeach
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <input type="submit" value="Update Cart" name="update_cart" class="button">
                                                <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </form>

                            <div class="cart-collaterals">


                          

                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">£{{$totalPrice}}</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">£{{$totalPrice}}</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            </div>

                        </div>  

                        @else
                        <div class="row">
                            <div class="col-md-6">
                                <h2>No, items in cart</h2>
                            </div>
                        </div>
                        @endif                      
                    </div>  