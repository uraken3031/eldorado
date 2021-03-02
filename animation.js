'use strict';

let images = [
    "https://eldorado-salon.com/wp-content/uploads/2020/05/アートボード-11.jpg",
    "https://eldorado-salon.com/wp-content/uploads/2020/05/アートボード-12.jpg",
    "https://eldorado-salon.com/wp-content/uploads/2020/05/アートボード-14.jpg",
    "https://eldorado-salon.com/wp-content/uploads/2020/05/アートボード-8.jpg",
]

let currentNumber = 0;

let mainImg = document.getElementById('top-Img');
mainImg.src = images[currentNumber];

// mainImg.addEventListener('click', function(){

// })

let timeId;

function slideShow(){
    timeId = setTimeout(() => {
    if(currentNumber < images.length -1){
        currentNumber++;
        mainImg.src = images[currentNumber];
    }else{
        return;
    }
    slideShow();
    }, 2000);
}

slideShow();


