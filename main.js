const abouthead = document.getElementById('about-header');
const icolon  = document.getElementById('icol');
const nav = document.getElementById('chntxt');
const head = document.getElementById('header');
const textcol = document.getElementById('navBar');
const acccol = document.getElementById('droptangle');
function changeBg(){
    var scrollValue = window.scrollY;
    console.log(scrollValue);
    if(scrollValue > 0){
        head.classList.add('pa-fixed-header');
        textcol.classList.add('text-black');
        acccol.classList.add('text-black');
        // nav.classList.add('text-black');
        // icol.classList.add('text-black');
    } else{
        head.classList.remove('pa-fixed-header');
        // abouthead.classList.remove('pa-fixed-header');
        textcol.classList.remove('text-black');
        acccol.classList.remove('text-black');
        // nav.classList.remove('text-black');
        // icol.classList.add('text-black');
    }
}
function appear(){
    if(icolon){
        // icolon.addEventListener("click", () => {
            nav.classList.add('active');
            // console.log('You are seen my brother');
            // })
        }
    }
    function aboutchng(){
        var godown = window.scrollY;
        console.log(abouthead, "I have seen it");
    if(godown > 0){
        abouthead.classList.add('pa-fixed-header');
    } else{
        abouthead.classList.remove('pa-fixed-header');
    }
}
window.addEventListener('scroll', aboutchng);
window.addEventListener('click', appear);
window.addEventListener('scroll', changeBg);
document.addEventListener('DOMContentLoaded', function(){
const prodcut = document.getElementsByClassName('product-btn');
let list = document.querySelector('.viewimg .list');
let items = document.querySelectorAll('.viewimg .list .item');
let prev = document.getElementById('prev');
let next = document.getElementById('next');
let active = 0;
let lenthItem = items.length - 1;
next.onclick = function(){
    // active += 1;
    if(active + 1 > lenthItem){
        active = 0;
    } else{
        active = active + 1;
    }
    reloadSlider();
}
prev.onclick = function(){
    if(active - 1 < 0){
        active = lenthItem;
    } else{
        active = active - 1;
    }
    reloadSlider();
}
let refreshSlider = setInterval(() => {next.click()}, 6000);
function reloadSlider(){
    checkLeft = items[active].offsetLeft;
    list.style.left = -checkLeft + 'px';
    clearInterval(refreshSlider);
    refreshSlider = setInterval(() => {next.click()}, 6000);
}
prodcut.onlcick = () => {
    prodcut.classList.add("active1");
}

let image = document.getElementById('image');
let images = ['new4.png','new3.png','new2.png'];

const sin = document.getElementsByClassName("sin");
sin.onlcick = function(){
    alert("Are you sure you want to log out!");
}
var btnShowRemove = document.getElementsByClassName("btn");
for(var i = 0; i < btnShowRemove.length; i++){
    btnShowRemove[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        if(current.length > 0){
        current[0].className = current[0].className.replace("active", "");
    }
        this.className += " active";
        // alert("I am working");
    });
}
// window.addEventListener('scroll');
// window.addEventListener('click', plusSlide);
});