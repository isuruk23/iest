<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Collaboration - Institute of Earth Sciences and Technology (IEST)</title>
     <link rel="icon" sizes="192x192" href="images/logo.png" type="image/png"/>
    <link rel="shortcut icon" href="images/logo.png" type="image/png"/>
    <link rel="apple-touch-icon" href="images/logo.png" type="image/png"/>
    
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Scoped CSS - All styles are inside .iest-site -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Main wrapper with .iest-site class to scope all styles -->
    <div class="iest-site">
        
        <!-- Navigation Header -->
        <header>
           <nav class="navbar navbar-expand-lg iest-navbar fixed-top">
                <div class="container">
                    <a class="navbar-brand iest-navbar-brand" href="/">
                        <img src="images/logo-sm.png" width="70px"  class="img-fluid" alt="Institute of Earth Sciences and Technology Logo">
                        <span>Institute of Earth Sciences and Technology</span>
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#iestNavbar">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="iestNavbar">
                        <?php  include_once('include/navbar.php') ?>
                    </div>
                </div>
            </nav>
        </header>

       <!-- 1️⃣ Page Header / Banner -->
        <section class="iest-page-header" style="background: linear-gradient(rgba(26, 95, 122, 0.3), rgba(26, 95, 122, 0.2)), 
                        url('images/department-banner.jpg') no-repeat center center; background-size: cover;">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb iest-breadcrumb">
                        <li class="breadcrumb-item iest-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item iest-breadcrumb-item active" aria-current="page">International Collaboration</li>
                    </ol>
                </nav>
                <h1 class="iest-page-title">International Collaboration</h1>
                <p class="iest-page-subtitle">Connecting IEST with the Global Academic Community</p>
            </div>
        </section>

        <!-- 🔹 Introduction Section -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="iest-section-title text-center">Global Academic Partnerships</h2>
                            <div class="d-flex justify-content-center mb-4">
                                <div class="iest-feature-icon">
                                    <i class="bi bi-globe"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="iest-intro-text text-center">
                            <p class="mb-0">
                                IEST engages in academic collaborations with world-ranked universities and internationally recognised higher education institutions to ensure the delivery of programmes aligned with global academic standards. These partnerships strengthen curriculum quality, academic governance, and teaching excellence across all levels of study.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 🔹 Why International Collaboration Matters -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title text-center">Through International Collaboration, IEST Ensures</h2>
                    <p class="iest-intro-text text-center mb-0">Our global partnerships deliver measurable benefits across all academic programmes</p>
                </div>
                
                <div class="row g-4">
                    <!-- Globally benchmarked curricula -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-feature-card">
                            <div class="iest-feature-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <h3 class="iest-feature-title">Globally Benchmarked Curricula</h3>
                            <p class="iest-feature-text">Our programmes are designed with international standards, ensuring graduates are competitive in the global job market and prepared for further study worldwide.</p>
                        </div>
                    </div>
                    
                    <!-- International academic quality assurance -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-feature-card">
                            <div class="iest-feature-icon">
                                <i class="bi bi-check-circle"></i>
                            </div>
                            <h3 class="iest-feature-title">International Quality Assurance</h3>
                            <p class="iest-feature-text">Implementation of global best practices in academic governance, assessment, and quality assurance processes to maintain international standards.</p>
                        </div>
                    </div>
                    
                    <!-- Global teaching methodologies -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-feature-card">
                            <div class="iest-feature-icon">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <h3 class="iest-feature-title">Global Teaching Methodologies</h3>
                            <p class="iest-feature-text">Exposure to diverse international teaching approaches, innovative pedagogies, and contemporary learning technologies used by partner institutions.</p>
                        </div>
                    </div>
                    
                    <!-- Collaboration with international faculty -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-feature-card">
                            <div class="iest-feature-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="iest-feature-title">International Faculty Collaboration</h3>
                            <p class="iest-feature-text">Academic collaboration with internationally experienced faculty members, guest lecturers, and subject matter experts from partner institutions.</p>
                        </div>
                    </div>
                    
                    <!-- Academic pathways -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-feature-card">
                            <div class="iest-feature-icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <h3 class="iest-feature-title">Academic Pathways</h3>
                            <p class="iest-feature-text">Seamless progression pathways from undergraduate to postgraduate levels, with recognition agreements facilitating international mobility.</p>
                        </div>
                    </div>
                    
                    <!-- Research collaboration -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-feature-card">
                            <div class="iest-feature-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <h3 class="iest-feature-title">Joint Research Initiatives</h3>
                            <p class="iest-feature-text">Collaborative research projects, joint publications, and academic exchanges that contribute to global knowledge creation and innovation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 🔹 Academic Excellence & Global Relevance Section -->
        <section class="iest-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="iest-section-title">Academic Excellence & Global Relevance</h2>
                        <div class="iest-intro-text mb-4">
                            <p>
                                IEST's commitment to international collaboration reflects its dedication to academic excellence, global relevance, and student success in an increasingly interconnected world.
                            </p>
                        </div>
                        
                        <ul class="iest-highlight-list">
                            <li>
                                <i class="bi bi-check-lg"></i>
                                <span><strong>Quality Assurance:</strong> Rigorous alignment with international accreditation standards and quality benchmarks</span>
                            </li>
                            <li>
                                <i class="bi bi-check-lg"></i>
                                <span><strong>Global Recognition:</strong> Programmes designed for international recognition and graduate employability worldwide</span>
                            </li>
                            <li>
                                <i class="bi bi-check-lg"></i>
                                <span><strong>Student Mobility:</strong> Opportunities for student exchanges, study abroad programmes, and international internships</span>
                            </li>
                            <li>
                                <i class="bi bi-check-lg"></i>
                                <span><strong>Academic Progression:</strong> Pathways that facilitate progression to advanced studies at international partner institutions</span>
                            </li>
                            <li>
                                <i class="bi bi-check-lg"></i>
                                <span><strong>Cultural Competence:</strong> Development of intercultural awareness and global citizenship skills essential for 21st-century professionals</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-6">
                        <img src="images/international.jpg" 
                             alt="International students collaborating in academic setting" 
                             class="iest-excellence-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- 🔹 Collaboration Outcomes (Optional Highlight Section) -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title text-center">Collaboration Outcomes</h2>
                    <p class="iest-intro-text text-center mb-0">Tangible benefits resulting from our international partnerships</p>
                </div>
                
                <div class="row g-4">
                    <!-- International curriculum alignment -->
                    <div class="col-md-6 col-lg-3">
                        <div class="iest-outcome-card">
                            <div class="iest-outcome-icon">
                                <i class="bi bi-book"></i>
                            </div>
                            <h3 class="iest-outcome-title">Curriculum Alignment</h3>
                            <p class="iest-outcome-text">Programmes aligned with international standards, ensuring global relevance and recognition of qualifications.</p>
                        </div>
                    </div>
                    
                    <!-- Faculty exchange opportunities -->
                    <div class="col-md-6 col-lg-3">
                        <div class="iest-outcome-card">
                            <div class="iest-outcome-icon">
                                <i class="bi bi-arrow-left-right"></i>
                            </div>
                            <h3 class="iest-outcome-title">Faculty Exchange</h3>
                            <p class="iest-outcome-text">Opportunities for staff mobility, joint teaching, and knowledge transfer with international partner institutions.</p>
                        </div>
                    </div>
                    
                    <!-- Global academic pathways -->
                    <div class="col-md-6 col-lg-3">
                        <div class="iest-outcome-card">
                            <div class="iest-outcome-icon">
                                <i class="bi bi-signpost-split"></i>
                            </div>
                            <h3 class="iest-outcome-title">Global Pathways</h3>
                            <p class="iest-outcome-text">Articulation agreements enabling smooth progression to postgraduate studies at international universities.</p>
                        </div>
                    </div>
                    
                    <!-- International best practices -->
                    <div class="col-md-6 col-lg-3">
                        <div class="iest-outcome-card">
                            <div class="iest-outcome-icon">
                                <i class="bi bi-star"></i>
                            </div>
                            <h3 class="iest-outcome-title">Best Practices</h3>
                            <p class="iest-outcome-text">Adoption of international best practices in teaching, assessment, and academic administration.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-lg-10 mx-auto">
                        <div class="text-center">
                            <div class="iest-intro-text">
                                <p class="mb-0">
                                    These outcomes directly contribute to enhancing the quality of education at IEST, ensuring our graduates are equipped with globally relevant skills, knowledge, and perspectives that prepare them for success in an interconnected world.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 🔹 Call to Action Section -->
        <section class="iest-cta">
            <div class="container">
                <h2 class="iest-cta-title">Building Global Academic Bridges</h2>
                <p class="iest-cta-subtitle">Join an institution committed to international excellence and preparing students for a global future through meaningful academic partnerships and globally recognised programmes.</p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <!-- <a href="programmes.html" class="btn iest-cta-btn">Explore Our Programmes</a> -->
                    <a href="tel:+94706960580" class="btn iest-cta-btn" style="background-color: transparent; border: 2px solid white;">Contact IEST</a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php  include_once('include/footer.php') ?>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set current year in footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            
            // Initialize carousel with custom settings
            const heroCarousel = document.getElementById('iest-hero-carousel');
            if (heroCarousel) {
                const carousel = new bootstrap.Carousel(heroCarousel, {
                    interval: 5000, // 5 seconds per slide
                    wrap: true,
                    pause: 'hover',
                    keyboard: true
                });
            }
            
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
            
            // Navbar scroll effect
          
            // Trigger initial scroll check
            window.dispatchEvent(new Event('scroll'));
        });
    </script>
</body>
</html>