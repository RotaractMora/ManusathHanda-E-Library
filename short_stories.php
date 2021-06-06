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
<html lang="en">
<?php echo getHeader(' | Short stories'); ?>

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
                    <a href="./short-stories/marine-drive.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>Marine drive</h3>
                            </header>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once('components/footer.php'); ?>

</body>

</html>