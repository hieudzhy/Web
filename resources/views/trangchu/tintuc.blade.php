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
<!-- contact area start -->
<!-- blog area start -->
<section class="blog-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    @foreach($tintuc as $item )
                    <div class="col-lg-12">
                        <div class="single-post">
                            <div class="flexbox-center">
                                <div class="post-thumbnail">
                                    <a href="blog-detail.html"><img src="/storage/image/{{$item->image}}" alt="Blog Post" class="img-responsive"></a>
                                </div>
                                 <div class="post-details">
                                     <h5>
                                         <a href="blog-detail.html">{{$item->title}}</a>
                                     </h5>
                                     <div class="post-author">
                                         <p><a href="#">{{$item->created_at}}</p>
                                     </div>
                                     <p style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;width: 200px;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;">{{$item->content}}</p>
                                     <a href="{{route('cttintuc',$item->id)}}" class="read-more">Read more <i class="fa fa-angle-right"></i></a>
                                     <div class="post-meta">
                                         <ul>
                                            <li><a href="#"><i class="fa fa-heart"></i>454</a></li>
                                            <li><a href="#"><i class="fa fa-comment"></i>275</a></li>
                                            <li><a href="#"><i class="fa fa-share-alt"></i>108</a></li>
                                        </ul>
                                     </div>
                                 </div>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-9 offset-lg-3">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
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


@stop