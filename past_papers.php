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
<?php echo getHeader(' | Past Papers | Sinhala Medium'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Select a Subject</h2>
            </header>
            <div class="highlights" style="justify-content: center;">
                <!--Selectable categories-->
                <section>
                    <a href="./past-papers/past_papers_ol.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                                <h3>G.C.E. Ordinary Level - Past papers</h3>
                            </header>
                        </div>
                    </a>
                </section>

                <section>
                    <a href="./past-papers/past_papers_al.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                                <h3>G.C.E. Advanced Level - Past papers</h3>
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