<html>
<head>
    <link rel="stylesheet" href="/../App/Stylesheets/CommonStylesheet.css">
</head>
<body>

<form action="/add" method="get">
    <input class="redButtonBig"
           type="submit" value="ADD NEW CV"/>
</form>
<br>

<?php foreach ($allCVs as $cv): ?>
    <div class="all">
        <div class="topdiv">
            <div class="row">
                <div class="column">
                    <div style="text-align: left;font-weight: bold;font-size: 30px;"><?= $cv->getName() . " " . $cv->getSname() ?></div>
                    <br>
                    <div style="text-align: left;"><b>Email: </b><?= $cv->getEmail() ?><br></div>
                    <div style="text-align: left;"><b>Phone number: </b> <?= $cv->getPhoneNumber() ?><br></div>
                    <br>
                    <div class="evenOut"><b>Pitch: </b> <?= $cv->getPitch() ?><br></div>
                </div>
                <div class="column">
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
            </div>
        </div>
        <div class="botdiv">
            <form style="float:bottom" action="/about/<?= $cv->getId() ?>" method="get">
                <button class="redButtonSmall" type="submit">More Info</button>
            </form>
        </div>

    </div>
    <br>
<?php endforeach; ?>

</body>
</html>
