<!-- DISCLAIMER BANNER -->

<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

    .banner-container {
        position: fixed;
        top: 0;
        right: 40px;
        z-index: 1000;
        overflow: hidden;
        height: 80px;
    }

    .banner {
        background-color: #ff5722;
        color: white;
        font-family: "Roboto Mono", sans-serif;
        font-weight: bold;
        font-size: 14px;
        letter-spacing: 1px;
        padding: 12px 30px 22px 30px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        /* Banner spike style */
        clip-path: polygon(0 0, 100% 0, 100% calc(100% - 15px), 50% 100%, 0 calc(100% - 15px));

        /* Initial hidden state */
        transform: translateY(-100%);
        transition: transform 0.4s ease-in-out;
    }

    .banner.show {
        transform: translateY(0);
    }
</style>

<div class="banner-container">
    <div class="banner">
        CLASS PROJECT
    </div>
</div>
