@extends('layouts.app')

@section('content')

<!-- Header with Photo -->
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

<!-- Retreat Introduction -->
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

<!-- What Will You Learn Section -->
<section class="what-you-learn" style="padding: 5rem 0; background: var(--background-white);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Transform Your Practice</span>
            <h2>What Will You Learn?</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>During this retreat, you'll explore the true essence of yoga—not just as a physical practice, but as a way of life. Through a blend of asana (postures), pranayama (breathwork), and meditation, you'll deepen your connection to your body, quiet the mind, and awaken inner awareness.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            <div class="learning-item">
                <div class="learning-icon">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <h3>Build Strength & Flexibility</h3>
                <p>Develop a stronger, more supple body through daily yoga sessions tailored to all levels.</p>
            </div>
            <div class="learning-item">
                <div class="learning-icon">
                    <i class="fas fa-wind"></i>
                </div>
                <h3>Master Breathing Techniques</h3>
                <p>Learn powerful pranayama practices to calm the nervous system, boost energy, and center your focus.</p>
            </div>
            <div class="learning-item">
                <div class="learning-icon">
                    <i class="fas fa-peace"></i>
                </div>
                <h3>Discover Stillness</h3>
                <p>Explore meditation techniques that reduce stress and help you find lasting inner peace.</p>
            </div>
            <div class="learning-item">
                <div class="learning-icon">
                    <i class="fas fa-scroll"></i>
                </div>
                <h3>Understand the Philosophy</h3>
                <p>Gain insights into the ancient wisdom of yoga, including the principles behind its spiritual and physical teachings.</p>
            </div>
            <div class="learning-item">
                <div class="learning-icon">
                    <i class="fas fa-puzzle-piece"></i>
                </div>
                <h3>Integrate Mind & Body</h3>
                <p>Leave with a toolkit of practices you can bring into your daily life, long after the retreat ends.</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem; padding: 1.5rem; background: var(--background-light); border-radius: 15px;">
            <p style="color: var(--text-light); font-style: italic; margin: 0;">
                Whether you're a beginner or have years of experience, this retreat offers something meaningful for every step of your journey.
            </p>
        </div>
    </div>
</section>

<!-- 9-Day Schedule Accordion -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Daily Journey</span>
            <h2>9-Day Retreat Schedule</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>This is a sample itinerary. Times and activities may shift slightly due to weather, trail conditions, or other local factors.</p>
        </div>

        <div class="schedule-accordion" style="max-width: 900px; margin: 0 auto;">
            <!-- Day 1 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 1</span>
                        <h3>Arrival & Grounding</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>Welcome & Check-in:</strong> Settle into our tranquil retreat space at your leisure.</p>
                        <p><strong>Evening:</strong> Enjoy nourishing meals, explore the serene surroundings, connect with fellow participants, or simply relax and ground yourself in peace.</p>
                    </div>
                </div>
            </div>

            <!-- Day 2 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 2</span>
                        <h3>Initiation & Orientation</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>08:30 am</strong> - Breakfast</p>
                        <p><strong>10:00 am</strong> - Fire Ceremony & Orientation: Participate in a traditional fire ceremony to set intentions</p>
                        <p><strong>01:00 pm</strong> - Lunch</p>
                        <p><strong>Afternoon</strong> - Ayurvedic Massage: Experience a rejuvenating massage</p>
                        <p><strong>Evening</strong> - Ganga Aarti: Witness the mesmerizing river ceremony</p>
                        <p><strong>08:00 pm</strong> - Dinner</p>
                    </div>
                </div>
            </div>

            <!-- Day 3 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 3</span>
                        <h3>Deepening Practice</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>06:30 am</strong> - Cleansing Practice</p>
                        <p><strong>07:00 am</strong> - Asana & Pranayama</p>
                        <p><strong>08:30 am</strong> - Breakfast</p>
                        <p><strong>11:00 am</strong> - Philosophy Class</p>
                        <p><strong>01:00 pm</strong> - Lunch</p>
                        <p><strong>Afternoon</strong> - Massage session</p>
                        <p><strong>06:30 pm</strong> - Meditation Session</p>
                        <p><strong>08:00 pm</strong> - Dinner</p>
                    </div>
                </div>
            </div>

            <!-- Day 4 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 4</span>
                        <h3>Himalayan Expedition Begins</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>06:00 am</strong> - Departure to the Himalayas</p>
                        <p><strong>Midday</strong> - Visit Devprayag Sangam: Sacred confluence of rivers</p>
                        <p><strong>Afternoon</strong> - Dhari Devi Temple Darshan</p>
                        <p><strong>Evening</strong> - Hotel Check-in & exploration</p>
                        <p><strong>08:00 pm</strong> - Dinner</p>
                    </div>
                </div>
            </div>

            <!-- Day 5 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 5</span>
                        <h3>Trek to Tungnath & Chandrashila</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>06:00 am</strong> - Cleansing Practice</p>
                        <p><strong>06:30 am</strong> - Yoga Session</p>
                        <p><strong>08:00 am</strong> - Breakfast</p>
                        <p><strong>Trek:</strong> 4 km to Tungnath Temple + 1-2 km to Chandrashila Peak</p>
                        <p><strong>Elevation:</strong> ~600m + ~200m</p>
                        <p><strong>Evening:</strong> Dinner, Night Session or Bonfire</p>
                    </div>
                </div>
            </div>

            <!-- Day 6 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 6</span>
                        <h3>Devriya Tal & Saari Village</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>06:00 am</strong> - Cleansing Practice</p>
                        <p><strong>06:30 am</strong> - Yoga Session</p>
                        <p><strong>08:00 am</strong> - Breakfast</p>
                        <p><strong>Trek:</strong> 3 km to Devriya Tal at 2438m elevation</p>
                        <p><strong>Lunch:</strong> At Saari Village</p>
                        <p><strong>Evening:</strong> Village walk, Dinner, Bonfire</p>
                    </div>
                </div>
            </div>

            <!-- Day 7 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 7</span>
                        <h3>Kartik Swami Temple</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>06:00 am</strong> - Cleansing Practice</p>
                        <p><strong>06:30 am</strong> - Yoga Session</p>
                        <p><strong>08:00 am</strong> - Breakfast</p>
                        <p><strong>Trek:</strong> 3 km to Kartik Swami Temple at 3050m</p>
                        <p><strong>Lunch:</strong> Traditional local meal</p>
                        <p><strong>Evening:</strong> Dinner, Night Session</p>
                    </div>
                </div>
            </div>

            <!-- Day 8 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 8</span>
                        <h3>Return to Rishikesh</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>09:00 am</strong> - Breakfast</p>
                        <p><strong>Departure</strong> to Rishikesh</p>
                        <p><strong>Lunch</strong> En Route</p>
                        <p><strong>08:00 pm</strong> - Dinner at the Ashram</p>
                    </div>
                </div>
            </div>

            <!-- Day 9 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 9</span>
                        <h3>Closure & Farewell</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <p><strong>07:00 am</strong> - Final Yoga Session</p>
                        <p><strong>08:30 am</strong> - Breakfast</p>
                        <p><strong>10:00 am</strong> - Closing Ceremony: Reflect on your journey</p>
                        <div style="margin-top: 1rem; padding: 1rem; background: var(--background-light); border-radius: 8px;">
                            <small><em>Note: The schedule for the last day may be adjusted to allow relaxation time. Changes will be discussed on Day 8.</em></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Retreat Features - Simple List Format -->
