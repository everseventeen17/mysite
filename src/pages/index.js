import {Post} from "./components/Post.js";
import {Section} from "./components/Section.js";

const postData = [
    {   title: 'Title Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        userName: 'John Doe',
        link: 'https://img.freepik.com/free-photo/black-t-shirts-with-copy-space_53876-102012.jpg?size=626&ext=jpg',
    },
    {   title: 'Title Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        userName: 'John Doe',
        link: 'https://img.freepik.com/free-photo/black-t-shirts-with-copy-space_53876-102012.jpg?size=626&ext=jpg',
    },{   title: 'Title Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        userName: 'John Doe',
        link: 'https://img.freepik.com/free-photo/black-t-shirts-with-copy-space_53876-102012.jpg?size=626&ext=jpg',
    }
    ,{   title: 'Title Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        userName: 'John Doe',
        link: 'https://img.freepik.com/free-photo/black-t-shirts-with-copy-space_53876-102012.jpg?size=626&ext=jpg',
    }
]

const test = {   title: 'Title Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
    text: 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    userName: 'John Doe',
    link: 'https://img.freepik.com/free-photo/black-t-shirts-with-copy-space_53876-102012.jpg?size=626&ext=jpg',
}

// const templateElement = document.querySelector('.template');
const elementContainer = document.querySelector('.element-container');


const createCard = function (element) {
    const post = new Post(element, '.template');
    return post.generateCard();
}

const cardsDefault = new Section({
        items: postData,
        renderer: (element) => {
            cardsDefault.addItem(createCard(element));
        }
    },
    elementContainer);

cardsDefault.renderItems();
