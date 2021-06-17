<html lang="en">

<!-- HEAD -->
<?php
include('head.php');
?>

<body>
    <!-- HEADER -->
    <?php
    include('header.php');
    include('banner.php');

    ?>
    <script>
        var a = document.querySelector("#about");
        a.classList.add("active");
        var b = document.querySelector('.banner');
        b.style.background = 'url("../used/about_banner.jpg")'
        var b = document.querySelector('.banner h1');
        b.innerHTML = "About"
    </script>





    <!-- About in About page -->

    <!-- heading -->
    <div class="col-12 writeup" style="padding-top: 0px;">
        <h3 class="fw-bolder" style="font-size: 2.2em; font-weight: bolder;">About Us</h3>
    </div>
    <!-- content -->
    <div class="about container">
        <p class="fw-bold">Arrey! Bhai. Top destination for trendy & aesthetic apparels. </p>
        </p>

        <p>Arrey Bhai is a fashion brand based in New Delhi, India. We have a unique combination of aestheticism and
            trend.
        </p>
        <p>
            We provide high quality plain and printed T-shirts at an affordable price. We are expanding our inventory
            everyday so soon we are planning to launch products like Hoodies, Face masks, lowers, caps and more.
        </p>

        <p>
            We offer all the products at factory prices since the products are made in-house.
        </p>
    </div>

    <!-- office address -->

    <div class="about container">
        <h3 class="fw-bolder mb-4" style="font-size: 1.7em; font-weight: bolder;">Office Address
        </h3>
        <p>Arre Bro Apparels
        </p>
        <p>Sec 11, Gurgaon, IN 122001
        </p>
        <p>
            info@arreybhai.com <span class="fst-italic">(Monday to Saturday, 10:00am - 6:00pm)</span>
        </p>
    </div>




    <!-- FOOTER -->
    <?php
    include('footer.php');
    ?>
</body>

</html>