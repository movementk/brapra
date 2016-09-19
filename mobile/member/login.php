<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/design/brapra/mobile/css/sub.css" rel="stylesheet">
<link href="/design/brapra/mobile/css/member.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content member">
    <div class="container">
         <div class="page-header">
             <h2>로그인</h2>
             <hr>
         </div>
         <article class="login">
            <label for="user-id" class="sr-only">아이디</label>
            <input type="text" class="form-control" id="user-id" placeholder="아이디를 입력하세요">
            <label for="user-pw" class="sr-only">비밀번호</label>
            <input type="password" class="form-control" id="user-pw" placeholder="비밀번호를 입력하세요">
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-lg btn-pink" role="button">로그인</a>
                </p>
            </div>
            <div class="btn-kakao">
                <p>
                    <a href="#" class="btn" role="button">카카오톡으로 로그인하기</a>
                </p>
            </div>
            <ul>
                <li>
                    <a href="#">아이디 / 비밀번호 찾기</a>
                </li>
                <li>
                    <a href="#">아직 회원이 아니세요?</a>
                </li>
            </ul>
         </article>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
