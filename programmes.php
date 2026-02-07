<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmes - Institute of Earth Sciences and Technology (IEST)</title>
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
        <section class="iest-page-header" style="background:linear-gradient(rgba(26, 95, 122, 0.3), rgba(26, 95, 122, 0.2)),
  url('images/programmes-banner.jpg') no-repeat center center; background-size: cover;">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb iest-breadcrumb">
                        <li class="breadcrumb-item iest-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item iest-breadcrumb-item active" aria-current="page">Programmes</li>
                    </ol>
                </nav>
                <h1 class="iest-page-title">Our Programmes</h1>
                <p class="iest-page-subtitle">Academic pathways aligned with global standards</p>
            </div>
        </section>

        <!-- 2️⃣ Programmes Overview -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center mb-5">
                            <h2 class="iest-section-title">Academic Excellence</h2>
                            <p class="iest-section-subtitle">Comprehensive educational offerings designed for career success</p>
                        </div>
                        
                        <div class="iest-overview-text">
                            <p class="mb-4">
                                The Institute of Earth Sciences and Technology (IEST) offers a comprehensive range of academic and professional programmes designed to meet the evolving needs of students and industries. Our curriculum spans from short-term certificate courses to advanced postgraduate degrees, all structured to provide practical skills alongside theoretical knowledge.
                            </p>
                            <p class="mb-4">
                                All IEST programmes are meticulously aligned with the Sri Lanka Qualifications Framework (SLQF) standards, ensuring nationally and internationally recognized credentials. This alignment guarantees that our graduates receive qualifications that are valued both locally and globally, facilitating career advancement and further educational opportunities.
                            </p>
                            <p>
                                We prioritize industry relevance in our programme design, regularly consulting with employers and professionals to ensure our curriculum addresses current workplace demands. Our flexible learning options—including online, blended, and traditional formats—make quality education accessible to diverse learners, from recent school leavers to working professionals seeking career advancement.
                            </p>
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
                            <button id="Applynow" data-type='Certificate Courses' class="btn iest-programme-btn Applynow">Enquire Now</button>
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
                            <button id="Applynow" data-type='Diploma Programmes' class="btn iest-programme-btn Applynow">Enquire Now</button>
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
                            <button id="Applynow" data-type='Undergraduate Degrees' class="btn iest-programme-btn Applynow">Enquire Now</button>
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
                            <button id="Applynow" data-type='Postgraduate Programmes' class="btn iest-programme-btn Applynow">Enquire Now</button>
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
                            <button  id="Applynow" data-type='Professional Development' class="btn iest-programme-btn Applynow">Enquire Now</button>
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
                            <button id="Applynow" data-type='Customised Training' class="btn iest-programme-btn Applynow">Enquire Now</button>
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

        <!-- 5️⃣ Academic Standards & Recognition -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Academic Standards & Recognition</h2>
                    <p class="iest-section-subtitle">Ensuring quality and global relevance in all our programmes</p>
                </div>
                
                <div class="row g-4">
                    <!-- SLQF Alignment -->
                    <div class="col-md-4">
                        <div class="iest-standards-card">
                            <div class="iest-standards-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <h3 class="iest-standards-title">SLQF Alignment</h3>
                            <p class="iest-standards-desc">All IEST programmes are designed in accordance with the Sri Lanka Qualifications Framework (SLQF), ensuring national recognition and standardized quality benchmarks across all educational levels.</p>
                        </div>
                    </div>
                    
                    <!-- UGC-Recognized Programmes -->
                    <div class="col-md-4">
                        <div class="iest-standards-card">
                            <div class="iest-standards-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <h3 class="iest-standards-title">UGC-Recognized Programmes</h3>
                            <p class="iest-standards-desc">Our degree programmes receive recognition from the University Grants Commission (UGC), affirming their compliance with national higher education standards and quality assurance requirements.</p>
                        </div>
                    </div>
                    
                    <!-- Global Academic Relevance -->
                    <div class="col-md-4">
                        <div class="iest-standards-card">
                            <div class="iest-standards-icon">
                                <i class="fas fa-globe-americas"></i>
                            </div>
                            <h3 class="iest-standards-title">Global Academic Relevance</h3>
                            <p class="iest-standards-desc">Our curriculum incorporates international best practices and is regularly reviewed to maintain global relevance, facilitating credit transfers and international recognition of qualifications.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col-lg-10 mx-auto">
                        <div class="text-center">
                            <div class="iest-overview-text">
                                <p>
                                    IEST maintains rigorous quality assurance processes, including regular programme reviews, industry consultation, and stakeholder feedback mechanisms. Our commitment to academic standards extends to continuous improvement initiatives, ensuring that our programmes remain current, relevant, and responsive to evolving educational and industry needs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6️⃣ Enrolment Call-to-Action -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="iest-enrolment-cta">
                            <h2 class="iest-enrolment-title">Begin Your Academic Journey with IEST</h2>
                            <p class="iest-enrolment-subtitle">Take the next step toward your educational and career goals. Our admissions team is ready to guide you through programme selection, application procedures, and enrolment requirements.</p>
                            <a href="contact.html" class="btn iest-enrolment-btn">Contact Admissions</a>
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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Custom JavaScript -->

     <script>
        $(document).ready(function () {

            $('.Applynow').on('click', function () {
                $('#quickContactModal').modal('show');
                
                $('#type').val($(this).data('type'));
                $('#BookingModalLabel').text('Apply Now - Quick Enquire  Form - ' + $(this).data('type'));
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
            
            // Programme button click handlers
            // document.querySelectorAll('.iest-site .iest-programme-btn').forEach(button => {
            //     button.addEventListener('click', function() {
            //         const programmeTitle = this.closest('.iest-programme-card').querySelector('.iest-programme-title').textContent;
                    
            //         if (programmeTitle === "Enquire Now") {
            //             // For "Enquire Now" buttons
            //             window.location.href = "contact.html?enquiry=" + encodeURIComponent(programmeTitle);
            //         } else {
            //             // For "Enquire Now" buttons
            //             alert(`You selected: ${programmeTitle}. This would navigate to the detailed programme information page.`);
            //             // In production, this would redirect to: window.location.href = `programme-details.html?programme=${encodeURIComponent(programmeTitle)}`;
            //         }
            //     });
            // });
            
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