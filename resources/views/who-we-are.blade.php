@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide">
            <div class="carousel-content">
                <span class="hero-badge">{{ $about->banner_title ?? 'Our Story' }}</span>
                <h2>{{ $about->banner_heading ?? 'About Adishesh Yoga' }}</h2>
                <p>{!! $about->banner_short_description !!}</p>
            </div>
            <div class="overlay"></div>
            <img
                src="{{ $about->getUploadedBannerMedia()?->getUrl() ?? '/placeholder.svg?height=700&width=1600' }}"
                alt="{{ $about->banner_heading ?? 'Adishesh Yoga Banner' }}">
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">{{ $about->banner_title ?? 'Our Journey' }}</span>
            <h2>{{ $about->title ?? 'The Story of Adishesh Yoga' }}</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div class="about-content">
            <div class="about-text">
                {!! $about->description !!}
            </div>
            <div class="about-image">
                <img
                    src="{{ $about->getUploadedMedia()?->getUrl() ?? '/placeholder.svg?height=500&width=600' }}"
                    alt="{{ $about->title ?? 'Adishesh Yoga Center' }}">
            </div>
        </div>
    </div>
</section>

<!-- Our Philosophy -->
<section style="padding: 4rem 0; background-color: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Beliefs</span>
            <h2>Our Philosophy</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>At Adishesh Yoga, we believe that yoga is more than just physical exercise—it's a transformative
                practice that harmonizes mind, body, and spirit.</p>
        </div>

        <div
            style="max-width: 1000px; margin: 0 auto; background: white; padding: 3rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">
                    Holistic Approach to Yoga</h3>
                <p style="color: var(--text-light); max-width: 800px; margin: 0 auto; line-height: 1.7;">
                    Our approach integrates all aspects of yoga: asana (physical postures), pranayama (breath
                    control), meditation, philosophy, and ethical living. We believe that true yoga practice extends
                    beyond the mat and into every aspect of life.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                @foreach ($ourPhilosophy as $item)
                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin: 0 auto 1.5rem;">
                        <i class="{{ $item->icon ?? 'fas fa-seedling' }}"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">{{ $item->title }}</h4>
                    <p style="color: var(--text-light);">{!! $item->description !!}</p>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<!-- Mission & Vision -->
@php
$mv = $missionVision->first(); // assuming only one row exists
@endphp

@if ($mv)
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Purpose</span>
            <h2>Mission & Vision</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem; margin-bottom: 4rem;">

            {{-- Mission --}}
            <div
                style="background: white; padding: 2.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1.5rem;">
                    <i class="{{ $mv->mission_icon ?? 'fas fa-bullseye' }}"></i>
                </div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">
                    {{ $mv->mission_title }}
                </h3>
                <p style="color: var(--text-light); line-height: 1.7;">
                    {!! $mv->mission_description !!}
                </p>
            </div>

            {{-- Vision --}}
            <div
                style="background: white; padding: 2.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1.5rem;">
                    <i class="{{ $mv->vision_icon ?? 'fas fa-eye' }}"></i>
                </div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">
                    {{ $mv->vision_title }}
                </h3>
                <p style="color: var(--text-light); line-height: 1.7;">
                    {!! $mv->vision_description !!}
                </p>
            </div>

        </div>
    </div>
</section>
@endif


<!-- Our Values -->
<section style="padding: 4rem 0; background-color: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">What We Stand For</span>
            <h2>Our Core Values</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            @foreach ($corevalues as $value)
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); transition: all 0.3s ease;">
                <div
                    style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 1.5rem; margin-bottom: 1.5rem;">
                    <i class="{{ $value->icon ?? 'fas fa-star' }}"></i>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">{{ $value->title }}</h4>
                <p style="color: var(--text-light);">{!! $value->description !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Achievements -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Impact</span>
            <h2>Achievements & Recognition</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        {{-- Achievements --}}
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
            @foreach ($achievements as $item)
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); display: flex; flex-direction: column; align-items: center; text-align: center;">
                <div
                    style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2.5rem; margin-bottom: 1.5rem;">
                    <span style="font-weight: bold;">{{ $item->count }}</span>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">{{ $item->title }}</h4>
                <p style="color: var(--text-light);">
                    {!! $item->description !!}
                </p>
            </div>
            @endforeach
        </div>

        {{-- Recognitions --}}
        <div
            style="max-width: 1000px; margin: 0 auto; background: white; padding: 2.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
            <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; text-align: center;">Recognition & Certifications</h3>
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; text-align: center;">
                @foreach ($recognitions as $recognition)
                <div>
                    <img src="{{ $recognition->getFirstMediaUrl('recognition') ?: '/placeholder.svg?height=100&width=100' }}"
                        alt="{{ $recognition->title }}"
                        style="width: 100px; height: 100px; object-fit: contain; margin: 0 auto 1rem;">
                    <h4 style="font-size: 1.125rem; margin-bottom: 0.5rem;">{{ $recognition->title }}</h4>
                    <p style="color: var(--text-light); font-size: 0.875rem;">
                        {!! $recognition->description !!}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Join Our Community</span>
            <h2>Begin Your Yoga Journey With Us</h2>
            <p>Experience the authentic teachings of yoga in a supportive and nurturing environment. Whether you're
                a beginner or an experienced practitioner, we have programs to support your growth.</p>
            <div class="cta-buttons">
                <a href="retreat-program.html" class="btn btn-primary">
                    <span>Explore Our Programs</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="contact-us.html" class="btn btn-outline-light">
                    <span>Contact Us</span>
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection