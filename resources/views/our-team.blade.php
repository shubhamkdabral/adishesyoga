@extends('layouts.app')

@section('content')

<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide active">
            <div class="carousel-content">
                <span class="hero-badge">Our Spiritual Guides</span>
                <h2>Meet Our Experienced Teachers</h2>
                <p>Learn from our certified yoga instructors who bring years of experience and deep spiritual
                    knowledge to
                    guide your journey.</p>
            </div>
            <div class="overlay"></div>
            <img src="/placeholder.svg?height=700&width=1600" alt="Yoga Teachers">
        </div>
    </div>
</section>

<!-- Ideology Section -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Ideology</span>
            <h2>The Philosophy That Guides Us</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div style="max-width: 800px; margin: 0 auto;">
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    At Adishesh Yoga, we believe that yoga is more than just physical exercise—it's a transformative
                    practice that harmonizes mind, body, and spirit. Our teaching philosophy is rooted in ancient
                    yogic
                    traditions while embracing modern approaches to wellness and mindfulness.
                </p>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    Our gurus and teachers follow the principle of "Sarve Bhavantu Sukhinah" (May all beings be
                    happy). We
                    aim to create a nurturing environment where practitioners of all levels can explore the depths
                    of yoga
                    and meditation, finding their own path to inner peace and well-being.
                </p>
                <p style="font-size: 1.125rem; color: var(--text-light); line-height: 1.7;">
                    Each of our teachers brings their unique expertise and spiritual journey to their classes, while
                    maintaining the core values of authenticity, compassion, and continuous growth that define
                    Adishesh
                    Yoga.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Teachers Section -->
<section class="our-teams">
    <div class="section-mandala teams-mandala-top-right"></div>
    <div class="container">
        @foreach ($ourteacher as $index => $member)
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 5rem;">
            @if ($index % 2 === 0)
            {{-- Text Left, Image Right --}}
            <div>
                <span style="display: inline-block; background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 600; margin-bottom: 1rem;">
                    {{ $member->designation }}
                </span>
                <h3 style="font-size: 2rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">{{ $member->name }}</h3>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    {!! $member->description !!}
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        {{ $member->title_1 }}
                    </span>
                    <span style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        {{ $member->title_2 }}
                    </span>
                    <span style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        {{ $member->title_3 }}
                    </span>
                </div>
            </div>
            <div>
                <div style="position: relative;">
                    <img src="{{ $member->media->first()->getUrl() }}" alt="{{ $member->name }}"
                        style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
                    <div style="position: absolute; bottom: 1rem; right: 1rem; background: white; padding: 0.75rem; border-radius: 10px; box-shadow: var(--shadow-light); display: flex; align-items: center; gap: 0.75rem;">
                        <span style="color: var(--primary-color); font-weight: 600;">{{ $member->experience }}+ Years Experience</span>
                    </div>
                </div>
            </div>
            @else
            {{-- Image Left, Text Right --}}
            <div>
                <div style="position: relative;">
                    <img src="{{ $member->media->first()->getUrl()  }}" alt="{{ $member->name }}"
                        style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
                    <div style="position: absolute; bottom: 1rem; right: 1rem; background: white; padding: 0.75rem; border-radius: 10px; box-shadow: var(--shadow-light); display: flex; align-items: center; gap: 0.75rem;">
                        <span style="color: var(--primary-color); font-weight: 600;">{{ $member->experience }}+ Years Experience</span>
                    </div>
                </div>
            </div>
            <div>
                <span style="display: inline-block; background: var(--primary-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 600; margin-bottom: 1rem;">
                    {{ $member->designation }}
                </span>
                <h3 style="font-size: 2rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">{{ $member->name }}</h3>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    {!! $member->description !!}
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        {{ $member->title_1 }}
                    </span>
                    <span style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        {{ $member->title_2 }}
                    </span>
                    <span style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        {{ $member->title_3 }}
                    </span>
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </div>
</section>

<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; max-width: 1200px; margin: 0 auto;">
    @foreach ($ourteam as $member)
    <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: all 0.3s ease; position: relative;"
        onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.15)'"
        onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(0,0,0,0.1)'">

        <!-- Image Container -->
        <div style="position: relative; overflow: hidden;">
            <img src="{{ optional($member->media->first())->getUrl() }}" alt="{{ $member->name }}"
                style="width: 100%; height: 300px; object-fit: cover; transition: transform 0.3s ease;"
                onmouseover="this.style.transform='scale(1.05)'"
                onmouseout="this.style.transform='scale(1)'">

            <!-- Experience Badge -->
            <div style="position: absolute; top: 1rem; right: 1rem; background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); padding: 0.5rem 1rem; border-radius: 25px; font-weight: 600; color: var(--primary-color); font-size: 0.875rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                {{ $member->experience }}+ Years
            </div>

            <!-- Designation Badge -->
            <div style="position: absolute; bottom: 1rem; left: 1rem; background: var(--primary-color); color: white; padding: 0.5rem 1rem; border-radius: 25px; font-size: 0.875rem; font-weight: 600;">
                {{ $member->designation }}
            </div>
        </div>

        <!-- Card Content -->
        <div style="padding: 1.5rem;">
            <!-- Name -->
            <h3 style="font-size: 1.5rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif; color: var(--text-dark); text-align: center;">
                {{ $member->name }}
            </h3>

            <!-- Decorative Line -->
            <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin: 0 auto 1rem; border-radius: 2px;"></div>

            <!-- Description -->
            <p style="color: var(--text-light); line-height: 1.6; margin-bottom: 1.5rem; font-size: 0.95rem; text-align: center;">
                {!! Str::limit(strip_tags($member->description), 120) !!}
            </p>

            <!-- Specializations -->
            <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center; margin-bottom: 1rem;">
                @php
                $specializations = array_slice(explode(',', $member->specializations), 0, 3);
                @endphp
                @foreach ($specializations as $skill)
                <span style="background: linear-gradient(135deg, var(--primary-light), var(--primary-color)); color: white; padding: 0.4rem 0.8rem; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">
                    {{ trim($skill) }}
                </span>
                @endforeach
                @if(count(explode(',', $member->specializations)) > 3)
                <span style="background: var(--text-light); color: white; padding: 0.4rem 0.8rem; border-radius: 15px; font-size: 0.8rem; font-weight: 500;">
                    +{{ count(explode(',', $member->specializations)) - 3 }} more
                </span>
                @endif
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
            <span class="section-badge">Join Our Classes</span>
            <h2>Begin Your Journey With Our Expert Teachers</h2>
            <p>Transform your practice under the guidance of our experienced teachers. Whether you're a beginner or
                advanced practitioner, we have classes to suit your needs.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">
                    <span>View Class Schedule</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#" class="btn btn-outline-light">
                    <span>Book Private Session</span>
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection