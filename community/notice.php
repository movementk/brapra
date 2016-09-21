<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub community notice">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">공지사항</h2>
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

            <table class="table table-dlist mb50">
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
                        <td><a href="#">2016년 9월 추석 배송안내</a></td>
                        <td>2016.02.07</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><a href="#">2016년 5월 황금연휴 휴무안내</a></td>
                        <td>2016.02.07</td>
                        <td>123</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><a href="#">브라프라 2016년 설연휴 배송안내</a></td>
                        <td>2016.02.07</td>
                        <td>573</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><a href="#">교환/반품 요청건에 대한 안내글 입니다.</a></td>
                        <td>2016.02.07</td>
                        <td>246</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><a href="#">적립금 유효기간 공지 입니다.</a></td>
                        <td>2016.02.07</td>
                        <td>547</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><a href="#">시스템 이전 공지!!</a></td>
                        <td>2016.02.07</td>
                        <td>213</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="#">엠코르셋 물류센터 휴무안내</a></td>
                        <td>2016.02.07</td>
                        <td>448</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#">엠코르셋 전사 워크샵으로 인한 고객센터 안내 </a></td>
                        <td>2016.02.07</td>
                        <td>545</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#">브라프라 엠코르셋 배송지연 안내</a></td>
                        <td>2016.02.07</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="#">★5월 SNS이벤트 당첨자발표!! ★</a></td>
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
