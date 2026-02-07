<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute of Earth Sciences and Technology (IEST)</title>
     <link rel="icon" sizes="192x192" href="images/logo.png" type="image/png"/>
    <link rel="shortcut icon" href="images/logo.png" type="image/png"/>
    <link rel="apple-touch-icon" href="images/logo.png" type="image/png"/>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Swiper.js CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- Scoped CSS - All styles are inside .iest-site -->
    
</head>
<body>
    <!-- Main wrapper with .iest-site class to scope all styles -->
    <div class="iest-site">
        
        <!-- 1️⃣ Header / Navbar -->
        <header>
            <nav class="navbar navbar-expand-lg iest-navbar fixed-top">
                <div class="container">
                    <a class="navbar-brand iest-navbar-brand" href="#">
                        <img src="images/logo-sm.jpg" width="70px"  class="img-fluid" alt="Institute of Earth Sciences and Technology Logo">
                        <!-- <span>Institute of Earth Sciences and Technology</span> -->
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#iestNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="iestNavbar">
                        <?php  include_once('include/navbar.php') ?>
                    </div>
                </div>
            </nav>
        </header>

        <!-- 🎞️ 2️⃣ Hero Section – IMAGE CAROUSEL -->
        <section id="home" class="iest-hero-section">
            <div class="swiper iest-hero-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="iest-hero-slide" style="background-image: url(images/slider/slider1.jpg);" 
                             role="img" aria-label="Modern university campus with students walking">
                            <div class="iest-hero-overlay">
                                <div class="container iest-hero-content">
                                    <h1 class="iest-hero-title">Institute of Earth Sciences and Technology (IEST)</h1>
                                    <p class="iest-hero-subtitle">Empowering future generations through Earth Sciences, Technology, and multidisciplinary education</p>
                                    <button class="btn iest-hero-btn">Explore Programmes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="iest-hero-slide" style="background-image: url('images/slider/slider2.jpg');" 
                             role="img" aria-label="Students collaborating in a modern laboratory">
                            <div class="iest-hero-overlay">
                                <div class="container iest-hero-content">
                                    <h1 class="iest-hero-title">World-Class Education in Earth Sciences</h1>
                                    <p class="iest-hero-subtitle">Join a community of innovators, researchers, and leaders shaping the future of our planet</p>
                                    <button class="btn iest-hero-btn">Discover Our Courses</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="iest-hero-slide" style="background-image: url('images/slider/slider3.jpg');" 
                             role="img" aria-label="University library with students studying">
                            <div class="iest-hero-overlay">
                                <div class="container iest-hero-content">
                                    <h1 class="iest-hero-title">Innovative Learning Environment</h1>
                                    <p class="iest-hero-subtitle">State-of-the-art facilities and expert faculty dedicated to your academic success</p>
                                    <button id="Applynow" data-type='Direct Apply from Website' class="btn iest-hero-btn Applynow">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                
                <!-- Pagination Dots -->
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- 3️⃣ About IEST -->
        <section id="about" class="iest-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="iest-section-title">About IEST</h2>
                        <p class="iest-about-text mb-4">
                            The Institute of Earth Sciences and Technology (IEST) is a premier higher education institution dedicated to excellence in teaching, research, and innovation in the fields of Earth Sciences, Environmental Technology, and related disciplines.
                        </p>
                        <p class="iest-about-text mb-4">
                            Founded with the vision of creating a sustainable future through education, IEST combines rigorous academic programmes with practical, hands-on learning experiences. Our multidisciplinary approach prepares students to address complex global challenges.
                        </p>
                        <p class="iest-about-text">
                            With accreditation from national regulatory bodies and collaborations with leading international universities, IEST offers globally recognized qualifications that open doors to rewarding careers worldwide.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="images/about.jpg" 
                             alt="IEST campus modern building" class="iest-about-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- 🎓 4️⃣ Faculties Section (Slider) -->
        <section id="faculties" class="iest-section iest-section-light">
            <div class="container">
                <h2 class="text-center iest-section-title">Our Faculties</h2>
                <p class="text-center iest-section-subtitle">Explore our comprehensive range of academic faculties offering specialized programmes</p>
                
                <div class="swiper iest-faculty-slider">
                    <div class="swiper-wrapper">
                        <!-- Faculty of Science -->
                        <div class="swiper-slide">
                            <div class="iest-faculty-card">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                                <h3 class="iest-faculty-title">Faculty of Science</h3>
                                <p class="iest-faculty-desc">Earth Sciences, Environmental Science, Physics, Chemistry, Biology, and Mathematics</p>
                            </div>
                        </div>
                        
                        <!-- Faculty of Health Sciences -->
                        <div class="swiper-slide">
                            <div class="iest-faculty-card">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <h3 class="iest-faculty-title">Faculty of Health Sciences</h3>
                                <p class="iest-faculty-desc">Public Health, Medical Laboratory Science, Nutrition, and Health Technology</p>
                            </div>
                        </div>
                        
                        <!-- Faculty of Engineering & Technology -->
                        <div class="swiper-slide">
                            <div class="iest-faculty-card">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3 class="iest-faculty-title">Faculty of Engineering & Technology</h3>
                                <p class="iest-faculty-desc">Environmental Engineering, Geoinformatics, Renewable Energy, and Civil Engineering</p>
                            </div>
                        </div>
                        
                        <!-- Faculty of Agriculture -->
                        <div class="swiper-slide">
                            <div class="iest-faculty-card">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-tractor"></i>
                                </div>
                                <h3 class="iest-faculty-title">Faculty of Agriculture</h3>
                                <p class="iest-faculty-desc">Agronomy, Horticulture, Soil Science, Agricultural Technology, and Food Security</p>
                            </div>
                        </div>
                        
                        <!-- Faculty of Management -->
                        <div class="swiper-slide">
                            <div class="iest-faculty-card">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3 class="iest-faculty-title">Faculty of Management</h3>
                                <p class="iest-faculty-desc">Business Administration, Environmental Management, Finance, and Entrepreneurship</p>
                            </div>
                        </div>
                        
                        <!-- Faculty of Education -->
                        <div class="swiper-slide">
                            <div class="iest-faculty-card">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h3 class="iest-faculty-title">Faculty of Education</h3>
                                <p class="iest-faculty-desc">Teacher Education, Educational Leadership, Curriculum Development, and Pedagogy</p>
                            </div>
                        </div>
                        
                        <!-- Faculty of Law -->
                        <div class="swiper-slide">
                            <div class="iest-faculty-card">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <h3 class="iest-faculty-title">Faculty of Law</h3>
                                <p class="iest-faculty-desc">Environmental Law, International Law, Corporate Law, and Human Rights</p>
                            </div>
                        </div>
                        
                        <!-- Faculty of Social Sciences and Languages -->
                        <div class="swiper-slide">
                            <div class="iest-faculty-card">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <h3 class="iest-faculty-title">Faculty of Social Sciences & Languages</h3>
                                <p class="iest-faculty-desc">Sociology, Psychology, International Relations, and Language Studies</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- 📚 5️⃣ Programmes Section (Slider) -->
        <section id="programmes" class="iest-section">
            <div class="container">
                <h2 class="text-center iest-section-title">Our Programmes</h2>
                <p class="text-center iest-section-subtitle">Choose from a wide range of accredited programmes designed for career success</p>
                
                <div class="swiper iest-programme-slider">
                    <div class="swiper-wrapper">
                        <!-- Certificate Courses -->
                        <div class="swiper-slide">
                            <div class="iest-programme-card">
                                <div class="iest-programme-icon">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <h3 class="iest-programme-title">Certificate Courses</h3>
                                <p class="iest-programme-desc">Short-term specialized courses in Earth Sciences, GIS Technology, Environmental Management, and Sustainable Development. Ideal for professional development and skill enhancement.</p>
                                <!-- <button class="btn iest-programme-btn">View Details</button> -->
                            </div>
                        </div>
                        
                        <!-- Diploma Programmes -->
                        <div class="swiper-slide">
                            <div class="iest-programme-card">
                                <div class="iest-programme-icon">
                                    <i class="fas fa-diploma"></i>
                                </div>
                                <h3 class="iest-programme-title">Diploma Programmes</h3>
                                <p class="iest-programme-desc">Comprehensive 1-2 year diploma programmes providing foundational knowledge and practical skills in specialized areas of Earth Sciences and Technology.</p>
                                <!-- <button class="btn iest-programme-btn">View Details</button> -->
                            </div>
                        </div>
                        
                        <!-- Undergraduate Degree Programmes -->
                        <div class="swiper-slide">
                            <div class="iest-programme-card">
                                <div class="iest-programme-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <h3 class="iest-programme-title">Undergraduate Degrees</h3>
                                <p class="iest-programme-desc">Bachelor's degrees in Earth Sciences, Environmental Engineering, Geoinformatics, and related disciplines with industry placements and research opportunities.</p>
                                <!-- <button class="btn iest-programme-btn">View Details</button> -->
                            </div>
                        </div>
                        
                        <!-- Postgraduate Programmes -->
                        <div class="swiper-slide">
                            <div class="iest-programme-card">
                                <div class="iest-programme-icon">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <h3 class="iest-programme-title">Postgraduate Programmes</h3>
                                <p class="iest-programme-desc">Master's and doctoral programmes for advanced specialization and research in cutting-edge areas of Earth Sciences, Environmental Technology, and Sustainability.</p>
                                <!-- <button class="btn iest-programme-btn">View Details</button> -->
                            </div>
                        </div>
                        
                        <!-- Professional Development Courses -->
                        <div class="swiper-slide">
                            <div class="iest-programme-card">
                                <div class="iest-programme-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <h3 class="iest-programme-title">Professional Development</h3>
                                <p class="iest-programme-desc">Industry-focused short courses, workshops, and executive education programmes designed for working professionals seeking career advancement.</p>
                                <!-- <button class="btn iest-programme-btn">View Details</button> -->
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- 6️⃣ Study Modes -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <h2 class="text-center iest-section-title">Flexible Study Modes</h2>
                <p class="text-center iest-section-subtitle mb-5">Choose the learning format that fits your lifestyle and commitments</p>
                
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="iest-study-card">
                            <div class="iest-study-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <h3 class="iest-study-title">Online (Live via Zoom)</h3>
                            <p class="iest-study-desc">Attend live, interactive classes from anywhere in the world. Real-time engagement with instructors and classmates with flexible scheduling options.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="iest-study-card">
                            <div class="iest-study-icon">
                                <i class="fas fa-blender-phone"></i>
                            </div>
                            <h3 class="iest-study-title">Blended Learning</h3>
                            <p class="iest-study-desc">Combine online learning with occasional on-campus sessions for hands-on experience, laboratory work, and face-to-face networking opportunities.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="iest-study-card">
                            <div class="iest-study-icon">
                                <i class="fas fa-file-video"></i>
                            </div>
                            <h3 class="iest-study-title">Recorded Lectures & Digital Materials</h3>
                            <p class="iest-study-desc">Access comprehensive digital resources, recorded lectures, and interactive materials for self-paced learning at your convenience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7️⃣ Why Choose IEST -->
        <section class="iest-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="iest-section-title mb-4">Why Choose IEST?</h2>
                        <p class="mb-4">Join a community of learners and innovators at one of the leading institutions for Earth Sciences and Technology education.</p>
                        
                        <div class="iest-why-item">
                            <div class="iest-why-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iest-why-text">UGC-recognized programmes with international accreditation</div>
                        </div>
                        
                        <div class="iest-why-item">
                            <div class="iest-why-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iest-why-text">Collaborations with world-ranked universities for student exchange and research</div>
                        </div>
                        
                        <div class="iest-why-item">
                            <div class="iest-why-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iest-why-text">Experienced lecture panel with industry and academic expertise</div>
                        </div>
                        
                        <div class="iest-why-item">
                            <div class="iest-why-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iest-why-text">Flexible study options and payment plans to suit diverse needs</div>
                        </div>
                        
                        <div class="iest-why-item">
                            <div class="iest-why-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iest-why-text">Student-friendly academic environment with modern facilities and support services</div>
                        </div>
                        
                        <div class="iest-why-item">
                            <div class="iest-why-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iest-why-text">Career guidance, internship opportunities, and industry placement assistance</div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <img src="images/why_choose.jpg" 
                             alt="Students collaborating in a modern classroom" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- 8️⃣ Call to Action -->
        <section class="iest-cta">
            <div class="container">
                <h2 class="iest-cta-title">Start Your Academic Journey with IEST</h2>
                <p class="iest-cta-subtitle">Join thousands of successful graduates who have transformed their careers through our innovative programmes and expert guidance.</p>
                <a href="contact.php" class="btn iest-cta-btn">Contact Us Today</a>
            </div>
        </section>

        <!-- 9️⃣ Footer -->
        <?php  include_once('include/footer.php') ?>
       
    </div>

   

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <!-- Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
     <script>
        $(document).ready(function () {

            $('.Applynow').on('click', function () {
                $('#quickContactModal').modal('show');
                $('#BookingModalLabel').text('Apply Now - Quick Contact Form');
                $('#type').val($(this).data('type'));
            });

            $('#submitBook').on('click', function () {
                let name = $('#fullName').val().trim();
                let email = $('#email').val().trim();
                let phone = $('#phone').val().trim();
                let type = $('#type').val().trim();

                // Validation
                if (name === '' || email === '' || phone === '' ) {
                    showMessage('⚠️ Please fill all required fields.', 'danger');
                    return;
                }

                // Fake AJAX (connect backend later)
                $.ajax({
                    url: "send-apply-email.php",
                    type: 'POST',
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        type: type,
                        message: $('#message').val()
                    },
                    beforeSend: function () {
                        showMessage('⏳ Sending your request...', 'info');
                    },
                    success: function (response) {
                        showMessage('✅ ' + response.message, 'success');
                        $('#quickBookForm')[0].reset();
                    },
                    error: function () {
                        showMessage('❌ Submission failed. Please try again.', 'danger');
                    }
                });
            });

           
            

            function showMessage(msg, type) {
                $('#formMessage')
                    .removeClass('d-none alert-success alert-danger alert-info')
                    .addClass('alert alert-' + type)
                    .html(msg);
            }

        });
        </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set current year in footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // Navbar scroll effect
            const navbar = document.querySelector('.iest-site .iest-navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
            
            // 1. Initialize Hero Carousel (Swiper.js)
            const heroSlider = new Swiper('.iest-site .iest-hero-slider', {
                // Configuration
                loop: true,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                speed: 800,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                
                // Pagination
                pagination: {
                    el: '.iest-hero-slider .swiper-pagination',
                    clickable: true,
                },
                
                // Navigation arrows
                navigation: {
                    nextEl: '.iest-hero-slider .swiper-button-next',
                    prevEl: '.iest-hero-slider .swiper-button-prev',
                },
                
                // Accessibility
                a11y: {
                    prevSlideMessage: 'Previous slide',
                    nextSlideMessage: 'Next slide',
                    paginationBulletMessage: 'Go to slide {{index}}',
                },
                
                // Keyboard navigation
                keyboard: {
                    enabled: true,
                },
            });
            
            // 2. Initialize Faculty Slider (Swiper.js)
            const facultySlider = new Swiper('.iest-site .iest-faculty-slider', {
                // Configuration
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                
                // Navigation arrows
                navigation: {
                    nextEl: '.iest-faculty-slider .swiper-button-next',
                    prevEl: '.iest-faculty-slider .swiper-button-prev',
                },
                
                // Pagination
                pagination: {
                    el: '.iest-faculty-slider .swiper-pagination',
                    clickable: true,
                },
                
                // Responsive breakpoints
                breakpoints: {
                    // Mobile (default: 1 slide)
                    576: {
                        slidesPerView: 2,
                    },
                    // Tablet
                    768: {
                        slidesPerView: 2,
                    },
                    // Desktop
                    992: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 4,
                    }
                }
            });
            
            // 3. Initialize Programme Slider (Swiper.js)
            const programmeSlider = new Swiper('.iest-site .iest-programme-slider', {
                // Configuration
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                
                // Navigation arrows
                navigation: {
                    nextEl: '.iest-programme-slider .swiper-button-next',
                    prevEl: '.iest-programme-slider .swiper-button-prev',
                },
                
                // Pagination
                pagination: {
                    el: '.iest-programme-slider .swiper-pagination',
                    clickable: true,
                },
                
                // Responsive breakpoints
                breakpoints: {
                    // Tablet
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    // Desktop
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 25,
                    }
                }
            });
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('.iest-site a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        // Close mobile navbar if open
                        const navbarCollapse = document.querySelector('.iest-site .navbar-collapse.show');
                        if (navbarCollapse) {
                            const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                            bsCollapse.hide();
                        }
                        
                        // Smooth scroll to target
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            // Update active nav link on scroll
            function updateActiveNavLink() {
                const sections = document.querySelectorAll('.iest-section, .iest-hero-section, .iest-cta');
                const navLinks = document.querySelectorAll('.iest-site .iest-nav-link');
                
                let currentSection = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (window.scrollY >= (sectionTop - 100)) {
                        currentSection = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${currentSection}`) {
                        link.classList.add('active');
                    }
                });
            }
            
            // Initial call and add scroll event listener
            updateActiveNavLink();
            window.addEventListener('scroll', updateActiveNavLink);
        });
    </script>
</body>
</html>