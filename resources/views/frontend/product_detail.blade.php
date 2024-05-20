@extends('layouts.site')
@section('title','chi-tiet-san-pham/slug')
@section('content')
<link rel="icon" type="../img/png" href="../img/logo.jpg">

<link rel="stylesheet" href="../resources/css/bootstrap.min.css">
<link rel="stylesheet" href="../resources/css/elegant-icons.css">
<link rel="stylesheet" href="../resources/css/font-awesome.min.css">
<link rel="stylesheet" href="../resources/css/nice-select.css">
<link rel="stylesheet" href="../resources/css/owl.carousel.min.css">
<link rel="stylesheet" href="../resources/css/style.css">
<!-- Shop Details Section Begin -->
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="./index.html">Home</a>
                        <a href="./product.html">Shop</a>
                        <span>Product Details</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="../img/shop-details/thumb-1.png">
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="../img/shop-details/thumb-2.png">
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="../img/shop-details/thumb-3.png">
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                <div class="product__thumb__pic set-bg" data-setbg="../img/shop-details/thumb-4.png">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="../img/shop-details/product-big.png" alt="" width="400px" height="550px">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="../img/shop-details/product-big-2.png" alt="" width="400px" height="550px">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="../img/shop-details/product-big-3.png" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="../img/shop-details/product-big-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product__details__content">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="product__details__text">
                        <h4>Áo Khoác Không Nón Vải Denim Chống Nắng Phối Màu Dáng Rộng BST Thiết Kế Space Ver3</h4>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span> - 5 Dánh giá</span>
                        </div>
                        <h3>500.000 <span>700.000</span></h3>
                        <p> Áo khoác có lớp lót bằng cotton.
                            Có tay áo dài với hình ảnh được thiết kế độc đáo,
                            thiết kế có nút bấm và túi phía trước và bên trong.
                        </p>
                        <div class="product__details__option">
                            <div class="product__details__option__size">
                                <span>Size:</span>
                                <label for="sm">s
                                    <input type="radio" id="sm">
                                </label>
                                <label for="l">l
                                    <input type="radio" id="l">
                                </label>
                                <label class="active" for="xl">xl
                                    <input type="radio" id="xl">
                                </label>
                                <label for="xxl">xxl
                                    <input type="radio" id="xxl">
                                </label>
                            </div>
                            <div class="product__details__option__color">
                                <span>Màu:</span>
                                <label class="c-1" for="sp-1">
                                    <input type="radio" id="sp-1">
                                </label>
                                <label class="c-2" for="sp-2">
                                    <input type="radio" id="sp-2">
                                </label>
                                <label class="c-3" for="sp-3">
                                    <input type="radio" id="sp-3">
                                </label>
                                <label class="c-4" for="sp-4">
                                    <input type="radio" id="sp-4">
                                </label>
                                <label class="c-9" for="sp-9">
                                    <input type="radio" id="sp-9">
                                </label>
                            </div>
                        </div>
                        <div class="product__details__cart__option">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                            <a href="#" class="primary-btn">+ Thêm vào giỏ hàng</a>
                        </div>
                        <div class="product__details__btns__option">
                            <a href="#"><i class="fa fa-heart"></i> thêm vào danh sách yêu thích</a>
                        </div>
                        <div class="product__details__last__option">
                            <h5><span> Checkout</span></h5>
                            <img src="../img/shop-details/details-payment.png" alt="">
                            <ul> 
                                <li><span>Mã sản phẩm:</span>28112004</li>
                                <li><span>Danh mục:</span>Quần áo</li>
                                <li><span>Tag:</span>Quần áo,Phụ Kiện</li>
                             </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                role="tab">Giới thiệu sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Chi tiết sản phẩm</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                <div class="product__details__tab__content">
                                    <div class="product__details__tab__content">
                                        <p class="note">- Mẫu áo khoác Áo Khoác Không Nón Vải Denim mới ra mắt</p>
                                        <p class="note">- Chất gió dày cầm mịn mát, giữ ấm cực tốt</p>
                                        <p class="note">- Thiết kế túi hộp vừa nam, nữ mặc đều được</p>
                                        <p class="note">- Form áo khoác regular phù hợp mọi dáng người</p>
                                        <p class="note">- Hai màu đen và nâu phù hợp với hầu hết mọi loại outfit</p>
                                        <p class="note">- Sản phẩm chất lượng cao, đảm bảo sự thoải mái, linh hoạt cho người mặc, độ bền cao</p>
                                        <p class="note">- Nhanh tay ấn ngay đặt hàng để nhận nhiều phần quà ưu đãi cực kì hấp dẫn các bạn nhé</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-7" role="tabpanel">
                                <div class="product__details__tab__content">
                                    <p class="note">
                                        <p class="note">Chất liệu : Vải Kaki Nhung</p>
                                        <p class="note">Thành phần: 100% Polyester </p>
                                        <p class="note"> + Họa tiết thêu + thêu đắp giống</p>
                                        <p class="note">+ Cổ áo, cổ tay, lai áo được bo vải gân</p>
                                        <p class="note">+ Áo được cài bằng nút bấm</p>
                                        <p class="note">+ Túi trong tiện dụng</p> 
                                        <p class="note">Áo Khoác Varsity Ngân Hà Space Ver3 </p>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Details Section End -->

