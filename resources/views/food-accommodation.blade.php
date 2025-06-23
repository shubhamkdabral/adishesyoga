@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide active">
            <div class="carousel-content">
                <span class="hero-badge">Nourish Your Body & Soul</span>
                <h2>Food & Accommodations</h2>
                <p>Experience comfort and nourishment during your retreat with our thoughtfully prepared meals and peaceful accommodations designed for rest and rejuvenation.</p>
            </div>
            <div class="overlay"></div>
            <img src="/placeholder.svg?height=700&width=1600" alt="Food and Accommodations">
        </div>
    </div>
</section>

<!-- Accommodation Options Section -->
<section class="our-stays">
    <div class="section-mandala about-mandala-top-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Accommodation Options</span>
            <h2>Comfortable Stays for Every Preference</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Choose from our range of accommodation options, each designed to provide comfort, peace, and connection with nature.</p>
        </div>
        <div class="stays-container">
            <div class="stay-card">
                <div class="stay-image">
                    <img src="/placeholder.svg?height=300&width=400" alt="Private Room">
                    <div class="stay-overlay">
                        <a href="#" class="view-gallery">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                        </a>
                    </div>
                </div>
                <div class="stay-content">
                    <div class="stay-location">
                        <i class="fas fa-bed"></i>
                        <span>Private Room</span>
                    </div>
                    <h3>Single Occupancy Private Room</h3>
                    <p>Enjoy complete privacy and tranquility in your own space with attached bathroom, mountain views, and traditional Indian décor for a peaceful retreat experience.</p>
                    <div class="stay-amenities">
                        <span><i class="fas fa-bath"></i> Private Bathroom</span>
                        <span><i class="fas fa-mountain"></i> Mountain View</span>
                        <span><i class="fas fa-wifi"></i> Wi-Fi Access</span>
                    </div>
                </div>
            </div>
            <div class="stay-card">
                <div class="stay-image">
                    <img src="/placeholder.svg?height=300&width=400" alt="Shared Twin Room">
                    <div class="stay-overlay">
                        <a href="#" class="view-gallery">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                        </a>
                    </div>
                </div>
                <div class="stay-content">
                    <div class="stay-location">
                        <i class="fas fa-users"></i>
                        <span>Shared Twin Room</span>
                    </div>
                    <h3>Twin Sharing Room</h3>
                    <p>Perfect for friends or couples, these comfortable twin rooms feature two beds, attached bathroom, and beautiful garden views for a shared retreat experience.</p>
                    <div class="stay-amenities">
                        <span><i class="fas fa-bed"></i> Twin Beds</span>
                        <span><i class="fas fa-leaf"></i> Garden View</span>
                        <span><i class="fas fa-bath"></i> Attached Bathroom</span>
                    </div>
                </div>
            </div>
            <div class="stay-card">
                <div class="stay-image">
                    <img src="/placeholder.svg?height=300&width=400" alt="Dormitory Style">
                    <div class="stay-overlay">
                        <a href="#" class="view-gallery">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                        </a>
                    </div>
                </div>
                <div class="stay-content">
                    <div class="stay-location">
                        <i class="fas fa-home"></i>
                        <span>Dormitory Style</span>
                    </div>
                    <h3>Shared Dormitory</h3>
                    <p>Experience community living in our clean, comfortable dormitory-style rooms with shared bathrooms, perfect for budget-conscious travelers seeking connection.</p>
                    <div class="stay-amenities">
                        <span><i class="fas fa-users"></i> Community Living</span>
                        <span><i class="fas fa-shower"></i> Shared Bathrooms</span>
                        <span><i class="fas fa-dollar-sign"></i> Budget Friendly</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Room Features Section -->
<section class="why-choose-us">
    <div class="section-mandala about-mandala-top-left"></div>
    <div class="section-mandala why-choose-mandala-bottom-right"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Room Features</span>
            <h2>Comfort & Convenience in Every Room</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-swastik">卐</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>All our accommodations are designed with your comfort and spiritual practice in mind.</p>
        </div>
        <div class="features-container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bed"></i>
                </div>
                <h3>Comfortable Bedding</h3>
                <p>Rest peacefully on quality mattresses with clean linens, pillows, and blankets. Extra bedding is provided for cooler mountain evenings.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tint"></i>
                </div>
                <h3>Hot Water Supply</h3>
                <p>Enjoy hot water throughout the day in all bathrooms. Solar heating systems ensure eco-friendly and reliable hot water supply.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h3>Secure Storage</h3>
                <p>Keep your valuables safe with in-room lockers and secure storage areas. All rooms have lockable doors for your privacy and security.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Natural Ventilation</h3>
                <p>Rooms are designed with traditional architecture for natural cooling and ventilation, creating a comfortable environment year-round.</p>
            </div>
        </div>
    </div>
