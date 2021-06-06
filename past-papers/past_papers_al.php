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
<html lang="en">
<?php echo getHeader(' | Past Papers | Sinhala Medium | Advanced Level'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Select a Subject</h2>
            </header>
            <div class="highlights">
                <!--Selectable categories-->
                <section>
                    <a href="./a-level/AL_past_papers_Buddhist_Civilisation.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>Buddhist Civilisation</h3>
                            </header>
                        </div>
                    </a>
                </section>

                <section>
                    <a href="./a-level/AL_past_papers_Communication.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>Communication & Media Studies</h3>
                            </header>
                        </div>
                    </a>
                </section>
                <section>
                    <a href="./a-level/AL_past_papers_History.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>History</h3>
                            </header>
                        </div>
                    </a>
                </section>
                <section>
                    <a href="./a-level/AL_past_papers_Political_science.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>Political Science</h3>
                            </header>
                        </div>
                    </a>
                </section>
                <section>
                    <a href="./a-level/AL_past_papers_Sinhala.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>Sinhala</h3>
                            </header>
                        </div>
                    </a>
                </section>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once('../components/footer.php'); ?>

</body>

</html>