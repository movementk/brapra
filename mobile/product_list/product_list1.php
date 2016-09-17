<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/design/brapra/mobile/css/sub.css" rel="stylesheet">
<link href="/design/brapra/mobile/css/product-list.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content">
    <div class="page-header">
        <img src="/design/brapra/mobile/images/product_list/list_img01.jpg" class="img-responsive" alt="bra-style 이미지">
    </div>
    <div class="container">
         <article class="product-list">
             <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="familysites-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    노와이어브라
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="familysites-menu">
                    <li><a href="#">ALL</a></li>
                    <li><a href="#">와이어브라</a></li>
                    <li><a href="#">노와이어브라</a></li>
                    <li><a href="#">볼륨업 / 왕뽕브라</a></li>
                    <li><a href="#">누디브라</a></li>
                    <li><a href="#">빅사이즈브라</a></li>
                    <li><a href="#">임산부브라</a></li>
                    <li><a href="#">주니어브라</a></li>
                </ul>
            </div>
            <div class="select-form">
                <select class="form-control">
                    <option value="">신상품순</option>
                    <option value="">높은가격순</option>
                </select>
                <button type="button" class="btn">
                    <span class="glyphicon glyphicon-stop"></span>
                </button>
            </div>
            <ul class="list">
                <li>
                    <a href="#">
                        <p class="item">
                            <img src="/design/brapra/mobile/images/product_list/product_img01.jpg" class="img-responsive" alt="제품 이미지">
                        </p>
                        <div class="details">
                            <p class="title">
                                컴포트 누디 노와이어 핑크 브라팬티 2종세트 BW5G09_T<br>
                                <span>83,000</span><strong>35,900</strong>
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p class="item">
                            <img src="/design/brapra/mobile/images/product_list/product_img02.jpg" class="img-responsive" alt="제품 이미지">
                        </p>
                        <div class="details">
                            <p class="title">
                                컴포트 누디 노와이어 딥핑크 브라팬티 2종세트 BW5G05_T<br>
                                <span>88,000</span><strong>42,500</strong>
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p class="item">
                            <img src="/design/brapra/mobile/images/product_list/product_img03.jpg" class="img-responsive" alt="제품 이미지">
                        </p>
                        <div class="details">
                            <p class="title">
                                컴포트 누디 노와이어 핑크 브라팬티 2종세트 BW5G09_T<br>
                                <span>83,000</span><strong>35,900</strong>
                            </p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p class="item">
                            <img src="/design/brapra/mobile/images/product_list/product_img04.jpg" class="img-responsive" alt="제품 이미지">
                        </p>
                        <div class="details">
                            <p class="title">
                                컴포트 누디 노와이어 딥핑크 브라팬티 2종세트 BW5G05_T<br>
                                <span>88,000</span><strong>42,500</strong>
                            </p>
                        </div>
                    </a>
                </li>
            </ul>
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