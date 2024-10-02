document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.ask');
    questions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = this.querySelector('.answer');
            const arrow = this.querySelector('.arrow-rotate');
            if (arrow) {
                arrow.classList.toggle('arrow-rotated');
            }
            if (answer) {
                answer.classList.toggle('show');
            }
        });
    });
});

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        navbar.classList.remove("absolute", "text-white", "opacity-0");
        navbar.classList.add("goDown", "bg-white", "fixed", "shadow-sm");
    } else {
        navbar.classList.remove("fixed", "bg-white", "goDown", "shadow-sm");
        navbar.classList.add("absolute", "text-white", "opacity-0");
    }
})

document.addEventListener("DOMContentLoaded", function() {
    const respoNav = document.getElementById('resNav');
    const respoMenu = document.getElementById('resMenu');
    const respoNavClose = document.getElementById('resNavClose');

    respoNav.addEventListener('click', function() {
        if (respoMenu.classList.contains('hidden')) {
            respoMenu.classList.remove('hidden');
            respoMenu.classList.add('block');
        } else {
            respoMenu.classList.add('hidden');
            respoMenu.classList.remove('block');
        }
    });

    respoNavClose.addEventListener('click', function() {
        respoMenu.classList.add('nav-close');
        setTimeout(() => {
            respoMenu.classList.add('hidden');
            respoMenu.classList.remove('block', 'nav-close');
        }, 700);
    });
});

// INTERSECT
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if(entry.isIntersecting){
            setTimeout(() => {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }, index * 200);
        }
    });
});

const hiddenElements = document.querySelectorAll('.hdn');
hiddenElements.forEach((el) => observer.observe(el));

const observerUp = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if(entry.isIntersecting){
            setTimeout(() => {
                entry.target.classList.add('show');
                observerUp.unobserve(entry.target);
            }, index * 200);
        }
    });
});
    
const hiddenBtmElements = document.querySelectorAll('.hdnBtm');
hiddenBtmElements.forEach((el) => observerUp.observe(el));

const observerDown = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if(entry.isIntersecting){
            setTimeout(() => {
                entry.target.classList.add('show');
                observerDown.unobserve(entry.target);
            }, index * 200);
        }
    });
});
    
const hiddenTopElements = document.querySelectorAll('.hdnTop');
hiddenTopElements.forEach((el) => observerDown.observe(el));


// PAKET BUTTON ON CLICK

const buttonsPaket = document.querySelectorAll('.btn-paket');

buttonsPaket.forEach((button, index) => {
    button.addEventListener("click", function() {
        const pakets = document.querySelectorAll('.pakets');
        
        if (button.classList.contains('btn-bg-click')) {
            return;
        }

        buttonsPaket.forEach(btn => {
            btn.classList.remove('btn-bg-click');
        });
        
        pakets.forEach(paket => {
            paket.classList.add('hidden');
            paket.classList.remove('flex');
        });
        if (index < pakets.length) {
            pakets[index].classList.toggle('hidden');
            pakets[index].classList.toggle('flex');
        }
        button.classList.add('btn-bg-click');
    })
});


const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    breakpoints: {
        520: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        720: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        1020: {
            slidesPerView: 2,
            spaceBetween: 10,
        }
    },

    pagination: {
        el: '.swiper2 .swiper-pagination',
        // dynamicBullets: true,
        clickable: true,
    },

    autoplay: {
        delay: 5000,
    },
})