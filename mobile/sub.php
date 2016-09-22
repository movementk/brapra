<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content">
    <div class="container">
         <div class="page-header">
             <h2>이벤트</h2>
             <hr>
         </div>
         <article>
            <div class="search-form" style="margin: 20px 0;">
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
                        <col style="width: 50px;">
                        <col style="width: 180px;">
                        <col style="width: 70px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="count">10</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">9</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">8</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">7</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">6</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">5</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">4</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">3</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">2</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                        <tr>
                            <td class="count">1</td>
                            <td><a href="#">[당첨자 발표] 라인 친구프렌즈~ 1만원 쿠폰</a></td>
                            <td class="date">2016.02.07</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav class="paging" style="margin: 20px 0;">
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
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-xs btn-default" role="button">수정</a>
                    <a href="#" class="btn btn-sm btn-gray" role="button">목록</a>
                    <a href="#" class="btn btn-lg btn-pink" role="button">확인</a>
                </p>
            </div>
         </article>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
