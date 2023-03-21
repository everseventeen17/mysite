import {FormValidator} from "./components/FormValidator.js";
import Api from "./components/Api.js";

import {
    validationConfig, apiUserData, formRegistration, emailRegInput,
    nameRegInput, passwordRegInput, secPasswordRegInput, emailAuthInput, passwordAuthInput
} from "./utils/constants.js";



const registrationFormValidator = new FormValidator(validationConfig, formRegistration)
registrationFormValidator.enableValidation();

const apiReg = new Api(apiUserData);

formRegistration.addEventListener('submit', (e)=>{
    e.preventDefault();
    apiReg.postRegData(getUseInfo())
        .then(data =>{

        })
})


function getUseInfo (){
    return {
        name:nameRegInput.value,
        email: emailRegInput.value,
        password: passwordRegInput.value,
        secPassowrd:secPasswordRegInput.value,
    };
}

