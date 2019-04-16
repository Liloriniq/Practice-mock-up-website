//form validation function

function validateForm() {
    var email = document.getElementById("contact_email");
    
    atpos = email.value.indexOf("@");
    dotpos = email.value.lastIndexOf(".");

    if (atpos < 1 || (dotpos - atpos <2)) {
        document.getElementById("error_email").innerHTML = "Please enter a valid emial!"

        email.focus();
        return false;
    }
}

function clearErrorMsg(id) {
    document.getElementById(id).innerHTML = "";
}