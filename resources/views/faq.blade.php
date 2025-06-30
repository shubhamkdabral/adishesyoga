@extends('layouts.app')

@section('content')

<section class="faq-hero">
    <div class="faq-hero-background">
        <div class="floating-elements">
            <div class="floating-element element-1">🕉️</div>
            <div class="floating-element element-2">🪷</div>
            <div class="floating-element element-3">🌸</div>
            <div class="floating-element element-4">✨</div>
            <div class="floating-element element-5">🍃</div>
        </div>
    </div>
    <div class="container">
        <div class="faq-hero-content">
            <div class="faq-hero-badge">
                <i class="fas fa-question-circle"></i>
                <span>Get All Your Answers</span>
            </div>
            <h1 class="faq-hero-title">Frequently Asked Questions</h1>
            <p class="faq-hero-subtitle">Everything you need to know about our transformative yoga teacher training and retreats</p>
        </div>
    </div>
</section>

<!-- Modern Category Navigation -->
<section class="faq-categories-modern">
    <div class="container">
        <div class="categories-grid">
            <div class="category-card" data-category="about-course">
                <div class="category-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>About the Course</h3>
                <p>Learn about our yoga teacher training programs and requirements</p>
                <div class="category-count">10 Questions</div>
            </div>

            <div class="category-card" data-category="food-accommodation">
                <div class="category-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>Food & Stay</h3>
                <p>Accommodation options, meals, and dietary requirements</p>
                <div class="category-count">3 Questions</div>
            </div>

            <div class="category-card" data-category="location-transport">
                <div class="category-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Location & Travel</h3>
                <p>Getting here, transportation options, and travel safety</p>
                <div class="category-count">5 Questions</div>
            </div>

            <div class="category-card" data-category="weather">
                <div class="category-icon">
                    <i class="fas fa-cloud-sun"></i>
                </div>
                <h3>Weather & Climate</h3>
                <p>Seasonal information and best times to visit Rishikesh</p>
                <div class="category-count">1 Question</div>
            </div>

            <div class="category-card" data-category="health-safety">
                <div class="category-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Health & Safety</h3>
                <p>Medical care, safety measures, and health precautions</p>
                <div class="category-count">4 Questions</div>
            </div>

            <div class="category-card" data-category="payment">
                <div class="category-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h3>Booking & Payment</h3>
                <p>Pricing, payment methods, and booking modifications</p>
                <div class="category-count">4 Questions</div>
            </div>

            <div class="category-card" data-category="certification">
                <div class="category-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Certification</h3>
                <p>Yoga Alliance certification and teaching qualifications</p>
                <div class="category-count">4 Questions</div>
            </div>

            <div class="category-card" data-category="general">
                <div class="category-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3>General Info</h3>
                <p>Visa requirements, arrival times, and other general questions</p>
                <div class="category-count">4 Questions</div>
            </div>
        </div>
    </div>
</section>

