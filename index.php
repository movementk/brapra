<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
</head>
<body>
    <div id="topbn" class="collape in" style="background-color: #f3e3e4; height: 109px;">
        <div class="container">
            <a href="#"><img src="/design/brapra/images/common/topbn_dummy.jpg" alt=""></a>
        </div>
    </div>
    <nav id="topnav">
        <div class="container">
            <ul class="sns">
                <li class="facebook"><a href="#"><img src="/design/brapra/images/common/ico_facebook.png" alt="페이스북"></a></li>
                <li class="nblog"><a href="#"><img src="/design/brapra/images/common/ico_nblog.png" alt="블로그"></a></li>
                <li class="kakaostory"><a href="#"><img src="/design/brapra/images/common/ico_kakaostory.png" alt="카카오스토리"></a></li>
            </ul>
            <ul class="util">
                <li><a href="#">로그인</a></li>
                <li><a href="#">회원가입</a></li>
                <li><a class="cart" href="#">장바구니 <b>1</b></a></li>
                <li><a href="#">주문조회</a></li>
                <li><a href="#">고객센터</a></li>
            </ul>
            <button class="btn-topbn btn-link" type="button" data-toggle="collapse" data-target="#topbn" aria-expanded="false" aria-controls="topbn">
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </nav>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <a class="ad" href="#"><img src="/design/brapra/images/common/ad_dummy.jpg" alt="URBAN ROMANTIC 코든 노와이어 6,900원!"></a>
                </div>
                <div class="col-xs-4 col-xs-offset-1">
                    <h1 class="logo"><a href="/"><img src="/design/brapra/images/common/logo.png" alt="브라프라닷컴 대한민국 NO.1 언더웨어 쇼핑몰"></a></h1>
                </div>
                <div class="col-xs-3 col-xs-offset-1">
                    <div class="search">
                        <form>
                            <div class="form-group">
                                <label for="search-keyword" class="sr-only">검색어</label>
                                <input id="search-keyword" class="form-control" type="text" name="#">
                                <button class="btn-link btn-search" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav id="gnb">
        <div class="container">
            <div class="row">
                <div class="col-xs-5">
                    메뉴 #1
                </div>
                <div class="col-xs-1">
                    사선
                </div>
                <div class="col-xs-4">
                    메뉴 #2
                </div>
                <div class="col-xs-2">
                    메뉴 #3
                </div>
            </div>
        </div>
    </nav>
    <main id="content">
        
    </main>
    <footer>
        
    </footer>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>