@extends('user_layout')

@section('css')
    <style>
        .myCss {
            position: unset !important; left: unset !important; top: unset !important;
        }
    </style>
@endsection

@section('content')
<!-- hero area start -->
<section class="hero-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-10">
                <div class="hero-area-content ptb-80">
                    <h1 style="color: white">Luôn mang lại trải nghiêm tốt nhất cho quý khách hàng</h1>
                    <p style="color: white">Đeo trang sức là cách thể hiện bạn mà không cần một lời nói nào.
                    Cuộc đời đó có bao lâu mà hững hờ, hãy cứ đeo trang sức như chưa từng được đeo.</p>
                    <a href="$" class="krishok-btn">Shop Now <i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="image-slider">
        <div class="item-content">
            <div class="item-slider item-slider1"></div>
            <div class="item-slider item-slider2"></div>
        </div>
    </div>
    <div class="item-thumbnail">
        <a href="#" data-slide-index="0">
            <div class="list-thumb list-thumb1"></div>
        </a>
        <a href="#" data-slide-index="1">
            <div class="list-thumb list-thumb2"></div>
        </a>
    </div>
    <!--/Slider thumbnail-->
</section><!-- hero area end -->
<!-- shopping product area start -->
<section class="shopping-product ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="shopping-product-menu max-width-360">
                    <ul>
                        <li data-filter="*" class="active">All</li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="row product-item">
            <div class="col-lg-3 col-sm-6 other myCss" ng-repeat="sp in sanPhamNew | limitTo: 8" >
                <div class="sell-item max-width-360">
                    <div class="product-img">
                        <img src="/storage/image/@{{sp.image}}" style="max-height: 230px;" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="/chitiet/@{{sp.id}}">@{{sp.name}}</a> </p>
                    <h5>Giá: @{{sp.unit_price| number : 0}} VND</h5>
                </div>
            </div>

            <!-- <div class="col-lg-3 col-sm-6 new other" ng-repeat="sp in sanPhamNew"> -->
                <!-- <div class="sell-item max-width-360">
                    <div class="product-img">
                        <img src="/backend/assets/img/main-product/5.jpg" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">xxx</a></p>
                    <h5>$50.00</h5>
                </div> -->
                <!-- </div> -->

            <!-- <div class="col-lg-3 col-sm-6 best seasonal">
                        <div class="sell-item max-width-360">
							<div class="product-img">
								<img src="/backend/assets/img/main-product/6.jpg" alt="">
								<div class="product-img-overlay">
									<a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
                            <p><a href="product-details.html">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 other">
                        <div class="sell-item max-width-360">
							<div class="product-img">
								<img src="/backend/assets/img/main-product/7.jpg" alt="">
								<div class="product-img-overlay">
									<a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
                            <p><a href="product-details.html">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 other seasonal">
                        <div class="sell-item max-width-360">
							<div class="product-img">
								<img src="/backend/assets/img/main-product/9.jpg" alt="">
								<div class="product-img-overlay">
									<a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
                            <p><a href="product-details.html">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 seasonal">
                        <div class="sell-item max-width-360">
							<div class="product-img">
								<img src="/backend/assets/img/main-product/11.jpg" alt="">
								<div class="product-img-overlay">
									<a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
                            <p><a href="product-details.html">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 best">
                        <div class="sell-item max-width-360">
							<div class="product-img">
								<img src="/backend/assets/img/main-product/12.jpg" alt="">
								<div class="product-img-overlay">
									<a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
								</div>
							</div>
                            <p><a href="product-details.html">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div> -->
        </div>
        <!-- <div class="row">
            <div class="col-md-12">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div> -->
    </div>
</section><!-- shopping product area end -->
<!-- product area start -->
<section class="product ptb-70" style="margin-top:500px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>Sản Phẩm Mới</h2>
                    <p>Đeo trang sức là cách thể hiện bạn mà không cần một lời nói nào. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
                <div class="tab-accordion pt-75">
                    <div class="tab-content">
                        <div id="menu2" class="tab-pane fade active show" >
                            <img src="/sanpham/nhan17.jpg" style="" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-75">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a data-toggle="tab" href="#menu1" ng-repeat="sp in sanPhamNew | limitTo: 6">
                            <div class="product-list">
                                <div class="product-list-img">
                                    <img src="/storage/image/@{{sp.image}}" alt="">
                                </div>
                                <div class="product-list-info">
                                    <div class="product-list-info-table">
                                        <p>@{{sp.name}}</p>
                                        <h5>Giá: @{{sp.unit_price| number : 0}} VND</h5>
                                        <div class="product-list-icon">
                                            <i class="fa fa-shopping-cart"></i>
                                            <i class="fa fa-heart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- product area end -->


{{-- <section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title">
                    <h2>Best Sells</h2>
                    <p>Cuộc đời đó có bao lâu mà hững hờ, hãy cứ đeo trang sức như chưa từng được đeo.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="sell-area owl-carousel">
                    <div class="sell-item" ng-repeat="sp in sanPhamNew | limitTo: 1">
                        <div class="product-img">
                            <img src="/storage/image/@{{sp.image}}" style="max-height: 230px;" alt="">
                            <div class="product-img-overlay">
                                <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <p><a href="/chitiet/@{{sp.id}}">@{{sp.name}}</a></p>
                        <h5>Giá: @{{sp.unit_price| number : 0}} VND</h5>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="get-quote ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Get Update About Products</h2>
                <form action="#">
                    <input type="text" placeholder="Địa Chỉ Email">
                    <button type="submit">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</section><!-- get quote area end -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="/js/angular.min.js"></script>
<script src="/js/trangchu.js"></script>
<script >

document.getElementById("tt").className = "active";;

</script>

@stop