<section class="retreat-features-simple" style="padding: 5rem 0; background: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Retreat Features</span>
            <h2>What Makes This Retreat Special</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto;">
            <div class="feature-list">
                <div class="feature-list-item">
                    <i class="fas fa-om"></i>
                    <div>
                        <h4>Holistic Yoga Practices</h4>
                        <p>Daily sessions including Hatha, Vinyasa, and Yin Yoga</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-brain"></i>
                    <div>
                        <h4>Meditation & Pranayama</h4>
                        <p>Techniques to enhance relaxation and mental clarity</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-book-open"></i>
                    <div>
                        <h4>Yogic Philosophy</h4>
                        <p>Insights from Patanjali's Yoga Sutras and classical texts</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-user-md"></i>
                    <div>
                        <h4>Anatomy & Alignment</h4>
                        <p>Understanding the human body to improve practice and prevent injuries</p>
                    </div>
                </div>
            </div>
            <div class="feature-list">
                <div class="feature-list-item">
                    <i class="fas fa-temple-hindu"></i>
                    <div>
                        <h4>Cultural Immersion</h4>
                        <p>Visits to sacred sites and participation in traditional ceremonies</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-mountain"></i>
                    <div>
                        <h4>Nature Exploration</h4>
                        <p>Hikes to picturesque locations like Devriya Tal and Chandrashila Peak</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-spa"></i>
                    <div>
                        <h4>Ayurvedic Treatments</h4>
                        <p>Massages and therapies to rejuvenate the body</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Essential Packing List (Regular Section) -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Be Prepared</span>
            <h2>Essential Packing List</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Embarking on a transformative journey through the Himalayas requires thoughtful preparation. Here's a comprehensive checklist to ensure you're well-equipped for the adventure.</p>
        </div>

        <!-- Documents -->
        <div style="margin-bottom: 3rem;">
            <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--primary-color);">Essential Documents</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Indian Nationals</h4>
                    <p style="color: var(--text-light); margin-bottom: 1rem; font-weight: 500;">Carry original documents:</p>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-id-card" style="color: var(--primary-color);"></i>
                            <span>Aadhaar Card</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-car" style="color: var(--primary-color);"></i>
                            <span>Driver's License</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-credit-card" style="color: var(--primary-color);"></i>
                            <span>PAN Card</span>
                        </li>
                    </ul>
                </div>
                <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">International Participants</h4>
                    <p style="color: var(--text-light); margin-bottom: 1rem; font-weight: 500;">Carry original documents:</p>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-passport" style="color: var(--primary-color);"></i>
                            <span>Valid Passport (6+ months validity)</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-stamp" style="color: var(--primary-color);"></i>
                            <span>Appropriate Visa for India</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-shield-alt" style="color: var(--primary-color);"></i>
                            <span>Travel Insurance (Recommended)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Seasonal Packing -->
        <div style="margin-bottom: 3rem;">
            <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--primary-color);">Seasonal Packing Guide</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <!-- Summer -->
                <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #f39c12, #e67e22); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                            <i class="fas fa-sun"></i>
                        </div>
                        <h4>Summer (March-June)</h4>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <i class="fas fa-tshirt" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Lightweight, moisture-wicking shirts</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <i class="fas fa-hat-cowboy" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Wide-brimmed hats & UV sunglasses</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <i class="fas fa-shoe-prints" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Breathable hiking shoes</span>
                        </li>
                    </ul>
                </div>

                <!-- Rainy Season -->
                <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #3498db, #2980b9); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                            <i class="fas fa-cloud-rain"></i>
                        </div>
                        <h4>Rainy Season (June-September)</h4>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <i class="fas fa-umbrella" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Waterproof jackets with sealed seams</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <i class="fas fa-tshirt" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Quick-dry synthetic clothing</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <i class="fas fa-boot" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Waterproof boots & gaiters</span>
                        </li>
                    </ul>
                </div>

                <!-- Winter -->
                <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                        <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #9b59b6, #8e44ad); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <h4>Winter (November-February)</h4>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <i class="fas fa-layer-group" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Layering system: base, mid, outer layers</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                            <i class="fas fa-mitten" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Insulated gloves, beanies, neck gaiters</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <i class="fas fa-shoe-prints" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span>Waterproof boots with crampons</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Essential Categories -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <!-- Personal Items -->
            <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                        <i class="fas fa-prescription-bottle-alt"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Personal Items</h3>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-pills" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Personal medications & first aid kit</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-soap" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Biodegradable toiletries</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-sun" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Sunscreen (SPF 30+) & lip balm</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-tint" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Reusable water bottle (2L capacity)</span>
                    </li>
                </ul>
            </div>

            <!-- Yoga Equipment -->
            <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                        <i class="fas fa-om"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Yoga Equipment</h3>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-square" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Personal yoga mat (optional - provided)</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-circle" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Meditation cushion (optional)</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-user-tie" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Shawl for meditation sessions</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-book" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Journal and pen for reflection</span>
                    </li>
                </ul>
            </div>

            <!-- Electronics & Miscellaneous -->
            <div style="background: white; padding: 1.5rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Electronics & Miscellaneous</h3>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-battery-full" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Power bank for charging devices</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-camera" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Camera for capturing memories (optional)</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-walking" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Trekking poles (optional but helpful)</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-backpack" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <span>Small daypack for excursions</span>
                    </li>
                </ul>
            </div>
        </div>

        <div style="margin-top: 2rem; padding: 1.5rem; background: var(--background-light); border-radius: 15px; border-left: 4px solid var(--primary-color);">
            <p style="color: var(--text-light); font-style: italic; margin: 0;">
                <strong>Note:</strong> All items listed are suggestions, not obligations. You know your comfort and needs best. Packing mindfully helps us travel light. Many of the mentioned items are also available at local markets in Rishikesh.
            </p>
        </div>
    </div>
</section>

