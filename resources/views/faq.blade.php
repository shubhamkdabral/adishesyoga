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
            <p class="faq-hero-subtitle">Everything you need to know about our transformative yoga retreats, from accommodation to spiritual practices</p>

            <!-- Search Bar -->
            <div class="faq-search-container">
                <div class="faq-search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" id="faq-search" placeholder="Search for answers..." autocomplete="off">
                    <div class="search-suggestions" id="search-suggestions"></div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="faq-stats">
                <div class="faq-stat">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Questions Answered</div>
                </div>
                <div class="faq-stat">
                    <div class="stat-number">7</div>
                    <div class="stat-label">Categories</div>
                </div>
                <div class="faq-stat">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Support Available</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Category Navigation -->
<section class="faq-categories-modern">
    <div class="container">
        <div class="categories-grid">
            <div class="category-card" data-category="about-retreat">
                <div class="category-icon">
                    <i class="fas fa-mountain"></i>
                </div>
                <h3>About the Retreat</h3>
                <p>Learn about our programs, schedules, and what's included</p>
                <div class="category-count">8 Questions</div>
            </div>

            <div class="category-card" data-category="food-accommodation">
                <div class="category-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>Food & Stay</h3>
                <p>Accommodation options, meals, and dietary requirements</p>
                <div class="category-count">7 Questions</div>
            </div>

            <div class="category-card" data-category="location-transport">
                <div class="category-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3>Location & Travel</h3>
                <p>Getting here, nearby attractions, and transportation</p>
                <div class="category-count">6 Questions</div>
            </div>

            <div class="category-card" data-category="weather">
                <div class="category-icon">
                    <i class="fas fa-cloud-sun"></i>
                </div>
                <h3>Weather & Climate</h3>
                <p>Best times to visit, what to pack, seasonal information</p>
                <div class="category-count">5 Questions</div>
            </div>

            <div class="category-card" data-category="health-security">
                <div class="category-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Health & Safety</h3>
                <p>Medical requirements, insurance, and safety measures</p>
                <div class="category-count">6 Questions</div>
            </div>

            <div class="category-card" data-category="payment">
                <div class="category-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h3>Booking & Payment</h3>
                <p>Pricing, payment methods, and cancellation policies</p>
                <div class="category-count">5 Questions</div>
            </div>

            <div class="category-card" data-category="general">
                <div class="category-icon">
                    <i class="fas fa-question-circle"></i>
                </div>
                <h3>General Info</h3>
                <p>Language, certification, and other general questions</p>
                <div class="category-count">8 Questions</div>
            </div>
        </div>
    </div>
</section>

<!-- Modern FAQ Sections -->
<section class="faq-content-modern">
    <div class="container">
        <!-- About the Retreat -->
        <div class="faq-category-section" id="about-retreat">
            <div class="category-header">
                <div class="category-header-icon">
                    <i class="fas fa-mountain"></i>
                </div>
                <div class="category-header-content">
                    <h2>About the Retreat</h2>
                    <p>Everything you need to know about our retreat programs and experiences</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>What is included in the retreat package?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Our comprehensive retreat package includes comfortable accommodation, three daily vegetarian meals prepared with organic ingredients, all yoga and meditation classes led by certified instructors, educational workshops, guided nature walks, group activities, and airport transfers from Dehradun Airport at designated times. Additional services like private yoga sessions, spa treatments, or specialized excursions are available at extra cost.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Is the retreat suitable for beginners?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Our retreats welcome practitioners of all levels, from complete beginners to advanced yogis. Our experienced teachers provide modifications and variations for every pose and practice to ensure everyone can participate comfortably and safely. We create a supportive, non-judgmental environment where you can learn and grow at your own pace without any pressure.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>How many participants will be in the retreat?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>We intentionally limit our retreats to a maximum of 15 participants to ensure personalized attention and create an intimate community experience. This small group size allows our teachers to provide individual guidance, adjustments, and support while fostering meaningful connections among participants.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>What is the daily schedule like?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>A typical day begins with morning yoga and pranayama at 6:00 AM, followed by breakfast at 8:00 AM. Mid-morning features workshops, philosophy discussions, or specialized practices. Lunch is served at 12:30 PM, followed by rest time. Afternoons include nature walks, excursions, or free time. Evening yoga and meditation sessions start at 5:00 PM, dinner at 7:00 PM, and evening programs like kirtan, meditation, or discussions until 9:30 PM.</p>
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
                    <p>Details about our comfortable stays and nourishing meals</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>What type of food is served?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>We serve fresh, nutritious vegetarian meals prepared according to Ayurvedic principles to support your yoga practice and overall wellbeing. Our diverse menu features local Indian cuisine alongside international dishes, emphasizing whole foods, fresh vegetables, fruits, legumes, grains, and dairy. All meals are prepared with love, mindfulness, and attention to balancing the six tastes according to Ayurvedic tradition.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Can you accommodate dietary restrictions?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Yes, we can accommodate most dietary restrictions including vegan, gluten-free, and various allergies with advance notice. Please inform us of your specific dietary needs when booking so our kitchen team can prepare accordingly. For very specialized diets or severe allergies, we may request additional information to ensure we can safely meet your nutritional needs throughout your stay.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>What are the accommodation options?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>We offer three types of accommodation to suit different preferences and budgets: private rooms with attached bathrooms for those seeking solitude, shared twin rooms with attached bathrooms for friends or couples, and dormitory-style rooms with shared bathrooms for a more communal experience. All rooms are clean, comfortable, and thoughtfully furnished with traditional Indian elements and modern comforts.</p>
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
                    <p>Getting to our retreat center and exploring the area</p>
                </div>
            </div>

            <div class="faq-grid">
                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>Where exactly is the retreat center located?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>Our retreat center is nestled in the serene foothills of the Himalayas, approximately 20 km from the spiritual town of Rishikesh in Uttarakhand, India. The center is situated in a peaceful valley surrounded by lush forests, with stunning views of the mountains and close proximity to the sacred Ganges River. Exact location details and comprehensive directions are provided upon booking confirmation.</p>
                    </div>
                </div>

                <div class="faq-card">
                    <div class="faq-card-header">
                        <h3>How do I get to the retreat center?</h3>
                        <div class="faq-toggle">
                            <i class="fas fa-plus"></i>
                        </div>
                    </div>
                    <div class="faq-card-content">
                        <p>The nearest airport is Dehradun Airport (DED), approximately 35 km from our center. We provide complimentary group transfers at 12:00 PM and 4:00 PM on arrival day. Alternatively, you can arrive at Haridwar Railway Station (45 km away) and we can arrange transfers from there. For those arriving at different times or from Delhi Airport, we can arrange private transfers for an additional fee.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Continue with other sections... -->
        <!-- Weather, Health & Security, Payment, General sections would follow the same pattern -->
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
            <p>Can't find what you're looking for? Our friendly team is here to help you with any questions about your yoga retreat journey.</p>
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