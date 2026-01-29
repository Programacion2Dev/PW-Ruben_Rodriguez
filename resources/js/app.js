// Importar Popper PRIMERO (necesario para Bootstrap modals, dropdowns, tooltips, etc)
import * as Popper from '@popperjs/core';
window.Popper = Popper;

// Importar Bootstrap como módulo ES6
import * as bootstrap from 'bootstrap';

// Hacer disponible globalmente para uso tradicional si es necesario
window.bootstrap = bootstrap;

// Importar componentes específicos que usaremos mucho
import { Modal, Toast, Tooltip, Popover, Collapse } from 'bootstrap';

// Componentes médicos personalizados
import './modules/recaptcha';
import './modules/forms';
import './modules/animations';

// Utilidades personalizadas
// Slider SERVICIOS
/* var servicesCarousel = (function () {
    var container = document.getElementById('servicesCarousel');
    var slides = container.querySelectorAll('.carousel-item-custom');
    var dots = document.querySelectorAll('#carouselDots .dot');
    var index = 0;
    var autoplayInterval;
    var resumeTimeout;

    function showSlide(i) {
        slides[index].classList.remove('active');
        dots[index].classList.remove('active');

        index = i;

        slides[index].classList.add('active');
        dots[index].classList.add('active');
    }

    function startAutoplay() {
        autoplayInterval = setInterval(function () {
            var i = (index + 1) % slides.length;
            showSlide(i);
        }, 5000);
    }

    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    function pauseAndResume() {
        stopAutoplay();
        clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(function () {
            startAutoplay();
        }, 3000);
    }

    return {
        next: function () {
            var i = (index + 1) % slides.length;
            showSlide(i);
        },
        prev: function () {
            var i = (index - 1 + slides.length) % slides.length;
            showSlide(i);
        },
        goTo: function (i) {
            if (i >= 0 && i < slides.length) {
                showSlide(i);
            }
        },
        startAutoplay: startAutoplay,
        stopAutoplay: stopAutoplay,
        pauseAndResume: pauseAndResume
    };
})(); */

// Slider OPINIONES
// Constructor del carrusel
function ServiceCarousel(containerId) {
    var container = document.getElementById(containerId);
    
    // Verificar si el contenedor existe
    if (!container) {
        console.error('Contenedor no encontrado:', containerId);
        return null;
    }
    
    var slides = container.querySelectorAll('.carousel-item-custom');
    var dots = document.querySelectorAll('[data-carousel="' + containerId + '"] .dot');
    var index = 0;
    var autoplayInterval;
    var resumeTimeout;
    
    // Validar que haya slides
    if (slides.length === 0) {
        console.warn('No se encontraron slides en:', containerId);
        return null;
    }

    function showSlide(i) {
        // Ocultar slide actual
        slides[index].classList.remove('active');
        if (dots[index]) dots[index].classList.remove('active');

        // Actualizar índice
        index = i;

        // Mostrar nuevo slide
        slides[index].classList.add('active');
        if (dots[index]) dots[index].classList.add('active');
    }

    function startAutoplay() {
        stopAutoplay(); // Limpiar cualquier intervalo existente
        autoplayInterval = setInterval(function () {
            var i = (index + 1) % slides.length;
            showSlide(i);
        }, 5000);
    }

    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    function pauseAndResume() {
        stopAutoplay();
        clearTimeout(resumeTimeout);
        resumeTimeout = setTimeout(function () {
            if(containerId != "reviewsCarousel") { // Pausar slider de los reviews
                startAutoplay();
            }
        }, 3000);
    }

    // Inicializar
    if (slides.length > 0) {
        showSlide(0);
    }

    // Retornar métodos públicos
    return {
        next: function () {
            var i = (index + 1) % slides.length;
            showSlide(i);
        },
        prev: function () {
            var i = (index - 1 + slides.length) % slides.length;
            showSlide(i);
        },
        goTo: function (i) {
            if (i >= 0 && i < slides.length) {
                showSlide(i);
            }
        },
        getCurrentIndex: function () {
            return index;
        },
        getTotalSlides: function () {
            return slides.length;
        },
        startAutoplay: startAutoplay,
        stopAutoplay: stopAutoplay,
        pauseAndResume: pauseAndResume
    };
}

// Crear instancias para cada carrusel
var reviewsCarousel = new ServiceCarousel('reviewsCarousel');
var reviewsCarouselXs = new ServiceCarousel('reviewsCarouselXs');
var servicesCarousel = new ServiceCarousel('servicesCarousel');
var servicesCarouselXs = new ServiceCarousel('servicesCarouselXs');
// Agrega más según necesites

// Iniciar autoplay de todos los sliders al cargar
document.addEventListener('DOMContentLoaded', function () {
    /* if (reviewsCarousel && reviewsCarousel.startAutoplay) { // Pausar slider de los reviews
        reviewsCarousel.startAutoplay();
    } */
    if (servicesCarousel && servicesCarousel.startAutoplay) {
        servicesCarousel.startAutoplay();
    }
    if (servicesCarouselXs && servicesCarouselXs.startAutoplay) {
        servicesCarouselXs.startAutoplay();
    }
    // startCredentialAutoplay();
});

// CAROUSEL CERTIFICACIONES - 2 EN 2
let activeCredentialSlide = 0;
const totalCredentialSlides = 2;
let credentialAutoplay;
let credentialResumeTimeout;

function credentialsNext() {
    activeCredentialSlide = (activeCredentialSlide + 1) % totalCredentialSlides;
    showCredentialSlide();
}

