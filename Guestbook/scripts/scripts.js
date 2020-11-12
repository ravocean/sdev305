/*
Author: Husrav Khomidov
Project: Guestbook
Date: 11/07/2020
*/

// Triggers warning/passed Bootsrap classes on Send
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        let forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        let validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

// If checkbox is on, then require email address by adding "required" attribute to "email" type
// and show radio buttons
let checkBox = document.querySelector('input[type="checkbox"]');
let textInput = document.querySelector('input[type="email"]');
function toggleRequired() {
    if (textInput.hasAttribute('required') !== true) {
        textInput.setAttribute('required','required');
        document.getElementById("radio").classList.remove("d-none");
    }

    else {
        textInput.removeAttribute('required');
        document.getElementById("radio").classList.add("d-none");
    }
}
checkBox.addEventListener('change',toggleRequired,false);
//===========================================================================================

// If Where Did We Meet selects Other, display the Other Message box
function otherMessage(){
    let meetVal = document.getElementById("howMet").value;
    if(meetVal === "otherMet"){
        document.getElementById("otherMet").classList.remove("d-none");
    } else {
        document.getElementById("otherMet").classList.add("d-none");
    }
}