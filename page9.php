<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--border- radius aa/bb px -->
<style>
 
    .container{
        width:1300px;
        height: 650px;
        display: flex;
        
        margin: 20px auto;
     <!--   background-color: skyblue;-->
        border-radius: 30px/30px;

    }
    .con{
        margin: auto;
        
        border-radius: 30px/30px;
    }
    .con.left{
        width: 690px;
        height: 600px;
        background-color: #47B5FF;
        border: 3px; border-style: solid;
        
    }
    .con.right{
        width: 400px;
        height: 500px;
        background-color: #47B5FF;
        border: 3px; border-style: solid;
    }

    .res{
        border-radius: 20px/20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .res.name{
        width: 690px;
        height: 100px;
        text-align: center; font-size: 30px;
        margin-top: 15px; margin-bottom: 15px;

        background-color: #DFF6FF;
    }
    .res.menu{
        width: 690px;
        height: 300px;
        background-color: #DFF6FF;
        margin-bottom: 15px;
    }
    .res.review{
        width: 690px;
        height: 150px;
        background-color: #DFF6FF;
    }

    
</style>


</head>

<body>
    <?php include "header.php"; ?>

    <div class="container">
        <div class="con left">
            <div class="res name">식당이름
            <?php   //
                   	$dbname  = "phpproject";
                    $connect = mysqli_connect("localhost", "root","", "phpproject");

                    $sql = "SELECT food_name FROM restaurant_review";
                    $result = mysqli_query($connect, $sql);

                    $row = mysqli_fetch_array($result);
                    
                    while($row = mysqli_fetch_array($result)){
                        echo "<h1>$row["food_name"]<h1>";
                        
                        
                        
                    }

                 ?>
            </div>


            <div class="res menu">
                <div class="res img">
                    
                    <figure>
                    <figcaption>메뉴판</figcaption>
                    <img src="#" alt="식당메뉴판">
                    </figure>
                </div>
                <div class="res bestimg">
                <figure>
                    <figcaption>메뉴판</figcaption>
                    <img src="#" alt="식당 대표메뉴" width="400px" height="300px"> 
                    </figure> 
                </div>
            </div>
            <div class="res review" style="overflow-y:scroll;">
                리뷰

                <?php   //
                   	$dbname  = "phpproject";
                    $connect = mysqli_connect("localhost", "root","", "phpproject");

                    $sql = "SELECT review FROM restaurant_review";
                    $result = mysqli_query($connect, $sql);

                    $row = mysqli_fetch_array($result);
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){
                        echo $row[$i]."번째 리뷰";
                        echo "<br>";
                        echo $row['review'];
                        echo "<hr>";
                        $i++;
                    }

                 ?>
            </div>
        </div> <!--con left end-->
        
        <div class="con right">
            <div class="res map">
          

                  <!--  <h2>지도 가져오기</h2> -->
                    <input type="hidden" id="map_x" value=""/>
                    <input type="hidden" id="map_y" value=""/>
                    <input type="text" id="sample5_address" placeholder="주소">
                    <input type="button" onclick="sample5_execDaumPostcode()" value="주소 검색"><br>
                    <div id="map" style="width:500px;height:400px;margin-top:10px;display:none"></div>

                    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
                    <script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=78099b38c2914d7f3402951ca6829056&libraries=services"></script>
                    <script>
                        var mapContainer = document.getElementById('map'), // 지도를 표시할 div
                            mapOption = {
                                center: new daum.maps.LatLng(37.537187, 127.005476), // 지도의 중심좌표
                                level: 5 // 지도의 확대 레벨
                            };

                        //지도를 미리 생성
                        var map = new daum.maps.Map(mapContainer, mapOption);
                        //주소-좌표 변환 객체를 생성
                        var geocoder = new daum.maps.services.Geocoder();
                        //마커를 미리 생성
                        var marker = new daum.maps.Marker({
                            position: new daum.maps.LatLng(37.537187, 127.005476),
                            map: map
                        });


                        function sample5_execDaumPostcode() {
                            new daum.Postcode({
                                oncomplete: function(data) {
                                    var addr = data.address; // 최종 주소 변수

                                    // 주소 정보를 해당 필드에 넣는다.
                                    document.getElementById("sample5_address").value = addr;
                                    // 주소로 상세 정보를 검색
                                    geocoder.addressSearch(data.address, function(results, status) {
                                        // 정상적으로 검색이 완료됐으면
                                        if (status === daum.maps.services.Status.OK) {

                                            var result = results[0]; //첫번째 결과의 값을 활용

                                            // 해당 주소에 대한 좌표를 받아서
                                            var coords = new daum.maps.LatLng(result.y, result.x);
                                            document.getElementById("map_y").value = result.y;
                                            document.getElementById("map_x").value = result.x;
                                            // 지도를 보여준다.
                                            mapContainer.style.display = "block";
                                            map.relayout();
                                            // 지도 중심을 변경한다.
                                            map.setCenter(coords);
                                            // 마커를 결과값으로 받은 위치로 옮긴다.
                                            marker.setPosition(coords)
                                        }
                                    });
                                }
                            }).open();
                        }
                    </script>
            </div>
        </div><!--container right end-->
    </div> <!--container end-->
   

</body>
</html>