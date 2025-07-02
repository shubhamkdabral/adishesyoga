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
            <span class="section-badge">What Will You Learn?</span>
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

<section class="retreat-info-combined" style="padding: 5rem 0; background: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Retreat Information</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <!-- Two Column Layout -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; margin-bottom: 4rem;">

            <!-- Left Column: What Makes This Retreat Special -->
            <div class="retreat-features-left">
                <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                    <span class="section-badge">What Makes This Retreat Special</span>
                    <div class="title-decoration" style="justify-content: flex-start;">
                        <div class="decoration-line"></div>
                        <div class="decoration-lotus">🪷</div>
                        <div class="decoration-line"></div>
                    </div>
                </div>

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

            <!-- Right Column: 9-Day Schedule -->
            <div class="schedule-right">
                <div class="section-header" style="text-align: left; margin-bottom: 2rem;">
                    <span class="section-badge">9-Day Retreat Schedule</span>
                    <div class="title-decoration" style="justify-content: flex-start;">
                        <div class="decoration-line"></div>
                        <div class="decoration-om">🕉️</div>
                        <div class="decoration-line"></div>
                    </div>
                    <p style="text-align: left; font-size: 0.9rem; color: var(--text-light);">This is a sample itinerary. Times and activities may shift slightly due to weather, trail conditions, or other local factors.</p>
                </div>

                <div class="schedule-accordion" style="display: flex; flex-direction: column; gap: 1rem;">
                    <!-- Day 1 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 1</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Arrival & Grounding</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 1rem; color: var(--text-light); line-height: 1.7;"><strong>Welcome & Check-in:</strong> Settle into our tranquil retreat space at your leisure.</p>
                                <p style="margin: 0; color: var(--text-light); line-height: 1.7;"><strong>Evening:</strong> Enjoy nourishing meals, explore the serene surroundings, connect with fellow participants, or simply relax and ground yourself in peace.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 2 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 2</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Initiation & Orientation</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>08:30 am</strong> - Breakfast</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>10:00 am</strong> - Fire Ceremony & Orientation: Participate in a traditional fire ceremony to set intentions</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>01:00 pm</strong> - Lunch</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Afternoon</strong> - Ayurvedic Massage: Experience a rejuvenating massage</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Evening</strong> - Ganga Aarti: Witness the mesmerizing river ceremony</p>
                                <p style="margin: 0; color: var(--text-light); line-height: 1.7;"><strong>08:00 pm</strong> - Dinner</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 3 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 3</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Deepening Practice</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:30 am</strong> - Cleansing Practice</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>07:00 am</strong> - Asana & Pranayama</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>08:30 am</strong> - Breakfast</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>11:00 am</strong> - Philosophy Class</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>01:00 pm</strong> - Lunch</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Afternoon</strong> - Massage session</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:30 pm</strong> - Meditation Session</p>
                                <p style="margin: 0; color: var(--text-light); line-height: 1.7;"><strong>08:00 pm</strong> - Dinner</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 4 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 4</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Himalayan Expedition Begins</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:00 am</strong> - Departure to the Himalayas</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Midday</strong> - Visit Devprayag Sangam: Sacred confluence of rivers</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Afternoon</strong> - Dhari Devi Temple Darshan</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Evening</strong> - Hotel Check-in & exploration</p>
                                <p style="margin: 0; color: var(--text-light); line-height: 1.7;"><strong>08:00 pm</strong> - Dinner</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 5 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 5</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Trek to Tungnath & Chandrashila</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:00 am</strong> - Cleansing Practice</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:30 am</strong> - Yoga Session</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>08:00 am</strong> - Breakfast</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Trek:</strong> 4 km to Tungnath Temple + 1-2 km to Chandrashila Peak</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Elevation:</strong> ~600m + ~200m</p>
                                <p style="margin: 0; color: var(--text-light); line-height: 1.7;"><strong>Evening:</strong> Dinner, Night Session or Bonfire</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 6 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 6</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Devriya Tal & Saari Village</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:00 am</strong> - Cleansing Practice</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:30 am</strong> - Yoga Session</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>08:00 am</strong> - Breakfast</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Trek:</strong> 3 km to Devriya Tal at 2438m elevation</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Lunch:</strong> At Saari Village</p>
                                <p style="margin: 0; color: var(--text-light); line-height: 1.7;"><strong>Evening:</strong> Village walk, Dinner, Bonfire</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 7 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 7</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Kartik Swami Temple</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:00 am</strong> - Cleansing Practice</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>06:30 am</strong> - Yoga Session</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>08:00 am</strong> - Breakfast</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Trek:</strong> 3 km to Kartik Swami Temple at 3050m</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Lunch:</strong> Traditional local meal</p>
                                <p style="margin: 0; color: var(--text-light); line-height: 1.7;"><strong>Evening:</strong> Dinner, Night Session</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 8 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 8</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Return to Rishikesh</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>09:00 am</strong> - Breakfast</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Departure</strong> to Rishikesh</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>Lunch</strong> En Route</p>
                                <p style="margin: 0; color: var(--text-light); line-height: 1.7;"><strong>08:00 pm</strong> - Dinner at the Ashram</p>
                            </div>
                        </div>
                    </div>

                    <!-- Day 9 -->
                    <div class="accordion-item" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); overflow: hidden; transition: all 0.3s ease;">
                        <div class="accordion-header" onclick="toggleAccordion(this)" style="padding: 1.5rem 2rem; cursor: pointer; display: flex; justify-content: space-between; align-items: center; background: var(--background-white); transition: all 0.3s ease;">
                            <div class="day-info" style="display: flex; align-items: center; gap: 1rem;">
                                <span class="day-number" style="background: var(--accent-color); color: white; padding: 0.5rem 1rem; border-radius: 50px; font-weight: 600; font-size: 0.875rem;">Day 9</span>
                                <h3 style="margin: 0; font-size: 1.25rem; color: var(--text-dark);">Closure & Farewell</h3>
                            </div>
                            <div class="accordion-icon" style="width: 40px; height: 40px; background: var(--background-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">
                                <i class="fas fa-chevron-down" style="color: var(--primary-color); transition: transform 0.3s ease;"></i>
                            </div>
                        </div>
                        <div class="accordion-content" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease; background: var(--background-light);">
                            <div style="padding: 2rem;">
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>07:00 am</strong> - Final Yoga Session</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>08:30 am</strong> - Breakfast</p>
                                <p style="margin-bottom: 0.75rem; color: var(--text-light); line-height: 1.7;"><strong>10:00 am</strong> - Closing Ceremony: Reflect on your journey</p>
                                <div style="margin-top: 1rem; padding: 1rem; background: var(--background-light); border-radius: 8px;">
                                    <small style="color: var(--text-light);"><em>Note: The schedule for the last day may be adjusted to allow relaxation time. Changes will be discussed on Day 8.</em></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Dates Calendar -->
