<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/design/brapra/mobile/css/sub.css" rel="stylesheet">
<link href="/design/brapra/mobile/css/mypage.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content mypage">
    <div class="container">
         <div class="page-header">
             <h2>회원탈퇴</h2>
             <hr>
         </div>
         <article class="leave">
            <h3>회원 탈퇴안내</h3>
            <div class="leave-info">
                고객님께서 회원 탈퇴를 원하신다니 저희 쇼핑몰의 서비스가 많이 부족하고 미흡했나 봅니다. 불편하셨던 점이나 불만사항을 알려주시면 적극 반영해서 고객님의 불편함을 해결해 드리도록 노력하겠습니다.
                아울러 회원 탈퇴시의 아래 사항을 숙지하시기 바랍니다.
                <ul>
                    <li>
                        회원 탈퇴 시 고객님의 정보는 상품 반품 및 A/S를 위해 전자상거래등에서의 소비자 보호에 관한 법률에 의거한 고객정보 보호 정책에 따라 관리 됩니다.
                    </li>
                    <li>
                        탈퇴 시 고객님께서 보유하셨던 적립금은 삭제되며 30일 동안 사이트 재가입이 불가능합니다.
                    </li>
                </ul>
            </div>
            <h3>회원 탈퇴하기</h3>
            <div class="table-wrap">
                <form>
                    <table class="table table-bordered">
                        <colgroup>
                            <col style="width: 70px;">
                            <col style="width: 230px;">
                        </colgroup>
                        <tbody>
                            <tr>
                                <th>아이디</th>
                                <td>TEST</td>
                            </tr>
                            <tr>
                                <th><label for="reason">탈퇴사유</label></th>
                                <td><textarea id="reason"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn-area">
                        <p>
                            <a href="#" class="btn btn-sm btn-default" role="button">취소</a>
                            <a href="#" class="btn btn-sm btn-gray" role="button">회원탈퇴</a>
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
