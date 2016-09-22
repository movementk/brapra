<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage">
    <div class="container">
         <div class="page-header">
             <h2>1:1문의</h2>
             <hr>
         </div>
         <article class="my-write">
            <div class="table-wrap">
                <form>
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 70px">
                            <col style="width: 230px">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>이름</th>
                                <td>김유림</td>
                            </tr>
                            <tr>
                                <th><label for="user-email">이메일</label></th>
                                <td><input type="email" class="form-control" id="user-email" placeholder="test@test.co.kr"></td>
                            </tr>
                            <tr>
                                <th><label for="user-phone">핸드폰</label></th>
                                <td><input type="text" class="form-control" id="user-phone" placeholder="010-1234-5678"></td>
                            </tr>
                            <tr>
                                <th><label for="subject">제목</label></th>
                                <td><input type="text" class="form-control" id="subject"></td>
                            </tr>
                            <tr>
                                <th><label for="review-content">내용</label></th>
                                <td><textarea id="review-content"></textarea></td>
                            </tr>
                            <tr>
                                <th><label for="file">파일첨부</label></th>
                                <td><input type="file" id="file"></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                            <a href="#" class="btn btn-sm btn-pink" role="button">문의하기</a>
                        </p>
                    </div>
                </form>
            </div>
         </article>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
