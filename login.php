<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>後台登入</title>
</head>

<body>
    <div class="login">
        <div class="form">
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
                <!-- <input type="submit" value="登入" class="btn login1" > -->
                <button class="btn login1" onclick="login()">登入</button>
                <button class="btn cancel" onclick="back()">回前台</button>
                <!-- <input type="reset" value="清除" class="btn cancel"> -->
            </div>
        </div>
    </div>
</body>

</html>
<script>
function login(){
    let acc=$("#acc").val()
    let pw=$("#pw").val()
    $.post("api/logincheck.php",{acc},function(res){
        if(res==1){
            $.post('api/lchkpw.php',{acc,pw},function(resp){
                if(resp==1){
                    // alert('123');
                    location.href="backend.php";
                }else{
                    alert("密碼錯誤");
                    $('#acc,#pw').val("");
                }
            })
        }else{
            alert("查無帳號")
            $('#acc,#pw').val("");
        }
    })
}

function back(){
    location.href="index.php"
}
</script>