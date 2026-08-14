<?php
// Site Footer Component
?>
<footer class="site-footer mt-5">
    <div class="container">
        <div class="row g-4">
            <!-- Business Info -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-gold text-dark rounded-circle me-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <i class="bi bi-moon-stars-fill fs-5"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-0">AL-HABIB TOURS & TRAVELS</h5>
                </div>
                <p class="small text-white-70 mb-3">
                    Your trusted travel partner for sacred Hajj and Umrah pilgrimages. Providing scholar-backed educational guidance, luxury & economy packages, and dedicated assistance.
                </p>
                <div class="card bg-emerald-soft text-dark p-3 rounded-3 border-0">
                    <div class="fw-bold mb-1"><i class="bi bi-person-fill text-gold me-1"></i> Hafiz Yusuf Malik</div>
                    <div class="small"><i class="bi bi-telephone-fill me-1 text-gold"></i> +91 7860432995</div>
                    <div class="small"><i class="bi bi-geo-alt-fill me-1 text-gold"></i> Lucknow Road, Bangarmau, Unnao, UP, India</div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold text-gold mb-3 text-uppercase tracking-wider">Quick Links</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><a href="index.php"><i class="bi bi-chevron-right me-1"></i> Home</a></li>
                    <li class="mb-2"><a href="miqat.php"><i class="bi bi-chevron-right me-1"></i> Miqat System</a></li>
                    <li class="mb-2"><a href="tanim.php"><i class="bi bi-chevron-right me-1"></i> Tan'im & Al-Hill</a></li>
                    <li class="mb-2"><a href="sources.php"><i class="bi bi-chevron-right me-1"></i> Verified Sources</a></li>
                    <li class="mb-2"><a href="packages.php"><i class="bi bi-chevron-right me-1"></i> Tour Packages</a></li>
                    <li class="mb-2"><a href="contact.php"><i class="bi bi-chevron-right me-1"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Educational Knowledge -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold text-gold mb-3 text-uppercase tracking-wider">Miqat Educational Modules</h6>
                <ul class="list-unstyled mb-0 small">
                    <li class="mb-2"><a href="miqat.php#decisionTree"><i class="bi bi-diagram-3 me-1"></i> Interactive Decision Tree</a></li>
                    <li class="mb-2"><a href="miqat.php#damChecker"><i class="bi bi-calculator me-1"></i> Dam Lagega Ya Nahi? Tool</a></li>
                    <li class="mb-2"><a href="miqat.php#airTravel"><i class="bi bi-airplane me-1"></i> Flying to Jeddah for Umrah?</a></li>
                    <li class="mb-2"><a href="miqat.php#fiveMiqats"><i class="bi bi-geo-alt me-1"></i> 5 Prophetic Miqats Map</a></li>
                    <li class="mb-2"><a href="miqat.php#commonMistakes"><i class="bi bi-exclamation-circle me-1"></i> Common Miqat Mistakes</a></li>
                    <li class="mb-2"><a href="miqat.php#duas"><i class="bi bi-file-text me-1"></i> Niyyah & Talbiyah Duas</a></li>
                </ul>
            </div>

            <!-- Trilingual Notice & Contact CTA -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold text-gold mb-3 text-uppercase tracking-wider">Bookings & Inquiries</h6>
                <p class="small mb-3">Have questions about visa processing, group departures from Lucknow/Delhi, or custom packages?</p>
                <div class="d-grid gap-2">
                    <a href="https://wa.me/917860432995?text=Assalamu%20Alaikum,%20I%20have%20an%20Umrah%20inquiry." target="_blank" class="btn btn-gold btn-sm fw-bold">
                        <i class="bi bi-whatsapp me-1"></i> Chat on WhatsApp
                    </a>
                    <a href="tel:+917860432995" class="btn btn-outline-light btn-sm">
                        <i class="bi bi-telephone me-1"></i> Call +91 7860432995
                    </a>
                </div>
            </div>
        </div>

        <hr class="border-secondary my-4">

        <!-- Fiqh Disclaimer Component -->
        <?php include_once __DIR__ . '/disclaimer.php'; ?>

        <div class="row align-items-center py-3 small text-white-50">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                &copy; <?php echo date('Y'); ?> Al-Habib Tours & Travels. All rights reserved. Bangarmau, Unnao, UP.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span>Educational Guidance & Saudi Ministry Guidelines Compliant</span>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS Files -->
<script src="assets/js/main.js"></script>
<script src="assets/js/miqat_tree.js"></script>
<script src="assets/js/dam_checker.js"></script>

</body>
</html>
