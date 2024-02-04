const head = document.getElementById('header');
const abouthead = document.getElementById('about-header');
const textcol = document.getElementById('navBar');
const acccol = document.getElementById('drop');
const icolon  = document.getElementById('icol');
const nav = document.getElementById('chntxt');
// const edbtn = document.querySelector(".ed");
// const edopen = document.querySelector(".edit_user");
// const edclose = document.querySelector(".close-btn");
// edbtn.onclick = function(){
//     edopen.classList.add("active2");
//     alert("I have just been clicked");
// };
// function open(){
//     if(edbtn == true){
//         edopen.classList.add("active2");
//         console.log(edbtn, "You click me brother");
//     }
// }
// function close(){
//     if(edclose == true){
//         edclose.classList.remove("active2");
//         console.log("You click me brother");
//     }
// }
function appear(){
    if(icolon){
        // icolon.addEventListener("click", () => {
            nav.classList.add('active');
            console.log('You are seen my brother');
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
let image = document.getElementById('image');
let images = ['new4.png','new3.png','new2.png'];
// setInterval(function(){
//     let random = Math.floor(Math.random() * 3);
//     image.src = images[random];
//     console.log(images);
// },1500);
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

// const closebox = () =>{
//     edopen.classList.remove("active2");
//     edopen.style.display="none";
// };
// edbtn.addEventListener("click", () =>{
//     edopen.classList.add("active2");
//     edopen.style.display="block";  
// });
// edclose.addEventListener("click", ()=>{
//     closebox();
// });
const sin = document.getElementsByClassName("sin");
sin.onlcick = function(){
    alert("Are you sure you want to log out!");
}
// const opened = document.querySelector(".ed");
// const log = document.querySelector(".edit_user");
// opened.onclick = function(){
//     log.classList.add("active2");
//     alert("are my clicked");
// };
// .addEventListener("click", function(){
//     console.log("I have been clicked");
// });
// document.querySelector(".close-btn").addEventListener("click", function(){
//     document.querySelector(".edit_user").classList.remove("active2");
// });
// window.addEventListener('click', open);
// window.addEventListener('click', close);
// var putRemove = document.querySelector("#btn-active");
// putRemove.onlclick = function(){
//     putRemove.classList.add("active");
// }
var containUnder = document.getElementsByClassName("container-under");
var btnShowRemove = document.getElementsByClassName("btn");
for(var i = 0; i < btnShowRemove.length; i++){
    btnShowRemove[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        if(current.length > 0){
        current[0].className = current[0].className.replace("active", "");
    }
        this.className += " active";
        alert("I am working");
    });
}
window.addEventListener('click', appear);
window.addEventListener('scroll', changeBg);
window.addEventListener('scroll', aboutchng);