<!-- Arrival & Departure Details -->
<section class="our-teams">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Travel Info</span>
            <h2>Arrival & Departure Details</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
            <!-- Arrival Information -->
            <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                        <i class="fas fa-plane-arrival"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Arrival Information</h3>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem; color: var(--primary-color);">Arrival Date:</h4>
                    <p style="color: var(--text-light);">All participants must arrive on Day 1 to ensure a full and uninterrupted experience.</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem; color: var(--primary-color);">Recommended Airport:</h4>
                    <p style="color: var(--text-light);">Jolly Grant Airport, Dehradun (DED) - faster and more affordable than road travel from Delhi.</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem; color: var(--primary-color);">Free Pickup:</h4>
                    <p style="color: var(--text-light);">Complimentary pickup available only from Jolly Grant Airport, Dehradun. Please share your flight details in advance.</p>
                </div>
                <div>
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem; color: var(--primary-color);">Alternative Pickup:</h4>
                    <p style="color: var(--text-light);">Private taxi from Delhi Airport to Rishikesh available for $75 USD.</p>
                </div>
            </div>

            <!-- Departure Information -->
            <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="width: 48px; height: 48px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white;">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: bold;">Departure Information</h3>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem; color: var(--primary-color);">Retreat Conclusion:</h4>
                    <p style="color: var(--text-light);">The retreat concludes on Day 9 by 12:00 PM with a farewell gathering.</p>
                </div>
                <div style="margin-bottom: 1rem;">
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem; color: var(--primary-color);">Extended Stay:</h4>
                    <p style="color: var(--text-light);">If you wish to extend your stay beyond the retreat, accommodations can be arranged at an additional cost.</p>
                </div>
                <div>
                    <h4 style="font-weight: bold; margin-bottom: 0.5rem; color: var(--primary-color);">Important Notes:</h4>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-info-circle" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span style="color: var(--text-light);">Schedule flexibility due to weather conditions</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-rupee-sign" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span style="color: var(--text-light);">Forest entry fees require Indian currency</span>
                        </li>
                        <li style="display: flex; align-items: flex-start; gap: 0.75rem;">
                            <i class="fas fa-utensils" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                            <span style="color: var(--text-light);">Extra food and personal expenses not included</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What You'll Get After Retreat - Different Layout -->
<section class="post-retreat-benefits" style="padding: 5rem 0; background: var(--background-white);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Lasting Transformation</span>
            <h2>What Will You Get After The Retreat?</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>The Adishesh Yoga retreat is not just a temporary getaway but a stepping stone towards a more mindful, balanced, and enriched life.</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
            <div class="benefit-item">
                <div class="benefit-number">01</div>
                <h3>Profound Self-Discovery</h3>
                <p>Immersing yourself in the serene environment allows for deep introspection, uncovering aspects of yourself previously unexplored, leading to enhanced self-awareness with personal & professional growth.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">02</div>
                <h3>Enhanced Yoga Practice</h3>
                <p>Deepen your practice beyond physical postures through daily sessions under experienced guidance, refining techniques and fostering mind-body connection.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">03</div>
                <h3>Mental Clarity & Emotional Balance</h3>
                <p>Step away from daily stressors and immerse in mindfulness practices, leading to reduced anxiety, improved mood, and renewed inner peace.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">04</div>
                <h3>Connection with Nature</h3>
                <p>Experience profound connection with the majestic Himalayas, enhancing your spiritual journey and fostering grounding and tranquility.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">05</div>
                <h3>Holistic Well-being</h3>
                <p>Nutritious meals, physical activity, and mindfulness practices support detoxification and rejuvenation, leaving you revitalized.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">06</div>
                <h3>Community & Support</h3>
                <p>Share this journey with like-minded individuals, creating lasting friendships and a supportive network that extends beyond the retreat.</p>
            </div>
        </div>
    </div>
</section>

<!-- Small Group Advantage - Compact Design -->
<section class="small-group-advantage" style="padding: 5rem 0; background: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Personalized Experience</span>
            <h2>Smaller Group For Your Advantage</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>At Adishesh Yoga, we intentionally limit our retreat groups to a maximum of 8–10 participants. This small-group approach ensures a personalized, immersive, and deeply supportive experience.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; max-width: 1200px; margin: 0 auto;">
            <div class="advantage-box">
                <div class="advantage-icon">1</div>
                <h4>Personalized Attention</h4>
                <p>Instructors can build deeper relationships with students, offering personalized guidance beyond simple physical adjustments.</p>
            </div>
            <div class="advantage-box">
                <div class="advantage-icon">2</div>
                <h4>Stronger Relationships</h4>
                <p>Smaller groups create a tight-knit community that encourages personal growth and lasting connections.</p>
            </div>
            <div class="advantage-box">
                <div class="advantage-icon">3</div>
                <h4>Accelerated Learning</h4>
                <p>More individualized feedback helps you deepen your practice and understanding of yoga.</p>
            </div>
            <div class="advantage-box">
                <div class="advantage-icon">4</div>
                <h4>Enhanced Comfort</h4>
                <p>Smaller setting reduces self-consciousness, allowing you to focus more on your practice and personal growth.</p>
            </div>
        </div>
    </div>
