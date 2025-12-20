
// here I declare my variables
let ConfimeSubmition = 0;
let sigupForm = document.getElementById("sigupForm");
// here  I set the object of regex
let ValidateRules = {
  userName: {
    regex: /(.*[a-z]){3}/i,
    errormessage: "invilade userName"
  },
  password: {
    regex: /^[a-zA-Z0-9]{6,}$/,
    errormessage: "invilade password"
  }
}
// here I declare my eventslistieners
sigupForm.addEventListener("submit", ValidateForm);
// here I create my functions
function ValidateForm(e) {
   e.preventDefault();
   ConfimeSubmition = 0; // Reset counter at start
   
  let confirmPasswordInput = document.getElementById("confirmPassword");
  let passwordInput = document.getElementById("password").value;
  let signupInputs = document.querySelectorAll(".signupInputs");
  
  signupInputs.forEach(input => {
    let inputValue = input.value.trim();
    let errormessage = input.nextElementSibling;
    
    if (ValidateRules[input.name] && !inputValue.match(ValidateRules[input.name].regex)) {
      errormessage.textContent = ValidateRules[input.name].errormessage;
      errormessage.style.color = "red";
      input.style.border = "solid 2px red";
    }
    else {
      errormessage.textContent = "";
      input.style.border = "green solid 2px";
      ConfimeSubmition++;
    }
  })
  
  // Check password confirmation
  if (confirmPasswordInput.value.trim() !== passwordInput || !confirmPasswordInput.value.trim()) {
    confirmPasswordInput.style.border = "red solid 2px";
    let errorMsg = confirmPasswordInput.nextElementSibling;
    if (errorMsg) {
      errorMsg.textContent = "Passwords do not match";
      errorMsg.style.color = "red";
    }
  } else {
    confirmPasswordInput.style.border = "green solid 2px";
    let errorMsg = confirmPasswordInput.nextElementSibling;
    if (errorMsg) {
      errorMsg.textContent = "";
    }
    ConfimeSubmition++;
  }
  
  console.log(ConfimeSubmition);
  if(ConfimeSubmition === 3){
   sigupForm.submit();
  }
}
