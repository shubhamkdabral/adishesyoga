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
            <span class="section-badge">Progressive Learning</span>
            <h2>Three Levels of Practice</h2>
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

<!-- Benefits Section -->
<section class="post-retreat-benefits" style="padding: 5rem 0; background: var(--background-white);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Transformative Benefits</span>
            <h2>What You'll Gain from Hatha Yoga</h2>
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