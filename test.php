<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>부트스트랩 연습</title>

    <!-- 부트스트랩 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
      .div_h{
        height: 200px;
        border:1px solid black;
        }
      .div_sec{
        height: 200px;
        border:1px solid black;
      }
      @media(max-width: 767px){
        .div_sec{
          border-:1px solid black;
          display: none;
        }

      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
    	<div class="row" >
    		<div class="col-sm-3 div_sec">1</div>
    		<div class="col-sm-6 div_h">2</div>
        <div class="col-sm-3 div_sec">3</div>
    	</div>

      <div class="row">
        <div class="col-sm-6 div_h">4</div>
        <div class="col-sm-6 div_h">5</div>
      </div>
      <div class="row">
        <div class="col-sm-6 div_h">6</div>
        <div class="col-sm-6 div_h">7</div>
      </div>

      <div class="row">
        <div class="col-sm-8 div_h">8</div>
        <div class="col-sm-4 div_sec">9</div>
      </div>

    </div>
    

    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

