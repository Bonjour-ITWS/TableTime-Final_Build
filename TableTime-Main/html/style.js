
function ShowRadioButtonDiv (IdBaseName, NumberOfButtons) {
    for (x=1;x<=NumberOfButtons;x++) {
        CheckThisButton = IdBaseName + x;
        ThisDiv = IdBaseName + x +'Div';
    if (document.getElementById(CheckThisButton).checked) {
        document.getElementById(ThisDiv).style.display = "block";
        }
    else {
        document.getElementById(ThisDiv).style.display = "none";
        }
    }
    return false;
}

function init(){
    document.getElementById("GroupName1").click();
}

window.onload = init;

function change()
{
    var elem = document.getElementById("covidAdminBtn");
    if (elem.value=="Enable Covid Maps") {
        elem.value = "Disable Covid Maps";
        elem.innerHTML = "Disable Covid Maps";
    }
    else {
        elem.value = "Enable Covid Maps";
        elem.innerHTML = "Enable Covid Maps";
    } 
}
