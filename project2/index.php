<?
     include_once('_common.php')
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

    <title>행동하는성소수자인권연대</title>
    <!--[if lt IE 9]>
      <script src="js/html5.js"></script>
   <![endif]-->
    <link href="<?=G5_THEME_URL?>/css/common.css?ver=1" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="<?=G5_THEME_URL?>/css/jquery.bxslider.css">
    <link href="<?=G5_THEME_URL?>/css/style.css" rel="stylesheet" type="text/css">

    <script src="<?=G5_THEME_URL?>/js/jquery-3.1.1.min.js"></script>
    <script src="<?=G5_THEME_URL?>/js/jquery-ui.min.js"></script>
    <script src="<?=G5_THEME_URL?>/js/jquery.bxslider.js"></script>

    <script src="<?=G5_THEME_URL?>/js/main.js"></script>
</head>
<link rel="shortcut icon" href="<?=G5_THEME_URL?>/images/favicon_1.ico" type="image/x-icon"><!-- 파비콘 -->

<body>
    <div id="wrap">
        <div class="LeftWrap">
            <nav id="wrap_head">
              <a href="#" class="close1">X</a>
              <div id="head_title">
                  <p></p>
                  <p></p>
                  <p class="box1"><a href="#">로그인/회원가입</a></p>
              </div>
              <ul  id="btn1">
                <li><a href="#"><h3>소개</h3></a>
                    <ul class="sub">
                      <li>활동 원칙과 방향</li>
                      <li>비전 가치 미션</li>
                      <li>활동 연혁</li>
                      <li>정관 및 내규</li>
                      <li class="testclick"><a href=<?=G5_THEME_URL?>/sub.php>팀 / 소모임</a></li>
                      <li>about HAENGSEONGIN</li>
                   </ul>
                </li>
                 <li><a href="#"><h3>알림 및 자료</h3></a>
                     <ul class="sub">
                       <li>공지사항</li>
                       <li>성명 및 논평</li>
                       <li>취재인터뷰</li>
                       <li>발간자료</li>
                       <li>홍보게시판</li>
                    </ul>
                 </li>
                 <li><a href="#"><h3>활동 / 상담</h3></a>
                    <ul class="sub">
                      <li>활동일정</li>
                      <li>활동자료</li>
                      <li>인권상담방법</li>
                      <li>추모하며</li>
                   </ul>
                </li>
                <li><a href="#"><h3>회원가입 / 후원</h3></a>
                    <ul class="sub">
                      <li>회원가입</li>
                      <li>증액신청</li>
                   </ul>
                </li>
              </ul>
              <div id="head_footer">
                <a  href="#" title="복지정책">
                    <img src="<?=G5_THEME_URL?>/images/MENUBANNER.png" alt="복지정책">
                </a>
                <a  href="#" title="차별금지법">
                    <img src="<?=G5_THEME_URL?>/images/MENUBANNER2.PNG" alt="차별금지법">
                </a>

              </div>
            </nav> <!-- wrap_head -->
        </div> <!-- LeftWrap -->
        <header id="header">
            <div class="inner">
                <!-- 헤더 시작 -->
                <h1 class="logo"><a href="index.html"><img src="<?=G5_THEME_URL?>/images/logo.png" alt="로고"></a></h1>
                <nav id="nav">
                    <ul class="mainMenu">
                        <li><a href="#">소개</a>
                            <ul class="subMenu">
                                <li><a href="#">활동 원칙과 방향</a></li>
                                <li><a href="#">비전 가치 미션</a></li>
                                <li><a href="#">활동 연혁</a></li>
                                <li><a href="#">정관 및 내규</a></li>
                                <li class="testclick"><a href="<?=G5_THEME_URL?>/sub.php">팀 / 소모임</a></li>
                                <li><a href="#">about HAENGSEONGIN</a></li>
                            </ul>
                        </li>
                        <li><a href="#">알림 및 자료</a>
                            <ul class="subMenu">
                                <li><a href="#">공지사항</a></li>
                                <li><a href="#">성명 및 논평</a></li>
                                <li><a href="#">취재, 인터뷰 요청</a></li>
                                <li><a href="#">발간자료</a></li>
                                <li><a href="#">홍보게시판</a></li>
                            </ul>
                        </li>
                        <li><a href="#">활동 / 상담</a>
                            <ul class="subMenu">
                                <li><a href="#">활동일정</a></li>
                                <li><a href="#">활동자료</a></li>
                                <li><a href="#">인권상담방법</a></li>
                                <li><a href="#">추모하며</a></li>
                            </ul>
                        </li>
                        <li><a href="#">회원가입 / 후원</a>
                            <ul class="subMenu">
                                <li><a href="#">회원가입</a></li>
                                <li><a href="#">증액신청</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="nav">
                    <p class="search"><a href="#"><img src="<?=G5_THEME_URL?>/images/search.png"></a></p>
                    <p class="burger"><a href="#"><img src="<?=G5_THEME_URL?>/images/burger.png"></a></p>
                </div>
            </div>
        </header>
        <!-- 헤더 끝 -->
        <section id="section1">
            <div class="inner">
                <!-- css로 수정 -->
                <div class="bxslider">
                    <div>
                        <img src="<?=G5_THEME_URL?>/images/main_1.png" title="메인_1">
                    </div>
                    <div>
                        <img src="<?=G5_THEME_URL?>/images/main_2.png" title="메인_2">
                    </div>
                </div>
            </div>
        </section>
        <section id="section2">
            <div class="inner">
                <div class="section1_title">
                    <h3>Solidarity for LGBT Human Rights of Korea</h3>
                    <p>행동하는성소수자인권연대는 성소수자의 인권을 먼저 생각하고 행동하는 단체입니다.</p>
                </div>
                <!-- 공지사항 -->
                <div class="tabSet sec2_left">


                    <ul class="tabs">
                        <li><span span_name="#panel1-1" class="on">공지사항</span></li>
                        <li><span span_name="#panel1-2">보도자료</span></li>
                        <li><span span_name="#panel1-3">행사소식</span></li>
                    </ul>
                    <div class="panels">
                        <div class="panel" id="panel1-1">

                            <p class="blackbox"><span>13</span><br><span>2020 . 05</span></p>
                            <p class="txt1">행성인신입회원 디딤돌</p>
                            <p class="txt2">故 육우당 17주기 추모영상</p>
                            <p class="txt3">성소수자 혐오선동언론 OUT! 인증샷 캠페인</p>
                            <p class="txt4">2020년 행성인 정기 회원총회</p>

                        </div>
                        <div class="panel" id="panel1-2">

                            <p class="txt2">성소수자 축복했다고 재판 회부... 21세기 맞나요?</p>
                            <p class="txt3">'소수자 이해할 올바른 지도', 이게 왜 필요하냐면</p>
                            <p class="txt4">“나도 차별의 대상·소수자 될 수도”</p>
                            <p class="txt4">성 전환자, 우리 사회에서 트랜스젠더의 자리</p>

                        </div>
                        <div class="panel" id="panel1-3">

                            <p class="txt2">코로나 위기 속 복지 이야기</p>
                            <p class="txt3">BE THE 행성인 !</p>
                            <p class="txt4">스톤월부터 차별금지법까지 캠페인</p>
                            <p class="txt4">문제적 언론 시민제보</p>

                        </div>
                        <!-- /panels -->
                    </div>
                    <!-- /tabset -->
                </div>
                <div class="sec2_right">
                    <div class="bxslider2">
                        <div>
                            <img src="<?=G5_THEME_URL?>/images/mini_1.png" title="미니_1">
                        </div>
                        <div><img src="<?=G5_THEME_URL?>/images/mini_2.png" title="미니_2"></div>
                    </div>
                </div>

                <!--  버튼celar:both -->
                <div class="btn_set">
                    <div class="btn_1">
                        <h5>대관 안내</h5>
                        <p><a href="#">바로가기 ></a></p>
                        <img src="<?=G5_THEME_URL?>/images/btn_1.png">
                    </div>
                    <div class="btn_2">
                        <h5>성소수자 인권상담</h5>
                        <p><a href="#">바로가기 ></a></p>
                        <img src="<?=G5_THEME_URL?>/images/btn_2.png">
                    </div>
                    <div class="btn_3">
                        <h5>취재 인터뷰</h5>
                        <p><a href="#">바로가기 ></a></p>
                        <img src="<?=G5_THEME_URL?>/images/btn_3.png">
                    </div>
                    <div class="btn_4">
                        <h5>찾아오시는 길</h5>
                        <p><a href="#">바로가기 ></a></p>
                        <img src="<?=G5_THEME_URL?>/images/btn_4.png">
                    </div>
                </div>
                <ul>
                    <li></li>
                </ul>
            </div>
        </section>
        <section id="section3">
            <div class="inner">
                <div class="section3_title">
                    <h3>성소수자 차별없는 다른 세계를 꿈꾸는 레인보우 친구들</h3>
                    <p>행동하는 성소수자의 저항과 연대로 만드는 변화 여러분도 함께해요.</p>
                </div>
                
                    <ul class="imgset">
                        <li class="img1"><a href="#"><img src="<?=G5_THEME_URL?>/images/imgset_1.png" alt="대관안내"></a><p>대관안내</p></li>
                        <li class="img2"><a href="#"><img src="<?=G5_THEME_URL?>/images/imgset_2.png" alt="인권상담"></a><p>인권상담</p></li>
                        <li class="img3"><a href="#"><img src="<?=G5_THEME_URL?>/images/imgset_3.png" alt="취재인터뷰"></a><p>취재인터뷰</p></li>
                        <li class="img4"><a href="#"><img src="<?=G5_THEME_URL?>/images/imgset_4.png" alt="기부후원"></a><p>기부후원</p></li>
                    </ul>
                
            </div>
        </section>
        <footer id="footer">
            <div class="footerbg">
           <div class="inner">
            <ul class="agree">
                <li>이용약관</li>
                <li>개인정보처리방침</li>
                <li>이메일주소무단수집거부</li>
            </ul>
            <ul class="sns">
                <li><img src="<?=G5_THEME_URL?>/images/sns_1.png"></li>
                <li><img src="<?=G5_THEME_URL?>/images/sns_2.png"></li>
            </ul>
            <p>
                04136 서울시 마포구 대흥로20길 8 카리스 장원빌딩 401호<br>Tel. 02-715-9984 Fax. 02-334-9984 E-mail. lgbtpride@empas.com<br>CopyrigthⓒSolidarity for LGBT Humas Rights of Korea All right reserves.
            </p>
            </div>
        </div>
        </footer>
    </div>
</body></html>
