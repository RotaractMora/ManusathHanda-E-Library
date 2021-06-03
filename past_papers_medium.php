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
<?php echo getHeader(' | Past Papers | Medium'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Select a Medium</h2>
            </header>
            <div class="highlights" style="justify-content: center;">
                <!--Selectable categories-->
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./past_papers.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Sinhala</h3>
                        </header>
                    </div>
                </section>

                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./past-papers-tamil/past_papers_ol.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Tamil</h3>
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