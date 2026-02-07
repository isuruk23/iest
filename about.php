<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Institute of Earth Sciences and Technology (IEST)</title>
     <link rel="icon" sizes="192x192" href="images/logo.png" type="image/png"/>
    <link rel="shortcut icon" href="images/logo.png" type="image/png"/>
    <link rel="apple-touch-icon" href="images/logo.png" type="image/png"/>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="css/styles.css">
    <!-- Scoped CSS - All styles are inside .iest-site -->

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
                        url('images/about-banner.jpg');">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb iest-breadcrumb">
                        <li class="breadcrumb-item iest-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item iest-breadcrumb-item active" aria-current="page">About IEST</li>
                    </ol>
                </nav>
                <h1 class="iest-page-title">About Institute of Earth Sciences and Technology</h1>
                <p class="iest-page-subtitle">Academic departments across our multidisciplinary faculties</p>
            </div>
        </section>

        <!-- 2️⃣ About IEST – Overview -->
        <section class="iest-section">
            <div class="container">
                <h2 class="iest-section-title">About IEST</h2>
                <p class="iest-section-subtitle">A premier institution dedicated to excellence in Earth Sciences, Technology, and multidisciplinary education</p>
                
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="iest-about-text">
                            <p class="mb-4">
                                The Institute of Earth Sciences and Technology (IEST) is a distinguished higher education institution that has established itself as a center of excellence in the fields of Earth Sciences, Environmental Technology, and interdisciplinary studies. Founded with a commitment to addressing global challenges through education and research, IEST provides transformative learning experiences that prepare students for meaningful careers and responsible citizenship.
                            </p>
                            <p class="mb-4">
                                Our institution brings together a diverse community of learners, educators, and researchers who share a common goal: to advance knowledge and innovation for a sustainable future. Through our comprehensive academic programmes, we equip students with the critical thinking skills, technical expertise, and ethical foundation needed to navigate complex environmental and societal issues.
                            </p>
                            <p>
                                IEST is recognized for its learner-centered approach, industry-relevant curriculum, and commitment to accessibility through flexible learning modalities. Our collaborations with leading universities and industry partners ensure that our programmes remain at the forefront of academic and professional standards.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="images/logo.jpg" 
                             alt="IEST campus modern building with students" class="iest-about-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- 3️⃣ Vision Section -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <h2 class="text-center iest-section-title">Our Vision</h2>
                <p class="text-center iest-section-subtitle">The guiding principle that shapes our institution's direction and purpose</p>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card iest-vision-card">
                            <div class="card-body text-center">
                                <div class="iest-vision-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <p class="iest-vision-text">
                                    To be a leading institution in Earth Sciences, Technology, and multidisciplinary education, empowering future generations to address global challenges related to sustainability, climate change, innovation, and development.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4️⃣ Mission Section -->
        <section class="iest-section">
            <div class="container">
                <h2 class="iest-section-title">Our Mission</h2>
                <p class="iest-section-subtitle mb-5">The concrete actions and commitments through which we realize our vision</p>
                
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="iest-mission-card">
                            <ul class="iest-mission-list">
                                <li>
                                    <div class="iest-mission-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Provide accessible, high-quality education</strong> through flexible learning methods that cater to diverse student needs and backgrounds, ensuring equitable access to knowledge and skills development.
                                    </div>
                                </li>
                                <li>
                                    <div class="iest-mission-icon">
                                        <i class="fas fa-brain"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Promote interdisciplinary and applied learning</strong> that bridges theoretical knowledge with practical application, preparing students to solve real-world problems through integrated approaches.
                                    </div>
                                </li>
                                <li>
                                    <div class="iest-mission-icon">
                                        <i class="fas fa-flask"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Encourage research, critical thinking, and innovation</strong> by fostering a culture of inquiry, creativity, and evidence-based decision-making that advances knowledge and addresses societal needs.
                                    </div>
                                </li>
                                <li>
                                    <div class="iest-mission-icon">
                                        <i class="fas fa-hands-helping"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Develop ethically responsible and socially conscious professionals</strong> who demonstrate integrity, empathy, and commitment to sustainable development and community well-being.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5️⃣ Academic Approach -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <h2 class="iest-section-title">Academic Approach</h2>
                <p class="iest-section-subtitle mb-5">Our distinctive educational philosophy and methodology</p>
                
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="iest-approach-item">
                            <div class="iest-approach-number">1</div>
                            <div class="iest-approach-content">
                                <h4>Learner-Centered Education</h4>
                                <p>We place students at the heart of the learning experience, recognizing diverse learning styles and needs. Our pedagogical approach emphasizes active participation, self-directed learning, and personalized support to maximize individual potential and achievement.</p>
                            </div>
                        </div>
                        
                        <div class="iest-approach-item">
                            <div class="iest-approach-number">2</div>
                            <div class="iest-approach-content">
                                <h4>Integration of Theory and Practical Application</h4>
                                <p>Our curriculum seamlessly blends theoretical foundations with hands-on application. Through laboratory work, field studies, case analyses, and project-based learning, students develop both conceptual understanding and practical skills relevant to their chosen fields.</p>
                            </div>
                        </div>
                        
                        <div class="iest-approach-item">
                            <div class="iest-approach-number">3</div>
                            <div class="iest-approach-content">
                                <h4>Industry Relevance</h4>
                                <p>We maintain strong connections with industry partners and professional organizations to ensure our programmes align with current workplace demands. Industry experts contribute to curriculum development, deliver guest lectures, and provide internship opportunities for students.</p>
                            </div>
                        </div>
                        
                        <div class="iest-approach-item">
                            <div class="iest-approach-number">4</div>
                            <div class="iest-approach-content">
                                <h4>Alignment with Global Academic Standards</h4>
                                <p>Our academic programmes are designed to meet international quality benchmarks and accreditation standards. We continuously review and enhance our offerings to ensure they remain competitive and relevant in the global educational landscape.</p>
                            </div>
                        </div>
                        
                        <div class="iest-approach-item">
                            <div class="iest-approach-number">5</div>
                            <div class="iest-approach-content">
                                <h4>Online and Blended Learning Delivery Methods</h4>
                                <p>We embrace innovative teaching technologies and methodologies to provide flexible learning options. Our online platforms, blended learning models, and digital resources enable students to access quality education regardless of geographical constraints or personal schedules.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6️⃣ Study Philosophy & Values -->
        <section class="iest-section">
            <div class="container">
                <h2 class="text-center iest-section-title">Our Values</h2>
                <p class="text-center iest-section-subtitle mb-5">The core principles that guide our institution's culture and decision-making</p>
                
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-value-card">
                            <div class="iest-value-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3 class="iest-value-title">Academic Excellence</h3>
                            <p class="iest-value-desc">Commitment to the highest standards of teaching, learning, and scholarship. We foster intellectual curiosity, critical thinking, and continuous improvement in all academic endeavors.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-value-card">
                            <div class="iest-value-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h3 class="iest-value-title">Innovation & Research</h3>
                            <p class="iest-value-desc">Encouragement of creativity, discovery, and evidence-based approaches. We support cutting-edge research and innovative solutions to complex problems.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-value-card">
                            <div class="iest-value-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3 class="iest-value-title">Sustainability</h3>
                            <p class="iest-value-desc">Integration of environmental, social, and economic considerations in all activities. We promote responsible stewardship of resources and sustainable development practices.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-value-card">
                            <div class="iest-value-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <h3 class="iest-value-title">Ethical Responsibility</h3>
                            <p class="iest-value-desc">Upholding integrity, honesty, and ethical conduct in all interactions. We cultivate moral reasoning and social responsibility among our community members.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-value-card">
                            <div class="iest-value-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h3 class="iest-value-title">Social Impact</h3>
                            <p class="iest-value-desc">Commitment to addressing societal needs and contributing to community development. We engage in outreach activities and partnerships that create positive change.</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-value-card">
                            <div class="iest-value-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="iest-value-title">Inclusive Community</h3>
                            <p class="iest-value-desc">Fostering a welcoming, diverse, and collaborative environment where all individuals are respected and valued for their unique perspectives and contributions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7️⃣ Future Commitment -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <h2 class="iest-section-title">Our Future Commitment</h2>
                <p class="iest-section-subtitle mb-5">Our strategic direction and planned developments to enhance educational excellence</p>
                
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="iest-future-content">
                            <p class="mb-4">As we look toward the future, IEST remains committed to continuous growth and enhancement of our educational offerings and institutional infrastructure. Our strategic priorities include:</p>
                            
                            <ul class="iest-future-list">
                                <li>
                                    <div class="iest-future-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Continuous Institutional Growth:</strong> Expanding our academic portfolio with new programmes in emerging fields such as Climate Science, Renewable Energy Technology, Geospatial Analytics, and Environmental Policy.
                                    </div>
                                </li>
                                <li>
                                    <div class="iest-future-icon">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Development of a Modern Campus:</strong> Establishing a state-of-the-art campus facility equipped with advanced laboratories, technology-enhanced classrooms, and collaborative learning spaces to support innovative teaching and research.
                                    </div>
                                </li>
                                <li>
                                    <div class="iest-future-icon">
                                        <i class="fas fa-microscope"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Enhanced Facilities:</strong> Investing in specialized equipment and infrastructure for Earth Sciences research, including geospatial technology labs, environmental monitoring equipment, and computational resources for data analysis.
                                    </div>
                                </li>
                                <li>
                                    <div class="iest-future-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Research and Collaborative Learning Spaces:</strong> Creating dedicated areas for interdisciplinary research, student-faculty collaboration, and innovation projects that address pressing environmental and societal challenges.
                                    </div>
                                </li>
                                <li>
                                    <div class="iest-future-icon">
                                        <i class="fas fa-network-wired"></i>
                                    </div>
                                    <div class="iest-mission-text">
                                        <strong>Global Partnerships:</strong> Strengthening collaborations with international universities, research institutions, and industry partners to facilitate student and faculty exchanges, joint research initiatives, and global learning opportunities.
                                    </div>
                                </li>
                            </ul>
                            
                            <p class="mt-4 mb-0">Through these commitments, we aim to solidify IEST's position as a leading institution for Earth Sciences and Technology education, research, and innovation, making meaningful contributions to sustainable development and global knowledge advancement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8️⃣ Call to Action -->
        <section class="iest-cta">
            <div class="container">
                <h2 class="iest-cta-title">Join a Future-Focused Institution</h2>
                <p class="iest-cta-subtitle">Become part of a vibrant academic community dedicated to excellence, innovation, and positive impact. Explore our comprehensive range of programmes designed to prepare you for success in Earth Sciences, Technology, and multidisciplinary fields.</p>
                <a href="programmes.php" class="btn iest-cta-btn">Explore Our Programmes</a>
            </div>
        </section>

        <!-- 9️⃣ Footer -->
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