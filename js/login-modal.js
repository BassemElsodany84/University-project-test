const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");
const registerBtnMobile = document.getElementById("register-mobile");
// ======================================================
// Toggler - website
// ======================================================
registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});
// ======================================================
// Toggler mobile
// ======================================================
registerBtnMobile.addEventListener("click", () => {
  container.classList.toggle("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
  toggleButtonText();
});

function toggleButtonText() {
  if (registerBtnMobile.innerText === "Register") {
    registerBtnMobile.innerText = "Login";
  } else {
    registerBtnMobile.innerText = "Register";
  }
}

// ======================================================
// type buttons
// ======================================================
const buttons = document.querySelectorAll(".type-btn");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    // Remove 'selected' class from all buttons
    buttons.forEach((btn) => btn.classList.remove("selected"));

    // Add 'selected' class to the clicked button
    button.classList.add("selected");
  });
});
// ======================================================
// Show and hide form
// ======================================================
const showButton = document.getElementById("type1");
const hideButton = document.getElementById("type2");
const div = document.getElementById("doc-info");

// Show the div and hide the 'show' button
showButton.addEventListener("click", function () {
  div.style.display = "block";
});

// Hide the div and show the 'show' button
hideButton.addEventListener("click", function () {
  div.style.display = "none";
});

// =======================================================
// Show and hide login-modal
// =======================================================
document.querySelector("#show-login").addEventListener("click", function () {
  document.querySelector(".login-modal").classList.add("active");
});
document.querySelector("#close").addEventListener("click", function () {
  document.querySelector(".login-modal").classList.remove("active");
});
// =======================================================
