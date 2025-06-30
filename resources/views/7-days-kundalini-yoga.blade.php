@extends('layouts.app')

@section('content')

<!-- Header with Photo -->
<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide active">
            <div class="carousel-content">
                <span class="hero-badge">Spiritual Awakening</span>
                <h2>7 Days Introduction to Kundalini Retreat</h2>
                <p>Embark on a transformative journey to awaken your dormant spiritual energy. Experience the ancient practice of Kundalini Yoga through guided meditation, breathwork, and energy cultivation techniques.</p>
            </div>
            <div class="overlay"></div>
            <img src="/placeholder.svg?height=700&width=1600" alt="Kundalini Meditation">
        </div>
    </div>
</section>

<!-- Retreat Introduction -->
<section class="about-us">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <span class="section-badge">Sacred Energy</span>
                <h2>Understanding Kundalini</h2>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p>Kundalini is a sacred and powerful spiritual energy—your vital potential. Worshipped as divine Shakti, it lies coiled at the base of the spine like a sleeping serpent. Kundalini Yoga seeks to convert this latent potential energy into kinetic energy, guiding it upward through the chakras to foster peace, bliss, and deep meditation.</p>
                <p>This spiritual discipline, rooted in Hindu and Tantric traditions, aims at awakening the dormant energy and guiding it upward through the seven chakras to the crown for spiritual enlightenment (samadhi). Brought into Western awareness by Yogi Bhajan in the late 1960s, it uses a combination of mantras, breathwork, body postures, and meditation.</p>
                <div style="display: flex; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.5rem;">
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-calendar" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">7 Days / 6 Nights</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-fire" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">Energy Awakening</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-meditation" style="color: var(--primary-color);"></i>
                        <span style="color: var(--text-light);">Deep Meditation</span>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="/placeholder.svg?height=500&width=600" alt="Kundalini Energy">
            </div>
        </div>
    </div>
</section>

<!-- The Path Section -->
<section class="retreat-features-simple" style="padding: 5rem 0; background: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Spiritual Journey</span>
            <h2>The Path of Kundalini Awakening</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>A Kundalini retreat offers a sequenced, holistic journey designed to safely awaken and guide your spiritual energy through progressive practices.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto;">
            <div class="feature-list">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #e74c3c, #c0392b); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 style="color: var(--primary-color);">1. Chakra Meditation</h3>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-search"></i>
                    <div>
                        <h4>Discover Your Chakras</h4>
                        <p>Learn to feel and recognize each of the seven energy centers</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-bolt"></i>
                    <div>
                        <h4>Awaken Your Chakras</h4>
                        <p>Use targeted practices to bring life and clarity to each center</p>
                    </div>
                </div>
            </div>
            <div class="feature-list">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #9b59b6, #8e44ad); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 2rem;">
                        <i class="fas fa-fire-flame-curved"></i>
                    </div>
                    <h3 style="color: var(--primary-color);">2. Kundalini Meditation</h3>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-balance-scale"></i>
                    <div>
                        <h4>Balance Your Chakras</h4>
                        <p>Harmonize all centers to create a clear energetic foundation</p>
                    </div>
                </div>
                <div class="feature-list-item">
                    <i class="fas fa-crown"></i>
                    <div>
                        <h4>Awaken Your Kundalini</h4>
                        <p>Gently channel energy upward for spiritual awakening</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7-Day Schedule Accordion -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Daily Journey</span>
            <h2>7-Day Kundalini Retreat Schedule</h2>
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

