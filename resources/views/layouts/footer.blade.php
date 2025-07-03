 <!-- Footer -->
 <footer>
     <div class="container">
         <div class="footer-content">
             <div class="footer-logo">
                 <div class="logo-circle footer-logo-circle">
                     <img src="{{ asset('storage/logo.png') }}" alt="Adishesh Yoga Logo">
                 </div>
                 <h3>Adishesh Yoga</h3>
                 <p>At Adishesh Yoga School, we are more than just a yoga training center — we are a
                     community rooted in ancient wisdom, dedicated to transforming lives through the holistic
                     practice of yoga. Founded with the intention of sharing authentic yogic knowledge, we blend
                     tradition with modern teaching techniques to create a nurturing environment for growth,
                     healing, and self-discovery.</p>
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
                     <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                     <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                     <li><a href="{{ route('refund-policy') }}">Refund Policy</a></li>
                     <li><a href="{{ route('terms-of-service') }}">Term of service</a></li>
                 </ul>
             </div>
             <div class="footer-programs">
                 <h4>Programs</h4>
                 <ul>
                     <li><a href="{{ route('himalayan-hiking') }}">9 Day Himalayan Hiking Yoga</a></li>
                     <li><a href="{{ route('kundalini-yoga') }}">7 Days Kundalini Yoga</a></li>
                     <li><a href="{{ route('hatha-yoga') }}">7 Days Hatha Yoga</a></li>
                 </ul>
             </div>
             <div class="footer-contact">
                 <h4>Contact Us</h4>
                 <div class="contact-item">
                     <i class="fas fa-map-marker-alt"></i>
                     <span>123 Serenity Lane, Peaceful City, PC 12345</span>
                 </div>
                 <div class="contact-item">
                     <i class="fas fa-phone"></i>
                     <span>(555) 123-4567</span>
                 </div>
                 <div class="contact-item">
                     <i class="fas fa-envelope"></i>
                     <span>info@serenityyoga.com</span>
                 </div>
                 <div class="contact-item">
                     <i class="fas fa-clock"></i>
                     <span>Mon-Fri: 9AM-6PM</span>
                 </div>
             </div>
         </div>
         <div class="footer-bottom">
             <p>&copy; 2023 Serenity Yoga. All Rights Reserved.</p>
             <div class="footer-bottom-links">
                 <a href="{{ route('privacy-policy')}}">Privacy Policy</a>
                 <a href="{{ route('terms-of-service')}}">Terms of Service</a>
             </div>
         </div>
     </div>
 </footer>