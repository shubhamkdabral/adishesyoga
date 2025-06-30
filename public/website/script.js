document.addEventListener("DOMContentLoaded", () => {
  // Hero Carousel
  const carouselSlides = document.querySelectorAll(".carousel-slide")
  const dots = document.querySelectorAll(".carousel-dots .dot")
  let currentSlide = 0
  let carouselInterval

  function showSlide(index) {
    carouselSlides.forEach((slide) => {
      slide.classList.remove("active")
    })

    dots.forEach((dot) => {
      dot.classList.remove("active")
    })

    carouselSlides[index].classList.add("active")
    dots[index].classList.add("active")
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % carouselSlides.length
    showSlide(currentSlide)
  }

  function startCarousel() {
    carouselInterval = setInterval(nextSlide, 6000)
  }

  function stopCarousel() {
    clearInterval(carouselInterval)
  }

  // Add click event to dots
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      currentSlide = index
      showSlide(currentSlide)
      stopCarousel()
      startCarousel()
    })
  })

  // Start auto slide
  startCarousel()

  // Pause carousel on hover
  const carouselContainer = document.querySelector(".carousel-container")
  if (carouselContainer) {
    carouselContainer.addEventListener("mouseenter", stopCarousel)
    carouselContainer.addEventListener("mouseleave", startCarousel)
  }

  // Fixed Mobile Menu Toggle - Works on all pages
  const mobileMenuBtn = document.getElementById("mobile-menu-toggle")
  const navMenu = document.querySelector(".nav-menu")

  if (mobileMenuBtn && navMenu) {
    mobileMenuBtn.addEventListener("click", (e) => {
      e.preventDefault()
      navMenu.classList.toggle("active")
      const icon = mobileMenuBtn.querySelector("i")
      if (icon) {
        icon.classList.toggle("fa-bars")
        icon.classList.toggle("fa-times")
      }
    })

    // Close mobile menu when clicking on a link
    const navLinks = navMenu.querySelectorAll("a")
    navLinks.forEach((link) => {
      link.addEventListener("click", () => {
        navMenu.classList.remove("active")
        const icon = mobileMenuBtn.querySelector("i")
        if (icon) {
          icon.classList.add("fa-bars")
          icon.classList.remove("fa-times")
        }
      })
    })

    // Close mobile menu when clicking outside
    document.addEventListener("click", (e) => {
      if (!mobileMenuBtn.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove("active")
        const icon = mobileMenuBtn.querySelector("i")
        if (icon) {
          icon.classList.add("fa-bars")
          icon.classList.remove("fa-times")
        }
      }
    })
  }

  // Enhanced Testimonial Slider with Touch Support and Infinite Loop
  const testimonialTrack = document.querySelector(".testimonial-track")
  const testimonialCards = document.querySelectorAll(".testimonial-card:not(.clone)")
  const testimonialDots = document.querySelectorAll(".testimonial-dots .dot")
  const testimonialPrev = document.querySelector(".testimonial-slider .slider-prev")
  const testimonialNext = document.querySelector(".testimonial-slider .slider-next")

  if (testimonialTrack && testimonialCards.length > 0) {
    let currentTestimonialIndex = 0
    const cardWidth = 350 + 32
    const visibleCards = Math.floor(window.innerWidth / cardWidth) || 1
    const totalCards = testimonialCards.length

    // Touch/Swipe variables
    let testimonialStartX = 0
    let testimonialCurrentX = 0
    let testimonialIsDragging = false
    let testimonialStartTransform = 0

    function updateTestimonialSlider(smooth = true) {
      if (smooth) {
        testimonialTrack.style.transition = "transform 0.5s ease"
      } else {
        testimonialTrack.style.transition = "none"
      }

      const translateX = -currentTestimonialIndex * cardWidth
      testimonialTrack.style.transform = `translateX(${translateX}px)`

      // Update dots
      if (testimonialDots.length > 0) {
        const activeDotIndex = currentTestimonialIndex % totalCards
        testimonialDots.forEach((dot, index) => {
          dot.classList.toggle("active", index === activeDotIndex)
        })
      }

      // Check if we need to snap back to the beginning/end for infinite loop
      if (currentTestimonialIndex >= totalCards) {
        setTimeout(() => {
          currentTestimonialIndex = 0
          updateTestimonialSlider(false)
        }, 500)
      } else if (currentTestimonialIndex < 0) {
        setTimeout(() => {
          currentTestimonialIndex = totalCards - 1
          updateTestimonialSlider(false)
        }, 500)
      }
    }

    function nextTestimonialSlide() {
      currentTestimonialIndex++
      updateTestimonialSlider()
    }

    function prevTestimonialSlide() {
      currentTestimonialIndex--
      updateTestimonialSlider()
    }

    // Navigation buttons
    if (testimonialNext) {
      testimonialNext.addEventListener("click", nextTestimonialSlide)
    }
    if (testimonialPrev) {
      testimonialPrev.addEventListener("click", prevTestimonialSlide)
    }

    // Touch Events for Testimonials
    testimonialTrack.addEventListener("mousedown", startTestimonialDrag)
    testimonialTrack.addEventListener("touchstart", startTestimonialDrag)
    testimonialTrack.addEventListener("mousemove", testimonialDrag)
    testimonialTrack.addEventListener("touchmove", testimonialDrag)
    testimonialTrack.addEventListener("mouseup", endTestimonialDrag)
    testimonialTrack.addEventListener("touchend", endTestimonialDrag)
    testimonialTrack.addEventListener("mouseleave", endTestimonialDrag)

    function startTestimonialDrag(e) {
      testimonialIsDragging = true
      testimonialStartX = e.type === "mousedown" ? e.clientX : e.touches[0].clientX
      testimonialStartTransform = -currentTestimonialIndex * cardWidth
      testimonialTrack.style.transition = "none"
      clearInterval(testimonialInterval)
    }

    function testimonialDrag(e) {
      if (!testimonialIsDragging) return
      e.preventDefault()
      testimonialCurrentX = e.type === "mousemove" ? e.clientX : e.touches[0].clientX
      const diff = testimonialCurrentX - testimonialStartX
      const newTransform = testimonialStartTransform + diff
      testimonialTrack.style.transform = `translateX(${newTransform}px)`
    }

    function endTestimonialDrag() {
      if (!testimonialIsDragging) return
      testimonialIsDragging = false
      testimonialTrack.style.transition = "transform 0.5s ease"

      const diff = testimonialCurrentX - testimonialStartX
      const threshold = cardWidth / 3

      if (diff > threshold) {
        prevTestimonialSlide()
      } else if (diff < -threshold) {
        nextTestimonialSlide()
      } else {
        updateTestimonialSlider()
      }

      testimonialInterval = setInterval(nextTestimonialSlide, 4000)
    }

    // Add cursor styles for better UX
    testimonialTrack.style.cursor = "grab"

    testimonialTrack.addEventListener("mousedown", () => {
      testimonialTrack.style.cursor = "grabbing"
    })

    testimonialTrack.addEventListener("mouseup", () => {
      testimonialTrack.style.cursor = "grab"
    })

    // Auto slide testimonials with infinite loop
    let testimonialInterval = setInterval(nextTestimonialSlide, 4000)

    // Pause testimonial slider on hover
    const testimonialSlider = document.querySelector(".testimonial-slider")
    if (testimonialSlider) {
      testimonialSlider.addEventListener("mouseenter", () => {
        clearInterval(testimonialInterval)
      })

      testimonialSlider.addEventListener("mouseleave", () => {
        testimonialInterval = setInterval(nextTestimonialSlide, 4000)
      })
    }

    // Initialize testimonial slider
    updateTestimonialSlider(false)

    // Resize handler for testimonial slider
    window.addEventListener("resize", () => {
      const newVisibleCards = Math.floor(window.innerWidth / cardWidth) || 1
      if (currentTestimonialIndex >= totalCards) {
        currentTestimonialIndex = 0
      }
      updateTestimonialSlider(false)
    })
  }

  // Enhanced Team Slider with Touch Support and Infinite Loop
  const teamTrack = document.querySelector(".team-track")
  const teamCards = document.querySelectorAll(".team-card:not(.clone)")
  const teamDots = document.querySelectorAll(".team-dots .dot")
  const teamPrev = document.querySelector(".team-slider .slider-prev")
  const teamNext = document.querySelector(".team-slider .slider-next")

  if (teamTrack && teamCards.length > 0) {
    let currentTeamIndex = 0
    const teamCardWidth = 300 + 32
    const visibleTeamCards = Math.floor(window.innerWidth / teamCardWidth) || 1
    const totalTeamCards = teamCards.length

    // Touch/Swipe variables for team
    let teamStartX = 0
    let teamCurrentX = 0
    let teamIsDragging = false
    let teamStartTransform = 0

    function updateTeamSlider(smooth = true) {
      if (smooth) {
        teamTrack.style.transition = "transform 0.5s ease"
      } else {
        teamTrack.style.transition = "none"
      }

      const translateX = -currentTeamIndex * teamCardWidth
      teamTrack.style.transform = `translateX(${translateX}px)`

      // Update dots
      if (teamDots.length > 0) {
        const activeDotIndex = currentTeamIndex % totalTeamCards
        teamDots.forEach((dot, index) => {
          dot.classList.toggle("active", index === activeDotIndex)
        })
      }

      // Check if we need to snap back to the beginning/end for infinite loop
      if (currentTeamIndex >= totalTeamCards) {
        setTimeout(() => {
          currentTeamIndex = 0
          updateTeamSlider(false)
        }, 500)
      } else if (currentTeamIndex < 0) {
        setTimeout(() => {
          currentTeamIndex = totalTeamCards - 1
          updateTeamSlider(false)
        }, 500)
      }
    }

    function nextTeamSlide() {
      currentTeamIndex++
      updateTeamSlider()
    }

    function prevTeamSlide() {
      currentTeamIndex--
      updateTeamSlider()
    }

    // Navigation buttons
    if (teamNext) {
      teamNext.addEventListener("click", nextTeamSlide)
    }
    if (teamPrev) {
      teamPrev.addEventListener("click", prevTeamSlide)
    }

    // Touch Events for Team
    teamTrack.addEventListener("mousedown", startTeamDrag)
    teamTrack.addEventListener("touchstart", startTeamDrag)
    teamTrack.addEventListener("mousemove", teamDrag)
    teamTrack.addEventListener("touchmove", teamDrag)
    teamTrack.addEventListener("mouseup", endTeamDrag)
    teamTrack.addEventListener("touchend", endTeamDrag)
    teamTrack.addEventListener("mouseleave", endTeamDrag)

    function startTeamDrag(e) {
      teamIsDragging = true
      teamStartX = e.type === "mousedown" ? e.clientX : e.touches[0].clientX
      teamStartTransform = -currentTeamIndex * teamCardWidth
      teamTrack.style.transition = "none"
      clearInterval(teamInterval)
    }

    function teamDrag(e) {
      if (!teamIsDragging) return
      e.preventDefault()
      teamCurrentX = e.type === "mousemove" ? e.clientX : e.touches[0].clientX
      const diff = teamCurrentX - teamStartX
      const newTransform = teamStartTransform + diff
      teamTrack.style.transform = `translateX(${newTransform}px)`
    }

    function endTeamDrag() {
      if (!teamIsDragging) return
      teamIsDragging = false
      teamTrack.style.transition = "transform 0.5s ease"

      const diff = teamCurrentX - teamStartX
      const threshold = teamCardWidth / 3

      if (diff > threshold) {
        prevTeamSlide()
      } else if (diff < -threshold) {
        nextTeamSlide()
      } else {
        updateTeamSlider()
      }

      teamInterval = setInterval(nextTeamSlide, 5000)
    }

    // Add cursor styles for better UX
    teamTrack.style.cursor = "grab"

    teamTrack.addEventListener("mousedown", () => {
      teamTrack.style.cursor = "grabbing"
    })

    teamTrack.addEventListener("mouseup", () => {
      teamTrack.style.cursor = "grab"
    })

    // Auto slide team with infinite loop
    let teamInterval = setInterval(nextTeamSlide, 5000)

    // Pause team slider on hover
    const teamSlider = document.querySelector(".team-slider")
    if (teamSlider) {
      teamSlider.addEventListener("mouseenter", () => {
        clearInterval(teamInterval)
      })

      teamSlider.addEventListener("mouseleave", () => {
        teamInterval = setInterval(nextTeamSlide, 5000)
      })
    }

    // Initialize team slider
    updateTeamSlider(false)

    // Resize handler for team slider
    window.addEventListener("resize", () => {
      const newVisibleTeamCards = Math.floor(window.innerWidth / teamCardWidth) || 1
      if (currentTeamIndex >= totalTeamCards) {
        currentTeamIndex = 0
      }
      updateTeamSlider(false)
    })
  }

  // Enhanced FAQ Accordion
  const faqItems = document.querySelectorAll(".faq-item")

  faqItems.forEach((item) => {
    const question = item.querySelector(".faq-question")

    if (question) {
      question.addEventListener("click", () => {
        const isActive = item.classList.contains("active")

        // Close all FAQ items
        faqItems.forEach((faqItem) => {
          faqItem.classList.remove("active")
        })

        // Open clicked item if it wasn't active
        if (!isActive) {
          item.classList.add("active")
        }
      })
    }
  })

  // Smooth scrolling for navigation links
  const navLinks = document.querySelectorAll('a[href^="#"]')

  navLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      const targetId = link.getAttribute("href")
      if (targetId === "#") return

      e.preventDefault()
      const targetSection = document.querySelector(targetId)

      if (targetSection) {
        const offsetTop = targetSection.offsetTop - 100 // Account for fixed header
        window.scrollTo({
          top: offsetTop,
          behavior: "smooth",
        })

        // Close mobile menu if open
        if (navMenu) {
          navMenu.classList.remove("active")
          const icon = mobileMenuBtn?.querySelector("i")
          if (icon && icon.classList.contains("fa-times")) {
            icon.classList.add("fa-bars")
            icon.classList.remove("fa-times")
          }
        }
      }
    })
  })

  // Intersection Observer for animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("fade-in-up")
      }
    })
  }, observerOptions)

  // Observe elements for animation
  const animateElements = document.querySelectorAll(
    ".program-card, .feature-card, .stay-card, .testimonial-card, .stat-item",
  )

  animateElements.forEach((el) => {
    observer.observe(el)
  })

  // Enhanced button hover effects
  const buttons = document.querySelectorAll(".btn")
  buttons.forEach((button) => {
    button.addEventListener("mouseenter", () => {
      const icon = button.querySelector("i")
      if (icon) {
        icon.style.transform = "translateX(3px)"
      }
    })

    button.addEventListener("mouseleave", () => {
      const icon = button.querySelector("i")
      if (icon) {
        icon.style.transform = "translateX(0)"
      }
    })
  })

  // Add smooth animations for the logo circle
  const logoCircle = document.querySelector(".logo-circle")
  if (logoCircle) {
    logoCircle.addEventListener("mouseenter", () => {
      logoCircle.style.transform = "scale(1.1) rotate(10deg)"
    })

    logoCircle.addEventListener("mouseleave", () => {
      logoCircle.style.transform = "scale(1) rotate(0deg)"
    })
  }

  // Enhanced parallax effect for all mandalas
  window.addEventListener("scroll", () => {
    const scrolled = window.pageYOffset
    const omMandalas = document.querySelectorAll(".om-mandala")
    const mandalas = document.querySelectorAll(".mandala-decoration")

    omMandalas.forEach((mandala, index) => {
      const speed = 0.2 + index * 0.05
      mandala.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`
    })

    mandalas.forEach((mandala, index) => {
      const speed = 0.15 + index * 0.03
      mandala.style.transform = `translateY(${scrolled * speed}px) rotate(${-scrolled * 0.05}deg)`
    })
  })

  // Modern FAQ Cards
  const faqCards = document.querySelectorAll(".faq-card")

  faqCards.forEach((card) => {
    const header = card.querySelector(".faq-card-header")

    if (header) {
      header.addEventListener("click", () => {
        const isActive = card.classList.contains("active")

        // Close all other FAQ cards
        faqCards.forEach((otherCard) => {
          if (otherCard !== card) {
            otherCard.classList.remove("active")
          }
        })

        // Toggle current card
        if (isActive) {
          card.classList.remove("active")
        } else {
          card.classList.add("active")
        }
      })
    }
  })

  // Category Card Navigation
  const categoryCards = document.querySelectorAll(".category-card")

  categoryCards.forEach((card) => {
    card.addEventListener("click", () => {
      const category = card.getAttribute("data-category")
      const targetSection = document.getElementById(category)

      if (targetSection) {
        const offsetTop = targetSection.offsetTop - 100
        window.scrollTo({
          top: offsetTop,
          behavior: "smooth",
        })
      }
    })
  })

  // FAQ Search Functionality
  const searchInput = document.getElementById("faq-search")
  const searchSuggestions = document.getElementById("search-suggestions")

  if (searchInput) {
    searchInput.addEventListener("input", (e) => {
      const searchTerm = e.target.value.toLowerCase()

      if (searchTerm.length > 2) {
        // Filter FAQ cards based on search term
        faqCards.forEach((card) => {
          const question = card.querySelector("h3").textContent.toLowerCase()
          const answer = card.querySelector("p").textContent.toLowerCase()

          if (question.includes(searchTerm) || answer.includes(searchTerm)) {
            card.style.display = "block"
            // Highlight search terms (optional)
            highlightSearchTerm(card, searchTerm)
          } else {
            card.style.display = "none"
          }
        })
      } else {
        // Show all cards if search term is too short
        faqCards.forEach((card) => {
          card.style.display = "block"
          removeHighlight(card)
        })
      }
    })
  }

  // Helper function to highlight search terms
  function highlightSearchTerm(card, term) {
    const question = card.querySelector("h3")
    const answer = card.querySelector("p")

    if (question && answer) {
      const questionText = question.textContent
      const answerText = answer.textContent

      const highlightedQuestion = questionText.replace(new RegExp(term, "gi"), `<mark>$&</mark>`)
      const highlightedAnswer = answerText.replace(new RegExp(term, "gi"), `<mark>$&</mark>`)

      question.innerHTML = highlightedQuestion
      answer.innerHTML = highlightedAnswer
    }
  }

  // Helper function to remove highlights
  function removeHighlight(card) {
    const question = card.querySelector("h3")
    const answer = card.querySelector("p")

    if (question && answer) {
      question.innerHTML = question.textContent
      answer.innerHTML = answer.textContent
    }
  }

  // Smooth scroll for category navigation
  const categoryLinks = document.querySelectorAll("[data-category]")

  categoryLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault()
      const targetId = link.getAttribute("data-category")
      const targetElement = document.getElementById(targetId)

      if (targetElement) {
        const offsetTop = targetElement.offsetTop - 100
        window.scrollTo({
          top: offsetTop,
          behavior: "smooth",
        })
      }
    })
  })

  // Add floating animation to elements
  const floatingElements = document.querySelectorAll(".floating-element")

  floatingElements.forEach((element, index) => { })
})