<section class="upcoming-dates" style="padding: 5rem 0; background: var(--background-white);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Upcoming Retreat Dates</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Choose your preferred dates and accommodation type for the upcoming retreats</p>
        </div>

        <!-- Calendar Table -->
        <div class="dates-calendar" style="background: white; border-radius: 15px; box-shadow: var(--shadow-light); overflow: hidden; border: 1px solid var(--border-light);">
            <!-- Table Header -->
            <div class="calendar-header" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; padding: 1.5rem; display: grid; grid-template-columns: 2fr 1.5fr 1.5fr 1fr; gap: 1rem; font-weight: 600; text-align: center;">
                <div>Retreat Dates</div>
                <div>Shared Room</div>
                <div>Private Room</div>
                <div>Booking</div>
            </div>

            <!-- Calendar Rows -->
            <div class="calendar-row" style="display: grid; grid-template-columns: 2fr 1.5fr 1.5fr 1fr; gap: 1rem; padding: 1.5rem; border-bottom: 1px solid var(--border-light); align-items: center;">
                <div class="date-info">
                    <div style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">March 15 - 23, 2024</div>
                    <div style="font-size: 0.875rem; color: var(--text-light);">9 Days • Spring Season</div>
                    <div style="font-size: 0.75rem; color: var(--primary-color); margin-top: 0.25rem;">
                        <i class="fas fa-users"></i> 8 spots available
                    </div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$899</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$1,299</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="booking-btn" style="text-align: center;">
                    <button class="btn btn-primary" style="padding: 0.75rem 1.5rem; font-size: 0.875rem;">
                        Apply Now
                    </button>
                </div>
            </div>

            <div class="calendar-row" style="display: grid; grid-template-columns: 2fr 1.5fr 1.5fr 1fr; gap: 1rem; padding: 1.5rem; border-bottom: 1px solid var(--border-light); align-items: center;">
                <div class="date-info">
                    <div style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">April 12 - 20, 2024</div>
                    <div style="font-size: 0.875rem; color: var(--text-light);">9 Days • Spring Season</div>
                    <div style="font-size: 0.75rem; color: var(--primary-color); margin-top: 0.25rem;">
                        <i class="fas fa-users"></i> 5 spots available
                    </div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$899</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$1,299</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="booking-btn" style="text-align: center;">
                    <button class="btn btn-primary" style="padding: 0.75rem 1.5rem; font-size: 0.875rem;">
                        Apply Now
                    </button>
                </div>
            </div>

            <div class="calendar-row" style="display: grid; grid-template-columns: 2fr 1.5fr 1.5fr 1fr; gap: 1rem; padding: 1.5rem; border-bottom: 1px solid var(--border-light); align-items: center;">
                <div class="date-info">
                    <div style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">May 18 - 26, 2024</div>
                    <div style="font-size: 0.875rem; color: var(--text-light);">9 Days • Summer Season</div>
                    <div style="font-size: 0.75rem; color: var(--primary-color); margin-top: 0.25rem;">
                        <i class="fas fa-users"></i> 12 spots available
                    </div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$949</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$1,349</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="booking-btn" style="text-align: center;">
                    <button class="btn btn-primary" style="padding: 0.75rem 1.5rem; font-size: 0.875rem;">
                        Apply Now
                    </button>
                </div>
            </div>

            <div class="calendar-row" style="display: grid; grid-template-columns: 2fr 1.5fr 1.5fr 1fr; gap: 1rem; padding: 1.5rem; border-bottom: 1px solid var(--border-light); align-items: center;">
                <div class="date-info">
                    <div style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">June 22 - 30, 2024</div>
                    <div style="font-size: 0.875rem; color: var(--text-light);">9 Days • Summer Season</div>
                    <div style="font-size: 0.75rem; color: var(--primary-color); margin-top: 0.25rem;">
                        <i class="fas fa-users"></i> 7 spots available
                    </div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$949</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$1,349</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="booking-btn" style="text-align: center;">
                    <button class="btn btn-primary" style="padding: 0.75rem 1.5rem; font-size: 0.875rem;">
                        Apply Now
                    </button>
                </div>
            </div>

            <div class="calendar-row" style="display: grid; grid-template-columns: 2fr 1.5fr 1.5fr 1fr; gap: 1rem; padding: 1.5rem; border-bottom: 1px solid var(--border-light); align-items: center;">
                <div class="date-info">
                    <div style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">September 15 - 23, 2024</div>
                    <div style="font-size: 0.875rem; color: var(--text-light);">9 Days • Autumn Season</div>
                    <div style="font-size: 0.75rem; color: var(--primary-color); margin-top: 0.25rem;">
                        <i class="fas fa-users"></i> 10 spots available
                    </div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$899</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$1,299</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="booking-btn" style="text-align: center;">
                    <button class="btn btn-primary" style="padding: 0.75rem 1.5rem; font-size: 0.875rem;">
                        Apply Now
                    </button>
                </div>
            </div>

            <div class="calendar-row" style="display: grid; grid-template-columns: 2fr 1.5fr 1.5fr 1fr; gap: 1rem; padding: 1.5rem; align-items: center;">
                <div class="date-info">
                    <div style="font-weight: 600; color: var(--text-dark); margin-bottom: 0.5rem;">October 20 - 28, 2024</div>
                    <div style="font-size: 0.875rem; color: var(--text-light);">9 Days • Autumn Season</div>
                    <div style="font-size: 0.75rem; color: var(--primary-color); margin-top: 0.25rem;">
                        <i class="fas fa-users"></i> 6 spots available
                    </div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$899</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="room-price" style="text-align: center;">
                    <div style="font-size: 1.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 0.25rem;">$1,299</div>
                    <div style="font-size: 0.75rem; color: var(--text-light);">per person</div>
                </div>
                <div class="booking-btn" style="text-align: center;">
                    <button class="btn btn-primary" style="padding: 0.75rem 1.5rem; font-size: 0.875rem;">
                        Apply Now
                    </button>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div style="text-align: center; margin-top: 3rem;">
            <div style="background: var(--background-light); padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 1rem;">What's Included</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; text-align: left;">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--primary-color);"></i>
                        <span>All meals & accommodation</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--primary-color);"></i>
                        <span>Daily yoga & meditation</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--primary-color);"></i>
                        <span>Himalayan treks & excursions</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--primary-color);"></i>
                        <span>Ayurvedic treatments</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--primary-color);"></i>
                        <span>Transportation during retreat</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-check" style="color: var(--primary-color);"></i>
                        <span>Certificate of completion</span>
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
            <span class="section-badge">Essential Packing List</span>
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
            <span class="section-badge">Arrival & Departure Details</span>
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
            <span class="section-badge">What Will You Get After The Retreat?</span>
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
            <span class="section-badge">Smaller Group For Your Advantage</span>
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
            <span class="section-badge">Our Stay</span>
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

