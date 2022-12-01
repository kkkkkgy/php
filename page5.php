<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DMU 맛집 제보</title>
</head>
<style>
    <?php include "header.css"; // 헤더 css?>

    input{
        font-size: 15px;
    }
    main{
        font-size: 20px;
    }
    #review{
        width : 500px;
        height : 500px;
    }
    #image_container{
        width: 10%;
    }
</style>
<script>
        function setThumbnail(event) {
        var reader = new FileReader();
        reader.onload = function(event) {
        var img = document.createElement("img");
        img.setAttribute("src", event.target.result);
        document.querySelector("div#image_container").appendChild(img);

    };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<body>
<?php include "header.html" //헤더 html?>
<main>
  	<form name="page5" action ="page5_result.php" method = "post">
  	<p>맛집이름<br>
    <input type="text" name = food_name><br>
    음식분야<br>
    <select>
        <option value="한식">한식</option>
        <option value="중식">중식</option>
        <option value="일식">일식</option>
        <option value="양식">양식</option>
        <option id="ETC" value="기타">기타</option>
    </select>
    <input type="text" id = "food_field" value="기타"><br>
    개인적인 평점 및 리뷰<br>
    <input type="textarea" name = personal_review id = "review" ><br>
    </p>
        <p align="right">지도<br>
        메뉴판<br>
    <input type = "file" id = image_menu accept="image/*" onchange="setThumbnail(event)"><br>
        <div id = "image_container"></div> <!--중복오류 무시-->
        음식사진<br>
        <input type = "file" id = food_menu accept="image/*" onchange="setThumbnail(event)"><br>
        <div id = "image_container"></div>
    </form>
        <input type = submit value = "작성완료">
	</form>
</main>
</body>
</html>