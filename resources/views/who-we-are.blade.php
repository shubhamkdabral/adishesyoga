@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide">
            <div class="carousel-content">
                <span class="hero-badge">Our Story</span>
                <h2>About Adishesh Yoga</h2>
                <p>Discover our journey, philosophy, and commitment to authentic yoga practice.</p>
            </div>
            <div class="overlay"></div>
            <img src="/placeholder.svg?height=700&width=1600" alt="About Adishesh Yoga">
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Journey</span>
            <h2>The Story of Adishesh Yoga</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div class="about-content">
            <div class="about-text">
                <p>Adishesh Yoga was founded in 2005 by Swami Anand Prakash after his 15-year spiritual journey in
                    the Himalayas. Having studied under renowned yoga masters and spending years in deep meditation,
                    Swami ji returned with a vision to create a sanctuary where the authentic teachings of yoga
                    could be shared with seekers from around the world.</p>
                <p>What began as a small ashram with just a handful of students has grown into a respected center
                    for yoga education, attracting practitioners from over 50 countries. Despite our growth, we have
                    remained true to our founding principles: authenticity, compassion, and the belief that yoga is
                    a path to self-transformation.</p>
                <p>The name "Adishesh" comes from Sanskrit, referring to the cosmic serpent of infinity and
                    timelessness. It represents our connection to the ancient lineage of yoga while embracing its
                    evolution in the modern world.</p>
                <p>Today, our center offers a range of programs from beginner classes to advanced teacher training,
                    all designed to honor the traditional roots of yoga while making its profound benefits
                    accessible to contemporary practitioners.</p>
            </div>
            <div class="about-image">
                <img src="/placeholder.svg?height=500&width=600" alt="Adishesh Yoga Center">
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
                <img src="/placeholder.svg?height=200&width=200" alt="Yoga Philosophy"
                    style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%; margin-bottom: 1.5rem;">
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">
                    Holistic Approach to Yoga</h3>
                <p style="color: var(--text-light); max-width: 800px; margin: 0 auto; line-height: 1.7;">
                    Our approach integrates all aspects of yoga: asana (physical postures), pranayama (breath
                    control), meditation, philosophy, and ethical living. We believe that true yoga practice extends
                    beyond the mat and into every aspect of life.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin: 0 auto 1.5rem;">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">Balance & Harmony</h4>
                    <p style="color: var(--text-light);">
                        We teach that balance is essential—between effort and surrender, strength and flexibility,
                        activity and rest. Through this balance, we find harmony within ourselves and with the world
                        around us.
                    </p>
                </div>
                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin: 0 auto 1.5rem;">
                        <i class="fas fa-hands"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">Respect for Tradition</h4>
                    <p style="color: var(--text-light);">
                        While we embrace modern understanding of the body and mind, we honor the ancient wisdom of
                        yoga. Our teachings are rooted in classical texts like the Yoga Sutras, Bhagavad Gita, and
                        Hatha Yoga Pradipika.
                    </p>
                </div>
                <div style="text-align: center;">
                    <div
                        style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin: 0 auto 1.5rem;">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">Personal Growth</h4>
                    <p style="color: var(--text-light);">
                        We believe that yoga is a journey of self-discovery and continuous growth. Our role is to
                        provide guidance, support, and tools for practitioners to explore their own path and
                        potential.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
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
            <div
                style="background: white; padding: 2.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1.5rem;">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">Our
                    Mission</h3>
                <p style="color: var(--text-light); margin-bottom: 1rem; line-height: 1.7;">
                    To preserve and share the authentic teachings of yoga in a way that is accessible,
                    transformative, and relevant to modern life.
                </p>
                <p style="color: var(--text-light); line-height: 1.7;">
                    We are committed to creating a nurturing environment where practitioners of all levels can
                    deepen their practice, expand their awareness, and discover their innate potential for
                    well-being and inner peace.
                </p>
            </div>
            <div
                style="background: white; padding: 2.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1.5rem;">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">Our
                    Vision</h3>
                <p style="color: var(--text-light); margin-bottom: 1rem; line-height: 1.7;">
                    To be a beacon of authentic yoga wisdom that inspires positive transformation in individuals and
                    communities worldwide.
                </p>
                <p style="color: var(--text-light); line-height: 1.7;">
                    We envision a world where the principles of yoga—compassion, mindfulness, balance, and
                    interconnectedness—are integrated into daily life, contributing to greater harmony, health, and
                    happiness for all beings.
                </p>
            </div>
        </div>
    </div>
