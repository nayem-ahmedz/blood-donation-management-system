var pYear = document.getElementById('pYear');
pYear.innerHTML = "2024";

let nav = document.querySelector('nav');
function toggleNav(a){
    a.classList.toggle('change');
    nav.classList.toggle('bringNav');
    nav.style.overflow = 'visible';
}