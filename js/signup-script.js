// Access DOM element by id

const email = document.getElementById("email");
const password = document.getElementById("password");
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const confirmPassword = document.getElementById("confirmPassword");
const errorMsg = document.getElementById("errorMsg");
const signUpForm = document.getElementById("signUpForm");

 /* 
    Default email: favour.wobo@demo.com
    Default password: @favour
*/
const myLoginDetails = {
    email: 'favour.wobo@demo.com',
    password: '@favour'
}


window.onload = init();

function init() {
    signUpForm.addEventListener('submit', (event) => {
        event.preventDefault();
        onSignUpSubmit()
    })
}



// Sign up submit function
function onSignUpSubmit() {

    console.log(password.value)
    console.log(confirmPassword.value)
    // match password
    if (email.value === confirmPassword.value) {
        confirmPassword.style.color  = "red";
        password.style.color  = "red";
        errorMsg.innerHTML = "Password mismatch. Please correct passwords";
        return;
    }

    if (password.value.length < 7) {
        password.style.color  = "red";
        errorMsg.innerHTML = "Password most be minimum of 7 characters";
        return; 
    } else {
        // redirect user to dashboard page
        window.location.replace("./dashboard.html");
    }



    // hide error msg
    setTimeout(() => {
        errorMsg.style.display = 'none';
    }, 3000)
}
