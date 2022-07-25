@extends('user_layout')
@section('css')
    <style>
        .myCss {
            position: unset !important; left: unset !important; top: unset !important;
        }
    </style>
@endsection
@section('content')
<!-- blog area start -->
<section class="theme2 theme4 hero-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1 class="text-uppercase"  style="color: white">Tin Tức</h1>
                    <p  style="color: white">Đeo trang sức là cách thể hiện bạn mà không cần một lời nói nào.
                    Cuộc đời đó có bao lâu mà hững hờ, hãy cứ đeo trang sức như chưa từng được đeo.</p> 
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<section class="blog-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="blog-details">
                   <div class="single-blog-detail">
                        <img src="/storage/image/{{$cttintuc->image}}" style="width:800px;" alt="blog-detail">
                        <h2>{{$cttintuc->title}}</h2>
                        <div class="post-author">
                           <p>{{$cttintuc->created_at}}</p>
                        </div>
                        <p>{{$cttintuc->content}}</p>
                        
                    </div>
                    <div class="social-icon">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-0 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                <div class="widget">
                    <h4 class="widget-title">Nội dung mới nhất</h4>
                    @foreach($tintuc as $item )
                    <ul>
                        <li><a href="{{route('cttintuc',$item->id)}}">{{$item->title}}</a></li>
                        
                    </ul>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
</section><!-- blog area end -->
<!-- cooments area start -->
<div class="comments-area ptb-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="view-comments">View Comments <i class="fa fa-angle-down"></i></a>
            </div>
        </div>
    </div>
</div>
{{-- <section class="show-comments ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <ul class="comments-list">
                    <li class="clearfix">
                        <div class="comment-thumb">
                            <a href="#"><img src="assets/img/blog/author-1.png" class="img-circle" alt="Post Comment"></a>
                        </div>
                        <div class="comment-body">
                            <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                            <h5 class="comment-author"><a href="#">Leo Messi</a></h5>
                            <span class="comment-time-ago">10 hours ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dignissimos error tempora maiores! Aut magni, quisquam vero non odit iure animi quod hic odio at quaerat ipsam dolorum sit, blanditiis.</p>
                        </div>
                        <ul class="reply-comments-list">
                            <li class="clearfix">
                                <div class="comment-thumb">
                                    <a href="#"><img src="assets/img/blog/author-3.jpg" class="img-circle" alt="Post Comment"></a>
                                </div>
                                <div class="comment-body">
                                    <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                    <h5 class="comment-author"><a href="#">Luiz Suarez</a></h5>
                                    <span class="comment-time-ago">10 hours ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dignissimos error tempora maiores! Aut magni, quisquam vero non odit iure an</p>
                                </div>
                                <ul class="reply-comments-list">
                                    <li class="clearfix">
                                        <div class="comment-thumb">
                                            <a href="#"><img src="assets/img/blog/author-1.png" class="img-circle" alt="Post Comment"></a>
                                        </div>
                                        <div class="comment-body">
                                            <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                                            <h5 class="comment-author"><a href="#">Leo Messi</a></h5>
                                            <span class="comment-time-ago">10 hours ago</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dignissimos error tempora maiores! Aut magni, quisquam vero non odit iure an</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="clearfix">
                        <div class="comment-thumb">
                            <a href="#"><img src="assets/img/blog/author-3.jpg" class="img-circle" alt="Post Comment"></a>
                        </div>
                        <div class="comment-body">
                            <a href="#" class="comment-reply-link"><i class="fa fa-reply"></i> Reply</a>
                            <h5 class="comment-author"><a href="#">Luiz Suarez</a></h5>
                            <span class="comment-time-ago">10 hours ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum dignissimos error tempora maiores! Aut magni, quisquam vero non odit iure an</p>
                        </div>
                    </li>
                </ul>
                <div class="contact-form">
                    <h4>Post your comment</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Your Comment"></textarea>
                            </div>
                            <div class="col-md-6 offset-md-3">
                                <button class="krishok-btn">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- cooments area end --> --}}
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