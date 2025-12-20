// here I declare my variables
let loginForm = document.getElementById("loginForm");
let ConfimeSubmition = 0;
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
loginForm.addEventListener("submit", ValidateForm);
// here I create my functions
function ValidateForm(e) {
   e.preventDefault();
   ConfimeSubmition = 0;
   let loginInputs = document.querySelectorAll(".loginInputs");
   loginInputs.forEach(input => {
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
   if(ConfimeSubmition === 2){
      loginForm.submit();
   }
}