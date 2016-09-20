<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mypage popup coupondetail">
        <div class="page-header">
            <h2 class="page-title">쿠폰 조회 및 적용</h2>
            <hr>
            <p>할인율(%) 쿠폰은 해당되는 상품별로 할인내역이 표시됩니다.</p>
        </div>


        <div class="btn-area pull-right mb10">
            <a href="#" class="btn btn-sm btn-p" data-toggle="modal" data-target="#addCouponModal">
                <img src="/design/brapra/images/mypage/icon_white_plus.png" alt="Add Coupon">쿠폰등록
            </a>
        </div>
        <table class="table table-dlist mb70">
            <colgroup>
                <col style="width: 70px;">
                <col>
                <col style="width: 100px;">
                <col style="width: 90px;">
                <col style="width: 130px;">
                <col style="width: 160px;">
                <col style="width: 70px;">
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
                    <td>15165824</td>
                    <td>회원가입 감사쿠폰(엠코르셋 상품 전용)</td>
                    <td>(관)엠코르셋(주)</td>
                    <td>50,000원이상</td>
                    <td>10,000원</td>
                    <td>2016-02-18 ~2016-03-19</td>
                    <td>사용가능</td>
                </tr>
                <tr>
                    <td>16078674</td>
                    <td>새해 감사쿠폰</td>
                    <td>(관)엠코르셋(주)</td>
                    <td>30,000원이상</td>
                    <td>5,000원</td>
                    <td>2016-01-01 ~2016-02-01</td>
                    <td>기간만료</td>
                </tr>
            </tbody>
        </table>
        <div class="clearfix"></div>




        <h2 class="sub-title ar mb10">쿠폰 선택</h2>
        <table class="table table-thumlist mb40">
            <colgroup>
                <col style="width: 100px;">
                <col>
                <col style="width: 80px;">
                <col style="width: 80px;">
                <col style="width: 110px;">
                <col style="width: 110px;">
                <col style="width: 100px;">
            </colgroup>
            <thead>
                <tr>
                    <th>사진</th>
                    <th>상품명</th>
                    <th>판매가격</th>
                    <th>기간할인</th>
                    <th>쿠폰적용</th>
                    <th>쿠폰할인/적립금액</th>
                    <th>결제예정금액</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="/design/brapra/images/community/project_thumnail1.jpg" alt="Product Thumnail Image"></td>
                    <td>
                        <span class="bracket">WONDERBRA</span> 원더브라 Sexy Wire Free 베이지 브라팬티 WW4H22_T
                        <div class="clearfix"></div>
                        <span class="bracket">사이즈 : 75B(90) 1개</span>
                    </td>
                    <td>37,900원</td>
                    <td></td>
                    <td>회원가입 감사쿠폰<br>(엠코르셋 상품 전용)</td>
                    <td>할인: 3,836원<br>적립: 0원</td>
                    <td>34,064원</td>
                </tr>
                <tr>
                    <td><img src="/design/brapra/images/community/project_thumnail4.jpg" alt="Product Thumnail Image"></td>
                    <td>
                        <span class="bracket">WONDERBRA</span> 원더브라 Premium volume 아이보리 2종 WBW6F75_T
                        <div class="clearfix"></div>
                        <span class="bracket">사이즈 : 80C(95) 1개</span>
                    </td>
                    <td>60,900원</td>
                    <td></td>
                    <td>회원가입 감사쿠폰<br>(엠코르셋 상품 전용)</td>
                    <td>할인: 6,164원<br>적립: 0원</td>
                    <td>54,736원</td>
                </tr>
            </tbody>
        </table>


        <div class="gridbox-area mb20">
            <div class="grid">
                <div class="in-box text-center">
                    <ul class="sum-area mb10">
                        <li clas="order-p">
                            <p>총 주문금액</p>
                            <span>59,900원</span>
                        </li>
                        <li class="discount-p">
                            <p>할인금액</p>
                            쿠폰할인<span>5,900원</span>
                        </li>
                        <li class="total-p">
                            <p>총 결제금액</p>
                            <span class="fpoint">54,000원</span> 적립금(590원)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="btn-area btn-area-sm pull-right mb60">
            <a href="javascript:history.back();" class="btn btn-sm btn-bg">취소</a>
            <a href="#" class="btn btn-sm btn-d">확인</a>
        </div>
        <div class="clearfix"></div>


        <div class="gridbox-area mb40">
            <div class="grid">
                <div class="in-box">
                    <ul class="ullist">
                        <li>예정금액은 순 판매상품 금액에 대한 쿠폰할인 금액이며, 적립/예치금 사용 및 회원그룹 혜택 적용에 따라 최종 결제금액은 변경될 수 있습니다.</li>
                        <li>총 상품 결제 예정금액 = ( 전체 상품결제금액 - 쿠폰 할인 금액) 으로 계산되어 쿠폰할인금액 절사할 경우 각 상품별 결제예정금액의 합산금액과 상이할 수 있습니다.</li>
                        <li>모바일 전용 쿠폰은 노출되지 않습니다.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</body>
</html>


<div id="addCouponModal" class="modal fade coupon-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mypage/coupon.php');?>
        </div>
    </div>
</div>

