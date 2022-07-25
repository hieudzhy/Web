@extends('user_layout')

@section('css')
    <style>
        .myCss {
            position: unset !important; left: unset !important; top: unset !important;
        }
    </style>
@endsection

@section('content')
<!-- product detail area start -->
<section class="product pt-75">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="/storage/image/{{$chitiet->image}}">
                                <img src="/storage/image/{{$chitiet->image}}" alt="product-details">
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="/storage/image/{{$chitiet->image}}">
                                <img src="/storage/image/{{$chitiet->image}}" alt="product-details">
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="/storage/image/{{$chitiet->image}}">
                                <img src="/storage/image/{{$chitiet->image}}" alt="product-details">
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="/storage/image/{{$chitiet->image}}">
                                <img src="/storage/image/{{$chitiet->image}}" alt="product-details">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-7">
                <div class="product-details-content pb-75">
                    <div class="product-details-left">
                        <div class="product-details-title">
                            <h3>{{$chitiet->name}}</h3>
                        </div>
                        <div class="product-details-price">
                            <p>{{number_format($chitiet->unit_price)}} VND</p>
                        </div>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        
                    </div>
                    <div class="product-icon">
                        <a href="#"><i class="fa fa-heart-o"></i></a>
                        <a href="#"><i class="fa fa-share-alt"></i></a>
                    </div>
                    <div class="product-details-btn">
                        {{-- <a href="#" class="krishok-btn">Thêm vào giỏ hàng<i class="fa fa-shopping-cart"></i></a> --}}
                        {{-- <form   action="{{url('/savecart')}}" method="post">
                            @csrf
                            <fieldset>

                                <input type="hidden" name="productid_hidden" value="{{$chitiet->id}}" />
                                <input type="hidden" data-toggle="collapse" name="qty" min="1" value="1" />
                                <input type="submit" class="add-cart" name="submit" style="border:none ;background:#ddc47bba; line-height:40px; color: white"  value="Thêm Giỏ Hàng" class="button" />
                                <!-- <a class="wish" href="#" title="Wishlist"></a>
                                <a class="zoom" href="#" title="Quick view"></a> -->
                            </fieldset>
                        </form> --}}
                        <form action="{{url('/savecart')}}" method="post">
                            @csrf
                            <div class="form-group box-info-product">
                                <div class="single-product-cart btn-hover">
                                    <div class="input-group quantity-control " unselectable="on">

                                        <input type="hidden" name="productid_hidden" value="{{$chitiet->id}}" />
                                        <input type="number" class="cart-plus-minus-box input-text qty text" data-toggle="collapse" style="text-align: center; width:60px" name="qty" min="1" value="1" />
                                        <input type="submit" class="add-cart" name="submit" style="border:none ;background:#ddc47bba; line-height:40px; color: white;width:150px"  value="Thêm Giỏ Hàng" class="button" />
                                    </div>
                                </div>

                            </div>
                        </form>
                        
                    </div>
                    <div class="product-details-descrip">
                        <h3>Mô tả</h3>
                        <p>{{$chitiet->mota_sp}}</p>
                        <a href="#" class="review-btn">Đánh giá</a>
                        <form action="#" class="product-details-form">
                            <input type="text" placeholder="Viết đánh giá của bạn"/>
                            <div class="dropdowns-select">
                                <select>
                                    <option value="5 star">5 star</option>
                                    <option value="4 star">4 star</option>
                                    <option value="3 star">3 star</option>
                                    <option value="2 star">2 star</option>
                                    <option value="1 star">1 star</option>
                                </select>
                            </div>
                            <button class="krishok-btn">Gửi đánh giá</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- product detail area end -->


<!-- shopping product area start -->
<section class="product shopping-product ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title mb-30">
                    <h2>Sản Phẩm Tương Tự</h2>
                    <p>Cuộc đời đó có bao lâu mà hững hờ, hãy cứ đeo trang sức như chưa từng được đeo.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($SPTT as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="/storage/image/{{$item->image}}" style="max-height: 250px;" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="{{route('chitiet',$item->id)}}">{{$item->name}}</a></p>
                    <h5>{{number_format($item->unit_price)}} VND</h5>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section><!-- shopping product area end -->
@stop