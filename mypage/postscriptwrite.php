<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mypage postscriptwrite popup">
        <div class="page-header">
            <h2 class="page-title">상품후기등록</h2>
            <hr>
            <p><span class="bracket">TEST</span>님께서 2016년 8월 24일에 주문하신 내역입니다.</p>
        </div>

        <ul class="nav nav-justified nav-mypage mt40 mb40">    
            <li></li>
            <li><a href="/mypage/orderdetail.php">주문상세내역</a></li>
            <li class="active"><a href="/mypage/postscriptwrite.php">상품후기등록</a></li>
        </ul>

        <h2 class="sub-title ar mb10">상품후기등록</h2>
        <table class="table table-thumlist">
            <colgroup>
                <col style="width: 100px;">
                <col>
                <col style="width: 80px;">
                <col style="width: 80px;">
                <col style="width: 120px;">
            </colgroup>
            <thead>
                <tr>
                    <th>사진</th>
                    <th>상품명</th>
                    <th>수량</th>
                    <th>가격</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="/design/brapra/images/community/project_thumnail1.jpg" alt="Product Thumnail Image"></td>
                    <td>
                        <span class="bracket">WONDERBRA</span> 원더브라 Premium volume 아이보리 2종 WBW6F75_T
                        <div class="clearfix"></div>
                        <span class="bracket">사이즈 : 75B(90) 1개</span>
                    </td>
                    <td>
                        <input type="number" min="1" max="99" value="1" class="num-d">
                    </td>
                    <td><span class="fpoint">37,900원</span></td>
                    <td><a href="#" class="btn btn-bg btn-sm">후기작성</a></td>
                </tr>
            </tbody>
        </table>

        <table class="table table-throw">
            <colgroup>
                <col style="width: 170px">
                <col>
            </colgroup>
            <tbody>
                <tr>
                    <th scope="row">작성자</th>
                    <td>TEST</td>
                </tr>
                <tr>
                    <th scope="row">비밀번호</th>
                    <td><input type="password" class="w370"></td>
                </tr>
                <tr>
                    <th scope="row">이메일</th>
                    <td><input type="text" class="w370"></td>
                </tr>
                <tr>
                    <th scope="row">평점</th>
                    <td>
                        <div class="radio-area">
                            <label class="radio-inline">
                                <input type="radio" name="optradio" checked>
                                <img src="/design/brapra/images/mypage/icon_star_5.png" alt="100">
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">
                                <img src="/design/brapra/images/mypage/icon_star_4.png" alt="80">
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">
                                <img src="/design/brapra/images/mypage/icon_star_3.png" alt="60">
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">
                                <img src="/design/brapra/images/mypage/icon_star_2.png" alt="40">
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="optradio">
                                <img src="/design/brapra/images/mypage/icon_star_1.png" alt="20">
                            </label>
                        </div>
                    </td>
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
                        <button type="button" class="btn btn-bo btn-bg">찾아보기</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="btn-area btn-area-sm pull-right mb50">
            <a href="javascript:history.back();" class="btn btn-sm btn-bg">취소</a>
            <a href="#" class="btn btn-sm btn-d">확인</a>
        </div>


    </div>
</body>
</html>