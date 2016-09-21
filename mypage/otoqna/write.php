<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub mypage otoqna qna write">
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
                        <th scope="row">이름</th>
                        <td>테스트</td>
                    </tr>
                    <tr>
                        <th scope="row">이메일</th>
                        <td><input type="text" class="w350"></td>
                    </tr>
                    <tr>
                        <th scope="row">핸드폰</th>
                        <td><input type="text" class="w350"></td>
                    </tr>
                    <tr>
                        <th scope="row">제목</th>
                        <td><input type="text" class="wful"></td>
                    </tr>
                    <tr>
                        <th scope="row">내용</th>
                        <td><textarea name="" id="" cols="30" rows="10" class="wful"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">첨부파일</th>
                        <td>
                            <input type="password" class="w350">
                            <button type="button" class="btn btn-bo">찾아보기</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area btn-area-sm pull-right mb100">
                <a href="javascript:history.back();" class="btn btn-bo btn-bg">취소</a>
                <a href="#" class="btn btn-p btn-bo">문의하기</a>
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
