import "./bootstrap";

const passwordField = document.getElementById("pwd");
const pwdEye = document.getElementById("pwdEye");
const repeatPassField = document.getElementById("re-pwd");
const repeatBtn = document.getElementById("re-pwdEye");

pwdEye.addEventListener("click", function () {
    const currentType = passwordField.getAttribute("type");

    if (currentType === "password") {
        passwordField.setAttribute("type", "text");
        pwdEye.setAttribute("src", "/images/show.png");
    } else {
        passwordField.setAttribute("type", "password");
        pwdEye.setAttribute("src", "/images/hide.png");
    }
});
repeatBtn.addEventListener("click", function () {
    const currentType = repeatPassField.getAttribute("type");

    if (currentType === "password") {
        repeatPassField.setAttribute("type", "text");
        repeatBtn.setAttribute("src", "/images/show.png");
    } else {
        repeatPassField.setAttribute("type", "password");
        repeatBtn.setAttribute("src", "/images/hide.png");
    }
});