</section>

<!-- Accommodation & Food -->
<section class="our-stays">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Your Stay</span>
            <h2>Comfortable Accommodations</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>At Adishesh Yoga, your stay supports your transformation—peaceful, simple, and fully aligned with your inner journey.</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
            <div>
                <img src="/placeholder.svg?height=500&width=600" alt="Accommodation"
                    style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
            </div>
            <div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">Room Types & Amenities</h3>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    Private rooms and double-sharing rooms with modern comforts, both AC and non-AC options available with private or shared occupancy.
                </p>
                <div style="margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <i class="fas fa-bed" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Amenities:</h4>
                            <p style="color: var(--text-light);">Attached western-style bathrooms, free Wi-Fi, hot water showers, RO drinking water, and peaceful surroundings.</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <i class="fas fa-mountain" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Scenic Views:</h4>
                            <p style="color: var(--text-light);">Rooms designed to let in ample natural light and fresh air, with open sitting areas offering Himalayan views.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
            <div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">Sattvic Culinary Offerings</h3>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p style="font-size: 1.125rem; color: var(--text-light); margin-bottom: 1.5rem; line-height: 1.7;">
                    Three highly nutritious, healthy, and sattvic meals per day (Breakfast, Lunch, and Dinner), along with herbal tea and traditional Indian chai.
                </p>
                <div style="margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem;">
                        <i class="fas fa-seedling" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Fresh & Organic:</h4>
                            <p style="color: var(--text-light);">Ingredients sourced from local organic farms whenever possible, prepared with love to balance your body and uplift your energy.</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 0.75rem;">
                        <i class="fas fa-heart" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="font-weight: bold;">Dietary Accommodations:</h4>
                            <p style="color: var(--text-light);">We can accommodate most dietary restrictions with advance notice. Please inform us when booking.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="/placeholder.svg?height=500&width=600" alt="Sattvic Food"
                    style="width: 100%; height: 500px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
            </div>
        </div>
    </div>
</section>

<!-- Sacred Sites with Modals -->
<section class="our-teams">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Sacred Journey</span>
            <h2>Sacred Sites & Temples We'll Visit</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @forelse($nearBy as $site)
            <div class="site-card" onclick="openModal('site{{ $site->id }}Modal')">
                <div class="site-image">
                    @if($site->media->isNotEmpty())
                    <img src="{{ $site->media->first()->getUrl() }}" alt="{{ $site->name }}">
                    @else
                    <img src="/placeholder.svg?height=250&width=350" alt="{{ $site->name }}">
                    @endif
                    <div class="site-overlay">
                        <span>Learn More</span>
                    </div>
                </div>
                <div class="site-content">
                    <h3>{{ $site->name }}</h3>
                    <p>{{ Str::limit($site->description, 100) }}</p>
                    <div class="site-tags">
                        <span class="tag">{{ $site->distance }}</span>
                        @php
                        // Extract tags from description or create default ones
                        $tags = $site->tags ?? ['Sacred Site', 'Spiritual'];
                        @endphp
                        @if(is_array($tags))
                        @foreach(array_slice($tags, 0, 2) as $tag)
                        <span class="tag">{{ $tag }}</span>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <!-- Fallback content if no nearby sites exist -->
            <div class="site-card">
                <div class="site-image">
                    <img src="/placeholder.svg?height=250&width=350" alt="Sacred Sites">
                    <div class="site-overlay">
                        <span>Coming Soon</span>
                    </div>
                </div>
                <div class="site-content">
                    <h3>Sacred Sites Coming Soon</h3>
                    <p>We're preparing amazing sacred sites for your spiritual journey.</p>
                    <div class="site-tags">
                        <span class="tag">Sacred Journey</span>
                        <span class="tag">Spiritual</span>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Dynamic Modals for each site -->
