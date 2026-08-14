/**
 * Al-Habib Miqat Decision Tree Logic - Light Theme High Contrast
 */

document.addEventListener('DOMContentLoaded', () => {
    initDecisionTree();
});

const treeQuestions = [
    {
        id: 1,
        title: "1. Are you intending Hajj or Umrah?",
        options: [
            { label: "Yes, I intend Umrah or Hajj", next: 2 },
            { label: "No, traveling for business/tourism only", result: "NO_IHRAM_NEEDED" }
        ]
    },
    {
        id: 2,
        title: "2. Where did you form the intention for Umrah/Hajj?",
        options: [
            { label: "Before travel / At my home city", next: 3 },
            { label: "During the journey (in flight / on road)", next: 3 },
            { label: "After reaching Jeddah without prior intention", result: "JEDDAH_INTENTION" },
            { label: "After reaching Makkah city", next: 7 }
        ]
    },
    {
        id: 3,
        title: "3. Have you already crossed the relevant Miqat or parallel flight boundary?",
        options: [
            { label: "Yes, already crossed", next: 4 },
            { label: "No, still before Miqat / in flight before parallel point", result: "PREPARE_BEFORE_MIQAT" }
        ]
    },
    {
        id: 4,
        title: "4. Are you currently in the state of Ihram (Niyyah + Talbiyah)?",
        options: [
            { label: "Yes, entered Ihram before/at Miqat", result: "IHRAM_VALID" },
            { label: "No, crossed without entering Ihram", next: 5 }
        ]
    },
    {
        id: 5,
        title: "5. Can you reasonably return to the relevant Miqat before entering Ihram?",
        options: [
            { label: "Yes, I can return to Miqat", next: 6 },
            { label: "No, cannot return (already far / visa / transport issues)", result: "CONTINUED_PAST_MIQAT" }
        ]
    },
    {
        id: 6,
        title: "6. Did you already enter the city of Makkah?",
        options: [
            { label: "Yes, I am already in Makkah", result: "IN_MAKKAH_WITHOUT_IHRAM" },
            { label: "No, currently in Jeddah / highway before Makkah", result: "RETURN_TO_MIQAT_GUIDANCE" }
        ]
    },
    {
        id: 7,
        title: "7. Are you trying to perform a NEW Umrah while already residing or staying inside Makkah?",
        options: [
            { label: "Yes, I am in Makkah wanting a 2nd/new Umrah", result: "AL_HILL_TANIM_GUIDANCE" },
            { label: "No, I came from outside Saudi Arabia directly", result: "OUTSIDE_PILGRIM_RULE" }
        ]
    }
];

