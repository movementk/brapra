<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content community">
    <div class="container">
         <div class="page-header">
             <h2>이벤트</h2>
             <hr>
         </div>
         <article class="view">
            <p class="event-area">브라프라와 친구하면 3만원 쿠폰 증정!</p>
            <p class="event-img">
                <img src="/design/brapra/mobile/images/community/event_img01.jpg" class="img-responsive" alt="이벤트 이미지">
            </p>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-xs btn-default" role="button">수정</a>
                    <a href="#" class="btn btn-xs btn-default" role="button">삭제</a>
                    <a href="#" class="btn btn-xs btn-default" role="button">답변</a>
                    <a href="#" class="btn btn-sm btn-gray" role="button">목록</a>
                </p>
            </div>
            <div class="reply-form">
                <form>
                    <div class="reply">
                        <input type="text" class="form-control" id="reply">
                        <label for="reply" class="sr-only">답변하기</label>
                        <p>
                            <a href="#" class="btn btn-pink" role="button">확인</a>
                        </p>
                    </div>
                    <ul class="reply-list">
                        <li>
                            <dl>
                                <dt>브라프라</dt>
                                <dd>2016.02.07</dd>
                            </dl>
                            <p class="reply-content">
                                댓글을 입력하세요.댓글을 입력하세요.댓글을 입력하세요.
                            </p>
                        </li>
                        <li class="reply-text">
                            <dl>
                                <dt>브라프라</dt>
                                <dd>2016.02.07</dd>
                            </dl>
                            <p class="reply-content">
                                댓글을 입력하세요.댓글을 입력하세요.댓글을 입력하세요.
                            </p>
                        </li>
                        <li>
                            <dl>
                                <dt>브라프라</dt>
                                <dd>2016.02.07</dd>
                            </dl>
                            <p class="reply-content">
                                댓글을 입력하세요.댓글을 입력하세요.댓글을 입력하세요.
                            </p>
                        </li>
                        <li>
                            <dl>
                                <dt>브라프라</dt>
                                <dd>2016.02.07</dd>
                            </dl>
                            <p class="reply-content">
                                댓글을 입력하세요.댓글을 입력하세요.댓글을 입력하세요.
                            </p>
                        </li>
                    </ul>
                </form>
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
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
