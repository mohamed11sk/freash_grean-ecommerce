/* Accessible Mobile Menu Toggle */
function toggleMenu() {
    const nav = document.getElementById('side-nav');
    const toggleButton = document.querySelector('.menu-toggle');
    
    if (!nav || !toggleButton) return;
    
    const isOpen = nav.getAttribute('aria-hidden') === 'false';
    
    nav.setAttribute('aria-hidden', isOpen ? 'true' : 'false');
    toggleButton.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
    toggleButton.innerHTML = isOpen ? '☰' : '✖';
    
    if (!isOpen) {
        nav.classList.add('fadeInTop');
        document.body.style.overflow = 'hidden';
    } else {
        nav.classList.remove('fadeInTop');
        document.body.style.overflow = '';
    }
}

/* Close menu on link click */
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('nav a');
    const toggleButton = document.querySelector('.menu-toggle');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            const nav = document.getElementById('side-nav');
            nav.setAttribute('aria-hidden', 'true');
            toggleButton.setAttribute('aria-expanded', 'false');
            toggleButton.innerHTML = '☰';
            document.body.style.overflow = '';
        });
    });
    
    /* Close menu on Escape key */
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const nav = document.getElementById('side-nav');
            nav.setAttribute('aria-hidden', 'true');
            toggleButton.setAttribute('aria-expanded', 'false');
            toggleButton.innerHTML = '☰';
            document.body.style.overflow = '';
        }
    });
});
