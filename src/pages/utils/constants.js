// REGISTRATION
export const formRegistration = document.querySelector('.form__registration');
export const nameRegInput = document.querySelector('.form__input_name');
export const emailRegInput = document.querySelector('.form__input-text_email');
export const passwordRegInput = document.querySelector('.form__input-text_password');
export const secPasswordRegInput = document.querySelector('.form__input-text_secondPassword');


// AUTHORIZATION
export const formAuthorization = document.querySelector('.form__authorization');
export const emailAuthInput = document.querySelector('.form__input-text_email')
export const passwordAuthInput = document.querySelector('.form__input-text_password')
export const successMessage = document.querySelector('.form__success-text');
export const errorMessage = document.querySelector('.form__error-text');



// VALIDATION CONFIG DATA
export const validationConfig = {
    inputSelector: '.form__input-text',
    submitButtonSelector: '.form__submit-btn',
    inactiveButtonClass: 'form__submit-btn_disabled',
    inputErrorClass: 'form__input-text_type_error',
    errorClass: 'form__error_visible'
};

// API DATA
export const apiUserData = {
    link: '../src/php/controllers/',
    headers: {
        'content-type': 'application/json; charset=utf-8'
    }
}