</section>

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
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); transition: all 0.3s ease;">
                <div
                    style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 1.5rem; margin-bottom: 1.5rem;">
                    <i class="fas fa-heart"></i>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">Authenticity</h4>
                <p style="color: var(--text-light);">
                    We honor the traditional roots of yoga while making its teachings relevant and accessible to
                    modern practitioners. Our approach is genuine, grounded in respect for the lineage and integrity
                    in our teaching.
                </p>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); transition: all 0.3s ease;">
                <div
                    style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 1.5rem; margin-bottom: 1.5rem;">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">Compassion</h4>
                <p style="color: var(--text-light);">
                    We approach each student with kindness, understanding, and respect for their unique journey. Our
                    teaching is non-judgmental and supportive, creating a safe space for exploration and growth.
                </p>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); transition: all 0.3s ease;">
                <div
                    style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 1.5rem; margin-bottom: 1.5rem;">
                    <i class="fas fa-book-open"></i>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">Wisdom</h4>
                <p style="color: var(--text-light);">
                    We are committed to continuous learning and sharing knowledge that empowers. Our teachings blend
                    ancient wisdom with contemporary understanding to provide meaningful insights for modern life.
                </p>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); transition: all 0.3s ease;">
                <div
                    style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 1.5rem; margin-bottom: 1.5rem;">
                    <i class="fas fa-globe-asia"></i>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 1rem;">Community</h4>
                <p style="color: var(--text-light);">
                    We foster a sense of belonging and connection among our students and staff. We believe in the
                    power of sangha (community) to support individual growth and collective well-being.
                </p>
            </div>
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

        <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); display: flex; flex-direction: column; align-items: center; text-align: center;">
                <div
                    style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2.5rem; margin-bottom: 1.5rem;">
                    <span style="font-weight: bold;">15K+</span>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Students Trained</h4>
                <p style="color: var(--text-light);">
                    Over 15,000 students from more than 50 countries have practiced with us since our founding.
                </p>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); display: flex; flex-direction: column; align-items: center; text-align: center;">
                <div
                    style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2.5rem; margin-bottom: 1.5rem;">
                    <span style="font-weight: bold;">1000+</span>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Certified Teachers</h4>
                <p style="color: var(--text-light);">
                    More than 1,000 yoga teachers have graduated from our internationally recognized teacher
                    training programs.
                </p>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); display: flex; flex-direction: column; align-items: center; text-align: center;">
                <div
                    style="width: 100px; height: 100px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2.5rem; margin-bottom: 1.5rem;">
                    <span style="font-weight: bold;">18</span>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Years of Excellence</h4>
                <p style="color: var(--text-light);">
                    Nearly two decades of providing authentic yoga education and transformative experiences.
                </p>
            </div>
        </div>

        <div
            style="max-width: 1000px; margin: 0 auto; background: white; padding: 2.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
            <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; text-align: center;">Recognition & Certifications
            </h3>
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; text-align: center;">
                <div>
                    <img src="/placeholder.svg?height=100&width=100" alt="Yoga Alliance Certification"
                        style="width: 100px; height: 100px; object-fit: contain; margin: 0 auto 1rem;">
                    <h4 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Yoga Alliance Certified</h4>
                    <p style="color: var(--text-light); font-size: 0.875rem;">
                        Registered Yoga School (RYS 200, 300, 500)
                    </p>
                </div>
                <div>
                    <img src="/placeholder.svg?height=100&width=100" alt="International Yoga Federation"
                        style="width: 100px; height: 100px; object-fit: contain; margin: 0 auto 1rem;">
                    <h4 style="font-size: 1.125rem; margin-bottom: 0.5rem;">International Yoga Federation</h4>
                    <p style="color: var(--text-light); font-size: 0.875rem;">
                        Recognized Member School
                    </p>
                </div>
                <div>
                    <img src="/placeholder.svg?height=100&width=100" alt="Ministry of AYUSH"
                        style="width: 100px; height: 100px; object-fit: contain; margin: 0 auto 1rem;">
                    <h4 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Ministry of AYUSH</h4>
                    <p style="color: var(--text-light); font-size: 0.875rem;">
                        Recognized by Government of India
                    </p>
                </div>
                <div>
                    <img src="/placeholder.svg?height=100&width=100" alt="Excellence Award"
                        style="width: 100px; height: 100px; object-fit: contain; margin: 0 auto 1rem;">
                    <h4 style="font-size: 1.125rem; margin-bottom: 0.5rem;">Excellence in Yoga Education</h4>
                    <p style="color: var(--text-light); font-size: 0.875rem;">
                        International Wellness Award 2019
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section style="padding: 4rem 0; background-color: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">What People Say</span>
            <h2>Student Testimonials</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Hear from those who have experienced the transformative power of Adishesh Yoga.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); position: relative;">
                <div
                    style="font-size: 3rem; color: var(--primary-color); opacity: 0.2; position: absolute; top: 1rem; left: 1rem;">
                    <i class="fas fa-quote-left"></i>
                </div>
                <div style="position: relative; z-index: 1;">
                    <p
                        style="color: var(--text-light); margin-bottom: 1.5rem; font-style: italic; line-height: 1.7;">
                        "My month at Adishesh Yoga was truly life-changing. The teachers were incredibly
                        knowledgeable and supportive, and the peaceful environment was perfect for deepening my
                        practice. I left with not only improved asana practice but a profound shift in my
                        perspective on life."
                    </p>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <img src="/placeholder.svg?height=60&width=60" alt="Sarah J."
                            style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h5 style="font-weight: 600; margin-bottom: 0.25rem;">Sarah J.</h5>
                            <p style="color: var(--text-light); font-size: 0.875rem;">New York, USA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); position: relative;">
                <div
                    style="font-size: 3rem; color: var(--primary-color); opacity: 0.2; position: absolute; top: 1rem; left: 1rem;">
                    <i class="fas fa-quote-left"></i>
                </div>
                <div style="position: relative; z-index: 1;">
                    <p
                        style="color: var(--text-light); margin-bottom: 1.5rem; font-style: italic; line-height: 1.7;">
                        "As a yoga teacher myself, I was looking for a place to deepen my own practice and
                        knowledge. Adishesh exceeded all my expectations. The balance of philosophy, asana, and
                        meditation was perfect, and the teachers shared their wisdom with such authenticity and
                        grace."
                    </p>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <img src="/placeholder.svg?height=60&width=60" alt="Marco T."
                            style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h5 style="font-weight: 600; margin-bottom: 0.25rem;">Marco T.</h5>
                            <p style="color: var(--text-light); font-size: 0.875rem;">Milan, Italy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); position: relative;">
                <div
                    style="font-size: 3rem; color: var(--primary-color); opacity: 0.2; position: absolute; top: 1rem; left: 1rem;">
                    <i class="fas fa-quote-left"></i>
                </div>
                <div style="position: relative; z-index: 1;">
                    <p
                        style="color: var(--text-light); margin-bottom: 1.5rem; font-style: italic; line-height: 1.7;">
                        "I came to Adishesh with chronic back pain and stress. After just two weeks in their
                        therapeutic yoga program, I experienced significant relief and learned tools to manage my
                        condition. The holistic approach addressing body, mind, and spirit was exactly what I
                        needed."
                    </p>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <img src="/placeholder.svg?height=60&width=60" alt="Aisha K."
                            style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                        <div>
                            <h5 style="font-weight: 600; margin-bottom: 0.25rem;">Aisha K.</h5>
                            <p style="color: var(--text-light); font-size: 0.875rem;">Dubai, UAE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Meet Our Team</span>
            <h2>The People Behind Adishesh Yoga</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Our dedicated team works together to create transformative experiences for our students.</p>
        </div>

        <div style="text-align: center; margin-bottom: 3rem;">
            <a href="our-teachers.html" class="btn btn-primary">
                <span>View All Our Teachers</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
            <div
                style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); text-align: center;">
                <img src="/placeholder.svg?height=200&width=200" alt="Swami Anand Prakash"
                    style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.5rem;">
                <h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Swami Anand Prakash</h4>
                <p style="color: var(--primary-color); font-weight: 500; margin-bottom: 1rem;">Founder & Spiritual
                    Director</p>
                <p style="color: var(--text-light); font-size: 0.875rem; margin-bottom: 1.5rem;">
                    With over 30 years of experience in yoga and meditation, Swami ji leads our spiritual direction
                    and advanced teacher training programs.
                </p>
                <div style="display: flex; justify-content: center; gap: 1rem;">
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div
                style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); text-align: center;">
                <img src="/placeholder.svg?height=200&width=200" alt="Maya Sharma"
                    style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.5rem;">
                <h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Maya Sharma</h4>
                <p style="color: var(--primary-color); font-weight: 500; margin-bottom: 1rem;">Lead Yoga Instructor
                </p>
                <p style="color: var(--text-light); font-size: 0.875rem; margin-bottom: 1.5rem;">
                    A former dancer with certifications in Iyengar and Vinyasa yoga, Maya brings precision and grace
                    to her teaching of asana practice.
                </p>
                <div style="display: flex; justify-content: center; gap: 1rem;">
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div
                style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); text-align: center;">
                <img src="/placeholder.svg?height=200&width=200" alt="Dr. Arjun Patel"
                    style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.5rem;">
                <h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Dr. Arjun Patel</h4>
                <p style="color: var(--primary-color); font-weight: 500; margin-bottom: 1rem;">Meditation Expert</p>
                <p style="color: var(--text-light); font-size: 0.875rem; margin-bottom: 1.5rem;">
                    With a background in neuroscience and extensive training in mindfulness, Dr. Arjun leads our
                    meditation programs and stress reduction workshops.
                </p>
                <div style="display: flex; justify-content: center; gap: 1rem;">
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div
                style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); text-align: center;">
                <img src="/placeholder.svg?height=200&width=200" alt="Priya Mehta"
                    style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.5rem;">
                <h4 style="font-size: 1.25rem; margin-bottom: 0.5rem;">Priya Mehta</h4>
                <p style="color: var(--primary-color); font-weight: 500; margin-bottom: 1rem;">Operations Director
                </p>
                <p style="color: var(--text-light); font-size: 0.875rem; margin-bottom: 1.5rem;">
                    With a background in hospitality management and a passion for yoga, Priya ensures our retreat
                    center runs smoothly and guests have an exceptional experience.
                </p>
                <div style="display: flex; justify-content: center; gap: 1rem;">
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-instagram"></i></a>
                    <a href="#" style="color: var(--primary-color); font-size: 1.25rem;"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
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