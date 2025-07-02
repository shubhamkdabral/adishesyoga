@extends('layouts.app')

@section('content')

<!-- Header with Photo -->
<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide active">
            <div class="carousel-content">
                <span class="hero-badge">Ancient Wisdom</span>
                <h2>Hatha Yoga: A Journey from Beginner to Advanced</h2>
                <p>Discover the timeless practice of Hatha Yoga, combining physical postures, breathing techniques, and meditation to promote strength, flexibility, and inner peace. A structured path for all levels of practitioners.</p>
            </div>
            <div class="overlay"></div>
            <img src="/placeholder.svg?height=700&width=1600" alt="Hatha Yoga Practice">
        </div>
    </div>
</section>

<!-- Retreat Introduction -->
<section class="about-us">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <span class="section-badge">Ancient Practice</span>
                <h2>The Path of Hatha Yoga</h2>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p>Hatha Yoga is one of the oldest and most accessible branches of yoga, offering a comprehensive approach to physical, mental, and spiritual well-being. This ancient practice combines asanas (physical postures), pranayama (breathing techniques), and meditation to create a balanced foundation for personal growth.</p>
                <p>Whether you're just beginning your yoga journey or seeking to deepen your existing practice, our Hatha Yoga program provides a structured, progressive path that honors your individual pace while challenging you to grow. Experience the transformative power of mindful movement and conscious breathing.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-users" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">All Levels Welcome</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-om" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">Traditional Approach</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-heart" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">Mind-Body Integration</span>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="/placeholder.svg?height=500&width=600" alt="Hatha Yoga Practice">
            </div>
        </div>
    </div>
</section>

