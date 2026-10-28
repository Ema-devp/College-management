/*=========================================
Mobile Sidebar
=========================================*/

const menuBtn = document.getElementById("menuBtn");
const closeBtn = document.getElementById("closeBtn");
const sidebar = document.querySelector(".sidebar");
const overlay = document.querySelector(".overlay");

/* Open Sidebar */

menuBtn.addEventListener("click", () => {
    sidebar.classList.add("active");
    overlay.classList.add("active");
    document.body.style.overflow = "hidden";
});

/* Close Sidebar */

closeBtn.addEventListener("click", closeSidebar);

overlay.addEventListener("click", closeSidebar);

function closeSidebar() {
    sidebar.classList.remove("active");
    overlay.classList.remove("active");
    document.body.style.overflow = "auto";
}

/*=========================================
Close Sidebar When Clicking Menu
=========================================*/

const sidebarLinks = document.querySelectorAll(".sidebar-menu a");

sidebarLinks.forEach((link) => {
    link.addEventListener("click", () => {
        closeSidebar();
    });
});

/*=========================================
Sticky Navbar
=========================================*/

const header = document.querySelector("header");

window.addEventListener("scroll", () => {

    if (window.scrollY > 100) {

        header.classList.add("sticky");

    } else {

        header.classList.remove("sticky");

    }

});

/*=========================================
Smooth Scroll
=========================================*/

const links = document.querySelectorAll('a[href^="#"]');

links.forEach((anchor) => {

    anchor.addEventListener("click", function (e) {

        const target = document.querySelector(this.getAttribute("href"));

        if (target) {

            e.preventDefault();

            target.scrollIntoView({
                behavior: "smooth"
            });

        }

    });

});

/*=========================================
Navbar Active Menu
=========================================*/

const navLinks = document.querySelectorAll(".nav-links a");

navLinks.forEach((link) => {

    link.addEventListener("click", function () {

        navLinks.forEach((item) => item.classList.remove("active"));

        this.classList.add("active");

    });

});

/*=========================================
Sidebar Active Menu
=========================================*/

const sideLinks = document.querySelectorAll(".sidebar-menu a");

sideLinks.forEach((link) => {

    link.addEventListener("click", function () {

        sideLinks.forEach((item) => item.classList.remove("active"));

        this.classList.add("active");

    });

});

/*=========================================
Hero Fade Animation
=========================================*/

window.addEventListener("load", () => {

    const heroContent = document.querySelector(".hero-content");

    heroContent.style.opacity = "0";
    heroContent.style.transform = "translateY(40px)";

    setTimeout(() => {

        heroContent.style.transition = "all .8s ease";
        heroContent.style.opacity = "1";
        heroContent.style.transform = "translateY(0)";

    }, 200);

});

/*=========================================
Button Hover Animation
=========================================*/

const buttons = document.querySelectorAll(".btn-primary, .btn-secondary");

buttons.forEach((button) => {

    button.addEventListener("mouseenter", () => {

        button.style.transform = "translateY(-4px)";

    });

    button.addEventListener("mouseleave", () => {

        button.style.transform = "translateY(0)";

    });

});

/*=========================================
Search Button
=========================================*/

const searchBtn = document.querySelector(".search-btn");

if (searchBtn) {

    searchBtn.addEventListener("click", () => {

        alert("Search feature will be added later.");

    });

}

/*=========================================
Scroll Down Button
=========================================*/

const scrollBtn = document.querySelector(".scroll-down");

if (scrollBtn) {

    scrollBtn.addEventListener("click", function (e) {

        e.preventDefault();

        const nextSection = document.querySelector("#about");

        if (nextSection) {

            nextSection.scrollIntoView({
                behavior: "smooth"
            });

        }

    });

}







/*=========================================
About University Swiper
=========================================*/

const aboutSwiper = new Swiper(".aboutSwiper", {

    loop: true,

    speed: 900,

    grabCursor: true,

    centeredSlides: false,

    spaceBetween: 30,

    slidesPerView: 1,

    navigation: {
        nextEl: ".about-next",
        prevEl: ".about-prev",
    },

    pagination: {

        el: ".about-pagination",

        clickable: true,

        renderBullet: function (index, className) {

            return '<span class="' + className + '">' +
                String(index + 1).padStart(2, '0') +
                '</span>';

        }

    },

    keyboard: {
        enabled: true,
    },

    mousewheel: {
        forceToAxis: true,
    },

    autoplay: {

        delay: 5000,

        disableOnInteraction: false,

        pauseOnMouseEnter: true,

    },

    effect: "slide",

    breakpoints: {

        0: {

            slidesPerView: 1,

            spaceBetween: 15,

        },

        768: {

            slidesPerView: 1,

            spaceBetween: 20,

        },

        992: {

            slidesPerView: 1,

            spaceBetween: 30,

        }

    }

});






