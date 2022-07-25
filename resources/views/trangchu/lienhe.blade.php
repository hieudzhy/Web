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
<section class="theme2 theme4 hero-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1 class="text-uppercase"  style="color: white">Liên Hệ</h1>
                    <p  style="color: white">Đeo trang sức là cách thể hiện bạn mà không cần một lời nói nào.
                    Cuộc đời đó có bao lâu mà hững hờ, hãy cứ đeo trang sức như chưa từng được đeo.</p> 
                    <a href="#email-us" class="krishok-btn">Email here</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- contact area start -->
<section class="ptb-80" id="email-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4>Liên Lạc</h4>
                    <form action="#">
                        <input type="text" placeholder="Họ Và Tên">
                        <input type="email" placeholder="Địa Chỉ Email">
                        <textarea placeholder="Nhập"></textarea>
                        <button class="krishok-btn">Gửi</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <h4>Địa Chỉ</h4>
                    <div class="contact-area">
                        <p>Luôn mang lại trải nghiêm tốt nhất cho quý khách hàng. Không hài lòng về sản phẩm vui lòng liên hệ với chúng tôi qua thông tin trên website. </p>
                        <p>Chúng tôi mở cửa từ 9h00 — 17h00 các ngày trong tuần.</p>
                        <p>Cầu Tình<br>huyện Mỹ Hào,tỉnh Hưng Yên</p>
                        <p>Email: dodanhtiep1007@mail.com <br> Phone: 0358 344 882</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- contact gallery area end -->
<!-- contact map area start -->
<section>
    <div class="container">
        <div class="row map-area">
            <div class="col-lg-12">
                <div class="sec-title pt-75">
                    <h3>Tìm Chúng Tôi Trên Bản Đồ</h3>

                </div>
            </div>
        </div>
    </div>
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.4027172847013!2d106.0559187154015!3d20.93633659630181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a59f5993d4ab%3A0xce81c07f44252e7c!2zQ-G6p3UgVMOsbmg!5e0!3m2!1svi!2s!4v1652276873709!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section><!-- contact map area end -->


@stop