<!-- Modern FAQ Sections -->
<section class="faq-content-modern">
    <div class="container">
        <!-- About the Course -->
        <div class="faq-category-section" id="about-course">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="category-header-content">
                    <h2>About the Course</h2>
                    <p>Everything you need to know about our yoga teacher training programs</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>What is the dress code for yoga classes?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>For the opening and closing ceremonies, we recommend wearing white-colour clothes. During class or while on the premises, feel free to wear what you're comfortable in—just avoid extremely short outfits like micro shorts or tank tops. In public, please respect Indian cultural norms by covering your shoulders and knees.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Do I need to bring my own yoga mat?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, we recommend bringing your own mat. If you forget or lose it, don't worry—local shops nearby sell yoga mats.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can I join the course if I'm pregnant?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Due to the intensity of our training, we do not accept pregnant students. However, we encourage you to join a prenatal yoga course instead.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can I skip a class?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>We strongly recommend attending every class to stay on track. In case of emergency, please inform your instructor beforehand.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can I join with my partner?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Absolutely! You're welcome to join with your partner.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>I've never practiced yoga. Is this course for me?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes! We welcome beginners and will teach you the foundations of yoga with dedicated support.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Are your teachers qualified?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, all our teachers are certified, experienced, and passionate about yoga.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Will language be a barrier?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Not at all. English is the main language of instruction, and our teachers are trained to communicate clearly with students from all over the world.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Do I need to read any books?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes and no. While it's not mandatory, we believe that doing a little homework can enhance your understanding and enrich your experience. If you're interested, we can recommend a few insightful books for your course. Feel free to start reading them before your arrival or once you're here.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can I use my phone at school?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, but please avoid phone use during classes or keep it silent.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Food & Accommodation -->
        <div class="faq-category-section" id="food-accommodation">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="category-header-content">
                    <h2>Food & Accommodation</h2>
                    <p>Details about our meals and accommodation facilities</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Do you offer vegan meals?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Our meals are 100% vegetarian. Vegan options may be available upon request—please inform us in advance if you have dietary needs.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Is filtered drinking water available?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, we provide free, 24/7 access to filtered drinking water.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Does the course fee include food & accommodation?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, all basic amenities and meals are included in your fee.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Location & Transport -->
        <div class="faq-category-section" id="location-transport">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="category-header-content">
                    <h2>Location & Transport</h2>
                    <p>Getting to our center and transportation information</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Which airport should I fly into?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Fly into Jolly Grant Airport (Dehradun)—just a 30–40 minute drive from Adishesh Yoga. Alternatively, you can land at Delhi International Airport.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>How can I get from Delhi to Rishikesh?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>We recommend flying from Delhi to Dehradun—it's quicker and more affordable. We offer free pickup from Dehradun Airport, while pickup from Delhi Airport costs $75 USD (one-way).</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Is it safe to travel alone to Rishikesh?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes! Many solo travelers visit Rishikesh. Just share your travel plans with us so we can assist.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>I am traveling to India for the first time</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>If you're traveling to India for the first time and planning to reach Rishikesh, flying from Delhi (Indira Gandhi International Airport - DEL) to Dehradun (Jolly Grant Airport - DED) is highly recommended. This route is faster and often more affordable than road travel, ensuring a smoother journey for newcomers.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Will you handle my transport from the airport/station?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, with prior notice, we'll arrange transport to the school from airports or stations.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Weather -->
        <div class="faq-category-section" id="weather">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-cloud-sun"></i>
                </div>
                <div class="category-header-content">
                    <h2>Weather & Climate</h2>
                    <p>Seasonal information for planning your visit</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>What's the weather like in Rishikesh?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Rishikesh experiences three primary seasons: <strong>Summer (March-May)</strong> with temperatures from 14°C to 39°C, ideal for adventure sports but can be intense during the day. <strong>Monsoon (June-September)</strong> with temperatures from 24°C to 35°C, featuring rainfall and lush green surroundings, perfect for yoga retreats. <strong>Winter (October-February)</strong> with temperatures from 8°C to 34°C, offering cool and pleasant weather - considered the best time to visit for comfortable temperatures and minimal rainfall.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Health & Safety -->
        <div class="faq-category-section" id="health-safety">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="category-header-content">
                    <h2>Health & Safety</h2>
                    <p>Medical care and safety information for your peace of mind</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can I get my medication in Rishikesh?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, most medications are available here, though the brands may vary.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>What if I get sick during the course?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>We'll ensure you get proper care at top local hospitals. However, medical expenses are not covered, so travel insurance is highly recommended.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Should I worry about malaria?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Malaria risk in Rishikesh is very low. If concerned, bring mosquito repellents.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Is it safe to eat outside food?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, but be cautious with street food. We suggest avoiding outside meals during your course to stay aligned with your training diet.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment -->
        <div class="faq-category-section" id="payment">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="category-header-content">
                    <h2>Booking & Payment</h2>
                    <p>Information about payments, bookings, and modifications</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can I modify my booking later?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>In case of personal emergencies, we'll help you reschedule. However, advance fees are non-refundable.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can I pay the balance by credit card?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes. Credit card payments incur a 2% transaction fee. Cash and bank transfers are also accepted.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can I extend my stay?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Of course! Additional nights are $20 USD/day (includes 3 meals, excludes yoga classes).</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Safety and Security?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, our area is safe and secure, with 24/7 security and nearby police presence.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Certification -->
        <div class="faq-category-section" id="certification">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <div class="category-header-content">
                    <h2>Certification</h2>
                    <p>Information about yoga teacher certification and qualifications</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>How do I become a certified yoga teacher?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Complete our Yoga Alliance–accredited training and pass the assessments.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Is your school registered with Yoga Alliance?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, Adishesh Yoga is Yoga Alliance–certified (USA), and our certificates are recognized worldwide.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Do I have to pass an exam?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, a written and verbal assessment is required. Your certification depends on performance, attendance, and conduct.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Will I be able to teach internationally?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, once certified and registered, you can teach globally.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- General Questions -->
        <div class="faq-category-section" id="general">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div class="category-header-content">
                    <h2>General Information</h2>
                    <p>Visa requirements, arrival information, and other general queries</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Which visa should I apply for?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Apply for a Tourist Visa with yoga as your reason for visiting. Mention our school's name and address when needed.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>When should I arrive and depart?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Arrive one day before the course begins. The course starts at 9:00 AM on Day 2. Depart after the closing ceremony, which ends at 12:00 PM on the final day.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>What should I bring?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Most essentials are available locally. Bring personal items you can't live without (e.g., skincare, preferred snacks).</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Is there a post office nearby?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, Rishikesh Sub Post Office (PIN 249201) is just 30 minutes away. Located in Dehradun, Uttarakhand, India. Open Monday to Saturday, 9:00 AM – 5:00 PM, offering standard postal services including mail delivery and parcel services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Help Section -->
<section class="faq-help-section">
    <div class="container">
        <div class="help-content">
            <div class="help-icon">
                <i class="fas fa-headset"></i>
            </div>
            <h2>Still Need Help?</h2>
            <p>Can't find what you're looking for? Our friendly team is here to help you with any questions about your yoga teacher training journey.</p>
            <div class="help-buttons">
                <a href="mailto:info@adisheshyoga.com" class="help-btn primary">
                    <i class="fas fa-envelope"></i>
                    <span>Email Support</span>
                </a>
                <a href="tel:+919876543210" class="help-btn secondary">
                    <i class="fas fa-phone"></i>
                    <span>Call Us</span>
                </a>
                <a href="#" class="help-btn secondary">
                    <i class="fab fa-whatsapp"></i>
                    <span>WhatsApp</span>
                </a>
            </div>
            <div class="help-info">
                <div class="help-info-item">
                    <i class="fas fa-clock"></i>
                    <span>Response within 2 hours</span>
                </div>
                <div class="help-info-item">
                    <i class="fas fa-globe"></i>
                    <span>Available in multiple languages</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection