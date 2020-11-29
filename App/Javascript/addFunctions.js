var i = 1;
var z = 1;
var g = 1;

function add_education(array, name) {
    i++;
    if (i < 6) {
        var x = document.getElementById("form");

        var newDivEducation = document.createElement("div");
        //in div
        var newFieldInstitution = document.createElement("input");
        newFieldInstitution.setAttribute("type", "text");
        newFieldInstitution.setAttribute("name", `${array}[${i}][school]`);
        var newTagInstitution = document.createTextNode(" Educational Institution");

        var newFieldFaculty = document.createElement("input");
        newFieldFaculty.setAttribute("type", "text");
        newFieldFaculty.setAttribute("name", `${array}[${i}][faculty]`);
        var newTagFaculty = document.createTextNode(" Faculty");

        var newFieldDegree = document.createElement("input");
        newFieldDegree.setAttribute("type", "text");
        newFieldDegree.setAttribute("name", `${array}[${i}][degree]`);
        var newTagDegree = document.createTextNode(" Degree");

        var newFieldStatus = document.createElement("input");
        newFieldStatus.setAttribute("type", "text");
        newFieldStatus.setAttribute("name", `${array}[${i}][status]`);
        var newTagStatus = document.createTextNode(" Status");

        var newFieldOther = document.createElement("textarea");
        newFieldOther.setAttribute("name", `${array}[${i}][other]`);
        newFieldOther.setAttribute("cols", "31");
        newFieldOther.setAttribute("rows", "5");
        var newTagOther = document.createTextNode(" Other info");

        var newFieldStart = document.createElement("input");
        newFieldStart.setAttribute("type", "text");
        newFieldStart.setAttribute("name", `${array}[${i}][start]`);
        newFieldStart.setAttribute("size", "3");
        var newTagStart = document.createTextNode(" Start date");

        var newFieldEnd = document.createElement("input");
        newFieldEnd.setAttribute("type", "text");
        newFieldEnd.setAttribute("name", `${array}[${i}][end]`);
        newFieldEnd.setAttribute("size", "3");
        var newTagEnd = document.createTextNode(" End date");

        var br1 = document.createElement("br");
        var br2 = document.createElement("br");
        var br3 = document.createElement("br");
        var br4 = document.createElement("br");
        var br5 = document.createElement("br");
        var br6 = document.createElement("br");
        var br7 = document.createElement("br");
        var br8 = document.createElement("br");
        var br9 = document.createElement("br");
        var id = document.createTextNode(`${name}`);
        //end div

        newDivEducation.appendChild(id);
        newDivEducation.appendChild(br1);
        newDivEducation.appendChild(newFieldInstitution);
        newDivEducation.appendChild(newTagInstitution);
        newDivEducation.appendChild(br2);
        newDivEducation.appendChild(newFieldFaculty);
        newDivEducation.appendChild(newTagFaculty);
        newDivEducation.appendChild(br3);
        newDivEducation.appendChild(newFieldDegree);
        newDivEducation.appendChild(newTagDegree);
        newDivEducation.appendChild(br4);
        newDivEducation.appendChild(newFieldStatus);
        newDivEducation.appendChild(newTagStatus);
        newDivEducation.appendChild(br5);
        newDivEducation.appendChild(newFieldOther);
        newDivEducation.appendChild(newTagOther);
        newDivEducation.appendChild(br6);
        newDivEducation.appendChild(newFieldStart);
        newDivEducation.appendChild(newTagStart);
        newDivEducation.appendChild(br7);
        newDivEducation.appendChild(newFieldEnd);
        newDivEducation.appendChild(newTagEnd);
        newDivEducation.appendChild(br8);
        newDivEducation.appendChild(br9);

        var pos = x.childElementCount;

        x.appendChild(newDivEducation);

        newDivEducation.setAttribute("style", "display: block");

        x.insertBefore(newDivEducation, document.getElementById('education'));
    }
}