<!-- Three Levels Section -->
<section class="retreat-features-simple" style="padding: 5rem 0; background: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Three Levels of Practice</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Our Hatha Yoga program is thoughtfully structured to meet you wherever you are in your practice, providing clear progression from foundational awareness to advanced mastery.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">

            <!-- Beginner Level -->
            <div class="feature-list">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #27ae60, #2ecc71); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Beginner Level</h3>
                    <p style="color: var(--text-light); font-style: italic;">New to yoga, limited flexibility, or returning after a break</p>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Focus Areas:</h4>
                    <div class="feature-list-item">
                        <i class="fas fa-eye"></i>
                        <div>
                            <h5>Building Body Awareness</h5>
                            <p>Develop connection between mind and body</p>
                        </div>
                    </div>
                    <div class="feature-list-item">
                        <i class="fas fa-balance-scale"></i>
                        <div>
                            <h5>Learning Proper Alignment</h5>
                            <p>Foundation for safe and effective practice</p>
                        </div>
                    </div>
                    <div class="feature-list-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <h5>Developing Consistency</h5>
                            <p>Establishing a sustainable daily practice</p>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Key Elements:</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Basic asanas (Mountain Pose, Downward Dog, Warrior I & II)</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Gentle stretching and strengthening</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Introduction to diaphragmatic breathing</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Short relaxation or guided meditation</span>
                        </li>
                    </ul>
                </div>

                <div style="background: var(--background-light); padding: 1rem; border-radius: 10px; border-left: 4px solid #27ae60;">
                    <p style="margin: 0; font-style: italic; color: var(--text-light);">
                        <strong>Tip:</strong> Practice with patience. Hatha is not about pushing limits but about steady progress and mindful movement.
                    </p>
                </div>
            </div>

            <!-- Intermediate Level -->
            <div class="feature-list">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #f39c12, #e67e22); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Intermediate Level</h3>
                    <p style="color: var(--text-light); font-style: italic;">Practicing for 6+ months, comfortable with basics, seeking refinement</p>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Focus Areas:</h4>
                    <div class="feature-list-item">
                        <i class="fas fa-expand-arrows-alt"></i>
                        <div>
                            <h5>Expanding Posture Vocabulary</h5>
                            <p>Exploring more complex asanas and variations</p>
                        </div>
                    </div>
                    <div class="feature-list-item">
                        <i class="fas fa-wind"></i>
                        <div>
                            <h5>Developing Breath Control</h5>
                            <p>Introduction to pranayama techniques</p>
                        </div>
                    </div>
                    <div class="feature-list-item">
                        <i class="fas fa-dumbbell"></i>
                        <div>
                            <h5>Improving Balance & Endurance</h5>
                            <p>Building strength and stability</p>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Key Elements:</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Intermediate asanas (Triangle variations, Crow Pose, Wheel)</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Nadi Shodhana (alternate nostril breathing)</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Introduction to chakras and bandhas</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Longer holds and flowing transitions</span>
                        </li>
                    </ul>
                </div>

                <div style="background: var(--background-light); padding: 1rem; border-radius: 10px; border-left: 4px solid #f39c12;">
                    <p style="margin: 0; font-style: italic; color: var(--text-light);">
                        <strong>Tip:</strong> Use props to explore depth and alignment. Stay curious and listen to your body.
                    </p>
                </div>
            </div>

            <!-- Advanced Level -->
            <div class="feature-list">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #8e44ad, #9b59b6); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Advanced Level</h3>
                    <p style="color: var(--text-light); font-style: italic;">Experienced yogis with consistent practice and philosophical knowledge</p>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Focus Areas:</h4>
                    <div class="feature-list-item">
                        <i class="fas fa-star"></i>
                        <div>
                            <h5>Mastery of Advanced Postures</h5>
                            <p>Challenging asanas requiring strength and flexibility</p>
                        </div>
                    </div>
                    <div class="feature-list-item">
                        <i class="fas fa-infinity"></i>
                        <div>
                            <h5>Deep Integration</h5>
                            <p>Unifying breath, movement, and consciousness</p>
                        </div>
                    </div>
                    <div class="feature-list-item">
                        <i class="fas fa-meditation"></i>
                        <div>
                            <h5>Meditative & Energetic Aspects</h5>
                            <p>Exploring subtle dimensions of practice</p>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Key Elements:</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Advanced asanas (Headstand, Peacock, Lotus variations)</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Extended pranayama (Kapalabhati, Bhastrika)</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Meditation practices (Dharana, Dhyana)</span>
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-check" style="color: var(--primary-color);"></i>
                            <span>Application of Patanjali's Eight Limbs</span>
                        </li>
                    </ul>
                </div>

                <div style="background: var(--background-light); padding: 1rem; border-radius: 10px; border-left: 4px solid #8e44ad;">
                    <p style="margin: 0; font-style: italic; color: var(--text-light);">
                        <strong>Tip:</strong> Let go of goals. True mastery lies not in complexity, but in presence and surrender.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7-Day Schedule Accordion -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">7-Day Kundalini Retreat Schedule</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Each day is carefully structured to progressively deepen your understanding and experience of Kundalini energy, building from foundation to awakening.</p>
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
                        <div style="margin-top: 1.5rem; padding: 1rem; background: var(--background-light); border-radius: 8px;">
                            <p style="margin: 0; font-style: italic; color: var(--text-light);">This day is about settling in and preparing your mind and body for the transformative journey ahead.</p>
                        </div>
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
                        <div class="day-schedule">
                            <div class="schedule-period">
                                <h4>Morning</h4>
                                <ul>
                                    <li><strong>08:30 am</strong> - Breakfast</li>
                                    <li><strong>10:00 am</strong> - Fire Ceremony & Orientation: Participate in a traditional fire ceremony to set intentions and familiarize yourself with the retreat journey</li>
                                </ul>
                            </div>
                            <div class="schedule-period">
                                <h4>Afternoon</h4>
                                <ul>
                                    <li><strong>01:00 pm</strong> - Lunch</li>
                                    <li><strong>03:00 pm – 04:00 pm</strong> - Ashtanga Practice</li>
                                </ul>
                            </div>
                            <div class="schedule-period">
                                <h4>Evening</h4>
                                <ul>
                                    <li><strong>05:00 pm – 06:00 pm</strong> - Meditation Session</li>
                                    <li><strong>08:00 pm</strong> - Dinner</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 3-6 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 3-6</span>
                        <h3>Deepening Practice</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <div class="day-schedule">
                            <div class="schedule-period">
                                <h4>Morning</h4>
                                <ul>
                                    <li><strong>06:30 am</strong> - Cleansing Practice: Engage in traditional yogic cleansing techniques</li>
                                    <li><strong>07:00 am – 08:00 am</strong> - Asana & Pranayama: Enhance your physical and breath practices</li>
                                    <li><strong>08:30 am</strong> - Breakfast</li>
                                    <li><strong>10:00 am – 11:00 am</strong> - Kundalini Yoga</li>
                                </ul>
                            </div>
                            <div class="schedule-period">
                                <h4>Afternoon</h4>
                                <ul>
                                    <li><strong>11:30 am – 12:30 pm</strong> - Philosophy Class: Delve into yogic teachings and philosophies</li>
                                    <li><strong>01:00 pm</strong> - Lunch</li>
                                    <li><strong>03:00 pm – 04:00 pm</strong> - Ashtanga Practice</li>
                                    <li><strong>Afternoon</strong> - Massage (scheduled individually)</li>
                                </ul>
                            </div>
                            <div class="schedule-period">
                                <h4>Evening</h4>
                                <ul>
                                    <li><strong>05:00 pm – 06:00 pm</strong> - Meditation Session</li>
                                    <li><strong>08:00 pm</strong> - Dinner</li>
                                </ul>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem; padding: 1rem; background: var(--background-light); border-radius: 8px;">
                            <p style="margin: 0; font-style: italic; color: var(--text-light);">These core days focus on progressive energy work, building your capacity to safely channel Kundalini energy.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Day 7 -->
            <div class="accordion-item">
                <div class="accordion-header" onclick="toggleAccordion(this)">
                    <div class="day-info">
                        <span class="day-number">Day 7</span>
                        <h3>Closure & Farewell</h3>
                    </div>
                    <div class="accordion-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="accordion-content">
                    <div style="padding: 2rem;">
                        <div class="day-schedule">
                            <div class="schedule-period">
                                <h4>Morning</h4>
                                <ul>
                                    <li><strong>06:30 am</strong> - Cleansing Practice: Engage in traditional yogic cleansing techniques</li>
                                    <li><strong>07:00 am – 08:00 am</strong> - Asana & Pranayama: Enhance your physical and breath practices</li>
                                    <li><strong>08:30 am</strong> - Breakfast</li>
                                </ul>
                            </div>
                            <div class="schedule-period">
                                <h4>Late Morning</h4>
                                <ul>
                                    <li><strong>10:00 am</strong> - Closing Ceremony: Reflect on your journey and share experiences</li>
                                </ul>
                            </div>
                        </div>
                        <div style="margin-top: 1.5rem; padding: 1rem; background: var(--background-light); border-radius: 8px;">
                            <p style="margin: 0; font-style: italic; color: var(--text-light);"><strong>Note:</strong> The retreat includes two excursions, which will be scheduled on days that are most suitable depending on the weather. This flexibility ensures the best experience for all participants.</p>
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

