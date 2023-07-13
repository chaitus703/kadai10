<?php

require __DIR__ . '/vendor/autoload.php'; // remove this line if you use a PHP Framework.

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '**************************************';
$open_ai = new OpenAi($open_ai_key);

$prompt = $_POST['prompt'];

$complete = $open_ai->image([
    "prompt" => $prompt,
    "n" => 1,
    "size" => "256x256",
    "response_format" => "url",
 ]);

$response = json_decode($complete,true);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h1><?=$prompt?>の画像</h1>
        </div>
        <div>
            <img src="<?= $response["data"][0]["url"]?>" />
        </div>
    </div>
</body>
</html>