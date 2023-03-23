export class Post {
    constructor(data, cardSelector) {
        this._data = data // объект данных карточки
        this._title = data.title; // title карточки
        this._text = data.text; // текст карточки
        this._link = data.link; // ссылка на картинку в карточке
        this._userName = data.userName;

        this._cardSelector = cardSelector; // template элемент
    }



    //метод, который рендерит элемент карточки.
    generateCard() {
        this._element = document.querySelector(this._cardSelector).content.querySelector('.element').cloneNode(true);
        this._elementImage = this._element.querySelector('.post__img');
        this._elementTitle = this._element.querySelector('.post__title');
        this._elementText = this._element.querySelector('.post__text');
        this._elementUserName = this._element.querySelector('.post_userName');


        this._elementTitle.textContent = this._title;
        this._elementImage.src = this._link;
        this._elementImage.alt = this._title;
        this._elementText.textContent = this._text;
        this._elementUserName.textContent = this._userName;


        return this._element;
    }


}