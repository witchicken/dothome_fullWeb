const prev = document.getElementsByClassName('btn_prev');
const next = document.getElementsByClassName('btn_next');
const slides = document.querySelectorAll('.slide');
let count = 1;
console.log(slides);
console.log(prev);
let countabs = 0;
function abc(){
    countabs = Math.abs(count);
    if(countabs == (slides.length)){
        countabs=0;
    }
    if(countabs>=0){
        for(let x of slides){
            x.classList.remove('visible');
        }
        slides[countabs].classList.add('visible');
    }
    count = countabs;
    count++;
    console.log(count);
    window.count = count;
}
next[0].addEventListener('click',abc);
prev[0].addEventListener('click',bcd);


function bcd(){
    count--
    console.log(count);
    countabs = Math.abs(count);
    if(countabs == (slides.length)){
        countabs=0;
    }
    if(countabs>=0){
        for(let x of slides){
            x.classList.remove('visible');
        }
        if((countabs-1)<0){
            countabs = 3;
        }
        slides[countabs-1].classList.add('visible');
    }
    count = countabs;
    window.count = count;
}
