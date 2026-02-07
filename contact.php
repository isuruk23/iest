<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Institute of Earth Sciences and Technology (IEST)</title>
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
        <section class="iest-page-header" style="background: linear-gradient(rgba(26, 95, 122, 0.3), rgba(26, 95, 122, 0.2)), 
                        url('images/contact-banner.jpg') no-repeat center center; background-size: cover;">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb iest-breadcrumb">
                        <li class="breadcrumb-item iest-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item iest-breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
                <h1 class="iest-page-title">Contact Us</h1>
                <p class="iest-page-subtitle">We're here to support your academic journey</p>
            </div>
        </section>

        <!-- 2️⃣ Contact Overview -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h2 class="iest-section-title">Get in Touch</h2>
                        <div class="iest-overview-text">
                            <p class="mb-4">
                                Whether you're a prospective student exploring educational opportunities, a current student seeking academic support, a parent with questions, or an institutional partner interested in collaboration, our team at the Institute of Earth Sciences and Technology is here to assist you.
                            </p>
                            <p class="mb-0">
                                We pride ourselves on providing friendly, responsive, and professional support to help you navigate your academic journey. Our admissions and academic support teams are dedicated to answering your questions and guiding you through our programmes, study modes, and enrolment processes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3️⃣ Contact Information Section -->
        <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Contact Information</h2>
                    <p class="iest-section-subtitle">Reach out to us through any of these channels</p>
                </div>
                
                <div class="row g-4">
                    <!-- Phone -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-contact-card">
                            <div class="iest-contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h3 class="iest-contact-title">Phone</h3>
                            <p class="iest-contact-detail">
                                <a href="tel:+94706960580" class="text-decoration-none">+94 706 960 580</a>
                            </p>
                            <p class="iest-contact-note">
                                Available during office hours. For urgent inquiries outside office hours, please leave a voicemail or send an email.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-contact-card">
                            <div class="iest-contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h3 class="iest-contact-title">Email</h3>
                            <p class="iest-contact-detail">
                                <a href="mailto:info.earthsti@gmail.com" class="text-decoration-none">info.earthsti@gmail.com</a>
                            </p>
                            <p class="iest-contact-note">
                                We typically respond within 24 hours during business days. For programme-specific inquiries, please mention the programme name.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Office Hours -->
                    <div class="col-md-6 col-lg-4">
                        <div class="iest-contact-card">
                            <div class="iest-contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3 class="iest-contact-title">Office Hours</h3>
                            <p class="iest-contact-detail">Monday – Friday</p>
                            <p class="iest-contact-detail">9:00 AM – 5:00 PM</p>
                            <p class="iest-contact-note">
                                Sri Lanka Time (GMT+5:30). Closed on public holidays and weekends. Virtual appointments available upon request.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4️⃣ Contact Form Section -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div id="formMessage"></div>
                        <div class="iest-form-container">
                            <h2 class="iest-form-title text-center mb-4">Send Us a Message</h2>
                            
                            <form id="contactForm" action="#" method="POST" novalidate>
                                <div class="row g-3 mb-4">
                                    <!-- Full Name -->
                                    <div class="col-md-6">
                                        <label for="iestFullName" class="form-label iest-form-label">
                                            Full Name <span class="iest-required">*</span>
                                        </label>
                                        <input type="text" class="form-control iest-form-control" id="iestFullName" name="full_name" required>
                                        <div class="invalid-feedback">
                                            Please provide your full name.
                                        </div>
                                    </div>
                                    
                                    <!-- Email Address -->
                                    <div class="col-md-6">
                                        <label for="iestEmail" class="form-label iest-form-label">
                                            Email Address <span class="iest-required">*</span>
                                        </label>
                                        <input type="email" class="form-control iest-form-control" id="iestEmail" name="email" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid email address.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row g-3 mb-4">
                                    <!-- Phone Number -->
                                    <div class="col-md-6">
                                        <label for="iestPhone" class="form-label iest-form-label">
                                            Phone Number
                                        </label>
                                        <input type="tel" class="form-control iest-form-control" id="iestPhone" name="phone">
                                    </div>
                                    
                                    <!-- Subject -->
                                    <div class="col-md-6">
                                        <label for="iestSubject" class="form-label iest-form-label">
                                            Subject <span class="iest-required">*</span>
                                        </label>
                                        <select class="form-select iest-form-control" id="iestSubject" name="subject" required>
                                            <option value="" selected disabled>Select a subject</option>
                                            <option value="admissions">Admissions Inquiry</option>
                                            <option value="programmes">Programme Information</option>
                                            <option value="academic">Academic Support</option>
                                            <option value="fees">Fees and Payment</option>
                                            <option value="partnership">Partnership/Collaboration</option>
                                            <option value="other">Other Inquiry</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a subject.
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Message -->
                                <div class="mb-4">
                                    <label for="iestMessage" class="form-label iest-form-label">
                                        Message <span class="iest-required">*</span>
                                    </label>
                                    <textarea class="form-control iest-form-control iest-form-textarea" id="iestMessage" name="message" rows="5" required></textarea>
                                    <div class="invalid-feedback">
                                        Please enter your message.
                                    </div>
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="button" id="submitQuote" class="btn iest-form-btn">
                                        <i class="fas fa-paper-plane me-2"></i> Send Message
                                    </button>
                                </div>
                                
                                <div class="mt-3 text-center">
                                    <small class="text-muted">
                                        Fields marked with <span class="iest-required">*</span> are required.
                                    </small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5️⃣ Location / Map Section -->
        <!-- <section class="iest-section iest-section-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="iest-section-title">Our Location</h2>
                    <p class="iest-section-subtitle">Based in Colombo, serving students locally and internationally</p>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="iest-map-container">
                           
                            <div class="iest-map-placeholder">
                                <i class="fas fa-map-marker-alt"></i>
                                <p class="mb-0">Institute of Earth Sciences and Technology</p>
                                <p class="mb-0">Colombo, Sri Lanka</p>
                                <p class="mt-3">
                                    <small>In production, this would be replaced with a Google Maps iframe</small>
                                </p>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-8 mx-auto text-center">
                                <div class="iest-overview-text">
                                    <p class="mb-0">
                                        While our main administrative office is located in Colombo, our flexible study modes allow us to serve students from across Sri Lanka and internationally. For in-person meetings or campus visits, please contact us in advance to schedule an appointment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- 6️⃣ Admissions Call-to-Action -->
        <section class="iest-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="iest-admissions-cta">
                            <h2 class="iest-admissions-title">Have Questions About Admissions or Programmes?</h2>
                            <p class="iest-admissions-subtitle">Our academic advisors are ready to guide you through programme selection, admission requirements, and study options that fit your goals and lifestyle.</p>
                            <a href="tel::+94706960580" class="btn iest-admissions-btn">Speak to an Advisor</a>
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

            

           
            $('#submitQuote').on('click', function () {
                let name = $('#iestFullName').val().trim();
                let email = $('#iestEmail').val().trim();
                let phone = $('#iestPhone').val().trim();
                let subject = $('#iestSubject').val();

                // Validation
                if (name === '' || email === '' || phone === '' || subject === '') {
                    showMessage('⚠️ Please fill all required fields.', 'danger');
                    return;
                }

                // Fake AJAX (connect backend later)
                $.ajax({
                    url: "send-contact-email.php",
                    type: 'POST',
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        subject:subject,
                        message: $('#iestMessage').val()
                    },
                    beforeSend: function () {
                        showMessage('⏳ Sending your request...', 'info');
                    },
                    success: function (response) {
                        showMessage('✅ ' + response.message, 'success');
                        $('#contactForm')[0].reset();
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
            
            // Contact form validation and submission handling
            const contactForm = document.getElementById('iestContactForm');
            
            if (contactForm) {
                // Form validation
                contactForm.addEventListener('submit', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                    
                    // Check form validity
                    if (!contactForm.checkValidity()) {
                        contactForm.classList.add('was-validated');
                        return;
                    }
                    
                    // Form is valid - process submission
                    processFormSubmission();
                });
                
                // Reset validation on input change
                const formInputs = contactForm.querySelectorAll('input, select, textarea');
                formInputs.forEach(input => {
                    input.addEventListener('input', function() {
                        if (contactForm.classList.contains('was-validated')) {
                            this.classList.remove('is-invalid');
                            this.classList.remove('is-valid');
                            
                            // Re-check validity
                            if (this.checkValidity()) {
                                this.classList.add('is-valid');
                            } else {
                                this.classList.add('is-invalid');
                            }
                        }
                    });
                });
            }
            
            // Process form submission (frontend only - for demo)
            function processFormSubmission() {
                // Get form data
                const formData = new FormData(contactForm);
                const formObject = Object.fromEntries(formData.entries());
                
                // Show success message
                const submitButton = contactForm.querySelector('button[type="submit"]');
                const originalText = submitButton.innerHTML;
                
                // Change button to loading state
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
                submitButton.disabled = true;
                
                // Simulate API call delay
                setTimeout(function() {
                    // Show success alert
                    alert('Thank you for your message! In a production environment, this would be sent to our team and you would receive a confirmation email. For now, this is a frontend demonstration.');
                    
                    // Reset form
                    contactForm.reset();
                    contactForm.classList.remove('was-validated');
                    
                    // Reset button
                    submitButton.innerHTML = originalText;
                    submitButton.disabled = false;
                    
                    // In production, this would be an actual form submission:
                    // fetch('/api/contact', {
                    //     method: 'POST',
                    //     headers: {
                    //         'Content-Type': 'application/json',
                    //     },
                    //     body: JSON.stringify(formObject)
                    // })
                    // .then(response => response.json())
                    // .then(data => {
                    //     // Handle success
                    //     showSuccessMessage();
                    //     contactForm.reset();
                    // })
                    // .catch(error => {
                    //     // Handle error
                    //     showErrorMessage();
                    // })
                    // .finally(() => {
                    //     submitButton.innerHTML = originalText;
                    //     submitButton.disabled = false;
                    // });
                    
                }, 1500);
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
        });
    </script>
</body>
</html>