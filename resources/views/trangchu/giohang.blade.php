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
 <!-- shopping-cart-area start -->
 <section class="theme2 theme6 hero-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1 style="color: white" class="text-uppercase">Giỏ Hàng</h1>
                    <p style="color: white">Đeo trang sức là cách thể hiện bạn mà không cần một lời nói nào.
                        Cuộc đời đó có bao lâu mà hững hờ, hãy cứ đeo trang sức như chưa từng được đeo.</p>
                    <a href="/danhmuc" class="krishok-btn">Continue shopping</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- checkout area start -->
<section class="bg-color checkout-area ptb-80">
    <!-- shopping-cart-area start -->
    <div class="cart-main-area ptb-100">
        <div class="container">
            <h3 class="page-title">Các mặt hàng trong giỏ hàng của bạn</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table style="width:100%">
                                @php
                                $content=Cart::content();
                                $stt=1;
                                @endphp
                                <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody id="listCart">
                                    @foreach($content as $v_content)
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="/storage/image/{{$v_content->options->image}}" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{$v_content->name}}</a></td>
                                    <td class="product-price-cart"><span class="amount">{{number_format($v_content ->price)}} VND</span></td>
                                    <td class="product-quantity">
                                        <div class="pro-dec-cart">
                                            {{-- <input class="cart-plus-minus-box" type="text" value="02" name="qtybutton"> --}}
                                            <form action="{{URL('/update_quantity')}}" method="get">
                                                @csrf
                                                <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}" style="width: 30px">
                                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                                <input style="width:100px ;height:30px; background: #ddc47bba; color: white" type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount"><?php
                                        $subtotal = $v_content->price * $v_content->qty;
                                        echo number_format($subtotal) . ' ' . 'vnđ';
                                        ?></span></td>
                                    <td class="product-remove">
         
                                        <a href="{{URL('/delete-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                                   </td>
                                   
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="/TT">Tiếp Tục Mua Sắm</a>
                                    </div>
                                    <div class="cart-clear">
                                        <button onclick="updateCart()">Cập Nhật Giỏ Hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="cart-tax">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Vận Chuyển</h4>
                                </div>
                                <div class="tax-wrapper">
                                    <p>Nhập điểm đến</p>
                                    <div class="tax-select-wrapper">
                                        <div class="tax-select">
                                            <label>
                                                * Thành phố
                                            </label>
                                            <select class="email s-email s-wid">
                                                <option>Hưng Yên</option>
                                                <option>Hà Nội</option>
                                                <option>Đà Nẵng</option>
                                                <option>TP.Hồ Chí Minh</option>
                                                <option>Cần Thơ</option>
                                            </select>
                                        </div>
    
                                        <button class="cart-btn-2" type="submit">Áp Dụng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Mã Giảm Giá</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Sử dụng phiếu giảm giá nếu có.</p>
                                    <form>
                                        <input type="text" required="" name="name">
                                        <button class="cart-btn-2" type="submit">Áp Dụng</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Tổng số giỏ hàng</h4>
                                </div>
                                <div class="total-shipping">
                                    <h5>Tổng số vận chuyển</h5>
                                    <ul>
                                        <li><input type="checkbox"> Standard <span>Free</span></li>
                                        <li><input type="checkbox"> Express <span>Free</span></li>
                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Tổng cộng  <span id="spTong">{{Cart::priceTotal()}} VND</span></h4>
                                <a href="/thanhtoan">Tiến hành kiểm tra</a>
                            </div>
                        </div>
                    </div>
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