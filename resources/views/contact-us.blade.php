@extends('layouts.app')

@section('content')

<!-- Page Header -->
<section class="hero-carousel">
    <div class="carousel-container">
        <div class="carousel-slide">
            <div class="carousel-content">
                <span class="hero-badge">{{ $contactUs->banner_title ?? 'Our Story' }}</span>
                <h2>{{ $contactUs->banner_heading ?? 'About Adishesh Yoga' }}</h2>
                <p>{!! $contactUs->banner_short_description !!}</p>
            </div>
            <div class="overlay"></div>
            <img
                src="{{ $contactUs->getUploadedBannerMedia()?->getUrl() ?? '/placeholder.svg?height=700&width=1600' }}"
                alt="{{ $contactUs->banner_heading ?? 'Adishesh Yoga Banner' }}">
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">How to Contact Us</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>We're always happy to hear from you. Whether you have questions about our programs, need help with
                booking, or just want to learn more about our yoga philosophy, our team is ready to assist you.</p>
        </div>

        <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); text-align: center;">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin: 0 auto 1.5rem;">
                    <i class="fas fa-phone"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">Phone</h3>
                <p style="color: var(--text-light); margin-bottom: 1rem;">Call us directly for immediate assistance
                </p>
                <a href="tel:+919876543210"
                    style="color: var(--primary-color); font-weight: 600; font-size: 1.25rem;">+91 98765 43210</a>
                <p style="color: var(--text-light); margin-top: 0.5rem; font-size: 0.875rem;">Available Mon-Sat:
                    6AM-7PM IST</p>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); text-align: center;">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin: 0 auto 1.5rem;">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">Email</h3>
                <p style="color: var(--text-light); margin-bottom: 1rem;">Send us an email for detailed inquiries
                </p>
                <a href="mailto:info@adisheshyoga.com"
                    style="color: var(--primary-color); font-weight: 600; font-size: 1.25rem;">info@adisheshyoga.com</a>
                <p style="color: var(--text-light); margin-top: 0.5rem; font-size: 0.875rem;">We respond within 24
                    hours</p>
            </div>
            <div
                style="background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light); text-align: center;">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin: 0 auto 1.5rem;">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">Visit Us</h3>
                <p style="color: var(--text-light); margin-bottom: 1rem;">Come experience our center in person</p>
                <address
                    style="color: var(--primary-color); font-weight: 600; font-size: 1.25rem; font-style: normal;">
                    123 Serenity Lane, Rishikesh, India</address>
                <p style="color: var(--text-light); margin-top: 0.5rem; font-size: 0.875rem;">Open for visitors
                    daily: 9AM-5PM</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section style="padding: 4rem 0; background-color: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Send a Message</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Fill out the form below and we'll get back to you as soon as possible.</p>
        </div>

        <div
            style="max-width: 800px; margin: 0 auto; background: white; padding: 2rem; border-radius: 15px; box-shadow: var(--shadow-medium); border: 1px solid var(--border-light);">
            <form action="#" method="POST">
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem;">
                    <div>
                        <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Full Name
                            *</label>
                        <input type="text" id="name" name="name" required
                            style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); border-radius: 8px; font-family: inherit; font-size: 1rem;">
                    </div>
                    <div>
                        <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Email
                            Address *</label>
                        <input type="email" id="email" name="email" required
                            style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); border-radius: 8px; font-family: inherit; font-size: 1rem;">
                    </div>
                </div>
                <div
                    style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 1.5rem;">
                    <div>
                        <label for="phone" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Phone
                            Number</label>
                        <input type="tel" id="phone" name="phone"
                            style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); border-radius: 8px; font-family: inherit; font-size: 1rem;">
                    </div>
                    <div>
                        <label for="subject"
                            style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Subject *</label>
                        <select id="subject" name="subject" required
                            style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); border-radius: 8px; font-family: inherit; font-size: 1rem; background-color: white;">
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="booking">Retreat Booking</option>
                            <option value="classes">Regular Classes</option>
                            <option value="private">Private Sessions</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Your
                        Message *</label>
                    <textarea id="message" name="message" rows="6" required
                        style="width: 100%; padding: 0.75rem; border: 1px solid var(--border-light); border-radius: 8px; font-family: inherit; font-size: 1rem; resize: vertical;"></textarea>
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: flex; align-items: flex-start; gap: 0.5rem; cursor: pointer;">
                        <input type="checkbox" name="newsletter" style="margin-top: 0.25rem;">
                        <span style="color: var(--text-light);">Subscribe to our newsletter to receive updates on
                            new retreats, special offers, and yoga tips.</span>
                    </label>
                </div>
                <div style="text-align: center;">
                    <button type="submit"
                        style="background: linear-gradient(135deg, var(--primary-color), var(--primary-light)); color: white; border: none; padding: 0.75rem 2rem; border-radius: 50px; font-family: inherit; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem;">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Location Map -->
<section class="about-us">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Find Us</span>
            <h2>Our Location</h2>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-om">🕉️</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
        </div>

        <div
            style="max-width: 1000px; margin: 0 auto; background: white; padding: 1rem; border-radius: 15px; box-shadow: var(--shadow-light); border: 1px solid var(--border-light);">
            <!-- Replace with actual Google Maps embed code -->
            <div
                style="width: 100%; height: 450px; background-color: #f0f0f0; border-radius: 10px; display: flex; justify-content: center; align-items: center;">
                <p style="color: var(--text-light);">Google Maps Embed Placeholder - Replace with actual embed code
                </p>
            </div>
            <div style="padding: 1.5rem; text-align: center;">
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">How to Reach Us</h3>
                <p style="color: var(--text-light); margin-bottom: 1.5rem;">Our retreat center is located in the
                    serene foothills of the Himalayas, approximately 20 km from Rishikesh. The peaceful surroundings
                    provide the perfect environment for yoga and meditation.</p>
                <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem;">
                    <div style="text-align: left;">
                        <h4
                            style="font-weight: 600; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-plane" style="color: var(--primary-color);"></i>
                            <span>By Air</span>
                        </h4>
                        <p style="color: var(--text-light);">Nearest airport is Dehradun Airport (35 km). We can
                            arrange airport transfers.</p>
                    </div>
                    <div style="text-align: left;">
                        <h4
                            style="font-weight: 600; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-train" style="color: var(--primary-color);"></i>
                            <span>By Train</span>
                        </h4>
                        <p style="color: var(--text-light);">Haridwar Railway Station is the closest major station
                            (40 km).</p>
                    </div>
                    <div style="text-align: left;">
                        <h4
                            style="font-weight: 600; margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="fas fa-bus" style="color: var(--primary-color);"></i>
                            <span>By Bus</span>
                        </h4>
                        <p style="color: var(--text-light);">Regular buses connect from Delhi to Rishikesh (20 km
                            from our center).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Connect on Social Media -->
<section style="padding: 4rem 0; background-color: var(--background-light);">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Follow Us on Social Media</span>
            <div class="title-decoration">
                <div class="decoration-line"></div>
                <div class="decoration-lotus">🪷</div>
                <div class="decoration-line"></div>
            </div>
            <div class="divider"></div>
            <p>Join our community and stay updated with the latest news, events, and yoga inspiration.</p>
        </div>

        <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap; margin-bottom: 3rem;">
            <a href="#"
                style="display: flex; flex-direction: column; align-items: center; text-decoration: none; transition: all 0.3s ease;">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, #3b5998, #8b9dc3); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1rem;">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <span style="color: var(--text-dark); font-weight: 500;">Facebook</span>
            </a>
            <a href="#"
                style="display: flex; flex-direction: column; align-items: center; text-decoration: none; transition: all 0.3s ease;">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, #833AB4, #E1306C); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1rem;">
                    <i class="fab fa-instagram"></i>
                </div>
                <span style="color: var(--text-dark); font-weight: 500;">Instagram</span>
            </a>
            <a href="https://twitter.com/yourhandle" target="_blank"
                style="display: flex; flex-direction: column; align-items: center; text-decoration: none; transition: all 0.3s ease;">
                <div
                    style="width: 80px; height: 80px; background: #000000; border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1rem;">
                    <i class="fa-solid fa-x"></i>
                </div>
                <span style="color: var(--text-dark); font-weight: 500;">X</span>
            </a>

            <a href="https://www.linkedin.com/in/yourusername" target="_blank"
                style="display: flex; flex-direction: column; align-items: center; text-decoration: none; transition: all 0.3s ease;">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, #0077B5, #66A8D1); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1rem;">
                    <i class="fab fa-linkedin-in"></i>
                </div>
                <span style="color: var(--text-dark); font-weight: 500;">LinkedIn</span>
            </a>

            <a href="#"
                style="display: flex; flex-direction: column; align-items: center; text-decoration: none; transition: all 0.3s ease;">
                <div
                    style="width: 80px; height: 80px; background: linear-gradient(135deg, #FF0000, #FF6666); border-radius: 50%; display: flex; justify-content: center; align-items: center; color: white; font-size: 2rem; margin-bottom: 1rem;">
                    <i class="fab fa-youtube"></i>
                </div>
                <span style="color: var(--text-dark); font-weight: 500;">YouTube</span>
            </a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <span class="section-badge">Ready to Begin?</span>
            <h2>Start Your Yoga Journey Today</h2>
            <p>Transform your life with our immersive yoga retreats and classes. Book your spot now and embark on a
                journey of self-discovery and wellness.</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">
                    <span>Book a Retreat</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#" class="btn btn-outline-light">
                    <span>View Class Schedule</span>
                    <i class="fas fa-calendar"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection