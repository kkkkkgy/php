<?php
//$dbname  = "phpproject";
//$connect = mysqli_connect("localhost", "root","", "phpproject");
//if (!$connect) {
//    die("서버와 연결 실패" . mysqli_connecet_error());
//}
//echo "서버와의 연결 성공!";
$sql = "CREATE DATABASE restaurant_review";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DMU 맛집 메뉴</title>
</head>
<style>
    img{
        padding-left: 20px;
    }
    ul{
        text-align: center;
        padding: 10px;
    }
    li{
        list-style: none;
        display: inline;
        padding: 0 0 50px 50px;
        font-size: 20px;
    }
    main{
        font-size: 20px;
    }
    #review{
        width : 500px;
        height : 500px;
    }
    nav{
    	background-color : deepskyblue;
    }
    header h1{
        padding-right: 5%;
    }
    aside{
        text-align: right;
    }
    #myform fieldset{
    display: inline-block; 
    direction: rtl; 
    border: 0; 
}
#myform fieldset legend{
    text-align: left;
}
#myform input[type=radio]{
    display: none; 
}
#myform label{
    font-size: 2em; 
    color: transparent; 
    text-shadow: 0 0 0 #f0f0f0; 
}
#myform label:hover{
    text-shadow: 0 0 0  yellow; 
}
#myform label:hover ~ label{
    text-shadow: 0 0 0  yellow; 
}
#myform input[type=radio]:checked ~ label{
    text-shadow: 0 0 0 yellow; 
}
#review_textarea {
    width: 100%;
    height: 100px;
    padding: 15px;
    box-sizing: border-box;
    border: solid 1.5px ;
    border-radius: 5px;
    font-size: 16px;
    resize: none;
}
</style>
<script>

</script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./page10.css">
 
</head>
<body>
<header><!--<a href="메인 html" --><img src="./img/symbol.jpg" width="80" align="left">
    <h1 align="center"><!--<a href="메인 html" -->DMU 맛집 메뉴</h1> <h5 align = "right"><a href="login.html"> 로그인</a> | <a href="signup.html"> 회원가입</a></h5>
</header>
<nav>
    <ul>
        <li><a href="page7.html">맛집 리스트</a></li>
        <li>|</li>
        <li>리뷰</li>
        <li>|</li>
        <li> <a href="page5.html">맛집제보</a></li>
    </ul>
</nav><!-- 수정x-->

<!--1 n건의 평가
    2 n.n점
    3 별점 및 리뷰  
    4 리뷰 내용 최신순 -->


<br><br><hr>
<h2>식당에 방문하셨다면</h2>

<form name="myform" id="myform" method="post" >
    <fieldset>
        <legend>별점을 남겨주세요</legend>
		<input type="radio" name="rating" value="5" id="rate1"><label for="rate1">⭐</label>
        <input type="radio" name="rating" value="4" id="rate2"><label for="rate2">⭐</label>
        <input type="radio" name="rating" value="3" id="rate3"><label for="rate3">⭐</label>
        <input type="radio" name="rating" value="2" id="rate4"><label for="rate4">⭐</label>
        <input type="radio" name="rating" value="1" id="rate5"><label for="rate5">⭐</label>
    </fieldset>
<br><br>
<div id="review_text">
    <P align="left">&nbsp; &nbsp;후기를 남겨주세요</P>
    <textarea class="review_text" type="text" id="review_textarea" 
              placeholder="후기를 작성해주세요"></textarea>
    <a href="page10.php"><button onclick="alert('제출완료')">제출</button></a>
 </div>
 
 <?php
$sql = "INSERT INTO restaurant_review(total_score, review)
        VALUES($('.checked').length, $('#textarea').val())";

     //if (mysqli_query($connect, $sql)) {
       // echo "레코드 추가 성공!";
    //} else {
      //  echo "레코드 추가 실패! : ".mysqli_error($connection);
    //}
   // mysqli_close($connection);
    ?>
</form>



