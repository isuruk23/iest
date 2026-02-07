 <footer id="contact" class="iest-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <h3 class="iest-footer-title">Institute of Earth Sciences and Technology (IEST)</h3>
                        <p class="mb-4">Empowering future generations through Earth Sciences, Technology, and multidisciplinary education for a sustainable future.</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/share/1WRmBKvyQt/" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                                <!-- <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a> -->
                                <a href="https://youtube.com/@earthsciencesandtechnologyinst?si=6hX-mu5V2W8YacMo" class="text-white"><i class="fab fa-youtube"></i></a>
                            </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <h3 class="iest-footer-title">Contact Information</h3>
                        <div class="iest-footer-contact">
                            <p><i class="fas fa-phone"></i> +94 706 960 580</p>
                            <p><i class="fas fa-envelope"></i> info.earthsti@gmail.com</p>
                            <p><i class="fas fa-map-marker-alt"></i> Colombo, Sri Lanka</p>
                            <p><i class="fas fa-clock"></i> Monday - Friday: 9:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="iest-copyright">
                            <p>&copy; <span id="currentYear"></span> Institute of Earth Sciences and Technology (IEST). All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
          <!-- WhatsApp/Live Chat Button -->
            <a href="https://wa.me/+94706960580" 
            class="whatsapp-btn" 
            target="_blank"
            aria-label="Contact IEST on WhatsApp">
                <i class="fab fa-whatsapp"></i>
                <span class="whatsapp-tooltip">Chat with us on WhatsApp</span>
            </a>

            <div class="modal fade" id="quickContactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="BookingModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <img src="images/logo.png" alt="Care1st Logo"  class="img-fluid mb-3">
                    </div>
                    <div class="col-6">
                        <form id="quickBookForm">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name *</label>
                            <input type="text" class="form-control" id="fullName" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone *</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <input type="hidden" class="form-control" id="type">

                        <button type="button" id="submitBook" class="btn btn-primary w-100">Submit Request</button>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>