<?php
include_once('components/header.php');
include_once('components/navbar.php');
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<?php echo getHeader('Short stories'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

        <!-- Highlights -->
        <section class="wrapper">
            <div class="inner">
                <header class="special">
                    <h2>Select a Story</h2>
                </header>
                <div class="highlights">
                    <!--Selectable categories-->
                    <section>
                        <div class="content" style="cursor: pointer;" onclick="window.location='./short-stories/marine-drive.php'">
                            <header>
                                <img src="/images/audiobook-icon-66.png" width="50%" />
                                <h3>Marine drive</h3>
                            </header>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once('components/footer.php'); ?>

    </body>

</html>