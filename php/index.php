<?php

 //    require_once './vendor/autoload.php';
 //    require_once 'bootstrap.php';
 //    use App\Core\App;
 //    define('PATH_ROOT', __DIR__);
	// $myApp = new App();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="data/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style-header-footer.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/fontawesome-all.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/rrweb@latest/dist/rrweb.min.css"/>

  
<script type="text/javascript">
    (function () {
        window.__insp = window.__insp || [];
        __insp.push(['wid', 1795840290]);
        var ldinsp = function () {
            if (typeof window.__inspld != "undefined") return;
            window.__inspld = 1;
            var insp = document.createElement('script');
            insp.type = 'text/javascript';
            insp.async = true;
            insp.id = "inspsync";
            insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=1795840290&r=' + Math.floor(new Date().getTime() / 3600000);
            let x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(insp, x);
        };
        setTimeout(ldinsp, 0);
    })();
</script>
  <title>Hoa quả sạch</title>
</head>

<body>
  <section class="main">
    <section class="header">
      <div class="container column-one d-flex justify-content-around align-items-center">
        <div class="logo">
        </div>
        <div class="search">
          <div class="input-group"> <input type="text" class="form-control input-text" placeholder="Search products...." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append"> <button class="btn btn-outline-warning btn-lg" type="button"><i class="fa fa-search"></i></button> </div>
          </div>
        </div>
        <div class="hotline">
          Liên hệ : 0394599501
        </div>
        <div class=" btn-menu-phone">
          <button id="btn-menu" class="btn-menu-fixed">
            <span id="span_1"></span>
            <span id="span_2"></span>
            <span id="span_3"></span>
          </button>
        </div>
      </div>

      <div class="container list-menu" style="background: #fff;">
        <ul class=" menu-header ">
          <li class="nav-item active">
            <a class="nav-link" href="#">Trang chủ</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Sản phẩm</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Tin tức</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Liên hệ</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Giỏ hàng</a>
          </li>
          <li>
            <a class="nav-link" href="#">Đăng nhập</a>
          </li>
        </ul>
      </div>
    </section>

    <section id="banner-index">
      <div class="banner-slider">
        <div class="banner-slider slider">
          <div>
            <div class="banner-item">
              <div class="img">
                <img class="d-block w-100" src="image/cause-qua-bo.jpg" alt="First slide">
              </div>
            </div>
          </div>
          <div>
            <div class="banner-item">
              <div class="img">
                <img class="d-block w-100" src="image/thanhchay.jpg" alt="Third slide">
              </div>

            </div>
          </div>
          <div>
            <div class="banner-item">
              <div class="img">
                <img class="d-block w-100 active" src="image/causr-qua-nho.jpg" alt="Second slide">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!---------------------- Bạn nên mua hàng ở chỗ chúng tôi-------------------->
    <div class="container ly-do-3">
      <h2 id="lydo-muahang">Lý do bạn nên mua hàng của chúng tôi</h2>
      <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 mh">
          <div class="box-muahang">
            <img src="image/t1_3.png" alt="" id="img-muahang">
            <p class="tieude-muahang">HOA QUẢ TƯƠI SẠCH</p>
            <p class="noidung-muahang">Quy trình nhập hàng, vận chuyển, bảo quản chuyên nghiệp.</p>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 mh">
          <div class="box-muahang">
            <img src="image/t1_4.png" alt="" id="img-muahang">
            <p class="tieude-muahang">ĐỔI TRẢ MIỄN PHÍ</p>
            <p class="noidung-muahang">Đổi trả miễn phí trong 24h khi khách hàng không hài lòng.</p>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 mh">
          <div class="box-muahang">
            <img src="image/t1_5.png" alt="" id="img-muahang">
            <p class="tieude-muahang">GIÁ CẢ CẠNH TRANH</p>
            <p class="noidung-muahang">Chúng tôi luôn đặt lợi ích cho người tiêu dùng lên hàng đầu.</p>
          </div>
        </div>
      </div>
    </div>





    <div class="container san-pham-noi-bat">
      <div class="product">
        <h2>Sản Phẩm Nổi Bật</h2>
        <div class="product-slider">
          <div class="regular slider">
            <div>
              <div class="product">
                <div class="img">
                  <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
                  <div class="information ">

                    <div class="view">
                      <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                      <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
                    </div>
                  </div>
                </div>
                <div class="info">
                  <p class="name text-center"><a href="#"> Táo Tàu Miền Nam </a>  </p>

                  <p class="price  text-center m-0">
                    <span>
                      22,999,000
                    </span> VNĐ
                  </p>

                </div>

              </div>
            </div>
            <div>
              <div class="product">
                <div class="img">
                  <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
                  <div class="information ">

                    <div class="view">
                      <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                      <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
                    </div>
                  </div>
                </div>
                <div class="info">
                  <p class="name text-center"><a href="#"> Táo Tàu Miền Nam </a>  </p>

                  <p class="price  text-center m-0">
                    <span>
                      22,999,000
                    </span> VNĐ
                  </p>

                </div>

              </div>
            </div>
            <div>
             <div class="product">
              <div class="img">
                <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
                <div class="information ">

                  <div class="view">
                    <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                    <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
                  </div>
                </div>
              </div>
              <div class="info">
                <p class="name text-center"><a href="#"> Táo Tàu Miền Nam </a>  </p>

                <p class="price  text-center m-0">
                  <span>
                    22,999,000
                  </span> VNĐ
                </p>

              </div>

            </div>
          </div>

          <div>
           <div class="product">
            <div class="img">
              <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
              <div class="information ">

                <div class="view">
                  <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                  <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
                </div>
              </div>
            </div>
            <div class="info">
              <p class="name text-center"><a href="#"> Táo Tàu Miền Nam</a>  </p>

              <p class="price  text-center m-0">
                <span>
                  22,999,000
                </span> VNĐ
              </p>

            </div>

          </div>
        </div>
        <div>
         <div class="product">
          <div class="img">
            <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
            <div class="information ">

              <div class="view">
                <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
              </div>
            </div>
          </div>
          <div class="info">
            <p class="name text-center"><a href="#"> Táo Tàu Miền Nam</a>  </p>

            <p class="price  text-center m-0">
              <span>
                22,999,000
              </span> VNĐ
            </p>

          </div>

        </div>
      </div>


    </div>

  </div>
</div>
</div>
<div class="container san-pham-ban-chay">
  <div class="product">
    <h2>Sản Phẩm Bán Chạy</h2>
    <div class="product-slider">
      <div class="regular slider">
        <div>
          <div class="product">
            <div class="img">
              <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
              <div class="information ">

                <div class="view">
                  <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                  <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
                </div>
              </div>
            </div>
            <div class="info">
              <p class="name text-center"><a href="#">  Táo Tàu Miền Nam</a>  </p>

              <p class="price  text-center m-0">
                <span>
                  22,999,000
                </span> VNĐ
              </p>

            </div>

          </div>
        </div>
        <div>
         <div class="product">
          <div class="img">
            <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
            <div class="information ">

              <div class="view">
                <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
                <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
              </div>
            </div>
          </div>
          <div class="info">
            <p class="name text-center"><a href="#">  Táo Tàu Miền Nam</a>  </p>

            <p class="price  text-center m-0">
              <span>
                22,999,000
              </span> VNĐ
            </p>

          </div>

        </div>
      </div>
      <div>
       <div class="product">
        <div class="img">
          <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
          <div class="information ">

            <div class="view">
              <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
              <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
            </div>
          </div>
        </div>
        <div class="info">
          <p class="name text-center"><a href="#">  Táo Tàu Miền Nam</a>  </p>

          <p class="price  text-center m-0">
            <span>
              22,999,000
            </span> VNĐ
          </p>

        </div>

      </div>
    </div>

    <div>
     <div class="product">
      <div class="img">
        <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
        <div class="information ">

          <div class="view">
            <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
            <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
          </div>
        </div>
      </div>
      <div class="info">
        <p class="name text-center"><a href="#"> Táo Tàu Miền Nam</a>  </p>

        <p class="price  text-center m-0">
          <span>
            22,999,000
          </span> VNĐ
        </p>

      </div>

    </div>
  </div>
  <div>
   <div class="product">
    <div class="img">
      <img src="./images/Luu.jpg" alt="Tủ quần &#225;o" class="img-fluid">
      <div class="information ">

        <div class="view">
          <a href="#"><i class="fa fa-eye" style="font-size: 12px;"></i></i> Xem nhanh </a>
          <a href="javascript:;" id="156" class="listproduct"><i class="fa fa-shopping-cart"></i>Giỏ Hàng </a>
        </div>
      </div>
    </div>
    <div class="info">
      <p class="name text-center"><a href="#">  Táo Tàu Miền Nam</a>  </p>

      <p class="price  text-center m-0">
        <span>
          22,999,000
        </span> VNĐ
      </p>

    </div>

  </div>
</div>


</div>

</div>
</div>
</div>