</section>

<!-- Food & Dining Section -->
<section class="retreat-programs">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Nourishing Cuisine</span>
            <h2>Ayurvedic Vegetarian Meals</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Experience the healing power of food with our carefully prepared vegetarian meals based on Ayurvedic principles.</p>
        </div>

        <div class="programs-container">
            <div class="program-card">
                <div class="section-mandala programs-mandala-right"></div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Breakfast">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>Energizing Breakfast</h3>
                        <div class="program-price">
                            <span class="price-amount">7:30</span>
                            <span class="price-period">AM</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-sun"></i>
                        <span>Start Your Day Right</span>
                    </div>
                    <p>Begin each day with a nourishing breakfast featuring fresh fruits, whole grains, herbal teas, and traditional Indian breakfast items.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-apple-alt"></i> Fresh seasonal fruits</li>
                        <li><i class="fas fa-bread-slice"></i> Whole grain options</li>
                        <li><i class="fas fa-leaf"></i> Herbal teas & fresh juices</li>
                        <li><i class="fas fa-seedling"></i> Organic ingredients</li>
                    </ul>
                </div>
            </div>

            <div class="program-card">
                <div class="section-mandala programs-mandala-left"></div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Lunch">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>Wholesome Lunch</h3>
                        <div class="program-price">
                            <span class="price-amount">12:30</span>
                            <span class="price-period">PM</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-sun"></i>
                        <span>Midday Nourishment</span>
                    </div>
                    <p>Enjoy a complete Ayurvedic meal with dal, vegetables, rice, chapati, and accompaniments that balance all six tastes.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-seedling"></i> Fresh vegetables & legumes</li>
                        <li><i class="fas fa-wheat"></i> Freshly made bread</li>
                        <li><i class="fas fa-pepper-hot"></i> Balanced spices</li>
                        <li><i class="fas fa-carrot"></i> Seasonal preparations</li>
                    </ul>
                </div>
            </div>

            <div class="program-card">
                <div class="section-mandala programs-mandala-right"></div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Dinner">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>Light Dinner</h3>
                        <div class="program-price">
                            <span class="price-amount">7:00</span>
                            <span class="price-period">PM</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-moon"></i>
                        <span>Evening Comfort</span>
                    </div>
                    <p>End your day with a lighter, easily digestible meal designed to promote restful sleep and support your yoga practice.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-bowl-rice"></i> Light, digestible foods</li>
                        <li><i class="fas fa-leaf"></i> Calming herbal teas</li>
                        <li><i class="fas fa-soup"></i> Warming soups</li>
                        <li><i class="fas fa-moon"></i> Sleep-promoting ingredients</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dietary Accommodations Section -->
<section class="about-us">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="section-mandala about-mandala-bottom-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Special Diets</span>
            <h2>We Accommodate All Dietary Needs</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Our kitchen team is experienced in preparing meals for various dietary requirements and restrictions.</p>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="/placeholder.svg?height=400&width=500" alt="Kitchen Preparation">
                <div class="about-badge">
                    <i class="fas fa-utensils"></i>
                    <span>Fresh Daily</span>
                </div>
            </div>
            <div class="about-text">
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-leaf"></i>
                        <span>Vegan options available for all meals</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-wheat"></i>
                        <span>Gluten-free alternatives provided</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Allergy-conscious meal preparation</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-heart"></i>
                        <span>Low-sodium and diabetic-friendly options</span>
                    </div>
                </div>
                <p>We understand that dietary needs vary greatly among our guests. Our experienced kitchen team works closely with participants to ensure everyone enjoys delicious, nourishing meals that support their health and spiritual practice. Please inform us of any dietary restrictions when booking your retreat.</p>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-envelope"></i>
                    <span>Discuss Your Dietary Needs</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Dining Experience Section -->
