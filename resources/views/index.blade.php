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
            <span class="section-badge">{{ $about->title }}</span>
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
                <a href="{{ route('who-we-are') }}" class="btn btn-primary">
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
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Discover our carefully crafted retreat programs designed to rejuvenate your mind, body, and soul.</p>
        </div>
        <div class="programs-container">
            @foreach($retreat as $index => $program)
            <div class="program-card {{ $index === 0 ? 'featured' : '' }}">
                <div class="section-mandala {{ $index % 2 === 0 ? 'programs-mandala-left' : 'programs-mandala-right' }}"></div>

                @if($index === 0)
                <div class="program-badge">Most Popular</div>
                @endif

                <div class="program-image">
                    <img src="{{ $program->getUploadedMedia()?->getUrl() ?? '/placeholder.svg' }}" alt="{{ $program->title }}">
                    <div class="program-image-overlay"></div>
                </div>

                <div class="program-content">
                    <div class="program-header">
                        <h3>{{ $program->title }}</h3>
                        <div class="program-price">
                            <span class="price-amount">₹ {{ number_format($program->price, 2) }}</span>
                            <span class="price-period">per person</span>
                        </div>
                    </div>

                    <div class="program-duration">
                        <i class="fas fa-clock"></i>
                        <span>{{ $program->program_in_days }} Days Program</span>
                    </div>

                    <p>{{ Str::limit(strip_tags($program->description), 160) }}</p>

                    {{-- Optional static features or you can add dynamic ones --}}
                    <ul class="program-features">
                        <li><i class="fas fa-leaf"></i> Daily yoga sessions</li>
                        <li><i class="fas fa-moon"></i> Meditation workshops</li>
                        <li><i class="fas fa-utensils"></i> Organic meals included</li>
                    </ul>

                    <a href="{{ route($program->slug) }}" class="btn {{ $program->button_type === 'primary' ? 'btn-primary' : 'btn-outline' }}">
                        <i class="fas fa-calendar-check"></i>
                        <span>{{ $program->button_text ?? 'Apply Now' }}</span>
                    </a>
                </div>
            </div>
            @endforeach
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
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-swastik">卐</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Discover what makes our yoga retreats unique and transformative.</p>
        </div>

        <div class="features-container">
            @foreach($whyChooseUs as $feature)
            <div class="feature-card">
                <div class="feature-icon">
                    {{-- Use icon class from DB or fallback --}}
                    <i class="{{ $feature->icon_class ?? 'fas fa-check-circle' }}"></i>
                </div>
                <h3>{{ $feature->title }}</h3>
                <p>{!!$feature->description!!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Our Stays Section -->
<section class="our-stays">
    <div class="section-mandala about-mandala-top-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Stays</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Experience comfort and tranquility in our carefully selected retreat locations.</p>
        </div>

        <div class="stays-container">
            @foreach($stays as $stay)
            <div class="stay-card">
                <div class="stay-image">
                    <img src="{{ $stay->media->first()?->getUrl() ?? '/placeholder.svg' }}" alt="{{ $stay->title }}">
                    <div class="stay-overlay">
                        <a href="" class="view-gallery">
                            <i class="fas fa-images"></i>
                            <span>View Gallery</span>
                        </a>
                    </div>
                </div>
                <div class="stay-content">
                    <div class="stay-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{ $stay->location }}</span>
                    </div>
                    <h3>{{ $stay->title }}</h3>
                    <p>{!! $stay->description !!}</p>

                    {{-- Static amenities for now --}}
                    <div class="stay-amenities">
                        <span><i class="fas fa-wifi"></i> Free WiFi</span>
                        <span><i class="fas fa-spa"></i> Spa Services</span>
                        <span><i class="fas fa-utensils"></i> Organic Meals</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Teams Section -->
<section class="our-teams" id="team">
    <div class="section-mandala teams-mandala-top-right"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Meet Our Expert Instructors</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Our certified yoga instructors bring years of experience and deep spiritual knowledge to guide your
                journey.</p>
        </div>
        <div class="team-track">
            @foreach($ourteam as $member)
            <div class="team-card">
                <div class="team-image">
                    <img src="{{ $member->getFirstMediaUrl('team') ?? '/placeholder.svg?height=300&width=250' }}"
                        alt="{{ $member->name }}">
                    <div class="team-overlay">
                        <div class="team-social">
                            @if($member->instagram)
                            <a href="{{ $member->instagram }}"><i class="fab fa-instagram"></i></a>
                            @endif
                            @if($member->facebook)
                            <a href="{{ $member->facebook }}"><i class="fab fa-facebook"></i></a>
                            @endif
                            @if($member->linkedin)
                            <a href="{{ $member->linkedin }}"><i class="fab fa-linkedin"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="team-content">
                    <h3>{{ $member->name }}</h3>
                    <span class="team-role">{{ $member->designation }}</span>
                    <div class="team-experience">{{ $member->experience }} Experience</div>
                    <p>{{ Str::limit(trim(strip_tags(html_entity_decode($member->description))), 160) }}</p>
                    <div class="team-specialties">
                        @if($member->title_1)<span>{{ $member->title_1 }}</span>@endif
                        @if($member->title_2)<span>{{ $member->title_2 }}</span>@endif
                        @if($member->title_3)<span>{{ $member->title_3 }}</span>@endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="section-mandala testimonials-mandala-bottom-left"></div>
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Reviews</span>
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
                @foreach ($reviews as $review)
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-image">
                            <img src="{{ $review->getFirstMediaUrl('review') ?? asset('/placeholder.svg?height=60&width=60') }}"
                                alt="{{ $review->name }}">
                        </div>
                        <div class="testimonial-info">
                            <h4>{{ $review->name }}</h4>
                            <span>{{ $review->designation }}</span>
                            <div class="stars">
                                @php
                                $rating = (int) $review->rating; // ensure it's an integer
                                @endphp

                                <div class="stars">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fas fa-star {{ $i <= $rating ? 'text-warning' : 'text-muted' }}"></i>
                                        @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>"{{ $review->description }}"</p>
                </div>
                @endforeach
            </div>

            <div class="testimonial-dots">
                @for ($i = 0; $i < ceil(count($reviews) / 3); $i++)
                    <span class="dot {{ $i == 0 ? 'active' : '' }}"></span>
                    @endfor
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