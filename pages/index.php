<?php
$pageTitle = "Home Page";
$pageCSS = "index.css";
$pageDescription = "";
$current_page = "index";

require __DIR__ . "/../components/header.php";
?>
<link rel="stylesheet" href="../style/animations/index.css">

<!-- LANDING PAGE -->
<main>
    <section class="hero">
        <div class="hero-content">
            <span><h2>Scar Confidence</h2>
            <hr style="
                border: none;
                height: 2px;
                background: linear-gradient(to right, black, transparent);
                width: calc(55% - 70px);
                margin-left: 30px;
            "></span>

            <span><h3>Ethical Care Solutions</h3>
            <hr style="
                border: none;
                height: 2px;
                background: linear-gradient(to right, black, transparent);
                width: calc(55% - 70px);
                margin-left: 30px;
            "></span>

            <div class="hero-details">
                <div class="tag">
                    <span class="established"><h4>Established:</h4>
                    <h4 class="date">2025</h4>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="secondSection">
        <div class="secondSection-content">
            <hr>
            <h2 class="secondSection-header">
                Tailored solutions for improving patient recovery experiences
            </h2>
            <p class="secondSection-text">
                At Scar Confidence, we provide <strong>customised scar management solutions</strong>
                designed specifically for hospitals and medical professionals. Our services prioritize
                quality care and patient comfort, ensuring effective outcomes. By focusing on
                personalized solutions, we help enhance recovery and foster trust between
                caregivers and patients in their healing journeys.
            </p>
        </div>
        <hr class="secondSectionBottomHr">
        <!-- made the image a direct child of .secondSection so space-between will work -->
        <img src="../assets/secondSection.png" alt="A doctor talking to a patient">
    </section>

</main>

<?php require __DIR__ . "/../components/banner.php"; ?>