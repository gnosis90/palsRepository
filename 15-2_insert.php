<?php
 //mysql 접속하게 하는 소스를 php로 작성한 파일을 include 함.
 include_once "./15-1_connectDB.php";

 //입력할 데이터를 변수에 대입.
 $ourMemberId = 2;
 $userId      = "chesher";
 $name        = "손한선";
 $password    = "pal";
 $phone       = "010-0000-0000";
 $email       = "aa@naver.com";
 $gender      = "w";

 //쿼리문 작성
 $sql = "INSERT INTO ourpaldb.ourPalMember(userId, name, password, phone, email, gender, regTime)VALUES";
 $sql .= "('{$userId}','{$name}','{$password}','{$phone}','{$email}','{$gender}',NOW())";
  //쿼리문을 실행하여 DB로 값을 전송하고 전송값을  result 변수에 대입 함.
  $result = $dbConnect->query($sql);

  //데이터 입력이 완료되었는지를 확인 함.
  if($result){

    echo "데이터 입력 성공";
  }else{

    echo "데이터 입력 실패!";
  }
?>
