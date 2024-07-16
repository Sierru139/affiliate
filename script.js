    
function addTestimonialsToContainer(testimonials) {
    const container = document.getElementById('testimonial-container');
    testimonials.forEach(testimonial => {
        const slide = createTestimonialSlide(testimonial);
        container.appendChild(slide);
    });
}


    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        effect: 'fade',

        navigation: {
            nextEl:'.swiper-button-next',
            prevEl:'.swiper-button-prev',
        },

        autoplay: {
            delay: 5000,
        },
    })

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
                slidesPerView: 3,
                spaceBetween: 10
            },
            1020: {
                slidesPerView: 4,
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
    const swiper3 = new Swiper('.swiper3', {
        // Optional parameters
        direction: 'horizontal',
        breakpoints: {
            520: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            // 720: {
            // slidesPerView: 3,
            // spaceBetween: 10,
            // },
            1020: {
                slidesPerView: 4,
                spaceBetween: 10,
            }
        },

        navigation: {
            nextEl:'.swiper-button-next',
            prevEl:'.swiper-button-prev',
        },

        autoplay: {
            delay: 4000,
        },
    })
    
    const navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 100) {
            navbar.classList.remove("absolute", "text-white");
            navbar.classList.add("goDown", "bg-white", "fixed");
        } else {
            navbar.classList.remove("fixed", "bg-white", "goDown");
            navbar.classList.add("absolute", "text-white");
        }
    })

    const respoNav = document.getElementById('resNav');
    const respoMenu = document.getElementById('resMenu');
    respoNav.addEventListener('click', function() {
        if (respoMenu.classList.contains('hidden')) {
            respoMenu.classList.remove('hidden');
            respoMenu.classList.add('block');
        } else {
            respoMenu.classList.add('hidden');
            respoMenu.classList.remove('block');
        }
    });

    const respoNavClose = document.getElementById('resNavClose')
    respoNavClose.addEventListener('click', function() {
        if (respoMenu.classList.contains('block')) {
            respoMenu.classList.remove('block');
            respoMenu.classList.add('hidden');
            respoMenu.classList.add('hidden');
        } else {
            respoMenu.classList.add('block');
            respoMenu.classList.remove('hidden');
        }
    })

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
    

    // Contact Session
    // Form To Whatsapp
    function sendToWhatsapp() {
        let number = "+6281524552620";
        let name = document.getElementById('nama').value;
        let email = document.getElementById('email').value;
        let message = document.getElementById('pesan').value;

        var url = "https://wa.me/" + number + "?text=" 
        + "Nama : " + name + "%0a" 
        + "Email : " + email  + "%0a"
        + "Pertanyaan : " + message;
        window.open(url, '_blank').focus();

    }