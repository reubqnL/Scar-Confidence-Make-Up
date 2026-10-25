<!-- DISCLAIMER BANNER -->

<style>

    .banner-container {
        position: fixed;
        top: 0;
        right: 16px;
        z-index: 1000;
        pointer-events: none;
        overflow: hidden;
        height: 65px;
    }

    .banner {
        background-color: #de0a26;
        color: white;
        font-family: "Roboto Mono", sans-serif;
        font-weight: bold;
        font-size: 11px;
        letter-spacing: 1px;
        padding: 8px 16px 18px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        /* Banner spike style */
        clip-path: polygon(0 0, 100% 0, 100% calc(100% - 15px), 50% 100%, 0 calc(100% - 15px));

        /* Initial hidden state */
        transform: translateY(-100%);
        transition: transform 0.6s ease-in-out;
    }

    @media (max-width: 760px) { .banner-container { display: none; } }

    .banner.show {
        transform: translateY(0);
    }
</style>

<div class="banner-container">
    <div class="banner">
        CLASS PROJECT
    </div>
</div>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const banner = document.querySelector('.banner');
        setTimeout(() => {
            banner.classList.add('show');
        }, 300);
    });
</script>