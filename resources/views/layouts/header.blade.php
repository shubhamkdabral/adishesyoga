   <!-- OM Mandala Background Elements -->
   <div class="om-mandala om-1"></div>
   <div class="om-mandala om-2"></div>
   <div class="om-mandala om-3"></div>
   <div class="om-mandala om-4"></div>
   <div class="om-mandala om-5"></div>

   <!-- Additional Mandala Background Elements -->
   <div class="mandala-decoration mandala-1"></div>
   <div class="mandala-decoration mandala-2"></div>
   <div class="mandala-decoration mandala-3"></div>
   <div class="mandala-decoration mandala-4"></div>
   <div class="mandala-decoration mandala-5"></div>
   <div class="mandala-decoration mandala-6"></div>

   <!-- Header Section with Navigation -->
   <header>
       <div class="container">
           <div class="header-content">
               <div class="logo">
                   <div class="logo-circle">
                       <img src="{{ asset('storage/logo.png') }}" alt="Adishesh Yoga Logo">
                   </div>
                   <div class="logo-text">
                       <h1>Adishesh Yoga</h1>
                       <span>Find Your Inner Peace</span>
                   </div>
               </div>
               <nav>
                   <ul class="nav-menu">
                       <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a></li>

                       <li class="nav-dropdown">
                           <a href="#" class="dropdown-toggle {{ in_array(Route::currentRouteName(), ['who-we-are', 'food-and-accommodation']) ? 'active' : '' }}">
                               About Us
                               <i class="fas fa-chevron-down dropdown-arrow"></i>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="{{ route('who-we-are') }}" class="{{ Route::currentRouteName() === 'who-we-are' ? 'active' : '' }}">Who We Are</a></li>
                               <li><a href="{{ route('founders') }}" class="{{ Route::currentRouteName() === 'founders' ? 'active' : '' }}">Our Founders</a></li>
                               <li><a href="{{ route('our-teacher') }}" class="{{ Route::currentRouteName() === 'our-teacher' ? 'active' : '' }}">Our Teachers & Team</a></li>
                               <li><a href="{{ route('food-and-accommodation') }}" class="{{ Route::currentRouteName() === 'food-and-accommodation' ? 'active' : '' }}">Food and Accommodation</a></li>
                               <li><a href="{{ route('privacy-policy') }}" class="{{ Route::currentRouteName() === 'privacy-policy' ? 'active' : '' }}">Privacy Policy</a></li>
                           </ul>
                       </li>

                       <li class="nav-dropdown">
                           <a href="#" class="dropdown-toggle {{ in_array(Route::currentRouteName(), ['who-we-are', 'food-and-accommodation']) ? 'active' : '' }}">
                               Retreat Programs
                               <i class="fas fa-chevron-down dropdown-arrow"></i>
                           </a>
                           <ul class="dropdown-menu">
                               <li><a href="{{ route('himalayan-hiking') }}" class="{{ Route::currentRouteName() === 'himalayan-hiking' ? 'active' : '' }}">9 Day Himalayan Hiking Yoga</a></li>
                               <li><a href="{{ route('kundalini-yoga') }}" class="{{ Route::currentRouteName() === 'kundalini-yoga' ? 'active' : '' }}">7 Days Kundalini Yoga</a></li>
                               <li><a href="{{ route('hatha-yoga') }}" class="{{ Route::currentRouteName() === 'hatha-yoga' ? 'active' : '' }}">7 Days Hatha Yoga</a></li>
                           </ul>
                       </li>

                       <li><a href="{{ route('faqs') }}" class="{{ Route::currentRouteName() === 'faqs' ? 'active' : '' }}">Faqs</a></li>
                       <li><a href="{{ route('contact-us') }}" class="{{ Route::currentRouteName() === 'contact-us' ? 'active' : '' }}">Contact Us</a></li>

                       <li class="mobile-only"><a href="#" class="nav-book-btn"><i class="fas fa-calendar-check"></i>
                               Apply Now</a></li>
                   </ul>
                   <div class="header-right">
                       <a href="#" class="btn btn-primary desktop-only">
                           <i class="fas fa-calendar-check"></i>
                           <span>Apply Now</span>
                       </a>
                       <div class="mobile-menu" id="mobile-menu-toggle">
                           <i class="fas fa-bars"></i>
                       </div>
                   </div>
               </nav>
           </div>
       </div>
   </header>