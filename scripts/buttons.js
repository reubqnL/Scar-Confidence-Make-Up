document.addEventListener('click', function(event) {
    const target = event.target.closest('button');
    const routes = {
        toHome: 'index.php',
        toAbout: 'about.php',
        toDirectory: 'directory.php',
        toContact: 'contact.php'
    };

    if (target && routes[target.id]) {
        window.location.href = new URL(routes[target.id], window.location.href).href;
    }
});

const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('#primary-navigation');

if (menuToggle && navigation) {
    menuToggle.addEventListener('click', () => {
        const open = menuToggle.getAttribute('aria-expanded') !== 'true';
        menuToggle.setAttribute('aria-expanded', String(open));
        navigation.classList.toggle('is-open', open);
        menuToggle.querySelector('.menu-toggle-label').textContent = open ? 'Close menu' : 'Menu';
    });

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && menuToggle.getAttribute('aria-expanded') === 'true') {
            menuToggle.setAttribute('aria-expanded', 'false');
            navigation.classList.remove('is-open');
            menuToggle.querySelector('.menu-toggle-label').textContent = 'Menu';
            menuToggle.focus();
        }
    });

    window.matchMedia('(min-width: 761px)').addEventListener('change', event => {
        if (event.matches) {
            menuToggle.setAttribute('aria-expanded', 'false');
            navigation.classList.remove('is-open');
            menuToggle.querySelector('.menu-toggle-label').textContent = 'Menu';
        }
    });
}
