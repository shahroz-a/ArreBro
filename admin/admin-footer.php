

<?php
include('admin-head.php');

?>
    <link rel="stylesheet" href="../css/style.css">


    <!-- FOOTER -->
    <footer class="footer" style="margin-top:0 ;">

        <div class="footer-content mb-5" >
            <div class="container"></div>
            <div class="row">
                <div class="col-12 col-md-3" id="quick-links">
                    <h4>Quick links</h4>
                    <ul class="list-unstyled">
                        <li class="footer-li py-3 py-md-0" id="">
                            <a href="../product.php" class="under">Shop</a>
                        </li>
                        <li class="footer-li py-3 py-md-0">
                            <a href="../About.php" class="under">About Us</a>
                        </li>
                        <li class="footer-li py-3 py-md-0">
                            <a href="../contact.php" class="under">Contact Us</a>
                        </li>
      
                    </ul>
                </div>
                <div class="col-12 col-md-6 " id="newsletter">
                    <h4>Newsletter</h4>
                    <form action="">
                        <input class="form-control mb-2" type="email" placeholder="Email Address">
                        <button type="submit" class="btn btn-dark">SUBSCRIBE</button>
                    </form>
                </div>
                <div class="col-12 col-md-3" id="contact">
                    <h4>Contact</h4>
                    <p>ArreyBhai Apparels</p>
                    <p>Sec 11, Gurgaon, IN 122001</p>
                    <p>
                        <a href="mailto:info@arreybhai.com">info@arreybhai.com</a>
                    </p>
                </div>
            </div>
        </div>
      
        <hr class="mb-3">
      
        <div class="footer-content pt-3">
      
            <ul class="list-unstyled pull-left" id="handles">
                <li class="px-3">
                    <a href="">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
      
      
                </li>
                <li class="px-3">
                    <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
      
                    </a>
                </li>
      
                <li class="px-3">
                    <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
      
            <small class="pull-right">
                © 2021, Arrey!Bhai. All Right reserver
            </small>
        </div>
     <?php 
 mysqli_close($conn);
     ?>
      </footer>


