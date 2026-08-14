<?php
function render_source_badge($type) {
    switch(strtolower($type)) {
        case 'verified':
        case 'verified source':
            echo '<span class="badge bg-success-subtle text-success border border-success me-2 px-2 py-1"><i class="bi bi-patch-check-fill me-1"></i> VERIFIED SOURCE</span>';
            break;
        case 'general':
        case 'general guidance':
            echo '<span class="badge bg-info-subtle text-info border border-info me-2 px-2 py-1"><i class="bi bi-info-circle-fill me-1"></i> GENERAL GUIDANCE</span>';
            break;
        case 'difference':
        case 'fiqh difference':
            echo '<span class="badge bg-warning-subtle text-warning-emphasis border border-warning me-2 px-2 py-1"><i class="bi bi-book-half me-1"></i> FIQH DIFFERENCE</span>';
            break;
        case 'scholar':
        case 'ask a scholar':
        default:
            echo '<span class="badge bg-danger-subtle text-danger border border-danger me-2 px-2 py-1"><i class="bi bi-person-check-fill me-1"></i> ASK A SCHOLAR</span>';
            break;
    }
}
?>
