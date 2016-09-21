<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub mypage myorder">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">주문내역/배송조회</h2>
            <hr>
        </div>
        <div class="container">

            <ul class="nav nav-mypage mb40">    
                <li class="active"><a href="/mypage/myorder.php">주문내역/배송조회</a></li>
                <li><a href="/mypage/mycheck.php">취소/교환/환불 조회</a></li>
                <li><a href="/mypage/mymoney.php">적립금 내역</a></li>
                <li><a href="/mypage/mycoupon.php">할인쿠폰 내역</a></li>
                <li><a href="/mypage/mywishlist.php">위시리스트</a></li>
                <li><a href="/mypage/myprd.php">최근 본 상품목록</a></li>
                <li><a href="/mypage/prdqna.php">상품Q&A</a></li>
                <li><a href="/mypage/otoqna/list.php">1:1 문의</a></li>
                <li><a href="/mypage/mypwcheck.php">회원정보수정</a></li>
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

            <table class="table t-default table-dlist mb30">
                <colgroup>
                    <col class="no">
                    <col class="date">
                    <col class="subject">
                    <col style="width: 120px;">
                    <col style="width: 120px;">
                    <col style="width: 120px;">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>주문일자</th>
                        <th>제목</th>
                        <th>결제금액</th>
                        <th>주문상세</th>
                        <th>배송현황</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2016.02.07</td>
                        <td><a href="#">2016년 9월 추석 배송안내</a></td>
                        <td>59,900원</td>
                        <td><a href="#" class="btn btn-bo btn-bg" data-toggle="modal" data-target="#orderDetailModal">조회</a></td>
                        <td><a class="btn btn-bo btn-bg">조회</a></td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>


            <div class="pagination-area mb80">
                <ul class="pagination">
                    <li><a href="#"><img src="/design/brapra/images/common/icon_angle_left.png" alt="prev page"></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><img src="/design/brapra/images/common/icon_angle_right.png" alt="next page"></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>


            <div class="gridbox-area mb120">
                <div class="grid">
                    <div class="in-box">
                        <ul class="ullist">
                            <li>배송완료상태에서 구매후기를 작성하실수 있습니다.</li>
                            <li>배송완료는 배송중상태에서 <strong>+2일후 자동으로 배송완료상태</strong>가 되며, 해당상품에 대한 <strong>적립금이 증정</strong>됩니다.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>



<div id="orderDetailModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mypage/orderdetail.php');?>
        </div>
    </div>
</div>