<!-- Updated Blade Template Section -->
<section class="our-teams">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Sacred Journey</span>
            <h2>Sacred Sites & Temples We'll Visit</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @forelse($nearBy as $site)
            <div class="site-card" onclick="openModal('site{{ $site->id }}Modal')">
                <div class="site-image">
                    @if($site->media->isNotEmpty())
                    <img src="{{ $site->media->first()->getUrl() }}" alt="{{ $site->name }}">
                    @else
                    <img src="/placeholder.svg?height=250&width=350" alt="{{ $site->name }}">
                    @endif
                    <div class="site-overlay">
                        <span>Learn More</span>
                    </div>
                </div>
                <div class="site-content">
                    <h3>{{ $site->name }}</h3>
                    <p>{{ Str::limit(trim(strip_tags(html_entity_decode($site->description))), 160) }}</p>

                </div>
            </div>
            @empty
            <!-- Fallback content if no nearby sites exist -->
            <div class="site-card">
                <div class="site-image">
                    <img src="/placeholder.svg?height=250&width=350" alt="Sacred Sites">
                    <div class="site-overlay">
                        <span>Coming Soon</span>
                    </div>
                </div>
                <div class="site-content">
                    <h3>Sacred Sites Coming Soon</h3>
                    <p>We're preparing amazing sacred sites for your spiritual journey.</p>
                    <div class="site-tags">
                        <span class="tag">Sacred Journey</span>
                        <span class="tag">Spiritual</span>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Dynamic Modals for each site -->
@foreach($nearBy as $site)
<div id="site{{ $site->id }}Modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('site{{ $site->id }}Modal')">&times;</span>
        <div class="modal-body">
            @if($site->media->isNotEmpty())
            <img src="{{ $site->media->first()->getUrl() }}" alt="{{ $site->name }}" style="width: 100%; max-height: 300px; object-fit: cover; border-radius: 10px; margin-bottom: 1rem;">
            @endif
            <h2>{{ $site->name }}</h2>
            <p><strong>Distance:</strong> {{ $site->distance }}</p>
            <div style="margin-top: 1rem;">
                {!! $site->description !!}
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Other Retreats Section -->
<section class="other-retreats" style="padding: 5rem 0; background: var(--background-white);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Discover More</span>
            <h2>Other Retreats</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>At Adishesh Yoga, we curate transformational yoga retreats designed to guide you deeper into your personal practice and self-discovery. Each retreat is a sacred pause—a chance to reconnect with your inner stillness, nourish your body, and elevate your spirit.</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
            <div>
                <h3 style="font-size: 1.75rem; margin-bottom: 1.5rem; color: var(--primary-color);">What Makes Our Retreats Unique?</h3>
                <div style="margin-bottom: 2rem;">
                    <div style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1rem;">
                        <i class="fas fa-om" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;">Authentic Hatha Yoga Practice</h4>
                            <p style="color: var(--text-light); margin: 0;">Rooted in ancient yogic wisdom, led by experienced and compassionate teachers.</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1rem;">
                        <i class="fas fa-leaf" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;">Nourishing Ayurvedic Food</h4>
                            <p style="color: var(--text-light); margin: 0;">Fresh, sattvic meals prepared with love to balance your body and uplift your energy.</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: flex-start; gap: 1rem;">
                        <i class="fas fa-mountain" style="color: var(--primary-color); margin-top: 0.25rem;"></i>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;">Serene Natural Settings</h4>
                            <p style="color: var(--text-light); margin: 0;">Breathtaking locations designed to calm the mind and awaken the soul.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="/placeholder.svg?height=400&width=500" alt="Other Retreats" style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow-medium);">
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem; padding: 2rem; background: var(--background-light); border-radius: 15px;">
            <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Why Join?</h3>
            <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                <span style="color: var(--text-light);">• Deepen your connection to yourself</span>
                <span style="color: var(--text-light);">• Heal and rejuvenate through mindful living</span>
                <span style="color: var(--text-light);">• Disconnect from noise and distractions</span>
                <span style="color: var(--text-light);">• Reconnect with simplicity, nature, and purpose</span>
            </div>
            <p style="margin-top: 1rem; color: var(--text-light); font-style: italic;">Whether you're new to yoga or deep in your journey, our retreats offer a safe, supportive space to grow, unwind, and transform.</p>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Limited Spaces Available</span>
            <h2>Begin Your Transformative Journey</h2>
            <p>Join our upcoming 9-Day Himalayan Hiking Yoga Retreat and experience a profound shift in your practice and perspective. Spaces are limited to ensure a personalized experience.</p>
            <div class="cta-buttons">
                <a href="mailto:adisheshyoga@gmail.com" class="btn btn-primary">
                    <span>Book Your Retreat</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="http://www.adisheshyoga.com" class="btn btn-outline-light">
                    <span>Visit Our Website</span>
                    <i class="fas fa-external-link-alt"></i>
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

