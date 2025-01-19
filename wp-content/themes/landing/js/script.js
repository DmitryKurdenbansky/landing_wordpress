document.addEventListener('DOMContentLoaded', () => {


const mainLanguages = document.querySelectorAll('.language-main');
const languageSelects = document.querySelectorAll('.language-select');
const vectorImgs = document.querySelectorAll('.vector-img');

mainLanguages.forEach((mainLanguage, index) => {
    mainLanguage.addEventListener('click', (e) => {
        e.stopPropagation();

        vectorImgs[index].classList.toggle('rotate');

        languageSelects[index].style.display = (languageSelects[index].style.display === 'block') ? 'none' : 'block';
    });
});

document.addEventListener('click', () => {
    languageSelects.forEach((languageSelect) => {
        languageSelect.style.display = 'none';
    });

    vectorImgs.forEach((vectorImg) => {
        vectorImg.classList.remove('rotate');
    });
});


});