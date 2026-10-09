document.addEventListener('click', function(event) {
    const toHome = event.target.closest('#toHome');
    const toAbout = event.target.closest('#toAbout')

    if (toHome) {
        window.location.href = 'index.php';
    } else if (toAbout) {
        window.location.href = 'about.php';
    }
});