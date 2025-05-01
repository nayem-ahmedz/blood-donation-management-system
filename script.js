var pYear = document.getElementById('pYear');
const currentYear = new Date().getFullYear();
pYear.textContent = '2025';

let nav = document.querySelector('nav');
function toggleNav(a){
    a.classList.toggle('change');
    nav.classList.toggle('bringNav');
    nav.style.overflow = 'visible';
}