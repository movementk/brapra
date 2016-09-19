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
         <article class="join">
             <nav class="step-menu">
                 <ul>
                     <li><i>01</i>.약관동의</li>
                     <li class="active"><i>02</i>.정보입력</li>
                     <li><i>03</i>.가입완료</li>
                 </ul>
             </nav>
             <div class="table-wrap">
                 <table class="table table-bordered">
                     <colgroup>
                         <col style="width: 80px;">
                         <col style="width: 220px;">
                     </colgroup>
                     <tbody>
                         <tr>
                             <th><label for="user-id">아이디</label></th>
                             <td class="user-id">
                                 <input type="text" class="form-control" id="user-id" placeholder="TEST">
                                 <p class="table-btn">
                                     <a href="#" class="btn btn-id-check" role="button">아이디 중복확인</a>
                                 </p>
                             </td>
                         </tr>
                         <tr>
                             <th><label for="user-pw">비밀번호</label></th>
                             <td>
                                 <input type="password" class="form-control" id="user-pw">
                                 <p class="attention">영문 대소문자/숫자/특수문자 혼영하여 10~16자</p>
                             </td>
                         </tr>
                         <tr>
                             <th><label for="pw-check">비밀번호 확인</label></th>
                             <td><input type="password" class="form-control" id="pw-check"></td>
                         </tr>
                         <tr>
                             <th><label for="user-name">이름</label></th>
                             <td><input type="text" class="form-control" id="user-name"></td>
                         </tr>
                         <tr>
                             <th>생년월일</th>
                             <td class="birth">
                                 <select class="form-control">
                                     <option value="">1986</option>
                                     <option value="">1987</option>
                                     <option value="">1988</option>
                                     <option value="">1989</option>
                                     <option value="">1990</option>
                                     <option value="">1991</option>
                                 </select>
                                 년
                                 <select class="form-control">
                                     <option value="">1</option>
                                     <option value="">2</option>
                                     <option value="">3</option>
                                     <option value="">4</option>
                                 </select>
                                 월
                                 <select class="form-control">
                                     <option value="">1</option>
                                     <option value="">2</option>
                                     <option value="">3</option>
                                     <option value="">4</option>
                                 </select>
                                 일
                                 <div class="sex">
                                     <input type="radio" id="man" class="radio">
                                     <label for="man">남</label>
                                     <input type="radio" id="woman" class="radio">
                                     <label for="woman">여</label>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <th><label for="addr">주소</label></th>
                             <td class="addr">
                                 <input type="text" class="form-control" id="addr">
                                 <p class="table-btn">
                                     <a href="#" class="btn btn-addr" role="button">우편번호 검색</a>
                                 </p>
                                 <input type="text" class="form-control" id="addr-2">
                                 <label for="addr-2" class="sr-only">기본주소</label>
                                 <input type="text" class="form-control" id="addr-3">
                                 <label for="addr-3" class="sr-only">상세주소</label>
                             </td>
                         </tr>
                         <tr>
                             <th><label for="email">이메일</label></th>
                             <td class="email">
                                 <input type="email" class="form-control" id="email">
                                 <div class="receive">
                                     <input type="radio" id="email-receive" class="radio">
                                     <label for="email-receive">E-mail 수신</label>
                                     <input type="radio" id="not-email-receive" class="radio">
                                     <label for="not-email-receive">E-mail 수신안함</label>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <th><label for="phone">핸드폰</label></th>
                             <td class="phone">
                                 <input type="email" class="form-control" id="phone">
                                 <div class="receive">
                                     <input type="radio" id="phone-receive" class="radio">
                                     <label for="phone-receive">SMS 수신</label>
                                     <input type="radio" id="not-phone-receive" class="radio">
                                     <label for="not-phone-receive">SMS 수신안함</label>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <th><label for="recommend">추천인</label></th>
                             <td><input type="text" class="form-control" id="recommend"></td>
                         </tr>
                     </tbody>
                 </table>
             </div>
             <div class="btn-area">
                 <p>
                     <a href="#" class="btn btn-basics btn-default" role="button">이전</a>
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
