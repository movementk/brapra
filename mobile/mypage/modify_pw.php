<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage modify-form">
    <div class="container">
         <div class="page-header">
             <h2>회원정보수정</h2>
             <hr>
         </div>
         <article class="modify-pw">
            <p class="attention">
                저희 쇼핑몰에서는 회원님의 소중한 개인정보를 안전하게 보호하고<br>
                개인정보 도용으로인한 피해를 예방하기 위하여 비밀번호를 확인합니다. <br>
                비밀번호는 타인에게 노출되지 않도록 주의해주세요.
            </p>
            <div class="pw-confirm">
                <form>
                    <dl>
                        <dt>아이디</dt>
                        <dd><strong>TEST</strong></dd>
                        <dt><label for="user-pw">비밀번호</label></dt>
                        <dd><input type="password" class="form-control" id="user-pw"></dd>
                    </dl>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">확인</a>
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
