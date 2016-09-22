<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage">
    <div class="container">
         <div class="page-header">
             <h2>할인쿠폰 내역</h2>
             <hr>
         </div>
         <article class="my-list my-coupon">
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-pink btn-basics" role="button" data-toggle="modal" data-target="#mycoupon">쿠폰등록</a>
                </p>
            </div>
            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 70px;">
                        <col style="width: 170px;">
                        <col style="width: 60px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>날짜</th>
                            <th>쿠폰내역</th>
                            <th>사용여부</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="date">2016.03.25</td>
                            <td>
                                <p class="title">회원가입 감사쿠폰(50,000원 이상)</p>
                                <dl>
                                    <dt>할인액/적립액</dt>
                                    <dd>5,000원</dd>
                                    <dt>사용기간</dt>
                                    <dd>2016. 02. 18 ~ 2016. 03. 19</dd>
                                </dl>
                            </td>
                            <td>사용가능</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="paging">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&lt;</span>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&gt;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <h3>주문 할인쿠폰 적용방법</h3>
            <p class="attention">
                주문서 쿠폰 선택에서 고객님이 보유하신 [쿠폰번호]를 선택하시면 할인금액 (또는 적립금액)이 나타납니다.<br>(정률할인(적립)의 경우, 할인율(적립률)이 나타납니다.)
            </p>
            <h3>쿠폰 사용시 유의사항</h3>
            <ul class="attention-list">
                <li>쿠폰마다 사용 가능 금액과 사용기한이 정해져 있으며, 1개 주문서에 1개의 쿠폰만을 사용하실 수 있습니다.</li>
                <li>쿠폰을 사용한 주문 후 반품/환불/취소의 경우 한번 사용하신 쿠폰은 다시 사용하실 수 없습니다.</li>
                <li>쿠폰 적용 품목 및 카테고리가 제한된 경우 해당 품목 또는 카테고리에서만 쿠폰을 사용하실 수 있습니다.</li>
                <li>모바일 아이콘 표시 쿠폰은 모바일에서만 사용이 가능합니다.</li>
            </ul>
         </article>
    </div>
</main>
<!-- Modal -->
<div class="modal fade my-coupon-modal" id="mycoupon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">쿠폰번호등록</h4>
            </div>
            <div class="modal-body">
                <h5>쿠폰 시리얼 번호 입력</h5>
                <p class="attention">
                    시리얼 번호는 영문자+숫자의 조합이며, 총 16자리 입니다.<br>
                    예) ABCD-AB12-CD34-12E3
                </p>
                <input type="text" class="form-control" id="coupon-num01">&nbsp;&nbsp;-&nbsp;&nbsp;
                <label for="coupon-num01" class="sr-only">쿠폰번호 입력</label>
                <input type="text" class="form-control" id="coupon-num02">&nbsp;&nbsp;-&nbsp;&nbsp;
                <label for="coupon-num02" class="sr-only">쿠폰번호 입력</label>
                <input type="text" class="form-control" id="coupon-num03">&nbsp;&nbsp;-&nbsp;&nbsp;
                <label for="coupon-num03" class="sr-only">쿠폰번호 입력</label>
                <input type="text" class="form-control" id="coupon-num04">
                <label for="coupon-num04" class="sr-only">쿠폰번호 입력</label>
                <div class="btn-area">
                    <p>
                        <a href="#" class="btn btn-pink btn-basics" role="button">입력하기</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
