<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub mypage myinfo">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">회원정보수정</h2>
            <hr>
        </div>
        <div class="container">

            <ul class="nav nav-mypage mb40">
                <li><a href="/mypage/myorder.php">주문내역/배송조회</a></li>
                <li><a href="/mypage/mycheck.php">취소/교환/환불 조회</a></li>
                <li><a href="/mypage/mymoney.php">적립금 내역</a></li>
                <li><a href="/mypage/mycoupon.php">할인쿠폰 내역</a></li>
                <li><a href="/mypage/mywishlist.php">위시리스트</a></li>
                <li><a href="/mypage/myprd.php">최근 본 상품목록</a></li>
                <li><a href="/mypage/prdqna.php">상품Q&A</a></li>
                <li><a href="/mypage/otoqna/list.php">1:1 문의</a></li>
                <li class="active"><a href="/mypage/mypwcheck.php">회원정보수정</a></li>
                <li><a href="/mypage/mymbleave.php">회원탈퇴</a></li>
            </ul>


            <div class="mytab-area mb60">
                <div class="myclass pull-left">
                    <img src="/design/brapra/images/mypage/icon_vip.png" class="icon icon-myclass" alt="">
                    <ul>
                        <li>회원님의 등급</li>
                        <li><img src="/design/brapra/images/mypage/icon_vip_text.png" alt="My member class"></li>
                    </ul>
                </div>
                <div class="mycoupon pull-right">
                    <img src="/design/brapra/images/mypage/icon_discount_coupon.png" class="icon icon-mycoupon" alt="My discount coupon">
                    <ul>
                        <li>할인쿠폰</li>
                        <li><span>2</span>장</li>
                    </ul>
                </div>
                <div class="mymoney pull-right">
                    <img src="/design/brapra/images/mypage/icon_database.png" class="icon icon-mymoney" alt="My member money">
                    <ul>
                        <li>총적립금</li>
                        <li><span>2</span>원</li>
                    </ul>
                </div>
            </div>


            <table class="table table-throw table-mbinfo">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">아이디</th>
                        <td>테스트</td>
                    </tr>
                    <tr>
                        <th scope="row">비밀번호</th>
                        <td>
                            <input type="password" class="w350">
                            <label for="">* 영문 대소문자/숫자/특수문자를 혼용하여10~16자</label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">비밀번호 확인</th>
                        <td><input type="password" class="w350"></td>
                    </tr>
                    <tr>
                        <th scope="row">이름</th>
                        <td><input type="text" class="w350"></td>
                    </tr>
                    <tr>
                        <th scope="row">생년월일</th>
                        <td>
                            <div class="select-d ss pull-left">
                                <select id=""  class="form-control" name="" placeholder="">
                                    <option value="option1">option1</option>
                                    <option value="option2">option2</option>
                                    <option value="option3">option3</option>
                                </select>
                            </div>
                            <span class="pull-left">년</span>
                            
                            <div class="select-d ss pull-left">
                                <select id=""  class="form-control" name="" placeholder="">
                                    <option value="option1">option1</option>
                                    <option value="option2">option2</option>
                                    <option value="option3">option3</option>
                                </select>
                            </div>
                            <span class="pull-left">월</span>
                            
                            <div class="select-d ss pull-left">
                                <select id=""  class="form-control" name="" placeholder="">
                                    <option value="option1">option1</option>
                                    <option value="option2">option2</option>
                                    <option value="option3">option3</option>
                                </select>
                            </div>
                            <span class="pull-left">일</span>
                            <div class="radio-area pull-left">
                                <label class="radio-inline"><input type="radio" name="optradio1">남</label>
                                <label class="radio-inline"><input type="radio" name="optradio1" checked>여</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">이메일</th>
                        <td>
                            <input type="text" class="w350">
                            <div class="clearfix"></div>
                            <div class="radio-area mt5">
                                <label class="radio-inline"><input type="radio" name="optradio2" checked>메일수신</label>
                                <label class="radio-inline"><input type="radio" name="optradio2">메일수신안함</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">주소</th>
                        <td>
                            <input type="text" class="w130">
                            <hr class="pull-left short">
                            <input type="text" class="w130">
                            <a href="" class="btn btn-d btn-bo">우편번호 검색</a>
                            <input type="text" class="wful mt5">
                            <input type="text" class="wful mt5">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">핸드폰</th>
                        <td>
                            <input type="text" class="w350">
                            <div class="clearfix"></div>
                            <div class="radio-area mt5">
                                <label class="radio-inline"><input type="radio" name="optradio3" checked>SMS수신</label>
                                <label class="radio-inline"><input type="radio" name="optradio3">SMS수신안함</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">추천인</th>
                        <td>추천인 없음 1명이 당신을 추천하였습니다.</td>
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
