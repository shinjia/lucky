<?php

$num = mt_rand(0, 9);
$pic = 'images/' . $num . '.jpg';
// $pic = 'images/7.jpg';


$html = <<< HEREDOC
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>隨機幸運數字</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>幸運數字 {$num}</h1>
<p><img src="{$pic}"></p>

<p><a href="?">再執行一次</p>
</body>

</html>
HEREDOC;

echo $html;
?>