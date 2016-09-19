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
         <article class="qna-write">
            <div class="article-header">
                <p class="item">
                    <img src="/design/brapra/mobile/images/community/qna_view_img01.jpg" alt="제품 상세 이미지">
                </p>
                <p class="details">
                    [BARELY THERE] 베어리데어 슈퍼 누디 브라팬티 4스타일 택1 BT_SELECT4
                </p>
            </div>

            <div class="table-wrap">
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 70px;">
                        <col style="width: 230px;">
                    </colgroup>
                    <tbody>
                        <tr>
                            <th><label for="option">문의선택</label></th>
                            <td>
                                <select id="option" class="form-control">
                                    <option value="">선택하세요</option>
                                    <option value="">선택하세요2</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="user-name">작성자</label></th>
                            <td>
                                <input type="text" class="form-control" id="user-name">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="user-pw">비밀번호</label></th>
                            <td>
                                <input type="password" class="form-control" id="user-pw">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="subject">제목</label></th>
                            <td>
                                <input type="text" class="form-control" id="subject">
                            </td>
                        </tr>
                        <tr>
                            <th><label for="user-content">내용</label></th>
                            <td>
                                <textarea id="user-content"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="file">첨부파일</label></th>
                            <td>
                                <input type="file" class="form-control" id="file">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                    <a href="#" class="btn btn-sm btn-gray" role="button">목록</a>
                </p>
            </div>
        </article>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
