<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/design/brapra/mobile/css/sub.css" rel="stylesheet">
<link href="/design/brapra/mobile/css/mypage.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage">
    <div class="container">
         <div class="page-header">
             <h2>적립금 내역</h2>
             <hr>
         </div>
         <article class="my-list my-point">
            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 70px;">
                        <col style="width: 170px;">
                        <col style="width: 60px;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>날짜</th>
                            <th>상품명</th>
                            <th>적립금</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="date">2016.03.25</td>
                            <td><a href="#">적립금으로 물품구입 -10,000원</a></td>
                            <td>-10,000원</td>
                        </tr>
                        <tr>
                            <td class="date">2016.03.25</td>
                            <td>관리자가 임의로 적립금 수정(우수고객등)</td>
                            <td>50,000원</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="total-head"><strong>총 사용가능 적립금</strong></td>
                            <td class="total">40,000원</td>
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
            <p class="attention">상품구매시, 1%의 적립금이 지급됩니다.</p>
         </article>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
