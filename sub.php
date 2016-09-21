<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link href="/design/brapra/css/style.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    <main id="content" class="sub"><!-- 대메뉴 또는 소메뉴별 클래스가 필요할 경우 이곳에 작성 -->
        <!-- 작업 영역 -->
        <div class="top-visual about">
            <div>
                <div class="container">
                    <h2 class="visual-title"><img src="/design/brapra/images/common/txt_about_underwear.png" alt="About Underwear"></h2>
                </div>
            </div>
        </div>
        <div class="page-header">
            <h2 class="page-title">베스트 제품</h2>
            <hr>
            <p>
                제품에 대한 상세한 설명과 후기를 남겨주세요!<br>
                한달에 한번! 우수/베스트 리뷰로 뽑히신 고객님들께 특별한 혜택을 드립니다.
            </p>
        </div>
        <!-- 서브 페이지 가이드 작성 영역 -->
        <div class="container">


            <h3>NAV [.nav-category]</h3>
            <ul class="nav nav-justified nav-category">
                <li><a href="#">category1</a></li>
                <li class="active"><a href="#">category2</a></li>
                <li><a href="#">category3</a></li>
                <li><a href="#">category4</a></li>
                <li><a href="#">category5</a></li>
                <li><a href="#">category6</a></li>
                <li><a href="#">category7</a></li>
                <li><a href="#">category8</a></li>
            </ul>

            <br>
            <br>
            <br>
            <br>
            <h3>NAV [.nav-mypage]</h3>
            <br>
            <ul class="nav nav-mypage mb40">    
                <li><a href="#">주문내역/배송조회</a></li>
                <li class="active"><a href="#">취소/교환/환불 조회</a></li>
                <li><a href="#">적립금 내역</a></li>
                <li><a href="#">할인쿠폰 내역</a></li>
                <li><a href="/#">위시리스트</a></li>
                <li><a href="#">최근 본 상품목록</a></li>
                <li><a href="#">상품Q&A</a></li>
                <li><a href="#">1:1 문의</a></li>
                <li><a href="#">회원정보수정</a></li>
                <li><a href="#">회원탈퇴</a></li>
            </ul>