<!-- Related Section Begin -->
<section class="related spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="related-title">Sảm phẩm tương tự</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="../img/product/product-1.jpg">
                        <span class="label">New</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="../img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="../img/icon/compare.png" alt=""> <span>So sánh</span></a></li>
                            <li><a href="#"><img src="../img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Giày thể thao</h6>
                        <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>300.000</h5>
                        <div class="product__color__select">
                            <label for="pc-1">
                                <input type="radio" id="pc-1">
                            </label>
                            <label class="active black" for="pc-2">
                                <input type="radio" id="pc-2">
                            </label>
                            <label class="grey" for="pc-3">
                                <input type="radio" id="pc-3">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="../img/product/product-2.jpg">
                        <ul class="product__hover">
                            <li><a href="#"><img src="../img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="../img/icon/compare.png" alt=""> <span>So sánh</span></a></li>
                            <li><a href="#"><img src="../img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Áo khoác denim</h6>
                        <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>300.000</h5>
                        <div class="product__color__select">
                            <label for="pc-4">
                                <input type="radio" id="pc-4">
                            </label>
                            <label class="active black" for="pc-5">
                                <input type="radio" id="pc-5">
                            </label>
                            <label class="grey" for="pc-6">
                                <input type="radio" id="pc-6">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item sale">
                    <div class="product__item__pic set-bg" data-setbg="../img/product/product-11.jpg">
                        <span class="label">Sale</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="../img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="../img/icon/compare.png" alt=""> <span>So sánh</span></a></li>
                            <li><a href="#"><img src="../img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Balo nhiều ngăn</h6>
                        <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>300.000</h5>
                        <div class="product__color__select">
                            <label for="pc-7">
                                <input type="radio" id="pc-7">
                            </label>
                            <label class="active black" for="pc-8">
                                <input type="radio" id="pc-8">
                            </label>
                            <label class="grey" for="pc-9">
                                <input type="radio" id="pc-9">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="../img/product/product-4.jpg">
                        <ul class="product__hover">
                            <li><a href="#"><img src="../img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="../img/icon/compare.png" alt=""> <span>So sánh</span></a></li>
                            <li><a href="#"><img src="../img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Hoodie</h6>
                        <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>300.000</h5>
                        <div class="product__color__select">
                            <label for="pc-10">
                                <input type="radio" id="pc-10">
                            </label>
                            <label class="active black" for="pc-11">
                                <input type="radio" id="pc-11">
                            </label>
                            <label class="grey" for="pc-12">
                                <input type="radio" id="pc-12">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Section End -->
<script src="../resources/js/bootstrap.min.js"></script>
<script src="../resources/js/jquery-3.3.1.min.js"></script>
<script src="../resources/js/jquery.countdown.min.js"></script>
<script src="../resources/js/jquery.magnific-popup.min.js"></script>
<script src="../resources/js/jquery.nice-select.min.js"></script>
<script src="../resources/js/jquery.nicescroll.min.js"></script>
<script src="../resources/js/jquery.slicknav.js"></script>
<script src="../resources/js/main.js"></script>
<script src="../resources/js/mixitup.min.js"></script>
<script src="../resources/js/owl.carousel.min.js"></script>
@endsection
