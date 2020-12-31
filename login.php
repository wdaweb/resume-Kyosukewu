<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css"
        integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy"
        crossorigin="anonymous"></script>
    <title>後檯登入</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        html,
        body {
            height: 100%;
        }

        body {
            background: url(https://picsum.photos/1024/768/?random=1) no-repeat center center / cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login {
            width: 600px;
            height: 500px;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 10px;
            border: 1px solid #fff;
            box-shadow: 0px 0px 60px #000;
            backdrop-filter: blur(5px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            font-family: 'Noto Sans TC', sans-serif;
            width: 400px;
            color: #fff;
        }

        .form h2 {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #fff;
        }

        .form .group {
            margin-bottom: 20px;
        }

        .form label {
            line-height: 2;
        }

        .form input {
            width: 100%;
            line-height: 3;
            border: 3px solid #aaa;
            border-radius: 5px;
        }

        .form .btn-group {
            font-size: 0;
            margin-top: 50pxn;
        }

        .form .btn {
            font-size: 20px;
            border-radius: 5px;
            border: none;
            background-color: rgba(245,223,77);
            width: 190px;
            padding: 10px 0;
            color: rgba(147,149,151);
            font-family: 'Noto Sans TC', sans-serif;
        }
        .form .btn:hover{
            background-color: rgb(255, 255, 255);
            color:rgba(245,223,77);
        }

        .form .btn+.btn {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <div class="login">
        <form class="form">
            <h2>會員登入</h2>
            <div class="group">
                <label for="user_id">帳號</label>
                <input type="text" name="" id="user_id">
            </div>
            <div class="group">
                <label for="user_password">密碼</label>
                <input type="password" name="" id="user_password">
            </div>
            <div class="btn-group">
                <button class="btn login1">登入</button>
                <button class="btn cancel">取消</button>
            </div>
        </form>
    </div>


</body>

</html>