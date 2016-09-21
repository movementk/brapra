<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub mypage mycoupon">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">할인쿠폰 내역</h2>
            <hr>
        </div>
        <div class="container">

            <ul class="nav nav-mypage mb40">
                <li><a href="/mypage/myorder.php">주문내역/배송조회</a></li>
                <li><a href="/mypage/mycheck.php">취소/교환/환불 조회</a></li>
                <li><a href="/mypage/mymoney.php">적립금 내역</a></li>
                <li class="active"><a href="/mypage/mycoupon.php">할인쿠폰 내역</a></li>
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

            <div class="btn-area pull-right mb10">
                <a href="#" class="btn btn-sm btn-p" data-toggle="modal" data-target="#addCouponModal">쿠폰등록</a>
            </div>
            <table class="table table-dlist mb30">
                <colgroup>
                    <col style="width: 125px;">
                    <col class="subject">
                    <col style="width: 150px;">
                    <col style="width: 130px;">
                    <col style="width: 150px;">
                    <col style="width: 100px;">
                    <col style="width: 95px;">
                </colgroup>
                <thead>
                    <tr>
                        <th>쿠폰번호</th>
                        <th>쿠폰이름</th>
                        <th>쿠폰전용품목</th>
                        <th>사용가능금액</th>
                        <th>할인액(률)/적립액(률)</th>
                        <th>사용기간</th>
                        <th>사용여부</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15168542</td>
                        <td>회원가입 감사쿠폰(엠코르셋 상품 전용)</td>
                        <td>(관)엠코르셋(주)</td>
                        <td>50,000원이상</td>
                        <td>10,000원</td>
                        <td>2016.02.07</td>
                        <td>사용가능</td>
                    </tr>
                    <tr>
                        <td>2016.02.07</td>
                        <td>새해 감사쿠폰</td>
                        <td>(관)엠코르셋(주)</td>
                        <td>50,000원이상</td>
                        <td>5,000원</td>
                        <td>2016.02.07</td>
                        <td>기간만료</td>
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
                        <label for="">* 주문 할인쿠폰 적용방법</label>
                        <ul class="ullist">
                            <li>주문서 쿠폰 선택에서 고객님이 보유하신 [쿠폰번호]를 선택하시면 할인금액(또는 적립금액)이 나타납니다.</li>
                            <li>(정률할인(적립)의 경우, 할인율(적립률)이 나타납니다.) </li>
                        </ul>
                        <label for="" class="mt10">* 쿠폰 사용시 유의사항</label>
                        <ul class="ullist">
                            <li>쿠폰마다 사용 가능 금액과 사용기한이 정해져 있으며, 1개 주문서에 1개의 쿠폰만을 사용하실 수 있습니다.</li>
                            <li>쿠폰을 사용한 주문 후 반품/환불/취소의 경우 한번 사용하신 쿠폰은 다시 사용하실 수 없습니다.</li>
                            <li>쿠폰 적용 품목 및 카테고리가 제한된 경우 해당 품목 또는 카테고리에서만 쿠폰을 사용하실 수 있습니다.</li>
                            <li>할인/적립 쿠폰은 적립금할인 등을 제외한 실제 결제금액에 적용됩니다.</li>
                            <li>모바일 아이콘 표시 쿠폰은 모바일에서만 사용이 가능합니다.</li>
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


<div id="addCouponModal" class="modal fade coupon-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mypage/coupon.php');?>
        </div>
    </div>
</div>
