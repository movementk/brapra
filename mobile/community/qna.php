<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/design/brapra/mobile/css/sub.css" rel="stylesheet">
<link href="/design/brapra/mobile/css/community.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content community">
    <div class="container">
        <div class="page-header">
            <h2>Q&amp;A</h2>
            <hr>
        </div>
        <article class="qna">
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
            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 35px;">
                        <col style="width: 45px;">
                        <col style="width: 155px;">
                        <col style="width: 65px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제품</th>
                            <th>제목</th>
                            <th>작성자</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                            <td>10</td>
                            <td>
                                <a href="#">
                                    <p>
                                        <img src="/design/brapra/mobile/images/community/review_img05.jpg" alt="제품 문의 이미지">
                                    </p>
                                </a>
                            </td>
                            <td class="review-subject"><a href="#">사이즈 문의합니다</a></td>
                            <td>김유림</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td></td>
                            <td class="reply"><a href="#">안녕하세요! 브라프라입니다.</a></td>
                            <td><strong>브라프라</strong>닷컴</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>
                                <a href="#">
                                    <p>
                                        <img src="/design/brapra/mobile/images/community/review_img07.jpg" alt="제품 문의 이미지">
                                    </p>
                                </a>
                            </td>
                            <td class="review-subject"><a href="#">배송문의요</a></td>
                            <td>이유진</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td></td>
                            <td class="reply"><a href="#">안녕하세요! 브라프라입니다.</a></td>
                            <td><strong>브라프라</strong>닷컴</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>
                                <a href="#">
                                    <p>
                                        <img src="/design/brapra/mobile/images/community/review_img07.jpg" alt="제품 문의 이미지">
                                    </p>
                                </a>
                            </td>
                            <td class="review-subject"><a href="#">A/S는 가능한가요?</a></td>
                            <td>김지은</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td></td>
                            <td class="reply"><a href="#">안녕하세요! 브라프라입니다.</a></td>
                            <td><strong>브라프라</strong>닷컴</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <a href="#"></a>
                            </td>
                            <td class="review-subject"><a href="#">사이즈 문의</a></td>
                            <td>김유림</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <a href="#">
                                    <p>
                                        <img src="/design/brapra/mobile/images/community/review_img06.jpg" alt="제품 문의 이미지">
                                    </p>
                                </a>
                            </td>
                            <td class="review-subject"><a href="#">반품문의</a></td>
                            <td>김지은</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <a href="#">
                                    <p>
                                        <img src="/design/brapra/mobile/images/community/review_img05.jpg" alt="제품 문의 이미지">
                                    </p>
                                </a>
                            </td>
                            <td class="review-subject"><a href="#"><p>환불문의합니다</p></a></td>
                            <td>이유진</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="#"></a>
                            </td>
                            <td class="review-subject"><a href="#">배송문의</a></td>
                            <td>김유림</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-sm btn-pink" role="button">문의하기</a>
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
