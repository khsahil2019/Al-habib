<?php
$pageTitle = "Complete Miqat Knowledge System & Dam Guide | Al-Habib Tours & Travels";
include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/source_badges.php';
?>

<!-- Hero Banner (Clean Light Theme) -->
<section class="bg-gradient-emerald text-dark py-5 position-relative">
    <div class="container text-center py-4">
        <!-- High Visibility Prominent Badge -->
        <span class="badge px-4 py-2 rounded-pill mb-3 shadow border border-warning" style="background-color: #f59e0b !important; color: #000000 !important; font-weight: 800 !important; font-size: 0.95rem;">
            <i class="bi bi-book-fill me-1 text-dark"></i> SCHOLAR-GUIDED KNOWLEDGE CENTER
        </span>
        
        <div class="lang-text lang-en">
            <h1 class="display-3 fw-extrabold mb-3 text-emerald-head">Complete Miqat Knowledge System</h1>
            <p class="lead text-secondary max-w-800 mx-auto mb-4 fw-medium fs-5">
                An authoritative, fiqh-based educational resource covering the Prophetic Miqats, air travel boundaries, crossed Miqat scenarios, Common Miqat Mistakes, and complete Dam guidelines.
            </p>
        </div>
        <div class="lang-text lang-hi d-none">
            <h1 class="display-3 fw-extrabold mb-3 text-emerald-head">संपूर्ण मीक़ात ज्ञान प्रणाली व दम मार्गदर्शिका</h1>
            <p class="lead text-secondary max-w-800 mx-auto mb-4 fw-medium fs-5">
                उलेमा द्वारा सत्यापित फ़िक़्ही निर्देश: नबवी मीक़ात, हवाई सफ़र की सीमाएं, मीक़ात बिना एहराम पार होने के नियम, आम ग़लतियाँ और दम की संपूर्ण जानकारी।
            </p>
        </div>
        <div class="lang-text lang-ur d-none" dir="rtl">
            <h1 class="display-3 fw-extrabold mb-3 text-emerald-head">مکمل نظامِ میقات و رہنمائے دم</h1>
            <p class="lead text-secondary max-w-800 mx-auto mb-4 fw-medium fs-5">
                علماء کرام سے مستند فقہی رہنمائی: نبوی میقات، ہوائی سفر کی حدود، بغیر احرام میقات گزرنے کے مسائل اور دم کی مکمل تفصیل۔
            </p>
        </div>

        <!-- TOP 3 GIANT BUTTONS (High Visibility Buttons) -->
        <div class="row g-3 justify-content-center mt-4">
            <div class="col-md-4">
                <a href="#airTravel" class="btn btn-gold btn-lg w-100 py-3 fw-extrabold shadow-lg">
                    <i class="bi bi-airplane-fill me-2"></i>
                    <span class="lang-text lang-en">I am travelling to Makkah</span>
                    <span class="lang-text lang-hi d-none">मैं मक्का की यात्रा कर रहा हूँ</span>
                    <span class="lang-text lang-ur d-none" dir="rtl">میں مکہ کا سفر کر رہا ہوں</span>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#crossedMiqat" class="btn btn-gold btn-lg w-100 py-3 fw-extrabold shadow-lg">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <span class="lang-text lang-en">I already crossed Miqat</span>
                    <span class="lang-text lang-hi d-none">मीक़ात बिना एहराम पार हो गया</span>
                    <span class="lang-text lang-ur d-none" dir="rtl">میقات احرام کے بغیر گزر گیا</span>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#damExplained" class="btn btn-emerald btn-lg w-100 py-3 fw-extrabold shadow-lg">
                    <i class="bi bi-shield-fill-check me-2"></i>
                    <span class="lang-text lang-en">Dam Rules & Procedure</span>
                    <span class="lang-text lang-hi d-none">दम क्या होता है और कैसे होगा?</span>
                    <span class="lang-text lang-ur d-none" dir="rtl">دم کیا ہے اور کیسے ادا ہوگا؟</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Container -->
<div class="container py-5">

    <!-- 1. WHAT IS MIQAT? -->
    <div class="card glass-card border-0 p-4 mb-5 shadow-sm" id="whatIsMiqat">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <h3 class="fw-extrabold text-dark mb-0">1. What is Miqat?</h3>
            <?php render_source_badge('verified'); ?>
        </div>
        
        <div class="lang-text lang-en">
            <p class="fs-5 text-dark fw-semibold mb-2">
                "Miqat is a designated boundary appointed for pilgrims intending Hajj or Umrah. A person intending Hajj or Umrah should not pass the relevant Miqat without entering Ihram."
            </p>
        </div>
        <div class="lang-text lang-hi d-none">
            <p class="fs-5 text-dark fw-semibold mb-2">
                "मीक़ात वह निर्धारित सीमा है जहाँ से हज या उमराह का इरादा रखने वाले व्यक्ति को एहराम में दाख़िल होना होता है।"
            </p>
        </div>
        <div class="lang-text lang-ur d-none" dir="rtl">
            <p class="fs-5 text-dark fw-semibold mb-2">
                "میقات وہ مقررہ حد ہے جہاں سے حج یا عمرہ کا ارادہ رکھنے والے شخص کو احرام میں داخل ہونا ہوتا ہے۔"
            </p>
        </div>

        <div class="p-3 bg-emerald-soft rounded-3 border-start border-4 border-emerald-medium mt-3">
            <h6 class="fw-bold text-emerald-medium mb-1"><i class="bi bi-geo-alt-fill me-1"></i> Key Principle:</h6>
            <p class="mb-0 text-dark small fw-medium">
                <strong>Which Miqat applies to you depends primarily on the route through which you are travelling, not simply your nationality.</strong> An Indian pilgrim flying to Madinah first uses Dhul-Hulayfah, whereas an Indian pilgrim flying directly towards Jeddah encounters the parallel boundary of Al-Juhfah or Yalamlam.
            </p>
        </div>
    </div>

    <!-- ==========================================
         COMMON MIQAT MISTAKES MATRIX (TRILINGUAL REAL-TIME CONVERSION)
    ========================================== -->
    <div class="card glass-card border-0 p-4 p-md-5 mb-5 shadow-sm" id="commonMistakes">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="badge bg-danger text-white px-3 py-1 mb-2 fw-bold"><i class="bi bi-exclamation-octagon-fill me-1"></i> AVOID CRITICAL ERRORS</span>
                <h3 class="fw-extrabold text-dark mb-0">
                    <span class="lang-text lang-en">Common Miqat Mistakes & Solutions Matrix</span>
                    <span class="lang-text lang-hi d-none">मीक़ात की आम ग़लतियाँ और उनके सही समाधान</span>
                    <span class="lang-text lang-ur d-none" dir="rtl">میقات کی عام غلطیاں اور ان کے صحیح حل</span>
                </h3>
            </div>
            <?php render_source_badge('scholar'); ?>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered align-middle small mb-0">
                <thead class="bg-emerald-soft text-dark text-center">
                    <tr>
                        <th style="width: 5%;">#</th>
                        <th style="width: 32%;">
                            <span class="lang-text lang-en">Common Mistake</span>
                            <span class="lang-text lang-hi d-none">आम ग़लती (Mistake)</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">عام غلطی</span>
                        </th>
                        <th style="width: 38%;">
                            <span class="lang-text lang-en">Fiqh Explanation & Sunnah Way</span>
                            <span class="lang-text lang-hi d-none">फ़िक़्ही वजाहत व सही सुन्नत तरीक़ा</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">فقہی وضاحت اور مسنون طریقہ</span>
                        </th>
                        <th style="width: 25%;">
                            <span class="lang-text lang-en">Solution / Action</span>
                            <span class="lang-text lang-hi d-none">सही समाधान (Solution)</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">صحیح طریقہ عمل</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-dark">
                    <!-- Row 1 -->
                    <tr>
                        <td class="text-center fw-bold">1</td>
                        <td class="fw-bold text-danger">
                            <span class="lang-text lang-en"><i class="bi bi-x-circle-fill me-1"></i> Waiting until landing at Jeddah airport to wear Ihram / make Niyyah</span>
                            <span class="lang-text lang-hi d-none"><i class="bi bi-x-circle-fill me-1"></i> जेद्दा एयरपोर्ट पर उतरने तक एहराम पहनने या नीयत करने का इंतज़ार करना</span>
                            <span class="lang-text lang-ur d-none" dir="rtl"><i class="bi bi-x-circle-fill me-1"></i> جدہ ایئرپورٹ اترنے تک احرام باندھنے یا نیت کرنے کا انتظار کرنا</span>
                        </td>
                        <td>
                            <span class="lang-text lang-en">Jeddah airport is inside the Miqat boundary. If flying directly from India to Jeddah, you cross the parallel Miqat boundary in mid-air 20–30 mins before Jeddah.</span>
                            <span class="lang-text lang-hi d-none">जेद्दा एयरपोर्ट मीक़ात की सीमा के अंदर है। अगर आप भारत से सीधे जेद्दा उड़ रहे हैं, तो जेद्दा पहुँचने से 20-30 मिनट पहले ही हवा में मीक़ात पार हो जाती है।</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">جدہ ایئرپورٹ میقات کی حد کے اندر ہے۔ اگر آپ بھارت سے براہِ راست جدہ پرواز کر رہے ہیں، تو جدہ پہنچنے سے 20-30 منٹ پہلے ہی فضا میں میقات گزر جاتی ہے۔</span>
                        </td>
                        <td>
                            <span class="badge bg-success mb-1">Solution</span>
                            <span class="d-block lang-text lang-en">Wear Ihram garments at home or transit airport, and form Niyyah + Talbiyah in flight before parallel point.</span>
                            <span class="d-block lang-text lang-hi d-none">एहराम के कपड़े घर या ट्रांजिट एयरपोर्ट पर ही पहन लें, और उड़ान में मीक़ात रेखा से पहले नीयत व तालबीया पढ़ें।</span>
                            <span class="d-block lang-text lang-ur d-none" dir="rtl">احرام کے کپڑے گھر یا ٹرانزٹ ایئرپورٹ پر ہی پہن لیں، اور پرواز میں میقات سے پہلے نیت و تلبیہ پڑھیں۔</span>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr>
                        <td class="text-center fw-bold">2</td>
                        <td class="fw-bold text-danger">
                            <span class="lang-text lang-en"><i class="bi bi-x-circle-fill me-1"></i> Thinking Ihram is just wearing 2 sheets without Niyyah & Talbiyah</span>
                            <span class="lang-text lang-hi d-none"><i class="bi bi-x-circle-fill me-1"></i> यह समझना कि एहराम सिर्फ़ 2 चादरें पहन लेना है, बिना नीयत और तालबीया के</span>
                            <span class="lang-text lang-ur d-none" dir="rtl"><i class="bi bi-x-circle-fill me-1"></i> یہ سمجھنا کہ احرام صرف دو چادریں اوڑھ لینا ہے، بغیر نیت اور تلبیہ کے</span>
                        </td>
                        <td>
                            <span class="lang-text lang-en">Wearing the two sheets alone does not make you in Ihram. Ihram is entering the sacred state by making explicit Niyyah (Intention) + Talbiyah.</span>
                            <span class="lang-text lang-hi d-none">सिर्फ़ चादरें पहन लेने से एहराम शुरू नहीं होता। एहराम में दाख़िल होने के लिए नीयत और तालबीया पढ़ना ज़रूरी है।</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">صرف چادریں پہن لینے سے احرام شروع نہیں ہوتا۔ احرام میں داخل ہونے کے لیے باضابطہ نیت اور تلبیہ پڑھنا لازمی ہے۔</span>
                        </td>
                        <td>
                            <span class="badge bg-success mb-1">Solution</span>
                            <span class="d-block lang-text lang-en">After putting on sheets, explicitly say the Niyyah and recite Talbiyah at the Miqat line.</span>
                            <span class="d-block lang-text lang-hi d-none">चादरें पहनने के बाद मीक़ात पर नीयत करें और बुलंद आवाज़ से तालबीया पढ़ें।</span>
                            <span class="d-block lang-text lang-ur d-none" dir="rtl">چادریں پہننے کے بعد میقات پر نیت کریں اور بلند آواز سے تلبیہ پڑھیں۔</span>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr>
                        <td class="text-center fw-bold">3</td>
                        <td class="fw-bold text-danger">
                            <span class="lang-text lang-en"><i class="bi bi-x-circle-fill me-1"></i> Believing Tan'im (Masjid Aisha) is the Miqat for foreign arrivals</span>
                            <span class="lang-text lang-hi d-none"><i class="bi bi-x-circle-fill me-1"></i> यह मानना कि तनीम (मस्जिद आयशा) बाहर से आने वाले हाजियों के लिए असली मीक़ात है</span>
                            <span class="lang-text lang-ur d-none" dir="rtl"><i class="bi bi-x-circle-fill me-1"></i> یہ ماننا کہ تنعیم (مسجد عائشہ) بیرونِ ملک سے آنے والوں کے لیے اصل میقات ہے</span>
                        </td>
                        <td>
                            <span class="lang-text lang-en">Tan'im is Al-Hill for people ALREADY inside Makkah doing a 2nd/new Umrah. It is NOT the original Miqat for pilgrims arriving from India or abroad.</span>
                            <span class="lang-text lang-hi d-none">तनीम (मस्जिद आयशा) उन लोगों के लिए है जो पहले से मक्का में मौजूद हैं और दूसरा उमराह करना चाहते हैं। भारत से आने वालों के लिए यह मीक़ात नहीं है।</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">تنعیم ان لوگوں کے لیے ہے جو پہلے سے مکہ میں موجود ہیں اور دوسرا عمرہ کرنا چاہتے ہیں۔ باہر سے آنے والوں کے لیے یہ میقات نہیں ہے۔</span>
                        </td>
                        <td>
                            <span class="badge bg-success mb-1">Solution</span>
                            <span class="d-block lang-text lang-en">Foreign arrivals must enter Ihram at their route's Miqat before entering Makkah.</span>
                            <span class="d-block lang-text lang-hi d-none">भारत से आने वाले यात्रियों को मक्का में दाख़िल होने से पहले अपने रास्ते की मीक़ात से ही एहराम बाँधना होगा।</span>
                            <span class="d-block lang-text lang-ur d-none" dir="rtl">بیرونِ ملک سے آنے والوں کو مکہ میں داخل ہونے سے پہلے اپنے راستے کی میقات سے ہی احرام باندھنا ہوگا۔</span>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr>
                        <td class="text-center fw-bold">4</td>
                        <td class="fw-bold text-danger">
                            <span class="lang-text lang-en"><i class="bi bi-x-circle-fill me-1"></i> Packing Ihram sheets inside checked-in airport luggage</span>
                            <span class="lang-text lang-hi d-none"><i class="bi bi-x-circle-fill me-1"></i> एहराम की चादरें बड़े चेक-इन बैग (कारगो सामान) में रख देना</span>
                            <span class="lang-text lang-ur d-none" dir="rtl"><i class="bi bi-x-circle-fill me-1"></i> احرام کی چادریں بڑے چیک ان سامان میں بند کر دینا</span>
                        </td>
                        <td>
                            <span class="lang-text lang-en">If your Ihram garments are checked into aircraft cargo, you cannot access them during flight when approaching the Miqat line.</span>
                            <span class="lang-text lang-hi d-none">अगर आपकी चादरें कारगो सामान में चली गईं, तो उड़ान के दौरान मीक़ात पर आप उन्हें निकाल नहीं पाएंगे।</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">اگر احرام چیک ان سامان میں چلا گیا، تو پرواز کے دوران میقات پر آپ اسے حاصل نہیں کر سکیں گے۔</span>
                        </td>
                        <td>
                            <span class="badge bg-success mb-1">Solution</span>
                            <span class="d-block lang-text lang-en">Carry Ihram sheets in your hand luggage or wear them at the departure airport before boarding.</span>
                            <span class="d-block lang-text lang-hi d-none">एहराम की चादरें हैंड बैग में रखें या बोर्डिंग से पहले एयरपोर्ट पर ही पहन लें।</span>
                            <span class="d-block lang-text lang-ur d-none" dir="rtl">احرام کی چادریں ہینڈ بیگ میں رکھیں یا بورڈنگ سے پہلے ایئرپورٹ پر ہی پہن لیں۔</span>
                        </td>
                    </tr>

                    <!-- Row 5 -->
                    <tr>
                        <td class="text-center fw-bold">5</td>
                        <td class="fw-bold text-danger">
                            <span class="lang-text lang-en"><i class="bi bi-x-circle-fill me-1"></i> Assuming there is only 1 Miqat for all Indian pilgrims</span>
                            <span class="lang-text lang-hi d-none"><i class="bi bi-x-circle-fill me-1"></i> यह समझना कि सभी भारतीय यात्रियों के लिए केवल एक ही मीक़ात होती है</span>
                            <span class="lang-text lang-ur d-none" dir="rtl"><i class="bi bi-x-circle-fill me-1"></i> یہ سمجھنا کہ تمام بھارتی زائرین کے لیے صرف ایک ہی میقات ہوتی ہے</span>
                        </td>
                        <td>
                            <span class="lang-text lang-en">Miqat depends on your travel route. If flying to Madinah first, your Miqat is Dhul-Hulayfah. If flying to Jeddah, your Miqat is the parallel line of Yalamlam/Al-Juhfah.</span>
                            <span class="lang-text lang-hi d-none">मीक़ात आपकी यात्रा के रास्ते पर निर्भर करती है। मदीना जाने वालों की मीक़ात ज़ुल-हुलैफ़ाह है, और जेद्दा जाने वालों की यलमलम/अल-जुहफ़ाह की सीध है।</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">میقات سفر کے راستے پر منحصر ہے۔ مدینہ جانے والوں کی میقات ذوالحلیفہ ہے، اور جدہ پرواز کرنے والوں کی یلملم یا الجحفہ کی سیدھ ہے۔</span>
                        </td>
                        <td>
                            <span class="badge bg-success mb-1">Solution</span>
                            <span class="d-block lang-text lang-en">Check your flight itinerary to identify the exact route Miqat.</span>
                            <span class="d-block lang-text lang-hi d-none">अपने फ़्लाइट रूट के अनुसार अपनी सही मीक़ात की पहचान करें।</span>
                            <span class="d-block lang-text lang-ur d-none" dir="rtl">اپنے فلائٹ روٹ کے مطابق اپنی صحیح میقات کی شناخت کریں۔</span>
                        </td>
                    </tr>

                    <!-- Row 6 -->
                    <tr>
                        <td class="text-center fw-bold">6</td>
                        <td class="fw-bold text-danger">
                            <span class="lang-text lang-en"><i class="bi bi-x-circle-fill me-1"></i> Believing Dam is required even if you return to Miqat before Niyyah</span>
                            <span class="lang-text lang-hi d-none"><i class="bi bi-x-circle-fill me-1"></i> यह समझना कि नीयत से पहले मीक़ात वापस लौटने पर भी दम (क़ुर्बानी) वाजिब रहेगा</span>
                            <span class="lang-text lang-ur d-none" dir="rtl"><i class="bi bi-x-circle-fill me-1"></i> یہ سمجھنا کہ نیت سے پہلے میقات واپس لوٹنے پر بھی دم واجب رہے گا</span>
                        </td>
                        <td>
                            <span class="lang-text lang-en">If you cross Miqat without Ihram, but turn back to the Miqat before making Niyyah and enter Ihram there, Dam is avoided according to many scholars.</span>
                            <span class="lang-text lang-hi d-none">अगर आप बिना एहराम मीक़ात पार कर गए, लेकिन नीयत करने से पहले मीक़ात वापस लौटकर एहराम बाँधा, तो उलेमा के अनुसार दम साक़ित (माफ़) हो जाता है।</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">اگر آپ احرام کے بغیر میقات گزر گئے، لیکن نیت کرنے سے پہلے میقات واپس لوٹ کر احرام باندھا، تو علماء کے مطابق دم ساقط ہو جاتا ہے۔</span>
                        </td>
                        <td>
                            <span class="badge bg-success mb-1">Solution</span>
                            <span class="d-block lang-text lang-en">Return to Miqat before making Niyyah if reasonably possible.</span>
                            <span class="d-block lang-text lang-hi d-none">मुमकिन हो तो नीयत करने से पहले मीक़ात वापस लौटकर वहीं से एहराम बाँधें।</span>
                            <span class="d-block lang-text lang-ur d-none" dir="rtl">ممکن ہو تو نیت کرنے سے پہلے میقات واپس لوٹ کر وہیں سے احرام باندھیں۔</span>
                        </td>
                    </tr>

                    <!-- Row 7 -->
                    <tr>
                        <td class="text-center fw-bold">7</td>
                        <td class="fw-bold text-danger">
                            <span class="lang-text lang-en"><i class="bi bi-x-circle-fill me-1"></i> Applying perfume or wearing stitched clothes after Niyyah</span>
                            <span class="lang-text lang-hi d-none"><i class="bi bi-x-circle-fill me-1"></i> नीयत के बाद एहराम की हालत में इत्र लगाना या सिले हुए कपड़े पहनना</span>
                            <span class="lang-text lang-ur d-none" dir="rtl"><i class="bi bi-x-circle-fill me-1"></i> نیت کے بعد احرام کی حالت میں عطر لگانا یا سلے ہوئے کپڑے پہننا</span>
                        </td>
                        <td>
                            <span class="lang-text lang-en">Once Niyyah & Talbiyah are made, all Ihram prohibitions become active immediately. Wearing stitched clothes or applying scent incurs Fidya.</span>
                            <span class="lang-text lang-hi d-none">नीत करते ही एहराम की तमाम पाबंदियाँ लागू हो जाती हैं। इत्र लगाने या सिले कपड़े पहनने पर फ़िद्या/दम का मसला आता है।</span>
                            <span class="lang-text lang-ur d-none" dir="rtl">نیت کرتے ہی احرام کی تمام پابندیاں لاگو ہو جاتی ہیں۔ عطر لگانے یا سلے کپڑے پہننے پر فدیہ یا دم کا مسئلہ آتا ہے۔</span>
                        </td>
                        <td>
                            <span class="badge bg-success mb-1">Solution</span>
                            <span class="d-block lang-text lang-en">Abstain completely from scent, stitched garments (men), and trimming hair until Halq/Qasr.</span>
                            <span class="d-block lang-text lang-hi d-none">हलक़/क़स्र (बाल कटवाने) तक इत्र, सिले कपड़े और बाल काटने से पूरी तरह बचें।</span>
                            <span class="d-block lang-text lang-ur d-none" dir="rtl">حلق یا قصر تک عطر، سلے کپڑے اور بال کاٹنے سے مکمل پرہیز کریں۔</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ==========================================
         DAM KYA HOTA HAI AUR KAISE HOGA? (TRILINGUAL CONVERSION)
    ========================================== -->
    <div class="card glass-card border-0 p-4 p-md-5 mb-5 shadow-sm" id="damExplained">
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div>
                <span class="badge bg-warning text-dark px-3 py-1 mb-2 fw-bold"><i class="bi bi-shield-fill-exclamation me-1"></i> COMPLETE FIQH GUIDE</span>
                <h3 class="fw-extrabold text-dark mb-0">
                    <span class="lang-text lang-en">Dam Rules & Procedure Explained</span>
                    <span class="lang-text lang-hi d-none">दम क्या होता है और कैसे होगा? (दम के नियम)</span>
                    <span class="lang-text lang-ur d-none" dir="rtl">دم کیا ہے اور کیسے ادا ہوگا؟ (احکامِ دم)</span>
                </h3>
            </div>
            <?php render_source_badge('scholar'); ?>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="p-4 bg-white rounded-4 border shadow-sm h-100">
                    <h5 class="fw-extrabold text-emerald-medium mb-3">
                        <i class="bi bi-patch-question-fill text-gold me-2"></i>
                        <span class="lang-text lang-en">1. What is Dam? (Definition)</span>
                        <span class="lang-text lang-hi d-none">1. दम क्या होता है? (परिभाषा)</span>
                        <span class="lang-text lang-ur d-none" dir="rtl">1. دم کیا ہے؟ (تعریف)</span>
                    </h5>
                    
                    <div class="lang-text lang-en">
                        <p class="small text-dark mb-3">
                            <strong>Dam (دم)</strong> is a ritual sacrifice of a goat, sheep, or 1/7th of a cow/camel required under Islamic jurisprudence (Fiqh) as an expiation for omitting a mandatory obligation (Wajib) of Hajj or Umrah—such as crossing the Miqat boundary without Ihram and not returning.
                        </p>
                    </div>
                    <div class="lang-text lang-hi d-none">
                        <p class="small text-dark mb-3">
                            <strong>दम (دم)</strong> हज या उमराह के किसी वाजिब (अनिवार्य नियम) के छूट जाने पर (जैसे बिना एहराम मीक़ात पार कर जाना) कफ़्फ़ारे के तौर पर मक्का में बकरी/भेड़ या गाय के सातवें हिस्से की क़ुर्बानी देने को कहा जाता है।
                        </p>
                    </div>
                    <div class="lang-text lang-ur d-none" dir="rtl">
                        <p class="small text-dark mb-3">
                            <strong>دم (دم)</strong> حج یا عمرہ کے کسی واجب کے چھوٹ جانے کی صورت میں (جیسے احرام کے بغیر میقات گزر جانا) کفارے کے طور پر حدودِ حرم میں بکری یا بھیڑ وغیرہ کی قربانی دینے کو کہا جاتا ہے۔
                        </p>
                    </div>
                    
                    <h5 class="fw-extrabold text-emerald-medium mb-3">
                        <i class="bi bi-exclamation-triangle-fill text-warning me-2"></i>
                        <span class="lang-text lang-en">2. When is Dam Required?</span>
                        <span class="lang-text lang-hi d-none">2. दम कब वाजिब होता है?</span>
                        <span class="lang-text lang-ur d-none" dir="rtl">2. دم کب واجب ہوتا ہے؟</span>
                    </h5>
                    
                    <div class="lang-text lang-en">
                        <ul class="small text-dark fw-medium mb-0">
                            <li class="mb-2"><strong>Crossing Miqat Without Ihram:</strong> If a person intends Umrah, passes the Miqat boundary without Ihram, and enters Ihram later from Jeddah or highway without returning to Miqat.</li>
                            <li class="mb-2"><strong>Missing Wajib Rituals:</strong> Omitting a compulsory duty of Hajj/Umrah.</li>
                            <li class="mb-0"><strong>Major Ihram Violations:</strong> Committing major prohibitions in Ihram for a full day/night (such as wearing stitched clothes or applying heavy perfume continuously).</li>
                        </ul>
                    </div>
                    <div class="lang-text lang-hi d-none">
                        <ul class="small text-dark fw-medium mb-0">
                            <li class="mb-2"><strong>बिना एहराम मीक़ात पार करना:</strong> जब यात्री उमराह की नीयत से मीक़ात पार कर जाए और वापस लौटे बिना जेद्दा या रास्ते में एहराम बाँधे।</li>
                            <li class="mb-2"><strong>वाजिब छूट जाना:</strong> हज या उमराह का कोई वाजिब अमल छूट जाने पर।</li>
                            <li class="mb-0"><strong>बड़ी पाबंदी का उल्लंघन:</strong> एहराम की हालत में पूरे दिन या रात सिले कपड़े पहनना या भारी इत्र लगाना।</li>
                        </ul>
                    </div>
                    <div class="lang-text lang-ur d-none" dir="rtl">
                        <ul class="small text-dark fw-medium mb-0">
                            <li class="mb-2"><strong>بغیر احرام میقات گزرنا:</strong> جب زائر عمرہ کی نیت سے میقات گزر جائے اور واپس لوٹے بغیر جدہ سے احرام باندھ لے۔</li>
                            <li class="mb-2"><strong>واجب کا چھوٹ جانا:</strong> حج یا عمرہ کا کوئی واجب عمل چھوٹ جانے پر۔</li>
                            <li class="mb-0"><strong>بڑی پابندی کی خلاف ورزی:</strong> احرام میں پورے دن یا رات سلے کپڑے پہننا یا عطر لگانا۔</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 bg-emerald-soft rounded-4 border border-emerald-medium h-100 text-dark">
                    <h5 class="fw-extrabold text-emerald-medium mb-3">
                        <i class="bi bi-geo-fill text-gold me-2"></i>
                        <span class="lang-text lang-en">3. Location & Execution Rules</span>
                        <span class="lang-text lang-hi d-none">3. दम कहाँ और कैसे अदा होगा?</span>
                        <span class="lang-text lang-ur d-none" dir="rtl">3. دم کہاں اور کیسے ادا ہوگا؟</span>
                    </h5>
                    
                    <div class="p-3 bg-white rounded-3 mb-3 border">
                        <h6 class="fw-bold text-dark mb-1"><i class="bi bi-pin-map-fill text-danger me-1"></i> Location Requirement:</h6>
                        <div class="lang-text lang-en"><p class="small text-dark mb-0 fw-medium">Dam animal MUST be slaughtered <strong>inside the boundary of Makkah Haram</strong> (such as Mina or Makkah abattoir). It cannot be sacrificed in India or outside Haram.</p></div>
                        <div class="lang-text lang-hi d-none"><p class="small text-dark mb-0 fw-medium">दम का जानवर केवल <strong>मक्का हरम की सीमा के अंदर ही ज़बह होना अनिवार्य है</strong>। इसे भारत में या हरम की सीमा से बाहर ज़बह नहीं किया जा सकता।</p></div>
                        <div class="lang-text lang-ur d-none" dir="rtl"><p class="small text-dark mb-0 fw-medium">دم کا جانور صرف <strong>حدودِ حرمِ مکہ میں ہی ذبح ہونا لازمی ہے</strong>۔ اسے اپنے ملک میں ذبح نہیں کیا جا سکتا۔</p></div>
                    </div>

                    <div class="p-3 bg-white rounded-3 mb-3 border">
                        <h6 class="fw-bold text-dark mb-1"><i class="bi bi-people-fill text-emerald-medium me-1"></i> Distribution Rule:</h6>
                        <div class="lang-text lang-en"><p class="small text-dark mb-0 fw-medium">The meat of Dam MUST be distributed to the poor and needy people residing within Makkah Haram sanctuary. <strong>The pilgrim himself cannot eat from the Dam meat.</strong></p></div>
                        <div class="lang-text lang-hi d-none"><p class="small text-dark mb-0 fw-medium">दम का गोश्त केवल मक्का हरम के ग़रीबों व ज़रूरतमंदों में बाँटा जाता है। <strong>हाजी स्वयं इस गोश्त में से नहीं खा सकता।</strong></p></div>
                        <div class="lang-text lang-ur d-none" dir="rtl"><p class="small text-dark mb-0 fw-medium">دم کا گوشت صرف حرم مکہ کے فقراء اور مساکین میں تقسیم کیا جاتا ہے۔ <strong>زائر خود اس میں سے نہیں کھا سکتا۔</strong></p></div>
                    </div>

                    <div class="p-3 bg-gold-soft rounded-3 border border-warning">
                        <h6 class="fw-bold text-dark mb-1"><i class="bi bi-phone-vibrate text-gold me-1"></i> How to Pay / Manage Dam:</h6>
                        <div class="lang-text lang-en"><p class="small text-dark mb-0 fw-medium">Dam can be paid through official Saudi sacrifice coupons (Adahi / Nusuk app) or coordinated directly with <strong>Hafiz Yusuf Malik (+91 7860432995)</strong> for authorized Makkah abattoir execution.</p></div>
                        <div class="lang-text lang-hi d-none"><p class="small text-dark mb-0 fw-medium">दम की अदायगी सऊदी आधिकारिक अज़हा/नुसुक ऐप से या सीधे <strong>हाफ़िज़ युसुफ़ मलिक (+91 7860432995)</strong> के ज़रिये मक्का स्लाटरहाउस में करवाई जा सकती है।</p></div>
                        <div class="lang-text lang-ur d-none" dir="rtl"><p class="small text-dark mb-0 fw-medium">دم کی ادائیگی نسک ایپ کے ذریعے یا براہِ راست <strong>حافظ یوسف ملک (+91 7860432995)</strong> کے ساتھ مکہ مذبح خانہ میں کروائی جا سکتی ہے۔</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 16. INTERACTIVE MIQAT DECISION TREE -->
    <div class="card glass-card border-0 p-4 mb-5 shadow-sm" id="decisionTreeSection">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <div>
                <h3 class="fw-extrabold text-dark mb-1">16. Interactive Miqat Decision Tree</h3>
                <p class="text-secondary small mb-0 fw-medium">Answer the interactive questionnaire to receive guidance for your exact situation.</p>
            </div>
            <?php render_source_badge('verified'); ?>
        </div>

        <div class="tree-box border">
            <div id="decisionTreeContainer">
                <!-- Loaded dynamically by assets/js/miqat_tree.js -->
            </div>
        </div>
    </div>

    <!-- 17. "DAM LAGEGA YA NAHI?" EDUCATIONAL TOOL -->
    <div class="card glass-card border-0 p-4 mb-5 shadow-sm" id="damChecker">
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
            <div>
                <h3 class="fw-extrabold text-dark mb-1">17. Educational Tool: "Dam Lagega Ya Nahi?"</h3>
                <span class="small text-secondary fw-medium">Does Dam Apply? | क्या दम लागू होगा? (Note: Educational guidance, not an automated fatwa)</span>
            </div>
            <?php render_source_badge('scholar'); ?>
        </div>

        <form id="damCheckerForm" class="bg-white p-4 rounded-4 border shadow-sm">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label fw-bold small text-dark">1. What was your situation at Miqat?</label>
                    <select id="damScenarioSelect" class="form-select text-dark" required>
                        <option value="crossed_unaware">Crossed Miqat without Ihram (Unaware / Forgot)</option>
                        <option value="crossed_deliberate">Crossed Miqat intending to enter Ihram in Jeddah</option>
                        <option value="garments_removed">Entered Ihram, then removed garments before Umrah</option>
                        <option value="jeddah_intention">Formed Umrah intention after arriving in Jeddah</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold small text-dark">2. Did you return to the Miqat?</label>
                    <select id="damReturnedSelect" class="form-select text-dark" required>
                        <option value="yes">Yes, returned to Miqat before assuming Ihram</option>
                        <option value="no">No, continued towards Makkah / Jeddah</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold small text-dark">3. When did you enter Ihram?</label>
                    <select id="damIhramEnteredSelect" class="form-select text-dark" required>
                        <option value="no_before_return">Did not enter Ihram until back at Miqat</option>
                        <option value="yes_later">Entered Ihram in Jeddah / Highway after Miqat</option>
                    </select>
                </div>
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-emerald fw-bold shadow"><i class="bi bi-search me-1"></i> Analyze Scenario</button>
            </div>
        </form>

        <div id="damResultContainer">
            <!-- Rendered by assets/js/dam_checker.js -->
        </div>
    </div>

    <!-- BUSINESS CONTACT CARD INTEGRATION -->
    <?php include __DIR__ . '/includes/contact_card.php'; ?>

</div>

<?php
include_once __DIR__ . '/includes/footer.php';
?>
