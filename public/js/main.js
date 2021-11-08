var menu = document.querySelector('.bar');
var menuBox= document.querySelector('.menu')
var menuDetail = document.querySelector('.menu-det')
var menuList = document.querySelector('.menu-list')

menu.addEventListener('click', (e) => {
    e.preventDefault();

    menuDetail.classList.add('open')
    menuList.classList.add('open')

})

var menuClose = document.querySelector('.menu-close')

menuClose.addEventListener('click', (e) => {
    e.preventDefault();


    menuList.classList.remove('open')
    menuDetail.classList.remove('open')
    

})



var navBtns = document.querySelectorAll('.has-sub');
var subMenus = document.querySelectorAll('.sub-menu');
var icon = document.querySelectorAll('.menu-list ul li figure i')

navBtns.forEach((btn, i) => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        // subMenus.classList.remove('open')
        

        subMenus[i].classList.toggle('open')
        icon[i].classList.toggle('open')
    })


})


$('.message-box').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    autoplay:true,
    dots: false,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

$('.banner-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    autoplay:true,
    dots: false,
    autoplayTimeout: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

