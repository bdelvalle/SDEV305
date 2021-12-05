document.getElementById("contact-form").onsubmit = validate;

//Display address block when delivery option is selected
document.getElementById("delivery").onclick = function() {
    document.getElementById("address-block").style.display = "block";
}

//Hide address block when pick-up option is selected
document.getElementById("pickup").onclick = function() {
    document.getElementById("address-block").style.display = "none";
}

function validate()
{
    let isValid = true;

    clearErrors();

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

    //Validate pizza size
    let met = document.getElementById("met").value;
    if (size == "none") {
        document.getElementById("err-met").style.display = "block";
        isValid = false;
    }

    //Validate method (pickup or delivery)
    let method = document.getElementsByName("meeting");
    let counter = 0;
    for (let i=0; i<method.length; i++) {
        if (method[i].checked) {
            counter++;
        }
    }
    if (counter == 0) {
        document.getElementById("err-met").style.display = "block";
        isValid = false;
    }


    //alert(deliveryChecked);


}

function clearErrors()
{
    //Clear all error messages
    let errors = document.getElementsByClassName("err");
    for (let i=0; i<errors.length; i++) {
        errors[i].style.display = "none";
    }
}