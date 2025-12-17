let init_nav_toggle = () => {
    const navToggle = document.getElementById('nav_toggle');
    const navMenu = document.getElementById('nav_main');

    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('open');
    });
};

let init_nav_link = () => {
    const homeLink = document.getElementById("nav_home_link");
    
    if (homeLink) {
        if (window.location.pathname === '/' || window.location.pathname === '/index.php') {
            homeLink.classList.add('active');
        }
    }

    const navLinks = document.querySelectorAll('#nav_main .nav-link');
        
    navLinks.forEach((link) => {
        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });  
};

// onload
window.addEventListener('load', function () {
    console.log('Page fully loaded');

    init_nav_toggle();
    init_nav_link();

});

