<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>로그인</title>
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
    </style>
</style>
<body>
<?php include "header.html"; ?>
<main>
<img src="./img/login.jpg" width="180" align="center"><br>
아이디<br>
<input type = text value = "학번"><br>
비밀번호<br>
<input type = password value = 1234><br>
<input type = submit value = "로 그 인" id="login_submit"><br>
<input type = submit value = 회원가입 id = "signup_submit">

</main>

</body>
</html>