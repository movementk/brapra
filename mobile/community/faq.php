<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content community">
    <div class="page-header">
        <h2>자주묻는질문</h2>
        <hr>
    </div>
    <article class="faq">
        <ul class="faq-list">
            <li class="active">
                <a href="#">전체</a>
            </li>
            <li>
                <a href="#">회원가입/정보</a>
            </li>
            <li>
                <a href="#">상품구매/주문<br>절차및 취소</a>
            </li>
            <li>
                <a href="#">결제/배송</a>
            </li>
            <li>
                <a href="#">교환/반품/환불</a>
            </li>
            <li>
                <a href="#">적립금 적립</a>
            </li>
            <li>
                <a href="#">기타</a>
            </li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="search-form">
                <form>
                    <select class="form-control">
                        <option value="">전체</option>
                        <option value="">전체1</option>
                    </select>
                    <input type="text" class="form-control" id="search">
                    <label for="search" class="sr-only">검색하기</label>
                    <button type="button" class="btn btn-search"><span class="glyphicon glyphicon-search"></span></button>
                </form>
            </div>
            <div class="panel-area">
                <dl class="faq-classify">
                    <dt>구분</dt>
                    <dd>질문/답변</dd>
                </dl>
                <div class="panel-group" id="faq" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-1">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    <dl>
                                        <dt>회원가입/정보</dt>
                                        <dd>배송정보변경 가능하죠?</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading-1">
                            <div class="panel-body">
                                먼저 해당 주문의 배송비가 무료인지 My page→주문/배송조회 메뉴 에서 확인해 주시기 바랍니다. 만약 해당 주문의 배송비가 무료인 것이 확인되면 판매자의 Q&amp;A 혹은 유선전화로 내용 전달하시고 배송비 환불받을 계좌번호를 알려주시고 나서 환불 요청해주시면 됩니다.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-2">
                            <div class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    <dl>
                                        <dt>회원가입/정보</dt>
                                        <dd>배송비가 무료인데 택배사에서 돈을 받아돈을 받아돈을 받아</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-3">
                            <div class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    <dl>
                                        <dt>회원가입/정보</dt>
                                        <dd>배송비 선결제 물품이 아닌데 배송비를 물배송비를 물</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-4">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                    <dl>
                                        <dt>교환/반품/환불</dt>
                                        <dd>가상계좌로 입금하면 언제 확인이 되나요</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-4">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-5">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-5" aria-expanded="true" aria-controls="collapse-5">
                                    <dl>
                                        <dt>적립금 적립</dt>
                                        <dd>회원 등급과 혜택은 어떻게 되나요?</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-5">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-6">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                                    <dl>
                                        <dt>기타</dt>
                                        <dd>재 가입은 어떻게 하나요?</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-6">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-7">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-7" aria-expanded="true" aria-controls="collapse-7">
                                    <dl>
                                        <dt>상품구매/주문절차</dt>
                                        <dd>카드 결제 후 할부 개월 수를 바꾸고 싶어</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-7">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-8">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-8" aria-expanded="true" aria-controls="collapse-8">
                                    <dl>
                                        <dt>상품구매/주문절차</dt>
                                        <dd>공인인증서는 어떻게 발급받나요?</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-8">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-9">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-9" aria-expanded="true" aria-controls="collapse-9">
                                    <dl>
                                        <dt>결제/배송</dt>
                                        <dd>아이디와 비밀번호가 맞는데 로그인이 안</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-9">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading-10">
                            <div class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#faq" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                                    <dl>
                                        <dt>결제/배송</dt>
                                        <dd>한 상품을 2개 이상 구매한 경우 배송지를</dd>
                                    </dl>
                                </a>
                            </div>
                        </div>
                        <div id="collapse-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-10">
                            <div class="panel-body">
                                content
                            </div>
                        </div>
                    </div>
                </div>
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
        </div>
    </article>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
