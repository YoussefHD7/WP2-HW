
var loginWindow = document.querySelector(".login-window");
var loginVisit = document.querySelector(".login-visit");
var loginSection = document.querySelector(".login-section");
var signupSection = document.querySelector(".signup-section");
var loginNow = document.querySelector(".nav__btn__login");

function openLogin(){
    loginWindow.style.display ="block";
    loginWindow.classList.remove("none-window-login");
}

function bingToWebsite(){
    loginWindow.classList.add("none-window-login");
    //window.open("index.html", "_self");
}

function bingToLogin(){
    loginVisit.classList.add("none");
    loginSection.classList.add("transf-login");
}

function backToVisit(){ 
    loginSection.classList.remove("transf-login");
    signupSection.classList.remove("transf-signup");
    loginVisit.classList.remove("none");
}

function goToSignup(){ 
    loginSection.classList.remove("transf-login");
    signupSection.classList.add("transf-signup");
}

function backToLogin(){ 
    signupSection.classList.remove("transf-signup");
    loginSection.classList.add("transf-login");
}

/* reomve login button after successful register
var signupMessage = document.querySelector(".signup-message");
var loginButton = document.querySelector(".nav__btn__login");
function removeLogin(){
    if (signupMessage.innerHTML = "Registered successfully! Click here to remove Message"){
        loginButton.style.display="none";
    }
} */


/* Open user info  */
var userIcon = document.querySelector(".navbar_icons .icon_item_user");
var userInfo = document.querySelector(".navbar_icons .user-info");
const navClose = document.querySelector(".navbar_icons .user-info .close_toggle");
userIcon.addEventListener("click", () => {
    userInfo.style.display = "flex";
})

navClose.addEventListener("click", () => {
    userInfo.style.display = "none";
})