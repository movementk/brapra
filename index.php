<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
<link href="/design/brapra/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="main">
        <div id="visual">
            <ul>
                <li style="background-image: url(/design/brapra/images/main/img_visual_1.jpg);"><a href="#"></a></li>
                <li style="background-image: url(/design/brapra/images/main/img_visual_2.jpg);"><a href="#"></a></li>
                <li style="background-image: url(/design/brapra/images/main/img_visual_3.jpg);"><a href="#"></a></li>
            </ul>
        </div>
        <div class="container">
            <div id="cate-best">
                <div class="row">
                    <div class="col-xs-4">
                        <section>
                            <h3>원더브라 <span>BEST</span></h3>
                            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/_cate_best_list.php');?>
                        </section>
                    </div>
                    <div class="col-xs-4">
                        <section>
                            <h3>브라 <span>BEST</span></h3>
                            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/_cate_best_list.php');?>
                        </section>
                    </div>
                    <div class="col-xs-4">
                        <section>
                            <h3>보정 <span>BEST</span> <span class="sr-only">12121</span></h3>
                            <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/_cate_best_list.php');?>
                        </section>
                    </div>
                </div>
            </div>
            <div id="brand">
                <ul class="row">
                    <li class="col-xs-2">
                        <a href="#">
                            <div>
                                <p><img src="/design/brapra/images/main/logo_wonderbra.gif" alt=""></p>
                            </div>
                            <span>원더브라</span>
                        </a>
                    </li>
                    <li class="col-xs-2">
                        <a href="#">
                            <div>
                                <p><img src="/design/brapra/images/main/logo_barelythere.gif" alt=""></p>
                            </div>
                            <span>베어리데어</span>
                        </a>
                    </li>
                    <li class="col-xs-2">
                        <a href="#">
                            <div>
                                <p><img src="/design/brapra/images/main/logo_lefee.gif" alt=""></p>
                            </div>
                            <span>르페</span>
                        </a>
                    </li>
                    <li class="col-xs-2">
                        <a href="#">
                            <div>
                                <p><img src="/design/brapra/images/main/logo_missingdorothy.gif" alt=""></p>
                            </div>
                            <span>미싱도로시</span>
                        </a>
                    </li>
                    <li class="col-xs-2">
                        <a href="#">
                            <div>
                                <p><img src="/design/brapra/images/main/logo_himico.gif" alt=""></p>
                            </div>
                            <span>히미코</span>
                        </a>
                    </li>
                    <li class="col-xs-2">
                        <a href="#" data-toggle="modal" data-target="#all-brand">브랜드<br>더보기</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="theme" style="background-image: url(/design/brapra/images/main/bg_theme.jpg);">
            <div class="container">
                <p><img src="/design/brapra/images/main/img_theme.png" alt=""></p>
            </div>
        </div>
        <div class="container">
            <section id="volumeup-best" class="best-list">
                <h3>VOLUME UP <span>BEST</span></h3>
                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/_prd_list.php');?>
            </section>
            <section id="wirefree-best" class="best-list">
                <h3>WIREFREE <span>BEST</span></h3>
                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/_prd_list.php');?>
            </section>
            <div class="search-help">
                <div class="row">
                    <div class="col-xs-5">
                        <div class="category">
                            <h4>CATEGORY</h4>
                            <ul>
                                <li>
                                    <a href="#">브라</a>
                                </li>
                                <li>
                                    <a href="#">팬티</a>
                                </li>
                                <li>
                                    <a href="#">보정</a>
                                </li>
                                <li>
                                    <a href="#">남성</a>
                                </li>
                                <li>
                                    <a href="#">웨어</a>
                                </li>
                                <li>
                                    <a href="#">기타</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <span class="bar"></span>
                    </div>
                    <div class="col-xs-6">
                        <div class="search">
                            <h4>KEYWORD SEARCH</h4>
                            <form class="form-inline">
                                <div class="form-group keyword">
                                    <label for="search-help-keyword" class="sr-only">검색어</label>
                                    <input id="search-help-keyword" class="form-control" type="text" name="#">
                                </div>
                                <div class="form-group price">
                                    <label for="search-price-min"><span class="sr-only">최소 </span>가격</label>
                                    <input id="search-price-min" class="form-control" type="text" name="#">
                                    <span>~</span>
                                    <label for="search-price-max" class="sr-only">최대 가격</label>
                                    <input id="search-price-max" class="form-control" type="text" name="#"> 원
                                </div>
                                <div class="form-group btn-area">
                                    <button class="btn btn-search" type="submit">검색</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <section id="nudie-best" class="best-list">
                <h3>NUDIE <span>BEST</span></h3>
                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/_prd_list.php');?>
            </section>
            <section id="lace-best" class="best-list">
                <h3>LACE <span>BEST</span></h3>
                <?php require($_SERVER['DOCUMENT_ROOT'].'/inc/_prd_list.php');?>
            </section>
        </div>
        <div id="event-bn">
            <ul class="slider">
                <li style="background-image: url(/design/brapra/images/main/img_event_1.gif);">
                    <div class="container">
                        <a href="#"><span class="sr-only">지금 카카오톡 친구추가하면 1만원 쿠폰을 드립니다.</span></a>
                    </div>
                </li>
                <li style="background-image: url(/design/brapra/images/main/img_event_1.gif);">
                    <div class="container">
                        <a href="#"><span class="sr-only">지금 카카오톡 친구추가하면 1만원 쿠폰을 드립니다.</span></a>
                    </div>
                </li>
                <li style="background-image: url(/design/brapra/images/main/img_event_1.gif);">
                    <div class="container">
                        <a href="#"><span class="sr-only">지금 카카오톡 친구추가하면 1만원 쿠폰을 드립니다.</span></a>
                    </div>
                </li>
                <li style="background-image: url(/design/brapra/images/main/img_event_1.gif);">
                    <div class="container">
                        <a href="#"><span class="sr-only">지금 카카오톡 친구추가하면 1만원 쿠폰을 드립니다.</span></a>
                    </div>
                </li>
            </ul>
            <div id="event-pager">
                <div>
                    <ul>
                        <li><a href="#" data-slide-index="0"><span class="sr-only">1</span></a></li>
                        <li><a href="#" data-slide-index="1"><span class="sr-only">2</span></a></li>
                        <li><a href="#" data-slide-index="2"><span class="sr-only">3</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
    <script src="/design/brapra/js/jquery.bxslider.min.js"></script>
    <script>
        (function($) {
            $('#visual ul').bxSlider({
                auto: true,
                controls: false,
                buildPager: function(slideIndex) {
                    return "<span class='sr-only'>"+slideIndex+"</span>";
                }
            });
            $('#cate-best section ul').bxSlider({
                controls: false,
                buildPager: function(slideIndex) {
                    return "<span class='sr-only'>"+slideIndex+"</span>";
                }
            });
            $('#event-bn .slider').bxSlider({
                controls: false,
                pagerCustom: '#event-pager'
            });
            $(document).on('mouseenter', '#gnb > div > .container', function() {
               $('#gnb').addClass('open');
            });
            $(document).on('mouseleave', '#gnb > div > .container', function() {
               $('#gnb').removeClass('open');
            });
            $(window).on('scroll', function() {
                if ( $(this).scrollTop() > ($('#top-bn').height()+$('#top-nav').height()+$('#header').height()) ) {
                    $('#gnb').css({
                        'position': 'fixed',
                        'top': -1
                    });
                    $('#btn-all-brand').css({
                        'position': 'fixed',
                        'top': 0,
                        'bottom': 'auto'
                    });
                } else {
                    $('#gnb').css({
                        'position': 'absolute',
                        'top': 123
                    });
                    $('#btn-all-brand').css({
                        'position': 'absolute',
                        'top': 'auto',
                        'bottom': 2
                    });
                }
            });
        })(jQuery);
    </script>
</body>
</html>
