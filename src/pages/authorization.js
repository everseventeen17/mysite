import {FormValidator} from "./components/FormValidator.js";
import {Api} from "./components/Api.js";

import {formAuthorization, emailAuthInput, passwordAuthInput,
        successMessage, errorMessage, validationConfig, apiUserData} from "./utils/constants.js";


const authorizationFormValidator = new FormValidator(validationConfig, formAuthorization)
authorizationFormValidator.enableValidation();

const apiAuth = new Api(apiUserData);

formAuthorization.addEventListener('submit', (e)=>{
    e.preventDefault();
    apiAuth.postAuthData(getUseInfo())
        .then(data => {
            if(data !== ''){
                hideForm(formAuthorization);
                successMessage.textContent = 'Поздравляем вы успешно вошли в систему';

            }else{
                errorMessage.textContent = "Введенные вами данные не корректы";
                authorizationFormValidator.resetValidation()
            }
        })

})


function getUseInfo (){
    return {
        email: emailAuthInput.value,
        password: passwordAuthInput.value,
    };
}

function hideForm (form) {
    form.classList.add('form__hide');
}
function showForm (form) {
    form.classList.remove('form__hide');
}