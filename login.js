const form = document.getElementById("form");
const email = document.getElementById("email");
const password = document.getElementById("password");

var ck_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
var ck_password1 =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;

form.addEventListener("submit", e => {
  e.preventDefault();
 if(checkInputs()){
  form.submit();
 }
});

function checkInputs() {
  //Get the value the form field.
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();
  let error = true;

  //###################################
  if (emailValue === "") {
    setErrorInput(email, "Email Can't Be Blank.");
    error = false;
  } 
  else if (!ck_email.test(emailValue)){
    setErrorInput(email, "Please Write Valid Email ID.");
    error = false;
  }
  else {
    validateEmail(emailValue) && setSuccessInput(email);
  }

  //###################################
  if (passwordValue === "") {
    setErrorInput(password, "Password Can't Be Blank.");
    error = false;
  } 
  else if (!ck_password1.test(passwordValue)){
    setErrorInput(password, "Please Write Valid Password.");
    error = false;
  }
  else {
    setSuccessInput(password) && validatePassword(passwordValue);
  }
  return error;
}
 
function setErrorInput(input, errorMessage) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  small.innerText = errorMessage;
  formControl.className = "form__control error";
}

function setSuccessInput(input) {
  const formControl = input.parentElement;
  formControl.className = "form__control success";
}


function validateEmail(email) {
  let regular_expressions = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regular_expressions.test(String(email).toLocaleLowerCase());
}

function validatePassword(password) {
  let regular_expressions = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
  return regular_expressions.match(regular_expressions);
}