<!-- Supportive Practices -->
<section class="retreat-features-simple" style="padding: 5rem 0; background: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Holistic Approach</span>
            <h2>Supportive Practices</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>To support the awakening process, our retreat includes complementary practices that prepare and purify the body and energy channels.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div class="feature-list-item">
                <i class="fas fa-dumbbell"></i>
                <div>
                    <h4>Asanas & Hatha Yoga</h4>
                    <p>Open and strengthen energy pathways through physical postures</p>
                </div>
            </div>
            <div class="feature-list-item">
                <i class="fas fa-wind"></i>
                <div>
                    <h4>Pranayama</h4>
                    <p>Breathwork to purify nadis (energy channels) and move energy upwards</p>
                </div>
            </div>
            <div class="feature-list-item">
                <i class="fas fa-shower"></i>
                <div>
                    <h4>Kriyas & Yogic Cleansing</h4>
                    <p>Practices like kapalbhati, neti, bandhas to purify body and energy</p>
                </div>
            </div>
            <div class="feature-list-item">
                <i class="fas fa-hand-paper"></i>
                <div>
                    <h4>Mudras & Mantras</h4>
                    <p>Assist in directing and stabilizing energy flow</p>
                </div>
            </div>
            <div class="feature-list-item">
                <i class="fas fa-leaf"></i>
                <div>
                    <h4>Ayurveda / Naturopathy</h4>
                    <p>Dietary and lifestyle support that aligns with energetic cleansing</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Duration & Commitment -->
<section class="about-us">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <span class="section-badge">Commitment</span>
                <h2>Duration & Transformative Potential</h2>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, var(--primary-color), var(--primary-light)); margin-bottom: 1.5rem; border-radius: 2px;"></div>
                <p>Our 7-day introduction provides a solid foundation for understanding and experiencing Kundalini energy. While deeper progress is seen in longer programs, this retreat offers meaningful transformation and practical tools for continued practice.</p>
                <p>For those seeking more profound experiences and sustained practice upon return, we also offer extended courses of 15 days or more. These longer retreats allow for deeper integration and more significant energetic shifts.</p>
                <div style="background: var(--background-light); padding: 2rem; border-radius: 15px; margin-top: 2rem;">
                    <h4 style="color: var(--primary-color); margin-bottom: 1rem;">Measuring Progress</h4>
                    <p style="margin: 0; color: var(--text-light);">Structured retreats provide daily tools to track your energetic and meditative growth, enabling you to observe subtle shifts in clarity, calm, and consciousness.</p>
                </div>
            </div>
            <div class="about-image">
                <img src="/placeholder.svg?height=500&width=600" alt="Spiritual Progress">
            </div>
        </div>
    </div>
</section>

<!-- Guidance & Integration -->
<section class="post-retreat-benefits" style="padding: 5rem 0; background: var(--background-white);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Safe Practice</span>
            <h2>Guidance & Integration for Kundalini Practice</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Kundalini awakening requires careful guidance and proper integration. Our approach ensures safe, gradual progress with ongoing support.</p>
        </div>

        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
            <div class="benefit-item">
                <div class="benefit-number">01</div>
                <h3>Cultivate Patience & Self-Awareness</h3>
                <p>"Do not rush." Kundalini awakening unfolds subtly and gradually. Traditional guidance emphasizes nurturing energy gradually through gentle kriyas, meditation, and breathwork, practiced with full presence.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">02</div>
                <h3>Seek Qualified, Experienced Guidance</h3>
                <p>In Siddhayoga and similar yogic lineages, the guru-disciple relationship is central. Gurus guide safe Shaktipat awakenings and help interpret subtle energy shifts. Always check that your teacher has credible experience.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">03</div>
                <h3>Understand & Respect Progression</h3>
                <p>Advance step-by-step: from discovery → awakening → balance → Kundalini activation. Each stage builds a foundation for the next. This gradual progression ensures safe and sustainable development.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">04</div>
                <h3>Anchor Post-Retreat with Daily Sadhana</h3>
                <p>A structured morning and/or evening practice is key. Traditional guidelines include wakeup kriya, cold shower, meditation/mantra, kriya sequence, deep relaxation, and closing prayer. Aim for consistency: even 5 minutes daily is beneficial.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">05</div>
                <h3>Continue Self-Observation & Integration</h3>
                <p>Between and after practices, pause to sense energetic shifts in the spine and bodies. Follow each kriya with relaxation and silent reflection to integrate subtle experiences. Track physical sensations, emotional upticks, dreams, and clarity.</p>
            </div>
            <div class="benefit-item">
                <div class="benefit-number">06</div>
                <h3>Maintain Ongoing Connection with Guides</h3>
                <p>Regular check-ins with mentors help integrate subtle awakenings, prevent imbalances, and receive personalized adjustments. In Siddhayoga tradition, this ongoing transmission and guidance ensure safe navigation of energy shifts.</p>
            </div>
        </div>
    </div>
