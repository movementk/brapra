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
        <article class="payment">
            <nav class="step-menu">
                <ul>
                    <li><i>01</i>.장바구니</li>
                    <li class="active"><i>02</i>.주문결제</li>
                    <li><i>03</i>.주문완료</li>
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
                                    <div class="btn-count">
                                        <p>
                                            <a href="#" class="btn btn-plus" role="button"></a>
                                            <span>1</span>
                                            <a href="#" class="btn btn-minus" role="button"></a>
                                        </p>
                                        <p class="modify-del-btn">
                                            <a href="#" class="btn" role="button">수정</a>
                                            <a href="#" class="btn" role="button">삭제</a>
                                        </p>
                                    </div>
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
                        <dt>적립금</dt>
                        <dd>590원</dd>
                    </dl>
                </div>
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
                                    <select class="form-control">
                                        <option value="">010</option>
                                        <option value="">011</option>
                                    </select> -
                                    <input type="text" class="form-control" id="phone-2" placeholder="1234"> -
                                    <label for="phone-2"></label>
                                    <input type="text" class="form-control" id="phone-3" placeholder="5678">
                                    <label for="phone-3"></label>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="email">이메일</label></th>
                                <td><input type="email" class="form-control" placeholder="test@test.co.kr" id="email"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>배송정보 입력</h3>
                <input type="checkbox" class="check check-type-2" id="same">
                <label for="same" class="same">주문고객 정보와 동일합니다</label>
                <div class="table-wrap type-2">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 80px;">
                            <col style="width: 220px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th><label for="recipient">받으시는분</label></th>
                                <td><input type="text" class="form-control" id="recipient"></td>
                            </tr>
                            <tr>
                                <th>전화번호</th>
                                <td class="phone">
                                    <select class="form-control">
                                        <option value="">선택</option>                                    </select> -
                                    <input type="text" class="form-control" id="call-2"> -
                                    <label for="call-2"></label>
                                    <input type="text" class="form-control" id="call-3">
                                    <label for="call-3"></label>
                                </td>
                            </tr>
                            <tr>
                                <th>핸드폰번호</th>
                                <td class="phone">
                                    <select class="form-control">
                                        <option value="">010</option>
                                        <option value="">011</option>
                                    </select> -
                                    <input type="text" class="form-control" id="phone-02"> -
                                    <label for="phone-02"></label>
                                    <input type="text" class="form-control" id="phone-03">
                                    <label for="phone-03"></label>
                                </td>
                            </tr>
                            <tr>
                                <th>배송지주소</th>
                                <td class="addr">
                                    <input type="radio" id="house" class="radio">
                                    <label for="house">자택</label>
                                    <input type="radio" id="company" class="radio">
                                    <label for="company">회사</label>
                                    <input type="radio" id="lately" class="radio">
                                    <label for="lately">최근 배송지</label>
                                    <input type="radio" id="new-addr" class="radio">
                                    <label for="new-addr">신규 배송지</label>
                                    <div class="address-area">
                                        <input type="text" class="form-control form-control-2" id="addr">
                                        <label for="addr" class="sr-only">주소</label>
                                        <p class="addr-btn">
                                            <a href="#" class="btn" role="button">우편번호 검색</a>
                                        </p>
                                    </div>
                                    <input type="text" class="form-control" id="addr-2">
                                    <label for="addr-2" class="sr-only">기본주소</label>
                                    <input type="text" class="form-control" id="addr-3">
                                    <label for="addr-3" class="sr-only">상세주소</label>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="message">주문메세지</label></th>
                                <td><input type="text" class="form-control" id="message"></td>
                            </tr>
                            <tr>
                                <th><label for="parcel">택배사<br>요청메세지</label></th>
                                <td><textarea id="parcel"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>결제금액 정보</h3>
                <div class="table-wrap type-2">
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 80px;">
                            <col style="width: 220px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th><label for="point">적립금사용</label></th>
                                <td class="point">
                                    <input type="text" class="form-control" id="point"> 원
                                    <p class="btn-point">
                                        <a href="#" class="btn" role="button">전액사용</a>
                                        <br>사용가능 포인트 <i>1,000</i>원
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="coupon">쿠폰사용</label></th>
                                <td class="coupon">
                                    <input type="text" class="form-control" id="coupon">
                                    <p class="btn-point">
                                        <a href="#" class="btn" role="button" data-toggle="modal" data-target="#coupon-modal">쿠폰선택</a>
                                    </p>
                                    <p class="coupon-txt">보유하신 쿠폰을 적용하시면 할인 또는 추가적립 혜택을 받으실 수있습니다.<br>
                                    <span>결제실패시에는 <i>1:1문의</i> 혹은 고객센터 <i><a href="tel:15446101">1544-6101</a></i>에 연락주시면 처리해드리겠습니다.</span></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>총 결제금액</h3>
                <div class="total-amount type-2">
                    <dl>
                        <dt>총 상품 금액</dt>
                        <dd>59,900원</dd>
                        <dt>할인금액</dt>
                        <dd>0원</dd>
                        <dt class="total-sub">총 결제 금액</dt>
                        <dd class="total">59,900원</dd>
                        <dt>적립금</dt>
                        <dd>590원</dd>
                    </dl>
                </div>
                <p class="attention">
                    쿠폰 할인이 적용된 최종 금액은 결제하기 버튼 클릭 후 팝업창에서 표시됩니다.
                </p>
            </div>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-basics btn-default" role="button">취소하기</a>
                    <a href="#" class="btn btn-basics btn-pink" role="button">결제하기</a>
                </p>
            </div>
        </article>
    </div>
</main>
<!-- Modal -->
<div class="modal fade coupon-modal" id="coupon-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">쿠폰 조회 및 적용</h3>
                <hr>
                <p>할인율(%) 쿠폰은 해당되는 상품별로 할인내역이 표시됩니다.</p>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-pink btn-basics" role="button">쿠폰등록</a>
                    </p>
                </div>
            </div>
            <div class="modal-body">
                <h4>보유 쿠폰 내역</h4>
                <div class="table-wrap">
                    <table class="table tbale-bordered">
                        <colgroup>
                            <col style="width: 60px;">
                            <col style="width: 180px;">
                            <col style="width: 60px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>쿠폰번호</th>
                                <th>쿠폰정보</th>
                                <th>사용여부</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>15465824</td>
                                <td>
                                    <dl>
                                        <dt>쿠폰이름</dt>
                                        <dd>회원가입 감사쿠폰</dd>
                                    </dl>
                                    <p>(엠코르셋 상품 전용)</p>
                                    <dl>
                                        <dt>사용가능금액</dt>
                                        <dd>50,000원 이상</dd>
                                        <dt>할인액/적립액</dt>
                                        <dd>10,000원</dd>
                                        <dt>사용기간</dt>
                                        <dd>2016. 02. 18 ~ 2016. 03. 19</dd>
                                    </dl>
                                </td>
                                <td>사용만료</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h4>사용쿠폰선택</h4>
                <div class="table-wrap type-2">
                    <table class="table tbale-bordered">
                        <colgroup>
                            <col style="width: 70px;">
                            <col style="width: 230px;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>쿠폰번호</th>
                                <th>쿠폰정보</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        <img src="/design/brapra/mobile/images/mypage/product_img01.gif" alt="상품 이미지">
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
                                        <dt>할인액/적립액</dt>
                                        <dd>
                                            <select class="form-control">
                                                <option value="">쿠폰선택</option>
                                            </select>
                                        </dd>
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
                        <dt>쿠폰할인</dt>
                        <dd>10,000원</dd>
                        <dt class="total-sub">총 결제 금액</dt>
                        <dd class="total">59,900원</dd>
                    </dl>
                </div>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-default btn-sm" role="button">취소</a>
                        <a href="#" class="btn btn-gray btn-sm" role="button">확인</a>
                    </p>
                </div>
                <h5>주문 할인쿠폰 적용방법</h5>
                <ul>
                    <li>1단계 - 주문서 쿠폰 선태겡서 고객님이 보유하신 [쿠폰번호]를 선택하시면 할인금액 (또는 적립금액)이 나타납니다. (정률할인(적립)의 경우, 할인율(적립률)이 나타납니다.)</li>
                    <li>2단계 - 확인버튼을 클릭하시면, 쿠폰결제 적용이 완료됩니다.</li>
                </ul>
                <h5>쿠폰 사용시 유의사항</h5>
                <ul class="decimal-list">
                    <li>각 쿠폰마다 사용가능 금액이정해져 있습니다.</li>
                    <li>쿠폰은 한 주문에 한해서 사용이 가능합니다.</li>
                    <li>각 쿠폰마다 사용기한이 정해져 있습니다.</li>
                    <li>주문 후 반품/환불/취소의 경우 한번 사용하신 할인 쿠폰을 다시 사용하실 수 없습니다.</li>
                    <li>쿠폰 적용품목이 한정된 쿠폰은 해당 품목에서만 사용가능합니다.</li>
                    <li>할인/적립(%) 쿠폰은 적립금할인 등을 제외한 실제 결제금액에 적용됩니다.</li>
                    <li>해당 상품에 대한 쿠폰은 해당 상품만 구매시 적용이 가능합니다.</li>
                    <li>모바일 전용 쿠폰은 노출되지 않습니다. </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
