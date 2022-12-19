<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>DMU 맛집 제보</title>
</head>
<style>
    <?php include "header.css" ?>
    main{
        padding-top: 150px;
        font-size: 20px;
        text-align: center;
    }
    input{
        font-size: 15px;
    }
    #login_submit {
        font-size: 20px;
    }
    #signup_submit{
        font-size: 20px;
    }
    main{
        padding-top: 0;
    }
    .rounded {
          background: silver;
          height: 50px; width: 200px;
          border-radius: 15px;
          line-height: 1rem;
        }
         
        #title{
            position: relative;
            margin-left: 25%;
            margin-bottom: 30px;
        }
        #account{
            position: relative;
            float: right;
            margin-right: 35%;
            transform:translateY(-80%);
        }
        #table0{
            width: 70%;
            height: 50px;
            border: 1px solid skyblue;
            border-collapse: collapse;
            


        }
        th,.th3,#th3{
            background-color: skyblue;
            text-align: center;
        }
        #th3{
           
            text-align: center;
        }
       .contents{
        display: inline-block;
       width: 70%;
       }
       #conleft{
        border: 1px solid black;
        border-radius: 15px;
        width:15%;
        height:300px;
        margin-right: 30px;
        margin-left: 30px;
        background-color: #c8c8c8;
        box-shadow: 3px 3px 3px 3px gray;
       }
       #concenter{
        width:25%;
        height:300px;
       }
       #concenter1{
        border: 1px solid black;
        border-radius: 15px;
        box-shadow: 3px 3px 3px 3px gray;
        height:200px;
        margin-bottom: 10px;
        background-color: #c8c8c8;
       }
       #concenter2{
        border: 1px solid black;
        border-radius: 15px;
        background-color: #c8c8c8;
        height:90px;
        box-shadow: 3px 3px 3px 3px gray;
       }
       #conright{
        border: 1px solid black;
        border-radius: 15px;
        width:20%;
        height:300px;
        margin-right: 30px;
        background-color: #c8c8c8;
        margin-left: 30px;
        box-shadow: 3px 3px 3px 3px gray;
       }
    </style>
</head>
<body>
<?php include "header.html"; ?>
<main>

    
    <!-- 맛집리스트, 리뷰, 맛집 제보 -->
    
    <br><br><br>

 
    <div class="contents" id="conleft">
        
    </div>
   
    <div class="contents" id="concenter">
        <div id="concenter1">  </div>
        <div id="concenter2">  </div>

    </div>
   
    <div class="contents" id="conright">

    </div>
 
 </main>
 
 
</body>



</html>