function credentialsPrev() {
    activeCredentialSlide = (activeCredentialSlide - 1 + totalCredentialSlides) % totalCredentialSlides;
    showCredentialSlide();
}

function currentCredentialSlide(n) {
    activeCredentialSlide = n;
    showCredentialSlide();
}

function showCredentialSlide() {
    const slides = document.querySelectorAll('.credentials-carousel-slide');
    slides.forEach((slide, index) => {
        if (index === activeCredentialSlide) {
            slide.classList.add('active');
        } else {
            slide.classList.remove('active');
        }
    });
    
    const dots = document.querySelectorAll('#credentialsDots .dot');
    dots.forEach((dot, index) => {
        if (index === activeCredentialSlide) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
}

function startCredentialAutoplay() {
    credentialAutoplay = setInterval(() => {
        credentialsNext();
    }, 5000);
}

function stopCredentialAutoplay() {
    clearInterval(credentialAutoplay);
}

function pauseAndResumeCredential() {
    stopCredentialAutoplay();
    clearTimeout(credentialResumeTimeout);
    credentialResumeTimeout = setTimeout(() => {
        // startCredentialAutoplay();
    }, 3000);
}

// SCROLL SUAVE Y CERRAR NAVBAR
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
            // Cerrar navbar en móvil
            const navbarCollapse = document.querySelector('#navbar-collapse-doctor-page');
            const navToggle = document.querySelector('.navbar-toggler');
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                navToggle.click();
            }
        }
    });
});

// CERRAR NAVBAR AL HACER CLIC FUERA
document.addEventListener('click', function(event) {
    const navbar = document.querySelector('.navbar-doctor-page');
    const navbarCollapse = document.querySelector('#navbar-collapse-doctor-page');
    const navToggle = document.querySelector('.navbar-toggler');
    
    // Si el clic no es dentro del navbar
    if (!navbar.contains(event.target)) {
        // Si el navbar está abierto, cerrarlo
        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
            navToggle.click();
        }
    }
});

// NAVEGAR SECCIONES Y MARCAR ACTIVA
window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.navbar-doctor-page .nav > li');
    
    let currentSection = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        if (pageYOffset >= sectionTop - 100) {
            currentSection = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.querySelector('a').getAttribute('href') === '#' + currentSection) {
            link.classList.add('active');
        }
    });
});

// Activar enlace cuando se hace clic
document.addEventListener('click', (e) => {
    const navLink = e.target.closest('.nav-link[href^="#"]');
    if (navLink) {
        document.querySelectorAll('.navbar-nav .nav-item').forEach(item => {
            item.classList.remove('active');
        });
        navLink.closest('.nav-item').classList.add('active');
    }
});

// Funciones globales para los dots de sliders (llamadas desde onclick en HTML)
window.goToServiceSlide = function(index) {
    servicesCarousel.goTo(index);
    servicesCarousel.pauseAndResume();
    // Actualizar dots manualmente
    document.querySelectorAll('#carouselDots .dot').forEach((dot, i) => {
        if (i === index) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
};
window.goToServiceXsSlide = function(index) {
    servicesCarouselXs.goTo(index);
    servicesCarouselXs.pauseAndResume();
    // Actualizar dots manualmente
    document.querySelectorAll('#carouselDotsXs .dot').forEach((dot, i) => {
        if (i === index) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
};

window.goToReviewSlide = function(index) {
    reviewsCarousel.goTo(index);
    reviewsCarousel.pauseAndResume();
    // Actualizar dots manualmente
    document.querySelectorAll('#reviewDots .dot').forEach((dot, i) => {
        if (i === index) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
};

window.goToReviewXsSlide = function(index) {
    reviewsCarouselXs.goTo(index);
    reviewsCarouselXs.pauseAndResume();
    // Actualizar dots manualmente
    document.querySelectorAll('#reviewDotsXs .dot').forEach((dot, i) => {
        if (i === index) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
};

window.goToCredentialSlide = function(n) {
    activeCredentialSlide = n;
    showCredentialSlide();
    pauseAndResumeCredential();
    // Actualizar dots manualmente
    document.querySelectorAll('#credentialsDots .dot').forEach((dot, i) => {
        if (i === n) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
};

// Funciones globales para las flechas de sliders
window.nextServiceSlide = function() {
    servicesCarousel.next();
    servicesCarousel.pauseAndResume();
};
window.prevServiceSlide = function() {
    servicesCarousel.prev();
    servicesCarousel.pauseAndResume();
};

window.nextServiceXsSlide = function() {
    servicesCarouselXs.next();
    servicesCarouselXs.pauseAndResume();
};
window.prevServiceXsSlide = function() {
    servicesCarouselXs.prev();
    servicesCarouselXs.pauseAndResume();
};

window.nextReviewSlide = function() {
    reviewsCarousel.next();
    reviewsCarousel.pauseAndResume();
};
window.prevReviewSlide = function() {
    reviewsCarousel.prev();
    reviewsCarousel.pauseAndResume();
};

window.nextReviewSlide = function() {
    reviewsCarouselXs.next();
    reviewsCarouselXs.pauseAndResume();
};
window.prevReviewSlide = function() {
    reviewsCarouselXs.prev();
    reviewsCarouselXs.pauseAndResume();
};

window.nextCredentialSlide = function() {
    credentialsNext();
    pauseAndResumeCredential();
};
window.prevCredentialSlide = function() {
    credentialsPrev();
    pauseAndResumeCredential();
};

// console.log('Clínica Médica - JavaScript optimizado cargado');