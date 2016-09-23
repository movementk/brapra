<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage">
    <div class="container">
        <div class="page-header">
            <h2>장바구니</h2>
            <hr>
        </div>
        <article class="sucess">
            <nav class="step-menu">
                <ul>
                    <li><i>01</i>.장바구니</li>
                    <li><i>02</i>.주문결제</li>
                    <li class="active"><i>03</i>.주문완료</li>
                </ul>
            </nav>
            <div class="article-content">
                <div class="table-wrap">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 30px;">
                            <col style="width: 50px">
                            <col style="width: 220px">
                        </colgroup>
                        <thead>
                            <tr>
                                <th><input type="checkbox" class="check"></th>
                                <th>사진</th>
                                <th>상품</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="check"></td>
                                <td>
                                    <p class="product-img">
                                        <img src="/design/brapra/mobile/images/mypage/product_img01.gif" alt="장바구니 상품 이미지">
                                    </p>
                                </td>
                                <td>
                                    <p class="title">
                                        [Wonderbra] 원더브라 Premium<br>
                                        volume 아이보리 2종 WBW6F75_T
                                    </p>
                                    <dl>
                                        <dt>상품가</dt>
                                        <dd>59,900원</dd>
                                        <dt>적립금</dt>
                                        <dd>590원</dd>
                                        <dt>배송비</dt>
                                        <dd>기본배송(조건)</dd>
                                        <dt>사이즈</dt>
                                        <dd>75b(90) 1개</dd>
                                    </dl>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="total-amount">
                    <dl>
                        <dt>총 상품 금액</dt>
                        <dd>59,900원</dd>
                        <dt>할인금액</dt>
                        <dd>0원</dd>
                        <dt class="total-sub">총 결제 금액</dt>
                        <dd class="total">59,900원</dd>
                        <dt>적립금 (배송 후 적립)</dt>
                        <dd>590원</dd>
                    </dl>
                </div>
                <h3>주문자 정보확인</h3>
                <div class="table-wrap type-2">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 80px;">
                            <col style="width: 220px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>주문자</th>
                                <td>TEST</td>
                            </tr>
                            <tr>
                                <th>전화번호</th>
                                <td class="phone">
                                    010 - 1234 - 5678
                                </td>
                            </tr>
                            <tr>
                                <th>이메일</th>
                                <td>test@test.co.kr</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>배송정보 확인</h3>
                <div class="table-wrap type-2">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 80px;">
                            <col style="width: 220px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>받으시는분</th>
                                <td>TEST</td>
                            </tr>
                            <tr>
                                <th>전화번호</th>
                                <td>010 - 1234 - 5678</td>
                            </tr>
                            <tr>
                                <th>핸드폰번호</th>
                                <td>010 - 1234 - 5678</td>
                            </tr>
                            <tr>
                                <th>배송지주소</th>
                                <td>서울시 서초구 양재천로 13길 13 2층 무브먼트케이</td>
                            </tr>
                            <tr>
                                <th>주문메세지</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>택배사<br>요청메세지</th>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>결제 정보</h3>
                <div class="table-wrap type-2">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 80px;">
                            <col style="width: 220px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>상세정보</th>
                                <td>
                                    <p class="bank">무통장 입금 : <i>우리은행 (가상) 612357486543154 테스트 7일 이내</i> (입금확인 후 배송이 됩니다.)</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>테스트님의 주문이 완료되었습니다.</h3>
                <p class="order-num-txt">
                    귀하의 주문확인 번호는 <i>2016020832548421-578621232487</i>입니다. <br>
                    귀하의 제품 구입에 따른 적립금 590원은 배송과 함께 바로 적립됩니다.<br>
                    입금방법이 무통장입금의 경우 계좌번호를 메모하세요. <br>
                    입금 확인 후 상품을 준비하여 배송해 드리겠습니다.
                </p>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-pink btn-basics" role="button">주문확인</a>
                    </p>
                </div>
            </div>
        </article>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
