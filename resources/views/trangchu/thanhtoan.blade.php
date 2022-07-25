@extends('user_layout')
@section('css')
    <style>
        .myCss {
            position: unset !important; left: unset !important; top: unset !important;
        }
        .cart-clear button:hover{
            background-color: #ddc47bba;
        }
        .cart-shiping-update a:hover{
            background-color: #ddc47bba;
        }
    </style>
@endsection
@section('content')
<!-- hero area start -->
<section class="theme2 theme6 hero-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1 style="color: white" class="text-uppercase">Thanh Toán</h1>
                    <p style="color: white">Đeo trang sức là cách thể hiện bạn mà không cần một lời nói nào.
                        Cuộc đời đó có bao lâu mà hững hờ, hãy cứ đeo trang sức như chưa từng được đeo.</p>
                    <a href="/TT" class="krishok-btn">Tiếp Tục Mua Hàng</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- checkout area start -->
<section class="bg-color checkout-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <h3>Thông tin khách hàng</h3>
                    <form action="{{url('/checkout')}}" method="get" class="form-horizontal">
                        <div class="col-lg-12 col-md-12">
                            <div class=" billing-info mb-20">
                                <label for="inputfname" class=" control-label">Họ tên khách hàng<span class="color"></span></label>
                                <input type="text" placeholder="..." id="inputfname" class="form-control" name="ten_kh">
                            </div>
                        </div>
                        <div class="form-group col-md-12 billing-info mb-20">
                            <label for="inputlname" class=" control-label">Email<span class="color"></span></label>
                            <input type="text" placeholder="..." id="inputlname" class="form-control" name="email">
                        </div>
                        <div class="form-group col-md-12 billing-info mb-20">
                            <label for="inputcompany" class=" control-label">Địa Chỉ<span class="color"></span></label>
                            <input type="text" placeholder="..." id="inputcompany" class="form-control" name="dia_chi">
                        </div>
                        <div>
                            <div class="form-group col-md-12 billing-info mb-20">
                                <label for="inputemail" class=" control-label">Số Điện Thoại<span class="color"></span></label>
                                <input type="text" placeholder="..." id="inputemail" class="form-control" name="sdt">
                            </div>
                            <div class="form-group col-md-12 billing-info mb-20">
                                <label for="inputphone" class=" control-label">Ghi chú<span class="color"></span></label>
                                <input type="text" placeholder="..." id="inputphone" class="form-control" name="note">
                            </div>
                        </div>
                        <button type="submit" class="link-v1 box lh-50 rt full" style="width:100%;height:50px; background-color:#ddc47bba;color:white" href="" title="">THANH TOÁN NGAY</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- checkout area end -->
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

@stop