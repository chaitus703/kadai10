<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700 rel="stylesheet">
</head>

<body>
<div class="container">
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
    <div>
        <h1 class="title">Login</h1>
    </div>
    <form name="form1" action="login_act.php" method="post">
        <div class="inputForm">
            <p class="text2">IDを入力してください</p>
            <input type="text" name="lid" />
        </div>
        <div class="inputForm">
            <p class="text2">パスワードを入力してください</p>
            <input type="password" name="lpw" />
        </div>
        <div>
            <input class="btn" type="submit" value="LOGIN" />
        </div>
    </form>
    </div>
</div>

</body>

</html>
