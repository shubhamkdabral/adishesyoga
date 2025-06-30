@extends('layouts.app')
@section('content')

<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide active">
            <div class="carousel-content">
                <span class="hero-badge">Our Founders</span>
                <h2>Meet Our Founders</h2>
                <p>Journery of our Founders.</p>
            </div>
            <div class="overlay"></div>
            <img src="/placeholder.svg?height=700&width=1600" alt="Yoga Teachers">
        </div>
    </div>
</section>

<!-- Founders Section -->
<section class="about-us">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="container">
        <div class="section-header">
            <h2>Meet the Founders of Adishesh Yoga</h2>
            <div class="divider"></div>
            <p>At Adishesh Yoga Retreat, we believe that the strength of our community lies in the dedication, expertise, and compassion. Together, we are committed to guiding you on a transformative journey of self-discovery, healing, and holistic well-being.</p>
        </div>

        @foreach($founders as $index => $founder)
        <div class="about-content" @if(!$loop->last) style="margin-bottom: 5rem;" @endif>
            @if($index % 2 == 0)
            <!-- Image on left for even index -->
            <div class="about-image">
                @if($founder->media->isNotEmpty())
                <img src="{{ $founder->media->first()->getUrl() }}" alt="{{ $founder->name }}">
                @else
                <img src="/placeholder.svg?height=400&width=500" alt="{{ $founder->name }}">
                @endif
                <div class="about-badge">
                    <i class="fas fa-om"></i>
                    <span>{{ $founder->designation }}</span>
                </div>
            </div>
            <div class="about-text">
                <h3>{{ $founder->name }} – {{ $founder->designation }}</h3>
                {!! $founder->description !!}

                @if($founder->quote)
                <div style="background: var(--background-light); padding: 1.5rem; border-radius: 10px; margin-top: 2rem; border-left: 4px solid var(--primary-color);">
                    <p style="font-style: italic; margin: 0; color: var(--primary-color); font-weight: 600;">
                        "{{ $founder->quote }}" – {{ $founder->name }}
                    </p>
                </div>
                @endif
            </div>
            @else
            <!-- Image on right for odd index -->
            <div class="about-text">
                <h3>{{ $founder->name }} – {{ $founder->designation }}</h3>
                {!! $founder->description !!}

                @if($founder->quote)
                <div style="background: var(--background-light); padding: 1.5rem; border-radius: 10px; margin-top: 2rem; border-left: 4px solid var(--primary-color);">
                    <p style="font-style: italic; margin: 0; color: var(--primary-color); font-weight: 600;">
                        "{{ $founder->quote }}" – {{ $founder->name }}
                    </p>
                </div>
                @endif
            </div>
            <div class="about-image">
                @if($founder->media->isNotEmpty())
                <img src="{{ $founder->media->first()->getUrl() }}" alt="{{ $founder->name }}">
                @else
                <img src="/placeholder.svg?height=400&width=500" alt="{{ $founder->name }}">
                @endif
                <div class="about-badge">
                    <i class="fas fa-calendar-alt"></i>
                    <span>{{ $founder->designation }}</span>
                </div>
            </div>
            @endif
        </div>
        @endforeach
    </div>
</section>
@endsection