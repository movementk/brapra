<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub brand search-list"><!-- 대메뉴 또는 소메뉴별 클래스가 필요할 경우 이곳에 작성 -->
        <!-- 서브 페이지 가이드 작성 영역 -->
        <div class="container">
            <div class="search-list-form">
                <form>
                    <h3>ITEM SEARCH</h3>
                    <div class="price">
                        <h4>가격</h4>
                        <p class="input-form">
                            <input type="text" class="form-control price-input" id="max-amount">
                            <label for="max-amount" class="sr-only">최고금액</label>
                            <i>~</i>
                            <input type="text" class="form-control price-input" id="min-amount">
                            <label for="min-amount" class="sr-only">최고금액</label>
                            <span>원</span>
                        </p>
                    </div>
                    <div class="product-name">
                        <h4>제품명</h4>
                        <input type="text" class="form-control" id="product">
                        <label for="product" class="sr-only">제품명</label>
                    </div>

                    <div class="price price-2">
                        <h4>제조사</h4>
                        <p class="input-form">
                            <input type="text" class="form-control price-input" id="maker">
                            <label for="maker" class="sr-only">제조사</label>
                        </p>
                    </div>
                    <div class="product-name product-name2">
                        <h4>상세내용</h4>
                        <input type="text" class="form-control" id="details">
                        <label for="details" class="sr-only">상세내용</label>
                    </div>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-search" role="button">검색</a>
                        </p>
                    </div>
                </form>
            </div>
            <p class="search-result">
                <i>미싱도로시</i>의 검색결과<i>68개</i> 의 상품이 검색되었습니다.
            </p>
            <div class="clearfix"></div>

            <hr class="divider" />
            <div class="pull-right select-d ss mb20">
                <select id=""  class="form-control" name="" placeholder="">
                    <option value="desc">신상품순</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                </select>
            </div>
            <div class="clearfix"></div>


            <ul class="prd-list">
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product01.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 핑크<br>브라팬티 2종세트 BW5G09_T</p>
                            <p class="price">83,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product02.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 딥핑크<br>브라팬티 2종세트 BW5G05_T</p>
                            <p class="price">87,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product03.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 아이보리<br>브라팬티 2종세트 BW5G06_T</p>
                            <p class="price">82,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product04.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 블랙<br>브라팬티 2종세트 BW5G08_T</p>
                            <p class="price">87,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product05.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 핑크<br>브라팬티 2종세트 BW5G09_T</p>
                            <p class="price">83,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product06.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 딥핑크<br>브라팬티 2종세트 BW5G05_T</p>
                            <p class="price">87,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product07.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 아이보리<br>브라팬티 2종세트 BW5G06_T</p>
                            <p class="price">82,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product08.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 블랙<br>브라팬티 2종세트 BW5G08_T</p>
                            <p class="price">87,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product01.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 핑크<br>브라팬티 2종세트 BW5G09_T</p>
                            <p class="price">83,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product02.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 딥핑크<br>브라팬티 2종세트 BW5G05_T</p>
                            <p class="price">87,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product03.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 아이보리<br>브라팬티 2종세트 BW5G06_T</p>
                            <p class="price">82,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product04.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 블랙<br>브라팬티 2종세트 BW5G08_T</p>
                            <p class="price">87,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product05.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 핑크<br>브라팬티 2종세트 BW5G09_T</p>
                            <p class="price">83,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product06.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 딥핑크<br>브라팬티 2종세트 BW5G05_T</p>
                            <p class="price">87,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product07.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 아이보리<br>브라팬티 2종세트 BW5G06_T</p>
                            <p class="price">82,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/brand/brand_product08.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 블랙<br>브라팬티 2종세트 BW5G08_T</p>
                            <p class="price">87,000</p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>

            <div class="pagination-area mb80">
                <ul class="pagination">
                    <li><a href="#"><img src="/design/brapra/images/common/icon_angle_left.png" alt="prev page"></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><img src="/design/brapra/images/common/icon_angle_right.png" alt="next page"></a></li>
                </ul>
            </div>

        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>
