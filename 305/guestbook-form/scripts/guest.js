/*document.getElementById("guestbook-form").onsubmit
= validate;*/

//Func to add other field
function other(val) {
    var met = document.getElementById("other-block");
    if (val == "other") {
        met.style.display = "block";
    } else {
        met.style.display = "none";
    }
}

/*ar met = document.getElementById("met");
var choice = met.options[met.selectedIndex].value;
if(choice === "other1") {
    document.getElementById("other-block").style.display = "block";

} else {
    document.getElementById("other-block").style.display = "none";
}
*/
/*function validate() {

    var isValid = true;


    //clear all messages
    var errors = document.getElementsByClassName("err");
    for(var i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //check first name
    var first = document.getElementById("firstName").value;
    if(first == "") {
        var errFirst = document.getElementById("err-fname");
        errFirst.style.visibility = "visible";
        isValid = false;
    }

    //check last name
    var last = document.getElementById("lastName").value;
    if(last == "") {
        var errLast = document.getElementById("err-lname");
        errLast.style.visibility = "visible";
        isValid = false;
    }

    //checked linkedin is a url
    //var linkedin = document.getElementsByTagName("url")

    //check email address
    var email = document.getElementById("emailAdd").value;
    var addToList = document.getElementById("add");
    if(email === "" && addToList.checked ) {
        var errEmailAdd = document.getElementById("err-emailAdd");
        errEmailAdd.style.visibility = "visible";
        isValid = false;
    }
    if(!(email.includes("@", "."))) {
        var errEmailAdd = document.getElementById("err-emailAdd");
        errEmailAdd.style.visibility = "visible";
        isValid = false;
    }
    //Validate how we met
    var met = document.getElementById("meet");
    var choice = met.options[met.selectedIndex].value;
    if(choice == "selectHow") {
        var errMet = document.getElementById("err-meet");
        errMet.style.visibility = "visible";
        isValid = false;
    }


    return isValid;*/

/*
}*/
