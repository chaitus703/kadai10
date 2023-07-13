<?php

require __DIR__ . '/vendor/autoload.php'; // remove this line if you use a PHP Framework.

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '********************************';
$open_ai = new OpenAi($open_ai_key);

if(isset($_POST['submit1'])){

    $prompt = $_POST['prompt'];

    $complete = $open_ai->completion([
        'model' => 'text-davinci-002',
        'prompt' => $prompt,
        'temperature' => 1.0,
        'max_tokens' => 4000,
        'frequency_penalty' => 0,
        'presence_penalty' => 0.6,
    ]);

    $response = json_decode($complete,true);
    $response = $response["choices"][0]["text"];
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <div class="container">
        <div>
            <h1 class="title">GENERATE</h1>
            <p class="text">テキスト生成結果</p>
        </div>
        <form method="POST" action="insert.php">
            <fieldset class="container">
                <label><textArea class="promptArea" name="prompt1"><?= $prompt?></textArea></label><br>
                <label><textArea class="generateArea" name="generate"><?= $response?></textArea></label><br>
                <input class="btn" name="submit2"  type="submit" value="送信">
            </fieldset>
        </form>
    </div>
</body>
</html>

