<?php
$pageTitle = "Home Page";
$pageCSS = "index.css";
$pageDescription = "Professional skin camouflage and practical guidance for individuals, healthcare professionals and clinical teams.";
$current_page = "index";

require __DIR__ . "/../components/header.php";
?>
<link rel="stylesheet" href="<?= escape(asset('style/animations/index.css')) ?>">

<!-- LANDING PAGE -->
<main id="main-content">
    <section class="hero">
        <div class="hero-content">
            <span><h1>Scar Confidence</h1><hr></span>
            <span><h2>Ethical Care Solutions</h2><hr></span>
            <div class="scroll-bounce" aria-hidden="true"><span>↓</span></div>
            <div class="hero-details">
                <div class="tag">
                    <span class="established"><span>Established:</span><span class="date">2025</span></span>
                </div>
            </div>
        </div>
    </section>
    <section class="secondSection">
        <div class="secondSection-content">
            <hr>
            <h2 class="secondSection-header">Tailored solutions for improving patient recovery experiences</h2>
            <p class="secondSection-text">
                At Scar Confidence, we provide <strong>customised scar management solutions</strong>
                designed specifically for hospitals and medical professionals. Our services prioritize
                quality care and patient comfort, ensuring effective outcomes. By focusing on
                personalized solutions, we help enhance recovery and foster trust between
                caregivers and patients in their healing journeys.
            </p>
            <hr class="secondSectionBottomHr">
        </div>
        <!-- made the image a direct child of .secondSection so space-between will work -->
        <img src="<?= escape(asset('assets/secondSection.png')) ?>" alt="A doctor talking to a patient" width="400" height="263" loading="lazy">
    </section>

    <section class="thirdSection">
        <div class="thirdSection-header"><h2>Key Benefits</h2></div>
        <div class="thirdSection-content">
            <div class="benefit">
                <img src="<?= escape(asset('assets/star.svg')) ?>" alt="" width="80" height="80" class="star">
                <p><strong>Quality care</strong> provided by experienced professionals dedicated to patient satisfaction.</p>
            </div>
            <div class="benefit">
                <img src="<?= escape(asset('assets/star.svg')) ?>" alt="" width="80" height="80" class="star">
                <p><strong>Personalized solutions</strong> tailored to meet the unique needs of each medical facility.</p>
            </div>
            <div class="benefit">
                <img src="<?= escape(asset('assets/star.svg')) ?>" alt="" width="80" height="80" class="star">
                <p><strong>Trusted expertise</strong> built on strong relationships within the medical community for over a year.</p>
            </div>
        </div>
        <hr class="secondSectionBottomHr">
    </section>

    <section class="fourthSection">
        <div class="fourthSection-content">
            <h2 class="fourthSection-header">Comprehensive Solutions</h2>
            <p class="fourthSection-text">
                Our comprehensive scar management solutions are designed to enhance recovery and improve
                outcomes. By focusing on personalized treatment plans, we ensure that each patient receives
                quality care tailored to their unique needs. This approach not only promotes healing but
                also fosters trust between medical professionals and patients.
            </p>
            <button id="toAbout" type="button">Learn More</button>
        </div>
        <picture>
            <source srcset="<?= escape(asset('assets/fourthSection-480.webp')) ?> 480w, <?= escape(asset('assets/fourthSection-960.webp')) ?> 960w" sizes="(max-width: 700px) calc(100vw - 48px), 450px" type="image/webp">
            <img src="<?= escape(asset('assets/fourthSection.png')) ?>" alt="A comparison of before and after using the product" width="1280" height="1229" loading="lazy">
        </picture>
    </section>

    <section class="fifthSection">
        <picture>
            <source srcset="<?= escape(asset('assets/fifthSection-480.webp')) ?> 480w, <?= escape(asset('assets/fifthSection-960.webp')) ?> 960w" sizes="(max-width: 700px) calc(100vw - 48px), 450px" type="image/webp">
            <img src="<?= escape(asset('assets/fifthSection.png')) ?>" alt="A doctor talking to a patient" width="1298" height="1212" loading="lazy">
        </picture>
        <div class="fifthSection-content">
            <hr class="secondSectionBottomHr">
            <h2 class="fifthSection-header">Innovative Scar Therapy</h2>
            <p class="fifthSection-text">
                Our innovative scar therapy solutions provide <strong>personalized care</strong> designed
                to enhance healing, improve outcomes, and foster confidence. We empower patients and
                support medical professionals with effective, ethical treatment options.
            </p>
            <button id="toDirectory" type="button">Get started</button>
        </div>
    </section>

    <section class="sixthSection">
        <div class="sixthSection-header-wrapper"><h2 class="sixthSection-header">Client Testimonials</h2></div>
        <div class="sixthSection-testimonials">
            <!-- Client 1 -->
            <div class="client-card">
                <img src="<?= escape(asset('assets/firstClient.png')) ?>" alt="A physician in a white coat" width="110" height="110" loading="lazy">
                <div class="sixthSection-content">
                    <h3 class="client-title">Dr. Michael, Physician</h3>
                    <p class="client-text">“Scar Confidence provided unparalleled support and exceptional service that truly transformed my patients’ recovery experiences. Highly recommend!”</p>
                </div>
            </div>

            <!-- Client 2 -->
            <div class="client-card">
                <img src="<?= escape(asset('assets/secondClient-320.webp')) ?>" alt="A nurse in blue scrubs" width="110" height="110" loading="lazy">
                <div class="sixthSection-content">
                    <h3 class="client-title">Sarah, Nurse</h3>
                    <p class="client-text">“The results we’ve seen using Scar Confidence's solutions are remarkable. The team is dedicated and always available for support.”</p>
                </div>
            </div>

            <!-- Client 3 -->
            <div class="client-card">
                <img src="<?= escape(asset('assets/thirdClient-320.webp')) ?>" alt="An administrator in professional clothing" width="110" height="110" loading="lazy">
                <div class="sixthSection-content">
                    <h3 class="client-title">Tom, Administrator</h3>
                    <p class="client-text">“Working with Scar Confidence has improved our patient outcomes significantly. Their professionalism and commitment are commendable.”</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . "/../components/banner.php"; ?>
<?php require __DIR__ . "/../components/footer.php"; ?>
