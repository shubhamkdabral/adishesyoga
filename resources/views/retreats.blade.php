@extends('layouts.app')

@section('content')

<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide active">
            <div class="carousel-content">
                <span class="hero-badge">Transform Your Life</span>
                <h2>Transformative Retreat Programs</h2>
                <p>Discover our carefully crafted retreat programs designed to rejuvenate your mind, body, and soul in the serene foothills of the Himalayas.</p>
            </div>
            <div class="overlay"></div>
            <img src="/placeholder.svg?height=700&width=1600" alt="Retreat Programs">
        </div>
    </div>
</section>

<!-- Retreat Programs Section -->
<section class="retreat-programs" id="programs">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Programs</span>
            <h2>Choose Your Perfect Retreat</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Each retreat is thoughtfully designed to provide a unique experience tailored to different needs and preferences.</p>
        </div>

        <div class="programs-container">
            <div class="program-card featured">
                <div class="section-mandala programs-mandala-right"></div>
                <div class="program-badge">Most Popular</div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Weekend Wellness Retreat">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>Weekend Wellness Retreat</h3>
                        <div class="program-price">
                            <span class="price-amount">$299</span>
                            <span class="price-period">per person</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-clock"></i>
                        <span>2 Days Program</span>
                    </div>
                    <p>A short but powerful 2-day retreat perfect for busy professionals seeking balance and tranquility. Reset and recharge in our peaceful mountain setting.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-leaf"></i> 4 Daily yoga sessions</li>
                        <li><i class="fas fa-moon"></i> Meditation workshops</li>
                        <li><i class="fas fa-utensils"></i> Organic meals included</li>
                        <li><i class="fas fa-mountain"></i> Nature walks</li>
                        <li><i class="fas fa-spa"></i> Relaxation sessions</li>
                    </ul>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-calendar-check"></i>
                        <span>Book Now</span>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="section-mandala programs-mandala-left"></div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Week-long Immersion">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>Week-long Immersion</h3>
                        <div class="program-price">
                            <span class="price-amount">$899</span>
                            <span class="price-period">per person</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-clock"></i>
                        <span>7 Days Program</span>
                    </div>
                    <p>Dive deep into yoga practices with our comprehensive 7-day immersive retreat in a peaceful natural setting surrounded by mountains.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-om"></i> Advanced yoga training</li>
                        <li><i class="fas fa-mountain"></i> Daily nature excursions</li>
                        <li><i class="fas fa-spa"></i> Ayurvedic spa treatments</li>
                        <li><i class="fas fa-book"></i> Philosophy workshops</li>
                        <li><i class="fas fa-users"></i> Community activities</li>
                    </ul>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="section-mandala programs-mandala-right"></div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Meditation Intensive">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>Meditation Intensive</h3>
                        <div class="program-price">
                            <span class="price-amount">$649</span>
                            <span class="price-period">per person</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-clock"></i>
                        <span>5 Days Program</span>
                    </div>
                    <p>Focus on mindfulness and meditation techniques in this specialized 5-day retreat designed for deep inner exploration.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-peace"></i> Silent meditation periods</li>
                        <li><i class="fas fa-wind"></i> Pranayama techniques</li>
                        <li><i class="fas fa-brain"></i> Mindfulness training</li>
                        <li><i class="fas fa-leaf"></i> Walking meditation</li>
                        <li><i class="fas fa-moon"></i> Evening contemplation</li>
                    </ul>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="section-mandala programs-mandala-left"></div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Detox & Renewal">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>Detox & Renewal</h3>
                        <div class="program-price">
                            <span class="price-amount">$749</span>
                            <span class="price-period">per person</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-clock"></i>
                        <span>6 Days Program</span>
                    </div>
                    <p>Cleanse your body and mind with our holistic detox program combining yoga, Ayurvedic treatments, and nutritional guidance.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-apple-alt"></i> Detox meal plans</li>
                        <li><i class="fas fa-spa"></i> Panchakarma treatments</li>
                        <li><i class="fas fa-leaf"></i> Cleansing yoga practices</li>
                        <li><i class="fas fa-tint"></i> Juice therapy</li>
                        <li><i class="fas fa-seedling"></i> Herbal consultations</li>
                    </ul>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="section-mandala programs-mandala-right"></div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Spiritual Journey">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>Spiritual Journey</h3>
                        <div class="program-price">
                            <span class="price-amount">$1199</span>
                            <span class="price-period">per person</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-clock"></i>
                        <span>10 Days Program</span>
                    </div>
                    <p>Embark on a profound spiritual journey with temple visits, sacred ceremonies, and deep philosophical teachings in the heart of India.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-pray"></i> Sacred temple visits</li>
                        <li><i class="fas fa-fire"></i> Fire ceremonies</li>
                        <li><i class="fas fa-book-open"></i> Ancient text studies</li>
                        <li><i class="fas fa-water"></i> Ganga Aarti participation</li>
                        <li><i class="fas fa-om"></i> Mantra chanting</li>
                    </ul>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="section-mandala programs-mandala-left"></div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Teacher Training">
                    <div class="program-image-overlay"></div>
                </div>
                <div class="program-content">
                    <div class="program-header">
                        <h3>200-Hour Teacher Training</h3>
                        <div class="program-price">
                            <span class="price-amount">$1899</span>
                            <span class="price-period">per person</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-clock"></i>
                        <span>21 Days Program</span>
                    </div>
                    <p>Become a certified yoga instructor with our comprehensive 200-hour Yoga Alliance registered teacher training program.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-certificate"></i> Yoga Alliance certification</li>
                        <li><i class="fas fa-chalkboard-teacher"></i> Teaching methodology</li>
                        <li><i class="fas fa-anatomy"></i> Anatomy & physiology</li>
                        <li><i class="fas fa-book"></i> Yoga philosophy</li>
                        <li><i class="fas fa-graduation-cap"></i> Practicum sessions</li>
                    </ul>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What's Included Section -->