const treeResults = {
    "NO_IHRAM_NEEDED": {
        title: "General Tourism / Business Travel",
        badge: "GENERAL GUIDANCE",
        summary: "If you have no intention of performing Hajj or Umrah, Ihram is not required when passing the Miqat.",
        whatNext: "If your intention changes later while in Saudi Arabia, consult a scholar regarding where to assume Ihram.",
        questionsForMufti: ["What if I decide to perform Umrah after completing my business in Jeddah?"]
    },
    "JEDDAH_INTENTION": {
        title: "Intention Formed After Arriving in Jeddah",
        badge: "FIQH DIFFERENCE",
        summary: "If a person traveled to Jeddah without any intention of Umrah, and later decided to perform Umrah while in Jeddah, the ruling on where to enter Ihram differs based on scholarly views.",
        whatNext: "Do not automatically assume Jeddah acts as a universal Miqat for everyone coming from abroad.",
        questionsForMufti: [
            "Was my initial journey strictly non-religious?",
            "Can I assume Ihram from my hotel in Jeddah, or do I need to go to a Miqat?"
        ]
    },
    "PREPARE_BEFORE_MIQAT": {
        title: "Prepare Ihram Before Reaching Miqat / Parallel Point",
        badge: "VERIFIED SOURCE",
        summary: "You have not crossed the Miqat yet! You should put on your Ihram garments and make Niyyah & Talbiyah before the aircraft reaches the parallel Miqat point.",
        whatNext: "Monitor flight altitude/announcements and make Niyyah 20–30 minutes before the announced parallel point. Do not delay until landing in Jeddah.",
        questionsForMufti: ["What if the airline announcement is delayed or missed?"]
    },
    "IHRAM_VALID": {
        title: "Ihram Correctly Entered At / Before Miqat",
        badge: "VERIFIED SOURCE",
        summary: "Alhamdulillah! You entered Ihram at the prescribed boundary. You are now in the state of Ihram.",
        whatNext: "Abstain from Ihram prohibitions (perfume, trimming hair/nails, covering head for men) and proceed with Talbiyah towards Makkah.",
        questionsForMufti: ["What should I do if I accidentally committed a minor Ihram violation?"]
    },
    "RETURN_TO_MIQAT_GUIDANCE": {
        title: "Crossed Miqat Without Ihram — Return Guidance",
        badge: "ASK A SCHOLAR",
        summary: "According to scholarly guidance (e.g., Sheikh Ibn Baz fatwa), if a person realizes they crossed the Miqat without Ihram and has NOT yet entered Ihram, returning to the Miqat and assuming Ihram from there can avoid the penalty (Dam).",
        whatNext: "If reasonably possible, arrange transport to return to the nearest Miqat (or its parallel point) before assuming Ihram.",
        questionsForMufti: [
            "I am in Jeddah; can I return to Rabigh (Al-Juhfah) or Abyar Ali to make Ihram?",
            "Will returning completely waive any penalty in my madhhab?"
        ]
    },
    "CONTINUED_PAST_MIQAT": {
        title: "Continued Past Miqat & Cannot Return",
        badge: "ASK A SCHOLAR",
        summary: "If a person crossed the Miqat intending Umrah and does not return, then assumes Ihram after the Miqat (e.g., from Jeddah or highway), many scholars state that a penalty (Dam) becomes due.",
        whatNext: "Your Umrah is NOT automatically declared invalid, but you must consult a qualified Mufti to determine the exact expiation (Dam/Fidya) required.",
        questionsForMufti: [
            "What is the exact penalty (Dam) required for missing the Miqat in my situation?",
            "Where and how should the sacrifice/dam be performed?"
        ]
    },
    "IN_MAKKAH_WITHOUT_IHRAM": {
        title: "Entered Makkah City Without Ihram",
        badge: "ASK A SCHOLAR",
        summary: "Passing the Miqat and entering the sacred sanctuary of Makkah without Ihram when intending Umrah is a serious issue in fiqh.",
        whatNext: "Consult a qualified Mufti immediately. Do not start Tawaf or Sa'i without proper scholarly guidance.",
        questionsForMufti: [
            "I am already in Makkah without Ihram; should I exit to Al-Hill (Tan'im) to assume Ihram, or return to Miqat?",
            "What expiation (Dam) is binding upon me?"
        ]
    },
    "AL_HILL_TANIM_GUIDANCE": {
        title: "Performing New Umrah While Already in Makkah",
        badge: "VERIFIED SOURCE",
        summary: "For someone ALREADY residing or staying inside Makkah who wishes to perform a NEW Umrah, the original Miqats do not apply. You must go outside the Haram boundary into Al-Hill.",
        whatNext: "Travel to Al-Hill (e.g., Tan'im / Masjid Aisha, Al-Ju'ranah, or any point outside the Haram boundary) and assume Ihram there. Using the specific mosque building is not compulsory; being in Al-Hill is the requirement.",
        questionsForMufti: ["Which Al-Hill boundary is closest or preferable for my location?"]
    },
    "OUTSIDE_PILGRIM_RULE": {
        title: "Outside Pilgrim Misusing Tan'im",
        badge: "GENERAL GUIDANCE",
        summary: "Important Warning: Tan'im / Masjid Aisha is NOT the original Miqat for pilgrims arriving from abroad (India, Levant, etc.). Foreign pilgrims must enter Ihram at their route's Miqat before entering Makkah.",
        whatNext: "If you came from abroad and bypassed your original Miqat relying on Tan'im, consult a Mufti regarding your Ihram validity and Dam.",
        questionsForMufti: ["I arrived from abroad and went to Tan'im instead of my route Miqat — what is the ruling?"]
    }
};

