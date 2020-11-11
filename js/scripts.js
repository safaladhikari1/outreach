// Register the validate function for the form submit event
let form = document.getElementById("guestForm");
form.onsubmit = validate;

//Make all error messages invisible
function clearErrors()
{
    let errors = document.getElementsByClassName("text-danger");

    for(let i=0; i<errors.length; i++)
    {
        errors[i].classList.add("d-none");
    }
}

function validate()
{
    clearErrors(); // calls clearErrors to make all error message invisible.

    let isValid = true;

    // Validate first name
    let firstName = document.getElementById("firstname").value;
    if(firstName === "")
    {
        let errorFname = document.getElementById("errorFname");
        errorFname.classList.remove("d-none");
        isValid = false; // when isValid is false, it doesn't send the data to server. stays on the form page
    }

    // Validate lastname
    let lastName = document.getElementById("lastname").value;
    if(lastName === "")
    {
        let errorLname = document.getElementById("errorLname");
        errorLname.classList.remove("d-none");
        isValid = false;
    }

    // Validate Email
    if(!validateEmail())
    {
        isValid = false;
    }

    // Validate phone
    if(!validatePhone())
    {
        isValid = false;
    }

    return isValid;
}

function validatePhone()
{
    let phone = document.getElementById("phone").value;
    let phoneRegex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

    let isValid = true;

    if(phone === "")
    {
        let invalidPhone = document.getElementById("invalidPhone");
        invalidPhone.classList.remove("d-none");
        isValid = false;
    }

    else if(!phone.match(phoneRegex))
    {
        let invalidPhone = document.getElementById("invalidPhone");
        invalidPhone.classList.remove("d-none");
        isValid = false;
    }

    return isValid;
}

function validateEmail()
{
    let email = document.getElementById("email").value;
    let emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    let isValid = true;

    if(email === "")
    {
        let noEmail = document.getElementById("noEmail");
        noEmail.classList.remove("d-none");
        isValid = false;
    }
    else if (!email.match(emailRegex))
    {
        let invalidEmail = document.getElementById("invalidEmail");
        invalidEmail.classList.remove("d-none");
        isValid = false;
    }

    return isValid;
}

// Form - Services - Handling
document.getElementById("utilities").onclick = utilDocs;
document.getElementById("rent").onclick = rentDocs;
document.getElementById("gas").onclick = gasDocs;
document.getElementById("other").onclick = showOther;

function utilDocs()
{
    let checkbox = document.getElementById("utilities");
    let hide = document.getElementById("utilDocs")
    if (checkbox.checked)
    {
        hide.classList.remove("d-none");
    }
    else
    {
        hide.classList.add("d-none");
    }
}

function rentDocs()
{
    let checkbox = document.getElementById("rent");
    let hide = document.getElementById("rentDocs")
    if (checkbox.checked)
    {
        hide.classList.remove("d-none");
    }
    else
    {
        hide.classList.add("d-none");
    }
}

function gasDocs()
{
    let checkbox = document.getElementById("gas");
    let hide = document.getElementById("gasDocs")
    if (checkbox.checked)
    {
        hide.classList.remove("d-none");
    }
    else
    {
        hide.classList.add("d-none");
    }
}

function showOther()
{
    let checkbox = document.getElementById("other");
    let hide = document.getElementById("showOther");
    if(checkbox.checked)
    {
        hide.classList.remove("d-none");
    } else
    {
        hide.classList.add("d-none");
    }
}




