<?php
$pageTitle = "Tan'im & Al-Hill Guide | Al-Habib Tours & Travels";
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/source_badges.php';
?>

<!-- Hero Banner (Clean Light Theme) -->
<section class="bg-gradient-emerald text-dark py-5 border-bottom">
    <div class="container text-center py-3">
        <span class="badge px-4 py-2 rounded-pill mb-3 shadow border border-warning" style="background-color: #f59e0b !important; color: #000000 !important; font-weight: 800 !important; font-size: 0.95rem;">
            <i class="bi bi-geo-fill me-1 text-dark"></i> AL-HILL & MAKKAH GUIDANCE
        </span>
        <h1 class="display-4 fw-extrabold mb-3 text-emerald-head">Tan'im / Masjid Aisha — Who Should Use It?</h1>
        <p class="lead text-secondary max-w-800 mx-auto fw-medium">
            Understanding the true purpose of Tan'im, Al-Ji'ranah, Hudaybiyyah, and the Al-Hill boundaries according to Saudi Ministry guidelines and Islamic jurisprudence.
        </p>
    </div>
</section>

<!-- Main Container -->
<div class="container py-5">

    <!-- 1. IMPORTANT FIQH DISTINCTION -->
    <div class="card glass-card border-0 p-4 p-md-5 mb-5 shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <h3 class="fw-extrabold text-dark mb-0">Important Fiqh Distinction</h3>
            <?php render_source_badge('verified'); ?>
        </div>

        <div class="p-4 bg-gold-soft rounded-4 border border-warning mb-4 text-dark">
            <h5 class="fw-bold text-dark mb-2"><i class="bi bi-exclamation-triangle-fill text-gold me-2"></i> Key Clarification for Foreign Arrivals:</h5>
            <p class="mb-0 small fw-medium">
                Tan'im / Masjid Aisha is <strong>NOT</strong> the original Miqat for pilgrims arriving from outside Saudi Arabia (such as India, Pakistan, Levant, or Europe). If you are travelling from abroad intending Umrah, you MUST assume Ihram at or before your route's Miqat. You cannot pass your route's Miqat without Ihram and then go to Tan'im afterwards as a substitute!
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="p-4 bg-white rounded-4 border h-100">
                    <span class="badge bg-danger text-white mb-2">CASE 1: ARRIVING FROM OUTSIDE MAKKAH</span>
                    <h5 class="fw-bold text-dark mb-2">Travelling Toward Makkah for Umrah</h5>
                    <p class="small text-secondary mb-3"><strong>HOME CITY &rarr; FLIGHT/ROAD &rarr; YOUR ROUTE'S MIQAT &rarr; MAKKAH</strong></p>
                    <p class="small text-dark mb-0">
                        You MUST enter Ihram at your designated route Miqat (Dhul-Hulayfah, Al-Juhfah, Qarn al-Manazil, Yalamlam, Dhat Irq) or its parallel flight boundary.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 bg-emerald-soft rounded-4 border border-emerald-medium h-100">
                    <span class="badge bg-success text-white mb-2">CASE 2: ALREADY RESIDING / STAYING IN MAKKAH</span>
                    <h5 class="fw-bold text-dark mb-2">Performing a NEW Umrah While in Makkah</h5>
                    <p class="small text-secondary mb-3"><strong>INSIDE MAKKAH &rarr; CROSS HARAM BOUNDARY TO AL-HILL &rarr; TAN'IM / AL-HILL &rarr; MAKKAH</strong></p>
                    <p class="small text-dark mb-0">
                        If you are ALREADY inside Makkah and wish to perform an additional/new Umrah, you go outside the Haram boundary into <strong>Al-Hill</strong> (such as Tan'im/Masjid Aisha) and assume Ihram there.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. IS USING THE SPECIFIC MOSQUE COMPULSORY? -->
    <div class="card glass-card border-0 p-4 p-md-5 mb-5 shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <h3 class="fw-extrabold text-dark mb-0">Is Using the Specific Mosque at Tan'im Compulsory?</h3>
            <?php render_source_badge('verified'); ?>
        </div>
        <p class="text-dark small fw-medium mb-3">
            Saudi Ministry guidelines and scholarly fatwas clearly state: <strong>It is not obligatory to use the specific mosque building itself.</strong> The core requirement is stepping outside the sacred Haram boundary into the region of Al-Hill.
        </p>

        <div class="row g-3">
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border text-center">
                    <h6 class="fw-bold text-emerald-medium mb-1">Masjid Aisha (Tan'im)</h6>
                    <p class="micro-text text-secondary mb-0">Most famous location (~7.5 km north of Al-Masjid al-Haram) for people inside Makkah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border text-center">
                    <h6 class="fw-bold text-emerald-medium mb-1">Al-Ji'ranah</h6>
                    <p class="micro-text text-secondary mb-0">Located ~22 km northeast of Makkah where the Prophet ﷺ assumed Ihram for Umrah.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white rounded-3 border text-center">
                    <h6 class="fw-bold text-emerald-medium mb-1">Al-Hudaybiyyah (Al-Shumaysi)</h6>
                    <p class="micro-text text-secondary mb-0">Located ~24 km west of Makkah along the Jeddah Old Road.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- BUSINESS CONTACT CARD INTEGRATION -->
    <?php require __DIR__ . '/includes/contact_card.php'; ?>

</div>

<?php
require __DIR__ . '/includes/footer.php';
?>
