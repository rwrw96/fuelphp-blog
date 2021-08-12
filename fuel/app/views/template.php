<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php echo Html::anchor('article', '入門ブログ'); ?></h3>
    <div class="container">
        <div class="row">
            <div class="span16">
                <h1><?php echo $title; ?></h1>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span16">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>