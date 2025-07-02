@extends('layouts.app')

@section('content')


<!-- Privacy Policy Section -->
<section class="about-us">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="container">
        <div class="section-header">
            <h2>Privacy Policy</h2>
            <div class="divider"></div>
            <p><strong>Effective Date: January 1, 2025</strong></p>
            <p>At Adishesh Yoga, we prioritize your privacy. This policy outlines how we collect, use, and safeguard your personal information.</p>
        </div>

        <!-- Data Collection -->
        <div style="margin-bottom: 4rem;">
            <h3>Data Collection</h3>
            <p>We collect personal information to enhance your experience:</p>

            <div class="features-container" style="margin-top: 2rem;">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3>Personal Data</h3>
                    <ul class="program-features">
                        <li><i class="fas fa-check"></i> Full Name</li>
                        <li><i class="fas fa-check"></i> Email Address</li>
                        <li><i class="fas fa-check"></i> Contact Details</li>
                        <li><i class="fas fa-check"></i> Address (State, City, Province, ZIP/Postal Code)</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Usage Data</h3>
                    <ul class="program-features">
                        <li><i class="fas fa-check"></i> IP Address</li>
                        <li><i class="fas fa-check"></i> Browser Type and Version</li>
                        <li><i class="fas fa-check"></i> Pages Visited</li>
                        <li><i class="fas fa-check"></i> Time and Date of Visit</li>
                        <li><i class="fas fa-check"></i> Time Spent on Pages</li>
                        <li><i class="fas fa-check"></i> Device Identifiers</li>
                    </ul>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cookie-bite"></i>
                    </div>
                    <h3>Cookies</h3>
                    <ul class="program-features">
                        <li><i class="fas fa-check"></i> Session Cookies: Enable core functionalities</li>
                        <li><i class="fas fa-check"></i> Preference Cookies: Remember your settings</li>
                        <li><i class="fas fa-check"></i> Security Cookies: Ensure data protection</li>
                    </ul>
                    <p style="margin-top: 1rem; font-size: 0.9rem; color: var(--text-light);">Cookies are small files stored on your device to improve site functionality.</p>
                </div>
            </div>
        </div>

        <!-- Use of Your Data -->
        <div style="margin-bottom: 4rem;">
            <h3>Use of Your Data</h3>
            <p>We utilize your information to:</p>

            <div class="about-features" style="margin-top: 2rem;">
                <div class="feature-item">
                    <i class="fas fa-cogs"></i>
                    <span>Provide and maintain our services</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-bell"></i>
                    <span>Notify you about changes or updates</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-headset"></i>
                    <span>Offer customer support</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-analytics"></i>
                    <span>Monitor and analyze usage for improvements</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-tools"></i>
                    <span>Detect and address technical issues</span>
                </div>
            </div>
        </div>

        <!-- Additional Policies -->
        <div class="features-container">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3>Data Retention</h3>
                <p>We retain your personal data only as long as necessary for the purposes outlined in this policy. Usage data may be kept longer for analytical purposes.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Data Security</h3>
                <p>We implement industry-standard measures to protect your data. However, no method is 100% secure. We strive to use commercially acceptable means to safeguard your information.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-child"></i>
                </div>
                <h3>Children's Privacy</h3>
                <p>Our services are not intended for individuals under the age of 10. We do not knowingly collect data from children under 10. If you believe a child has provided us with personal information, please contact us immediately.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-edit"></i>
                </div>
                <h3>Changes to This Policy</h3>
                <p>We may update our privacy policy periodically. Any changes will be posted on this page, and, if significant, we will notify you via email.</p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="section-header" style="margin-top: 4rem;">
            <h3>Contact Us</h3>
            <p>For questions or concerns regarding this policy:</p>
            <div class="contact-item" style="justify-content: center; margin-top: 1rem;">
                <i class="fas fa-envelope" style="color: #044424;"></i>
                <span style="color: #044424;">adisheshyoga@gmail.com</span>
            </div>
        </div>

        <div class="section-header" style="margin-top: 3rem;">
            <p><em>By presenting the information in a clear, structured, and visually engaging manner, you enhance user understanding and trust. Incorporating icons and concise language can further improve readability and user experience.</em></p>
        </div>
    </div>
</section>

@endsection