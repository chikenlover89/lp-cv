<html>

<head>
    <link rel="stylesheet" href="/../App/Stylesheets/CommonStylesheet.css">
</head>

<body>

<form action="/" method="get">
    <input class="redButtonBig"
           type="submit" value="BACK"/>
</form>
<br>

<div class="all">

    <div class="topdiv">
        <div class="row">
            <div class="column">
                <div style="text-align: left;font-weight: bold;font-size: 30px;"><?= $cv->getName() . " " . $cv->getSname() ?></div>
                <br>
                <div style="text-align: left;"><b>Email: </b><?= $cv->getEmail() ?><br></div>
                <div style="text-align: left;"><b>Phone number: </b> <?= $cv->getPhoneNumber() ?><br></div>
                <br>
                <div class="evenOut"><b>Pitch </b><br> <?= $cv->getPitch() ?></div>
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
        <div class="education">
            <?php if ($cv->getEducation() != null): ?>
                <h1 style="text-align: center">Education</h1>
                <?php foreach ($cv->getEducation() as $education): ?>
                    <b>From </b> <?= $education->start ?><b> to </b> <?= $education->end ?><br>
                    <b>Educational Facility:</b> <?= $education->school ?><br>
                    <b>Faculty:</b> <?= $education->faculty ?><br>
                    <b>Degree:</b> <?= $education->degree ?><br>
                    <b>Status:</b> <?= $education->status ?><br>
                    <div class="evenOut">
                        <b>Description:</b> <?= $education->other ?><br>
                    </div>

                    <br>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="experience">
            <?php if ($cv->getWorkExperience() != null): ?>
                <h1 style="text-align: center">Work Experience</h1>
                <?php foreach ($cv->getWorkExperience() as $experience): ?>
                    <b>From </b> <?= $experience->start ?><b> to
                    </b> <?= $experience->end ?><br>
                    <b>Workplace:</b> <?= $experience->place ?><br>
                    <b>Position:</b> <?= $experience->position ?><br>
                    <div class="evenOut">
                        <b>Description:</b> <?= $experience->description ?><br>
                    </div>
                    <br>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
        <div class="other">
            <?php if ($cv->getOther() != null): ?>
                <h1 style="text-align: center">Skills</h1>
                <?php foreach ($cv->getOther() as $other): ?>

                    <li><?= $other ?></li>

                <?php endforeach; ?>

            <?php endif; ?>
        </div>

        <br>
        <div>
            <form style="display: inline-block" action="/edit/<?= $cv->getId() ?>" method="get">
                <button class="redButtonSmall" type="submit">Edit</button>
            </form>
            <form style="display: inline-block;padding-left: 10px" class="form1" action="/upload/<?= $cv->getId() ?>"
                  method="get">
                <button class="redButtonMedium" type="submit">Upload Image</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
