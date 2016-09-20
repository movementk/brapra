<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="mypage order pay">
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
                    <li class="active">
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

            <div class="gridbox-area mt50 mb80">
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


            <h2 class="sub-title ar mb10">주문자 정보확인</h2>
            <table class="table table-throw">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">주문하시는 분</th>
                        <td>테스트</td>
                    </tr>
                    <tr>
                        <th scope="row">전화번호</th>
                        <td>
                            <div class="select-d ss pull-left">
                                <select id=""  class="form-control" name="" placeholder="">
                                    <option value="010">010</option>
                                </select>
                            </div>
                            <hr class="pull-left short">
                            <input type="text" class="w80" value="1234">
                            <hr class="pull-left short">
                            <input type="text" class="w80" value="5678">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">이메일</th>
                        <td><input type="text" class="w350"></td>
                    </tr>
                </tbody>
            </table>


            <h2 class="sub-title ar mt50 mb10">배송정보 입력 <input id="chbox-mbinfo" class="checkbox-d" type="checkbox" /><label for="chbox-mbinfo">주문고객 정보와 동일합니다</label></h2>
            <table class="table table-throw">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">받으시는 분</th>
                        <td><input type="text" class="w350"></td>
                    </tr>
                    <tr>
                        <th scope="row">전화번호</th>
                        <td>
                            <div class="select-d ss pull-left">
                                <select id=""  class="form-control" name="" placeholder="">
                                    <option value="010">010</option>
                                </select>
                            </div>
                            <hr class="pull-left short">
                            <input type="text" class="w80" value="1234">
                            <hr class="pull-left short">
                            <input type="text" class="w80" value="5678">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">핸드폰번호</th>
                        <td>
                            <div class="select-d ss pull-left">
                                <select id=""  class="form-control" name="" placeholder="">
                                    <option value="010">010</option>
                                </select>
                            </div>
                            <hr class="pull-left short">
                            <input type="text" class="w80" value="1234">
                            <hr class="pull-left short">
                            <input type="text" class="w80" value="5678">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">배송지 주소</th>
                        <td>
                            <div class="radio-area mb5">
                                <label class="radio-inline"><input type="radio" name="optradio" checked>자택</label>
                                <label class="radio-inline"><input type="radio" name="optradio">회사</label>
                                <label class="radio-inline"><input type="radio" name="optradio">최근 배송지</label>
                                <label class="radio-inline"><input type="radio" name="optradio">신규 배송지</label>
                            </div>
                            <div class="clearfix"></div>
                            <input type="text" class="w130">
                            <hr class="pull-left short">
                            <input type="text" class="w130">
                            <a href="" class="btn btn-d btn-bo">우편번호 검색</a>
                            <input type="text" class="wful mt5">
                            <input type="text" class="wful mt5">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">주문메세지</th>
                        <td><input type="text" class="wful"></td>
                    </tr>
                    <tr>
                        <th scope="row">택배사 요청 메세지</th>
                        <td><input type="text" class="wful"></td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>
                            
            <h2 class="sub-title ar mt50 mb10">결제금액 정보 <p>결제실패시에는 <span class="fpoint">1:1문의</span> 혹은 고객센터 <span class="fpoint">1544-6101</span>에연락주시면 처리해드리겠습니다. </p></h2>
            <table class="table table-throw">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">쿠폰사용</th>
                        <td>
                            <input type="text" class="w350">
                            <a href="#" class="btn btn-bo btn-bg" data-toggle="modal" data-target="#getCouponModal">쿠폰선택</a>
                            <span>보유하신 쿠폰을 적용하시면 할인 또는 추가적립 혜택을 받으실 수 있습니다.</span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">적립금사용</th>
                        <td>
                            <input type="text" class="w100 pull-left">
                            <label class="pull-left">원</label>
                            <a href="#" class="btn btn-bo btn-bg pull-left">전액사용</a>
                            <label class="pull-left">사용가능 포인트 <span class="fpoint">1,000</span>원</label>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>


            <h2 class="sub-title ar mt50 mb10">총 결제금액</h2>
            <div class="gridbox-area mb20">
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
            <p class="fpoint text-center mb60">※ 쿠폰 할인이적용된 최종 금액은 결제하기 버튼 클릭 후 팝업창에서 표시됩니다.</p>

            <div class="btn-area text-center mb80">
                <a href="javascript:history.back();" class="btn btn-bg">취소하기</a>
                <a href="/mypage/order/complete.php" class="btn btn-p">결제하기</a>
            </div>

        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>




<div id="getCouponModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mypage/coupondetail.php');?>
        </div>
    </div>
</div>
