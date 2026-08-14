/**
 * Al-Habib Tours & Travels - Core Frontend Logic, Multi-language Switcher & Robust Audio Player
 */

document.addEventListener('DOMContentLoaded', () => {
    initLanguageSwitcher();
    initChecklists();
    initAudioPlayer();
});

// Language Switcher Logic
function initLanguageSwitcher() {
    const currentLang = localStorage.getItem('alhabib_lang') || 'en';
    setLanguage(currentLang);

    const langBtns = document.querySelectorAll('.lang-select-btn');
    langBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const selectedLang = btn.getAttribute('data-lang');
            setLanguage(selectedLang);
        });
    });
}

function setLanguage(lang) {
    localStorage.setItem('alhabib_lang', lang);
    document.documentElement.lang = lang;

    // Handle RTL for Urdu
    if (lang === 'ur') {
        document.documentElement.dir = 'rtl';
        document.body.setAttribute('dir', 'rtl');
    } else {
        document.documentElement.dir = 'ltr';
        document.body.setAttribute('dir', 'ltr');
    }

    // Toggle content visibility based on language classes
    document.querySelectorAll('.lang-text').forEach(el => {
        el.classList.add('d-none');
    });

    document.querySelectorAll(`.lang-${lang}`).forEach(el => {
        el.classList.remove('d-none');
    });

    // Update Language Dropdown Button Text
    const langBtnText = document.getElementById('currentLangText');
    if (langBtnText) {
        if (lang === 'en') langBtnText.textContent = 'English';
        if (lang === 'hi') langBtnText.textContent = 'हिन्दी';
        if (lang === 'ur') langBtnText.textContent = 'اردو';
    }
}

// Checklist Module
function initChecklists() {
    const checkboxes = document.querySelectorAll('.miqat-checklist-input');
    const progressEl = document.getElementById('checklistProgress');
    const progressBar = document.getElementById('checklistProgressBar');

    if (checkboxes.length > 0 && progressEl) {
        function updateProgress() {
            const total = checkboxes.length;
            const checked = document.querySelectorAll('.miqat-checklist-input:checked').length;
            const percentage = Math.round((checked / total) * 100);
            
            progressEl.textContent = `${percentage}% (${checked}/${total})`;
            if (progressBar) progressBar.style.width = `${percentage}%`;
        }

        checkboxes.forEach(cb => {
            cb.addEventListener('change', updateProgress);
        });
        updateProgress();
    }
}

// Guaranteed In-Browser Audio Synthesizer & Speech Reciter for Talbiyah
let globalAudioCtx = null;
let isTalbiyahPlaying = false;

function initAudioPlayer() {
    const playBtns = document.querySelectorAll('#playTalbiyahBtn, .play-talbiyah-btn');
    const audioEl = document.getElementById('talbiyahAudio');

    playBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (isTalbiyahPlaying) {
                stopTalbiyahAudio(btn);
                return;
            }

            // Attempt HTML5 Audio element first if available
            if (audioEl) {
                btn.innerHTML = '<i class="bi bi-volume-up-fill me-1"></i> Playing...';
                audioEl.play().then(() => {
                    isTalbiyahPlaying = true;
                    btn.innerHTML = '<i class="bi bi-pause-fill me-1"></i> Pause Audio';
                }).catch(err => {
                    console.log('HTML5 Audio blocked or network error. Playing Web Audio Synth fallback:', err);
                    playTalbiyahAudioSynth(btn);
                });

                audioEl.onended = () => {
                    stopTalbiyahAudio(btn);
                };
            } else {
                playTalbiyahAudioSynth(btn);
            }
        });
    });
}

function stopTalbiyahAudio(btn) {
    isTalbiyahPlaying = false;
    const audioEl = document.getElementById('talbiyahAudio');
    if (audioEl && !audioEl.paused) {
        audioEl.pause();
        audioEl.currentTime = 0;
    }
    if (btn) {
        btn.innerHTML = '<i class="bi bi-play-fill me-1"></i> Listen Audio / तालबीया सुनें';
    }
}

// Bulletproof Web Audio API Synthesizer (Recites Talbiyah Melodic Tones)
function playTalbiyahAudioSynth(btn) {
    try {
        const AudioCtx = window.AudioContext || window.webkitAudioContext;
        if (!globalAudioCtx) {
            globalAudioCtx = new AudioCtx();
        }
        
        if (globalAudioCtx.state === 'suspended') {
            globalAudioCtx.resume();
        }

        isTalbiyahPlaying = true;
        if (btn) btn.innerHTML = '<i class="bi bi-volume-up-fill me-1"></i> Reciting Talbiyah...';

        // Melodic notes representing "Labbayka Allahumma Labbayk..."
        const melody = [
            { note: 220.00, duration: 0.6 }, // Lab-
            { note: 246.94, duration: 0.5 }, // bay-
            { note: 261.63, duration: 0.8 }, // ka
            { note: 293.66, duration: 0.7 }, // Al-
            { note: 329.63, duration: 0.9 }, // laah-
            { note: 293.66, duration: 0.6 }, // um-
            { note: 261.63, duration: 1.0 }, // ma
            { note: 246.94, duration: 0.7 }, // Lab-
            { note: 220.00, duration: 1.2 }  // bayk
        ];

        let now = globalAudioCtx.currentTime;
        melody.forEach(item => {
            const osc = globalAudioCtx.createOscillator();
            const gain = globalAudioCtx.createGain();
            
            osc.type = 'triangle';
            osc.frequency.setValueAtTime(item.note, now);
            
            gain.gain.setValueAtTime(0.01, now);
            gain.gain.linearRampToValueAtTime(0.3, now + 0.08);
            gain.gain.exponentialRampToValueAtTime(0.001, now + item.duration);
            
            osc.connect(gain);
            gain.connect(globalAudioCtx.destination);
            
            osc.start(now);
            osc.stop(now + item.duration);
            
            now += item.duration + 0.05;
        });

        // Speech Synthesis Fallback (Recites in natural voice if available)
        if ('speechSynthesis' in window) {
            const utterance = new SpeechSynthesisUtterance("Labbayk Allahumma Labbayk, Labbayka laa shareeka laka Labbayk");
            utterance.lang = 'ar-SA';
            utterance.rate = 0.85;
            window.speechSynthesis.speak(utterance);
        }

        setTimeout(() => {
            stopTalbiyahAudio(btn);
        }, 7000);

    } catch (e) {
        console.error('Web Audio Synth Error:', e);
        stopTalbiyahAudio(btn);
    }
}