<section class="why-choose-us">
    <div class="section-mandala about-mandala-top-left"></div>
    <div class="section-mandala why-choose-mandala-bottom-right"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">What's Included</span>
            <h2>Everything You Need for Your Journey</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-swastik">卐</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Our comprehensive retreat packages include everything you need for a transformative experience.</p>
        </div>
        <div class="features-container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-bed"></i>
                </div>
                <h3>Comfortable Accommodation</h3>
                <p>Stay in our peaceful retreat center with comfortable rooms, clean facilities, and beautiful mountain views in a serene natural setting.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>Nutritious Meals</h3>
                <p>Enjoy three daily vegetarian meals prepared with organic, locally-sourced ingredients following Ayurvedic principles for optimal health.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-om"></i>
                </div>
                <h3>Expert Instruction</h3>
                <p>Learn from certified yoga teachers with years of experience in traditional practices, meditation, and spiritual guidance.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shuttle-van"></i>
                </div>
                <h3>Airport Transfers</h3>
                <p>Complimentary group transfers from Dehradun Airport at scheduled times, making your arrival and departure hassle-free.</p>
            </div>
        </div>
    </div>
</section>

<!-- Retreat Calendar Section -->
<section class="retreat-programs">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Upcoming Dates</span>
            <h2>2024 Retreat Calendar</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Plan your transformative journey with our upcoming retreat dates throughout the year.</p>
        </div>

        <div class="programs-container">
            <div class="program-card">
                <div class="program-content">
                    <div class="program-header">
                        <h3>March 15-17, 2024</h3>
                        <div class="program-price">
                            <span class="price-amount">Weekend</span>
                            <span class="price-period">Retreat</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-calendar"></i>
                        <span>Spring Awakening</span>
                    </div>
                    <p>Welcome spring with renewal and fresh energy. Perfect for beginners and those seeking a gentle introduction to retreat life.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-seedling"></i> Spring detox practices</li>
                        <li><i class="fas fa-sun"></i> Sunrise yoga sessions</li>
                        <li><i class="fas fa-flower"></i> Nature meditation</li>
                    </ul>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-calendar-check"></i>
                        <span>Book Now</span>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-content">
                    <div class="program-header">
                        <h3>April 20-27, 2024</h3>
                        <div class="program-price">
                            <span class="price-amount">7-Day</span>
                            <span class="price-period">Immersion</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-calendar"></i>
                        <span>Deep Practice Week</span>
                    </div>
                    <p>Immerse yourself in intensive practice during the beautiful spring season with perfect weather and blooming nature.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-mountain"></i> Mountain hiking</li>
                        <li><i class="fas fa-om"></i> Advanced asana practice</li>
                        <li><i class="fas fa-book"></i> Philosophy studies</li>
                    </ul>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-content">
                    <div class="program-header">
                        <h3>May 10-15, 2024</h3>
                        <div class="program-price">
                            <span class="price-amount">5-Day</span>
                            <span class="price-period">Meditation</span>
                        </div>
                    </div>
                    <div class="program-duration">
                        <i class="fas fa-calendar"></i>
                        <span>Silent Retreat</span>
                    </div>
                    <p>Experience the power of silence and deep meditation in our peaceful mountain sanctuary during the pleasant pre-summer season.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-peace"></i> Noble silence periods</li>
                        <li><i class="fas fa-brain"></i> Mindfulness training</li>
                        <li><i class="fas fa-moon"></i> Evening contemplation</li>
                    </ul>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="section-mandala testimonials-mandala-bottom-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Testimonials</span>
            <h2>What Our Retreat Participants Say</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Hear from our community of practitioners who have transformed their lives through our retreat programs.</p>
        </div>
        <div class="testimonial-slider">
            <div class="testimonial-track">
                <!-- Original testimonials -->
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Sarah Johnson">
                        </div>
                        <div class="testimonial-info">
                            <h4>Sarah Johnson</h4>
                            <span>Weekend Retreat Participant</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The weekend retreat was exactly what I needed to reset and recharge. The instructors were incredibly knowledgeable and supportive, and I left feeling refreshed and centered. The mountain setting was absolutely magical."</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Michael Chen">
                        </div>
                        <div class="testimonial-info">
                            <h4>Michael Chen</h4>
                            <span>Week-long Immersion Graduate</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"I've attended many yoga retreats around the world, but Adishesh Yoga's week-long immersion was by far the most transformative. The combination of traditional teachings and modern comfort was perfect."</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Emma Rodriguez">
                        </div>
                        <div class="testimonial-info">
                            <h4>Emma Rodriguez</h4>
                            <span>Meditation Intensive Participant</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The meditation intensive retreat helped me develop a consistent practice that I've maintained for months. The techniques I learned have been invaluable for managing stress and finding inner peace."</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="David Kumar">
                        </div>
                        <div class="testimonial-info">
                            <h4>David Kumar</h4>
                            <span>Teacher Training Graduate</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The 200-hour teacher training exceeded all my expectations. The depth of knowledge shared by the instructors and the supportive community made this an unforgettable experience. I'm now confidently teaching yoga!"</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Lisa Thompson">
                        </div>
                        <div class="testimonial-info">
                            <h4>Lisa Thompson</h4>
                            <span>Detox & Renewal Participant</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The detox program was life-changing. I not only lost weight and felt more energetic, but I also gained a deeper understanding of Ayurvedic principles that I continue to apply in my daily life."</p>
                </div>

                <!-- Duplicate first two testimonials for infinite loop -->
                <div class="testimonial-card clone">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Sarah Johnson">
                        </div>
                        <div class="testimonial-info">
                            <h4>Sarah Johnson</h4>
                            <span>Weekend Retreat Participant</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The weekend retreat was exactly what I needed to reset and recharge. The instructors were incredibly knowledgeable and supportive, and I left feeling refreshed and centered."</p>
                </div>
                <div class="testimonial-card clone">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Michael Chen">
                        </div>
                        <div class="testimonial-info">
                            <h4>Michael Chen</h4>
                            <span>Week-long Immersion Graduate</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"I've attended many yoga retreats around the world, but Adishesh Yoga's week-long immersion was by far the most transformative. The combination of traditional teachings and modern comfort was perfect."</p>
                </div>
            </div>
            <div class="testimonial-dots">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="slider-nav">
                <button class="slider-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="slider-next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Ready to Transform?</span>
            <h2>Begin Your Yoga Journey Today</h2>
            <p>Choose your perfect retreat and embark on a transformative journey of self-discovery, healing, and spiritual growth in the heart of the Himalayas.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    <span>Book Your Retreat</span>
                </a>
                <a href="faqs.html" class="btn btn-outline-light">
                    <i class="fas fa-question-circle"></i>
                    <span>View FAQs</span>
                </a>
            </div>
            <div class="cta-features">
                <div class="cta-feature">
                    <i class="fas fa-shield-alt"></i>
                    <span>100% Satisfaction Guarantee</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-calendar-check"></i>
                    <span>Flexible Booking</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Support</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection