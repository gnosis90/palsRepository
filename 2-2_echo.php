<?php
//코드작성
  //이벤트 관련
  //      시간, 분, 초, 월, 분, 년
  $startTime = mktime(9 , 00, 00, 12, 01, 2018);  //시작 시간 설정.
  $endTime   = mktime(18, 00, 00, 12, 31, 2018);  //종료 시간 설정.

  if($startTime <= time() && $endTime > time()){

    echo "이벤트에 참여하세요.";
  }else if($startTime > time()){

    //echo "이벤트 시작 전입니다.";
  }else if($endTime < time()){

    echo "이벤트가 종료되었습니다.";
  }

  function hello($name){
    echo "hello ".$name;;
  }

  hello("Gang Ryun Ji"); //hello Gang Ryun ji
  ini_set('date.timezone','Asia/Seoul');
  echo '로그인한 시간으로부터 '.time().'초가 지났습니다.';

  echo "현재 시간은 ".date("Y년 m월 d일 H시 i분 s초", time());
?>
