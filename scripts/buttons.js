document.addEventListener('click', function(event) {
    const toHome = event.target.closest('#toHome');

    if (toHome) {
        window.location.href = 'index.php';
    }
});