
function burgerMenu(){
    document
    document.querySelector(".header__burger").classList.toggle("active");
    document.querySelector(".header__menu").classList.toggle("open");
    document.querySelector(".header__menu").classList.toggle("active");
    };

function sampleBtn(){
    document
    var myID = document.activeElement.id;
    // document.getElementById(myID).innerText = document.getElementById(myID).innerText === 'КУПИТЬ' ? 'отменить' : 'купить';
    let countOfItems = Number(document.getElementById('bag-id').innerText);
    if(document.getElementById(myID).innerText == 'КУПИТЬ'){
        document.getElementById(myID).innerText = 'Отменить';
        document.getElementById('bag-id').innerText = countOfItems + 1;
    }else{
        document.getElementById(myID).innerText = 'КУПИТЬ';
        document.getElementById('bag-id').innerText = countOfItems - 1;
    }
};

function catalogBtn(){
    document
    var myID = document.activeElement.id;
    let countOfItems = Number(document.getElementById('bag-id').innerText);
    if(document.getElementById(myID).innerText == 'В корзину'){
        document.getElementById(myID).innerText = 'Отменить';
        document.getElementById('bag-id').innerText = countOfItems + 1;
    }else{
        document.getElementById(myID).innerText = 'В корзину';
        document.getElementById('bag-id').innerText = countOfItems - 1;
    }
};