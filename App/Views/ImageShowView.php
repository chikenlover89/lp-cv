<html>

<head>
    <head>
        <link rel="stylesheet" href="/../App/Stylesheets/ImageStylesheet.css">
    </head>
</head>


<body>

<form action="/about/<?= $vars['id'] ?>" method="get">
    <input class="redButtonBig"
           type="submit" value="BACK"/>
</form>
<br>

<div class="all">
    <form action="/upload/<?= $vars['id'] ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <br><br>

    Current Image:<br>

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