<!-- Sacred Sites Modals (Only modals for temples) -->
<div id="devprayagModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Devprayag Sangam</h2>
            <span class="close" onclick="closeModal('devprayagModal')">&times;</span>
        </div>
        <div class="modal-body">
            <h3>Where Rivers Merge & Spirits Awaken</h3>
            <p>At the heart of the Indian Himalayas, where the Alaknanda and Bhagirathi rivers converge, lies Devprayag—a revered confluence known as the spiritual birthplace of the River Ganga.</p>

            <h3>Spiritual Significance:</h3>
            <ul>
                <li>Sacred birthplace of the holy Ganga River</li>
                <li>Starting point of the Panch Prayag Yatra</li>
                <li>Merging of divine energies and purification</li>
                <li>Ancient Tondeshwar Mahadev Temple overlooks the confluence</li>
            </ul>

            <h3>What You'll Experience:</h3>
            <ul>
                <li>Witness the sacred confluence of two holy rivers</li>
                <li>Feel the profound spiritual energy of the meeting waters</li>
                <li>Visit the ancient temple dedicated to Lord Shiva</li>
                <li>Participate in traditional prayers and ceremonies</li>
            </ul>

            <h3>Cultural & Natural Beauty:</h3>
            <p>Located in Tehri Garhwal, Uttarakhand, Devprayag is surrounded by lush green hills and steep mountain valleys, offering both spiritual significance and breathtaking natural beauty.</p>
        </div>
    </div>
</div>

<div id="dhariDeviModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Dhari Devi Temple</h2>
            <span class="close" onclick="closeModal('dhariDeviModal')">&times;</span>
        </div>
        <div class="modal-body">
            <h3>Guardian Goddess of the Himalayas</h3>
            <p>Dhari Devi Temple is revered as the protector of the Char Dham pilgrimage, where the goddess is believed to change form throughout the day - from a young girl in the morning to an elderly lady by evening.</p>

            <h3>Divine Significance:</h3>
            <ul>
                <li>Manifestation of Goddess Kali in open-air sanctum</li>
                <li>Guardian deity of the Char Dham Yatra</li>
                <li>Believed to protect devotees from natural calamities</li>
                <li>Sacred site where the goddess changes forms daily</li>
            </ul>

            <h3>Unique Features:</h3>
            <ul>
                <li>Only temple where the deity is in open air</li>
                <li>Goddess statue changes appearance throughout the day</li>
                <li>Located on the banks of the Alaknanda River</li>
                <li>Surrounded by mystical hills and spiritual energy</li>
            </ul>

            <h3>Spiritual Experience:</h3>
            <p>Devotees believe that seeking blessings from Dhari Devi provides divine protection during their Himalayan journey and ensures safe passage through the sacred mountains.</p>
        </div>
    </div>
</div>

<div id="tungnathModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Tungnath Temple</h2>
            <span class="close" onclick="closeModal('tungnathModal')">&times;</span>
        </div>
        <div class="modal-body">
            <h3>Highest Shiva Temple in the World</h3>
            <p>Perched at 3,680 meters, Tungnath Temple stands as the highest Shiva temple on Earth. Over 1,000 years old, this ancient sanctuary was discovered by Adi Shankaracharya and represents the spiritual pinnacle of devotion.</p>

            <h3>Sacred History:</h3>
            <ul>
                <li>Part of the Panch Kedar pilgrimage circuit</li>
                <li>Built by the Pandavas to worship Lord Shiva</li>
                <li>Discovered and renovated by Adi Shankaracharya</li>
                <li>Represents the arms of Lord Shiva</li>
            </ul>

            <h3>The Trek Experience:</h3>
            <ul>
                <li>4km moderate trek through enchanting meadows</li>
                <li>Elevation gain of approximately 600 meters</li>
                <li>Path lined with rhododendrons and alpine flowers</li>
                <li>Breathtaking views of Nanda Devi and Chaukhamba peaks</li>
            </ul>

            <h3>Chandrashila Summit:</h3>
            <p>An additional 1-2km trek from Tungnath leads to Chandrashila Peak, offering 360-degree panoramic views of the Himalayan ranges including Nanda Devi, Trishul, Kedar Peak, and Bandarpunch.</p>

            <h3>Spiritual Significance:</h3>
            <p>The temple remains open only during summer months due to extreme weather. Devotees believe that prayers offered here have special significance due to the temple's proximity to the divine realm.</p>
        </div>
    </div>
</div>

