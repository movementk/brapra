<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/design/brapra/mobile/css/sub.css" rel="stylesheet">
<link href="/design/brapra/mobile/css/mypage.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage">
    <div class="container">
         <div class="page-header">
             <h2>1:1 문의</h2>
             <hr>
         </div>
         <article class="my-qna">
            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 180px;">
                        <col style="width: 60px;">
                        <col style="width: 60px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>제목</th>
                            <th>날짜</th>
                            <th>답변여부</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#">사이즈 문의 합니다</a></td>
                            <td class="date">2016.02.07</td>
                            <td>미답변</td>
                        </tr>
                        <tr>
                            <td><a href="#">배송문의</a></td>
                            <td class="date">2016.02.07</td>
                            <td>답변완료</td>
                        </tr>
                        <tr>
                            <td><a href="#">사이즈문의</a></td>
                            <td class="date">2016.02.07</td>
                            <td>답변완료</td>
                        </tr>
                        <tr>
                            <td><a href="#">배송문의</a></td>
                            <td class="date">2016.02.07</td>
                            <td>답변완료</td>
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
