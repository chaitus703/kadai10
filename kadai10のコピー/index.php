<link rel="stylesheet" href="CSS/style.css">
<!DOCTYPE html>
<html lang="ja">
<meta http-equiv="Content-Language" content="ja">
<meta name="google" content="notranslate">

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
        <div>
            <h1 class="title">STORY</h1>
            <p class="text">テキストを生成します</p>
        </div>
        <div>
            <form action="ai.php" method="post">
                <div class="inputForm">
                    <input type="text" name="prompt" placeholder="プロンプト入力欄" />
                </div>
                <div>
                    <input class="btn" name="submit1" type="submit" value="Generate" />
                </div>
            </form>
        </div>
        <hr>

        <div>
            <h1 class="title">image</h1>
            <p class="text">イメージを生成します</p>
        </div>
        <div >
            <form action="image-ai.php" method="post">
                <div class="inputForm">
                    <input type="text" name="prompt" placeholder="プロンプト入力欄" />
                </div>
                <div>
                    <input  class="btn" type="submit" value="Generate Image" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>