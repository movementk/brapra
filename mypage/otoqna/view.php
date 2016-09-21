<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub mypage otoqna qna view">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">1:1 문의</h2>
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
                <li class="active"><a href="/mypage/otoqna/list.php">1:1 문의</a></li>
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



            <table class="table table-throw">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">제목</th>
                        <td>
                            배송문의합니다
                            <div class="pull-right">2016.02.07</div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">이메일</th>
                        <td>test@test.co.kr</td>
                    </tr>
                    <tr>
                        <th scope="row">핸드폰</th>
                        <td>010-1234-5678</td>
                    </tr>
                    <tr>
                        <th scope="row">답변</th>
                        <td>답변이 작성되었습니다.</td>
                    </tr>
                    <tr>
                        <th scope="row">내용</th>
                        <td>
                            7일에 주문했는데언제 받을 수 있나요?<br>
                            주문내역 확인했는데 입금완료로 뜨는데 아직 배송 안된거죠?<br>
                            빠른 배송 및 확인 부탁드려요~  
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">질문답변</th>
                        <td>
                            안녕하세요~ 고객님!<br>
                            주문 상품 금일 출고 되었습니다.<br>
                            <br>
                            고객님의 기대에 어긋나지 않게 항상 노력하고,<br>
                            늘 즐거운 쇼핑이 되실 수 있도록 최선을 다하겠습니다.<br>
                            <br>
                            다른 문의사항이 있으실 경우<br>
                            고객센터 또는 1:1문의 게시판으로 접수부탁드립니다.<br>
                            감사합니다.<br>
                            <br>
                            [고객센터 1544-6101 이용안내]<br>
                            평 일 : 10:00 ~ 17:00<br>
                            점 심 : 11:40 ~ 13:00
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area pull-left">
                <a href="/mypage/otoqna/write.php" class="btn btn-bo">수정</a>
                <a href="#" class="btn btn-bo">삭제</a>
                <a href="/mypage/otoqna/write.php" class="btn btn-bo">답변</a>
            </div>
            <div class="btn-area btn-area-sm pull-right mb10">
                <a href="/mypage/otoqna/list.php" class="btn btn-d btn-bo">목록</a>
            </div>
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


        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>
