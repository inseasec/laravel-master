

@include('frontend/front_layout/header');

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Shop Single</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="index.html">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Shop Single</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start main Content -->

<div class="maincontent bg--white pt--80 pb--55">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="wn__single__product">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="wn__fotorama__wrapper ">
                                <div class="fotorama wn__fotorama__action height_of_image" data-nav="thumbs" >
                                    <?php
                                    if($productImagesCollection->isNotEmpty()){
                                        foreach($productImagesCollection as $productImageObj){
                                            $image = '/assets/front_theme/images/product/1.jpg';
                                            if(!empty($productImageObj->filename)){
                                                $image = '/assets/images/products/'.$product->id.'/'.$productImageObj->filename;
                                            }
                                            ?>
                                            <a href="#"><img src="{{ url($image) }}" alt=""></a>
                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <a href="1.jpg"><img src="{{ url('/assets/front_theme/images/product/1.jpg') }}" alt=""></a>
                                        <a href="2.jpg"><img src="{{ url('/assets/front_theme/images/product/2.jpg') }}" alt=""></a>
                                        <a href="3.jpg"><img src="{{ url('/assets/front_theme/images/product/3.jpg') }}" alt=""></a>
                                        <a href="4.jpg"><img src="{{ url('/assets/front_theme/images/product/4.jpg') }}" alt=""></a>
                                        <a href="5.jpg"><img src="{{ url('/assets/front_theme/images/product/5.jpg') }}" alt=""></a>
                                        <a href="6.jpg"><img src="{{ url('/assets/front_theme/images/product/6.jpg') }}" alt=""></a>
                                        <a href="7.jpg"><img src="{{ url('/assets/front_theme/images/product/7.jpg') }}" alt=""></a>
                                        <a href="8.jpg"><img src="{{ url('/assets/front_theme/images/product/8.jpg') }}" alt=""></a>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="product__info__main">
                                <h1>{{ $product['name']  }}</h1>
                                <div class="product-reviews-summary d-flex">
                                    <ul class="rating-summary d-flex">
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                        <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                    </ul>
                                </div>
                                <div class="price-box">
                                    <span>${{ $product['price']  }}</span>
                                </div>
                                <div class="product__overview">
                                    <p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. Thick material blocks out the wind as ribbed cuffs and bottom band seal in body heat.</p>
                                    <p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie promises superior warmth with every wear. </p>
                                </div>
                                <div class="box-tocart d-flex">
                                    <form>
                                        <span>Qty</span>
                                        <input id="qty" class="input-text qty" name="qty" min="1" value="1" title="Qty" type="number">
                                        <div class="addtocart__actions">
                                            <!--		<button  class="tocart" type="submit" formaction="{{URL::to('/frontend/cart/addToCart/'.$product['id'])}}">Add to Cart</button> --> 
                                            <button  class="tocart" type="button" formaction=""  onclick="addToCart({{ $product['id'] }})">Add to Cart</button>

                                        </div>
                                        <div class="product-addto-links clearfix">
                                            <a class="wishlist" href="#"></a>
                                            <a class="compare" href="#"></a>
                                        </div>
                                    </form>
                                </div>
                                <div class="product_meta">
                                    <span class="posted_in">Categories: 
                                        <a href="#">Adventure</a>, 
                                        <a href="#">Kids' Music</a>
                                    </span>
                                </div>
                                <div class="product-share">
                                    <ul>
                                        <li class="categories-title">Share :</li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-twitter icons"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-tumblr icons"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-facebook icons"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-social-linkedin icons"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wn__related__product pt--80 pb--50">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Related Products</h2>
                    </div>
                    <div class="row mt--60">
                        <div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
                            <!-- Start Single Product -->
                            <?php
                            if(!empty($relatedProductsArr)){
                                foreach($relatedProductsArr as $product_id => $productArr){
                                    $image = !empty($productArr['image']) ? 'assets/images/products/'.$product_id.'/'.$productArr['image'] : 'assets/images/products/no_image.jpg';
                                    ?>
                                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12" >
                                        <div class="product__thumb" style="height: 300px; width:300px;">
                                            <a class="first__img" href="{{url('/frontend/product/showProduct/'.$product_id)}}"><img src="{{ url($image) }}" alt="product image"></a>
                                            <a class="second__img animation1" href="{{url('/frontend/product/showProduct/'.$product_id)}}"><img src="{{ url($image) }}" alt="product image"></a>
                                            <div class="hot__box">
                                                <span class="hot-label">BEST SALLER</span>
                                            </div>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="{{url('/frontend/product/showProduct/'.$product_id)}}">{{$productArr['name']}}</a></h4>
                                            <ul class="prize d-flex">
                                                <li>${{number_format($productArr['price'])}}</li>
                                                <li class="old_prize">${{number_format($productArr['actual_price'])}}</li>
                                            </ul>
                                            <div class="action">
                                                <div class="actions_inner">
                                                    <ul class="add_to_links">
                                                        <li> <button class="btn btn-primary" tpe="button" formaction="" onclick="addToCart({{ $product_id }})">Add To Cart</button></li>
<!--                                                        <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                        <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                        <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                        <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            
                            <!-- Start Single Product -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<script src="{{url('assets/js/frontend/product/showProduct.js')}}"></script>
@include('frontend/front_layout/footer');
