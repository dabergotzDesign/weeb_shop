//open & close Login Form
const openLoginFormButton = document.querySelector(".header__login-button"),
        closeLoginFormButton = document.querySelector(".login__close"),
        loginForm = document.querySelector(".login");

    openLoginFormButton.addEventListener("click", ()=>{
        /* if(loginForm.classList.contains("hidden")){
            loginForm.classList.toggle("hidden");
        } */
        loginForm.classList.remove("out");
        loginForm.classList.add("in");

    });

    closeLoginFormButton.addEventListener("click", ()=>{
        if(!loginForm.classList.contains("out")){
            loginForm.classList.remove("in");
            loginForm.classList.add("out");
            //loginForm.classList.add("hidden");
            
        }
    });

    window.onclick = ev =>{
        if(ev.target == loginForm){
            loginForm.classList.remove("in");
            loginForm.classList.add("out");
        }
    }

//Login Process, Form Validation
/*
let emailInput = document.getElementById("email"),
    passwordInput = document.getElementById("password"),
    loginBtn = document.querySelector(".login__button");

loginBtn.addEventListener("click", ev =>{
    if(emailInput.value != '' || passwordInput.value != ''){
        console.log("you can login");
    }
    if(emailInput.value.trim() == ''){
        emailInput.style.borderColor = 'red'; 
        ev.preventDefault();
    }
   if(passwordInput.value.trim() == ''){
        passwordInput.style.borderColor = 'red';
        ev.preventDefault(); 
    }
});
*/
