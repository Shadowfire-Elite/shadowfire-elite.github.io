<footer class="lh-base mt-3">
    <!-- Footer main -->
    <section class="d-flex flex-wrap justify-content-between py-3 px-5 columns">
        <div class="col col-xl-4 p-3" id="brand">
            <h2 class="px-2">Groceries</h2>
            <p class="ps-2 me-lg-5">At Groceries, we strive to bring you the best of our hand-picked, fine quality products, at convenient prices</p>
            <ul class="list-unstyled d-flex">
                <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.github.com" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.web.whatsapp.com" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="spacing"></div>
        <div class="col p-3 links tabs">
            <h4>About</h4>
            <ul class="list-unstyled">
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div>
        <div class="col p-3 links tabs">
            <h4>Resources</h4>
            <ul class="list-unstyled">
                <li><a href="#">Docs</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">eBooks</a></li>
                <li><a href="#">Webinars</a></li>
            </ul>
        </div>
        <div class="col p-3 links" id="contact">
            <h4>Contact</h4>
            <p> Contact us today at:
                <br>
                <a href="mailto:example@gmail.com"> <i class="fas fa-envelope fa-fw"></i> example@gmail.com </a>
                <br>
                <a href="tel:+1234567890"> <i class="fas fa-phone fa-fw"></i> +1-234-567-890 </a>
            </p>
        </div>
        <div class="spacing"></div>
        <div class="col p-3" id="news">
            <h4>Stay Updated</h4>
            <p class="mb-2">Subscribe to our newsletter to get our latest news.</p>
            <form class="d-flex">
                <input type="email" name="email" placeholder="Enter email address" class="p-2 border-0">
                <input type="submit" value="Subscribe" class="p-2 border-0">
            </form>
        </div>
    </section>

    <!-- Footer legal -->
    <section class="ft-legal col-auto">
        <ul class="d-flex flex-wrap list-unstyled w-100 py-3 px-4 mb-0">
            <li class="text-nowrap mx-2 my-1"><a href="#">Terms &amp; Conditions</a></li>
            <li class="col text-nowrap mx-2 my-1"><a href="#">Privacy Policy</a></li>
            <li class="text-nowrap mx-2 my-1">&copy; 2019 Copyright Nowrap Inc.</li>
        </ul>
    </section>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="assets/js/popper.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.bundle.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $(".mavbar-nav a").click(function() {
            $("a.selector.active").removeAttr("aria-current");
            $("a.selector.active").removeClass("active");
            $(this).addClass("active");
            $(this).attr("aria-current", "page");
        });
    });
</script>
</body>

</html>