@extends('layouts.app')

@section('content')
<!-- Hero Carousel Section -->
<section class="hero-carousel">
    <div class="carousel-container">

        @foreach ($sliders as $index => $slider)
        <div class="carousel-slide {{ $index === 0 ? 'active' : '' }}">
            <div class="carousel-content">
                @if($slider->title)
                <span class="hero-badge">{{ $slider->title }}</span>
                @endif
                <h2>{{ $slider->heading ?? 'Your Heading Here' }}</h2>
                <p>{{ $slider->description ?? 'Your Description Here' }}</p>
                <div class="hero-buttons">
                    @if($slider->button_1)
                    <a href="{{ $slider->button1_url }}" class="btn btn-primary">
                        <i class="fas {{$slider->button1_type}}"></i>
                        <span>{{ $slider->button_1 }}</span>
                    </a>
                    @endif
                    @if($slider->button_2)
                    <a href="{{ $slider->button2_url }}" class="btn btn-outline-light">
                        <i class="fas fa-phone"></i>
                        <span>{{ $slider->button_2 }}</span>
                    </a>
                    @endif
                </div>
            </div>
            <div class="overlay"></div>
            <img src="{{ $slider->getFirstMediaUrl('slider') ?: '/placeholder.svg?height=700&width=1600' }}" alt="{{ $slider->title }}">
        </div>
        @endforeach

        <div class="carousel-dots">
            @foreach ($sliders as $index => $s)
            <span class="dot {{ $index === 0 ? 'active' : '' }}"></span>
            @endforeach
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-us" id="about">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="section-mandala about-mandala-bottom-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">About Us</span>
            <h2>{{ $about->title }}</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>{!! $about->short_description !!}</p>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="{{ $about->getFirstMediaUrl('about-us') ?: '/placeholder.svg?height=400&width=500' }}" alt="{{ $about->title ?? 'About Image' }}">
                <div class="about-badge">
                    <i class="fas fa-award"></i>
                    <span>Certified Studio</span>
                </div>
            </div>
            <div class="about-text">
                <div class="about-features">
                    @foreach (range(1, 4) as $i)
                    @php $point = $about->{'key_point_'.$i} ?? null; @endphp
                    @if($point)
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <span>{{ $point }}</span>
                    </div>
                    @endif
                    @endforeach
                </div>
                <p>{{ Str::limit(trim(strip_tags(html_entity_decode($about->description))), 160) }}</p>
                <a href="{{ $about->learn_more_url ?? '#' }}" class="btn btn-primary">
                    <i class="fas fa-arrow-right"></i>
                    <span>Learn More About Us</span>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Image Gallery Section - Auto-scrolling Slider -->