<div class="container tin-tuc">
  <h2> Tin tức </h2>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-7">
      <div class="box">
        <div class="img">
          <img src="./image/hai-duong-co-nhung-loai-hoa-qua-gi-ngon4.png" alt="Hoa Quả Bóc Sẵn Ngon Tuyệt" class="w-100">
        </div>
        <div class="main-content">
          <p class="title">
            <a href="#">
              Hoa Quả Bóc Sẵn Ngon Tuyệt
            </a>
          </p>
          <div class="desc">
            <p>
            Chỉ việc đớp thôi</p>

          </div>
        </div>
      </div>

    </div>
    <div class="col-12 col-sm-12 col-md-5">
      <ul>
        <li class="d-flex">
          <div class="img">
            <img src="images/hop.jpg" alt="Hộp trái cây cao cấp">
          </div>
          <div class="content">
            <p class="title">
              <a href="#">
                Hộp trái cây cao cấp
              </a>
            </p>
            <div class="desc sub-news-content">Các loại hộp trái cây nhập khẩu có sẵn sang trọng và đảm bảo chất lượng, phù hợp với mọi nhu cầu.</div>
          </div>
        </li>
        <li class="d-flex">
          <div class="img">
            <img src="images/hop.jpg" alt="Hộp trái cây cao cấp">
          </div>
          <div class="content">
            <p class="title">
              <a href="#">
                Hộp trái cây cao cấp
              </a>
            </p>
            <div class="desc sub-news-content">Các loại hộp trái cây nhập khẩu có sẵn sang trọng và đảm bảo chất lượng, phù hợp với mọi nhu cầu.</div>
          </div>
        </li>
        <li class="d-flex">
          <div class="img">
            <img src="images/hop.jpg" alt="Hộp trái cây cao cấp">
          </div>
          <div class="content">
            <p class="title">
              <a href="#">
                Hộp trái cây cao cấp
              </a>
            </p>
            <div class="desc sub-news-content">Các loại hộp trái cây nhập khẩu có sẵn sang trọng và đảm bảo chất lượng, phù hợp với mọi nhu cầu.</div>
          </div>
        </li>
      </ul>
      <div>
        <a href="/tin-tuc" class="see-more"> Xem thêm <i class="fas fa-long-arrow-alt-right"></i></a>
      </div>
    </div>
  </div>
</div>


<!-- ------------------FOOter--------------------------------- -->
<!-- Footer -->
<section id="footer">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5 id="footer-text">CHÍNH SÁCH</h5>
        <ul class="list-unstyled quick-links">
          <li><i class="fa fa-angle-double-right"></i> Chính sách bảo mật thông tin</li>
          <li><i class="fa fa-angle-double-right"></i> Quy định và hình thức thanh toán</li>
          <li><i class="fa fa-angle-double-right"></i> Chính sách thành viên Fuji</li>
          <li><i class="fa fa-angle-double-right"></i> Chính sách đổi trả</li>
          <li><i class="fa fa-angle-double-right"></i> Chính sách vận chuyển</li>
          <li><i class="fa fa-angle-double-right"></i> Câu hỏi thường gặp</li>

        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5 id="footer-text">HỖ TRỢ</h5>
        <ul class="list-unstyled quick-links">
          <li><i class="fa fa-angle-double-right"></i> Hệ thống cửa hàng</li>
          <li><i class="fa fa-angle-double-right"></i> Hướng dẫn mua hàng</li>
          <li><i class="fa fa-angle-double-right"></i> Hóa đơn VAT</li>
          <li>
            <ul class="social-icon">
              <li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
              <li><i class="fa fa-google-plus-official" aria-hidden="true"></i></li>
              <li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>

            </ul>
          </li>

        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5 id="footer-text">CÔNG TY THỰC PHẨM SẠCH</h5>
        <ul class="list-unstyled quick-links">
          <li><i class="fa fa-angle-double-right"></i> Trụ sở: Hà Nội</li>
          <li><i class="fa fa-angle-double-right"></i> Hotline: 1900 1111- 0123456789</li>
          <li><i class="fa fa-angle-double-right"></i> Website: www.hoaquasach.com</li>


        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ./Footer -->
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>


<script type="text/javascript">

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".banner-slider").slick({

      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 300,
      autoplay:true
    });
    $(".regular").slick({
      dots: false,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
                ]
              });
  });

</script>
<script src="./Javascript/style.js" type="text/javascript" charset="utf-8" async defer></script>

<script src="https://cdn.jsdelivr.net/npm/rrweb@latest/dist/rrweb.min.js"></script>
 


</body>

</html>