<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mypage coupon popup">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">쿠폰번호등록</h4>
        </div>
        <div class="modal-body">
            <h5>쿠폰 시리얼 번호 입력</h5>
            <div class="coupon-num-area mt20 mb30">
                <input type="text">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <hr>
                <input type="text">
                <button type="button" class="btn btn-xs btn-p">입력하기</button>
            </div>
            <p>
                시리얼번호는 영문자+숫자의 조합이며, 총 16자리 입니다.<br>
                예) ABCD-AB12-CD34-12E3
            </p>
        </div>
    </div>
</body>
</html>
