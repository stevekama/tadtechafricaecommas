@extends('layouts.app')

@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area"
        style="background: rgba(0, 0, 0, 0) url({{ asset('storage/images/bg/2.jpg') }}) no-repeat scroll center center / cover ;">
        <div class="ht__bradcaump__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Shop Today</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
                                <span class="brd-separetor">/</span>
                                <span class="breadcrumb-item active">Shop Today</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Our Product Area -->
    <section class="htc__product__area shop__page ptb--130 bg__white">
        <div class="container">
            <div class="htc__product__container">
                <!-- Start Product MEnu -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="filter__menu__container">
                            <div class="product__menu">
                                <button data-filter="*" class="is-checked">All</button>
                                <button data-filter=".cat--1">Furnitures</button>
                                <button data-filter=".cat--2">Bags</button>
                                <button data-filter=".cat--3">Decoration</button>
                                <button data-filter=".cat--4">Accessories</button>
                            </div>
                            <div class="filter__box">
                                <a class="filter__menu" href="#">filter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Filter Menu -->
                <div class="filter__wrap">
                    <div class="filter__cart">
                        <div class="filter__cart__inner">
                            <div class="filter__menu__close__btn">
                                <a href="#"><i class="zmdi zmdi-close"></i></a>
                            </div>
                            <div class="filter__content">
                                <!-- Start Single Content -->
                                <div class="fiter__content__inner">
                                    <div class="single__filter">
                                        <h2>Sort By</h2>
                                        <ul class="filter__list">
                                            <li><a href="#default">Default</a></li>
                                            <li><a href="#accessories">Accessories</a></li>
                                            <li><a href="#bags">Bags</a></li>
                                            <li><a href="#chair">Chair</a></li>
                                            <li><a href="#decoration">Decoration</a></li>
                                            <li><a href="#fashion">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Size</h2>
                                        <ul class="filter__list">
                                            <li><a href="#xxl">XXL</a></li>
                                            <li><a href="#xl">XL</a></li>
                                            <li><a href="#x">X</a></li>
                                            <li><a href="#l">L</a></li>
                                            <li><a href="#m">M</a></li>
                                            <li><a href="#s">S</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Tags</h2>
                                        <ul class="filter__list">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Bags</a></li>
                                            <li><a href="#">Chair</a></li>
                                            <li><a href="#">Decoration</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Price</h2>
                                        <ul class="filter__list">
                                            <li><a href="#">$0.00 - $50.00</a></li>
                                            <li><a href="#">$50.00 - $100.00</a></li>
                                            <li><a href="#">$100.00 - $150.00</a></li>
                                            <li><a href="#">$150.00 - $200.00</a></li>
                                            <li><a href="#">$300.00 - $500.00</a></li>
                                            <li><a href="#">$500.00 - $700.00</a></li>
                                        </ul>
                                    </div>
                                    <div class="single__filter">
                                        <h2>Color</h2>
                                        <ul class="filter__list sidebar__list">
                                            <li class="black"><a href="#"><i class="zmdi zmdi-circle"></i>Black</a></li>
                                            <li class="blue"><a href="#"><i class="zmdi zmdi-circle"></i>Blue</a></li>
                                            <li class="brown"><a href="#"><i class="zmdi zmdi-circle"></i>Brown</a></li>
                                            <li class="red"><a href="#"><i class="zmdi zmdi-circle"></i>Red</a></li>
                                            <li class="orange"><a href="#"><i class="zmdi zmdi-circle"></i>Orange</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Content -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Filter Menu -->
                <!-- End Product MEnu -->
                <div class="row">
                    <div class="product__list another-product-style">
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/1.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li>
                                                <a data-toggle="modal" data-target="#productModal" title="Quick View"class="quick-view modal-view detail-link" href="#">
                                                    <span class="ti-plus"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Simple Black Clock</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/2.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li>
                                                <a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#">
                                                    <span class="ti-plus"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Add TO Cart" href="cart.html">
                                                    <span class="ti-shopping-cart"></span>
                                                </a>
                                            </li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">BO&Play Wireless Speaker</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/3.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html">
                                                <span class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Brone Candle</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/4.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Brone Lamp Glasses</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/5.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Clothes Boxed</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/6.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Liquid Unero Ginger Lily</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/7.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Miliraty Backpack</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/8.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Saved Wines Corkscrew</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/9.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Simple Fabric Bags</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/10.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Simple Fabric Chair</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/11.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Unero Round Sunglass</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/12.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Unero Small Bag</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/13.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Wood Complex Lamp Box</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/14.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Wood Long TV Board</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-sm-4 col-xs-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/15.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Wood Simple Chair V2</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->

                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 hidden-sm col-xs-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="{{asset('storage/images/product/16.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View"
                                                    class="quick-view modal-view detail-link" href="#"><span
                                                        class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span
                                                        class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="{{ route('product') }}">Wood Simple Clock</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                </div>
                <!-- Start Load More BTn -->
                <div class="row mt--60">
                    <div class="col-md-12">
                        <div class="htc__loadmore__btn">
                            <a href="#">load more</a>
                        </div>
                    </div>
                </div>
                <!-- End Load More BTn -->
            </div>
        </div>
    </section>
    <!-- End Our Product Area -->

@endsection
