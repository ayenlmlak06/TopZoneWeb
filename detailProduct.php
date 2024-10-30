<?php
require_once('database/request.php');
$result1 =  get_Image($_GET['name']);
$result2 =  get_1product($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Detail</title>

    <meta name="keywords" content="ip13 Pro max, 13 Pro mã, iPhone 13pro max, 13 Pro max 128, 13promax 128, 13 max 128, iPhone 13 Pro max 128GB" />
    <meta name="description" content="Mua điện thoại iPhone 13 Pro Max 128GB chính hãng Apple, trả góp 0% hoặc Giảm ngay 6.4 triệu, thu cũ đổi mới tài trợ đến 1.5 triệu (01-31/08). Bảo hành 12 tháng, giao nhanh." />
    <meta property="og:description" content="Mua điện thoại iPhone 13 Pro Max 128GB chính hãng Apple, trả góp 0% hoặc Giảm ngay 6.4 triệu, thu cũ đổi mới tài trợ đến 1.5 triệu (01-31/08). Bảo hành 12 tháng, giao nhanh." />
    <meta property="og:title" content="iPhone 13 Pro Max 128GB - Trả góp 0% hoặc giảm 6.4 triệu" />
    <link rel="canonical" href="https://www.topzone.vn/iphone/iphone-13-pro-max" />
    <meta property="og:image" content="https://img.tgdd.vn/16/TCNuSVkgGUY-" />
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta name="viewport" content="width=device-width" />
    <meta name="copyright" content="Công ty Cổ phần Thế Giới Di Động" />
    <meta name="author" content="Công ty Cổ phần Thế Giới Di Động" />
    <meta http-equiv="audience" content="General" />
    <meta name="resource-type" content="Document" />
    <meta name="distribution" content="Global" />
    <meta name="revisit-after" content="1 days" />
    <meta name="GENERATOR" content="Công ty Cổ phần Thế Giới Di Động" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:site_name" content="Thegioididong.com" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:pages" content="214993791879039" />
    <meta http-equiv="x-dns-prefetch-control" content="on">

    <link rel="stylesheet" href="style/detailProduct.css">
</head>
<body>
    <header>
        <div class="head">
            <div class="logo-topzone">
                <a href="home.php">
                    <i class="topzone-logo"></i>
                </a>
                <a href="home.php">
                    <i class="topzone-autho"></i>
                </a>
            </div>
            <ul class="menu">
                <li class="menu-ip ">
                    <a href="indexTabIphone.php">
                        <span>iPhone</span>
                    </a>
                </li>
                <li class="menu-mac ">
                    <a href="indexTabMac.php">
                        <span>Mac</span>
                    </a>
                </li>
                <li class="menu-ipad ">
                    <a href="indexiPadTab.php">
                        <span>iPad</span>
                    </a>
                </li>
                <li class="menu-watch ">
                    <a href="indexWatchTab.php">
                        <span>Watch</span>
                    </a>
                </li>
                <li class="menu-sound ">
                    <a href="indexAmthanhTab.php">
                        <span>Âm thanh</span>
                    </a>
                </li>
                <li class="menu-access ">
                    <a href="indexPhukienTab.php">
                        <span>Phụ kiện</span>
                    </a>
                </li>
                    <li class="menu-news ">
                        <a href="tekzoneTab.php">
                            <span>TekZone</span>
                        </a>
                    </li>
                    <li class="menu-access ">
                        <a href="topcareTab.php">
                            <span>TopCare</span>
                        </a>
                    </li>
            </ul>
            <div class="search-cart">
                <div class="search-sp">
                    <i class="topzone-search"></i>
                </div>
                <a href="/cart" class="cart">
                    <i class="topzone-cart"></i>
                </a>
                <div class="view-cart">
                    <i class="topzone-cohang"></i>
                    <span>Đã thêm sản phẩm vào giỏ hàng</span>
                    <a href="/cart">Xem giỏ hàng</a>
                </div>
            </div>
            <form class="form-search" onsubmit="return false;">
                <div class="click-search">
                    <i class="topzone-search"></i>
                    <input type="text" placeholder="Tìm kiếm sản phẩm">
                    <i class="topzone-delSearch"></i>
                </div>
                <button type="submit" class="submit-search" style="display:none">
                </button>
                <div class="sg-search">
                </div>
            </form>
        </div>
    </header>
    
    <section data-id="230529" data-cate-id="42" class="detail">
    
        <div class="intro-detail"> 
            <div class="center-page">
            
                <aside id="slider-detail">
                    <div class="video-img">
                        <div class="thubmail-slide full">
                            <div class="prev"></div>
                            <div class="next"></div>
                            <div class="owl-carousel slider-img" id="slider-defaults">
                                    <div class="item-img" data-thumb="<?php echo $result1 [0]['link_bimg']; ?>">
                                        <img class="owl-lazy" title="iPhone SE (2022) M&#xE0;u &#x110;&#x1ECF;" alt="iPhone SE (2022) M&#xE0;u &#x110;&#x1ECF;" data-src="<?php echo $result1 [0]['link_bimg']; ?>" width="650" height="650" >
                                    </div>
                                    <?php 
                                        $n= count($result1) ;
                                        for ($i = 1; $i < $n; $i++) { 
                                    ?>
                                        <div class="item-img" data-thumb="<?php echo $result1 [$i]['link_bimg']; ?>">
                                            <img class="owl-lazy" title="iPhone 13 Pro Max So S&#xE1;nh K&#xED;ch C&#x1EE1;" alt="iPhone 13 Pro Max So S&#xE1;nh K&#xED;ch C&#x1EE1;" data-src="<?php echo $result1 [$i]['link_bimg']; ?>" width="650" height="650" >
                                        </div>
                                    <?php
                                        }
                                    ?>    
                            </div>
                        </div>
                    </div>
                </aside>
    <aside>
<!-- Tên sp               -->
        <h1><?php echo $result2 [0]["name"]; ?></h1>

<!-- Giá -->
        <div class="price-promo-local">

            <strong class="price">
                <?php echo $result2 [0]["price"]; ?>&#x20AB;             
            </strong>
            
            <div class="capacity">
                    <span>Dung l&#x1B0;&#x1EE3;ng</span>
                <ul>
                        <li class="active">
                            <a href="/iphone/iphone-13-pro-max">
                                128GB
                            </a>
                        </li>
                        <li class="">
                            <a href="/iphone/iphone-13-pro-max-256gb">
                                256GB
                            </a>
                        </li>
                        <li class="">
                            <a href="/iphone/iphone-13-pro-max-512gb">
                                512GB
                            </a>
                        </li>
                        <li class="">
                            <a href="/iphone/iphone-13-pro-max-1tb">
                                1TB
                            </a>
                        </li>
                </ul>
            </div>
        
            
                <div class="color-sp">
                        <span>Màu: V&#xE0;ng &#x111;&#x1ED3;ng</span>
                    <ul>
                            <li class="active" data-idx="16" data-color="16" data-type="2" data-code="0131491002662" data-name="M&#xE0;u: V&#xE0;ng &#x111;&#x1ED3;ng">
                                    <a href="javascript:;" style="background-color:#fae7cf"></a>
                            </li>
                            <li class="" data-idx="6" data-color="6" data-type="2" data-code="0131491002650" data-name="M&#xE0;u: X&#xE1;m">
                                    <a href="javascript:;" style="background-color:#54524f"></a>
                            </li>
                            <li class="" data-idx="5" data-color="5" data-type="2" data-code="0131491002663" data-name="M&#xE0;u: B&#x1EA1;c">
                                    <a href="javascript:;" style="background-color:#f1f2ed"></a>
                            </li>
                            <li class="" data-idx="4" data-color="4" data-type="2" data-code="0131491002664" data-name="M&#xE0;u: Xanh D&#x1B0;&#x1A1;ng">
                                    <a href="javascript:;" style="background-color:#a7c1d9"></a>
                            </li>
                            <li class="" data-idx="7" data-color="7" data-type="2" data-code="0131491003088" data-name="M&#xE0;u: Xanh l&#xE1;">
                                    <a href="javascript:;" style="background-color:#576856"></a>
                            </li>
                    </ul>
                </div>
           
        
<!-- Khuyến mãi         -->
                <div id="promotion-detail" class="box-promo nomal">
                    <span>Khuyến mãi </span>
                            <small>Giá và khuyến mãi dự kiến áp dụng đến 23:00 | 31/08</small>
                    <div class="content-promo">
                    <p data-promotion="1172326" data-group="t&#x1EB7;ng" data-discount="0" data-productcode="7042011000379       " data-tovalue="9900">
                        <i></i>
                        <b>Cơ hội trúng 20 iPad Pro M1 12.9" WiFi 512GB (Màu ngẫu nhiên) <a href="https://www.topzone.vn/tekzone/mua-iphone-13-series-rut-tham-trung-20-may-ipad-pro-m1-tai-topzone-1449529"> Xem chi tiết</a></b>
                    </p>
                    <p data-promotion="1154993" data-group="WebNote" data-discount="0" data-productcode="" data-tovalue="9500">
                        <i></i>
                        <b>Phụ kiện chính hãng Apple giảm 30% khi mua kèm iPhone <a href="https://www.topzone.vn/topnews/ruoc-iphone-13-series-nhan-lien-uu-dai-giam-soc-1391646"> Xem chi tiết</a></b>
                    </p>
                    <p data-promotion="1154989" data-group="WebNote" data-discount="0" data-productcode="" data-tovalue="9000">
                        <i></i>
                        <b>Giảm giá 25% iPad Pro M1 12.9" (2021) khi mua kèm iPhone (Không áp dụng kèm khuyến mãi khác của iPad) <a href="https://www.topzone.vn/tekzone/ipad-12-9-inch-2021-giam-gia-khi-mua-kem-iphone-13-1436134"> Xem chi tiết</a><br></b>
                    </p>
                    <p data-promotion="1024583" data-group="WebNote" data-discount="0" data-productcode="" data-tovalue="7000">
                        <i></i>
                        <b>Giảm đến 1,500,000đ khi tham gia thu cũ đổi mới (Không áp dụng kèm giảm giá qua VNPAY) <a href="https://www.topzone.vn/tekzone/topzone-iphone-ipad-giam-khi-tham-gia-thu-cu-doi-moi-1417401"> Xem chi tiết</a></b>
                    </p>
                    <p data-promotion="932785" data-group="WebNote" data-discount="0" data-productcode="" data-tovalue="5000">
                        <i></i>
                        <b>Giảm 50% giá gói cước 1 năm (Vina350/Vina500) cho Sim VinaPhone trả sau (Trị giá đến 3 triệu) <a href="https://www.topzone.vn/topnews/chuong-trinh-uu-dai-goi-cuoc-vinaphone-khi-mua-iphone-1400980"> Xem chi tiết</a></b>
                    </p>
                    <p data-promotion="1155004" data-group="WebNote" data-discount="0" data-productcode="" data-tovalue="1000">
                        <i></i>
                        <b>Giảm 20% giá gói Bảo hiểm Bảo hành mở rộng PTI 12 tháng cho Iphone, Ipad <a href="
        https://www.topzone.vn/tekzone/goi-dich-vu-bao-hiem-bao-hanh-mo-rong-1407424"> Xem chi tiết</a></b>
                    </p>
                    <p data-promotion="1155007" data-group="WebNote" data-discount="0" data-productcode="" data-tovalue="800">
                        <i></i>
                        <b>Giảm 20% giá gói Bảo hiểm Rơi vỡ 6 tháng cho Iphone, Ipad <a href="
        https://www.topzone.vn/tekzone/giam-gia-goi-bao-hiem-roi-vo-khi-mua-kem-iphone-ipad-tai-topzone-1451312"> Xem chi tiết</a></b>
                    </p>
                    <p data-promotion="1154998" data-group="WebNote" data-discount="0" data-productcode="" data-tovalue="0">
                        <i></i>
                        <b>Nhập mã SPPMWG giảm 10% tối đa 100.000đ khi thanh toán qua Ví ShopeePay <a href="https://www.topzone.vn/tekzone/nhap-ma-sppmwg-giam-10-toi-da-100-000d-khi-thanh-toan-qua-shopeepay-1451072"> (click xem chi tiết)</a></b>
                    </p>
                    </div>
        
                    
                    <p class="text"><em class="note">(*)</em> Giá hoặc khuyến mãi không áp dụng trả góp lãi suất đặc biệt (0%, 0.5%, 1%)</p>
         
        
                    
        
                </div>
        
        
        
                <span class="check-goods"><i class="topzone-box"></i>Xem TopZone có hàng</span>
        
        
            <div class="campaign c3 dt">
                <b>Ưu đãi khi thanh toán</b>
                <div class="sliderX">
                        <div class="campaign-option" data-siteid="16" data-campaignname="VNPAYQR" onclick="ActiveOption($(this), '/cart/single?productId=230529&amp;productCode=0131491002662&amp;gtype=promotiongw&amp;transtype=37', 0)" >
                            <figure class="vnpayqr">
                                <i></i>
                                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/logo/vnpay.png" />
                            </figure>
                                <b>Giảm <b>500.000&#x20AB;</b></b>
                                <span>S&#x1EA3;n ph&#x1EA9;m iPhone</span>
        
                                <div>
                                        <i onmouseover="ShowRuleCampaign($(this), 'vnpayqr')" onmouseout="HideRuleCampaign($(this))">?</i>
        
                                    <div id="vnpayqr">- Nhập mã <strong>TGDDTAO</strong> giảm thêm <strong>500.000₫</strong> khi thanh toán bằng quét QRCode qua App của các ngân hàng<br />
        - Thời gian: 01/8/2022 - 31/8/2022.<br />
        - Số suất: 10000<strong> </strong>suất cho cả 3 website TGDĐ/ĐMX/Topzone (hết suất thanh toán sẽ báo lỗi)<br />
        - Sản phẩm áp dụng: Tất cả sản phẩm<strong> IPHONE, IPAD.</strong><br />
        - Các ngân hàng được áp dụng KM: Vietcombank, BIDV, VietinBank, Agribank, Nam A Bank, Eximbank, SCB, HDBank, ABBank, Vietbank, BIDC, SAIGONBANK, OceanBank, Kienlongbank, Bảo Việt Bank, Việt Á Bank và ví điện tử VNPAY<br />
        - Số lần khuyến mãi: Mỗi khách hàng (tương ứng với mỗi số tài khoản ngân hàng và/hoặc số điện thoại đăng ký dịch vụ mobile banking) được khuyến mại 01 (một lần)/tháng.</div>
                                </div>
                        </div>
                        <div class="campaign-option" data-siteid="16" data-campaignname="EXIMBANK" onclick="ActiveOption($(this), '/cart/single?productId=230529&amp;productCode=0131491002662&amp;gtype=promotiongw&amp;transtype=78', 3000000)" >
                            <figure class="eximbank">
                                <i></i>
                                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/logo/eximbank.jpg" />
                            </figure>
                                <b>Giảm <b>500.000&#x20AB;</b></b>
                                <span>S&#x1EA3;n ph&#x1EA9;m t&#x1EEB; 3Tr</span>
        
                                <div>
                                        <i onmouseover="ShowRuleCampaign($(this), 'eximbank')" onmouseout="HideRuleCampaign($(this))">?</i>
        
                                    <div id="eximbank"><p>- Giảm 500.000đ cho sản phẩm 3.000.000đ trở l&ecirc;n khi thanh to&aacute;n qua thẻ t&iacute;n dụng EXIMBANK.</p>
        <p>- Thời gian diễn ra chương tr&igrave;nh : Từ ng&agrave;y 15/06/2022 - 15/01/2023.</p>
        <p>- Số suất khuyến m&atilde;i : <strong>1.250</strong> suất (Nếu hết suất thanh to&aacute;n sẽ b&aacute;o lỗi).</p>
        <p>- Mỗi chủ thẻ được &aacute;p dụng 1 lần/chu kỳ.</p>
        <p>- Kh&ocirc;ng &aacute;p dụng trả g&oacute;p qua thẻ t&iacute;n dụng EXIMBANK.</p>
        <p>- Kh&ocirc;ng &aacute;p dụng k&egrave;m c&aacute;c khuyến m&atilde;i qua ng&acirc;n h&agrave;ng hoặc cổng thanh to&aacute;n kh&aacute;ch.</p>
        <p>- Kh&ocirc;ng &aacute;p dụng k&egrave;m m&atilde; giảm gi&aacute;, coupon giảm gi&aacute;.</p></div>
                                </div>
                                <div class="cpopup hide eximbank" onclick="$(this).addClass('hide')">
                                    <div>
                                        Chương trình giảm thêm 500.000&#x20AB; khi thanh toán qua EXIMBANK chỉ áp dụng cho đơn hàng <b>từ 3.000.000&#x20AB; trở lên</b>
                                    </div>
                                </div>
                        </div>
                        <div class="campaign-option" data-siteid="16" data-campaignname="OCB" onclick="ActiveOption($(this), '/cart/single?productId=230529&amp;productCode=0131491002662&amp;gtype=promotiongw&amp;transtype=81', 5000000)" >
                            <figure class="ocb">
                                <i></i>
                                <img src="//cdn.tgdd.vn/mwgcart/topzone/images/logo/ocb-1.png" />
                            </figure>
                                <b>Giảm <b>500.000&#x20AB;</b></b>
                                <span>S&#x1EA3;n ph&#x1EA9;m t&#x1EEB; 5Tr</span>
        
                                <div>
                                        <i onmouseover="ShowRuleCampaign($(this), 'ocb')" onmouseout="HideRuleCampaign($(this))">?</i>
        
                                    <div id="ocb"><p style="font-weight: 400;">- Ưu đ&atilde;i <strong>500.000đ</strong> cho sản phẩm c&oacute; gi&aacute; thanh to&aacute;n cuối c&ugrave;ng từ <strong>5.000.000đ</strong> trở l&ecirc;n khi thanh to&aacute;n qua Thẻ t&iacute;n dụng quốc tế OCB.</p>
        <p style="font-weight: 400;">- Thời gian diễn ra chương tr&igrave;nh: Từ ng&agrave;y 15/8/2022 - 15/2/2023 (C&oacute; thể kết th&uacute;c sớm nếu hết suất)</p>
        <p style="font-weight: 400;">- &Aacute;p dụng cho thẻ t&iacute;n dụng OCB với c&aacute;c đầu BIN: 530572, 542172, 520980, 356505.</p>
        <p style="font-weight: 400;">- Số suất khuyến m&atilde;i: <strong>125</strong> suất (Nếu hết suất thanh to&aacute;n sẽ b&aacute;o lỗi)</p>
        <p style="font-weight: 400;">- Mỗi chủ thẻ được sử dụng ưu đ&atilde;i 1 lần/ng&agrave;y</p>
        <p style="font-weight: 400;">- Kh&ocirc;ng &aacute;p dụng chung với chương tr&igrave;nh trả g&oacute;p qua thẻ t&iacute;n dụng OCB.</p>
        <p style="font-weight: 400;">- Kh&ocirc;ng &aacute;p dụng k&egrave;m c&aacute;c khuyến m&atilde;i qua ng&acirc;n h&agrave;ng hoặc cổng thanh to&aacute;n kh&aacute;c.</p>
        <p style="font-weight: 400;">- Kh&ocirc;ng &aacute;p dụng m&atilde; giảm gi&aacute;, coupon.</p></div>
                                </div>
                                <div class="cpopup hide ocb" onclick="$(this).addClass('hide')">
                                    <div>
                                        Chương trình giảm thêm 500.000&#x20AB; khi thanh toán qua OCB chỉ áp dụng cho đơn hàng <b>từ 5.000.000&#x20AB; trở lên</b>
                                    </div>
                                </div>
                        </div>
                </div>
                <div class="crule hide"></div>
            </div>
            <script>
                function ShowRuleCampaign($this, element) {
                    if ($this.hasClass('act')) {
                        $this.removeClass('act');
                        $('.crule').toggleClass('hide');
                    } else {
                        $('.crule').removeClass('hide');
                        $('.campaign>div>div>div>i.act').removeClass('act');
                        $this.toggleClass('act');
                    }
        
                    $('.crule').html($('#' + element).html());
                }
                function HideRuleCampaign($this) {
                    $this.removeClass('act');
                    $('.crule').toggleClass('hide');
                }
                function CheckApply($this, url, min) {
                    var option = $this.parents('.campaign-option');
                    if ($('.choosepromo .label-radio.active').length>0 && min>0) {
                        var price = parseInt(33990000);
                        var discount = parseInt(5300000);
                        $('.choosepromo .label-radio.active').each(function () {
                            var $parent = $(this).parent();
                            var value = parseInt($parent.data('discount'));
                            if (value>0) {
                                discount += $parent.data('ispercent') == 'True' ? (value * price / 100) :value;
                            }
                        });
        
                        if (price - discount < min) {
                            option.find('.cpopup').removeClass('hide');
                        } else {
                            window.location.href = url;
                        }
                    } else {
                            window.location.href = url;
                    }
                }
                function ActiveOption($this, url, min) {
                    var option = $this;
                    if (option.hasClass('active')) {
                        option.removeClass('active');
                        $('.btn-camp').remove();
                        $('.buy-sp .btn-buy').show();
                    }
                    else {
                        option.siblings().removeClass('active');
                        option.addClass('active');
        
                        $('.buy-sp .btn-buy').hide();
        
                        if ($('.btn-camp').length>0) {
                            $('.btn-camp').remove();
                        }
        
                        var newButton = $('<a href="javascript:void(0)" class="btn-camp btn-buy full"></a>');
                        newButton.click(() => CheckApply($this, url, min))
                        newButton.text(`Mua ngay qua ${$this.data('campaignname')}`);
                        $('.buy-sp.normal').prepend(newButton);
                    }
                }
                function gtm_trakking(url) {
                    var obj = getModelTracking();
                    obj.orderType = "Mua ngay Vnpay";
                    var obj = getModelTracking();
                    if (url.indexOf("vnpayqr") != -1) {
                        obj.productPromoyionType = "Khuyến mãi thường";
                        obj.orderType = "Mua ngay Vnpay";
                    }
                    else {
                        if (url.indexOf("onepayjcb") != -1) {
                            obj.orderType = "Mua ngay Onepay JCB";
                        } else {
                            if (url.indexOf("fecredit") != -1) {
                                obj.orderType = "Mua ngay FeCredit";
                            }
                            else {
                                obj.orderType = "Mua ngay Tpbank";
                            }
                        }
                    }
                    gtm_ProductAddtoCart(obj);
                }
            </script>
            <style>
                .campaign.dt>div::-webkit-scrollbar {width:6px;height:6px;}
                .campaign.dt>div::-webkit-scrollbar-track {border-radius:10px;background:rgba(255,255,255,0.3);}
                .campaign.dt>div::-webkit-scrollbar-thumb {border-radius:10px;background:rgba(255,255,255,0.5);}
                .campaign.dt>div::-webkit-scrollbar-thumb:hover {background:rgba(255,255,255,0.4);}
                .campaign.dt>div::-webkit-scrollbar-thumb:active {background:rgba(255,255,255,.9);}
                .campaign {margin-bottom:15px;padding-top:17px;border-top:1px solid #E0E0E0;white-space:nowrap;position:relative;}
                .campaign>div.sliderX {display:flex;overflow-x:scroll;-webkit-overflow-scrolling:touch;-ms-scroll-chaining:chained;padding-bottom:6px;}
                .campaign>b {display:block;margin-bottom:15px;font-size:16px;color:#fff;}
                .campaign>div>div {min-width:calc(40% - 3px);display:inline-block;vertical-align:top;padding:10px 10px 8px;border:2px solid #fff;border-radius:12px;position:relative;flex-shrink:0;margin-right:5px;background-color:#fff;cursor:pointer;}
                .campaign>div>div:last-of-type {margin-right:0;}
                .campaign>div>div>* {display:block;margin-bottom:2px;}
                .campaign>div>div>figure {height:16px;position:relative;margin-bottom:6px;}
                .campaign>div>div>figure>img {max-height:100%;top:0;bottom:0;left:20px;margin:auto;position:absolute;}
                .campaign>div>div>figure.jcb>img {height:15px;}
                .campaign>div>div>figure.tpbank>img {height:13px;}
                .campaign>div>div>figure.fecredit>img {height:8px;}
                .campaign>div>div>figure.vnpayqr>img {height:10px;}
                .campaign>div>div>figure.fundiin>img {height:15px;}
                .campaign>div>div>b {color:#000;font-weight:400;}
                .campaign>div>div>b>span {font-size:12px;color:#666;}
                .campaign>div>div>span {font-size:12px;color:#666;}
                .campaign>div>div>a {font-weight:400;color:#FB6E2E;margin-bottom:0;}
                .campaign>div>div>div {width:16px;height:16px;position:absolute;right:10px;top:10px;}
                .campaign>div>div>div>i {font-style:normal;width:16px;height:16px;border-radius:50%;display:block;background-color:#999;color:#fff;font-size:10px;text-align:center;line-height:16px;position:relative;cursor:pointer;}
                .campaign>div>div>div>i.act {background-color:#2F80ED;}
                .campaign>div>div>div>i.act:before {content:"";position:absolute;width:12px;height:12px;background:#e0e0e0;transform:rotate(45deg);top:15px;right:2px;box-shadow:-2px -2px 5px -4px;}
                .campaign>div>div>div>div {display:none;}
                .campaign div.crule {position:absolute;right:0;top:83px;padding:10px;border-radius:12px;width:100%;background-color:#fff;border:1px solid #E0E0E0;z-index:5;white-space:normal;line-height:1.5;box-shadow:0 0 8px #ccc;}
                .campaign div.crule>* {margin-bottom:10px;color:#333;white-space:normal;}
                .campaign .cpopup {position:fixed !important;left:0 !important;top:0 !important;width:100%;height:100vh;background:rgba(0,0,0,.85);z-index:10;}
                .campaign .cpopup>div {width:320px;position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;background-color:#fff;border-radius:4px;padding:20px;line-height:1.5;text-align:center;height:105px;display:block;white-space:normal;}
                .campaign .cpopup>div:before {content:"×";position:absolute;right:7px;top:-5px;font-size:26px;}
                .campaign.dt.c1>div>div>a {float:right;}
                .campaign.mb>div {overflow-x:scroll;-webkit-overflow-scrolling:touch;-ms-scroll-chaining:chained;}
                .campaign.mb>div>div {min-width:calc(43% - 3px);}
                .campaign.mb.c1>div>div>a {display:block;padding-top:2px;}
                .campaign.c1>div>div {width:calc(100% - 3px);}
                .campaign.c1>div>div>* {display:inline-block;vertical-align:middle;margin-right:2px;}
                .campaign.c1>div>div>div {position:relative;left:0;top:0;}
                .campaign.c1>div>div>figure.fecredit {height:20px;}
                .campaign.c1>div>div>figure>img {position:relative;left:0;display:inline-block;vertical-align:middle;}
                .campaign.c1>div>div>figure>i {vertical-align:middle;}
                .campaign.c2>div>div {width:calc((100% / 2) - 3px);}
                .campaign.c2 .sliderX::-webkit-scrollbar, .campaign.c1 .sliderX::-webkit-scrollbar {display:none;}
                .campaign.c2 .sliderX {justify-content:center;} 
                .campaign:not(.c1) .sliderX>div>b>span:last-of-type {display:block;}
                .campaign-option>figure>i {width:16px;height:16px;border-radius:50%;padding:3px;border:1px solid #2F80ED;display:inline-block;font-size:16px;cursor:pointer;}
                .campaign-option.active {border:2px solid #2F80ED;}
                .campaign-option.active>figure>i::before {content:"";display:block;height:100%;background-color:#2F80ED;border-radius:50%;}
            </style>
        
        
            <div class="buy-sp normal has-threebtn">
        
                    <a href="javascript:void(0)" onclick="BuyNow($(this))" class="btn-buy full">
                        Mua ngay
                    </a>
                    <a href="/tra-gop/tai-chinh/iphone/iphone-13-pro-max?productCode=0131491002662" class="btn-ins pay-taichinh has-another-pay">
                        Mua trả góp 0%
                        <span>Qua công ty tài chính</span>
                    </a>
                    <a href="/tra-gop/the/iphone/iphone-13-pro-max?productCode=0131491002662" class="btn-ins pay-nganluong has-another-pay">
                        Trả góp 0% qua thẻ
                        <span>Visa, Mastercard, JCB, Amex</span>
                    </a>
            </div>
                <div class="btn-area clearfix"></div>
            <div class="popup-error">
                <div>
                    <a href="javascript:void(0)" class="pe-close">×</a>
                    <div></div>
                    <a href="/cart" class="pe-btn">Kiểm tra giỏ hàng</a>
                    <a href="javascript:void(0)" class="pe-btn btn-confirm">Đồng ý</a>
                </div>
            </div>
        
        
<!-- Lien hệ       -->
            <ul class="policy">
                    <li>
                        <span>
                            <i class="topzone-boxtskt"></i>
                            Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Lightning - Type C
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="topzone-doitra"></i>
                            Hư gì đổi nấy <b>12 tháng</b> tại 3330 siêu thị trên toàn quốc <a href="https://www.topzone.vn/bao-hanh-doi-tra"> Xem chi tiết chính sách bảo hành, đổi trả </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="topzone-baohanhpolicy"></i>
                            Bảo hành chính hãng 1 năm
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="topzone-giaohang"></i>
                            Giao hàng nhanh toàn quốc <a href="/giao-hang">Xem chi tiết</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="topzone-tongdai"></i>
                            Tổng đài: <a href='tel:1900969642'>1900.9696.42</a> (9h00 - 21h00 mỗi ngày)
                        </span>
                    </li>
            </ul>
        
            </aside>
            </div>
        </div>

<!-- footer -->
            <footer>
            <div class="foot">
                <div class="logo-foot">
                    <a href="/">
                        <i class="topzone-logo"></i>
                    </a>
                    <a href="/tekzone/khac-biet-aar-va-apr-tieu-chuan-cua-hang-uy-quyen-apple-1411356">
                        <i class="topzone-autho"></i>
                    </a>
                </div>
                <ul class="list-foot">
                    <li>
                            <span>Tổng đài</span>
                        <a href="tel:1900969642">
                            <span>Mua hàng:</span>
                            <b>1900.9696.42</b> (7:30 - 22:00)
                        </a>
                        <a href="tel:1900986843">
                            <span>CSKH:</span>
                            <b>1900.9868.43</b> (8:00 - 21:30)
                        </a>
                        <a href="tel:1900866854">
                            <span>Kỹ thuật:</span>
                            <b>1900.8668.54</b> (7:30 - 22:00)
                        </a>
                    </li>
                    <li>
                        <span>Hệ thống cửa hàng</span>
                        <a href="/he-thong-cua-hang">
                            Xem 54 cửa hàng 
                        </a>
                        <a href="/noi-quy-cua-hang">
                            Nội quy cửa hàng
                        </a>
                        <a href="/chat-luong-phuc-vu">
                            Chất lượng phục vụ
                        </a>
                        <a href="/bao-hanh-doi-tra">
                            Chính sách bảo hành & đổi trả
                        </a>
                    </li>
                    <li>
                        <span>Hỗ trợ khách hàng</span>
                        <a href="/dieu-kien-giao-dich">
                            Điều kiện giao dịch chung
                        </a>
                        <a href="/huong-dan-mua-hang">
                            Hướng dẫn mua hàng online
                        </a>
                        <a href="/giao-hang">
                            Chính sách giao hàng
                        </a>
                        <a href="/thanh-toan">
                            Hướng dẫn thanh toán
                        </a>
                    </li>
                    <li>
                        <span>Về thương hiệu TopZone</span>
        
                        <a href="/tekzone/chuong-trinh-tich-diem-sieu-khung-qua-ung-dung-qua-tang-vip-1435360" class="color-link">
                            Tích điểm Quà tặng VIP
                        </a>
                        <a href="/gioi-thieu">
                            Giới thiệu TopZone
                        </a>
                        <a href="https://www.thegioididong.com/b2b">
                            Bán hàng doanh nghiệp
                        </a>
                        <a href="/bao-mat-thong-tin">
                            Chính sách bảo mật thông tin
                        </a>
                        <a rel="nofollow" href="https://www.topzone.vn/iphone/iphone-13-pro-max?sclient=mobile">Xem bản mobile</a>
                    </li>
                        <li>
                            <span>Trung tâm bảo hành TopCare</span>
                            <a href="/topcare">
                                Giới thiệu TopCare
                            </a>
                        </li>
                </ul>
                <div class="text-cpr">
                    <p>
                        © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007. <br />
                        Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP. Hồ Chí Minh. Điện thoại: 028 38125960. 
                    </p>
                </div>
                <div class="certify">
                    <a href="http://online.gov.vn/Home/WebDetails/88735" target="_blank"><img class="lazyload" data-src="//cdn.tgdd.vn/mwgcart/topzone/images/certify-bct.png" width="127" /></a>
                    <a href="https://tinnhiemmang.vn/danh-ba-tin-nhiem/topzonevn-1635823490" title="Chung nhan Tin Nhiem Mang" target="_blank"><img class="lazyload" data-src="https://tinnhiemmang.vn/handle_cert?id=topzone.vn" width="150" alt="Chung nhan Tin Nhiem Mang"></a>
                    <a href="//www.dmca.com/Protection/Status.aspx?ID=4f44c8e7-b645-4ddb-8aec-c130d0598c85" target="_blank" title="DMCA.com Protection Status" class="dmca-badge">
                        <img class="lazyload" data-src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=4f44c8e7-b645-4ddb-8aec-c130d0598c85" alt="DMCA.com Protection Status" />
                    </a>
                </div>
            </div>
            <div class="footer__logo">
                <p class="footer__logo-hd">Ghé thăm các website khác cùng tập đoàn MWG</p>
                <ul class="footer__logo-list">
                    <li>
                        <a rel="nofollow" href="https://www.thegioididong.com/" target="_blank">
                            <i class="iconlogo-thegioididong"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://www.dienmayxanh.com/" target="_blank">
                            <i class="iconlogo-dienmayxanh"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://www.bachhoaxanh.com/" target="_blank">
                            <i class="iconlogo-bachhoaxanh"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://www.nhathuocankhang.com/" target="_blank" title="Chuỗi nhà thuốc chuẩn GPP">
                            <i class="iconlogo-ankhang"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://avakids.com/" target="_blank" title="Chuỗi cửa hàng mẹ và bé">
                            <i class="iconlogo-kids"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://www.avasport.com/" target="_blank" title="Chuỗi cửa hàng thể thao">
                            <i class="iconlogo-sport"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://www.dichvutantam.com/" target="_blank" title="Dịch vụ vệ sinh máy lạnh, sửa chữa điện nước, lắp đặt máy lạnh, máy giặt, tivi">
                            <i class="iconlogo-tantam"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://www.4kfarm.com/" target="_blank" title="Nông trại rau sạch">
                            <i class="iconlogo-4kfarm"></i>
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="https://vieclam.thegioididong.com/" target="_blank" title="Trang tuyển dụng của tập đoàn Thế Giới Di Động">
                            <i class="iconlogo-vieclam"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
        
                <script src="//cdn.tgdd.vn/mwgcart/topzone/js/bundle/global.min.v202208180530.js" type="text/javascript"></script>
        
            <script>
                window.dataLayer = window.dataLayer || [];
               
            </script>
        
            
            <script defer="defer" async="async" src="//cdn.tgdd.vn/mwgcart/topzone/js/bundle/detail.min.v202208180530.js"></script>
            <script type="text/javascript">
                document.ProductId = 230529;
                document.ProductCode = '0131491002662';
            </script>
        
        
        
            <!-- Google Tag Manager -->
            <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-TN8PXHG');</script>
        
            <!-- End Google Tag Manager -->
            <!-- Usersnap -->
            <script>
            window.onUsersnapCXLoad = function (api) {
                api.init();
            }
            var script = document.createElement('script');
            script.defer = 1;
            script.src = 'https://widget.usersnap.com/global/load/5db733c0-bdad-43c4-a7d9-4b8f914c9cde?onload=onUsersnapCXLoad';
            document.getElementsByTagName('head')[0].appendChild(script);
        </script>
            <!-- Usersnap -->
            <!-- Chat Widget -->
            <div class="popup-boxchat">
            <i class="boxchat-balloons"></i>
            <div class="chat-window">
                <div class="sp-onl">
                    <h4>Hỗ trợ trực tuyến</h4>
                    <i class="boxchat-closewindow"></i>
                </div>
                <ul>
                    <li>
                        <a href="tel:1900969642">
                            <i class="boxchat-call"></i>
                            <strong>
                                1900 969 642
                                <span>(7h30 - 22h00)</span>
                            </strong>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="boxchat-zalo"></i>
                            <strong>
                                Chat Zalo
                                <span>(7h30 - 22h00)</span>
                            </strong>
                        </a>
                        <div class="stage"><div class="dot-stretching"></div></div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="chat-widget-container"></div>
        
            <!-- End Chat Widget -->
</body>
</html>