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
<?php echo getHeader(' | Andurata Athwelak'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Select a Section</h2>
            </header>
            <div class="highlights" style="justify-content: center;">
                <!--Selectable categories-->
                <section>
                    <a href="./andurata-athwelak/spoken-english.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                                <h3>Spoken English course</h3>
                            </header>
                            <p>Listen to a series of a day to day conversions to improve your spoken english skills.</p>
                        </div>
                    </a>
                </section>

                <section>
                    <a href="./andurata-athwelak/it-course.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                                <h3>Basic Computer Knowledge course</h3>
                            </header>
                            <p>Listen to a growing collection that gives basic computer knowledge for day to day life and corporate work.</p>
                        </div>
                </section>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once('components/footer.php'); ?>

</body>

</html>