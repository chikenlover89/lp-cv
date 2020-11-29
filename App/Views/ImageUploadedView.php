<html>

<head>
    <link rel="stylesheet" href="/../App/Stylesheets/ImageStylesheet.css">
</head>


<body>

<form action="/about/<?= $vars['id'] ?>" method="get">
    <input class="redButtonBig"
           type="submit" value="BACK"/>
</form>
<br>

<div class="all">
    <?=$msg?>
    <br><br>

    New Image:<br>

    <?php if ($cv->getImage() == null || $cv->getImage() == ''): ?>
        <img class="image"
             src="/../uploads/default.jpg"
             width="200px">
    <?php else: ?>
        <img class="image"
             src="/../<?= $cv->getImage() ?>"
             width="200px">
    <?php endif; ?>

</div>

</body>
</html>