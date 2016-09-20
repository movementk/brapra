<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="mypage order cart">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">장바구니</h2>
            <hr>
        </div>
        <div class="container">


            <div class="mytab-area nav-step-area mb50">
                <ul class="nav-step">
                    <li class="active">
                        <img class="icon" src="/design/brapra/images/mypage/icon_cart.png" alt="Step1. Cart">
                        <img class="icon active" src="/design/brapra/images/mypage/icon_cart_a.png" alt="Step1. Cart">
                        <span>01.</span>장바구니
                    </li>
                    <li>
                        <img class="icon" src="/design/brapra/images/mypage/icon_pay.png" alt="Step2. Order Pay">
                        <img class="icon active" src="/design/brapra/images/mypage/icon_pay_a.png" alt="Step2. Order Pay">
                        <span>02.</span>주문결제
                    </li>
                    <li>
                        <img class="icon" src="/design/brapra/images/mypage/icon_complete.png" alt="Step3. Order Complete">
                        <img class="icon active" src="/design/brapra/images/mypage/icon_complete_a.png" alt="Step3. Order Complete">
                        <span>03.</span>주문완료
                    </li>
                </ul>
            </div>



            <p>* 장바구니에 담긴 상품은 7일 동안 보관됩니다.</p>
            <table class="table table-thumlist">
                <colgroup>
                    <col style="width: 80px;">
                    <col style="width: 80px;">
                    <col style="width: 480px;">
                    <col style="width: 90px;">
                    <col style="width: 90px;">
                    <col style="width: 90px;">
                    <col style="width: 120px;">
                    <col style="width: 110px;">
                </colgroup>
                <thead>
                    <tr>
                        <th>선택</th>
                        <th>사진</th>
                        <th>상품명</th>
                        <th>수량</th>
                        <th>적립금</th>
                        <th>가격</th>
                        <th>배송비</th>
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
                        <td>590원</td>
                        <td>59,900원</td>
                        <td>기본배송 조건</td>
                        <td>
                            <a href="#" class="btn btn-bo btn-bg">장바구니</a>
                            <a href="#" class="btn btn-bo btn-bg">삭제</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>

            <div class="gridbox-area mt50">
                <div class="grid">
                    <div class="in-box text-center">
                        <ul class="sum-area">
                            <li clas="order-p">
                                <p>총 주문금액</p>
                                <span>59,900원</span>
                            </li>
                            <li class="discount-p">
                                <p>할인금액</p>
                                쿠폰할인<span>5,900원</span>
                            </li>
                            <li class="delivery-p">
                                <p>배송비</p>
                                <span>0원</span>
                            </li>
                            <li class="total-p">
                                <p>총 결제금액</p>
                                <span class="fpoint">54,000원</span> 적립금(590원)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="btn-area text-center mt50 mb80">
                <a href="/mypage/pay.php" class="btn btn-p">주문하기</a>
                <a href="#" class="btn btn-bg">장바구니 비우기</a>
                <a href="#" class="btn btn-bg">계속 쇼핑하기</a>
                <a href="#" class="btn btn-bg">견적서 출력</a>
            </div>
            <div class="clearfix"></div>           


            <h2 class="sub-title ar mb10">위시리스트</h2>
            <table class="table table-thumlist mb80">
                <colgroup>
                    <col style="width: 80px;">
                    <col style="width: 80px;">
                    <col style="width: 480px;">
                    <col style="width: 90px;">
                    <col style="width: 90px;">
                    <col style="width: 90px;">
                    <col style="width: 120px;">
                    <col style="width: 110px;">
                </colgroup>
                <thead>
                    <tr>
                        <th>선택</th>
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
                        </td>
                        <td>
                            <input type="number" min="1" max="99" value="1" class="num-d">
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
                        <td><img src="/design/brapra/images/community/project_thumnail4.jpg" alt="Product Thumnail Image"></td>
                        <td>
                            <div><span class="bracket">WONDERBRA</span> 원더브라 Premium volume 아이보리 2종 WBW6F75_T</div>
                            <div><span class="bracket">사이즈 : 75B(90) 1개</span></div>
                        </td>
                        <td>
                            <input type="number" min="1" max="99" value="1" class="num-d">
                        </td>
                        <td>있음</td>
                        <td>540원</td>
                        <td>54,900원</td>
                        <td>
                            <a href="#" class="btn btn-bo btn-bg">장바구니</a>
                            <a href="#" class="btn btn-bo btn-bg">삭제</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>