<!-- Benefits Section -->
<section class="post-retreat-benefits" style="padding: 5rem 0; background: var(--background-white);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">What You'll Gain from Hatha Yoga</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Hatha Yoga offers profound benefits that extend far beyond the physical practice, creating lasting transformation in all aspects of your life.</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
            <div class="benefit-item">
                <div class="benefit-number">01</div>
                <h3>Improved Posture & Flexibility</h3>
                <p>Develop a stronger, more supple body through consistent practice of asanas, reducing tension and improving overall physical alignment.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">02</div>
                <h3>Stress Reduction & Mental Clarity</h3>
                <p>Experience significant reduction in stress and anxiety while developing greater mental focus and emotional stability through mindful movement.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">03</div>
                <h3>Enhanced Breath Awareness</h3>
                <p>Master pranayama techniques that improve respiratory function, increase energy levels, and promote deep relaxation and inner calm.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">04</div>
                <h3>Spiritual Growth & Self-Discovery</h3>
                <p>Deepen your connection to your authentic self through meditation and philosophical study, fostering personal growth and spiritual awakening.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">05</div>
                <h3>Better Sleep & Recovery</h3>
                <p>Improve sleep quality and physical recovery through relaxation techniques and gentle movement that calms the nervous system.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">06</div>
                <h3>Increased Strength & Endurance</h3>
                <p>Build functional strength and stamina through sustained poses and flowing sequences that challenge and strengthen your entire body.</p>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy Section -->
<section class="about-us">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <span class="section-badge">Ancient Wisdom</span>
                <h2>The Philosophy of Balance</h2>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p>Hatha Yoga teaches us the art of balance—not just physical balance in poses, but the deeper equilibrium between opposing forces in life. The word "Hatha" itself represents this duality: "Ha" meaning sun (active, masculine energy) and "Tha" meaning moon (receptive, feminine energy).</p>
                <p>Through consistent practice, we learn to harmonize strength with softness, effort with ease, and movement with stillness. This ancient practice becomes a metaphor for living with awareness, breathing with intention, and moving through life with purpose and grace.</p>
                <div style="background: var(--background-light); padding: 2rem; border-radius: 15px; border-left: 4px solid var(--primary-color); margin-top: 2rem;">
                    <p style="margin: 0; font-style: italic; color: var(--text-light); font-size: 1.125rem; text-align: center;">
                        <strong>"Yoga is not about how far you can stretch—it's about how deeply you can connect."</strong>
                    </p>
                </div>
            </div>
            <div class="about-image">
                <img src="/placeholder.svg?height=500&width=600" alt="Yoga Philosophy">
            </div>
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
            <span class="section-badge">Begin Your Journey</span>
            <h2>Start Your Hatha Yoga Practice Today</h2>
            <p>Whether you're a complete beginner or an experienced practitioner, our Hatha Yoga program offers a supportive environment to deepen your practice and discover the transformative power of yoga.</p>
            <div class="cta-buttons">
                <a href="mailto:adisheshyoga@gmail.com" class="btn btn-primary">
                    <span>Join Our Program</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="http://www.adisheshyoga.com" class="btn btn-outline-light">
                    <span>Learn More</span>
                    <i class="fas fa-external-link-alt"></i>
                </a>
            </div>
            <div class="cta-features">
                <div class="cta-feature">
                    <i class="fas fa-users"></i>
                    <span>All Levels Welcome</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-heart"></i>
                    <span>Personalized Guidance</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-om"></i>
                    <span>Traditional Approach</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection