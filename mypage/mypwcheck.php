<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub mypage mypwcheck">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">회원정보수정</h2>
            <hr>
        </div>
        <div class="container">

            <ul class="nav nav-mypage mb40">
                <li><a href="/mypage/myorder.php">주문내역/배송조회</a></li>
                <li><a href="/mypage/mycheck.php">취소/교환/환불 조회</a></li>
                <li><a href="/mypage/mymoney.php">적립금 내역</a></li>
                <li><a href="/mypage/mycoupon.php">할인쿠폰 내역</a></li>
                <li><a href="/mypage/mywishlist.php">위시리스트</a></li>
                <li><a href="/mypage/myprd.php">최근 본 상품목록</a></li>
                <li><a href="/mypage/prdqna.php">상품Q&A</a></li>
                <li><a href="/mypage/otoqna/list.php">1:1 문의</a></li>
                <li class="active"><a href="/mypage/mypwcheck.php">회원정보수정</a></li>
                <li><a href="/mypage/mymbleave.php">회원탈퇴</a></li>
            </ul>


            <div class="mytab-area mb60">
                <div class="myclass pull-left">
                    <img src="/design/brapra/images/mypage/icon_vip.png" class="icon icon-myclass" alt="">
                    <ul>
                        <li>회원님의 등급</li>
                        <li><img src="/design/brapra/images/mypage/icon_vip_text.png" alt="My member class"></li>
                    </ul>
                </div>
                <div class="mycoupon pull-right">
                    <img src="/design/brapra/images/mypage/icon_discount_coupon.png" class="icon icon-mycoupon" alt="My discount coupon">
                    <ul>
                        <li>할인쿠폰</li>
                        <li><span>2</span>장</li>
                    </ul>
                </div>
                <div class="mymoney pull-right">
                    <img src="/design/brapra/images/mypage/icon_database.png" class="icon icon-mymoney" alt="My member money">
                    <ul>
                        <li>총적립금</li>
                        <li><span>2</span>원</li>
                    </ul>
                </div>
            </div>


            <div class="gridbox-area">
                <div class="grid">
                    <div class="in-box">
                        <h2 class="sub-title">비밀번호 확인</h2>
                        <hr>
                        <p>
                            저희 쇼핑몰에서는 회원님의 소중한 개인정보를 안전하게 보호하고 개인정보 도용으로인한 피해를<br>
                            예방하기 위하여 비밀번호를 확인합니다. 비밀번호는 타인에게 노출되지 않도록 주의해주세요. 
                        </p>
                        <ul class="input-area">
                            <li><label for="">아이디</label><span>TEST</span></li>
                            <li><label for="">비밀번호</label><input type="text" ></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="btn-area btn-area-sm mb100 text-center">
                <a href="javascript:history.back();" class="btn btn-f btn-sm btn-bg">취소</a>
                <a href="/mypage/myinfo.php" class="btn btn-f btn-d btn-sm">확인</a>
            </div>
            <div class="clearfix"></div>


        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>
