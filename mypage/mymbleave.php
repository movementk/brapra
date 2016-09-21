<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub mypage mymbleave">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">회원탈퇴</h2>
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
                <li><a href="/mypage/mypwcheck.php">회원정보수정</a></li>
                <li class="active"><a href="/mypage/mymbleave.php">회원탈퇴</a></li>
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


            <h2 class="sub-title ar mb20">회원 탈퇴안내</h2>
            <div class="gridbox-area">
                <div class="grid">
                    <div class="in-box">
                        고객님께서 회원 탈퇴를 원하신다니 저희 쇼핑몰의 서비스가 많이 부족하고 미흡했나 봅니다.<br>
                        불편하셨던 점이나 불만사항을 알려주시면 적극 반영해서 고객님의 불편함을 해결해 드리도록 노력하겠습니다.<br>
                        아울러 회원 탈퇴시의 아래 사항을 숙지하시기 바랍니다.<br>
                        <br>
                        1. 회원 탈퇴 시 고객님의 정보는 상품 반품 및 A/S를 위해 전자상거래 등에서의 소비자 보호에 관한 법률에 의거한 고객정보 보호 정책에 따라 관리 됩니다.<br>
                        2. 탈퇴 시 고객님께서 보유하셨던 적립금은 삭제되며 30일 동안 사이트 재가입이 불가능합니다.
                    </div>
                </div>
            </div>


            <h2 class="sub-title ar mt50 mb20">회원 탈퇴하기</h2>
            <table class="table table-throw">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">회원아이디</th>
                        <td>테스트</td>
                    </tr>
                    <tr>
                        <th scope="row">탈퇴사유</th>
                        <td>
                            <textarea name="" id="" cols="30" rows="6" class="wful"></textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area btn-area-sm pull-right mb100">
                <a href="javascript:history.back();" class="btn btn-sm btn-bg">취소</a>
                <a href="#" class="btn btn-d btn-sm">회원탈퇴</a>
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
