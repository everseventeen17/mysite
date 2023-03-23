import {FormValidator} from "./components/FormValidator.js";
import Api from "./components/Api.js";

import {
    validationConfig,
    apiUserData,
    formRegistration,
    emailRegInput,
    nameRegInput,
    passwordRegInput,
    secPasswordRegInput,
    emailAuthInput,
    passwordAuthInput,
    formAuthorization,
    successMessage, errorMessage
} from "./utils/constants.js";



const registrationFormValidator = new FormValidator(validationConfig, formRegistration)
registrationFormValidator.enableValidation();

const apiReg = new Api(apiUserData);

formRegistration.addEventListener('submit', (e)=>{
    e.preventDefault();
    apiReg.postUserData(getUseInfo('registration'))
        .then(data =>{
            if(data == 1 ){
                errorMessage.textContent = 'Данный пользователь уже существует';
            }else if (data == 2){
                errorMessage.textContent = 'Пароль не совпадает';

            }else{
                successMessage. textContent = 'все ок';
                window.location.href = '/';
            }
        })
})


function getUseInfo (act){
    return {
        name:nameRegInput.value,
        email: emailRegInput.value,
        password: passwordRegInput.value,
        secPassowrd:secPasswordRegInput.value,
        action: act,
    };
}

function hideForm (form) {
    form.classList.add('form__hide');
}
