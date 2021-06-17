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
        var b = document.querySelector('.banner');
        b.style.background = 'url("../used/covid_banner.png")'
        var b = document.querySelector('.banner h1');
        b.innerHTML = "Update"
    </script>

    <!-- covid update -->

    <!-- heading -->
    <div class="col-12 writeup" style="padding-top: 0px;">
        <h3 class="fw-bolder" style="font-size: 2.2em; font-weight: bolder;">COVID-19 Update</h3>
    </div>
    <!-- content -->
    <div class="about container">
        <p class="fw-bold">An update about COVID-19</p>
        </p>

        <p>With the ongoing situation of COVID-19, we wanted to share an update with you. These are uncertain times, but we are sure about one thing: putting the health and safety of our customers and team at the topmost priority.
        </p>
        <p>
            We are doing everything we can to ensure the continued sanitization of all our products and facilities. Our team is committed to staying healthy, and helping our customers stay healthy, too.
        </p>

        <p>
            We apologize for any delays in getting your order delivered. Production or shipping may be impacted by global issues beyond our control, and cause a bit of a delay. We appreciate your patience.
        </p>

        <p>
            Also, Due to Covid-19 pandemic we are not accepting any refunds at this time as we have limited inventory.
        </p>

        <p style="margin-top: 50px;">
            Wear Mask! Stay Safe! Stay Well!


        </p>
    </div>



    <!-- FOOTER -->
    <?php
    include('footer.php');
    ?>

</body>

</html>