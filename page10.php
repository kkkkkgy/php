
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DMU 맛집 메뉴</title>
</head>

<style>
<?php include "header.css"?>
    
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
#review {
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
<?php include "header.html"?>


<!--1 n건의 평가
    2 n.n점
    3 별점 및 리뷰  
    4 리뷰 내용 최신순 -->


<br><br><hr>
<h2>&nbsp;식당에 방문하셨다면</h2>

<form name="myform" id="myform" method="post" action="page10.php" >
    <fieldset>
        <legend>별점을 남겨주세요</legend>
		<input type="radio" name="rating" value="5" id="rate1"><label for="rate1">⭐</label>
        <input type="radio" name="rating" value="4" id="rate2"><label for="rate2">⭐</label>
        <input type="radio" name="rating" value="3" id="rate3"><label for="rate3">⭐</label>
        <input type="radio" name="rating" value="2" id="rate4"><label for="rate4">⭐</label>
        <input type="radio" name="rating" value="1" id="rate5"><label for="rate5">⭐</label>
    </fieldset>
    <br><br>&nbsp; &nbsp;후기를 남겨주세요 <br><br>
<textarea rows="5" cols="60" name="review" placeholder="내용을 작성해주세요"></textarea>
    <br>
    <input type="submit" value="제출">

<?php
$total_score = $_POST["rating"]; 

if ($total_score == "5") 
$total_score = "⭐";
else if ($total_score == "4")
$total_score = "⭐⭐";
else if ($total_score == "3")
    $total_score = "⭐⭐⭐";
else if ($total_score == "2")
    $total_score = "⭐⭐⭐⭐";
else if ($total_score == "1")
    $total_score = "⭐⭐⭐⭐";
?>
<br><br><br><hr>
<h2>&nbsp;후기:</h2>
<ul>
    <li>별점: <?= $total_score?></li>
    </ul>
<?php
$review = $_POST["review"]; 
?>
<ul>
<li>글 내용 : <?= $review?></li> 
</ul> 

</form>