</section>

<!-- Summary Table -->
<section class="small-group-advantage" style="padding: 5rem 0; background: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Practice Summary</span>
            <h2>Essential Elements for Safe Kundalini Practice</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>A traditional Kundalini path combines consistent daily practice, experienced guidance, careful observation, and gradual progression to ensure powerful inner transformation with safe and stable integration into daily life.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; max-width: 1200px; margin: 0 auto;">
            <div class="advantage-box">
                <div class="advantage-icon"><i class="fas fa-clock"></i></div>
                <h4>Patience & Insight</h4>
                <p>Honor gradual energy unfolding with mindful awareness and respect for the natural process.</p>
            </div>
            <div class="advantage-box">
                <div class="advantage-icon"><i class="fas fa-user-graduate"></i></div>
                <h4>Qualified Instructor</h4>
                <p>Ensure safety and clarity through experienced, credentialed guidance from traditional lineages.</p>
            </div>
            <div class="advantage-box">
                <div class="advantage-icon"><i class="fas fa-stairs"></i></div>
                <h4>Staged Progression</h4>
                <p>Solid foundation builds deeper experiences through systematic, step-by-step advancement.</p>
            </div>
            <div class="advantage-box">
                <div class="advantage-icon"><i class="fas fa-meditation"></i></div>
                <h4>Consistent Sadhana</h4>
                <p>Builds resilience, habit, and energetic balance through regular daily practice.</p>
            </div>
            <div class="advantage-box">
                <div class="advantage-icon"><i class="fas fa-eye"></i></div>
                <h4>Deep Observation & Rest</h4>
                <p>Anchor subtle awakenings and awareness through mindful integration periods.</p>
            </div>
            <div class="advantage-box">
                <div class="advantage-icon"><i class="fas fa-hands-helping"></i></div>
                <h4>Ongoing Support</h4>
                <p>Prevent overwhelm and guide deeper understanding through continued mentorship.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Sacred Journey</span>
            <h2>Begin Your Kundalini Awakening</h2>
            <p>Join our 7-day introduction to Kundalini retreat and experience the profound transformation that comes from awakening your spiritual energy. Limited spaces ensure personalized guidance and safe practice.</p>
            <div class="cta-buttons">
                <a href="mailto:adisheshyoga@gmail.com" class="btn btn-primary">
                    <span>Book Your Retreat</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="http://www.adisheshyoga.com" class="btn btn-outline-light">
                    <span>Learn More</span>
                    <i class="fas fa-external-link-alt"></i>
                </a>
            </div>
            <div class="cta-features">
                <div class="cta-feature">
                    <i class="fas fa-fire"></i>
                    <span>Energy Awakening</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-shield-alt"></i>
                    <span>Safe Guidance</span>
                </div>
                <div class="cta-feature">
                    <i class="fas fa-crown"></i>
                    <span>Spiritual Growth</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-logo">
                <div class="logo-circle footer-logo-circle">
                    <img src="/placeholder.svg?height=60&width=60" alt="Adishesh Yoga Logo">
                </div>
                <h3>Adishesh Yoga</h3>
                <p>Find your inner peace with Adishesh Yoga. Transform your life through the ancient practice of yoga in our beautiful retreat locations.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="teacher.html">Our Teachers</a></li>
                    <li><a href="retreat.html">Retreat Programs</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-programs">
                <h4>Programs</h4>
                <ul>
                    <li><a href="#">Hatha Yoga Program</a></li>
                    <li><a href="#">Kundalini Retreat</a></li>
                    <li><a href="#">Himalayan Retreat</a></li>
                    <li><a href="#">Teacher Training</a></li>
                    <li><a href="#">Corporate Programs</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Rishikesh, Uttarakhand, India</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>adisheshyoga@gmail.com</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-globe"></i>
                    <span>www.adisheshyoga.com</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <span>Available 24/7</span>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2023 Adishesh Yoga. All Rights Reserved.</p>
            <div class="footer-bottom-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript for accordion functionality -->
<script>
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