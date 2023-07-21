function toggleSignup() {
    document.getElementById("login-toggle").style.backgroundColor = "#fff";
    document.getElementById("login-toggle").style.color = "#222";
    document.getElementById("signup-toggle").style.backgroundColor = "#57b846";
    document.getElementById("signup-toggle").style.color = "#fff";
    document.getElementById("login-form").style.display = "none";
    document.getElementById("signup-form").style.display = "block";
}

function toggleLogin() {
    document.getElementById("login-toggle").style.backgroundColor = "#57B846";
    document.getElementById("login-toggle").style.color = "#fff";
    document.getElementById("signup-toggle").style.backgroundColor = "#fff";
    document.getElementById("signup-toggle").style.color = "#222";
    document.getElementById("signup-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
}
const loginForm = document.getElementById("login-formal");
const loginButton = document.getElementById("login-form-submit");

function login() {
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "user" && password === "bmsce") {
        location.href = "index.html";
    } else {
        alert("ENTERED PASSWORD IS WRONG!");
    }
}