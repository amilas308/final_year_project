const head = document.getElementById('header');
const textcol = document.getElementById('navBar');
const acccol = document.getElementById('drop');
const icolon  = document.getElementById('icol');
const nav = document.getElementById('chntxt');
function appear(){
    if(icolon){
        // icolon.addEventListener("click", () => {
            nav.classList.add('active');
            console.log('You are seen my brother');
        // })
    }
}
function changeBg(){
    var scrollValue = window.scrollY;
    console.log(scrollValue);
    if(scrollValue > 0){
        head.classList.add('pa-fixed-header');
        textcol.classList.add('text-black');
        acccol.classList.add('text-black');
        // icol.classList.add('text-black');
    } else{
        head.classList.remove('pa-fixed-header');
        textcol.classList.remove('text-black');
        acccol.classList.remove('text-black');
        // icol.classList.add('text-black');
    }
}
window.addEventListener('click', appear)
window.addEventListener('scroll', changeBg);