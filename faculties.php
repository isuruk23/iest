<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculties - Institute of Earth Sciences and Technology (IEST)</title>
     <link rel="icon" sizes="192x192" href="images/logo.png" type="image/png"/>
    <link rel="shortcut icon" href="images/logo.png" type="image/png"/>
    <link rel="apple-touch-icon" href="images/logo.png" type="image/png"/>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
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
                        url('images/faculties-banner.jpg');">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb iest-breadcrumb">
                        <li class="breadcrumb-item iest-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item iest-breadcrumb-item active" aria-current="page">Faculties</li>
                    </ol>
                </nav>
                <h1 class="iest-page-title">Our Faculties</h1>
                <p class="iest-page-subtitle">Multidisciplinary education designed for the future</p>
            </div>
        </section>

        <!-- 2️⃣ Faculties Overview -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="iest-section-title">Academic Structure</h2>
                            <p class="iest-section-subtitle">Our multidisciplinary approach to education</p>
                        </div>
                        
                        <div class="iest-overview-text">
                            <p class="mb-4">
                                The Institute of Earth Sciences and Technology (IEST) is structured around a comprehensive network of faculties, each specializing in key academic disciplines while fostering interdisciplinary collaboration. Our faculty structure is designed to provide students with specialized expertise while encouraging cross-disciplinary learning that reflects the interconnected nature of real-world challenges.
                            </p>
                            <p class="mb-4">
                                Each faculty at IEST is led by experienced academics and industry professionals who ensure that our programmes remain relevant, rigorous, and responsive to evolving global trends. Our industry-aligned curriculum and research initiatives connect classroom learning with practical applications, preparing graduates for successful careers in their chosen fields.
                            </p>
                            <p>
                                With a commitment to academic excellence and innovation, our faculties collaborate on research projects, joint programmes, and community engagement initiatives that address pressing environmental, technological, and societal issues. This integrated approach ensures that IEST students receive a holistic education that combines depth of knowledge with breadth of perspective.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3️⃣ Faculties Listing Section -->
        <!-- <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Our Faculties</h2>
                    <p class="iest-section-subtitle">Explore our comprehensive range of academic disciplines</p>
                </div>
                
                <div class="row g-4">
                  
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h3 class="iest-faculty-title">Faculty of Science</h3>
                            <p class="iest-faculty-desc">Earth Sciences, Environmental Science, Physics, Chemistry, Biology, and Mathematics with cutting-edge research facilities.</p>
                            <button class="btn iest-faculty-btn">View Programmes</button>
                        </div>
                    </div>
                    
                  
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <h3 class="iest-faculty-title">Faculty of Health Sciences</h3>
                            <p class="iest-faculty-desc">Public Health, Medical Laboratory Science, Nutrition, Health Technology, and Healthcare Management programmes.</p>
                            <button class="btn iest-faculty-btn">View Programmes</button>
                        </div>
                    </div>
                    
                  
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h3 class="iest-faculty-title">Faculty of Engineering & Technology</h3>
                            <p class="iest-faculty-desc">Environmental Engineering, Geoinformatics, Renewable Energy, Civil Engineering, and Sustainable Technology.</p>
                            <button class="btn iest-faculty-btn">View Programmes</button>
                        </div>
                    </div>
                    
                  
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-icon">
                                <i class="fas fa-tractor"></i>
                            </div>
                            <h3 class="iest-faculty-title">Faculty of Agriculture</h3>
                            <p class="iest-faculty-desc">Agronomy, Horticulture, Soil Science, Agricultural Technology, Food Security, and Sustainable Agriculture.</p>
                            <button class="btn iest-faculty-btn">View Programmes</button>
                        </div>
                    </div>
                    
                 
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="iest-faculty-title">Faculty of Management</h3>
                            <p class="iest-faculty-desc">Business Administration, Environmental Management, Finance, Marketing, Entrepreneurship, and Leadership.</p>
                            <button class="btn iest-faculty-btn">View Programmes</button>
                        </div>
                    </div>
                    
                
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <h3 class="iest-faculty-title">Faculty of Education</h3>
                            <p class="iest-faculty-desc">Teacher Education, Educational Leadership, Curriculum Development, Pedagogy, and Educational Technology.</p>
                            <button class="btn iest-faculty-btn">View Programmes</button>
                        </div>
                    </div>
                    
               
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3 class="iest-faculty-title">Faculty of Law</h3>
                            <p class="iest-faculty-desc">Environmental Law, International Law, Corporate Law, Human Rights, Legal Studies, and Dispute Resolution.</p>
                            <button class="btn iest-faculty-btn">View Programmes</button>
                        </div>
                    </div>
                    
                    
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="iest-faculty-card">
                            <div class="iest-faculty-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h3 class="iest-faculty-title">Faculty of Social Sciences & Languages</h3>
                            <p class="iest-faculty-desc">Sociology, Psychology, International Relations, Language Studies, Cultural Studies, and Communication.</p>
                            <button class="btn iest-faculty-btn">View Programmes</button>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    

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

        <!-- 4️⃣ Academic Excellence Section -->
        <section class="iest-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Academic Excellence at IEST</h2>
                    <p class="iest-section-subtitle">Our commitment to quality education and student success</p>
                </div>
                
                <div class="row g-4">
                    <!-- Qualified Academic Staff -->
                    <div class="col-md-6 col-lg-3">
                        <div class="iest-excellence-card">
                            <div class="iest-excellence-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="iest-excellence-title">Qualified Academic Staff</h3>
                            <p class="iest-excellence-desc">Our faculties are led by experienced academics with advanced degrees and professional expertise in their respective fields, ensuring high-quality instruction and mentorship.</p>
                        </div>
                    </div>
                    
                    <!-- Applied & Research-Driven Teaching -->
                    <div class="col-md-6 col-lg-3">
                        <div class="iest-excellence-card">
                            <div class="iest-excellence-icon">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h3 class="iest-excellence-title">Applied & Research-Driven Teaching</h3>
                            <p class="iest-excellence-desc">We integrate current research findings and practical applications into our curriculum, preparing students for real-world challenges through hands-on learning experiences.</p>
                        </div>
                    </div>
                    
                    <!-- International Collaborations -->
                    <div class="col-md-6 col-lg-3">
                        <div class="iest-excellence-card">
                            <div class="iest-excellence-icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <h3 class="iest-excellence-title">International Collaborations</h3>
                            <p class="iest-excellence-desc">Our partnerships with leading universities worldwide provide opportunities for student exchanges, joint research projects, and global learning experiences.</p>
                        </div>
                    </div>
                    
                    <!-- Student-Centered Learning -->
                    <div class="col-md-6 col-lg-3">
                        <div class="iest-excellence-card">
                            <div class="iest-excellence-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="iest-excellence-title">Student-Centered Learning</h3>
                            <p class="iest-excellence-desc">We prioritize individual student needs through personalized support, small class sizes, and interactive teaching methods that foster engagement and success.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-lg-10 mx-auto">
                        <div class="text-center">
                            <div class="iest-overview-text">
                                <p class="mb-0">
                                    At IEST, academic excellence extends beyond classroom instruction to encompass comprehensive student support, state-of-the-art facilities, and a commitment to continuous improvement. Our faculties work collaboratively to create interdisciplinary learning opportunities that reflect the complex, interconnected nature of contemporary challenges in Earth Sciences, Technology, and related fields.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3️⃣ Programme Categories Section -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Programme Categories</h2>
                    <p class="iest-section-subtitle">Choose from our comprehensive range of accredited programmes</p>
                </div>
                
                <div class="row g-4">
                    <!-- Certificate Courses -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-programme-card">
                            <div class="iest-programme-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h3 class="iest-programme-title">Certificate Courses</h3>
                            <p class="iest-programme-desc">Short-term specialized programmes focusing on specific skills and knowledge areas, ideal for professional development and career enhancement.</p>
                            <!-- <button class="btn iest-programme-btn">View Details</button> -->
                        </div>
                    </div>
                    
                    <!-- Diploma Programmes -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-programme-card">
                            <div class="iest-programme-icon">
                                <i class="fas fa-diploma"></i>
                            </div>
                            <h3 class="iest-programme-title">Diploma Programmes</h3>
                            <p class="iest-programme-desc">Comprehensive 1-2 year programmes providing foundational knowledge and practical skills in specialized disciplines.</p>
                            <!-- <button class="btn iest-programme-btn">View Details</button> -->
                        </div>
                    </div>
                    
                    <!-- Undergraduate Degree Programmes -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-programme-card">
                            <div class="iest-programme-icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <h3 class="iest-programme-title">Undergraduate Degrees</h3>
                            <p class="iest-programme-desc">Bachelor's degrees offering comprehensive education in Earth Sciences, Technology, and related fields with industry placements.</p>
                            <!-- <button class="btn iest-programme-btn">View Details</button> -->
                        </div>
                    </div>
                    
                    <!-- Postgraduate Programmes -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-programme-card">
                            <div class="iest-programme-icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h3 class="iest-programme-title">Postgraduate Programmes</h3>
                            <p class="iest-programme-desc">Master's and doctoral programmes for advanced specialization, research, and leadership development in specialized fields.</p>
                            <!-- <button class="btn iest-programme-btn">View Details</button> -->
                        </div>
                    </div>
                    
                    <!-- Professional Development Courses -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-programme-card">
                            <div class="iest-programme-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3 class="iest-programme-title">Professional Development</h3>
                            <p class="iest-programme-desc">Industry-focused courses and workshops designed for working professionals seeking to upgrade skills and knowledge.</p>
                            <!-- <button class="btn iest-programme-btn">View Details</button> -->
                        </div>
                    </div>
                    
                    <!-- Customised Training -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="iest-programme-card">
                            <div class="iest-programme-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h3 class="iest-programme-title">Customised Training</h3>
                            <p class="iest-programme-desc">Tailored programmes developed in partnership with organizations to address specific workforce development needs.</p>
                            <!-- <button class="btn iest-programme-btn">Enquire Now</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4️⃣ Learning Pathways Section -->
        <section class="iest-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Flexible Learning Pathways</h2>
                    <p class="iest-section-subtitle">Choose the learning format that best fits your lifestyle and commitments</p>
                </div>
                
                <div class="row g-4">
                    <!-- Online (Live via Zoom) -->
                    <div class="col-md-4">
                        <div class="iest-pathway-card">
                            <div class="iest-pathway-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <h3 class="iest-pathway-title">Online (Live via Zoom)</h3>
                            <p class="iest-pathway-desc">Participate in live, interactive classes from anywhere with internet access. Real-time engagement with instructors and peers, with recordings available for review.</p>
                        </div>
                    </div>
                    
                    <!-- Blended Learning -->
                    <div class="col-md-4">
                        <div class="iest-pathway-card">
                            <div class="iest-pathway-icon">
                                <i class="fas fa-blender-phone"></i>
                            </div>
                            <h3 class="iest-pathway-title">Blended Learning</h3>
                            <p class="iest-pathway-desc">Combine online learning with scheduled on-campus sessions. Ideal for hands-on practical work, laboratory sessions, and face-to-face interactions.</p>
                        </div>
                    </div>
                    
                    <!-- Recorded Lectures & Digital Materials -->
                    <div class="col-md-4">
                        <div class="iest-pathway-card">
                            <div class="iest-pathway-icon">
                                <i class="fas fa-file-video"></i>
                            </div>
                            <h3 class="iest-pathway-title">Recorded Lectures & Digital Materials</h3>
                            <p class="iest-pathway-desc">Access comprehensive learning materials, recorded lectures, and interactive content for self-paced study at your convenience.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-lg-10 mx-auto">
                        <div class="text-center">
                            <div class="iest-overview-text">
                                <p class="mb-0">
                                    Our flexible learning pathways are designed to accommodate diverse student needs, whether you're a full-time student, working professional, or international learner. All formats provide access to the same high-quality curriculum, expert instruction, and comprehensive student support services.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <!-- 5️⃣ Study Pathways CTA -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="iest-pathways-cta">
                            <h2 class="iest-pathways-title">Explore Academic Pathways Across Our Faculties</h2>
                            <p class="iest-pathways-subtitle">Discover programmes that align with your career aspirations and academic interests. Our flexible learning options allow you to pursue education that fits your lifestyle and goals.</p>
                            <a href="programmes.php" class="btn iest-pathways-btn">View Programmes</a>
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
            
            // Faculty button click handlers
            document.querySelectorAll('.iest-site .iest-faculty-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const facultyTitle = this.closest('.iest-faculty-card').querySelector('.iest-faculty-title').textContent;
                    alert(`You selected: ${facultyTitle}. This would navigate to the specific faculty programmes page.`);
                    // In production, this would redirect to: window.location.href = `programmes.html?faculty=${encodeURIComponent(facultyTitle)}`;
                });
            });
        });
    </script>
</body>
</html>