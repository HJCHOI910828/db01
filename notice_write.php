<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>부트스트랩 101 템플릿</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>   /*<!-- 스마트폰 모드에서는 1,3,5는 안보이게 2(글제목),4(작성일)만 보이게하기 -->*/
      @media (max-width:767px){
        .table tr:not(:nth-last-child(-n+1))>td:nth-child(1){
          display:none;
        }
      }  /*끝에서(-n) 두번째까지(+2)는 display:none하지마라 => 공지사항추가와 페이지 부분*/

    </style>

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <!-- 네비게이션바 시작 -->
      <nav class="navbar navbar-default navbar-fixed-top"> <!--  navbar-fixed top 메뉴바 고정 -->
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img src="imgs/logo.png">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <!--  onclick="$('#about').animatescroll();"   -> about 클릭시 about 영역으로-->
        <li><a href="about.php">About</a></li> 
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="Contact.php">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      <!-- 네비게이션바 끝 -->
      <div class="container logbar">Login | SignUp</div>
      <form name="frm1" method="post" action="notice_write_ok.php">
      <div class="container">
        <h4>공지사항 작성</h4>
        <table class="table table-bordered">
          <tr>
            <td>작성자</td>
            <td><input type="text" class="form-control" placeholder="작성자" name="writer"></td>
          </tr>
          <tr>
            <td>글제목</td>
            <td><input type="text" class="form-control" placeholder="글제목" name="title"></td>
          </tr>
          <tr>
            <td>글내용</td>
            <td><textarea class="form-control" rows="5" placeholder="글내용" name="content"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="button" value="작성완료" class="btn btn-primary" onclick="send()">
              <input type="button" class="btn btn-primary" value="목록가기" onclick="back()">
            </td>
          </tr>          
        </table>
      </div>
      </form>
        <!-- footer start -->
        <div class="gap"></div>
        <header class="content1">
          <div class="container">
            All rights reserved by 9pixelstudio since 2021.
          </div>
        </header>
        <!-- footer end -->
 
 <!-- 안녕얘들아
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      잘 있었니....<br>
      화이팅!! -->

    </div> <!-- container-fluid -->

    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery.fancybox.js"></script> -->
    <script src="js/animatescroll.min.js"></script>
    <script>
      $(".carousel").carousel({
        interval:2000
      });

      function send(){
        if(frm1.title.value==""){
          alert("제목을 입력하세요");
          frm1.title.focus();
          return false;
        }
        if(frm1.content.value==""){
          alert("내용을 입력하세요");
          frm1.content.focus();
          return false;
        }
        document.frm1.submit();
      }
      function back(){
        history.back();
      }
    </script>
  </body>
</html>

