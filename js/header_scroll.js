// Header scroll effect
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('py-2');
        header.querySelector('div').classList.add('shadow-xl');
    } else {
        header.classList.remove('py-2');
        header.querySelector('div').classList.remove('shadow-xl');
    }
});