<footer id="footer" class="footer dark-background">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="/" class="logo d-flex align-items-center">
                        <img src="assets/img/TechProviderLogo.png" alt="">
                        <span class="sitename">TP.</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>
                            At Tech Provider, we are more than just a tech company – we are your trusted
                            partner in building innovative digital solutions that empower businesses to achieve their
                            goals.
                        </p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a target="_blank" href="https://www.facebook.com/share/1BK3Dk125n/"><i
                                class="bi bi-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/itz.pk24?igsh=Zm9uc3R6YjJnaHJj"><i
                                class="bi bi-instagram"></i></a>
                        <a target="_blank"
                            href="https://www.linkedin.com/in/ram-babu-ram-969616204?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i> <a href="/"> Home</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i> <a href="/about"> About us</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i> <a href="/service"> Services</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/team"> Teams</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/blog"> Blogs</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="/contact"> Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#"> Web Development</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#"> Android Development</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#"> Product Management</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#"> Graphic Design</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#"> Figma Design</a>
                        </li>
                        <li>
                            <i class="bi bi-chevron-right"></i>
                            <a href="#"> UI/UX Design</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Address</h4>
                    <div class="footer-contact pt-3">
                        <p><i class="bi bi-house"></i> Ashoka Garden, Near By Police Station,</p>
                        <p>Bhopal, Madhya Pradesh, 462024</p>
                        <p class="mt-3">
                            <strong><i class="bi bi-phone"></i></strong> <span>+91 6392 3262 38, 8809 7084 29</span>
                        </p>
                        <p><strong><i class="bi bi-envelope"></i></strong> <span>techprovider@gmail.com</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container text-center">
            <p>
                © <span>Copyright</span> 2025 <strong class="px-1 sitename">Tech Provider</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                Designed by
                <a href="https://bootstrapmade.com/">Tech Provider Web Sparks</a>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<script>
    // JavaScript to handle tab switching
    document.addEventListener("DOMContentLoaded", () => {
        const tabs = document.querySelectorAll(".tab-link");
        const tabContents = document.querySelectorAll(".tab-content");

        tabs.forEach((tab) => {
            tab.addEventListener("click", (e) => {
                e.preventDefault();

                // Remove active class from all tabs
                tabs.forEach((t) => t.classList.remove("active"));

                // Add active class to the clicked tab
                tab.classList.add("active");

                // Hide all tab contents
                tabContents.forEach((content) => content.classList.remove("active"));

                // Show the corresponding tab content
                const target = tab.getAttribute("data-tab");
                document.getElementById(target).classList.add("active");
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Current page path
        const currentPath = window.location.pathname;
        // Get all nav links
        const navLinks = document.querySelectorAll(".navmenu .nav-link");

        navLinks.forEach(link => {
            // Check if link href matches current path
            if (link.getAttribute("href") === currentPath) {
                link.classList.add("active");
            }
        });
    });
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            1024: {
                slidesPerView: 4
            },
            768: {
                slidesPerView: 2
            },
            480: {
                slidesPerView: 1
            }
        }
    });
</script>
</body>

</html>
