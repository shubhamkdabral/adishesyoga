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
        <!-- First Teacher -->
        <div
            style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 5rem;">
            <div>
                <span
                    style="display: inline-block; background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 600; margin-bottom: 1rem;">
                    Lead Guru
                </span>
                <h3 style="font-size: 2rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">Swami
                    Anand Prakash</h3>
                <div
                    style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;">
                </div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    With over 30 years of experience in traditional Hatha and Raja yoga, Swami Anand Prakash is our
                    spiritual guide and lead teacher. After spending 15 years in the Himalayas studying under
                    renowned
                    masters, he brings profound wisdom and authentic teaching methods to Adishesh Yoga.
                </p>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    Swami ji specializes in meditation techniques, pranayama, and yoga philosophy. His gentle
                    approach and
                    deep understanding of yogic texts make complex spiritual concepts accessible to all
                    practitioners.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Meditation
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Pranayama
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Yoga Philosophy
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Hatha Yoga
                    </span>
                </div>
            </div>
            <div>
                <div style="position: relative;">
                    <img src="/placeholder.svg?height=500&width=400" alt="Swami Anand Prakash"
                        style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
                    <div
                        style="position: absolute; bottom: 1rem; right: 1rem; background: white; padding: 0.75rem; border-radius: 10px; box-shadow: var(--shadow-light); display: flex; align-items: center; gap: 0.75rem;">
                        <span style="color: var(--primary-color); font-weight: 600;">30+ Years Experience</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Teacher -->
        <div
            style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 5rem;">
            <div>
                <div style="position: relative;">
                    <img src="/placeholder.svg?height=500&width=400" alt="Maya Sharma"
                        style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
                    <div
                        style="position: absolute; bottom: 1rem; right: 1rem; background: white; padding: 0.75rem; border-radius: 10px; box-shadow: var(--shadow-light); display: flex; align-items: center; gap: 0.75rem;">
                        <span style="color: var(--primary-color); font-weight: 600;">15+ Years Experience</span>
                    </div>
                </div>
            </div>
            <div>
                <span
                    style="display: inline-block; background: var(--secondary-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 600; margin-bottom: 1rem;">
                    Asana Specialist
                </span>
                <h3 style="font-size: 2rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">Maya
                    Sharma</h3>
                <div
                    style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;">
                </div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    Maya brings grace and precision to her teaching, with certifications in Iyengar and Vinyasa
                    yoga. A
                    former dancer, she emphasizes proper alignment and the flowing nature of movement in her
                    classes.
                </p>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    Her approach combines traditional asana practice with modern anatomical understanding, making
                    her
                    classes both challenging and accessible. Maya specializes in helping students with physical
                    limitations
                    find modifications that work for their bodies.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Iyengar Yoga
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Vinyasa Flow
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Alignment
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Anatomy
                    </span>
                </div>
            </div>
        </div>

        <!-- Third Teacher -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
            <div>
                <span
                    style="display: inline-block; background: var(--primary-light); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 600; margin-bottom: 1rem;">
                    Meditation Expert
                </span>
                <h3 style="font-size: 2rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">Dr. Arjun
                    Patel</h3>
                <div
                    style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;">
                </div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    Dr. Arjun combines his background in neuroscience with extensive training in mindfulness and
                    meditation
                    practices. His evidence-based approach helps students understand the scientific benefits of yoga
                    while
                    experiencing its spiritual dimensions.
                </p>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    He leads our meditation retreats and specialized workshops on stress reduction and mental
                    clarity. Dr.
                    Arjun's calm presence and clear instruction make meditation accessible even to beginners.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 1.5rem;">
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Mindfulness
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Vipassana
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Yoga Nidra
                    </span>
                    <span
                        style="background: white; color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.875rem; font-weight: 500; border: 1px solid var(--border-light);">
                        Stress Reduction
                    </span>
                </div>
            </div>
            <div>
                <div style="position: relative;">
                    <img src="/placeholder.svg?height=500&width=400" alt="Dr. Arjun Patel"
                        style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
                    <div
                        style="position: absolute; bottom: 1rem; right: 1rem; background: white; padding: 0.75rem; border-radius: 10px; box-shadow: var(--shadow-light); display: flex; align-items: center; gap: 0.75rem;">
                        <span style="color: var(--primary-color); font-weight: 600;">12+ Years Experience</span>
                    </div>
                </div>
            </div>
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