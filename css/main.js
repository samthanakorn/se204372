/*================= CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('header')
    //when the scroll is greater than 50 viewport height, add
    if(this.scrollY >= 50) header.classList.add('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/*============== SERVICES MOAL ===============*/
const modalViews = document.querySelectorAll('.services__modal'),
      modalBtns = document.querySelectorAll('.services__button'),
      modalClose = document.querySelectorAll('.services__modal-close')

let modal = function(modalClick){
    modalViews[modalClick].classList.add('active-modal')
}

modalBtns.forEach((mb, i) =>{
    mb.addEventListener('click', () =>{
        modal(i)
    })
})

modalClose.forEach((mc)=>{
    mc.addEventListener('click', () =>{
        modalViews.forEach((mv) =>{
            mv.classList.remoce('active-modal')
        })
    })
})

/*============== MIXITUP FILTER PORTFOLIO ============*/
let mixerPortfolio = mixitup('.work__container', {
    selectors: {
        target: '.work__card'
    },
    animation: {
        duration: 300
    }
});

/* Link active work*/
const linkWork = document.querySelectorAll('.work__item')

function active(){
    linkWork.forEach(L=> l.classList.remove('active-work'))
    this.classsList.add('active-work')
}

linkWork.forEach(l=> l.addEventListener('click', activeWork))

/*================ SWIPER TESTIMONIAL ===============*/
let swiperTestimonial = new Swiper(".testimonial__container", {
    spaceBetween: 24,
    loop: true,
    grapCursor: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        576: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 48,
        },
    },
});

/*================ SCROLL SECTIONS ACTIVE LINK ============*/
const sections = document.querySelectionAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
        sectionTop = current.offsetTop - 58,
        sectionId = current.getAttribute('id')

    if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
    }else{
        document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
    }
    })
}
window.addEventListener('scroll', scrollActive)

/*=============== LIGHT DARK THEME =================*/
const themeButton = document.getElementById('theme-button')
const lightTheme = 'light-theme'
const iconTheme = 'bx bx-sun'

//Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

//We obtain the current theme that the interface has by validating the light-theme class
const getCurrentTheme = () => document.body.classList.contains(lightTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx bx-moon' : 'bx bx-sun'

//We validate if the user previously chose a topic
if(selectedTheme){
    //If the validtion is fulfilled, we ask what the issue was to know if we activated or deactivated the light
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](lightTheme)
    themeButton.classList[selectedIcon === 'bx bx-mon' ? 'add' : 'remove'](iconTheme)
}

//Activate / dectivate the theme manually with the button
themeButton.addEventListener('click', () =>{
    //Add or remove the dark / icon theme
    document.body.classList.toggle(lightTheme)
    themeButton.classList.toggle(iconTheme)
    //We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})
/*============== SCROLL REVRAL ANIMATION ==============*/
const sr = ScrollReveal({
    orgin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    //reset: true,
})

sr.reveal(`.home__data`)
sr.reveal(`.home__handle`, {delay: 700})
sr.reveal(`.home__social, .home__scroll`, {delay: 900,origin: 'bottom'})