<section class="image-gallery">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Dining Experience</span>
            <h2>Mindful Eating in Beautiful Settings</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Experience the joy of mindful eating in our beautiful dining spaces surrounded by nature.</p>
        </div>
        <div class="gallery-slider">
            <div class="gallery-track">
                <div class="gallery-slide">
                    <img src="/placeholder.svg?height=250&width=350" alt="Outdoor Dining">
                    <div class="gallery-overlay">
                        <h4>Outdoor Dining</h4>
                        <p>Enjoy meals in our beautiful garden setting</p>
                    </div>
                </div>
                <div class="gallery-slide">
                    <img src="/placeholder.svg?height=250&width=350" alt="Community Dining Hall">
                    <div class="gallery-overlay">
                        <h4>Community Dining Hall</h4>
                        <p>Share meals and conversations with fellow practitioners</p>
                    </div>
                </div>
                <div class="gallery-slide">
                    <img src="/placeholder.svg?height=250&width=350" alt="Kitchen Garden">
                    <div class="gallery-overlay">
                        <h4>Organic Kitchen Garden</h4>
                        <p>Fresh herbs and vegetables grown on-site</p>
                    </div>
                </div>
                <div class="gallery-slide">
                    <img src="/placeholder.svg?height=250&width=350" alt="Tea Time">
                    <div class="gallery-overlay">
                        <h4>Afternoon Tea</h4>
                        <p>Relax with herbal teas and healthy snacks</p>
                    </div>
                </div>
                <div class="gallery-slide">
                    <img src="/placeholder.svg?height=250&width=350" alt="Cooking Classes">
                    <div class="gallery-overlay">
                        <h4>Cooking Workshops</h4>
                        <p>Learn to prepare Ayurvedic meals</p>
                    </div>
                </div>
                <!-- Duplicate slides for infinite loop effect -->
                <div class="gallery-slide">
                    <img src="/placeholder.svg?height=250&width=350" alt="Outdoor Dining">
                    <div class="gallery-overlay">
                        <h4>Outdoor Dining</h4>
                        <p>Enjoy meals in our beautiful garden setting</p>
                    </div>
                </div>
                <div class="gallery-slide">
                    <img src="/placeholder.svg?height=250&width=350" alt="Community Dining Hall">
                    <div class="gallery-overlay">
                        <h4>Community Dining Hall</h4>
                        <p>Share meals and conversations with fellow practitioners</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities & Amenities Section -->
<section class="why-choose-us">
    <div class="section-mandala about-mandala-top-left"></div>
    <div class="section-mandala why-choose-mandala-bottom-right"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Facilities & Amenities</span>
            <h2>Everything You Need for a Comfortable Stay</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-swastik">卐</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Our retreat center offers modern amenities while maintaining a connection to nature and traditional values.</p>
        </div>
        <div class="features-container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-wifi"></i>
                </div>
                <h3>Limited Wi-Fi Access</h3>
                <p>Stay connected when needed with Wi-Fi in common areas, while encouraging digital detox for a more immersive retreat experience.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tshirt"></i>
                </div>
                <h3>Laundry Services</h3>
                <p>Convenient laundry facilities and services available to keep your clothes fresh throughout your stay at reasonable rates.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-book"></i>
                </div>
                <h3>Library & Reading Area</h3>
                <p>Quiet spaces for reading and reflection with a collection of spiritual and wellness books, journals, and meditation guides.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h3>Boutique Shop</h3>
                <p>Purchase yoga accessories, spiritual books, natural products, and souvenirs to take home memories of your retreat experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Booking Information Section -->
<section class="about-us">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="section-mandala about-mandala-bottom-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Booking Information</span>
            <h2>Plan Your Perfect Retreat Stay</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Important information to help you choose the right accommodation and prepare for your stay.</p>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="/placeholder.svg?height=400&width=500" alt="Retreat Center">
                <div class="about-badge">
                    <i class="fas fa-home"></i>
                    <span>Your Home Away From Home</span>
                </div>
            </div>
            <div class="about-text">
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-calendar-check"></i>
                        <span>Book accommodation preferences in advance</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-utensils"></i>
                        <span>Inform us of dietary requirements when booking</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-clock"></i>
                        <span>Check-in from 2:00 PM, Check-out by 11:00 AM</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-suitcase"></i>
                        <span>Detailed packing list provided after booking</span>
                    </div>
                </div>
                <p>We recommend booking your preferred accommodation type early, especially for private rooms during peak seasons. Our team will send you detailed information about what to bring, meal times, and facility guidelines once your booking is confirmed. We're here to ensure your comfort throughout your transformative retreat experience.</p>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-calendar-check"></i>
                    <span>Book Your Retreat Now</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Ready to Experience Comfort?</span>
            <h2>Book Your Nourishing Retreat Today</h2>
            <p>Experience the perfect combination of comfort, nourishment, and spiritual growth in our beautiful retreat center. Your journey to wellness begins with a single step.</p>
            <div class="cta-buttons">
                <a href="retreats.html" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    <span>View Retreat Programs</span>
                </a>
                <a href="faqs.html" class="btn btn-outline-light">
                    <i class="fas fa-question-circle"></i>
                    <span>Food & Accommodation FAQs</span>
                </a>
            </div>
            <div class="cta-features">
                <div class="cta-feature">
                    <i class="fas fa-leaf"></i>
                    <span>100% Vegetarian Meals</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-bed"></i>
                    <span>Comfortable Accommodations</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-heart"></i>
                    <span>Dietary Accommodations</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection