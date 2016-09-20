<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mypage orderdetail popup">
        <div class="page-header">
            <h2 class="page-title">주문상세내역</h2>
            <hr>
            <p><span class="bracket">TEST</span>님께서 2016년 8월 24일에 주문하신 내역입니다.</p>
        </div>

        <ul class="nav nav-justified nav-mypage mt40 mb40">    
            <li></li>
            <li class="active"><a href="/mypage/orderdetail.php">주문상세내역</a></li>
            <li><a href="/mypage/postscriptwrite.php">상품후기등록</a></li>
        </ul>

        <h2 class="sub-title ar mb10">주문자 정보</h2>
        <table class="table table-throw">
            <colgroup>
                <col style="width: 170px">
                <col>
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">주문번호</th>
                    <td>20158765135858 - 5498764315468</td>
                </tr>
                <tr>
                    <th scope="row">주문일자</th>
                    <td>2016. 08. 25</td>
                </tr>
                <tr>
                    <th scope="row">주문자</th>
                    <td>TEST</td>
                </tr>
                <tr>
                    <th scope="row">주문서 입금현황</th>
                    <td>미입금</td>
                </tr>
                <tr>
                    <th scope="row">주문 메모</th>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h2 class="sub-title ar mt30 mb10">배송지 정보</h2>
        <table class="table table-throw">
            <colgroup>
                <col style="width: 170px">
                <col>
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">배송번호</th>
                    <td>S - 15789654 - 57487641 - 00</td>
                </tr>
                <tr>
                    <th scope="row">송장번호</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">수취인</th>
                    <td>TEST</td>
                </tr>
                <tr>
                    <th scope="row">연락처</th>
                    <td>010-1234-5678</td>
                </tr>
                <tr>
                    <th scope="row">주소</th>
                    <td>서울 서초구 양재동 120-1번지</td>
                </tr>
                <tr>
                    <th scope="row">배송메세지</th>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <h2 class="sub-title ar mt30 mb10">주문상품정보</h2>
        <table class="table table-thumlist">
            <colgroup>
                <col>
                <col style="width: 130px;">
                <col style="width: 80px;">
                <col style="width: 60px;">
                <col style="width: 60px;">
                <col style="width: 80px;">
                <col style="width: 100px;">
            </colgroup>
            <thead>
                <tr>
                    <th>주문상품정보</th>
                    <th>상품별주문번호</th>
                    <th>수량</th>
                    <th>가격</th>
                    <th>적립금</th>
                    <th>처리상태</th>
                    <th>배송번호</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="/design/brapra/images/community/project_thumnail1.jpg" alt="Product Thumnail Image">
                        <div>
                            <span class="bracket">WONDERBRA</span> 원더브라 Premium volume 아이보리 2종 WBW6F75_T
                            <div class="clearfix"></div>
                            <span class="bracket">사이즈 : 75B(90) 1개</span>
                        </div>
                    </td>
                    <td>20158765135858 - 5498764315468</td>
                    <td>
                        <input type="number" min="1" max="99" value="1" class="num-d">
                    </td>
                    <td>37,900원</td>
                    <td>590원</td>
                    <td>결제대기</td>
                    <td>S - 15789654 - 57487641 - 00</td>
                </tr>
            </tbody>
        </table>
        <div class="fpoint pull-right">
            59,900원 (상품구매금핵)(할인/추가금액) = 59,900원
        </div>
        <div class="clearfix"></div>

        <h2 class="sub-title ar mt30 mb10">결제정보</h2>
        <table class="table table-dlist mb20">
            <colgroup>
                <col>
                <col>
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th>결제방법</th>
                    <th>결제금액</th>
                    <th>세부내역</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>사용한 적립금</td>
                    <td>원</td>
                    <td></td>
                </tr>
                <tr>
                    <td><span class="fpoint">무통장</span></td>
                    <td><span class="fpoint">37,900 (미입금)</span></td>
                    <td><span class="fpoint">우리은행 [가상] 6185248468256754 김유림</span></td>
                </tr>
            </tbody>
        </table>
        <div class="btn-area btn-area-sm pull-right mb50">
            <a href="#" class="btn btn-sm btn-d">주문취소</a>
            <a href="#" class="btn btn-sm btn-bg">회원탈퇴</a>
        </div>



    </div>
</body>
</html>