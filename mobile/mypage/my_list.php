<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/design/brapra/mobile/css/sub.css" rel="stylesheet">
<link href="/design/brapra/mobile/css/mypage.css" rel="stylesheet">
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
                                        <a href="#" class="btn btn-xs btn-default" role="button" >배송조회</a>
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
    <div class="modal fade order-details" id="order-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    <h3>주문상세내역</h3>
                    <hr>
                    <p><strong>[TEST]</strong> 님께서 2016년 8월 24일에 주문하신 내역입니다.</p>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab" aria-expanded="true">주문상세내역</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab" aria-expanded="false">상품후기등록</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-1">
                            <h4>주문자 정보확인</h4>
                            <div class="table-wrap">
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 70px">
                                        <col style="width: 230px">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th></th>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4>주문자 정보확인</h4>
                            <h4>주문자 정보확인</h4>
                            <h4>주문자 정보확인</h4>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab-2">
                            nav-tab-2
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