<!-- 
            <ul class="nav nav-mypage mb40">   
                <li><a href="/mypage/myorder.php">주문내역/배송조회</a></li>
                <li class="active"><a href="/mypage/mycheck.php">취소/교환/환불 조회</a></li>
                <li><a href="/mypage/mymoney.php">적립금 내역</a></li>
                <li><a href="/mypage/mycoupon.php">할인쿠폰 내역</a></li>
                <li><a href="/mypage/mywishlist.php">위시리스트</a></li>
                <li><a href="/mypage/myprd.php">최근 본 상품목록</a></li>
                <li><a href="/mypage/prdqna.php">상품Q&A</a></li>
                <li><a href="/mypage/otoqna/list.php">1:1 문의</a></li>
                <li><a href="/mypage/mypwcheck.php">회원정보수정</a></li>
                <li><a href="/mypage/mymbleave.php">회원탈퇴</a></li>
            </ul>
             -->


            <br>
            <br>
            <br>
            <br>
            <h3>BUTTON [.btn]</h3>
            <br>
            <div class="btn-area">
                <label for="" style="width: 100px;">버튼</label>
                <a href="#" class="btn">a 태그 버튼</a>
                <button type="button" class="btn">button 태그 버튼</button>
            </div>
            <br>
            <div class="btn-area">
                <label for="" style="width: 100px;">버튼 기본</label>
                <a href="#" class="btn">a 태그 버튼</a>
                <a href="#" class="btn btn-p">a 태그 버튼</a>
                <a href="#" class="btn btn-d">a 태그 버튼</a>
                <a href="#" class="btn btn-l">a 태그 버튼</a>
                <div class="celarfix">
                <br>
                <label for="" style="width: 100px;"></label>
                <button type="button" class="btn">button 태그 버튼</button>
                <button type="button" class="btn btn-p">button 태그 버튼</button>
                <button type="button" class="btn btn-d">button 태그 버튼</button>
                <button type="button" class="btn btn-l">button 태그 버튼</button>
            </div>
            <br>
            <div class="btn-area">
                <label for="" style="width: 100px;">버튼 컬러</label>
                <a href="#" class="btn">.btn</a>
                <a href="#" class="btn btn-p">.btn-p</a>
                <a href="#" class="btn btn-d">.btn-d</a>
                <a href="#" class="btn btn-l">.btn-l</a>
            </div>
            <br>
            <div class="btn-area">
                <label for="" style="width: 100px;">버튼 사이즈</label> 
                <a href="#" class="btn">.btn</a>
                <a href="#" class="btn btn-p">.btn</a>
                <a href="#" class="btn btn-d">.btn</a>
                <a href="#" class="btn btn-l">.btn</a>
            </div>
            <br>
            <div class="btn-area">
                <label for="" style="width: 100px;"></label> 
                <a href="#" class="btn btn-sm">.btn-sm</a>
                <a href="#" class="btn btn-p btn-sm">.btn-sm</a>
                <a href="#" class="btn btn-d btn-sm">.btn-sm</a>
                <a href="#" class="btn btn-l btn-sm">.btn-sm</a>
            </div>
            <br>
            <div class="btn-area">
                <label for="" style="width: 100px;"></label> 
                <a href="#" class="btn btn-xs">.btn-xs</a>
                <a href="#" class="btn btn-p btn-xs">.btn-xs</a>
                <a href="#" class="btn btn-d btn-xs">.btn-xs</a>
                <a href="#" class="btn btn-l btn-xs">.btn-xs</a>
            </div>
            <br>
            <div class="btn-area pull-left">
                <label for="" style="width: 100px;">게시판 버튼</label> 
                <a href="#" class="btn btn-bo">수정</a>
                <a href="#" class="btn btn-bo">삭제</a>
                <a href="#" class="btn btn-bo">답변</a>
            </div>
            <div class="btn-area btn-area-sm pull-right">
                <a href="#" class="btn btn-d btn-bo">목록</a>
            </div>
            <div class="clearfix"></div>


            <br>
            <br>
            <br>
            <h3>INPUT</h3>
            <br>
            <div>
                <label for="">checkbox [.checkbox-d]</label>
                <input id="chbox1" class="checkbox-d" type="checkbox" />
                <label for="chbox1">Checkbox 1</label>
                <input id="chbox2" class="checkbox-d" type="checkbox" />
                <label for="chbox2">Checkbox 2</label>
            </div>
            <br>
            <div>
                <label for="">checkbox [.checkbox-d]</label>
                <input type="number" min="1" max="99" value="1" class="num-d">
            </div>

            <br>
            <br>
            <br>
            <br>
            <h3>SELECT BOX [.select-d]</h3>
            <br>
            <div class="select-d ss">
                <label for="" style="width: 100px;">smail short [.ss]</label>
                <select id=""  class="form-control" name="" placeholder="">
                    <option value="option1">option1</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                </select>
            </div>
            <br>
            <div class="select-d sw">
                <label for="" style="width: 100px;">smail wide [.sw]</label>
                <select id=""  class="form-control" name="" placeholder="">
                    <option value="option1">option1</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                </select>
            </div>
            <br>
            <br>
            <h3>SELECT BOX2 [.select-bo]</h3>
            <br>
            <div class="select-bo">
                <label for="" style="width: 100px;">in 세로 테이블</label>
                <select id=""  class="form-control" name="" placeholder="">
                    <option value="option1">선택하세요</option>
                    <option value="option2">option2</option>
                    <option value="option3">option3</option>
                </select>
            </div>
            <br>
            <div class="search-area form-inline mb30">
                <label for="" style="width: 100px; float:left; text-align: left;">search box [.search-area]</label>
                <div class="select-d form-group">
                    <select id=""  class="form-control" name="" placeholder="">
                        <option value="option1">option1</option>
                        <option value="option2">option2</option>
                    </select>
                </div>
                <input type="text" class="form-control">
                <button type="button" class="form-control btn"><img src="/design/brapra/images/common/icon_search.png" alt="" class="search"></button>
            </div>

            
            <br>
            <br>
            <br>
            <br>
            <h3>SUB TITLE in SUB CONTENT</h3>
            <br>
            <h2 class="sub-title">기본 [.sub-title]</h2>
            <hr>
            <br>
            <h2 class="sub-title ar">왼쪽정렬 [.sub-title.ar]</h2>
            <hr>

            <br>
            <br>
            <h3>LIST</h3>
            <br>
            <ul class="ullist">
                <li>자주 사용되는 ul list [.ullist]</li>
                <li>자주 사용되는 ul list [.ullist]</li>
            </ul>

            <br>
            <br>
            <h3>BORDER GRID BOX [.gridbox-area]</h3>
            <br>
            <div class="gridbox-area">
                <div class="grid">
                    <div class="in-box">
                        grid box style
                    </div>
                </div>
            </div>

            <br>
            <br>
            <h3>BORDER GRID BOX [.gridbox-area.grid2]</h3>
            <br>
            <div class="gridbox-area grid2">
                <div class="grid">
                    <div class="in-box">
                        grid box style
                    </div>
                </div>
                <div class="grid">
                    <div class="in-box">
                        grid box style
                    </div>
                </div>
            </div>


            <br>
            <br>
            <h3>BACKGROUND TAB [.mytab-area]</h3>
            <br>
            <div class="mytab-area">
                <div class="pull-left">
                    <img src="/design/brapra/images/mypage/icon_vip.png" class="icon" alt="">
                    <ul>
                        <li>title</li>
                        <li><img src="/design/brapra/images/mypage/icon_vip_text.png" alt="My member class"></li>
                    </ul>
                </div>
                <div class="pull-right">
                    <img src="/design/brapra/images/mypage/icon_discount_coupon.png" class="icon" alt="My discount coupon">
                    <ul>
                        <li>title</li>
                        <li><span>point</span>text</li>
                    </ul>
                </div>
                <div class="pull-right">
                    <img src="/design/brapra/images/mypage/icon_database.png" class="icon" alt="My member money">
                    <ul>
                        <li>title</li>
                        <li><span>point</span>text</li>
                    </ul>
                </div>
            </div>



            <br>
            <br>
            <h3>TABLE [.table]</h3>
            <br>
            <label for="">세로 테이블  [.table-throw]</label>
            <table class="table table-throw">
                <colgroup>
                    <col style="width: 210px">
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th scope="row">항목1</th>
                        <td>내용1</td>
                    </tr>
                    <tr>
                        <th scope="row">항목2</th>
                        <td>내용2</td>
                    </tr>
                    <tr>
                        <th scope="row">항목3</th>
                        <td>내용3</td>
                    </tr>
                </tbody>
            </table>





            <br>
            <br>
            <label for="">리스트 테이블  [.table-dlist]</label>
            <br>
            <label for="">            type01</label>
            <table class="table table-dlist">
                <colgroup>
                    <col class="no">
                    <col class="subject">
                    <col class="score">
                    <col class="writer">
                    <col class="date">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>평점</th>
                        <th>작성자</th>
                        <th>작성일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td><a href="#">제목2</a></td>
                        <td>
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star.png" alt="score">
                        </td>
                        <td>김지은</td>
                        <td>2016.02.07</td>
                    </tr>
                    <tr class="">
                        <td colspan="5"><strong>상품후기</strong> 리스트 테이블</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="#">제목1</a></td>
                        <td>
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star.png" alt="score">
                        </td>
                        <td>이영희</td>
                        <td>2016.02.07</td>
                    </tr>
                    <tr class="hidden">
                        <td colspan="5">내용 </td>
                    </tr>
                </tbody>
            </table>
            <div class="pull-right btn-area mb80">
                <a href="#" class="btn btn-sm btn">전체후기보기</a>
                <a href="#" class="btn btn-sm btn-p">후기쓰기</a>
            </div>
            <div class="clearfix"></div>



            <label for="">            type02 (tablist 구조)</label>
            <table class="table table-dlist">
                <colgroup>
                    <col class="no">
                    <col class="subject">
                    <col class="score">
                    <col class="writer">
                    <col class="date">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>평점</th>
                        <th>작성자</th>
                        <th>작성일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="panel-heading" role="tab" id="pheading-2">
                        <td>2</td>
                        <td>
                            <a class="collapsed" data-toggle="collapse" data-parent=".table-tablist" href="#post-2" aria-expanded="false" aria-controls="post-2">제목2</a>
                        </td>
                        <td>
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star.png" alt="score">
                        </td>
                        <td>김지은</td>
                        <td>2016.02.07</td>
                    </tr>
                    <tr class="panel-collapse collapse" id="post-2" role="tabpanel" aria-labelledby="pheading-2">
                        <td colspan="5"><strong>상품후기</strong> 리스트 테이블</td>
                    </tr>
                    <tr class="panel-heading" role="tab" id="pheading-1">
                        <td>1</td>
                        <td>
                            <a class="collapsed" data-toggle="collapse" data-parent=".table-tablist" href="#post-1" aria-expanded="false" aria-controls="post-1">제목1</a>
                        </td>
                        <td>
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star.png" alt="score">
                        </td>
                        <td>이영희</td>
                        <td>2016.02.07</td>
                    </tr>
                    <tr class="panel-collapse collapse" id="post-1" role="tabpanel" aria-labelledby="pheading-1">
                        <td colspan="5">내용 </td>
                    </tr>
                </tbody>
            </table>
            <div class="pull-right btn-area mb80">
                <a href="#" class="btn btn-sm btn">전체후기보기</a>
                <a href="#" class="btn btn-sm btn-p">후기쓰기</a>
            </div>
            <div class="clearfix"></div>

            
            <table class="table table-dlist">
                <colgroup>
                    <col class="no">
                    <col class="subject">
                    <col class="writer">
                    <col class="date">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>작성일</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td><a href="#">제목</a></td>
                        <td>김지은</td>
                        <td>2016.02.07</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="/design/brapra/images/common/icon_reply.png" alt="reply" class="icon-reply"><a href="#"><strong>상품문의</strong> 리스트 테이블</a></td>
                        <td>브리프라</td>
                        <td>2016.02.07</td>
                    </tr>
                </tbody>
            </table>
            <div class="pull-right btn-area mb80">
                <a href="#" class="btn btn-sm btn">전체문의보기</a>
                <a href="#" class="btn btn-sm btn-p">문의하기</a>
            </div>
            <div class="clearfix"></div>


            <br>
            <br>
            <label for="">이미지 리스트 테이블  [.table-thumlist]</label>
            <table class="table table-thumlist">
                <colgroup>
                    <col class="no">
                    <col class="prd-thumnail">
                    <col class="subject">
                    <col class="score">
                    <col class="writer">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제품</th>
                        <th>제목</th>
                        <th>평점</th>
                        <th>작성자</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="/design/brapra/images/community/project_thumnail1.jpg" alt="Product Thumnail Image">
                        </td>
                        <td>
                            <a href="#">
                                <div><span class="bracket">Wonderbra</span> 원더브라 Premium volume 아이보리 2종 WBW6F75_T</div>
                                <p>테스트 (Thumnail image size: 80x80)</p>
                            </a>
                        </td>
                        <td>
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star.png" alt="score">
                        </td>
                        <td>김유림</td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-thumlist thumimg-xs">
                <colgroup>
                    <col class="no">
                    <col class="prd-thumnail">
                    <col class="subject">
                    <col class="score">
                    <col class="writer">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제품</th>
                        <th>제목</th>
                        <th>평점</th>
                        <th>작성자</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="/design/brapra/images/community/project_thumnail1.jpg" alt="Product Thumnail Image">
                        </td>
                        <td>
                            <a href="#">
                                테스트 (Thumnail image size: 50x50)
                            </a>
                        </td>
                        <td>
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star_a.png" alt="score">
                            <img src="/design/brapra/images/common/icon_star.png" alt="score">
                        </td>
                        <td>김유림</td>
                    </tr>
                </tbody>
            </table>




            <br>
            <br>
            <label for="">VIEW 테이블  [.table-dview]</label>
            <table class="table table-dview">
                <colgroup>
                    <col>
                    <col style="width: 150px">
                </colgroup>
                <thead>
                    <tr>
                        <th>제목</th>
                        <th>2016.09.14</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">
                            <img src="http://placehold.it/990x200" alt="">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area pull-left">
                <a href="#" class="btn btn-bo">수정</a>
                <a href="#" class="btn btn-bo">삭제</a>
                <a href="#" class="btn btn-bo">답변</a>
            </div>
            <div class="btn-area btn-area-sm pull-right">
                <a href="#" class="btn btn-d btn-bo">목록</a>
            </div>
            <div class="clearfix"></div>

            <br>
            <br>
            <br>
            <label for="">POST VIEW 테이블  [.table-postview]</label>
            <table class="table table-postview">
                <colgroup>
                    <col>
                    <col style="width: 130px">
                    <col style="width: 140px">
                </colgroup>
                <thead>
                    <tr>
                        <th><span class="bracket">배송문의</span>배송 관련 문의합니다~</th>
                        <th>김유림</th>
                        <th>2016.09.14</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">
                            <p>
                                제품 구매했는데요~~ 배송은 언제쯤 가능할까요?<br>
                                제가 지방으로 출장갈것 같아서 그전에 미리 받았으면 합니다~<br>
                                이번주 금요일까지 꼭 좀 부탁드려요~~<br>
                                감사합니다!
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-area pull-left">
                <a href="#" class="btn btn-bo">수정</a>
                <a href="#" class="btn btn-bo">삭제</a>
                <a href="#" class="btn btn-bo">답변</a>
            </div>
            <div class="btn-area btn-area-sm pull-right">
                <a href="#" class="btn btn-d btn-bo">목록</a>
            </div>
            <div class="clearfix"></div>


            <div class="comment-area mt60">
                <div class="comment-input form-inline">
                    <input type="text" class="form-control">
                    <button type="button" class="form-control btn btn-sm btn-p">확인</button>
                </div>
                <div class="comment-row form-inline">
                    <div class="info">
                        <span class="writer">브라프라</span>
                        <span class="<data></data>">2016.02.07</span>
                        <ul class="pull-right">
                            <li><a href="#">답글</a></li>
                            <li><a href="#">수정</a></li>
                            <li><a href="#">삭제</a></li>
                        </ul>
                    </div>
                    <p>댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요. </p>
                </div>
                <div class="comment-row form-inline reply">
                    <div class="info">
                        <span class="writer">브라프라</span>
                        <span class="<data></data>">2016.02.07</span>
                        <ul class="pull-right">
                            <li><a href="#">답글</a></li>
                            <li><a href="#">수정</a></li>
                            <li><a href="#">삭제</a></li>
                        </ul>
                    </div>
                    <p>댓글을 입력하세요. 댓글을 입력하세요. 댓글을 입력하세요. </p>
                </div>
            </div>









            <br>
            <br>
            <br>
            <br>
            <br>
            <h3>PRODUCT LIST [.prd-list]</h3>
            <br>
            <ul class="prd-list">
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/bra/bra_product01.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 핑크<br>브라팬티 2종세트 BW5G09_T</p>
                            <p class="price">83,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/bra/bra_product02.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 핑크<br>브라팬티 2종세트 BW5G09_T</p>
                            <p class="price">83,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/bra/bra_product03.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 핑크<br>브라팬티 2종세트 BW5G09_T</p>
                            <p class="price">83,000</p>
                        </div>
                    </a>
                </li>
                <li class="prd">
                    <a href="#">
                        <div class="img-area">
                            <img src="/design/brapra/images/bra/bra_product04.jpg" alt="">
                        </div>
                        <div class="info-area text-center">
                            <p class="title">컴포트 누디 노와이어 핑크<br>브라팬티 2종세트 BW5G09_T</p>
                            <p class="price">83,000</p>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>

            <br>
            <br>
            <br>
            <br>
            <h3>PAGEING</h3>
            <div class="pagination-area mt50 mb80">
                <ul class="pagination">
                    <li><a href="#"><img src="/design/brapra/images/common/icon_angle_left.png" alt="prev page"></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><img src="/design/brapra/images/common/icon_angle_right.png" alt="next page"></a></li>
                </ul>
            </div>


        </div>
        <!-- // 서브 페이지 가이드 작성 영역 -->
        <!-- // 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>
