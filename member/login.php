<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub member login">
        <!-- 작업 영역 -->
        <div class="container">

            <div class="gridbox-area mt80 mb90">
                <div class="grid">
                    <div class="in-box">


                        <h2 class="sub-title">로그인</h2>
                        <hr>
                        <ul class="input-area mt30">
                            <li class="pull-left">
                                <input type="text" class="wful" placeholder="아이디를 입력하세요">
                                <div class="clearfix"></div>
                                <input type="text" class="wful" placeholder="비밀번호를 입력하세요">
                                <div class="clearfix"></div>
                                <div class="text-left mt10">
                                    <input id="chbox-remember" class="checkbox-d" type="checkbox" />
                                    <label for="chbox-remember">아이디 저장</label>
                                </div>
                            </li>
                            <li class="pull-left"><a href="#" class="btn btn-p">확인</a></li>
                        </ul>
                        <div class="clearfix"></div>

                        <hr class="hr-dotted">

                        <h2 class="sub-title">SNS 로그인</h2>
                        <hr>
                        <a href="#" class="btn btn-ww mb20">
                            <img src="/design/brapra/images/member/icon_kakaotalk.png" alt="Kakaotalk Login">
                            카카오톡으로 로그인하기
                        </a>

                        <hr class="hr-dotted">

                        <h2 class="sub-title">비회원 주문조회</h2>
                        <hr>
                        <p>비회원 구매를 하신경우에는 이름과 주문번호로 조회가능합니다.</p>
                        <ul class="input-area mt30 mb120">
                            <li class="pull-left">
                                <input type="text" class="wful" placeholder="이름을 입력하세요">
                                <div class="clearfix"></div>
                                <input type="text" class="wful" placeholder="주문번호를 입력하세요">
                            </li>
                            <li class="pull-left"><a href="#" class="btn btn-l">주문조회</a></li>
                        </ul>
                        <div class="clearfix"></div>

                        <div class="fornonmember-area">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="/design/brapra/images/member/icon_lock.png" alt="ID/Password inquiry">
                                        아이디/비밀번호찾기
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="/design/brapra/images/member/icon_userplus.png" alt="Register">
                                        아직 회원이 아니세요?
                                    </a>
                                </li>
                            </ul>
                        </div>    

                    </div>
                </div>
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
