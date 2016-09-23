<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage">
    <div class="container">
         <div class="page-header">
             <h2>최근 본 상품목록</h2>
             <hr>
         </div>
         <article class="my-wishlist myprd">
            <div class="article-header">
                <input type="checkbox" class="check">
                <h3>상품 전체 선택/해제</h3>
            </div>
            <ul class="list">
                <li>
                    <input type="checkbox" class="check">
                    <p class="item">
                        <img src="/design/brapra/mobile/images/mypage/product_img01.gif" alt="상품 이미지">
                    </p>
                    <div class="details">
                        <p class="title">
                            [Wonderbra] 원더브라 Premium volume <br>
                            아이보리 2종 WBW6F75_T
                        </p>
                        <dl>
                            <dt>상품가</dt>
                            <dd>59,900원</dd>
                            <dt>적립금</dt>
                            <dd>1%</dd>
                        </dl>
                        <p class="basket-del-btn">
                            <a href="#" class="btn btn-default btn-xs" role="button">장바구니</a>
                            <a href="#" class="btn btn-default btn-xs" role="button">삭제</a>
                        </p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" class="check">
                    <p class="item">
                        <img src="/design/brapra/mobile/images/mypage/product_img01.gif" alt="상품 이미지">
                    </p>
                    <div class="details">
                        <p class="title">
                            [Wonderbra] 원더브라 Premium volume <br>
                            아이보리 2종 WBW6F75_T
                        </p>
                        <dl>
                            <dt>상품가</dt>
                            <dd>59,900원</dd>
                            <dt>적립금</dt>
                            <dd>1%</dd>
                        </dl>
                        <p class="basket-del-btn">
                            <a href="#" class="btn btn-default btn-xs" role="button">장바구니</a>
                            <a href="#" class="btn btn-default btn-xs" role="button">삭제</a>
                        </p>
                    </div>
                </li>
            </ul>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-default btn-sm" role="button">선택삭제</a>
                    <a href="#" class="btn btn-gray btn-sm" role="button">전체삭제</a>
                </p>
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
