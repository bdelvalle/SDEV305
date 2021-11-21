document.getElementById("contact-form").onsubmit = validate;


//require email selection format only if mailing list checkbox is selected
document.getElementById("mailing").onclick = function() {
    document.getElementById("emailFormat").style.display = "none";
}


//Display other-block only if "other" option is selected
document.getElementById("met").onclick = function(){
    if (document.getElementById("met").value=="other"){
        document.getElementById("Other-block").style.display = "block";
    }
    else {
        document.getElementById("Other-block").style.display = "none"
    }
}


function validate() {
    let isValid = true;

    clearErrors();

    //Validate job title
    let jobtitle = document.getElementById("jobtitle").value;
    if (jobtitle == "") {
        document.getElementById("err-title").style.display = "block";
        isValid = false;
    }


    //Validate Linkedin link
    let linkedin = document.getElementById("linkedin").value;
        if (linkedin !== "" ) {
            if (!linkedin.includes(("https" || "http") && ".com")) {
                document.getElementById("err-linkedin").style.display = "block";
                isValid = false;
            }
    }

        //Validate email if mailing list option is selected
    let email = document.getElementById("email").value;


    let mailing = document.getElementById("mailing").checked;
    if (mailing) {
        if(email == ""){
            document.getElementById("err-email").style.display = "block";
            isValid = false;
        }
        if(email !== "") {
            if(!email.includes("@" && ".")){
                document.getElementById("err-email").style.display = "block";
                isValid = false;
            }
        }

    }


    //Validate first name
    let first = document.getElementById("fname").value;
    if (first == "") {
        document.getElementById("err-fname").style.display = "block";
        isValid = false;
    }

    //Validate last name
    let last = document.getElementById("lname").value;
    if (last == "") {
        document.getElementById("err-lname").style.display = "block";
        isValid = false;
    }



    //Validate that a meeting method was selected
    let met = document.getElementById("met").value;
    if (met == "none") {
        document.getElementById("err-met").style.display = "block";
        isValid = false;
    }


return isValid;
}

function clearErrors()
{
    //Clear all error messages
    let errors = document.getElementsByClassName("err");
    for (let i=0; i<errors.length; i++) {
        errors[i].style.display = "none";
    }
}