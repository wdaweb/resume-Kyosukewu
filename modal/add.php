<form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
            <input class="img" type="file" name="img">
            <input type="hidden" name="sh">
            <input type="hidden" name="table" value="re_about">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>

<form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
    新增簡介：<input type="text" name="text">
    <input type="hidden" name="sh">
    <input type="hidden" name="table" value="re_abouttext">
    <input class="btn btn-outline-warning" type="submit" value="上傳">
</form>

<form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
            新增聯絡資訊：<br>
            小圖示：<input type="text" name="icon">
            方式：<input type="text" name="method">
            內容：<input type="text" name="cont">
            <input type="hidden" name="sh">
            <input type="hidden" name="table" value="re_cont">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>

        <form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
            新增求職條件：<br>
            小圖示：<input type="text" name="icon">
            項目：<input type="text" name="method">
            內容：<input type="text" name="cont">
            <input type="hidden" name="table" value="re_job">
            <input type="hidden" name="sh">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>