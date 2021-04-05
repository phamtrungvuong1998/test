<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ĐĂNG NHẬP</h1>
    <p>username: vuong</p>
    <p>pass: 123</p>
    <form action="http://localhost/Admin/index.php?mod=Auth&act=loginProcess" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <div style="margin: 20px;"></div>
        <label for="pass">password:</label>
        <input type="password" id="pass" name="pass">
        <input type="submit" value="Dang nhap">
    </form>
</body>
</html>