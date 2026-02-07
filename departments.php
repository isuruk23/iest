<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments - Institute of Earth Sciences and Technology (IEST)</title>
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
                        url('images/department-banner.jpg');">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb iest-breadcrumb">
                        <li class="breadcrumb-item iest-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item iest-breadcrumb-item active" aria-current="page">Departments</li>
                    </ol>
                </nav>
                <h1 class="iest-page-title">Departments</h1>
                <p class="iest-page-subtitle">Academic departments across our multidisciplinary faculties</p>
            </div>
        </section>

        <!-- 2️⃣ Departments Overview -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="iest-section-title">Academic Structure</h2>
                            <p class="iest-section-subtitle">Discipline-focused learning within our comprehensive faculties</p>
                        </div>
                        
                        <div class="iest-overview-text">
                            <p class="mb-4">
                                The Institute of Earth Sciences and Technology (IEST) is organized into specialized academic departments within each faculty, providing a structured yet flexible framework for discipline-focused education. This department-based structure enables students to develop deep expertise in their chosen fields while benefiting from the multidisciplinary environment of our institution.
                            </p>
                            <p class="mb-4">
                                Each department at IEST is designed to deliver industry-aligned, research-informed education that prepares graduates for professional success and lifelong learning. Our academic departments are staffed by subject-matter experts who combine academic rigor with practical industry experience, ensuring that students receive education that is both theoretically sound and professionally relevant.
                            </p>
                            <p>
                                The department structure allows for academic depth within each faculty while fostering collaboration across disciplinary boundaries. This integrated approach enables students to develop specialized knowledge alongside broad perspectives, preparing them to address complex challenges in Earth Sciences, Technology, and related fields.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3️⃣ Faculties & Departments Listing -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Faculties & Departments</h2>
                    <p class="iest-section-subtitle">Explore our academic departments organized within comprehensive faculties</p>
                </div>
                
                <div class="row g-4">
                    <!-- Faculty of Science -->
                    <div class="col-lg-6">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-header">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                                <div>
                                    <h3 class="iest-faculty-title">Faculty of Science</h3>
                                </div>
                            </div>
                            
                            <ul class="iest-departments-list">
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Environmental & Earth Sciences</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-atom"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Applied Sciences</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Faculty of Health Sciences -->
                    <div class="col-lg-6">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-header">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div>
                                    <h3 class="iest-faculty-title">Faculty of Health Sciences</h3>
                                </div>
                            </div>
                            
                            <ul class="iest-departments-list">
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-hospital-user"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Public Health</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-brain"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Psychology</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Allied Health Sciences</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-spa"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Cosmetology</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Faculty of Engineering & Technology -->
                    <div class="col-lg-6">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-header">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div>
                                    <h3 class="iest-faculty-title">Faculty of Engineering & Technology</h3>
                                </div>
                            </div>
                            
                            <ul class="iest-departments-list">
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-hard-hat"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Civil Engineering</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Mechanical Engineering</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-bolt"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Electrical & Electronic Engineering</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-vial"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Chemical Engineering</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Computer Sciences & Engineering</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-heartbeat"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Biomedical Engineering</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-tshirt"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Textile & Apparel Engineering</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Faculty of Agriculture -->
                    <div class="col-lg-6">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-header">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-tractor"></i>
                                </div>
                                <div>
                                    <h3 class="iest-faculty-title">Faculty of Agriculture</h3>
                                </div>
                            </div>
                            
                            <ul class="iest-departments-list">
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-seedling"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Sustainable Agriculture</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-paw"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Animal Science</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-utensils"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Food Science</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Agribusiness Management</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Faculty of Management -->
                    <div class="col-lg-6">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-header">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <h3 class="iest-faculty-title">Faculty of Management</h3>
                                </div>
                            </div>
                            
                            <ul class="iest-departments-list">
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Business Management</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Accountancy & Finance</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Human Resources Management</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-plane"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Tourism Management</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Marketing Management</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Faculty of Education -->
                    <div class="col-lg-6">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-header">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div>
                                    <h3 class="iest-faculty-title">Faculty of Education</h3>
                                </div>
                            </div>
                            
                            <ul class="iest-departments-list">
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Teacher Education</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-child"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Early Childhood Education</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Faculty of Law -->
                    <div class="col-lg-6">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-header">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-gavel"></i>
                                </div>
                                <div>
                                    <h3 class="iest-faculty-title">Faculty of Law</h3>
                                </div>
                            </div>
                            
                            <ul class="iest-departments-list">
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Public Law & Governance</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Commercial Law</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Human Rights</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Faculty of Social Sciences & Languages -->
                    <div class="col-lg-6">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-header">
                                <div class="iest-faculty-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div>
                                    <h3 class="iest-faculty-title">Faculty of Social Sciences & Languages</h3>
                                </div>
                            </div>
                            
                            <ul class="iest-departments-list">
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-globe-asia"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Development Studies</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-language"></i>
                                    </div>
                                    <div class="iest-department-name">Department of Languages & Communication</div>
                                </li>
                                <li class="iest-department-item">
                                    <div class="iest-department-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="iest-department-name">Department of International Relations</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4️⃣ Academic Integration Section -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="iest-integration-card">
                            <div class="iest-integration-icon">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <h3 class="iest-integration-title">Integrated & Interdisciplinary Learning</h3>
                            
                            <div class="iest-integration-text">
                                <p class="mb-4">
                                    At IEST, we believe that the most significant advances in knowledge occur at the intersections of disciplines. Our department structure is designed to facilitate both depth of specialization and breadth of interdisciplinary exposure. Students have opportunities to engage in cross-departmental projects, joint research initiatives, and collaborative learning experiences that reflect real-world problem-solving approaches.
                                </p>
                                <p class="mb-4">
                                    Research-based learning is embedded throughout our academic programmes, with departments actively collaborating on interdisciplinary research projects. Students benefit from exposure to multiple perspectives and methodologies, developing the critical thinking skills needed to address complex challenges in Earth Sciences, Technology, and related fields.
                                </p>
                                <p class="mb-0">
                                    Our integrated approach ensures that graduates are not only experts in their chosen disciplines but also adaptable professionals who can work effectively across traditional boundaries. This multidisciplinary academic exposure prepares students for careers in an increasingly interconnected and complex world.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5️⃣ Call-to-Action -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="iest-cta">
                            <h2 class="iest-cta-title">Explore Academic Opportunities Across Our Departments</h2>
                            <p class="iest-cta-subtitle">Discover how our specialized departments within comprehensive faculties can help you achieve your educational and career goals through focused, industry-relevant programmes.</p>
                            <a href="programmes.html" class="btn iest-cta-btn">View Programmes</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6️⃣ Footer -->
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