export class Api {
    constructor(apiData) { // принимает объект с ссылкой и токеном
        this._link = apiData.link; // ссылка идентификатор группы cohort-59
        this._headers = apiData.headers; // токен
    }
    _checkResponse(res) {
        if (res.ok) {
            return res.text();
        } else {
            return Promise.reject(`Ошибка ${res.status}`);
        }
    }
// 1. Авторизация пользователя
    postAuthData(obj) {
        return fetch(`${this._link}usersAuth.php`, {
            headers: this._headers,
            method: 'POST',
            body: JSON.stringify(obj)
        })
            .then(this._checkResponse)
    };
    // 2. Регистрация пользователя
    postRegData(obj) {
        return fetch(`${this._link}usersReg.php`, {
            headers: this._headers,
            method: 'POST',
            body: JSON.stringify(obj)
        })
            .then(this._checkResponse)
    };
}
export default Api;