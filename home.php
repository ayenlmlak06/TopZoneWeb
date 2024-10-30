<?php
require_once('database/request.php');
$resultip = get_products_ip();

require_once('database/request.php');
$resultmac = get_products_mac();

require_once('database/request.php');
$resultipad = get_products_ipad();

require_once('database/request.php');
$resultwatch = get_products_watch();

require_once('database/request.php');
$resultat = get_products_airpod();

require_once('database/request.php');
$resultpk = get_products_accessory();
?>
<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=0">
        
        
        <title>TopZone - Cửa hàng Apple chính hãng</title>
        <meta name="keywords" content="Iphone, Ipad, Imac, Topzone">
        <meta name="description" content="TopZone - Cửa hàng bán hàng chính hãng 100% của Apple">
        <meta property="og:description" content="TopZone - Cửa hàng bán hàng chính hãng 100% của Apple">
        <meta property="og:title" content="TopZone - Cửa hàng Apple chính hãng">
        <link rel="canonical" href="https://www.topzone.vn/">
        <meta property="og:image" content="https://staging.topzone.vn/images/share_thumb_home/thumb-home-default.png">
    
    
        <meta content="INDEX,FOLLOW" name="robots">
        <meta name="viewport" content="width=device-width">
        <meta name="copyright" content="Công ty Cổ phần Thế Giới Di Động">
        <meta name="author" content="Công ty Cổ phần Thế Giới Di Động">
        <meta http-equiv="audience" content="General">
        <meta name="resource-type" content="Document">
        <meta name="distribution" content="Global">
        <meta name="revisit-after" content="1 days">
        <meta name="GENERATOR" content="Công ty Cổ phần Thế Giới Di Động">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2.css/bootstrap.min.css">
        <script src="https://ajax.googleapsis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <meta property="og:site_name" content="Thegioididong.com">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="vi_VN">
        <meta property="fb:pages" content="214993791879039">
        <meta http-equiv="x-dns-prefetch-control" content="on">
        <link rel="stylesheet" href="style/home.css">
    <script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/config.js?sdkid=CANVQV3C77UCMC06S1V0&amp;hostname=www.topzone.vn"></script>
    <script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/events.js?sdkid=CANVQV3C77UCMC06S1V0&amp;lib=ttq"></script>
    <script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
    <script type="text/javascript" async="" src="https://www.googleadservices.com/pagead/conversion_async.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-4B4TNCT3SZ&amp;l=dataLayer&amp;cx=c"></script>
    <script defer="" src="https://widget.usersnap.com/global/load/5db733c0-bdad-43c4-a7d9-4b8f914c9cde?onload=onUsersnapCXLoad"></script>
    <meta http-equiv="origin-trial" content="A7bG5hJ4XpMV5a3V1wwAR0PalkFSxLOZeL9D/YBYdupYUIgUgGhfVJ1zBFOqGybb7gRhswfJ+AmO7S2rNK2IOwkAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjY5NzY2Mzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <script charset="utf-8" src="https://analytics.tiktok.com/i18n/pixel/identify.js"></script>
    
    </head>
    <body class="" style="overflow: unset;">
        <header>
        <div class="head">
            <div class="logo-topzone">
                <a href="/">
                    <i class="topzone-logo"></i>
                </a>
                <a href="/tekzone/khac-biet-aar-va-apr-tieu-chuan-cua-hang-uy-quyen-apple-1411356">
                    <i class="topzone-autho"></i>
                </a>
            </div>
            <ul class="menu">
                <li class="menu-ip">
                    <a href="indexTabIphone.php">
                        <span>iPhone</span>
                    </a>
                </li>
                <li class="menu-mac">
                    <a href="indexTabMac.php">
                        <span>Mac</span>
                    </a>
                </li>
                <li class="menu-ipad">
                    <a href="indexiPadTab.php">
                        <span>iPad</span>
                    </a>
                </li>
                <li class="menu-watch">
                    <a href="indexWatchTab.php">
                        <span>Watch</span>
                    </a>
                </li>
                <li class="menu-sound">
                    <a href="indexAmthanhTab.php">
                        <span>Âm thanh</span>
                    </a>
                </li>
                <li class="menu-access">
                    <a href="indexPhukienTab.php">
                        <span>Phụ kiện</span>
                    </a>
                </li>
                    <li class="menu-news">
                        <a href="tekzoneTab.php">
                            <span>TekZone</span>
                        </a>
                    </li>
                    <li class="menu-access">
                        <a href="topcareTab.php">
                            <span>TopCare</span>
                        </a>
                    </li>
            </ul>
            <div class="search-cart">
                <div class="search-sp">
                    <i class="topzone-search"></i>
                </div>
                <a href="cart.php" class="cart">
                    <i class="topzone-cart"></i>
                </a>
                <div class="view-cart">
                    <i class="topzone-cohang"></i>
                    <span>Đã thêm sản phẩm vào giỏ hàng</span>
                    <a href="">Xem giỏ hàng</a>
                </div>
            </div>
            <form class="form-search" onsubmit="return false" style="display: none;">
                <div class="click-search">
                    <i class="topzone-search"></i>
                    <input type="text" id="live_search"  autocomplete="off" placeholder="Tìm kiếm sản phẩm">
                    <i class="topzone-delSearch"></i>
                </div>
                <button type="submit" class="submit-search" value="search" style="display:none"></button>
                <div class="sg-search" style="display: none;"></div>
            }
        }
            </form>
        </div>
    </header>
    <div class="bg-sg" style="display: none;"></div>
    
    
        
    
    
        <section>
                <div class="slide-home owl-carousel owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-7238px, 0px, 0px); transition: all 0.25s ease 0s; width: 8272px;"><div class="owl-item" style="width: 1024px; margin-right: 10px;"><a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/khuyen-mai-hot" onclick="jQuery.ajax({ url: '/bannertracking?bid=58587&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="1920" height="400" src="//cdn.tgdd.vn/2022/08/banner/gif-1920x533.gif" alt="Game - 25/8"></a></div><div class="owl-item" style="width: 1024px; margin-right: 10px;"><a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/tekzone/cuoi-thang-8-topzone-khai-truong-them-loat-cua-hang-cung-ngan-uu-dai-1458394" onclick="jQuery.ajax({ url: '/bannertracking?bid=58176&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="1920" height="400" loading="lazy" class="owl-lazy lazyloaded" data-src="//cdn.tgdd.vn/2022/08/banner/khaitruong-new-2880-800-1920x533-2.png" alt="Chung 1/8" src="//cdn.tgdd.vn/2022/08/banner/khaitruong-new-2880-800-1920x533-2.png" style="opacity: 1;"></a></div><div class="owl-item" style="width: 1024px; margin-right: 10px;"><a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/tekzone/hotsale-cuoi-tuan-dong-loat-san-pham-apple-giam-soc-1459177" onclick="jQuery.ajax({ url: '/bannertracking?bid=58590&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="1920" height="400" loading="lazy" class="owl-lazy lazyloaded" data-src="//cdn.tgdd.vn/2022/08/banner/2880-800-1920x533-7.png" alt="Sale cuối tuần" src="//cdn.tgdd.vn/2022/08/banner/2880-800-1920x533-7.png" style="opacity: 1;"></a></div><div class="owl-item" style="width: 1024px; margin-right: 10px;"><a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/mac" onclick="jQuery.ajax({ url: '/bannertracking?bid=54926&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="1920" height="400" loading="lazy" class="owl-lazy lazyloaded" data-src="//cdn.tgdd.vn/2022/08/banner/mac-2880-800-1920x533.png" alt="Mac - 1/8" src="//cdn.tgdd.vn/2022/08/banner/mac-2880-800-1920x533.png" style="opacity: 1;"></a></div><div class="owl-item" style="width: 1024px; margin-right: 10px;"><a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/ipad" onclick="jQuery.ajax({ url: '/bannertracking?bid=55362&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="1920" height="400" loading="lazy" class="owl-lazy lazyloaded" data-src="//cdn.tgdd.vn/2022/07/banner/2880-800-1920x533-3.png" alt="iPad - 1/8" src="//cdn.tgdd.vn/2022/07/banner/2880-800-1920x533-3.png" style="opacity: 1;"></a></div><div class="owl-item" style="width: 1024px; margin-right: 10px;"><a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/apple-watch-series-7" onclick="jQuery.ajax({ url: '/bannertracking?bid=58089&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="1920" height="400" loading="lazy" class="owl-lazy lazyloaded" data-src="//cdn.tgdd.vn/2022/08/banner/2880-800-1920x533-1.png" alt="AW S7 - 16/8" src="//cdn.tgdd.vn/2022/08/banner/2880-800-1920x533-1.png" style="opacity: 1;"></a></div><div class="owl-item" style="width: 1024px; margin-right: 10px;"><a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/airpods" onclick="jQuery.ajax({ url: '/bannertracking?bid=55368&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="1920" height="400" loading="lazy" class="owl-lazy ls-is-cached lazyloaded" data-src="//cdn.tgdd.vn/2022/05/banner/2880-800-1920x533-2.png" alt="AirPods 1/8" src="//cdn.tgdd.vn/2022/05/banner/2880-800-1920x533-2.png" style="opacity: 1;"></a></div><div class="owl-item active" style="width: 1024px; margin-right: 10px;"><a aria-label="slide" data-cate="0" data-place="1733" href="https://www.topzone.vn/op-lung-iphone-op-lung-magsafe" onclick="jQuery.ajax({ url: '/bannertracking?bid=55372&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="1920" height="400" loading="lazy" class="owl-lazy ls-is-cached lazyloaded" data-src="//cdn.tgdd.vn/2022/07/banner/oplung-2880-800-1920x533-1.png" alt="ốp lưng 1/8" src="//cdn.tgdd.vn/2022/07/banner/oplung-2880-800-1920x533-1.png" style="opacity: 1;"></a></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
    
    
            <div class="policy">
        <ul class="pr-policy">
            <li>
                <i class="topzone-homeDiver"></i>
                <span>Mẫu mã đa dạng, <br>chính hãng</span>
            </li>
            <li>
                <i class="topzone-homeDeli"></i>
                <span>Giao hàng toàn quốc</span>
            </li>
            <li>
                <i class="topzone-homeInsur"></i>
                <span>Bảo hành có cam kết <br>tới 12 tháng</span>
            </li>
            <li>
                <i class="topzone-homeReturn"></i>
                <span>Có thể đổi trả tại <br>Thegioididong và DienmayXANH</span>
            </li>
        </ul>
    </div>
    
            <div class="warpper-box-product">
                <div class="box-cate-product">
                    
        <ul class="choose-cate">
            <li>
                <a href="indexTabIphone.php">
                    <div class="img-catesp cateiphone">
                        <img src="//cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-cateiphone.png" alt="" width="93" height="111">
                    </div>
                    <span>iPhone</span>
                </a>
            </li>
            <li>
                <a href="indexTabMac.php">
                    <div class="img-catesp catemac">
                        <img src="//cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-catemac.png" alt="" width="166" height="75">
                    </div>
                    <span>Mac</span>
                </a>
            </li>
            <li>
                <a href="indexiPadTab.php">
                    <div class="img-catesp cateipad">
                        <img src="//cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-cateipad.png?v=3" alt="" width="116" height="102">
                    </div>
                    <span>iPad</span>
                </a>
            </li>
            <li>
                <a href="indexWatchTab.php">
                    <div class="img-catesp catewatch">
                        <img src="//cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-catewatch.png?v=2" alt="" width="132" height="84">
                    </div>
                    <span>Watch</span>
                </a>
            </li>
            <li>
                <a href="indexAmthanhTab.php">
                    <div class="img-catesp cateisound">
                        <img src="//cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-catesound.png" alt="" width="169" height="124">
                    </div>
                    <span>Âm thanh</span>
                </a>
            </li>
            <li>
                <a href="indexPhukienTab.php">
                    <div class="img-catesp catephukien">
                        <img src="//cdn.tgdd.vn/mwgcart/topzone/images/desktop/img-catephukien.png" alt="" width="96" height="96">
                    </div>
                    <span>Phụ kiện</span>
                </a>
            </li>
        </ul>
            
<!-- san pham iphone           -->
                <div class="box-slide">
                <a href="indexTabIphone.php" class="logo-cate">
                        <i class="topzone-cateiphone"></i>
                </a>
                <div class="slide-cate owl-carousel owl-theme" data-block="iPhone">

<!-- san pham -->
                <?php 
                        $n= count($resultip) ;
                        for ($i = 0; $i < $n; $i++) { 
                ?>
                        <div class="item" data-pos="<?php echo$i+1?>" data-block="iPhone">
                                <a href="detailProduct.php?name=<?=$resultip [$i]['name']?>" data-s="Nomal" data-site="16" data-pro="3" data-cache="True" data-name="iPhone 13 Pro Max" data-id="230529" data-price="28190000.0" data-brand="iPhone (Apple)" data-cate="iPhone" data-box="BoxHome">
                <label class=no-label></label>
                <div class="img-slide">
                        <img data-src="<?php echo $resultip [$i]['image']; ?>" class="lazyload" alt="iPhone 13 Pro Max 128GB" width=204>
                </div>
                <h3><?php echo $resultip [$i]['name']; ?></h3>
                        <span class="box-price">
                            <?php echo $resultip [$i]['price']; ?>&#x20AB;
                        </span>
            </a>

                        </div>
                <?php
                    }
                ?>  
                       
                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
        </div>

<!-- san pham mac           -->
<div class="box-slide">
                <a href="indexTabMac.php" class="logo-cate">
                        <i class="topzone-catemac"></i>
                </a>
                <div class="slide-cate owl-carousel owl-theme" data-block="Mac">

<!-- san pham -->
                <?php 
                        $n= count($resultmac) ;
                        for ($i = 0; $i < $n; $i++) { 
                ?>
                        <div class="item" data-pos="<?php echo$i+1?>" data-block="Mac">
                                <a href="detailProduct.php?name=<?=$resultmac [$i]['name']?>" data-s="Nomal" data-site="16" data-pro="3" data-cache="True" data-name="iPhone 13 Pro Max" data-id="230529" data-price="28190000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                <label class=no-label></label>
                <div class="img-slide">
                        <img data-src="<?php echo $resultmac [$i]['image']; ?>" class="lazyload" alt="iPhone 13 Pro Max 128GB" width=204>
                </div>
                <h3><?php echo $resultmac [$i]['name']; ?></h3>
                        <span class="box-price">
                            <?php echo $resultmac [$i]['price']; ?>&#x20AB;
                        </span>
            </a>

                        </div>
                <?php
                    }
                ?>  

            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    </div>

<!-- san pham ipad           -->
<div class="box-slide">
                <a href="indexTabMac.php" class="logo-cate">
                        <i class="topzone-cateipad"></i>
                </a>
                <div class="slide-cate owl-carousel owl-theme" data-block="Ipad">

<!-- san pham -->
                <?php 
                        $n= count($resultipad) ;
                        for ($i = 0; $i < $n; $i++) { 
                ?>
                        <div class="item" data-pos="<?php echo$i+1?>" data-block="Ipad">
                                <a href="detailProduct.php?name=<?=$resultipad [$i]['name']?>" data-s="Nomal" data-site="16" data-pro="3" data-cache="True" data-name="iPhone 13 Pro Max" data-id="230529" data-price="28190000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                <label class=no-label></label>
                <div class="img-slide">
                        <img data-src="<?php echo $resultipad [$i]['image']; ?>" class="lazyload" alt="iPhone 13 Pro Max 128GB" width=204>
                </div>
                <h3><?php echo $resultipad [$i]['name']; ?></h3>
                        <span class="box-price">
                            <?php echo $resultipad [$i]['price']; ?>&#x20AB;
                        </span>
            </a>

                        </div>
                <?php
                    }
                ?>  

            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    </div>

<!-- san pham watch           -->
<div class="box-slide">
                <a href="indexWatchTab.php" class="logo-cate">
                        <i class="topzone-catewatch"></i>
                </a>
                <div class="slide-cate owl-carousel owl-theme" data-block="Apple Watch">

<!-- san pham -->
                <?php 
                        $n= count($resultwatch) ;
                        for ($i = 0; $i < $n; $i++) { 
                ?>
                        <div class="item" data-pos="<?php echo$i+1?>" data-block="Apple Watch">
                                <a href="detailProduct.php?name=<?=$resultwatch [$i]['name']?>" data-s="Nomal" data-site="16" data-pro="3" data-cache="True" data-name="iPhone 13 Pro Max" data-id="230529" data-price="28190000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                <label class=no-label></label>
                <div class="img-slide">
                        <img data-src="<?php echo $resultwatch [$i]['image']; ?>" class="lazyload" alt="iPhone 13 Pro Max 128GB" width=204>
                </div>
                <h3><?php echo $resultwatch [$i]['name']; ?></h3>
                        <span class="box-price">
                            <?php echo $resultwatch [$i]['price']; ?>&#x20AB;
                        </span>
            </a>

                        </div>
                <?php
                    }
                ?>  

            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    </div>
 
<!-- san pham am thanh          -->
                <div class="box-slide">
                <a href="indexAmthanhTab.php" class="logo-cate">
                <span class="title-text-amthanh">Âm thanh</span>
                </a>
                <div class="slide-cate owl-carousel owl-theme" data-block="Âm thanh">

<!-- san pham -->
                <?php 
                        $n= count($resultat) ;
                        for ($i = 0; $i < $n; $i++) { 
                ?>
                        <div class="item" data-pos="<?php echo$i+1?>" data-block="Âm thanh">
                                <a href="detailProduct.php?name=<?=$resultat [$i]['name']?>" data-s="Nomal" data-site="16" data-pro="3" data-cache="True" data-name="iPhone 13 Pro Max" data-id="230529" data-price="28190000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                <label class=no-label></label>
                <div class="img-slide">
                        <img data-src="<?php echo $resultat [$i]['image']; ?>" class="lazyload" alt="iPhone 13 Pro Max 128GB" width=204>
                </div>
                <h3><?php echo $resultat [$i]['name']; ?></h3>
                        <span class="box-price">
                            <?php echo $resultat [$i]['price']; ?>&#x20AB;
                        </span>
            </a>

                        </div>
                <?php
                    }
                ?>  

            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    </div>

<!-- san pham phu kien           -->
                <div class="box-slide">
                <a href="indexPhukienTab.php" class="logo-cate">
                <span class="title-text-amthanh">Phụ Kiện</span>
                </a>
                <div class="slide-cate owl-carousel owl-theme" data-block="Phụ Kiện">

<!-- san pham -->
                <?php 
                        $n= count($resultpk) ;
                        for ($i = 0; $i < $n; $i++) { 
                ?>
                        <div class="item" data-pos="<?php echo$i+1?>" data-block="Phụ Kiện">
                                <a href="detailProduct.php?name=<?=$resultpk [$i]['name']?>" data-s="Nomal" data-site="16" data-pro="3" data-cache="True" data-name="iPhone 13 Pro Max" data-id="230529" data-price="28190000.0" data-brand="MacBook" data-cate="MacBook" data-box="BoxHome">
                <label class=no-label></label>
                <div class="img-slide">
                        <img data-src="<?php echo $resultpk [$i]['image']; ?>" class="lazyload" alt="iPhone 13 Pro Max 128GB" width=204>
                </div>
                <h3><?php echo $resultpk [$i]['name']; ?></h3>
                        <span class="box-price">
                            <?php echo $resultpk [$i]['price']; ?>&#x20AB;
                        </span>
            </a>

                        </div>
                <?php
                    }
                ?>  

            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                    </div>

    
    
    
        </section>
        <div class="slide-popup">
            <div class="bg-popup"></div>
                <div class="slide-store-pu owl-carousel owl-theme">
    <a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48135&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" src="//cdn.tgdd.vn/2021/11/banner/Store4-1920x1080.jpg" alt="Bộ ảnh TZ"></a><a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48136&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2021/11/banner/Store1-1920x1080.jpg" alt="Bộ ảnh TZ"></a><a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48137&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2021/11/banner/Store2-1920x1080.jpg" alt="Bộ ảnh TZ"></a><a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48138&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2021/11/banner/Store3-1920x1080.jpg" alt="Bộ ảnh TZ"></a><a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48139&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2021/11/banner/Store5-1920x1080.jpg" alt="Bộ ảnh TZ"></a><a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48140&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2021/11/banner/Store6-1920x1080.jpg" alt="Bộ ảnh TZ"></a><a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48142&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2021/11/banner/Store7-1920x1080-1.jpg" alt="Bộ ảnh TZ"></a><a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48141&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2021/11/banner/Store7-1920x1080.jpg" alt="Bộ ảnh TZ"></a><a aria-label="slide" data-cate="0" data-place="1741" data-href="none" onclick="jQuery.ajax({ url: '/bannertracking?bid=48143&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img width="580" height="350" loading="lazy" class="lazyload owl-lazy" data-src="//cdn.tgdd.vn/2021/11/banner/Store8-1920x1080.jpg" alt="Bộ ảnh TZ"></a>    </div>
    
        </div>
    
        <!--#region WebSite-->
        <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-TN8PXHG"></script><script type="application/ld+json">
            {"@type":"WebSite","url":"https://www.topzone.vn/","@id":"https://www.topzone.vn/#website","inLanguage":"vi","name":"TopZone","alternateName":"Siêu thị TopZone - Hệ thống cửa hàng Apple chính hãng 100%","description":"TopZone là hệ thống cửa hàng của Thế Giới Di Động chuyên bán các sản phẩm Apple chính hãng như iPhone, iPad, iMac, Macbook, các phụ kiện Apple. Ngoài ra TopZone còn có nhiều chương trình ưu đãi, bảo hành uy tín và phục vụ khách hàng tận tâm.","mainEntityOfPage":"https://www.topzone.vn/","potentialAction":{"@type":"SearchAction","target":{"@type":"Entrypoint","urlTemplate":"https://www.topzone.vn/tim-kiem?key={search_term_string}"},"@query-input":"required name=search_term_string"},"@context":"https://schema.org"}
        </script>
        <!--#endregion-->
        <!--#region Organization-->
        <script type="application/ld+json">
            {"@type":"Organization","image":["https://cdn.tgdd.vn/mwgcart/topzone/images/logo-video.png?v=4"],"founder":{"@type":"Person","name":"Đoàn Văn Hiểu Em","url":"https://mwg.vn/hoi-dong-quan-tri-va-ban-lanh-dao/doan-van-hieu-em-14"},"additionalType":["https://en.wikipedia.org/wiki/Apple_Store","https://en.wikipedia.org/wiki/IPhone","https://en.wikipedia.org/wiki/IPad","https://en.wikipedia.org/wiki/IMac","https://en.wikipedia.org/wiki/MacBook","https://en.wikipedia.org/wiki/Apple_TV","https://en.wikipedia.org/wiki/HomePod","https://en.wikipedia.org/wiki/Apple_Pencil"],"sameAs":["https://www.facebook.com/topzone.vn","https://www.linkedin.com/company/topzonevn","https://www.youtube.com/channel/UCoWdPNr8jSr7JM0OFlKvQHw","https://www.pinterest.com/topzonevn","https://twitter.com/TopZonevn"],"url":"https://www.topzone.vn/","@id":"https://www.topzone.vn/#organization","potentialAction":{"@type":"BuyAction","seller":{"@type":"Organization","name":"TopZone"},"target":[{"@type":"EntryPoint","inLanguage":"vn","actionPlatform":["http://schema.org/DesktopWebPlatform","http://schema.org/IOSPlatform","http://schema.org/AndroidPlatform"],"urlTemplate":"https://www.topzone.vn/cart/"}]},"name":"TopZone","alternatename":"Siêu thị TopZone - Hệ thống cửa hàng Apple chính hãng 100%","description":"TopZone là hệ thống cửa hàng của Thế Giới Di Động chuyên bán các sản phẩm Apple chính hãng như iPhone, iPad, iMac, Macbook, các phụ kiện Apple. Ngoài ra TopZone còn có nhiều chương trình ưu đãi, bảo hành uy tín và phục vụ khách hàng tận tâm.","disambiguatingdescription":"TopZone là hệ thống siêu thị chuẩn Apple mới nhất trên thế giới. Chuỗi siêu thị này chuyên cung cấp iPhone, iPad, iMac, Macbook và phụ kiện Apple với mức giá ưu đãi và bảo hành chính hãng 100%","logo":"https://cdn.tgdd.vn/mwgcart/topzone/images/logo-video.png?v=4","mainEntityOfPage":["https://www.topzone.vn/"],"email":["cskh@topzone.vn"],"contactPoint":[{"@type":"ContactPoint","telephone":"1900.9696.42","contactType":"sales","areaServed":"VN"},{"@type":"ContactPoint","telephone":"1900.8668.54","contactType":"technical support","areaServed":"VN"},{"@type":"ContactPoint","telephone":"1900.9868.43","contactType":"customer support","areaServed":"VN"}],"telephone":"1900.9696.42","address":{"@type":"PostalAddress","addressCountry":"Việt Nam","addressLocality":"Quận 1","addressRegion":"Hồ Chí Minh","streetAddress":"128 Trần Quang Khải","postalCode":"700000"},"foundingLocation":{"@type":"Place","name":"Hồ Chí Minh","url":" https://en.wikipedia.org/wiki/Ho_Chi_Minh_City","address":"Việt Nam"},"legalName":"Công ty Cổ Phần Thế Giới Di Động","foundingDate":"2021","hasOfferCatalog":[{"@type":"OfferCatalog","name":"iPhone","url":"https://www.topzone.vn/mac","itemListElement":[{"@type":"Offer","name":"MacBook Pro","itemOffered":"Product Group","url":"https://www.topzone.vn/macbook-pro","@id":"https://www.topzone.vn/macbook-pro#productgroup"},{"@type":"Offer","name":"MacBook Air","itemOffered":"Product Group","url":"https://www.topzone.vn/macbook-air","@id":"https://www.topzone.vn/macbook-air#productgroup"}]},{"@type":"OfferCatalog","name":"iPhone","url":"https://www.topzone.vn/am-thanh","itemListElement":[{"@type":"Offer","name":"AirPods","itemOffered":"Product Group","url":"https://www.topzone.vn/airpods","@id":"https://www.topzone.vn/airpods#productgroup"},{"@type":"Offer","name":"EarPods","itemOffered":"Product Group","url":"https://www.topzone.vn/earpods","@id":"https://www.topzone.vn/earpods#productgroup"},{"@type":"Offer","name":"Beats","itemOffered":"Product Group","url":"https://www.topzone.vn/beats","@id":"https://www.topzone.vn/beats#productgroup"}]},{"@type":"OfferCatalog","name":"iPhone","url":"https://www.topzone.vn/phu-kien","itemListElement":[{"@type":"Offer","name":"Phụ kiện iPhone","itemOffered":"Product Group","url":"https://www.topzone.vn/phu-kien-iphone","@id":"https://www.topzone.vn/phu-kien-iphone#productgroup"},{"@type":"Offer","name":"Phụ kiện Mac","itemOffered":"Product Group","url":"https://www.topzone.vn/phu-kien-mac","@id":"https://www.topzone.vn/phu-kien-mac#productgroup"},{"@type":"Offer","name":"Phụ kiện iPad","itemOffered":"Product Group","url":"https://www.topzone.vn/phu-kien-ipad","@id":"https://www.topzone.vn/phu-kien-ipad#productgroup"},{"@type":"Offer","name":"Phụ kiện Apple Watch","itemOffered":"Product Group","url":"https://www.topzone.vn/phu-kien-apple-watch","@id":"https://www.topzone.vn/phu-kien-apple-watch#productgroup"},{"@type":"Offer","name":"Sạc dự phòng","itemOffered":"Product Group","url":"https://www.topzone.vn/sac-du-phong","@id":"https://www.topzone.vn/sac-du-phong#productgroup"},{"@type":"Offer","name":"Adapter sạc, chuyển đổi","itemOffered":"Product Group","url":"https://www.topzone.vn/adapter-sac","@id":"https://www.topzone.vn/adapter-sac#productgroup"},{"@type":"Offer","name":"Cáp sạc, chuyển đổi","itemOffered":"Product Group","url":"https://www.topzone.vn/cap-sac","@id":"https://www.topzone.vn/cap-sac#productgroup"},{"@type":"Offer","name":"Ốp lưng, ví da iPhone","itemOffered":"Product Group","url":"https://www.topzone.vn/op-lung-iphone","@id":"https://www.topzone.vn/op-lung-iphone#productgroup"},{"@type":"Offer","name":"Ốp lưng iPad","itemOffered":"Product Group","url":"https://www.topzone.vn/op-lung-ipad","@id":"https://www.topzone.vn/op-lung-ipad#productgroup"},{"@type":"Offer","name":"Chuột máy tính","itemOffered":"Product Group","url":"https://www.topzone.vn/chuot-may-tinh","@id":"https://www.topzone.vn/chuot-may-tinh#productgroup"},{"@type":"Offer","name":"Phím & Bút","itemOffered":"Product Group","url":"https://www.topzone.vn/phim-but","@id":"https://www.topzone.vn/phim-but#productgroup"},{"@type":"Offer","name":"Airtag","itemOffered":"Product Group","url":"https://www.topzone.vn/airtag","@id":"https://www.topzone.vn/airtag#productgroup"},{"@type":"Offer","name":"Apple TV","itemOffered":"Product Group","url":"https://www.topzone.vn/tv-box","@id":"https://www.topzone.vn/tv-box#productgroup"},{"@type":"Offer","name":"Dán màn hình","itemOffered":"Product Group","url":"https://www.topzone.vn/mieng-dan-man-hinh","@id":"https://www.topzone.vn/mieng-dan-man-hinh#productgroup"},{"@type":"Offer","name":"Túi đựng AirPods","itemOffered":"Product Group","url":"https://www.topzone.vn/tui-dung-airpods","@id":"https://www.topzone.vn/tui-dung-airpods#productgroup"},{"@type":"Offer","name":"Balo, túi chống sốc","itemOffered":"Product Group","url":"https://www.topzone.vn/tui-chong-soc","@id":"https://www.topzone.vn/tui-chong-soc#productgroup"},{"@type":"Offer","name":"Dây Apple Watch","itemOffered":"Product Group","url":"https://www.topzone.vn/day-apple-watch","@id":"https://www.topzone.vn/day-apple-watch#productgroup"}]}],"areaServed":{"@type":"Country","name":"Việt Nam","url":"https://www.wikidata.org/wiki/Q881"},"availableLanguage":{"@type":"Language","name":"VN","alternateName":"vi"},"@context":"https://schema.org"}
        </script>
        <!--#endregion-->
    
    
        <footer>
        <div class="foot">
            <div class="logo-foot">
                <a href="/">
                    <i class="topzone-logo"></i>
                </a>
                <a >
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
                        Xem 55 cửa hàng 
                    </a>
                    <a href="/noi-quy-cua-hang">
                        Nội quy cửa hàng
                    </a>
                    <a href="/chat-luong-phuc-vu">
                        Chất lượng phục vụ
                    </a>
                    <a href="/bao-hanh-doi-tra">
                        Chính sách bảo hành &amp; đổi trả
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
                    <a href="b2b">
                        Bán hàng doanh nghiệp
                    </a>
                    <a href="/bao-mat-thong-tin">
                        Chính sách bảo mật thông tin
                    </a>
                    <a rel="nofollow" href="">Xem bản mobile</a>
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
                    © 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH &amp; ĐT TP.HCM cấp ngày 02/01/2007. <br>
                    Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP. Hồ Chí Minh. Điện thoại: 028 38125960. 
                </p>
            </div>
            <div class="certify">
                <a href="http://online.gov.vn/Home/WebDetails/88735" target="_blank"><img class="lazyload" data-src="//cdn.tgdd.vn/mwgcart/topzone/images/certify-bct.png" width="127"></a>
                <a href="https://tinnhiemmang.vn/danh-ba-tin-nhiem/topzonevn-1635823490" title="Chung nhan Tin Nhiem Mang" target="_blank"><img class="lazyload" data-src="https://tinnhiemmang.vn/handle_cert?id=topzone.vn" width="150" alt="Chung nhan Tin Nhiem Mang"></a>
                <a href="//www.dmca.com/Protection/Status.aspx?ID=4f44c8e7-b645-4ddb-8aec-c130d0598c85&amp;refurl=https://www.topzone.vn/" target="_blank" title="DMCA.com Protection Status" class="dmca-badge">
                    <img class="lazyload" data-src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=4f44c8e7-b645-4ddb-8aec-c130d0598c85" alt="DMCA.com Protection Status">
                </a>
            </div>
        </div>
        <div class="footer__logo">
            <p class="footer__logo-hd">Ghé thăm các website khác cùng tập đoàn MWG</p>
            <ul class="footer__logo-list">
                <li>
                    <a rel="nofollow" href="" target="_blank">
                        <i class="iconlogo-thegioididong"></i>
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="" target="_blank">
                        <i class="iconlogo-dienmayxanh"></i>
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="" target="_blank">
                        <i class="iconlogo-bachhoaxanh"></i>
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="" target="_blank" title="Chuỗi nhà thuốc chuẩn GPP">
                        <i class="iconlogo-ankhang"></i>
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="" target="_blank" title="Chuỗi cửa hàng mẹ và bé">
                        <i class="iconlogo-kids"></i>
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="" target="_blank" title="Chuỗi cửa hàng thể thao">
                        <i class="iconlogo-sport"></i>
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="" target="_blank" title="Dịch vụ vệ sinh máy lạnh, sửa chữa điện nước, lắp đặt máy lạnh, máy giặt, tivi">
                        <i class="iconlogo-tantam"></i>
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="" target="_blank" title="Nông trại rau sạch">
                        <i class="iconlogo-4kfarm"></i>
                    </a>
                </li>
                <li>
                    <a rel="nofollow" href="" target="_blank" title="Trang tuyển dụng của tập đoàn Thế Giới Di Động">
                        <i class="iconlogo-vieclam"></i>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    
            <script src="//cdn.tgdd.vn/mwgcart/topzone/js/bundle/global.min.v202208180530.js" type="text/javascript"></script>
    
        <script>
            window.dataLayer = window.dataLayer || [];
           
        dataLayer.push({ 'pageType':'Home'})
    
        </script>
    
        
            <script src="//cdn.tgdd.vn/mwgcart/topzone/js/bundle/home.min.v202207280400.js" type="text/javascript"></script>
    
    
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
        
    </div>
    <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","2667920140184277");fbq("track","PageView");</script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2667920140184277&amp;ev=PageView&amp;noscript=1"></noscript>
    
    <script type="text/javascript" id="">focus();var iframeSelector="iframe",gaEventName="zalo_icon_click",iframeListener=window.addEventListener("blur",function(){document.activeElement===document.querySelector(iframeSelector)&&dataLayer.push({event:"zaloClick",event_name:gaEventName});window.removeEventListener("blur",iframeListener)});</script><script type="text/javascript" id="">!function(d,g,e){d.TiktokAnalyticsObject=e;var a=d[e]=d[e]||[];a.methods="page track identify instances debug on off once ready alias group enableCookie disableCookie".split(" ");a.setAndDefer=function(b,c){b[c]=function(){b.push([c].concat(Array.prototype.slice.call(arguments,0)))}};for(d=0;d<a.methods.length;d++)a.setAndDefer(a,a.methods[d]);a.instance=function(b){b=a._i[b]||[];for(var c=0;c<a.methods.length;c++)a.setAndDefer(b,a.methods[c]);return b};a.load=function(b,c){var f="https://analytics.tiktok.com/i18n/pixel/events.js";
    a._i=a._i||{};a._i[b]=[];a._i[b]._u=f;a._t=a._t||{};a._t[b]=+new Date;a._o=a._o||{};a._o[b]=c||{};c=document.createElement("script");c.type="text/javascript";c.async=!0;c.src=f+"?sdkid\x3d"+b+"\x26lib\x3d"+e;b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(c,b)};a.load("CANVQV3C77UCMC06S1V0");a.page()}(window,document,"ttq");</script>
    
    </body>
    <iframe id="__JSBridgeIframe_1.0__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe_SetResult_1.0__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe__" style="display: none;"></iframe>
    <iframe id="__JSBridgeIframe_SetResult__" style="display: none;"></iframe>

</html>