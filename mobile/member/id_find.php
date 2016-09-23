<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content member">
    <div class="container">
         <div class="page-header">
             <h2>아이디/비번찾기</h2>
             <hr>
         </div>
         <article class="login id-find">
            <label for="user-name" class="sr-only">이름</label>
            <input type="text" class="form-control" id="user-name" placeholder="이름을 입력하세요">
            <label for="user-email" class="sr-only">이메일</label>
            <input type="password" class="form-control" id="user-email" placeholder="이메일 주소를 입력하세요">
            <div class="btn-area">
                <p>
                    <a href="#" class="btn btn-lg btn-charcoal" role="button">확인</a>
                </p>
            </div>
         </article>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
