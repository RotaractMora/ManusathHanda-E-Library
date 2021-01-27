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
                    <div class="content" style="cursor: pointer;" onclick="window.location='./a-level/AL_past_papers_Buddhist_Civilisation.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>Buddhist Civilisation</h3>
                        </header>
                    </div>
                </section>

                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./a-level/AL_past_papers_Communication.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>Communication & Media Studies</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./a-level/AL_past_papers_History.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>History</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./a-level/AL_past_papers_Political_science.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>Political Science</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./a-level/AL_past_papers_Sinhala.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>Sinhala</h3>
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