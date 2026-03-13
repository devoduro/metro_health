<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <a href="<?php echo e(route('home')); ?>" class="d-block mb-3">
                    <img src="<?php echo e(asset('images/2026-01-12-J8o94jxc.png')); ?>" alt="Ashlocs Logo" class="footer-logo">
                </a>
                <p class="small text-white mb-4">We specialize in dreadlocks, offering everything from starter locs (crochet) and traditional full-head locs to partial/top locs, Sisterlocks and microlocs and expert re-locking and maintenance.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/share/183aATKKiS/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ashlocs" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@ashlocs_dreadlocks" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                <h5 class="mb-3 fs-6 text-white text-uppercase">Services</h5>
                <a href="<?php echo e(route('home')); ?>" class="footer-link">Home</a>
                <a href="<?php echo e(route('about')); ?>" class="footer-link">About Us</a>
                <a href="<?php echo e(route('services.index')); ?>" class="footer-link">Our Services</a>
                <a href="<?php echo e(route('contact')); ?>" class="footer-link">Contact Us</a>
            </div>
            <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                <h5 class="mb-3 fs-6 text-white text-uppercase">Company</h5>
                <a href="<?php echo e(route('shop.index')); ?>" class="footer-link">Shop</a>
                <a href="<?php echo e(route('booking.index')); ?>" class="footer-link">Book Appointment</a>
            </div>
            <div class="col-lg-4">
                <h5 class="mb-3 fs-6 text-white text-uppercase">Contact</h5>
                <p class="small text-muted mb-2"><i class="fas fa-phone me-2"></i>+447724500349</p>
                <p class="small text-muted mb-2"><i class="fas fa-envelope me-2"></i>bookings@ashlocs.co.uk</p>
                <p class="small text-muted"><i class="fas fa-map-marker-alt me-2"></i>UK-wide Home Service and 9 Union St RG1 1EU - United Kingdom</p>
            </div>
        </div>
        <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">
        <div class="text-center small text-white">
            &copy; <span id="year"></span> Ashlocs. All Rights Reserved.
        </div>
    </div>
</footer>
<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/metrohealth/resources/views/partials/footer.blade.php ENDPATH**/ ?>