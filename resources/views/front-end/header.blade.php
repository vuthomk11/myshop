<div class="header-top bg bg-danger">
    <p class="text-white text-center p-1">Chợ của cộng đồng Aoe Việt Nam</p>
</div>
<div class="header-main">
    <div class="row">
        <div class="col-sm-3 logo">
            <img class="m-0" src="acess/image/logo1.webp" alt="">
        </div>
            <div class="col-sm-6 search">
                <form action="{{route('Home.search')}}" method="get">
                    <div class="d-flex">
                        <input class="form-control" id="search" name="search" type="text" placeholder="Tìm kiếm sản phẩm...">
                        <button type="submit" class="btn btn-danger"><svg style="fill: #ffff;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="20" height="20"><path d="M37.613,36.293l-9.408-9.432a15.005,15.005,0,1,0-1.41,1.414L36.2,37.707A1,1,0,1,0,37.613,36.293ZM3.992,17A12.967,12.967,0,1,1,16.959,30,13,13,0,0,1,3.992,17Z"></path></svg></i></button>
                    </div>
                </form>
            </div>
        <div class="col-sm-3 text-center pt-2 cart">
            <a href="{{route('Cart.index')}}" class="d-flex">
                <i class="fas fa-shopping-cart fa-3x text-danger icon">({{$cart->total_quantity}})</i>
            </a>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<nav class="navbar navbar-expand-md  navbar-dark menu-bottom">
    <a class="navbar-brand" href="#"><i class="fas fa-home text-danger"></i></a>
    <button class="navbar-toggler bg-danger" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse menu-bottom-item" id="collapsibleNavbar">
        <ul class="navbar-nav">
            @foreach($category as $val)
                <li class="nav-item dropdown">
                    <a class="nav-link dropbtn text-uppercase text-center" href="category/{{$val->cate_slug}}.html">{{$val->cate_name}} <i class="fa fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                    @foreach($val->CatChils as $CatChills  )
                            <a href="category/{{$CatChills->cate_slug}}.html">{{$CatChills->cate_name}}</a>
                    @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</nav>


<div class="w3-content w3-section w-100" >
    @foreach($slider_main as $val)
    <img class="mySlides" src="acess/upload/slider/{{$val->image}}" style="width:100%;height: 500px">
    @endforeach
</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>

