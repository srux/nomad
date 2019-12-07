(function(){
    var burger = document.querySelector('.burger-container'),
        header = document.querySelector('.header-mob');
    
    burger.onclick = function() {
        header.classList.toggle('menu-opened');
    }
}());