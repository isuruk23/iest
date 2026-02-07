<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Modes - Institute of Earth Sciences and Technology (IEST)</title>
     <link rel="icon" sizes="192x192" href="images/logo.png" type="image/png"/>
    <link rel="shortcut icon" href="images/logo.png" type="image/png"/>
    <link rel="apple-touch-icon" href="images/logo.png" type="image/png"/>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Scoped CSS - All styles are inside .iest-site -->
      <link rel="stylesheet" href="css/styles.css">

</head>
<body>
    <!-- Main wrapper with .iest-site class to scope all styles -->
    <div class="iest-site">
        
        <!-- Navigation Header -->
        <header>
            <nav class="navbar navbar-expand-lg iest-navbar fixed-top">
                <div class="container">
                    <a class="navbar-brand iest-navbar-brand" href="index.html">
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

        <!-- 1️⃣ Page Header / Banner -->
        <section class="iest-page-header" style="background: linear-gradient(rgba(26, 95, 122, 0.3), rgba(26, 95, 122, 0.2)), 
                        url('images/study-banner.jpg');">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb iest-breadcrumb">
                        <li class="breadcrumb-item iest-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item iest-breadcrumb-item active" aria-current="page">Study Modes</li>
                    </ol>
                </nav>
                <h1 class="iest-page-title">Study Modes</h1>
                <p class="iest-page-subtitle">Flexible learning designed for modern students</p>
            </div>
        </section>

        <!-- 2️⃣ Study Modes Overview -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="iest-section-title">Flexible Learning Options</h2>
                            <p class="iest-section-subtitle">Education designed to fit your lifestyle and learning preferences</p>
                        </div>
                        
                        <div class="iest-overview-text">
                            <p class="mb-4">
                                The Institute of Earth Sciences and Technology (IEST) is committed to providing flexible, student-centered learning options that accommodate the diverse needs of modern learners. We understand that today's students balance multiple responsibilities—work, family, and personal commitments—which is why we've developed study modes that prioritize accessibility without compromising academic quality.
                            </p>
                            <p class="mb-4">
                                Our flexible learning approach makes quality education accessible to both local and international students, breaking down geographical barriers and time constraints. Whether you're in Colombo or overseas, a recent school leaver or a working professional, our study modes are designed to help you achieve your educational goals while maintaining your current lifestyle.
                            </p>
                            <p>
                                At IEST, we believe that flexibility and academic excellence can coexist. Our programmes are structured to provide the same rigorous academic standards across all study modes, ensuring that every student receives a high-quality education regardless of how they choose to learn. With comprehensive student support services and cutting-edge technology, we create learning environments that are both convenient and academically challenging.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3️⃣ Study Modes Listing Section -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Our Study Modes</h2>
                    <p class="iest-section-subtitle">Choose the learning format that best suits your needs and lifestyle</p>
                </div>
                
                <div class="row g-4">
                    <!-- Online Learning (Live via Zoom) -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-mode-card">
                            <div class="iest-mode-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <h3 class="iest-mode-title">Online Learning (Live via Zoom)</h3>
                            <p class="iest-mode-desc">Real-time interactive lectures with academic support, accessible from anywhere with internet connectivity.</p>
                            
                            <ul class="iest-mode-features">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Live, interactive Zoom sessions</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Real-time Q&A with lecturers</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Recorded sessions for review</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Digital collaboration tools</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Virtual office hours</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Blended Learning -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-mode-card">
                            <div class="iest-mode-icon">
                                <i class="fas fa-blender-phone"></i>
                            </div>
                            <h3 class="iest-mode-title">Blended Learning</h3>
                            <p class="iest-mode-desc">Combination of online learning and scheduled physical sessions for hands-on experience and networking.</p>
                            
                            <ul class="iest-mode-features">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Online lectures and resources</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Scheduled on-campus sessions</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Laboratory and practical work</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Face-to-face interactions</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Group activities and networking</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Recorded Lectures & Digital Learning Materials -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-mode-card">
                            <div class="iest-mode-icon">
                                <i class="fas fa-file-video"></i>
                            </div>
                            <h3 class="iest-mode-title">Recorded Lectures & Digital Materials</h3>
                            <p class="iest-mode-desc">Self-paced learning with access to recorded sessions and comprehensive digital resources.</p>
                            
                            <ul class="iest-mode-features">
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Pre-recorded lecture sessions</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Comprehensive digital materials</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Self-paced learning schedule</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Downloadable resources</span>
                                </li>
                                <li>
                                    <i class="fas fa-check"></i>
                                    <span>Online assessment and feedback</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4️⃣ Benefits of Flexible Learning -->
        <section class="iest-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Benefits of Studying at IEST</h2>
                    <p class="iest-section-subtitle">Experience education that adapts to your needs while maintaining academic excellence</p>
                </div>
                
                <div class="row g-4">
                    <!-- Learn from anywhere -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-benefit-card">
                            <div class="iest-benefit-icon">
                                <i class="fas fa-laptop-house"></i>
                            </div>
                            <h3 class="iest-benefit-title">Learn from Anywhere</h3>
                            <p class="iest-benefit-desc">Access your education from any location with internet connectivity, eliminating geographical barriers and commute times.</p>
                        </div>
                    </div>
                    
                    <!-- Flexible schedules -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-benefit-card">
                            <div class="iest-benefit-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <h3 class="iest-benefit-title">Flexible Schedules</h3>
                            <p class="iest-benefit-desc">Balance your studies with work, family, and personal commitments through adaptable learning schedules and timelines.</p>
                        </div>
                    </div>
                    
                    <!-- Access to expert lecturers -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-benefit-card">
                            <div class="iest-benefit-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <h3 class="iest-benefit-title">Access to Expert Lecturers</h3>
                            <p class="iest-benefit-desc">Learn from experienced academics and industry professionals regardless of your physical location or study mode.</p>
                        </div>
                    </div>
                    
                    <!-- Digital learning resources -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-benefit-card">
                            <div class="iest-benefit-icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h3 class="iest-benefit-title">Digital Learning Resources</h3>
                            <p class="iest-benefit-desc">Access comprehensive digital libraries, multimedia content, and interactive learning materials anytime, anywhere.</p>
                        </div>
                    </div>
                    
                    <!-- Student-friendly academic support -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-benefit-card">
                            <div class="iest-benefit-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h3 class="iest-benefit-title">Student-Friendly Academic Support</h3>
                            <p class="iest-benefit-desc">Receive personalized academic guidance, technical assistance, and learning support through multiple channels.</p>
                        </div>
                    </div>
                    
                    <!-- Career-aligned education -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-benefit-card">
                            <div class="iest-benefit-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3 class="iest-benefit-title">Career-Aligned Education</h3>
                            <p class="iest-benefit-desc">Gain practical skills and knowledge directly applicable to your career, with industry-relevant projects and case studies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5️⃣ Technology & Learning Support -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Technology & Learning Support</h2>
                    <p class="iest-section-subtitle">Cutting-edge technology and comprehensive support for your learning journey</p>
                </div>
                
                <div class="row g-4">
                    <!-- Learning Management Systems (LMS) -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-tech-card">
                            <div class="iest-tech-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h3 class="iest-tech-title">Learning Management Systems (LMS)</h3>
                            <p class="iest-tech-desc">Access our intuitive LMS platform featuring course materials, assignments, grades, discussion forums, and progress tracking in one centralized location.</p>
                        </div>
                    </div>
                    
                    <!-- Zoom-based Live Sessions -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-tech-card">
                            <div class="iest-tech-icon">
                                <i class="fas fa-broadcast-tower"></i>
                            </div>
                            <h3 class="iest-tech-title">Zoom-based Live Sessions</h3>
                            <p class="iest-tech-desc">Participate in high-quality interactive lectures, virtual classrooms, and collaborative sessions with real-time audio, video, and screen sharing capabilities.</p>
                        </div>
                    </div>
                    
                    <!-- Digital Materials & Academic Support -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-tech-card">
                            <div class="iest-tech-icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <h3 class="iest-tech-title">Digital Materials & Academic Support</h3>
                            <p class="iest-tech-desc">Access comprehensive digital resources including e-books, lecture recordings, interactive modules, and receive timely academic support from dedicated staff.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-lg-10 mx-auto">
                        <div class="text-center">
                            <div class="iest-overview-text">
                                <p>
                                    Our technology infrastructure is designed to provide a seamless learning experience regardless of your chosen study mode. We offer 24/7 technical support, detailed user guides, and orientation sessions to ensure all students can effectively utilize our digital platforms. Regular technology updates and training sessions keep our systems current and user-friendly, while our dedicated IT support team is always available to assist with any technical challenges.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6️⃣ Call-to-Action -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="iest-cta">
                            <h2 class="iest-cta-title">Choose a Study Mode That Fits Your Lifestyle</h2>
                            <p class="iest-cta-subtitle">Discover how our flexible learning options can help you achieve your educational goals while balancing your personal and professional commitments.</p>
                            <a href="programmes.html" class="btn iest-cta-btn">Explore Programmes</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7️⃣ Footer -->
        <?php  include_once('include/footer.php') ?>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
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
        });
    </script>
</body>
</html>