<div id="devriyaTalModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Devriya Tal</h2>
            <span class="close" onclick="closeModal('devriyaTalModal')">&times;</span>
        </div>
        <div class="modal-body">
            <h3>Lake of Epics, Myths, Gods & Himalayas</h3>
            <p>Devriya Tal, situated at 2,438 meters, is a crystal-clear lake that perfectly mirrors the towering Chaukhamba peaks. This sacred lake is deeply rooted in Mahabharata legends and offers one of the most pristine reflections in the Himalayas.</p>

            <h3>Mythological Significance:</h3>
            <ul>
                <li>Featured in the Mahabharata epic</li>
                <li>Site where Yaksha tested the wisdom of the Pandavas</li>
                <li>Yudhishthira answered the Yaksha's questions here</li>
                <li>Sacred waters believed to have purifying properties</li>
            </ul>

            <h3>Natural Wonder:</h3>
            <ul>
                <li>Perfect mirror reflection of Chaukhamba peaks</li>
                <li>Surrounded by dense oak and rhododendron forests</li>
                <li>Alpine meadows with seasonal wildflowers</li>
                <li>Crystal clear waters throughout the year</li>
            </ul>

            <h3>The Trek:</h3>
            <ul>
                <li>3km gentle trek through forest trails</li>
                <li>Well-marked path suitable for all fitness levels</li>
                <li>Gradual ascent through diverse ecosystems</li>
                <li>Opportunities for bird watching and photography</li>
            </ul>

            <h3>Best Experience:</h3>
            <p>Early morning visits offer the most spectacular reflections when the lake surface is completely still, creating a perfect mirror image of the surrounding peaks. The serene atmosphere makes it ideal for meditation and contemplation.</p>
        </div>
    </div>
</div>

<div id="kartikSwamiModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Kartik Swami Temple</h2>
            <span class="close" onclick="closeModal('kartikSwamiModal')">&times;</span>
        </div>
        <div class="modal-body">
            <h3>Only Temple Dedicated to Lord Kartikeya in Uttarakhand</h3>
            <p>Perched at 3,050 meters, Kartik Swami Temple is the only temple in Uttarakhand dedicated to Lord Kartikeya (also known as Murugan). This sacred hilltop shrine marks the legendary site of supreme devotion and sacrifice.

            <h3>Divine Legend:</h3>
            <ul>
                <li>Site where Kartikeya offered his bones to Lord Shiva</li>
                <li>Represents ultimate devotion and sacrifice</li>
                <li>Lord Kartikeya is the commander of the gods' army</li>
                <li>Son of Lord Shiva and Goddess Parvati</li>
            </ul>

            <h3>Unique Features:</h3>
            <ul>
                <li>Only Kartikeya temple in the entire state</li>
                <li>360-degree panoramic mountain views</li>
                <li>Ancient stone architecture</li>
                <li>Peaceful hilltop location away from crowds</li>
            </ul>

            <h3>The Trek Experience:</h3>
            <ul>
                <li>3km moderate trek through rugged mountain paths</li>
                <li>Elevation gain through alpine terrain</li>
                <li>Stunning views throughout the journey</li>
                <li>Final approach offers breathtaking vistas</li>
            </ul>

            <h3>Panoramic Views:</h3>
            <p>From the temple, devotees can witness stunning views of major Himalayan peaks including Chaukhamba, Nanda Devi, Kedarnath, and Bandarpunch. The temple's elevated position provides one of the best viewpoints in the region.</p>

            <h3>Spiritual Significance:</h3>
            <p>Devotees believe that prayers offered at this remote temple are especially powerful due to Lord Kartikeya's role as the divine warrior and protector. The temple's isolation adds to its spiritual intensity and meditative atmosphere.</p>
        </div>
    </div>
</div>

<!-- JavaScript for modal and accordion functionality -->
<script>
    // Modal Functions
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Accordion Functions
    function toggleAccordion(element) {
        const accordionItem = element.parentElement;
        const content = accordionItem.querySelector('.accordion-content');
        const icon = element.querySelector('.accordion-icon i');

        // Close all other accordions
        document.querySelectorAll('.accordion-item').forEach(item => {
            if (item !== accordionItem) {
                item.classList.remove('active');
                item.querySelector('.accordion-content').style.maxHeight = null;
                item.querySelector('.accordion-icon i').style.transform = 'rotate(0deg)';
            }
        });

        // Toggle current accordion
        accordionItem.classList.toggle('active');

        if (accordionItem.classList.contains('active')) {
            content.style.maxHeight = content.scrollHeight + 'px';
            icon.style.transform = 'rotate(180deg)';
        } else {
            content.style.maxHeight = null;
            icon.style.transform = 'rotate(0deg)';
        }
    }
</script>

@endsection