<section class="image-gallery">
    <div class="container">
        <div class="gallery-slider">
            <div class="gallery-track">
                @foreach ($imageSlider as $item)    
                <div class="gallery-slide">
                    <img src="{{ $item->getFirstMediaUrl('image-slider')  ?: '/placeholder.svg?height=250&width=350' }}" alt="{{ $item->title }}">
                    <div class="gallery-overlay">
                        <h4>{{ $item->title }}</h4>
                        <p>{!! $item->description !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<!-- Retreat Programs Section -->
<section class="retreat-programs" id="programs">
    <div class="container">
        <div class="section-header">
            <div class="section-mandala programs-mandala-left"></div>
            <span class="section-badge">Retreat Programs</span>
            <h2>Transformative Retreat Programs</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Discover our carefully crafted retreat programs designed to rejuvenate your mind, body, and soul.</p>
        </div>
        <div class="programs-container">
            <div class="program-card featured">
                <div class="section-mandala programs-mandala-right"></div>
                <div class="program-badge">Most Popular</div>
                <div class="program-image">
                    <img src="/placeholder.svg?height=280&width=400" alt="Weekend Retreat">
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
                    <p>A short but powerful 2-day retreat to reset and recharge. Perfect for busy professionals
                        seeking balance and tranquility.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-leaf"></i> Daily yoga sessions</li>
                        <li><i class="fas fa-moon"></i> Meditation workshops</li>
                        <li><i class="fas fa-utensils"></i> Organic meals included</li>
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
                    <p>Dive deep into yoga practices with our 7-day immersive retreat in a peaceful natural setting.
                    </p>
                    <ul class="program-features">
                        <li><i class="fas fa-om"></i> Advanced yoga training</li>
                        <li><i class="fas fa-mountain"></i> Nature excursions</li>
                        <li><i class="fas fa-spa"></i> Spa treatments</li>
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
                    <p>Focus on mindfulness and meditation techniques in this specialized 5-day retreat.</p>
                    <ul class="program-features">
                        <li><i class="fas fa-peace"></i> Silent meditation</li>
                        <li><i class="fas fa-wind"></i> Breathing techniques</li>
                        <li><i class="fas fa-brain"></i> Mindfulness training</li>
                    </ul>
                    <a href="#" class="btn btn-outline">
                        <i class="fas fa-info-circle"></i>
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="view-all">
            <a href="#" class="btn btn-primary btn-large">
                <i class="fas fa-th-large"></i>
                <span>View All Retreat Programs</span>
            </a>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <div class="section-mandala about-mandala-top-left"></div>
    <div class="section-mandala why-choose-mandala-bottom-right"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Why Choose Us</span>
            <h2>Experience the Serenity Difference</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-swastik">卐</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Discover what makes our yoga retreats unique and transformative.</p>
        </div>
        <div class="features-container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Certified Instructors</h3>
                <p>All our yoga instructors are internationally certified with years of teaching experience and deep
                    knowledge of various yoga traditions.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-mountain"></i>
                </div>
                <h3>Serene Locations</h3>
                <p>Our retreats are held in carefully selected peaceful and natural environments that enhance your
                    spiritual journey.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Small Group Sizes</h3>
                <p>We maintain small groups to ensure personalized attention and guidance for each participant's
                    unique needs.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Organic Cuisine</h3>
                <p>Enjoy nutritious, organic meals prepared by our expert chefs using locally sourced ingredients
                    during your stay.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Stays Section -->
<section class="our-stays">
    <div class="section-mandala about-mandala-top-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Stays</span>
            <h2>Beautiful Places to Stay</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Experience comfort and tranquility in our carefully selected retreat locations.</p>
        </div>
        <div class="stays-container">
            <div class="stay-card">
                <div class="stay-image">
                    <img src="/placeholder.svg?height=300&width=400" alt="Mountain Retreat Center">
                    <div class="stay-overlay">
                        <a href="#" class="view-gallery">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                        </a>
                    </div>
                </div>
                <div class="stay-content">
                    <div class="stay-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Himalayan Foothills</span>
                    </div>
                    <h3>Mountain Retreat Center</h3>
                    <p>Nestled in the serene Himalayan foothills, this retreat center offers breathtaking mountain
                        views and peaceful surroundings.</p>
                    <div class="stay-amenities">
                        <span><i class="fas fa-wifi"></i> Free WiFi</span>
                        <span><i class="fas fa-spa"></i> Spa Services</span>
                        <span><i class="fas fa-utensils"></i> Organic Meals</span>
                    </div>
                </div>
            </div>
            <div class="stay-card">
                <div class="stay-image">
                    <img src="/placeholder.svg?height=300&width=400" alt="Beachside Yoga Villa">
                    <div class="stay-overlay">
                        <a href="#" class="view-gallery">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                        </a>
                    </div>
                </div>
                <div class="stay-content">
                    <div class="stay-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Coastal Paradise</span>
                    </div>
                    <h3>Beachside Yoga Villa</h3>
                    <p>Wake up to the sound of ocean waves in our beautiful beachside villa, perfect for sunrise
                        yoga sessions.</p>
                    <div class="stay-amenities">
                        <span><i class="fas fa-swimming-pool"></i> Pool Access</span>
                        <span><i class="fas fa-umbrella-beach"></i> Beach Front</span>
                        <span><i class="fas fa-dumbbell"></i> Fitness Center</span>
                    </div>
                </div>
            </div>
            <div class="stay-card">
                <div class="stay-image">
                    <img src="/placeholder.svg?height=300&width=400" alt="Forest Sanctuary">
                    <div class="stay-overlay">
                        <a href="#" class="view-gallery">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                        </a>
                    </div>
                </div>
                <div class="stay-content">
                    <div class="stay-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Sacred Forest</span>
                    </div>
                    <h3>Forest Sanctuary</h3>
                    <p>Immerse yourself in nature at our forest sanctuary, surrounded by ancient trees and natural
                        healing energy.</p>
                    <div class="stay-amenities">
                        <span><i class="fas fa-tree"></i> Nature Trails</span>
                        <span><i class="fas fa-fire"></i> Fire Ceremonies</span>
                        <span><i class="fas fa-om"></i> Meditation Halls</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Teams Section -->
<section class="our-teams" id="team">
    <div class="section-mandala teams-mandala-top-right"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Teams</span>
            <h2>Meet Our Expert Instructors</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Our certified yoga instructors bring years of experience and deep spiritual knowledge to guide your
                journey.</p>
        </div>
        <div class="team-slider">
            <div class="team-track">
                <!-- Original slides -->
                <div class="team-card">
                    <div class="team-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Priya Sharma">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Priya Sharma</h3>
                        <span class="team-role">Lead Yoga Instructor</span>
                        <div class="team-experience">15+ Years Experience</div>
                        <p>Certified in Hatha and Vinyasa yoga with specialization in meditation and pranayama
                            techniques.</p>
                        <div class="team-specialties">
                            <span>Hatha Yoga</span>
                            <span>Meditation</span>
                            <span>Pranayama</span>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Arjun Patel">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Arjun Patel</h3>
                        <span class="team-role">Ashtanga Specialist</span>
                        <div class="team-experience">12+ Years Experience</div>
                        <p>Expert in Ashtanga and Power Yoga with deep knowledge of traditional yoga philosophy and
                            anatomy.</p>
                        <div class="team-specialties">
                            <span>Ashtanga</span>
                            <span>Power Yoga</span>
                            <span>Philosophy</span>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Maya Singh">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Maya Singh</h3>
                        <span class="team-role">Yin & Restorative Expert</span>
                        <div class="team-experience">10+ Years Experience</div>
                        <p>Specializes in Yin Yoga and restorative practices with certification in yoga therapy and
                            sound healing.</p>
                        <div class="team-specialties">
                            <span>Yin Yoga</span>
                            <span>Restorative</span>
                            <span>Sound Healing</span>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Ravi Kumar">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Ravi Kumar</h3>
                        <span class="team-role">Meditation Master</span>
                        <div class="team-experience">20+ Years Experience</div>
                        <p>Master of various meditation techniques including Vipassana, Mindfulness, and traditional
                            Vedic practices.</p>
                        <div class="team-specialties">
                            <span>Vipassana</span>
                            <span>Mindfulness</span>
                            <span>Vedic Practices</span>
                        </div>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Ananya Gupta">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Ananya Gupta</h3>
                        <span class="team-role">Prenatal & Family Yoga</span>
                        <div class="team-experience">8+ Years Experience</div>
                        <p>Certified in prenatal yoga and family practices, helping mothers and families connect
                            through yoga.</p>
                        <div class="team-specialties">
                            <span>Prenatal</span>
                            <span>Family Yoga</span>
                            <span>Kids Yoga</span>
                        </div>
                    </div>
                </div>

                <!-- Duplicate first two slides for infinite loop -->
                <div class="team-card clone">
                    <div class="team-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Priya Sharma">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Priya Sharma</h3>
                        <span class="team-role">Lead Yoga Instructor</span>
                        <div class="team-experience">15+ Years Experience</div>
                        <p>Certified in Hatha and Vinyasa yoga with specialization in meditation and pranayama
                            techniques.</p>
                        <div class="team-specialties">
                            <span>Hatha Yoga</span>
                            <span>Meditation</span>
                            <span>Pranayama</span>
                        </div>
                    </div>
                </div>
                <div class="team-card clone">
                    <div class="team-image">
                        <img src="/placeholder.svg?height=300&width=250" alt="Arjun Patel">
                        <div class="team-overlay">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Arjun Patel</h3>
                        <span class="team-role">Ashtanga Specialist</span>
                        <div class="team-experience">12+ Years Experience</div>
                        <p>Expert in Ashtanga and Power Yoga with deep knowledge of traditional yoga philosophy and
                            anatomy.</p>
                        <div class="team-specialties">
                            <span>Ashtanga</span>
                            <span>Power Yoga</span>
                            <span>Philosophy</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-dots">
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

<!-- Testimonials Section -->
<section class="testimonials">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="section-mandala testimonials-mandala-bottom-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Testimonials</span>
            <h2>What Our Students Say</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Hear from our community of practitioners who have transformed their lives through our programs.</p>
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
                            <span>Marketing Executive</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The weekend retreat was exactly what I needed. The instructors were knowledgeable and
                        supportive, and I left feeling refreshed and centered."</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Michael Chen">
                        </div>
                        <div class="testimonial-info">
                            <h4>Michael Chen</h4>
                            <span>Software Developer</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"I've attended many yoga retreats, but Serenity Yoga's week-long immersion was by far the
                        most transformative. The location was breathtaking."</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Emma Rodriguez">
                        </div>
                        <div class="testimonial-info">
                            <h4>Emma Rodriguez</h4>
                            <span>Teacher</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The meditation intensive retreat helped me develop a consistent practice that I've
                        maintained for months. The techniques I learned have been invaluable for managing stress."
                    </p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="David Kumar">
                        </div>
                        <div class="testimonial-info">
                            <h4>David Kumar</h4>
                            <span>Entrepreneur</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"Amazing experience! The combination of yoga, meditation, and the beautiful natural setting
                        created the perfect environment for healing."</p>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Lisa Thompson">
                        </div>
                        <div class="testimonial-info">
                            <h4>Lisa Thompson</h4>
                            <span>Nurse</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The personalized attention and small group size made all the difference. I felt supported
                        throughout my entire journey."</p>
                </div>

                <!-- Duplicate first two testimonials for infinite loop -->
                <div class="testimonial-card clone">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Sarah Johnson">
                        </div>
                        <div class="testimonial-info">
                            <h4>Sarah Johnson</h4>
                            <span>Marketing Executive</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"The weekend retreat was exactly what I needed. The instructors were knowledgeable and
                        supportive, and I left feeling refreshed and centered."</p>
                </div>
                <div class="testimonial-card clone">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="/placeholder.svg?height=60&width=60" alt="Michael Chen">
                        </div>
                        <div class="testimonial-info">
                            <h4>Michael Chen</h4>
                            <span>Software Developer</span>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>"I've attended many yoga retreats, but Serenity Yoga's week-long immersion was by far the
                        most transformative. The location was breathtaking."</p>
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

<!-- Call to Action Section -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Start Your Journey</span>
            <h2>Ready to Transform Your Life?</h2>
            <p>Join our upcoming retreats and start your journey to wellness and inner peace. Limited spaces
                available.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-paper-plane"></i>
                    <span>Apply Now</span>
                </a>
                <a href="#" class="btn btn-outline-light">
                    <i class="fas fa-phone"></i>
                    <span>Contact Us</span>
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