<?php
$pageTitle = "Tan'im & Masjid Aisha Guide | Who Should Use It? | Al-Habib Tours";
include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/source_badges.php';
?>

<section class="bg-gradient-emerald text-white py-5">
    <div class="container text-center py-3">
        <span class="badge bg-gold text-dark fw-extrabold px-3 py-2 rounded-pill mb-3 shadow">
            <i class="bi bi-geo-alt-fill me-1"></i> AL-HILL & MAKKAH GUIDANCE
        </span>
        <h1 class="display-5 fw-extrabold mb-3 text-white">Tan'im / Masjid Aisha — Who Should Use It?</h1>
        <p class="lead text-white-80 max-w-700 mx-auto fw-medium">
            Understanding the true purpose of Tan'im, Al-Ju'ranah, Hudaybiyyah, and the Al-Hill boundaries according to Saudi Ministry guidelines and Islamic jurisprudence.
        </p>
    </div>
</section>

<div class="container py-5">

    <!-- CRITICAL DISTINCTION BOX -->
    <div class="card glass-card border-0 p-4 mb-5 border-start border-4 border-danger shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <h3 class="fw-extrabold text-dark mb-0"><i class="bi bi-exclamation-triangle-fill text-danger me-2"></i> Important Fiqh Distinction</h3>
            <?php render_source_badge('verified'); ?>
        </div>
        <p class="fs-5 text-dark fw-bold mb-3">
            Tan'im / Masjid Aisha is <strong>NOT</strong> the original Miqat for pilgrims arriving from outside Saudi Arabia (such as India, Pakistan, Levant, or Europe).
        </p>
        <p class="text-dark small mb-0 fw-medium">
            If you are travelling from abroad intending Umrah, you MUST assume Ihram at or before your route's Miqat. You cannot pass your route's Miqat without Ihram and then go to Tan'im afterwards as a substitute!
        </p>
    </div>

    <!-- COMPARISON FLOW -->
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card border-0 shadow bg-white p-4 rounded-4 h-100 border-start border-4 border-emerald-medium">
                <span class="badge bg-emerald-medium text-white me-auto mb-2 px-3 py-2">CASE 1: ARRIVING FROM OUTSIDE MAKKAH</span>
                <h4 class="fw-extrabold text-dark mb-3">Travelling Toward Makkah for Umrah</h4>
                <div class="p-3 bg-emerald-soft rounded-3 mb-3 text-center fw-bold text-dark border">
                    HOME CITY &rarr; FLIGHT/ROAD &rarr; YOUR ROUTE'S MIQAT &rarr; MAKKAH
                </div>
                <p class="small text-dark mb-0 fw-medium">
                    You MUST enter Ihram at your designated route Miqat (Dhul-Hulayfah, Al-Juhfah, Qarn al-Manazil, Yalamlam, Dhat Irq) or its parallel flight boundary.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card border-0 shadow bg-white p-4 rounded-4 h-100 border-start border-4 border-gold">
                <span class="badge bg-gold text-dark me-auto mb-2 px-3 py-2 fw-extrabold">CASE 2: ALREADY RESIDING / STAYING IN MAKKAH</span>
                <h4 class="fw-extrabold text-dark mb-3">Performing a NEW Umrah While in Makkah</h4>
                <div class="p-3 bg-gold-soft rounded-3 mb-3 text-center fw-bold text-dark border">
                    INSIDE MAKKAH &rarr; CROSS HARAM BOUNDARY TO AL-HILL &rarr; TAN'IM / AL-HILL &rarr; MAKKAH
                </div>
                <p class="small text-dark mb-0 fw-medium">
                    If you are ALREADY inside Makkah and wish to perform an additional/new Umrah, you go outside the Haram boundary into <strong>Al-Hill</strong> (such as Tan'im/Masjid Aisha) and assume Ihram there.
                </p>
            </div>
        </div>
    </div>

    <!-- SPECIFIC MOSQUE NOT COMPULSORY -->
    <div class="card glass-card border-0 p-4 mb-5 shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <h4 class="fw-extrabold text-dark mb-0">Is Using the Specific Mosque at Tan'im Compulsory?</h4>
            <?php render_source_badge('verified'); ?>
        </div>
        <p class="text-dark mb-3 fw-medium">
            Saudi Ministry guidelines and scholarly fatwas clearly state: <strong>It is not obligatory to use the specific mosque building itself.</strong> The core requirement is stepping outside the sacred Haram boundary into the region of Al-Hill.
        </p>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border shadow-sm">
                    <h6 class="fw-bold text-dark mb-1">Masjid Aisha (Tan'im)</h6>
                    <p class="small text-dark mb-0">Most famous location (~7.5 km north of Al-Masjid al-Haram) for people inside Makkah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border shadow-sm">
                    <h6 class="fw-bold text-dark mb-1">Al-Ju'ranah</h6>
                    <p class="small text-dark mb-0">Historical site (~22 km northeast of Makkah) where the Prophet ﷺ entered Ihram after Hunayn.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border shadow-sm">
                    <h6 class="fw-bold text-dark mb-1">Other Al-Hill Locations</h6>
                    <p class="small text-dark mb-0">Any point outside the Haram boundary markers is valid for a resident/visitor inside Makkah.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- BUSINESS CONTACT CARD -->
    <?php include __DIR__ . '/includes/contact_card.php'; ?>

</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
