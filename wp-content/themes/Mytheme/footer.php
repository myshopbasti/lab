


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Connect With Us</h3>
                <ul class="contact_footer">
                    <li><i class="fa-solid fa-location-dot"></i> Mahadeva Chauraha Main Road, Basti</li>
                    <li><i class="fa-solid fa-phone"></i> <a href="tel:+917982241302">7982241302</a></li>
                    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:myshopbasti@gmail.com" class="mail">myshopbasti@gmail.com</a></li>
                </ul>
                <ul class="icons">
                    <li><a href="javascript:void()"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="javascript:void()"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="javascript:void()"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="javascript:void()"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Our Products</h3>
                <ul class="products_footer">
                    <li><a href="#">First</a></li>
                    <li><a href="#">Second</a></li>
                    <li><a href="#">Third</a></li>
                    <li><a href="#">Fourth</a></li>
                    <li><a href="#">Fifth</a></li>
                    <li><a href="#">Sixth</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Newsletter</h3>
               <div class="newsletter">
                   <p class="p1">Get in your inbox the latest News</p>
                   <?php echo do_shortcode( '[contact-form-7 id="67" title="Newsletter"]' ); ?>
                   <p class="p2">Subscribe and get our weekly newsletter</p>
                   <p class="p3">We'll never share your email address</p>
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="copyright">© 2016 Arixson All Rights Reserved. Design &amp; Develop By Sunil Vishwakarma</p>
            </div>
        </div>
    </div>
</footer>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/33ae677586.js" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    fluidSpeed:true,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>



</body>
</html>