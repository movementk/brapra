<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage">
    <div class="container">
         <div class="page-header">
             <h2>주문내역/배송조회</h2>
             <hr>
         </div>
         <article class="my-list">
            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 70px;">
                        <col style="width: 230px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>주문일자</th>
                            <th>상품명</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="date">2016.03.25</td>
                            <td class="my-product">
                                <p class="product-name">
                                    [Wonderbra] 원더브라 Premium volume<br>
                                    아이보리 2종 WBW6F75_T
                                </p>
                                <dl>
                                    <dt>결제금액</dt>
                                    <dd>59,900원</dd>
                                    <dt>주문현황</dt>
                                    <dd>미배송</dd>
                                </dl>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-xs btn-default" role="button" data-toggle="modal" data-target="#order-details">주문상세</a>
                                        <a href="#" class="btn btn-xs btn-default" role="button">배송조회</a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="date">2016.03.25</td>
                            <td class="my-product">
                                <p class="product-name">
                                    [Wonderbra] 원더브라 Premium volume<br>
                                    아이보리 2종 WBW6F75_T
                                </p>
                                <dl>
                                    <dt>결제금액</dt>
                                    <dd>59,900원</dd>
                                    <dt>주문현황</dt>
                                    <dd>미배송</dd>
                                </dl>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-xs btn-default" role="button" data-toggle="modal" data-target="#order-details">주문상세</a>
                                        <a href="#" class="btn btn-xs btn-default" role="button">배송조회</a>
                                    </p>
                                </div>
                            </td>
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
         </article>
    </div>


    <!-- Modal -->
    <div class="modal fade order-details" id="order-details" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab-1-1" aria-controls="tab-1-1" role="tab" data-toggle="tab" aria-expanded="true">주문상세내역</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#tab-2-1" aria-controls="tab-2-1" role="tab" data-toggle="tab" aria-expanded="false">상품후기등록</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-1-1">
                            <div class="common-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>주문상세내역</h3>
                                <hr>
                                <p><strong>[TEST]</strong> 님께서 2016년 8월 24일에 주문하신 내역입니다.</p>
                            </div>
                            <h4>주문자 정보확인</h4>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 70px">
                                        <col style="width: 230px">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>주문번호</th>
                                            <td>215751357484 - 54987654631</td>
                                        </tr>
                                        <tr>
                                            <th>주문일자</th>
                                            <td>2015.12.24</td>
                                        </tr>
                                        <tr>
                                            <th>주문자</th>
                                            <td>테스트</td>
                                        </tr>
                                        <tr>
                                            <th>입금현황</th>
                                            <td>미입금</td>
                                        </tr>
                                        <tr>
                                            <th>주문메모</th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4>배송정보 입력</h4>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 70px">
                                        <col style="width: 230px">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th>배송번호</th>
                                            <td>S - 15486541 - 468731354645</td>
                                        </tr>
                                        <tr>
                                            <th>송장번호</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>수취인</th>
                                            <td>TEST</td>
                                        </tr>
                                        <tr>
                                            <th>연락처</th>
                                            <td>123-456-7890</td>
                                        </tr>
                                        <tr>
                                            <th>주소</th>
                                            <td>서울시 서초구 양재천로 13길 13 2층 무브먼트케이</td>
                                        </tr>
                                        <tr>
                                            <th>배송메세지</th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4>주문상품정보</h4>
                            <div class="order-product">
                                <div class="content-header">
                                    주문상품정보
                                </div>
                                <div class="product-content">
                                    <p class="item">
                                        <img src="/design/brapra/mobile/images/mypage/product_img01.gif" alt="주문한 상품 이미지">
                                    </p>
                                    <div class="details">
                                        <p class="title">
                                            [Wonderbra] 원더브라 Premium<br>
                                            volume 아이보리 2종 WBW6F75_T
                                        </p>
                                        <dl>
                                            <dt>상품별 주문정보</dt>
                                            <dd>254684654684 - 5786463154854</dd>
                                            <dt>상품가</dt>
                                            <dd class="total">59,900원</dd>
                                            <dt>적립금</dt>
                                            <dd>590원</dd>
                                            <dt>수량</dt>
                                            <dd>1</dd>
                                            <dt>처리상태</dt>
                                            <dd>결제대기중</dd>
                                            <dt><strong>배송번호</strong></dt>
                                            <dd><strong>s - 15496541315 - 68761654</strong></dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="content-footer">
                                    <dl>
                                        <dt>총 상품금액</dt>
                                        <dd>59,900원</dd>
                                        <dt>할인금액</dt>
                                        <dd>0원</dd>
                                        <dt><strong>총 결제 금액</strong></dt>
                                        <dd class="total">59,900원</dd>
                                    </dl>
                                </div>
                            </div>
                            <h4>결제정보</h4>
                            <div class="table-wrap amount-table">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 80px;">
                                        <col style="width: 100px;">
                                        <col style="width: 120px;">
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
                                            <td class="t-color">무통장</td>
                                            <td class="t-color">59,900원 (미입금)</td>
                                            <td class="t-color bank">우리은행 (가상)<br>612357486543154</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-sm btn-default" role="button">주문취소</a>
                                    <a href="#" class="btn btn-sm btn-gray" role="button">확인</a>
                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-2-1">
                            <div class="common-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3>상품후기등록</h3>
                                <hr>
                                <p><strong>[TEST]</strong> 님께서 2016년 8월 24일에 주문하신 내역입니다.</p>
                            </div>
                            <h4>상품후기등록</h4>
                            <div class="review">
                                <div class="review-header">
                                    상품명
                                </div>
                                <div class="review-content">
                                    <p class="item">
                                        <img src="/design/brapra/mobile/images/mypage/product_img01.gif" alt="구매상품 이미지">
                                    </p>
                                    <div class="details">
                                        <p class="title">
                                            [Wonderbra] 원더브라 Premium volume <br>
                                            아이보리 2종 WBW6F75_T
                                        </p>
                                        <dl>
                                            <dt>상품가</dt>
                                            <dd class="total">59,900원</dd>
                                            <dt>수량</dt>
                                            <dd>1</dd>
                                        </dl>
                                        <p class="review-btn">
                                            <a href="#" class="btn btn-basics" role="button">후기작성</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="table-wrap">
                                <form>
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 70px">
                                            <col style="width: 230px">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <th>이름</th>
                                                <td>김유림</td>
                                            </tr>
                                            <tr>
                                                <th><label for="user-pw">비밀번호</label></th>
                                                <td><input type="password" class="form-control" id="user-pw"></td>
                                            </tr>
                                            <tr>
                                                <th><label for="user-email">이메일</label></th>
                                                <td><input type="email" class="form-control" id="user-email" placeholder="test@test.co.kr"></td>
                                            </tr>
                                            <tr>
                                                <th>평점</th>
                                                <td class="grade">
                                                    <p class="star-five">
                                                        <input type="radio" id="five">
                                                        <label for="five">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                        </label>
                                                    </p>

                                                    <p class="star-four">
                                                        <input type="radio" id="four">
                                                        <label for="four">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                        </label>
                                                    </p>

                                                    <p class="star-three">
                                                        <input type="radio" id="three">
                                                        <label for="three">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                        </label>
                                                    </p>

                                                    <p class="star-two">
                                                        <input type="radio" id="two">
                                                        <label for="two">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                        </label>
                                                    </p>

                                                    <p class="star-one">
                                                        <input type="radio" id="one">
                                                        <label for="one">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_pink.gif" alt="별점 1점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                            <img src="/design/brapra/mobile/images/community/grade_star_gray.gif" alt="별점 0점">
                                                        </label>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="subject">제목</label></th>
                                                <td><input type="text" class="form-control" id="subject"></td>
                                            </tr>
                                            <tr>
                                                <th><label for="review-content">내용</label></th>
                                                <td><textarea id="review-content"></textarea></td>
                                            </tr>
                                            <tr>
                                                <th><label for="file">파일첨부</label></th>
                                                <td><input type="file" id="file"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                                            <a href="#" class="btn btn-sm btn-gray" role="button">확인</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
