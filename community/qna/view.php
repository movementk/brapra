<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="community qna view">
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

            <table class="table table-postview">
                <colgroup>
                    <col>
                    <col style="width: 130px">
                    <col style="width: 140px">
                </colgroup>
                <thead>
                    <tr>
                        <th><span class="bracket">배송문의</span>배송 관련 문의합니다~</th>
                        <th>김유림</th>
                        <th>2016.09.14</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">
                            <p>
                                제품 구매했는데요~~ 배송은 언제쯤 가능할까요?<br>
                                제가 지방으로 출장갈것 같아서 그전에 미리 받았으면 합니다~<br>
                                이번주 금요일까지 꼭 좀 부탁드려요~~<br>
                                감사합니다!
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area pull-left">
                <a href="/community/qna/write.php" class="btn btn-bo">수정</a>
                <a href="#" class="btn btn-bo">삭제</a>
                <a href="/community/qna/write.php" class="btn btn-bo">답변</a>
            </div>
            <div class="btn-area btn-area-sm pull-right mb100">
                <a href="/community/qna/list.php" class="btn btn-d btn-bo">목록</a>
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