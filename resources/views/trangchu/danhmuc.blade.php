@extends('user_layout')
@section('css')
    <style>
        .myCss {
            position: unset !important; left: unset !important; top: unset !important;
        }
        /* .add-cart:hover{
            margin: 50px 0px 0px 0px;
            transition: all 0,5s;

        } */
    </style>
@endsection
@section('content')
<!-- hero area start -->
<section class="theme2 hero-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1 style="color: white">Sản Phẩm</h1>
                    <p style="color: white">Đeo trang sức là cách thể hiện bạn mà không cần một lời nói nào.
                    Cuộc đời đó có bao lâu mà hững hờ, hãy cứ đeo trang sức như chưa từng được đeo.</p>
                    <a href="#" class="krishok-btn">Shop Now <i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- all product area start -->
<section class="all-product ptb-80">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Catagory">Chọn Danh Mục</option>
                            <option value="Catagory"><a href="">Nhẫn</a></option>
                            <option value="Catagory"><a href="">Khuyên Tai</a></option>
                            <option value="Catagory"><a href="">Dây Chuyền</a></option>
                            <option value="Catagory"><a href="">Vòng Pandora</a></option>
                            <option value="Catagory"><a href="">Nhẫn Đôi</a></option>
                            <option value="Catagory"><a href="">Lắc Tay Nữ</a></option>
                        </select>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            @foreach ($dssp as $item)
                
            
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="/storage/image/{{$item->image}}" style="max-height: 230px;" alt="">
                            <div class="product-img-overlay">
                                {{-- <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a> --}}
                                <form  action="{{url('/savecart')}}" method="post">
                                    @csrf
                                    <fieldset>

                                        <input type="hidden" name="productid_hidden" value="{{$item->id}}" />
                                        <input type="hidden" data-toggle="collapse" style="margin-top:10px;margin-bottom:10px" name="qty" min="1" value="1" />
                                        <input type="submit" class="add-cart" name="submit" style="border:none ;background:#ddc47bba; line-height:40px; margin: 30% 0px 0px 0px; color: white"  value="Thêm Giỏ Hàng" class="button" />
                                        <!-- <a class="wish" href="#" title="Wishlist"></a>
                                        <a class="zoom" href="#" title="Quick view"></a> -->
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="{{route('chitiet',$item->id)}}"><h4 style="font-size: 15px">{{$item->name}}</h4></a>

                            <span class="price">Giá: <strong>{{number_format($item->unit_price)}} VND</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div> --}}
        
        
    </div>
</section><!-- all product area end -->
<!-- get quote area start -->
<section class="get-quote ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Get Update About Products</h2>
                <form action="#">
                    <input type="text" placeholder="Email Address">
                    <button type="submit">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</section><!-- get quote area end -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="/js/angular.min.js"></script>
<script >

    document.getElementById("tt1").className = "active";;
    
    </script>
@stop