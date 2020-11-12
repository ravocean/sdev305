/*
function ValidateEmail(inputText)
{
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(inputText.value.match(mailformat))
    {
        alert("Valid email address!");
        document.form1.text1.focus();
        return true;
    }
    else
    {
        alert("You have entered an invalid email address!");
        document.form1.text1.focus();
        return false;
    }
}
*/

///////////////////////////////////////
document.getElementById("regForm").onsubmit = Validate;

function clearErrors(){
    let errors = document.getElementsByClassName("text-danger");
    for (let i=0; i < errors.length; i++) {
        errors[i].classList.add("d-none");
    }
}


function Validate() {

    clearErrors();
    let isValid = true;

    // Name Validation
    let firstName = document.getElementById("name").value;
    if (firstName == "") {
        let errorFname = document.getElementById("errorFname");
        errorFname.classList.remove("d-none");
        isValid = false;
    }

    // Email Validation
    let email = document.getElementById("email").value;
    let mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let errorEmail = document.getElementById("errorEmail");

    if(email.match(mailFormat)) {
       // document.form1.text1.focus();
         isValid = true;
    }
    else {
        //   document.form1.text1.focus();
         errorEmail.classList.remove("d-none");
         isValid = false;
    }

    // Password
    let password = document.getElementById("password").value;
    let passwordFormat = /^.{8,20}$/;
    let errorPassword = document.getElementById("errorPassword");

    if(password.match(passwordFormat)) {
        // document.form1.text1.focus();
        isValid = true;
    }
    else {
        //   document.form1.text1.focus();
        errorPassword.classList.remove("d-none");
        isValid = false;
    }

    // Password Repeat
    let passwordRep = document.getElementById("passwordRep").value;
    let errorPasswordRep = document.getElementById("errorPasswordRep");

    if (passwordRep === ""){
        errorPasswordRep.classList.remove("d-none");
        isValid = false;
    }

    else if(passwordRep.match(password)) {
        // document.form1.text1.focus();
        isValid = true;
    }
    else {
        //   document.form1.text1.focus();
        errorPasswordRep.classList.remove("d-none");
        isValid = false;
    }

    // Terms
    //let checkbox = document.getElementById("checkbox").value;
    let errorTerms = document.getElementById("errorTerms");

    if(!document.getElementById("agreement").checked) {
        errorTerms.classList.remove("d-none");
        isValid = false;
    }


    return isValid;

}
//////////////////////////////////////////////
/*
// Validate first name
let firstName = document.getElementById("fname").value;
if (firstName == "") {
    let errorFname = document.getElementById("errorFname");
    errorFname.classList.remove("d-none");
    isValid = false;
}
 */