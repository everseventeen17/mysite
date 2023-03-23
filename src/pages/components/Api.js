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
    postUserData(obj) {
        return fetch(`${this._link}users.php`, {
            headers: this._headers,
            method: 'POST',
            body: JSON.stringify(obj)
        })
            .then(this._checkResponse)
    };
}
export default Api;