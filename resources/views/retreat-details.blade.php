@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide active">
            <div class="carousel-content">
                <span class="hero-badge">{{ $retreat->banner_title }}</span>
                <h2>{{ $retreat->banner_heading }}</h2>
                <p>{{ $retreat->banner_short_description }}</p>
            </div>
            <div class="overlay"></div>
            <img src="{{ $retreat->getFirstMediaUrl('banner') ?: '/placeholder.svg?height=700&width=1600' }}" alt="{{ $retreat->banner_heading }}">
        </div>
    </div>
</section>

{{-- Retreat Introduction --}}
<section class="about-us">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <span class="section-badge">About The Retreat</span>
                <h2>{{ $retreat->title }}</h2>
                <div
                    style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;">
                </div>
                <p>{{ $retreat->short_description }}</p>
                <p>{!! $retreat->description !!}</p>

                <div style="display: flex; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-calendar" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">{{ $retreat->program_in_days }} Days / {{ $retreat->program_in_days - 1 }} Nights</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-users" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">Max {{ $retreat->total_person }} Participants</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-map-marker-alt" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">{{$retreat->address}}</span>
                    </div>
                </div>
            </div>

            <div class="about-image">
                <img src="{{ $retreat->getFirstMediaUrl('retreat') ?: '/placeholder.svg?height=500&width=600' }}" alt="{{ $retreat->retreat_name }}">
            </div>
        </div>
    </div>
</section>