function add_experience(array, name) {
    z++;
    if (z < 11) {
        var x = document.getElementById("form");

        var newDivExperience = document.createElement("div");
        //in div
        var newFieldWork = document.createElement("input");
        newFieldWork.setAttribute("type", "text");
        newFieldWork.setAttribute("name", `${array}[${z}][place]`);
        var newTagWork = document.createTextNode(" Workplace");

        var newFieldPosition = document.createElement("input");
        newFieldPosition.setAttribute("type", "text");
        newFieldPosition.setAttribute("name", `${array}[${z}][position]`);
        var newTagPosition = document.createTextNode(" Position");

        var newFieldDescription = document.createElement("textarea");
        newFieldDescription.setAttribute("name", `${array}[${z}][description]`);
        newFieldDescription.setAttribute("cols", "31");
        newFieldDescription.setAttribute("rows", "5");
        var newTagDescription = document.createTextNode(" Description");

        var newFieldStart = document.createElement("input");
        newFieldStart.setAttribute("type", "text");
        newFieldStart.setAttribute("name", `${array}[${z}][start]`);
        newFieldStart.setAttribute("size", "3");
        var newTagStart = document.createTextNode(" Start date");

        var newFieldEnd = document.createElement("input");
        newFieldEnd.setAttribute("type", "text");
        newFieldEnd.setAttribute("name", `${array}[${z}][end]`);
        newFieldEnd.setAttribute("size", "3");
        var newTagEnd = document.createTextNode(" End date");

        var br1 = document.createElement("br");
        var br2 = document.createElement("br");
        var br3 = document.createElement("br");
        var br4 = document.createElement("br");
        var br5 = document.createElement("br");
        var br6 = document.createElement("br");
        var br7 = document.createElement("br");
        var id = document.createTextNode(`${name}`);
        //end div

        newDivExperience.appendChild(id);
        newDivExperience.appendChild(br1);
        newDivExperience.appendChild(newFieldWork);
        newDivExperience.appendChild(newTagWork);
        newDivExperience.appendChild(br2);
        newDivExperience.appendChild(newFieldPosition);
        newDivExperience.appendChild(newTagPosition);
        newDivExperience.appendChild(br3);
        newDivExperience.appendChild(newFieldDescription);
        newDivExperience.appendChild(newTagDescription);
        newDivExperience.appendChild(br4);
        newDivExperience.appendChild(newFieldStart);
        newDivExperience.appendChild(newTagStart);
        newDivExperience.appendChild(br5);
        newDivExperience.appendChild(newFieldEnd);
        newDivExperience.appendChild(newTagEnd);
        newDivExperience.appendChild(br6);
        newDivExperience.appendChild(br7);

        var pos = x.childElementCount;

        x.appendChild(newDivExperience);

        newDivExperience.setAttribute("style", "display: block");

        x.insertBefore(newDivExperience, document.getElementById('experience'));
    }
}
    function add_other(array, name) {
        g++;
        if (g < 11) {
            var x = document.getElementById("form");

            var newDivOther = document.createElement("div");
            //in div

            var newListItem = document.createElement("textarea");
            newListItem.setAttribute("name", `${array}`);
            newListItem.setAttribute("cols", "31");
            newListItem.setAttribute("rows", "5");


            var br1 = document.createElement("br");
            var br2 = document.createElement("br");
            var br3 = document.createElement("br");

            var id = document.createTextNode(`${name}`);
            //end div

            newDivOther.appendChild(id);
            newDivOther.appendChild(br1);
            newDivOther.appendChild(newListItem);
            newDivOther.appendChild(br2);
            newDivOther.appendChild(br3);


            var pos = x.childElementCount;

            x.appendChild(newDivOther);

            newDivOther.setAttribute("style", "display: block");

            x.insertBefore(newDivOther, document.getElementById('Other'));
        }
    }
