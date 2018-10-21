<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Membership Form</title>
    <!--
    CSS
    ============================================= -->
    <?php
        include_once "styles.php"
    ?>
</head>
<body>

    <?php
        include_once "header.php"
    ?>
    
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <br><br><br>
                    <h1 class="text-white">
                        Membership Form
                    </h1>
                    <br><br><br>	
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start Membership Form -->
    <br>
    <div class="container">
        <div class="typography typo-sec">
            <h2 class="typo-list">Membership Form</h2>
        </div>
        <form action="m.php">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mt-10">
                            <input type="text" name="fname" placeholder="First Name" onfocus="this.placeholder=''" onblur="this.placeholder='First Name'" required class="single-input">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-10">
                            <input type="text" name="lname" placeholder="Last Name" onfocus="this.placeholder=''" onblur="this.placeholder='Last Name'" required class="single-input">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-20">
                            <input type="email" name="e_mail" placeholder="example@xyz.com" onfocus="this.placeholder=''" onblur="this.placeholder='example@xyz.com'" required class="single-input">
                        </div>
                    </div>    
                </div>
            </div>
            <div class="mt-40 text-right">
                <a href="#" class="genric-btn primary radius arrow">Create</a>
            </div>
        </form>
    </div>
    <br>
    <!-- End Membership Form -- >    

    <?php
        include_once "footer.php"
    ?>

    <?php
        include_once "javascripts.php"
    ?>

</body>
</html>