<!-- Updated Blade Template Section -->
<section class="our-teams">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Sacred Sites & Temples We'll Visit</span>
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
            <span class="section-badge">Other Retreats</span>
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

<!-- Retreat Programs Section -->
<section class="retreat-programs" id="programs">
    <div class="container">
        <div class="section-header">
            <div class="section-mandala programs-mandala-left"></div>
            <span class="section-badge">Other Retreat Programs</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Discover our carefully crafted retreat programs designed to rejuvenate your mind, body, and soul.</p>
        </div>
        <div class="programs-container">
            @foreach($otherRetreats as $index => $program)
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


<!-- Call to Action -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Limited Spaces Available</span>
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

<!-- Add responsive styles -->
<style>
    @media (max-width: 1024px) {
        .retreat-info-combined .container>div:nth-child(2) {
            grid-template-columns: 1fr !important;
            gap: 3rem !important;
        }

        .dates-calendar {
            max-width: 100% !important;
        }

        .calendar-header,
        .calendar-row {
            grid-template-columns: 1fr !important;
            gap: 1rem !important;
            text-align: center !important;
        }

        .date-info {
            text-align: center !important;
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 768px) {
        .feature-list {
            padding: 2rem !important;
        }

        .feature-list-item {
            flex-direction: column !important;
            text-align: center !important;
            gap: 1rem !important;
        }

        .calendar-header,
        .calendar-row {
            padding: 1.5rem !important;
        }

        .room-price>div:first-child {
            font-size: 1.5rem !important;
        }

        .btn {
            padding: 0.75rem 1.25rem !important;
            font-size: 0.875rem !important;
        }
    }

    @media (max-width: 576px) {
        .section-header .section-badge {
            font-size: 0.8rem !important;
            padding: 0.6rem 1.2rem !important;
        }

        .feature-list {
            padding: 1.5rem !important;
        }

        .accordion-header {
            padding: 1.25rem 1.5rem !important;
        }

        .day-info h3 {
            font-size: 1rem !important;
        }

        .calendar-header,
        .calendar-row {
            padding: 1rem !important;
        }
    }

    /* Hover Effects */
    .calendar-row:hover {
        background: var(--background-light);
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(92, 141, 118, 0.3);
    }

    .accordion-item:hover {
        box-shadow: var(--shadow-medium);
        border-color: var(--primary-light);
    }

    .feature-list-item:hover {
        transform: translateX(5px);
        transition: all 0.3s ease;
    }
</style>

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