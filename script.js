    
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
    

    // Contact Session
    // Form To Whatsapp
    function sendToWhatsapp() {
        let number = "+6287846421796";
        let name = document.getElementById('nama').value;
        let email = document.getElementById('email').value;
        let message = document.getElementById('pesan').value;

        var url = "https://wa.me/" + number + "?text="
        + "Salam%20kak%20saya%20ingin%20mengajukan%20pertanyaan%20mengenai%20Bintaro%20Learning%20Center%0A"
        + "Nama : " + name + "%0a" 
        + "Email : " + email  + "%0a"
        + "Pertanyaan : " + message;
        window.open(url, '_blank').focus();

    }


// // Quotes
// document.addEventListener("DOMContentLoaded", function() {
//     const textElements = document.querySelectorAll('.quotes');

//     const observer = new IntersectionObserver((entries, observer) => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 const textElement = entry.target;
//                 const text = textElement.textContent;
//                 textElement.innerHTML = '';
//                 for (let i = 0; i < text.length; i++) {
//                     const span = document.createElement('span');
//                     span.textContent = text[i] === ' ' ? '\u00A0' : text[i];  // Use non-breaking space for spaces
//                     span.style.animationDelay = `${i * 0.035}s`;
//                     textElement.appendChild(span);
//                 }
//                 observer.unobserve(textElement); // Stop observing after animation starts
//             }
//         });
//     }, { threshold: 0.1 }); // Trigger when 10% of the element is visible

//     textElements.forEach(textElement => {
//         observer.observe(textElement);
//     });
// });