<!-- Retreat Highlights -->
<section class="why-choose-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Retreat Highlights</span>
            <h2>What Makes Our Retreat Special</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div class="features-container">
            @foreach ($retreatHighlights as $highlight)
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="{{ $highlight->icon }}"></i>
                </div>
                <h3>{{ $highlight->title }}</h3>
                <p>{!! $highlight->description !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- What Will You Learn -->
<section class="our-teams">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Learning Journey</span>
            <h2>What Will You Learn</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        @foreach($retreatLearnings as $index => $learning)
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
            @if($index % 2 === 0)
            <div>
                <img src="{{ $learning->getUploadedMedia() ? $learning->getUploadedMedia()->getUrl() : '/placeholder.svg' }}" alt="{{ $learning->title }}">
            </div>
            @endif

            <div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">
                    {{ $learning->title }}
                </h3>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    {!! $learning->description !!}
                </p>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">{{ $learning->key_point_1 }}</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">{{ $learning->key_point_2 }}</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">{{ $learning->key_point_3 }}</span>
                    </li>
                </ul>
            </div>

            @if($index % 2 !== 0)
            <div>
                <img src="/placeholder.svg?height=400&width=500" alt="{{ $learning->title }}"
                    style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
            </div>
            @endif
        </div>
        @endforeach
    </div>
</section>


<!-- Retreat Schedule -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Daily Flow</span>
            <h2>Retreat Schedule</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>A typical day at our retreat is carefully structured to balance activity and rest, learning and
                reflection, community and solitude.</p>
        </div>

        <div style="max-width: 800px; margin: 0 auto; background: white; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow-medium); border: 1px solid var(--border-light);">
            <div style="background: linear-gradient(to right, var(--primary-color), var(--primary-light)); color: white; padding: 1.5rem;">
                <h3 style="font-size: 1.25rem; font-weight: bold;">Daily Schedule</h3>
            </div>

            <div style="padding: 1.5rem;">
                @forelse ($retreatSchedules as $schedule)
                <div style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid var(--border-light); display: flex; gap: 1rem;">
                    <div style="width: 100px; text-align: center;">
                        <span style="color: var(--primary-color); font-weight: bold;">{{ $schedule->time }}</span>
                    </div>
                    <div>
                        <h4 style="font-weight: bold; margin-bottom: 0.25rem;">{{ $schedule->Activity }}</h4>
                        <p style="color: var(--text-light);">{!! $schedule->description !!}</p>
                    </div>
                </div>
                @empty
                <p style="text-align: center; color: var(--text-light);">Schedule will be updated soon.</p>
                @endforelse

                <div style="margin-top: 2rem; padding: 1rem; background: var(--background-light); border-radius: 10px;">
                    <p style="color: var(--text-light); font-style: italic;">
                        <strong>Note:</strong> Sunday schedule is more relaxed with optional activities and a longer free period for personal practice or rest.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Things to Carry -->
<section class="our-teams">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Be Prepared</span>
            <h2>Things You Need To Carry</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @foreach($retreatCarries as $carry)
            <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                        <i class="{{ $carry->icon }}"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold;">{{ $carry->title }}</h3>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    @foreach($carry->getItems() as $item)
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-check-circle" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span style="color: var(--text-light);">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Arrival and Departure -->
@if($retreat->travelInfo)
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Travel Info</span>
            <h2>Arrival & Departure Details</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            {{-- Arrival Information --}}
            <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                        <i class="fas fa-plane-arrival"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Arrival Information</h3>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem;">Check-in Time:</h4>
                    <p style="color: var(--text-light);">{{ $retreat->travelInfo->check_in }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem;">Nearest Airport:</h4>
                    <p style="color: var(--text-light);">{{ $retreat->travelInfo->nearest_airpot }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem;">Airport Transfers:</h4>
                    <p style="color: var(--text-light);">{{ $retreat->travelInfo->airpot_transfer }}</p>
                </div>
                <div>
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem;">By Train:</h4>
                    <p style="color: var(--text-light);">{{ $retreat->travelInfo->by_train }}</p>
                </div>
            </div>

            {{-- Departure Information --}}
            <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Departure Information</h3>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem;">Check-out Time:</h4>
                    <p style="color: var(--text-light);">{{ $retreat->travelInfo->check_out }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem;">Airport Transfers:</h4>
                    <p style="color: var(--text-light);">{{ $retreat->travelInfo->airport_transfer_departure }}</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem;">Late Departures:</h4>
                    <p style="color: var(--text-light);">{{ $retreat->travelInfo->late_departure }}</p>
                </div>
                <div>
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem;">Extending Your Stay:</h4>
                    <p style="color: var(--text-light);">{{ $retreat->travelInfo->extending_your_stay }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


<!-- Food and Accommodation -->
<section class="our-stays">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Your Stay</span>
            <h2>Food & Accommodation</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        @foreach ($foodNdAcc as $item)
        {{-- Accommodation --}}
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
            <div>
                @if ($item->getUploadedStayMedia())
                <img src="{{ $item->getUploadedStayMedia()->getUrl() }}" alt="{{ $item->title }}"
                    style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
                @endif
            </div>
            <div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">
                    {{ $item->title }}
                </h3>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    {!! $item->acc_description !!}
                </p>
                <div style="margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <i class="fas fa-bed" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Room Types:</h4>
                            <p style="color: var(--text-light);">{{ $item->room_type }}</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <i class="fas fa-fan" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Amenities:</h4>
                            <p style="color: var(--text-light);">{{ $item->amenities }}</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-wifi" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Connectivity:</h4>
                            <p style="color: var(--text-light);">{{ $item->connectivity }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Food --}}
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
            <div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">
                    Sattvic Cuisine
                </h3>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    {!! $item->food_description !!}
                </p>
                <div style="margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <i class="fas fa-seedling" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Organic & Local:</h4>
                            <p style="color: var(--text-light);">{{ $item->org_local }}</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <i class="fas fa-utensils" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Meal Schedule:</h4>
                            <p style="color: var(--text-light);">{{ $item->meal_schedule }}</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-apple-alt" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Dietary Needs:</h4>
                            <p style="color: var(--text-light);">{{ $item->dietary_needs }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @if ($item->getUploadedMedia())
                <img src="{{ $item->getUploadedMedia()->getUrl() }}" alt="{{ $item->title }}"
                    style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
                @endif
            </div>
        </div>
        @endforeach
    </div>
</section>



<!-- Track and Temples -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Sacred Surroundings</span>
            <h2>Nearby Tracks & Temples</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Our retreat location is surrounded by natural beauty and spiritual significance, with several hiking
                trails and ancient temples within easy reach.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @foreach ($nearBy as $spot)
            <div
                style="background: white; border-radius: 15px; overflow: hidden; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); transition: all 0.3s ease;">
                <div style="height: 200px; overflow: hidden;">
                    @if ($spot->getFirstMediaUrl('nearby'))
                    <img src="{{ $spot->getFirstMediaUrl('nearby') }}" alt="{{ $spot->name }}"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                    @else
                    <img src="/placeholder.svg?height=200&width=400" alt="{{ $spot->name }}"
                        style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                    @endif
                </div>
                <div style="padding: 1.5rem;">
                    <div
                        style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-light); font-size: 0.875rem; margin-bottom: 0.5rem;">
                        <i class="fas fa-map-marker-alt" style="color: var(--primary-color);"></i>
                        <span>{{ $spot->distance }} from retreat center</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold; margin-bottom: 0.75rem;">{{ $spot->name }}</h3>
                    <p style="color: var(--text-light); margin-bottom: 1rem;">{!! $spot->description !!}</p>
                    <div
                        style="display: flex; align-items: center; gap: 0.5rem; color: var(--primary-color); font-weight: 500;">
                        <span>{{ $spot->difficulty }}</span>
                        <span>•</span>
                        <span>{{ $spot->difficulty_distance }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Call to Action -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Limited Spaces Available</span>
            <h2>Begin Your Transformative Journey</h2>
            <p>Join our upcoming Himalayan Yoga Retreat and experience a profound shift in your practice and
                perspective.
                Spaces are limited to ensure a personalized experience.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">
                    <span>Book Your Retreat</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#" class="btn btn-outline-light">
                    <span>Download Brochure</span>
                    <i class="fas fa-download"></i>
                </a>
            </div>
            <div class="cta-features">
                <div class="cta-feature">
                    <i class="fas fa-calendar-check"></i>
                    <span>Flexible Booking</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-shield-alt"></i>
                    <span>Secure Payment</span>
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