<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="mypage prdqna qna">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">상품Q&A</h2>
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
                <li class="active"><a href="/mypage/prdqna.php">상품Q&A</a></li>
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





            <div class="search-area form-inline mb30">
                <div class="select-d form-group">
                    <select id=""  class="form-control" name="" placeholder="">
                        <option value="option1">전체</option>
                        <option value="option2">option2</option>
                    </select>
                </div>
                <input type="text" class="form-control">
                <button type="button" class="form-control btn"><img src="/design/brapra/images/common/icon_search.png" alt="" class="search"></button>
            </div>

            <table class="table table-thumlist thumimg-xs">
                <colgroup>
                    <col class="no">
                    <col class="prd-thumnail">
                    <col class="subject">
                    <col class="writer">
                    <col class="date">
                    <col class="hits">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제품</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일</th>
                        <th>조회</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10</td>
                        <td><img src="/design/brapra/images/community/project_thumnail_xs1.jpg" alt="Product Thumnail Image"></td>
                        <td><a href="#">사이즈 문의합니다</a></td>
                        <td>김유림</td>
                        <td>2016.02.07</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td></td>
                        <td>
                            <img src="/design/brapra/images/common/icon_reply.png" alt="reply" class="icon-reply">
                            <a href="#">안녕하세요! 브라프라입니다.</a>
                        </td>
                        <td><strong>브라프라</strong>닷컴</td>
                        <td>2016.02.07</td>
                        <td>123</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td></td>
                        <td><a href="#">배송문의요~</a>
                        </td>
                        <td>김지영</td>
                        <td>2016.02.07</td>
                        <td>573</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td></td>
                        <td>
                            <img src="/design/brapra/images/common/icon_reply.png" alt="reply" class="icon-reply">
                            <a href="#">안녕하세요! 브라프라입니다.</a>
                        </td>
                        <td><strong>브라프라</strong>닷컴</td>
                        <td>2016.02.07</td>
                        <td>246</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><img src="/design/brapra/images/community/community_review_best2.jpg" alt="Product Thumnail Image"></td>
                        <td><a href="#">사이즈 문의합니다</a>
                        </td>
                        <td>김유림</td>
                        <td>2016.02.07</td>
                        <td>547</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td></td>
                        <td>
                            <img src="/design/brapra/images/common/icon_reply.png" alt="reply" class="icon-reply">
                            <a href="#">안녕하세요! 브라프라입니다.</a>
                        </td>
                        <td><strong>브라프라</strong>닷컴</td>
                        <td>2016.02.07</td>
                        <td>123</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="/design/brapra/images/community/project_thumnail_xs3.jpg" alt="Product Thumnail Image"></td>
                        <td><a href="#">반품문의합니다</a>
                        </td>
                        <td>김유림</td>
                        <td>2016.02.07</td>
                        <td>540</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="/design/brapra/images/community/project_thumnail_xs4.jpg" alt="Product Thumnail Image"></td>
                        <td><a href="#">반품문의합니다</a>
                        </td>
                        <td>김유림</td>
                        <td>2016.02.07</td>
                        <td>540</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td></td>
                        <td><a href="#">환불문의합니다</a></td>
                        <td>신아람</td>
                        <td>2016.02.07</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td></td>
                        <td><a href="#">배송문의</a></td>
                        <td>김경미</td>
                        <td>2016.02.07</td>
                        <td>457</td>
                    </tr>
                </tbody>
            </table>
            <div class="pull-right btn-area">
                <a href="#" class="btn btn-sm btn-p">문의하기</a>
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