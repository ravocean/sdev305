/*
Ben Chadwick
Jessica Sestak
Husrav Homidov
Tiffany Welo

Team Dotcom
10/19/20

form.js validates the form and adds text when you click the checkBox

*/


document.getElementById("application").onsubmit = validate;


//validate the form
function validate() {
    //create a flag variable
    let isValid = true;
	
	//validate first name
    let first = document.getElementById("fname").value;
    let errFname = document.getElementById("error-fname");
    if (first === "") {
        errFname.className = "errors";
        isValid = false;
    }
    else {
        errFname.className = "hidden";
    }
    // validate last name
    let last = document.getElementById("lname").value;
    let errLname = document.getElementById("error-lname");
    if(last === "") {
        errLname.className = "errors";
        isValid = false;
    }
    else {
        errLname.className = "hidden";
    }
	//validate email
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("inputEmail").value;
    let errContact = document.getElementById("error-contact");
    if(phone === "" && email === "") {
        errContact.className = "errors";
        isValid = false;
    }
    else {
        errContact.className = "hidden";

    }

    //validate to see if assistance was checked
    let assistance = document.getElementsByName("assistance[]");
    let count = 0;
    for(let i=0; i < assistance.length; i++) {
        if (assistance[i].checked) {
            count++;
        }
    }
    let errAssistance = document.getElementById("error-assistance");
    if (count === 0) {
        errAssistance.className = "errors";
        isValid = false;
    }
    else {
        errAssistance.className = "hidden";
    }
	
	//validate to see if Checkbox is checked
	let checkBox = document.getElementById("gridCheck");
	let errCheck = document.getElementById ("error-check");
	if (checkBox.checked === false) {
		errCheck.className = "errors";
		isValid = false;
	}
	else {
		errCheck.className = "hidden";
	}
		
    return isValid;
}

//function utility displays extra information about utility when checkBox is checked 
function utility() {
    let checkBox = document.getElementById("utilities");
    // Get the output text
    let text = document.getElementById("util-info");
    // If the checkbox is checked, display the output text
    if (checkBox.checked === true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }


}

//function rentInfo displays extra information about rent when checkBox is checked 
function rentInfo() {
    let checkBox = document.getElementById("rent");
    // Get the output text
    let text = document.getElementById("rent-info");

    // If the checkbox is checked, display the output text
    if (checkBox.checked === true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }

}

//function gasInfo displays extra information about gas when checkBox is checked 
function gasInfo() {
    let checkBox = document.getElementById("gas");
    // Get the output text
    let text = document.getElementById("gas-info");

    // If the checkbox is checked, display the output text
    if (checkBox.checked === true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }

}

//function thriftInfo displays extra information about thrift Store when checkBox is checked 
function thriftInfo() {
    let checkBox = document.getElementById("thrift");
    // Get the output text
    let text = document.getElementById("thrift-info");

    // If the checkbox is checked, display the output text
    if (checkBox.checked === true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }

}

//function driverInfo displays extra information about id/driverlicense when checkBox is checked 
function driverInfo() {
    let checkBox = document.getElementById("driver");
    // Get the output text
    let text = document.getElementById("id-info");

    // If the checkbox is checked, display the output text
    if (checkBox.checked === true){
        text.style.display = "block";
    } else {
        text.style.display = "none";
    }



}