function initDecisionTree() {
    const container = document.getElementById('decisionTreeContainer');
    if (!container) return;

    renderQuestion(0);
}

function renderQuestion(qIndex) {
    const container = document.getElementById('decisionTreeContainer');
    const q = treeQuestions[qIndex];
    if (!q || !container) return;

    let html = `
        <div class="tree-question-card bg-white p-4 rounded-4 border shadow-sm">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-emerald-medium text-white px-3 py-2">Step ${qIndex + 1} of ${treeQuestions.length}</span>
                <button class="btn btn-sm btn-outline-secondary" onclick="resetDecisionTree()"><i class="bi bi-arrow-counterclockwise"></i> Reset</button>
            </div>
            <h5 class="fw-bold mb-4 text-dark">${q.title}</h5>
            <div class="d-grid gap-3">
    `;

    q.options.forEach((opt, idx) => {
        if (opt.next !== undefined) {
            html += `<button class="btn btn-outline-emerald text-start tree-option-btn py-3 px-3 shadow-sm fw-semibold" onclick="handleOptionNext(${opt.next - 1})">${opt.label}</button>`;
        } else if (opt.result) {
            html += `<button class="btn btn-emerald text-start tree-option-btn py-3 px-3 shadow-sm fw-bold" onclick="handleOptionResult('${opt.result}')">${opt.label}</button>`;
        }
    });

    html += `
            </div>
        </div>
    `;

    container.innerHTML = html;
}

function handleOptionNext(nextIndex) {
    renderQuestion(nextIndex);
}

function handleOptionResult(resultKey) {
    const container = document.getElementById('decisionTreeContainer');
    const res = treeResults[resultKey];
    if (!res || !container) return;

    let questionsHtml = '';
    res.questionsForMufti.forEach(q => {
        questionsHtml += `<li class="mb-2 text-dark"><i class="bi bi-patch-question-fill text-gold me-2"></i> ${q}</li>`;
    });

    let html = `
        <div class="tree-result-card p-4 rounded-4 bg-white border border-2 border-emerald-medium shadow-md">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-gold text-dark border px-3 py-2 fw-extrabold"><i class="bi bi-info-circle-fill me-1"></i> ${res.badge}</span>
                <button class="btn btn-sm btn-outline-secondary" onclick="resetDecisionTree()"><i class="bi bi-arrow-counterclockwise"></i> Start Over</button>
            </div>
            
            <h4 class="fw-extrabold text-emerald-medium mb-2">${res.title}</h4>
            <p class="text-dark mb-3 fs-6 fw-medium">${res.summary}</p>
            
            <div class="p-3 bg-emerald-soft rounded-3 mb-3 border-start border-4 border-emerald-medium text-dark">
                <h6 class="fw-bold text-emerald-medium mb-1"><i class="bi bi-compass-fill me-1"></i> General Educational Guidance:</h6>
                <p class="mb-0 small text-dark fw-medium">${res.whatNext}</p>
            </div>

            <div class="p-3 bg-light rounded-3 mb-3 border text-dark">
                <h6 class="fw-bold text-dark mb-2"><i class="bi bi-chat-quote-fill me-1"></i> Recommended Questions for a Qualified Mufti:</h6>
                <ul class="list-unstyled mb-0 small">${questionsHtml}</ul>
            </div>

            <div class="alert alert-warning small mb-3 text-dark">
                <i class="bi bi-shield-exclamation me-1"></i> <strong>Notice:</strong> This interactive result provides general educational guidance based on verified scholarly principles and Saudi Ministry guidelines. It does not replace an individual fatwa.
            </div>

            <div class="d-flex gap-2 flex-wrap">
                <a href="https://wa.me/917860432995?text=Assalamu%20Alaikum%20Hafiz%20Yusuf%20Malik%20Sahab,%20I%20used%20the%20Miqat%20Decision%20Tree%20for%20case:%20${encodeURIComponent(res.title)}" 
                   target="_blank" class="btn btn-gold fw-bold shadow">
                    <i class="bi bi-whatsapp me-1"></i> Consult Hafiz Yusuf Malik (+91 7860432995)
                </a>
            </div>
        </div>
    `;

    container.innerHTML = html;
}

function resetDecisionTree() {
    renderQuestion(0);
}
