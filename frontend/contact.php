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
        var a = document.querySelector("#contact");
        a.classList.add("active");
        var b = document.querySelector('.banner');
        b.style.background = 'url("../used/contact_banner.png")'
        var b = document.querySelector('.banner h1');
        b.innerHTML = "Contact"
    </script>

    <!-- heading -->
    <div class="col-12 writeup" style="padding-top: 0px;">
        <h3 class="fw-bolder" style="font-size: 2.2em; font-weight: bolder;">Contact Us.</h3>

    </div>

    <div class="about container">
        <p>We'd love to hear from you! Please get in touch with us via contact form or email us at info@arreybhai.com or
            call us
        </p>
        <p>
            Our support team is available on week days, 9:00 am IST to 5:00 pm IST.
        </p>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $msg = $_POST['msg'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $sql = "INSERT INTO contact(email,name,phone,msg) VALUES('$email','$name','$phone','$msg')";
            if (mysqli_query($conn, $sql)) {
                echo "<h4 style='color:green; border : 1px solid green; padding:10px'>Thanks for contacting us. We'll get back to you as soon as possible.</h4>";
            }
        }
        ?>


    </div>

    <!-- contact form -->

    <div class="about container">
        <form action="contact.php" method="POST">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name='name'>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email <small>*</small></label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3 col-12">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3 col-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="8" name="msg"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-dark" value="submit" name="submit"> SEND </button>
        </form>
    </div>





    <!-- FOOTER -->
    <?php
    include('footer.php');
    ?>


</body>

</html>