<html>

<head>
    <link rel="stylesheet" href="/../App/Stylesheets/EditStylesheet.css">
</head>

<body>
<form action="/about/<?= $vars['id'] ?>" method="get">
    <input class="redButtonBig"
           type="submit" value="BACK"/>
</form>
<br>

<div class="all">
    <form id="form" method="post" action="/update/<?= $vars['id'] ?>">

        <h2 class="heading">Basic information</h2>
        <br>

        <div>
            <input type="text" id="name" name="name" value="<?= $cv->getName() ?>" required/>
            <label for="name">Name</label>
        </div>

        <div>
            <input type="text" id="sname" name="sname" value="<?= $cv->getSname() ?>" required/>
            <label for="sname">Surname</label>
        </div>

        <div>
            <input type="email" id="email" name="email" value="<?= $cv->getEmail() ?>" required/>
            <label for="email">E-Mail</label>
        </div>

        <div>
            <input type="tel" id="phoneNumber" name="phoneNumber" value="<?= $cv->getPhoneNumber() ?>" required/>
            <label for="phoneNumber">Phone number</label>
        </div>

        <div>
            <textarea name="pitch" id="pitch" cols="31" rows="5" required><?= $cv->getPitch() ?></textarea>
            <label for="pitch">Short pitch</label>
        </div>
        <br>


        <h2 class="heading">Education</h2>
        <?php $i = 0; ?>
        <?php foreach ($cv->getEducation() as $education): ?>
            <?php $i++; ?>
            <div>
                +<br>
                <input type="text" id="school" name="education[<?= $i ?>][school]" value="<?= $education->school ?>"/>
                <label for="school">Educational institution</label><br>
                <input type="text" id="faculty" name="education[<?= $i ?>][faculty]"
                       value="<?= $education->faculty ?>"/>
                <label for="faculty">Faculty</label><br>
                <input type="text" id="degree" name="education[<?= $i ?>][degree]" value="<?= $education->degree ?>"/>
                <label for="degree">Degree</label><br>
                <input type="text" id="status" name="education[<?= $i ?>][status]" value="<?= $education->status ?>"/>
                <label for="school">Status</label><br>
                <textarea name="education[<?= $i ?>][other]" id="other" cols="31"
                          rows="5"><?= $education->other ?></textarea> <label for="other">Other information</label><br>
                <input type="text" id="start" name="education[<?= $i ?>][start]" value="<?= $education->start ?>"/>
                <label
                        for="start">Start</label><br>
                <input type="text" id="end" name="education[<?= $i ?>][end]" value="<?= $education->end ?>"/> <label
                        for="end">End</label><br>
                <br>
            </div>
        <?php endforeach; ?>

        <div id="education">
        </div>

        <button type="button" onclick="add_education('education','+')">Add Education</button>
        <br><br>

        <h2 class="heading">Work Experience</h2>

        <?php $i = 0; ?>
        <?php foreach ($cv->getWorkExperience() as $experience): ?>
            <?php $i++; ?>
            <div>
                +<br>
                <input type="text" id="workplace" name="experience[<?= $i ?>][place]"
                       value="<?= $experience->place ?>"/>
                <label for="workplace">Workplace</label><br>
                <input type="text" id="position" name="experience[<?= $i ?>][position]"
                       value="<?= $experience->position ?>"/>
                <label for="position">Position</label><br>
                <textarea name="experience[<?= $i ?>][description]" id="other" cols="31"
                          rows="5"><?= $experience->description ?></textarea> <label
                        for="other">Description</label><br>
                <input type="text" id="start" name="experience[<?= $i ?>][start]" value="<?= $experience->start ?>"/>
                <label for="start">Start</label><br>
                <input type="text" id="end" name="experience[<?= $i ?>][end]" value="<?= $experience->end ?>"/> <label
                        for="end">End</label><br>
                <br>
            </div>
        <?php endforeach; ?>

        <div id="experience">
        </div>

        <button type="button" onclick="add_experience('experience','+')">Add Experience</button>
        <br><br>


        <h2 class="heading">Skills</h2>
        <?php foreach ($cv->getOther() as $other): ?>
            <div>
                +<br>
                <textarea name="other[]" id="other" cols="31" rows="5"><?= $other ?></textarea> <label
                        for="other"></label><br>
            </div>
            <br>
        <?php endforeach; ?>

        <div id="Other">
        </div>

        <button type="button" onclick="add_other('other[]','+')">Add skills</button>
        <br><br>

        <button class="redButtonSmall" type="submit">Submit</button>
    </form>
</div>
</body>
</html>
<script src="/../App/Javascript/addFunctions.js"></script>




