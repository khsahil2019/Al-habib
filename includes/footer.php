<?php
// Footer Component - Grounded Deep Emerald Light Theme
?>

<div class="container my-4">
    <?php include __DIR__ . '/developer_card.php'; ?>
</div>

<footer class="site-footer mt-5">
    <div class="container">
        <div class="row g-4">
            <!-- Col 1: Brand & Bio -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="navbar-brand-logo rounded-circle me-2 d-flex align-items-center justify-content-center">
                        <i class="bi bi-moon-stars-fill text-dark fs-5"></i>
                    </div>
                    <div>
                        <h4 class="fw-extrabold text-white mb-0">AL-HABIB</h4>
                        <span class="text-gold small text-uppercase tracking-wider fw-bold">TOURS & TRAVELS</span>
                    </div>
                </div>
                <p class="small text-white-80 mb-3 fw-medium">
                    Authorized Hajj & Umrah travel agency based in Bangarmau, Unnao (UP). Group departures from Lucknow and Delhi with luxury hotel stays, complete Ziyarat, and scholar guidance.
                </p>
                <div class="small text-white-80">
                    <p class="mb-1"><i class="bi bi-geo-alt-fill text-gold me-2"></i> Lucknow Road, Bangarmau, Unnao, UP</p>
                    <p class="mb-1"><i class="bi bi-person-fill text-gold me-2"></i> Lead Guide: <strong>Hafiz Yusuf Malik</strong></p>
                    <p class="mb-0"><i class="bi bi-telephone-fill text-gold me-2"></i> <strong>+91 7860432995</strong></p>
                </div>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-extrabold text-gold text-uppercase tracking-wider mb-3">Quick Links</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2"><a href="index.html"><i class="bi bi-chevron-right me-1 text-gold"></i> Home</a></li>
                    <li class="mb-2"><a href="umrah_guide.html"><i class="bi bi-chevron-right me-1 text-gold"></i> Umrah Guide & Duas</a></li>
                    <li class="mb-2"><a href="miqat.html"><i class="bi bi-chevron-right me-1 text-gold"></i> Miqat Guide</a></li>
                    <li class="mb-2"><a href="tanim.html"><i class="bi bi-chevron-right me-1 text-gold"></i> Tan'im & Al-Hill</a></li>
                    <li class="mb-2"><a href="sources.html"><i class="bi bi-chevron-right me-1 text-gold"></i> Verified Sources</a></li>
                    <li class="mb-2"><a href="packages.html"><i class="bi bi-chevron-right me-1 text-gold"></i> Tour Packages</a></li>
                    <li class="mb-0"><a href="contact.html"><i class="bi bi-chevron-right me-1 text-gold"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Col 3: Fiqh Modules -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-extrabold text-gold text-uppercase tracking-wider mb-3">Fiqh Educational Modules</h6>
                <ul class="list-unstyled small mb-0">
                    <li class="mb-2"><a href="miqat.html#airTravel"><i class="bi bi-airplane-fill me-1 text-gold"></i> Air Travel Miqat Rules</a></li>
                    <li class="mb-2"><a href="miqat.html#crossedMiqat"><i class="bi bi-exclamation-triangle-fill me-1 text-gold"></i> Crossed Miqat Scenarios</a></li>
                    <li class="mb-2"><a href="miqat.html#commonMistakes"><i class="bi bi-x-circle-fill me-1 text-gold"></i> Common Miqat Mistakes</a></li>
                    <li class="mb-2"><a href="miqat.html#damExplained"><i class="bi bi-shield-fill-check me-1 text-gold"></i> Dam Rules Explained</a></li>
                    <li class="mb-0"><a href="tanim.html#alHill"><i class="bi bi-building-fill-check me-1 text-gold"></i> Tan'im & Al-Hill Guide</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact & Booking -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-extrabold text-gold text-uppercase tracking-wider mb-3">Bookings & Support</h6>
                <p class="small text-white-80 mb-3">
                    Have questions about Lucknow departures, hotel distance, or Dam rulings?
                </p>
                <a href="https://wa.me/917860432995?text=Assalamu%20Alaikum%20Hafiz%20Yusuf%20Malik%20Sahab,%20I%20want%20to%20book%20an%20Umrah%20package." 
                   target="_blank" class="btn btn-gold btn-sm w-100 fw-bold mb-2 shadow">
                    <i class="bi bi-whatsapp me-1"></i> WhatsApp Hafiz Yusuf Malik
                </a>
                <a href="tel:+917860432995" class="btn btn-outline-light btn-sm w-100 fw-bold">
                    <i class="bi bi-telephone me-1"></i> Call +91 7860432995
                </a>
            </div>
        </div>

        <hr class="my-4 border-secondary">

        <!-- Bottom Copyright & Developer Credit (Sahil Khan) -->
        <div class="d-flex flex-wrap justify-content-between align-items-center small text-white-80 gap-2">
            <div>
                &copy; <?php echo date('Y'); ?> <strong>Al-Habib Tours & Travels</strong>. All rights reserved.
            </div>
            <div>
                Designed & Developed in Sadaqah Jariyah by <a href="tel:+918739093014" class="text-gold fw-bold text-decoration-none">Sahil Khan</a> (Software Engineer | Apps & Web | +91 8739093014).
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom App Logic -->
<script src="assets/js/main.js"></script>
<script src="assets/js/miqat_tree.js"></script>
<script src="assets/js/dam_checker.js"></script>
</body>
</html>
