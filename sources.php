<?php
$pageTitle = "Verified Sources & Fiqh References | Al-Habib Tours & Travels";
include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/source_badges.php';
?>

<section class="bg-gradient-emerald text-white py-5">
    <div class="container text-center py-3">
        <span class="badge bg-gold text-dark fw-bold px-3 py-2 rounded-pill mb-3">
            <i class="bi bi-patch-check-fill me-1"></i> VERIFIED FIQH & SCHOLARLY SOURCES
        </span>
        <h1 class="display-5 fw-extrabold mb-3">Sources, References & Guidance Basis</h1>
        <p class="lead text-white-80 max-w-700 mx-auto">
            All educational information on this platform is derived from authentic Hadith texts, official Saudi Ministry guidance, and established Islamic jurisprudence.
        </p>
    </div>
</section>

<div class="container py-5">

    <!-- HADITH SOURCES -->
    <div class="card glass-card border-0 p-4 mb-5" id="hadith">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold text-emerald-medium mb-0">1. Authentic Hadith References for Prophetic Miqats</h3>
            <?php render_source_badge('verified'); ?>
        </div>

        <div class="bg-white p-4 rounded-4 border shadow-sm mb-4">
            <div class="d-flex justify-content-between align-items-start mb-2">
                <h5 class="fw-bold text-dark mb-0">Sahih al-Bukhari 1524 / Sahih Muslim 1181</h5>
                <span class="badge bg-success-subtle text-success border border-success">Sahih Bukhari</span>
            </div>
            <div class="arabic-font fs-4 text-emerald-medium text-end my-3 leading-loose">
                «وَقَّتَ رَسُولُ اللَّهِ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ لِأَهْلِ الْمَدِينَةِ ذَا الْحُلَيْفَةِ ، وَلِأَهْلِ الشَّأْمِ الْجُحْفَةَ ، وَلِأَهْلِ نَجْدٍ قَرْنَ الْمَنَازِلِ ، وَلِأَهْلِ الْيَمَنِ يَلَمْلَمَ ، هُنَّ لَهُنَّ وَلِمَنْ أَتَى عَلَيْهِنَّ مِنْ غَيْرِ أَهْلِهِنَّ مِمَّنْ كَانَ يُرِيدُ الْحَجَّ وَالْعُمْرَةَ»
            </div>
            <p class="small text-dark mb-1">
                <strong>Translation:</strong> Narrated by Ibn 'Abbas (R.A.): "Allah's Messenger ﷺ appointed Dhul-Hulayfah for the people of Madinah, Al-Juhfah for the people of Sham (Levant), Qarn al-Manazil for the people of Najd, and Yalamlam for the people of Yemen. These Miqats are for their people and for whoever passes by them from other people intending Hajj or Umrah."
            </p>
        </div>
    </div>

    <!-- SAUDI MINISTRY GUIDANCE -->
    <div class="card glass-card border-0 p-4 mb-5" id="saudiMinistry">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold text-emerald-medium mb-0">2. Official Saudi Ministry of Hajj & Umrah Guidance</h3>
            <?php render_source_badge('verified'); ?>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="bg-white p-3 rounded-4 border shadow-sm h-100">
                    <h5 class="fw-bold text-dark mb-2"><i class="bi bi-journal-text text-gold me-2"></i> Official Ihram Awareness Guide</h5>
                    <p class="small text-muted mb-3">Published by the Ministry of Hajj and Umrah (Kingdom of Saudi Arabia).</p>
                    <ul class="list-unstyled small mb-3">
                        <li><i class="bi bi-check2 text-emerald-medium me-1"></i> Specifies that pilgrims arriving by air must enter Ihram before crossing the parallel Miqat point.</li>
                        <li><i class="bi bi-check2 text-emerald-medium me-1"></i> Clarifies that Jeddah is not the original Miqat for foreign air travelers.</li>
                    </ul>
                    <a href="https://haj.gov.sa/-/media/Project/HAJJ/Awareness-Guides/Ihram-Guide/English/en-ihram-guide.pdf" target="_blank" class="btn btn-sm btn-outline-emerald fw-bold">
                        <i class="bi bi-file-earmark-pdf me-1"></i> View Official Ministry PDF
                    </a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="bg-white p-3 rounded-4 border shadow-sm h-100">
                    <h5 class="fw-bold text-dark mb-2"><i class="bi bi-building text-gold me-2"></i> Umrah Guide for Visitors & Residents</h5>
                    <p class="small text-muted mb-3">Official guidelines for people inside Makkah or Saudi Arabia.</p>
                    <ul class="list-unstyled small mb-3">
                        <li><i class="bi bi-check2 text-emerald-medium me-1"></i> Confirms that individuals inside Makkah performing a new Umrah must exit to Al-Hill.</li>
                        <li><i class="bi bi-check2 text-emerald-medium me-1"></i> Specific mosque building is not compulsory; exiting the Haram boundary into Al-Hill is required.</li>
                    </ul>
                    <a href="https://haj.gov.sa/-/media/Project/HAJJ/Awareness-Guides/Umrah-Guide-for-Domestic-Pilgrims/EN-Umrah-Guide-for-Domestic-Pilgrims.pdf" target="_blank" class="btn btn-sm btn-outline-emerald fw-bold">
                        <i class="bi bi-file-earmark-pdf me-1"></i> View Official Visitor Guide PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- SCHOLARLY FATWA CITATIONS -->
    <div class="card glass-card border-0 p-4 mb-5" id="scholarlyFatwas">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold text-emerald-medium mb-0">3. Contemporary Scholarly Ruling Citations</h3>
            <?php render_source_badge('scholar'); ?>
        </div>

        <div class="bg-white p-4 rounded-4 border shadow-sm mb-3">
            <h5 class="fw-bold text-dark mb-1">Sheikh Abdul Aziz ibn Baz Fatwa Collection</h5>
            <p class="small text-muted mb-2">Ruling on crossing the Miqat without Ihram and returning before vs after assuming Ihram (Fatwa #14506 & #30666).</p>
            <p class="small text-dark mb-3">
                <strong>Key Scholarly Principle:</strong> If a person crosses the Miqat without Ihram, but realizes the mistake BEFORE making Niyyah and returns to the actual Miqat to assume Ihram from there, no penalty (Dam) is incurred. However, if they continue towards Makkah/Jeddah and enter Ihram after the Miqat, Dam becomes binding according to many scholars.
            </p>
            <a href="https://binbaz.org.sa/fatwas/14506/%D8%AD%D9%83%D9%85-%D9%85%D9%86-%D8%AC%D8%A7%D9%88%D8%B2-%D8%A7%D9%84%D9%85%D9%8A%D9%82%D8%A7%D8%AA-%D8%AF%D9%88%D9%86-%D8%A7%D8%AD%D8%B1%D8%A7%D9%85" target="_blank" class="btn btn-sm btn-outline-secondary fw-bold">
                <i class="bi bi-box-arrow-up-right me-1"></i> Read Ibn Baz Fatwa Source (#14506)
            </a>
        </div>
    </div>

    <!-- BUSINESS CONTACT CARD -->
    <?php include __DIR__ . '/includes/contact_card.php'; ?>

</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
