
const button = document.querySelector('button')
const popup = document.querySelector('.popup-wrapper')
const closeButton = document.querySelector('.popup-close')


button.addEventListener('click' , ()=>{
    popup.style.display = 'block';
});

popup.addEventListener('click' , event =>{
    const classNameOfClickedElement = event.target.classList[0]
    console.log(classNameOfClickedElement)
    const clasNames = ['popup-link' , 'popup-close' , 'popup-wrapper']

    const closePopup = clasNames.some(clasName => clasName === classNameOfClickedElement)

    if(closePopup){
        popup.style.display = 'none';

    }
});
