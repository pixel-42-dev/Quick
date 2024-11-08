<?php

require_once 'CodeValidator.php';

$phpCode = "{{lajkdhf{adfa}{}adfasdfadf{}}}";
$validator = new CodeValidator($phpCode);
$isValid = $validator->isCorrect() ? "Корректный код" : "Некорректный код";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quicktum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
    <p class="validation-result"><?php echo $phpCode; ?></p>
    <br>
    <p class="validation-result"><?php echo $isValid; ?></p>
</div>

</body>
</html>
