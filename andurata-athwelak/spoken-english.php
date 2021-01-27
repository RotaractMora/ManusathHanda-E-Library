<?php
include_once('../components/header.php');
include_once('../components/navbar.php');
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<?php echo getHeader(' | Spoken English course'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

        <!-- Highlights -->
        <section class="wrapper">
            <div class="inner">
                <header class="special">
                    <h2>Select a level to begin</h2>
                </header>
                <div class="highlights">
                    <!--Selectable categories-->
                    <section>
                        <div class="content" style="cursor: pointer;" onclick="window.location='./spoken-english/beginner/beginner.php'">
                            <header>
                                <img src="/images/audiobook-icon-66.png" width="50%" />
                                <h3>Beginners</h3>
                            </header>
                        </div>
                    </section>

                    <section>
                        <div class="content" style="cursor: pointer;" onclick="window.location='./spoken-english/intermediate/intermediate.php'">
                            <header>
                                <img src="/images/audiobook-icon-66.png" width="50%" />
                                <h3>Intermediate</h3>
                            </header>
                        </div>
                    </section>

                    <section>
                        <div class="content" style="cursor: pointer;" onclick="window.location='./spoken-english/advanced/advanced.php'">
                            <header>
                                <img src="/images/audiobook-icon-66.png" width="50%" />
                                <h3>Advanced</h3>
                            </header>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php include_once('../components/footer.php'); ?>

    </body>

</html>