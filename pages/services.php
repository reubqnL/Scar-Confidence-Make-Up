<?php
$pageTitle = "Services";
$pageCSS = "services.css";
$pageDescription = "";
$current_page = "services";

require __DIR__ . "/../components/header.php";
?>

<section class="services">
    <div class="heroContainer">
        <h3><span class="subtitle">Products & Services<br></span>
            <span class="gradient">Camouflage that<br>
            feels like <i>you</i>.</h3>
            </span>
        <p>Specialist makeup and practical guidance for scars, burns, birthmarks, pigmentation changes and
            other visible differences.</p>
    </div>

    <div class="cardContainer">
        <div class="cardItem i1">
            <p class="number">01</p>
            <h2>Skin camouflage creams</h2>
            <h3>High-pigment, breathable coverage developed to soften the appearance of scars, burns and
                areas of discolouration.</h3>
            <hr>
            <h4>Available in 24 adaptable shades</h4>
        </div>
        <div class="cardItem i2">
            <p class="number">02</p>
            <h2>Colour correction</h2>
            <h3>Targeted neutralising palettes that help balance redness, pigmentation and uneven skin
                tone before coverage.</h3>
            <hr>
            <h4>Clinician-guided colour matching</h4>
        </div>
        <div class="cardItem i3">
            <p class="number">03</p>
            <h2>Settings & protection</h2>
            <h3>Lightweight powders and barrier sprays designed to improve transfer resistance while
                remaining comfortable.</h3>
            <hr>
            <h4>Everyday, water-resistant wear</h4>
        </div>
        <div class="cardItem i4">
            <p class="number">04</p>
            <h2>Professional kits</h2>
            <h3>Practical, sanitisation-conscious kits for hospital teams, skin camouflage practitioners
                and training settings.</h3>
            <hr>
            <h4>Built for clinical environments</h4>
        </div>
    </div>
    <hr class="break">
</section>

<section class="routineContainer">
    <div class="routineItems">
        <h3><span class="subtitle">Using camouflage</span><br>
        Designed to fit<br> your routine</h3>
        <p>Good camouflage is not only about coverage. Preparation, colour, application and setting all
            affect comfort and wear.</p>
    </div>
    <div class="horizontalCardContainer">
        <div class="horizontalCardItem">
            <p class="horizontalNumber">1</p>
            <h2>Prepare</h2>
            <p>Apply only to clean, fully healed skin. Keep skincare simple and allow moisturiser
                to absorb before beginning.</p>
        </div>
        <div class="horizontalCardItem">
            <p class="horizontalNumber">2</p>
            <h2>Correct & match</h2>
            <p>Use a small amount of colour corrector where helpful, then build a matched camouflage
                shade in thin layers.</p>
        </div>
        <div class="horizontalCardItem">
            <p class="horizontalNumber">3</p>
            <h2>Set</h2>
            <p>Press setting powder gently over the area. A barrier spray can add transfer resistance
                when suitable.</p>
        </div>
        <div class="horizontalCardItem">
            <p class="horizontalNumber">4</p>
            <h2>Remove</h2>
            <p>At the end of the day, remove the product without rubbing and follow the care advice
                given by your clinician.</p>
        </div>
        <div class="notice">
            <p><strong>A note on skin safety:</strong> camouflage should not be applied to open, infected or actively
                healing skin. Patch test new products and ask your clinical team when you are unsure
                whether your skin is ready.</p>
        </div>
</section>
<hr style="border: none; margin: 60px 0 0 0;">

<section class="advertisement">
    <div class="advertisementContainer">
        <h2>For clinical teams</h2>
        <h3>More than products on a shelf.</h3>
        <p>We support practitioners with shade matching, application guidance and straightforward
            product information. Training can be adapted to your team and care setting.</p>
        <button class="toContact" id="toContact">Discuss clinical supply →</button>
    </div>
</section>

<section class="faq">
    <div class="faqContainer">
        <h2>Common questions</h2>
        <h3>Before you choose a product</h3>
        <hr>
        <div class="faqItem">
            <h4>Is skin camouflage the same as ordinary makeup?</h4>
            <p>It usually contains more pigment and is designed for targeted, buildable coverage and
                longer wear. The finish can still be natural when applied in thin layers.</p>
            <hr>
        </div>
        <div class="faqItem">
            <h4>Can it cover every type of scar?</h4>
            <p>Coverage varies with colour, texture and skin condition. Camouflage changes appearance
                rather than skin texture, and results should always be discussed realistically.</p>
            <hr>
        </div>
        <div class="faqItem">
            <h4>Do I need a professional colour match?</h4>
            <p>
                A guided match is helpful, especially for a first product. Skin tone can also change
                seasonally, so some people use two blendable shades.</p>
        </div>
        <hr>
    </div>
</section>

<?php require __DIR__ . "/../components/footer.php"; ?>