<html>

<head>

    <head>
        <link rel="stylesheet" href="/../App/Stylesheets/EditStylesheet.css">
    </head>



    <form action="/" method="get">
        <input class="redButtonBig"
               type="submit" value="BACK"/>
    </form>
    <br>

    <div class="all">
        <form id="form" method="post" action="/save">


            <h2 class="heading">Basic information</h2>
            <br>
            <div>
                <input type="text" id="name" name="name" required/>
                <label for="name">Name</label>
            </div>

            <div>
                <input type="text" id="sname" name="sname" required/>
                <label for="sname">Surname</label>
            </div>

            <div>
                <input type="email" id="email" name="email" required/>
                <label for="email">E-Mail</label>
            </div>

            <div>
                <input type="tel" id="phoneNumber" name="phoneNumber" required/>
                <label for="phoneNumber">Phone number</label>
            </div>

            <div>
                <textarea name="pitch" id="pitch" cols="31" rows="5" required></textarea>
                <label for="pitch">Short pitch</label>
            </div>
            <br>


            <h2 class="heading">Education</h2>
            <div>
                +<br>
                <input type="text" id="school" name="education[1][school]"/> <label for="school">Educational
                    institution</label><br>
                <input type="text" id="faculty" name="education[1][faculty]"/> <label for="faculty">Faculty</label><br>
                <input type="text" id="degree" name="education[1][degree]"/> <label for="degree">Degree</label><br>
                <input type="text" id="status" name="education[1][status]"/> <label for="school">Status</label><br>
                <textarea name="education[1][other]" id="other" cols="31" rows="5"></textarea> <label for="other">Other
                    information</label><br>
                <input type="text" id="start" name="education[1][start]"/> <label for="start">Start</label><br>
                <input type="text" id="end" name="education[1][end]"/> <label for="end">End</label><br>
                <br>
            </div>


            <div id="education">
            </div>

            <button type="button" onclick="add_education('education','+')">Add Education</button>
            <br><br>


            <h2 class="heading">Work Experience</h2>

            <div>
                +<br>
                <input type="text" id="workplace" name="experience[1][place]"/> <label for="workplace">Workplace</label><br>
                <input type="text" id="position" name="experience[1][position]"/> <label for="position">Position</label><br>
                <textarea name="experience[1][description]" id="other" cols="31" rows="5"></textarea> <label
                        for="other">Description</label><br>
                <input type="text" id="start" name="experience[1][start]"/> <label for="start">Start</label><br>
                <input type="text" id="end" name="experience[1][end]"/> <label for="end">End</label><br>
                <br>
            </div>

            <div id="experience">
            </div>

            <button type="button" onclick="add_experience('experience','+')">Add Experience</button>
            <br><br>

            <h2 class="heading">Skills</h2>

                <div>
                    + <br>
                    <textarea name="other[]" id="other" cols="31" rows="5"></textarea> <label
                            for="other"></label><br>
                </div>


            <div id="Other">
            </div>

            <button type="button" onclick="add_other('other[]','+')">Add skills</button>
            <br><br>

            <br><br>
            <button class="redButtonSmall" type="submit">Submit</button>
        </form>
    </div>


    <script src="App/Javascript/addFunctions.js"></script>

    <br>
    <?php echo $error; ?>
    <br>

</html>


