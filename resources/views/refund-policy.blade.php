@extends('layouts.app')

@section('content')

<!-- Refund Policy Section -->
<section class="about-us">
    <div class="section-mandala about-mandala-top-right"></div>
    <div class="container">
        <div class="section-header">
            <h2>♀ Refund & Cancellation Policy</h2>
            <div class="divider"></div>
            <p><strong>Effective Date: January 1, 2025</strong></p>
            <p>At Adishesh Yoga, we deeply value your commitment and understand the significance of your time and investment. Our policies are designed to be transparent and fair, ensuring a smooth experience for all participants.</p>
        </div>

        <!-- General Terms -->
        <div style="margin-bottom: 4rem;">
            <h3>General Terms</h3>
            <div class="features-container" style="margin-top: 2rem;">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-ban"></i>
                    </div>
                    <h3>Non-Refundable Policy</h3>
                    <p>All course and retreat bookings are non-refundable. By enrolling, you acknowledge and accept this policy.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <h3>Credit Towards Future Courses</h3>
                    <p>In lieu of refunds, credits may be applied to future courses under specific conditions outlined below.</p>
                </div>
            </div>
        </div>

        <!-- Cancellation Before Course -->
        <div style="margin-bottom: 4rem;">
            <h3>Cancellation Before Course Commencement</h3>
            <div class="about-features" style="margin-top: 2rem;">
                <div class="feature-item">
                    <i class="fas fa-times-circle"></i>
                    <span><strong>Standard Cancellations:</strong> No refunds will be issued for cancellations.</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span><strong>Emergency Situations:</strong> In genuine emergencies, if notified at least 30 days prior to the course start date, participants may:</span>
                </div>
            </div>

            <div style="margin-left: 2rem; margin-top: 1rem;">
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-arrow-right"></i>
                        <span>Transfer their enrolment to the next available batch within one year</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-arrow-right"></i>
                        <span>Nominate a friend or relative to attend in their place, subject to administrative approval</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rescheduling & Transfers -->
        <div style="margin-bottom: 4rem;">
            <h3>Rescheduling & Transfers</h3>
            <div class="features-container" style="margin-top: 2rem;">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-times"></i>
                    </div>
                    <h3>No-Show Policy</h3>
                    <p>If a participant fails to attend without prior notice, the registration fee is forfeited. However, the amount paid can be applied to another course within 12 months from the original enrolment date.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3>Transfer to Another Course</h3>
                    <p>Participants may transfer to a different course within one year, provided:</p>
                    <ul class="program-features" style="margin-top: 1rem;">
                        <li><i class="fas fa-check"></i> The request is made at least 30 days before the original course start date</li>
                        <li><i class="fas fa-check"></i> The desired course has available seats</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Cancellation After Course -->
        <div style="margin-bottom: 4rem;">
            <h3>Cancellation After Course Commencement</h3>
            <div class="features-container" style="margin-top: 2rem;">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-play"></i>
                    </div>
                    <h3>Post-Start Cancellations</h3>
                    <p>Once the course has begun, no refunds will be provided.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-door-open"></i>
                    </div>
                    <h3>Early Departures</h3>
                    <p>Participants leaving the course early due to personal reasons, including medical emergencies, will not receive refunds. This policy is in place as accommodations, meals, and resources are allocated in advance.</p>
                </div>
            </div>
        </div>

        <!-- Conduct & Dismissal -->
        <div style="margin-bottom: 4rem;">
            <h3>Conduct & Dismissal</h3>
            <div class="features-container" style="margin-top: 2rem;">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3>Code of Conduct</h3>
                    <p>Adishesh Yoga reserves the right to dismiss any participant for misconduct or violation of policies, without refund.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-ban"></i>
                    </div>
                    <h3>Unlawful Activities</h3>
                    <p>Engaging in illegal activities will result in immediate termination from the program, with no refund issued.</p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="section-header" style="margin-top: 4rem;">
            <h3>Contact Us</h3>
            <p>For any queries or further clarification:</p>
            <div class="contact-item" style="justify-content: center; margin-top: 1rem;">
                <i class="fas fa-envelope"></i>
                <span>adisheshyoga@gmail.com</span>
            </div>
        </div>
    </div>
</section>


@endsection