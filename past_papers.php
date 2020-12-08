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
<?php echo getHeader('Past Papers'); ?>

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
                    <div class="content" style="cursor: pointer;" onclick="window.location='./past-papers/past_papers_ol.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>G.C.E. Ordinary Level - Past papers</h3>
                        </header>
                    </div>
                </section>

                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./past-papers/past_papers_al.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>G.C.E. Advanced Level - Past papers</h3>
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