<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub community event list">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">이벤트</h2>
            <hr>
        </div>
        <div class="container">

            <div class="search-area form-inline mb30">
                <div class="select-d form-group">
                    <select id=""  class="form-control" name="" placeholder="">
                        <option value="option1">전체</option>
                        <option value="option2">option2</option>
                    </select>
                </div>
                <input type="text" class="form-control">
                <button type="button" class="form-control btn"><img src="/design/brapra/images/common/icon_search.png" alt="" class="search"></button>
            </div>

            <table class="table table-dlist">
                <colgroup>
                    <col class="no">
                    <col class="subject">
                    <col class="date">
                    <col class="hits">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성일</th>
                        <th>조회</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10</td>
                        <td><a href="#"><span class="bracket">당첨자 발표</span> 라인 친구프렌즈~ 1만원 쿠폰도 받고 사은품도 받고!~</a></td>
                        <td>2016.02.07</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><a href="#"><span class="bracket">EVENT</span> 복면가왕 공감하고 수입란제리 저스트마이사이즈 받아가세요~!!</a></td>
                        <td>2016.02.07</td>
                        <td>123</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><a href="#"><span class="bracket">EVENT</span> 브라프라가 준비한 블로그 이벤트 : 서로 이웃맺기 이벤트</a></td>
                        <td>2016.02.07</td>
                        <td>573</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><a href="#"><span class="bracket">300원 댓글이벤트</span> 출석체크하고 매일매일 적립금 300원 받자!</a></td>
                        <td>2016.02.07</td>
                        <td>246</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><a href="#"><span class="bracket">EVENT</span> 라인 친구프렌즈~ 1만원 쿠폰도 받고 사은품도 받고!~ [종료]</a></td>
                        <td>2016.02.07</td>
                        <td>547</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><a href="#">bra더S 언더웨어 전문 평가단2기를 모집합니다 [종료]</a></td>
                        <td>2016.02.07</td>
                        <td>213</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="#"><span class="bracket">당첨자 발표</span> 대문자 맞추면 대박 5만원 적립금이! [종료]</a></td>
                        <td>2016.02.07</td>
                        <td>448</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#"><span class="bracket">당첨자 발표</span> 한줄댓글 쓰고 169,000원 원더브라 풀세트 받자! [종료]</a></td>
                        <td>2016.02.07</td>
                        <td>545</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#"><span class="bracket">오픈기념</span> 한줄댓글 쓰고 169,000원 원더브라 풀세트 받자! [종료]</a></td>
                        <td>2016.02.07</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="#"><span class="bracket">당첨자 발표</span> 가입하고 공짜팬티 받자! [종료]</a></td>
                        <td>2016.02.07</td>
                        <td>457</td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix"></div>


            <div class="pagination-area mb80">
                <ul class="pagination">
                    <li><a href="#"><img src="/design/brapra/images/common/icon_angle_left.png" alt="prev page"></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
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
