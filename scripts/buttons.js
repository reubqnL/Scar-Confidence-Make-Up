document.addEventListener('click', function(event) {
    const toHome = event.target.closest('#toHome');
    const toAbout = event.target.closest('#toAbout')
    const toDirectory = event.target.closest('#toDirectory')
    const toContact = event.target.closest('#toContact')

    if (toHome) {
        window.location.href = 'index.php';
    } else if (toAbout) {
        window.location.href = 'about.php';
    } else if (toDirectory) {
        window.location.href = 'toDirectory'
    } else if (toContact) {
        window.location.href = 'toContact'
    }
});