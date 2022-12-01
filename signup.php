<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>회원가입</title>
</head>
<style>
  <?php include "header.css"?>
  main{
    font-size: 20px;
    text-align: center;
  }
  main input{
    font-size: 15px;
  }

</style>
<script>
  function OnlyNumericInput(event) {
    if ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96
                    && event.keyCode <= 105) || event.keyCode == 190 || event.keyCode == 110
            || event.keyCode == 8) {
      return true;
    } else {
      event.returnValue = false;
    }
  }
</script>
<body>
<?php include "header.html"?>
<main>
<h1 style="text-align: left; padding-left: 32.5%">회원가입</h1>
  <hr width="35%">
  <p>
  동양미래대학교 맛집 추천사이트에 오신 것을 환영합니다!
  </p>
  <br>
  <p>
  <form name = "signup" method="get" >
    <input type="text" id = "ID" value="아이디(학번)" style="margin-left: 73px" onkeydown="OnlyNumericInput(event)"
           onclick="document.getElementById('ID').value = null;"> <!-- 숫자만 입력, 클릭시 초기화-->
    <input type="button" id = "ID_check" value="중복확인" id="button1"><br>
    <input type="text" id = "pwd" value="비밀번호" onclick ="document.getElementById('pwd').value = null;"><br>
    <input type="text" id = "pwd_check" value="비밀번호 확인" onclick= "document.getElementById('pwd_check').value = null;"><br>
    <input type="submit" id = "signup" value="회원가입" style="size: 30px">
  </p>
  </form>
</main>

</body>
</html>