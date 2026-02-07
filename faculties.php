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
                        url('images/faculties-banner.jpg')  no-repeat center center; background-size: cover;">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb iest-breadcrumb">
                        <li class="breadcrumb-item iest-breadcrumb-item"><a href="/">Home</a></li>
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
         <!-- 🎓 2️⃣ Faculties Accordion (CORE SECTION) -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Departments</h2>
                    <p class="iest-section-subtitle">Explore our comprehensive academic structure with detailed programmes in each department</p>
                </div>
                
                <!-- Bootstrap Accordion -->
                <div class="accordion iest-faculty-accordion" id="iest-faculty-accordion">
                    
                    <!-- 🌱 Faculty of Agriculture -->
                    <div class="accordion-item iest-accordion-item">
                        <h2 class="accordion-header iest-accordion-header" id="iest-faculty-agriculture-heading">
                            <button class="accordion-button iest-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iest-faculty-agriculture" aria-expanded="false" aria-controls="iest-faculty-agriculture">
                                <div class="iest-faculty-title">
                                    <div class="iest-faculty-icon">
                                        <i class="fas fa-tractor"></i>
                                    </div>
                                    <span>Faculty of Agriculture</span>
                                </div>
                            </button>
                        </h2>
                        <div id="iest-faculty-agriculture" class="accordion-collapse collapse" aria-labelledby="iest-faculty-agriculture-heading" data-bs-parent="#iest-faculty-accordion">
                            <div class="accordion-body iest-accordion-body">
                                
                                <!-- Department of Agribusiness Management -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Agribusiness Management</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Agribusiness Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Agribusiness Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-chart-line"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Agricultural Economics</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-lightbulb"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Agricultural Entrepreneurship</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Animal Science -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Animal Science</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Animal Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Animal Science</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Food Science -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Food Science</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Food Technology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Food Science & Nutrition</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Sustainable Agriculture -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Sustainable Agriculture</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Agriculture</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Sustainable Agriculture</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-leaf"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Organic Farming</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 🎓 Faculty of Education -->
                    <div class="accordion-item iest-accordion-item">
                        <h2 class="accordion-header iest-accordion-header" id="iest-faculty-education-heading">
                            <button class="accordion-button iest-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iest-faculty-education" aria-expanded="false" aria-controls="iest-faculty-education">
                                <div class="iest-faculty-title">
                                    <div class="iest-faculty-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <span>Faculty of Education</span>
                                </div>
                            </button>
                        </h2>
                        <div id="iest-faculty-education" class="accordion-collapse collapse" aria-labelledby="iest-faculty-education-heading" data-bs-parent="#iest-faculty-accordion">
                            <div class="accordion-body iest-accordion-body">
                                
                                <!-- Department of Early Childhood Education -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Early Childhood Education</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Early Childhood Education</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BEd in Early Childhood Education</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Teacher Education -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Teacher Education</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Special Needs Education</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BEd in Special Education</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Teacher Education</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BEd (Bachelor of Education)</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ⚙️ Faculty of Engineering & Technology -->
                    <div class="accordion-item iest-accordion-item">
                        <h2 class="accordion-header iest-accordion-header" id="iest-faculty-engineering-heading">
                            <button class="accordion-button iest-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iest-faculty-engineering" aria-expanded="false" aria-controls="iest-faculty-engineering">
                                <div class="iest-faculty-title">
                                    <div class="iest-faculty-icon">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <span>Faculty of Engineering & Technology</span>
                                </div>
                            </button>
                        </h2>
                        <div id="iest-faculty-engineering" class="accordion-collapse collapse" aria-labelledby="iest-faculty-engineering-heading" data-bs-parent="#iest-faculty-accordion">
                            <div class="accordion-body iest-accordion-body">
                                
                                <!-- Department of Biomedical Engineering -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Biomedical Engineering</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Biomedical Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Biomedical Engineering</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Chemical Engineering -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Chemical Engineering</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Chemical Engineering</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Civil Engineering -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Civil Engineering</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Civil Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Civil Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Building Services Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Environmental and Sustainable Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Environmental and Sustainable Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Quantity Surveying</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Quantity Surveying</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Computer Sciences & Engineering -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Computer Sciences & Engineering</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Computer Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Computer Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Cyber Security</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Cyber Security</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Data Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Data Science & AI</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Network Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Network Technology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Software Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Software Engineering</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Electrical & Electronic Engineering -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Electrical & Electronic Engineering</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Electrical Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Electrical & Electronic Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Renewable Power Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Solar Power Technology</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Mechanical Engineering -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Mechanical Engineering</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Mechanical Engineering</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Mechanical Engineering</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Textile & Apparel Engineering -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Textile & Apparel Engineering</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Fashion Design</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Fashion & Apparel Technology</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 🧬 Faculty of Health Sciences -->
                    <div class="accordion-item iest-accordion-item">
                        <h2 class="accordion-header iest-accordion-header" id="iest-faculty-health-heading">
                            <button class="accordion-button iest-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iest-faculty-health" aria-expanded="false" aria-controls="iest-faculty-health">
                                <div class="iest-faculty-title">
                                    <div class="iest-faculty-icon">
                                        <i class="fas fa-heartbeat"></i>
                                    </div>
                                    <span>Faculty of Health Sciences</span>
                                </div>
                            </button>
                        </h2>
                        <div id="iest-faculty-health" class="accordion-collapse collapse" aria-labelledby="iest-faculty-health-heading" data-bs-parent="#iest-faculty-accordion">
                            <div class="accordion-body iest-accordion-body">
                                
                                <!-- Department of Allied and Public Health -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Allied and Public Health</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Health Administration</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Healthcare Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Occupational Health & Safety</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Occupational Safety & Health</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Physiotherapy</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Physiotherapy</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Public Health</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Public Health</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Medical Laboratory Technology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Medical Laboratory Sciences</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Cosmetology -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Cosmetology</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Cosmetology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Cosmetology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Aesthetic Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Skin Care & Beauty Therapy</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Pharmacy and Pharmaceutical Sciences -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Pharmacy and Pharmaceutical Sciences</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Pharmaceutical Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Pharmaceutical Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Pharmacy Practice</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Pharmacy</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Psychology -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Psychology</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Child Psychology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Child Development</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Counselling Psychology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Counselling & Mental Health</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Psychology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Psychology</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ⚖️ Faculty of Law -->
                    <div class="accordion-item iest-accordion-item">
                        <h2 class="accordion-header iest-accordion-header" id="iest-faculty-law-heading">
                            <button class="accordion-button iest-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iest-faculty-law" aria-expanded="false" aria-controls="iest-faculty-law">
                                <div class="iest-faculty-title">
                                    <div class="iest-faculty-icon">
                                        <i class="fas fa-gavel"></i>
                                    </div>
                                    <span>Faculty of Law</span>
                                </div>
                            </button>
                        </h2>
                        <div id="iest-faculty-law" class="accordion-collapse collapse" aria-labelledby="iest-faculty-law-heading" data-bs-parent="#iest-faculty-accordion">
                            <div class="accordion-body iest-accordion-body">
                                
                                <!-- Department of Human Rights -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Human Rights</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Human Rights</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Public Law -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Public Law</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Law</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">LLB (Bachelor of Laws)</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 📊 Faculty of Management -->
                    <div class="accordion-item iest-accordion-item">
                        <h2 class="accordion-header iest-accordion-header" id="iest-faculty-management-heading">
                            <button class="accordion-button iest-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iest-faculty-management" aria-expanded="false" aria-controls="iest-faculty-management">
                                <div class="iest-faculty-title">
                                    <div class="iest-faculty-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <span>Faculty of Management</span>
                                </div>
                            </button>
                        </h2>
                        <div id="iest-faculty-management" class="accordion-collapse collapse" aria-labelledby="iest-faculty-management-heading" data-bs-parent="#iest-faculty-accordion">
                            <div class="accordion-body iest-accordion-body">
                                
                                <!-- Department of Accountancy & Finance -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Accountancy & Finance</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Accounting</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Accounting & Finance</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Business Management -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Business Management</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Business Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BBA (Bachelor of Business Administration)</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Logistics & Supply Chain</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Supply Chain Management</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Human Resources Management -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Human Resources Management</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Human Resource Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Human Resource Management</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Marketing Management -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Marketing Management</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Digital Marketing</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Digital Marketing</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Marketing Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Marketing Management</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Tourism Management -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Tourism Management</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Tourism & Hotel Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Tourism & Hospitality Management</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 🔬 Faculty of Science -->
                    <div class="accordion-item iest-accordion-item">
                        <h2 class="accordion-header iest-accordion-header" id="iest-faculty-science-heading">
                            <button class="accordion-button iest-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iest-faculty-science" aria-expanded="false" aria-controls="iest-faculty-science">
                                <div class="iest-faculty-title">
                                    <div class="iest-faculty-icon">
                                        <i class="fas fa-flask"></i>
                                    </div>
                                    <span>Faculty of Science</span>
                                </div>
                            </button>
                        </h2>
                        <div id="iest-faculty-science" class="accordion-collapse collapse" aria-labelledby="iest-faculty-science-heading" data-bs-parent="#iest-faculty-accordion">
                            <div class="accordion-body iest-accordion-body">
                                
                                <!-- Department of Applied Sciences -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Applied Sciences</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Applied Chemistry and Industrial Technology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Astronomy</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Astronomy</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in BioTechnology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in BioTechnology</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Industrial Quality Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Biomedical Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Biomedical Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Quality Assurance</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Environmental & Earth Sciences -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Environmental & Earth Sciences</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Climate Change Studies</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Climate Change & Sustainability</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Disaster Management</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Environmental Management and Sustainable Development</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Environmental Science</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in GIS & Remote Sensing</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Renewable Energy</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Renewable Energy Technology</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 🌍 Faculty of Social Sciences & Languages -->
                    <div class="accordion-item iest-accordion-item">
                        <h2 class="accordion-header iest-accordion-header" id="iest-faculty-social-heading">
                            <button class="accordion-button iest-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#iest-faculty-social" aria-expanded="false" aria-controls="iest-faculty-social">
                                <div class="iest-faculty-title">
                                    <div class="iest-faculty-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <span>Faculty of Social Sciences & Languages</span>
                                </div>
                            </button>
                        </h2>
                        <div id="iest-faculty-social" class="accordion-collapse collapse" aria-labelledby="iest-faculty-social-heading" data-bs-parent="#iest-faculty-accordion">
                            <div class="accordion-body iest-accordion-body">
                                
                                <!-- Department of Development Studies -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Development Studies</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Development Studies</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Development Studies</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in Social Sciences</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of International Relations -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of International Relations</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in International Relations</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div class="iest-course-name">BSc in International Relations</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Department of Languages & Communication -->
                                <div class="card iest-department-card">
                                    <div class="card-header iest-department-header">
                                        <h3 class="iest-department-title">Department of Languages & Communication</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-unstyled iest-courses-list">
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in English</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Media</div>
                                            </li>
                                            <li class="iest-course-item">
                                                <div class="iest-course-icon">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div class="iest-course-name">Diploma in Tamil</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- 3️⃣ Call-to-Action Section -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="iest-cta">
                            <h2 class="iest-cta-title">Explore Your Academic Path at IEST</h2>
                            <p class="iest-cta-subtitle">Find the perfect programme that matches your interests and career goals. Our academic advisors are ready to guide you through the admissions process.</p>
                            <a href="contact" class="btn iest-cta-btn">Contact Admissions</a>
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
                            <a href="programmes" class="btn iest-pathways-btn">View Programmes</a>
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