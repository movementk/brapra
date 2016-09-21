<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub mypage order complete">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">장바구니</h2>
            <hr>
        </div>
        <div class="container">


            <div class="mytab-area nav-step-area mb50">
                <ul class="nav-step">
                    <li>
                        <img class="icon" src="/design/brapra/images/mypage/icon_cart.png" alt="Step1. Cart">
                        <img class="icon active" src="/design/brapra/images/mypage/icon_cart_a.png" alt="Step1. Cart">
                        <span>01.</span>장바구니
                    </li>
                    <li>
                        <img class="icon" src="/design/brapra/images/mypage/icon_pay.png" alt="Step2. Order Pay">
                        <img class="icon active" src="/design/brapra/images/mypage/icon_pay_a.png" alt="Step2. Order Pay">
                        <span>02.</span>주문결제
                    </li>
                    <li class="active">
                        <img class="icon" src="/design/brapra/images/mypage/icon_complete.png" alt="Step3. Order Complete">
                        <img class="icon active" src="/design/brapra/images/mypage/icon_complete_a.png" alt="Step3. Order Complete">
                        <span>03.</span>주문완료
                    </li>
                </ul>
            </div>


            <table class="table table-thumlist">
                <colgroup>
                    <col style="width: 80px;">
                    <col style="width: 80px;">
                    <col style="width: 480px;">
                    <col style="width: 90px;">
                    <col style="width: 100px;">
                    <col style="width: 100px;">
                </colgroup>
                <thead>
                    <tr>
                        <th>선택</th>
                        <th>사진</th>
                        <th>상품명</th>
                        <th>수량</th>
                        <th>적립금</th>
                        <th>가격</th>
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
                        <td>1개</td>
                        <td>590원</td>
                        <td>59,900원</td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>

            <div class="gridbox-area mt50 mb10">
                <div class="grid">
                    <div class="in-box text-center">
                        <ul class="sum-area">
                            <li clas="order-p">
                                <p>결제금액</p>
                                <span>59,900원</span>
                            </li>
                            <li class="delivery-p">
                                <p>배송비</p>
                                <span>0원</span>
                            </li>
                            <li class="total-p">
                                <p>총 결제금액</p>
                                <span class="fpoint">54,000원<small>(배송 후 590원 적립)</small></span> 적립금(590원)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="btn-area pull-right mb80">
                <a href="#" class="btn btn-sm btn-p">주문/배송내역</a>
            </div>
            <div class="clearfix"></div>


            <h2 class="sub-title ar mb10">주문자 정보확인</h2>
            <table class="table table-throw">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">받으시는 분</th>
                        <td>테스트</td>
                    </tr>
                    <tr>
                        <th scope="row">전화번호</th>
                        <td>010-1234-5678</td>
                    </tr>
                    <tr>
                        <th scope="row">이메일</th>
                        <td>text@text.co.kr</td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>


            <h2 class="sub-title ar mt50 mb10">배송 정보확인</h2>
            <table class="table table-throw">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">받으시는 분</th>
                        <td>테스트</td>
                    </tr>
                    <tr>
                        <th scope="row">전화번호</th>
                        <td>010-1234-5678</td>
                    </tr>
                    <tr>
                        <th scope="row">핸드폰번호</th>
                        <td>010-1234-5678</td>
                    </tr>
                    <tr>
                        <th scope="row">배송지 주소</th>
                        <td>서울 서초구 양재동 120-1번지</td>
                    </tr>
                    <tr>
                        <th scope="row">주문메세지</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">택배사 요청 메세지</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>
                            
            <h2 class="sub-title ar mt50 mb10">결제정보</h2>
            <table class="table table-throw">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">상세정보</th>
                        <td>무통장 입금 : <span class="fpoint">우리은행 (가상) 612357486543154 테스트 7일 이내</span> (입금확인 후 배송이 됩니다.)</td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>


            <h2 class="sub-title ar mt50 mb10">테스트님의 주문이 완료되었습니다.</h2>
            <div class="mb120">
                <div class="pull-left">귀하의 주문확인 번호는 <span class="fpoint">2016020832548421-578621232487</span> 입니다. 귀하의 제품 구입에 따른 적립금 590원은 배송과 함께 바로 적립됩니다.<br>입금방법이 무통장입금의 경우 계좌번호를 메모하세요. 입금 확인 후 상품을 준비하여 배송해 드리겠습니다.</div>
                <div class="btn-area pull-right">
                    <a href="#" class="btn btn-bg">프린트하기</a>
                    <a href="#" class="btn btn-p">주문확인</a>
                </div>
                <div class="clearfix"></div>
            </div>


        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>
