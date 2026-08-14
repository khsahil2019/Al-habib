/**
 * Al-Habib "Dam Lagega Ya Nahi?" Educational Tool Logic
 */

document.addEventListener('DOMContentLoaded', () => {
    initDamChecker();
});

function initDamChecker() {
    const form = document.getElementById('damCheckerForm');
    const resultBox = document.getElementById('damResultContainer');

    if (!form || !resultBox) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const scenario = document.getElementById('damScenarioSelect').value;
        const returnedToMiqat = document.getElementById('damReturnedSelect').value;
        const ihramEntered = document.getElementById('damIhramEnteredSelect').value;

        evaluateDamScenario(scenario, returnedToMiqat, ihramEntered);
    });
}

function evaluateDamScenario(scenario, returned, ihramEntered) {
    const resultBox = document.getElementById('damResultContainer');
    if (!resultBox) return;

    let statusClass = "bg-warning-subtle border-warning text-dark";
    let badgeText = "YELLOW: Scholar Consultation Recommended";
    let badgeBg = "bg-warning text-dark";
    let title = "Scholar Consultation Required";
    let explanation = "";
    let actionRecommendation = "";

    // Green Scenario: Realized before Ihram & returned to Miqat
    if (returned === 'yes' && ihramEntered === 'no_before_return') {
        statusClass = "bg-success-subtle border-success text-dark";
        badgeText = "GREEN: Likely Resolved by Returning to Miqat";
        badgeBg = "bg-success text-white";
        title = "Penalty (Dam) Likely Avoided by Returning";
        explanation = "According to cited scholarly guidance (such as Sheikh Ibn Baz fatwas), if a person realizes they crossed the Miqat without Ihram, and returns to the actual Miqat BEFORE entering Ihram to assume Ihram from there, this addresses the missed Miqat issue.";
        actionRecommendation = "Confirm your specific details with a qualified Mufti. Returning before assuming Ihram is the prescribed remedy.";
    } 
    // Red Scenario: Continued past Miqat and entered Ihram later without returning
    else if (returned === 'no' && ihramEntered === 'yes_later') {
        statusClass = "bg-danger-subtle border-danger text-dark";
        badgeText = "RED: Potential Dam Issue — Consult Mufti";
        badgeBg = "bg-danger text-white";
        title = "Dam Issue Arises According to Many Scholars";
        explanation = "If a person crossed the Miqat intending Umrah, did not return, and entered Ihram from a later point (e.g. Jeddah or highway), the issue of Dam (penalty sacrifice) arises according to the consensus of many scholars.";
        actionRecommendation = "Your Umrah is NOT automatically invalid, but you must consult a qualified Mufti to determine the exact Dam binding upon you and how it should be fulfilled in Makkah.";
    } 
    // Yellow Scenarios: Forgot, Did Not Know, Removed Ihram, etc.
    else {
        statusClass = "bg-warning-subtle border-warning text-dark";
        badgeText = "YELLOW: Scholar Consultation Recommended";
        badgeBg = "bg-warning text-dark";
        title = "Personal Circumstance & Madhhab Specific Case";
        explanation = "Absence of knowledge or forgetfulness are distinct situations in fiqh. While sincerity is recognized, lack of knowledge does not mean every legal consequence is automatically waived. The exact ruling depends on your school of thought (madhhab) and specific timeline.";
        actionRecommendation = "Detail your exact timeline (when Niyyah was made, when garments were worn, when Miqat was crossed) to a qualified Islamic scholar or Mufti.";
    }

    const html = `
        <div class="card border-2 shadow-sm rounded-4 ${statusClass} animate-fade-in my-3">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="badge ${badgeBg} px-3 py-2 fw-bold"><i class="bi bi-shield-check me-1"></i> ${badgeText}</span>
                    <span class="small text-muted">Educational Guidance Only</span>
                </div>
                <h4 class="fw-bold mb-2">${title}</h4>
                <p class="mb-3 fs-6 text-dark">${explanation}</p>
                
                <div class="bg-white p-3 rounded-3 mb-3 border">
                    <h6 class="fw-bold text-dark mb-1"><i class="bi bi-arrow-right-circle-fill text-gold me-1"></i> Action Recommendation:</h6>
                    <p class="mb-0 small text-secondary">${actionRecommendation}</p>
                </div>

                <div class="alert alert-light border small mb-3 text-secondary">
                    <i class="bi bi-info-circle me-1"></i> <strong>Disclaimer:</strong> This website NEVER issues a 100% automated Fatwa. Rulings depend on madhhab and exact facts.
                </div>

                <div class="d-flex gap-2">
                    <a href="https://wa.me/917860432995?text=Assalamu%20Alaikum%20Hafiz%20Yusuf%20Malik%20Sahab,%20I%20have%20a%20Dam%20inquiry%20regarding:%20${encodeURIComponent(title)}" 
                       target="_blank" class="btn btn-gold fw-bold">
                        <i class="bi bi-whatsapp me-1"></i> Discuss Case with Hafiz Yusuf Malik (+91 7860432995)
                    </a>
                </div>
            </div>
        </div>
    `;

    resultBox.innerHTML = html;
}
