// Access DOM element by id

const email = document.getElementById("email");
const password = document.getElementById("password");
const signInForm = document.getElementById("signInForm");
const errorMsg = document.getElementById("errorMsg");

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
    signInForm.addEventListener('submit', (event) => {
        event.preventDefault();
        onSignInSubmit();
    })
}

// Signin submit function
function onSignInSubmit() {

    // authenticate user    
    if (email.value === myLoginDetails.email && password.value === myLoginDetails.password) {
        // redirect user to dashboard page
        window.location.replace("./dashboard.html");
    } else {
        email.style.color  = "red";
        password.style.color  = "red";
        errorMsg.innerHTML = "Email or password is incorrect. Please try again";
    }

    // hide error msg
    setTimeout(() => {
        errorMsg.style.display = 'none';
    }, 3000)
    
}

/*  */
