const button = document.querySelector('button');
const popup = document.querySelector('.popup-wrapper');
const closeButton = document.querySelector('.popup-close');

// Evento de clique no botão para exibir o popup
button.addEventListener('click', () => {
    popup.style.display = 'block';
});

// Evento de clique no popup para fechá-lo
popup.addEventListener('click', event => {
    const classNameOfClickedElement = event.target.classList[0];
    console.log(classNameOfClickedElement);
    const classNames = ['popup-link', 'popup-close', 'popup-wrapper'];

    // Verifica se o elemento clicado possui uma das classes relevantes para fechar o popup
    const closePopup = classNames.some(className => className === classNameOfClickedElement);

    if (closePopup) {
        popup.style.display = 'none';
    }
});
