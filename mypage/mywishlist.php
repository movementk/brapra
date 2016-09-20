<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="mypage mywishlist">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">위시리스트</h2>
            <hr>
        </div>
        <div class="container">

            <ul class="nav nav-mypage mb40">
                <li><a href="/mypage/myorder.php">주문내역/배송조회</a></li>
                <li><a href="/mypage/mycheck.php">취소/교환/환불 조회</a></li>
                <li><a href="/mypage/mymoney.php">적립금 내역</a></li>
                <li><a href="/mypage/mycoupon.php">할인쿠폰 내역</a></li>
                <li class="active"><a href="/mypage/mywishlist.php">위시리스트</a></li>
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




            <table class="table table-thumlist">
                <colgroup>
                    <col style="width: 80px;">
                    <col style="width: 80px;">
                    <col style="width: 480px;">
                    <col style="width: 90px;">
                    <col style="width: 90px;">
                    <col style="width: 90px;">
                    <col style="width: 100px;">
                    <col style="width: 130px;">
                </colgroup>
                <thead>
                    <tr>
                        <th>
                            <input id="chbox-all" class="checkbox-d" type="checkbox" />
                            <label for="chbox-all"></label>
                        </th>
                        <th>사진</th>
                        <th>상품명</th>
                        <th>수량</th>
                        <th>재고</th>
                        <th>적립금</th>
                        <th>가격</th>
                        <th>장바구니</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input id="chbox-1" class="checkbox-d" type="checkbox" />
                            <label for="chbox-1"></label>
                        </td>
                        <td><img src="/design/brapra/images/community/project_thumnail1.jpg" alt="Product Thumnail Image"></td>
                        <td>
                            <div><span class="bracket">WONDERBRA</span> 원더브라 Premium volume 아이보리 2종 WBW6F75_T</div>
                            <div><span class="bracket">사이즈 : 75B(90) 1개</span></div>
                            <a href="#" class="btn btn-bo btn-sm btn-bg">선택사항 변경/추가</a>
                        </td>
                        <td>
                            <input type="number" min="1" max="99" value="1" class="num-d">
                            <a href="#" class="btn btn-bo btn-bg">수정</a>
                        </td>
                        <td>있음</td>
                        <td>590원</td>
                        <td>59,900원</td>
                        <td>
                            <a href="#" class="btn btn-bo btn-bg">장바구니</a>
                            <a href="#" class="btn btn-bo btn-bg">삭제</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input id="chbox-2" class="checkbox-d" type="checkbox" />
                            <label for="chbox-2"></label>
                        </td>
                        <td><img src="/design/brapra/images/community/project_thumnail2.jpg" alt="Product Thumnail Image"></td>
                        <td>
                            <div><span class="bracket">WONDERBRA</span> 원더브라 Premium volume 아이보리 2종 WBW6F75_T</div>
                            <div><span class="bracket">사이즈 : 75B(90) 1개</span></div>
                            <a href="#" class="btn btn-bo btn-sm btn-bg">선택사항 변경/추가</a>
                        </td>
                        <td>
                            <input type="number" min="1" max="99" value="1" class="num-d">
                            <a href="#" class="btn btn-bo btn-bg">수정</a>
                        </td>
                        <td>있음</td>
                        <td>590원</td>
                        <td>59,900원</td>
                        <td>
                            <a href="#" class="btn btn-bo btn-bg">장바구니</a>
                            <a href="#" class="btn btn-bo btn-bg">삭제</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area pull-right mb10">
                <a href="#" class="btn btn-sm btn-d" >전체삭제</a>
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