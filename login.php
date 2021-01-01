<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    <title>後台登入</title>
</head>

<body>
    <div class="login">
        <form class="form" method="post" action="api/logincheck.php">
            <h2>管理系統</h2>
            <div class="group">
                <label for="acc">帳號</label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class="group">
                <label for="pw">密碼</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div class="btn-group">
                <input type="submit" value="登入" class="btn login1">
                <input type="reset" value="清除" class="btn cancel">
            </div>
        </form>
    </div>
</body>

</html>