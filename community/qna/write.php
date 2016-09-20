<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="community qna write">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">Q&A</h2>
            <hr>
        </div>
        <div class="container">

            <div class="gridbox-area grid1 mb20">
                <div class="grid">
                    <div class="in-box">
                        <div class="img-area">
                            <img src="/design/brapra/images/community/project_thumnail5.jpg" alt="">
                        </div>
                        <div class="title">
                            <span class="bracket">barely there</span> 베어리데어 슈퍼 누디 브라팬티 4스타일 택1 BT_SELECT4
                        </div>
                    </div>
                </div>
            </div>


            <table class="table table-throw">
                <colgroup>
                    <col style="width: 210px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">문의선택</th>
                        <td>
                            <div class="select-bo">
                                <select id=""  class="form-control" name="" placeholder="">
                                    <option value="option1">선택하세요</option>
                                    <option value="option2">option2</option>
                                    <option value="option3">option3</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">작성자</th>
                        <td><input type="text" class="w350"></td>
                    </tr>
                    <tr>
                        <th scope="row">비밀번호</th>
                        <td><input type="password" class="w350"></td>
                    </tr>
                    <tr>
                        <th scope="row">제목</th>
                        <td><input type="text" class="wful"></td>
                    </tr>
                    <tr>
                        <th scope="row">내용</th>
                        <td><textarea name="" id="" cols="30" rows="10" class="wful"></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">첨부파일</th>
                        <td>
                            <input type="password" class="w350">
                            <button type="button" class="btn btn-bo">찾아보기</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="btn-area btn-area-sm pull-right mb100">
                <a href="javascript:history.back();" class="btn btn-bo btn-bg">취소</a>
                <a href="#" class="btn btn-d btn-bo">확인</a>
            </div>
            <div class="clearfix"></div>


        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>