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
<?php echo getHeader(' | Past Papers | Sinhala Medium | Ordinary Level'); ?>

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
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_civics.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Civics</h3>
                        </header>
                    </div>
                </section>

                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_homescience.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Home Science</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_agri.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Agriculture</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_english.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>English</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_history.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>History</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_buddhism.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Buddhism</h3>
                        </header>
                    </div>
                </section>

                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_christianity.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Christianity</h3>
                        </header>
                    </div>
                </section>

                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_science.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Science</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./o-level/past_papers_sinhala.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
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