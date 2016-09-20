<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="member register">
        <!-- 작업 영역 -->
        <div class="page-header">
            <h2 class="page-title">회원가입</h2>
            <hr>
        </div>
        <div class="container">


            <div class="mytab-area nav-step-area mb50">
                <ul class="nav-step">
                    <li>
                        <img class="icon" src="/design/brapra/images/member/icon_lock_x2.png" alt="Step1. Cart">
                        <img class="icon active" src="/design/brapra/images/member/icon_lock_x2_a.png" alt="Step1. Cart">
                        <span>01.</span>약관동의
                    </li>
                    <li class="active">
                        <img class="icon" src="/design/brapra/images/member/icon_information.png" alt="Step2. Order Pay">
                        <img class="icon active" src="/design/brapra/images/member/icon_information_a.png" alt="Step2. Order Pay">
                        <span>02.</span>정보입력
                    </li>
                    <li>
                        <img class="icon" src="/design/brapra/images/member/icon_circle_check.png" alt="Step3. Order Complete">
                        <img class="icon active" src="/design/brapra/images/member/icon_circle_check.png" alt="Step3. Order Complete">
                        <span>03.</span>가입완료
                    </li>
                </ul>
            </div>



            <table class="table table-throw table-mbinfo">
                <colgroup>
                    <col style="width: 170px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">아이디</th>
                        <td>
                            <input type="password" class="w350">
                            <a href="" class="btn btn-bg btn-bo">아이디 중복확인</a>
                        </td>
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
                            <a href="" class="btn btn-bg btn-bo">이메일 중복확인</a>
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
                        <td><input type="text" class="w350"></td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area text-center mt60 mb100">
                <a href="javascript:history.back();" class="btn btn-bg">이전</a>
                <a href="#" class="btn btn-p">가입하기</a>
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




<div id="getCouponModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mypage/coupondetail.php');?>
        </div>
    </div>
</div>
