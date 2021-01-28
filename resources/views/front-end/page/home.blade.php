@extends('front-end.master')
@section('title')
    Trang chủ
@endsection
@section('main')
    <div class="baner-top container-fluid pt-1">
        <div class="row w-100">
            <div class="baner-top col-sm-4 d-block mx-auto">
                <img src="acess/image/slider/baner-top-1.webp" class="w-100 h-100" alt="">
                <div class="baner-top-item">
                    <h4 class="text-white">Rapido</h4>
                    <button class="btn btn-danger text-white">Xem ngay</button>
                </div>
            </div>
            <div class="baner-top col-sm-4 d-block mx-auto">
                <img src="acess/image/slider/baner-top-2.webp" class="w-100 h-100" alt="">
                <div class="baner-top-item">
                    <h4 class="text-white">Rapido</h4>
                    <button class="btn btn-danger text-white">Xem ngay</button>
                </div>
            </div>
            <div class="baner-top col-sm-4 d-block mx-auto">
                <img src="acess/image/slider/baner-top-3.webp" class="w-100 h-100" alt="">
                <div class="baner-top-item">
                    <h4 class="text-white">Rapido</h4>
                    <button class="btn btn-danger text-white">Xem ngay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="clock">
        <div class="clock-title pb-5 pt-5">
            <h2 class="text-center"><a href="category/iphone.html">IPHONE</a></h2>
        </div>
        <div class="pro-item container pt-5 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                    @foreach($pro_iphone as $val)
                <div class="col-md-4 col-sm-6 col-xs-6 shadow mb-3">
                    <div class="pro-item-img">
                        <a href="product/{{$val->pro_slug}}.html">
                            <div class="img-detail">
                                <img class="bottom w-100" src="acess/upload/product/{{$val->pro_thumbnail}}" alt="">
                            </div>
                        </a>
                        @if(isset($val->pro_sale))
                            <span  class="pro-sale" style="border-radius: 40px">
                                <small class="text-white font-weight-bold">{{floor((($val->pro_price)-($val->pro_sale))/(($val->pro_price))*100)}}%</small>
                            </span>
                        @endif
                    </div>
                    <div class="pro-detail pl-2">
                        <h3 class="pro-name"><a href="product/{{$val->pro_slug}}.html">{{$val->pro_name}}</a></h3>
                        <div class="pro-price d-flex">
                            @if($val->pro_sale)
                                <p class="mr-3 text-danger">{{number_format($val->pro_sale)}}₫ <del class="text-dark">{{number_format($val->pro_price)}}₫</del></p>
                            @else
                                <p class="text-danger">{{number_format($val->pro_price)}}₫</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="other text-center pt-5 pb-4">
                <a href="category/iphone.html">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="slider-main container-fluid">
        <div class="row">
            <div class="col-sm-4 slider-main-item">
                <img src="acess/image/slider/slider-main1.webp" class="w-100" alt="">
                <div class="slider-main-detail">
                    <h4 class="text-white pb-3">Vfloor</h4>
                    <button class="btn">XEM THÊM</button>
                </div>
            </div>
            <div class="col-sm-4 slider-main-item">
                <img src="acess/image/slider/slider-main1.webp" class="w-100" alt="">
                <div class="slider-main-detail">
                    <h4 class="text-white pb-3">Vfloor</h4>
                    <button class="btn">XEM THÊM</button>
                </div>
            </div>
            <div class="col-sm-4 slider-main-item">
                <img src="acess/image/slider/slider-main1.webp" class="w-100" alt="">
                <div class="slider-main-detail">
                    <h4 class="text-white pb-3">Vfloor</h4>
                    <button class="btn">XEM THÊM</button>
                </div>
            </div>
        </div>
    </div>
    <div class="clock">
        <div class="clock-title pb-5 pt-5">
            <h2 class="text-center font-weight-bold">Sản Phẩm Mới</h2>
        </div>
        <div class="pro-item container pt-5 p-3 mb-5 bg-white rounded">
            <div class="row">
                @foreach($new_product as $val)
                    <div class="col-md-4 col-sm-6 col-xs-6 shadow mb-3">
                        <div class="pro-item-img">
                            <a href="product/{{$val->pro_slug}}.html">
                                <div class="img-detail">
                                    <img class="bottom w-100" src="acess/upload/product/{{$val->pro_thumbnail}}" alt="">
                                </div>
                            </a>
                            @if(isset($val->pro_sale))
                                <span  class="pro-sale" style="border-radius: 40px">
                                <small class="text-white font-weight-bold">{{floor((($val->pro_price)-($val->pro_sale))/(($val->pro_price))*100)}}%</small>
                            </span>
                            @endif
                        </div>
                        <div class="pro-detail pl-2">
                            <h3 class="pro-name"><a href="product/{{$val->pro_slug}}.html">{{$val->pro_name}}</a></h3>
                            <div class="pro-price d-flex">
                                @if($val->pro_sale)
                                    <p class="mr-3 text-danger">{{number_format($val->pro_sale)}}₫ <del class="text-dark">{{number_format($val->pro_price)}}₫</del></p>
                                @else
                                    <p class="text-danger">{{number_format($val->pro_price)}}₫</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="clock">
        <div class="clock-title pb-5 pt-5">
            <h2 class="text-center"><a href="category/samsung.html">Điện Thoại SamSung</a></h2>
        </div>
        <div class="pro-item container pt-5 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                @foreach($pro_samsung as $val)
                    <div class="col-md-4 col-sm-6 col-xs-6 shadow mb-3">
                        <div class="pro-item-img">
                            <a href="product/{{$val->pro_slug}}.html">
                                <div class="img-detail">
                                    <img class="bottom w-100" src="acess/upload/product/{{$val->pro_thumbnail}}" alt="">
                                </div>
                            </a>
                            @if(isset($val->pro_sale))
                                <span  class="pro-sale" style="border-radius: 40px">
                                <small class="text-white font-weight-bold">{{floor((($val->pro_price)-($val->pro_sale))/(($val->pro_price))*100)}}%</small>
                            </span>
                            @endif
                        </div>
                        <div class="pro-detail pl-2">
                            <h3 class="pro-name"><a href="product/{{$val->pro_slug}}.html">{{$val->pro_name}}</a></h3>
                            <div class="pro-price d-flex">
                                @if($val->pro_sale)
                                    <p class="mr-3 text-danger">{{number_format($val->pro_sale)}}₫ <del class="text-dark">{{number_format($val->pro_price)}}₫</del></p>
                                @else
                                    <p class="text-danger">{{number_format($val->pro_price)}}₫</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="other text-center pt-5 pb-4">
                <a href="category/samsung.html">Xem tất cả</a>
            </div>
        </div>
    </div>
    <div class="clock">
        <div class="clock-title pb-5 pt-5">
            <h2 class="text-center border-bottom border-danger"><a href="">Tin tức công nghệ</a></h2>
        </div>
        <div class="pro-item container pt-5 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="row">
                @foreach($post as $val)
                    <div class="col-md-4 col-sm-6 col-xs-6 shadow mb-3">
                        <div class="pro-item-img">
                            <a href="post/{{$val->slug}}.html">
                                <div class="img-detail">
                                    <img class="bottom w-100" src="acess/upload/post/{{$val->thumbnail}}" alt="">
                                </div>
                            </a>
                        </div>
                        <a class="text-dark text-center font-weight-bold" href="post/{{$val->slug}}.html"><h5 class="mt-3">{{$val->title}}</h5></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="infomation container bg bg-white mt-5">
        <div class="row">
            <div class="col-sm-6 infomation-left">
                <div class="infomation-item pt-3">
                    <img class="w-100" src="acess/image/slider/slider-botom.webp" alt="">
                </div>
            </div>
            <div class="col-sm-6 infomation-right">
                <div class="infomation-text">
                    <h1 class="font-weight-bold text-center">VỀ CHÚNG TÔI</h1>
                    <p>EgoMall là sàn thương mại điện tử đầu tiên dành cho cộng đồng AOE I</p>
                    <p class="">Giá trị cốt lõi của EgoMall là mang đến cho cộng đồng những sản phẩm , dịch vụ tốt nhất cùng với ưu đãi lớn nhất . Mọi sản phẩm dịch vụ trên EgoMall phải đảm bảo mang lại giá trị thiết thực cho cộng đồng , là những thương hiệu
                        lớn đã được đội ngũ nhân viên công ty kiểm tra rất kỹ mới đưa đến anh em cộng đồng . Thương hiệu được bán trên EgoMall là những thương hiệu đã và đang quảng bá và đồng hành với cộng đồng AOE . Mua sắm trên EgoMall anh em sẽ
                        hài lòng với chất lượng sản phẩm cũng như các chương trình vô cùng hấp dẫn . Anh em sử dụng sản phẩm , dịch vụ trên EgoMall cũng đồng nghĩa với việc đóng góp 1 phần tài chính để cùng xây dựng cộng đồng AOE I với những giải
                        đấu hấp dẫn .
                    </p>
                    <p>Mọi chi tiết vui lòng liên hệ: 19009058</p>
                </div>
            </div>
        </div>
    </div>
    @if (session('message'))
        <script>
            $(document).ready(function(){
                swal("Đặt hàng thành công!", "{{session('message')}}", "success");
            });
        </script>
    @endif
@endsection
