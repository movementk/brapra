<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/design/brapra/mobile/css/sub.css" rel="stylesheet">
<link href="/design/brapra/mobile/css/member.css" rel="stylesheet">
</head>
<body>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
<main class="content member">
    <div class="container">
         <div class="page-header">
             <h2>회원가입</h2>
             <hr>
         </div>
         <article class="join-terms">
             <nav class="step-menu">
                 <ul>
                     <li class="active"><i>01</i>.약관동의</li>
                     <li><i>02</i>.정보입력</li>
                     <li><i>03</i>.가입완료</li>
                 </ul>
             </nav>
             <div class="terms-privacy">
                 <div class="terms">
                     <input type="checkbox" id="terms" class="check">
                     <label for="terms">이용약관</label>
                     <p class="more">
                         <a href="#" class="btn" role="button">내용보기</a>
                     </p>
                 </div>
                 <div class="terms-content">
                     인터넷 쇼핑몰 『엠코르셋 주식회사 사이버 몰』회원 약관<br><br>
                     제1조(목적)<br>
                     이 약관은 엠코르셋 주식회사 회사(전자상거래 사업자)가 운영하는 엠코르셋 주식회사 사이버 몰(이하 “몰”이라 한다)에서 제공하는 인터넷 관련 서비스(이하 “서비스”라 한다)를 이용함에 있어 사이버 몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.
                 </div>
                 <div class="terms">
                     <input type="checkbox" id="privacy" class="check">
                     <label for="privacy">개인정보 수집 및 이용안내</label>
                     <p class="more">
                         <a href="#" class="btn" role="button">내용보기</a>
                     </p>
                 </div>
                 <div class="terms-content">
                     <div class="table-wrap">
                         <table class="table table-bordered">
                             <colgroup>
                                 <col style="width: 40px;">
                                 <col style="width: 115px;">
                                 <col style="width: 125px;">
                             </colgroup>
                             <tbody>
                                 <tr>
                                     <th>구분</th>
                                     <td>필수정보</td>
                                     <td>선택정보</td>
                                 </tr>
                                 <tr>
                                     <th>목적</th>
                                     <td>회원제 서비스 이용 /  본인확인</td>
                                     <td>마케팅 활용(이벤트, 맞춤형 광고)</td>
                                 </tr>
                                 <tr>
                                     <th>항목</th>
                                     <td>
                                         이름, 아이디, 비밀번호, 생일, 성별,
                                         이메일, 주소, 연락처, 휴대폰
                                     </td>
                                     <td>휴대폰, 이메일, 쿠키정보</td>
                                 </tr>
                                 <tr>
                                     <th>보유기간</th>
                                     <td>회원탈퇴 후 5일까지</td>
                                     <td>회원탈퇴 후 5일까지</td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <div class="terms">
                     <input type="checkbox" id="sms-email" class="check">
                     <label for="sms-email">마케팅 수신 동의 </label>
                     <p class="sms-email">
                         <input type="checkbox" class="check" id="email">
                         <label for="email">이메일</label>
                         <input type="checkbox" class="check" id="sms">
                         <label for="sms">SMS</label>
                     </p>
                 </div>
                 <div class="terms-assent">
                     쇼핑몰에서 제공하는 신상품 소식/ 할인쿠폰을 무상으로 보내드립니다!<br>
                     단, 상품 구매 정보는 수신동의 여부 관계없이 발송됩니다.<br>
                     <i>제공 동의를 하지 않으셔도 서비스 이용에는 문제가 없습니다.</i>
                 </div>
             </div>
             <div class="all-assent">
                 <input type="checkbox" class="check" id="all-assent">
                 <label for="all-assent">전체동의 합니다.</label>
             </div>
             <div class="btn-area">
                 <p>
                     <a href="#" class="btn btn-basics btn-default" role="button">취소</a>
                     <a href="#" class="btn btn-basics btn-pink" role="button">다음</a>
                 </p>
             </div>
         </article>
    </div>
</main>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
