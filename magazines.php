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
<?php echo getHeader(' | Magazines'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Select a Genre</h2>
            </header>
            <div class="highlights">
                <!--Selectable categories-->
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./magazines/magazines_අභ්‍යවකාශය.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>අභ්‍යවකාශය</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./magazines/magazines_ඉතිහාසය.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>ඉතිහාසය</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./magazines/magazines_කලාව_හා_ආගම.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>කලාව හා ආගම</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./magazines/magazines_ජන_කතා.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>ජන කතා</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./magazines/magazines_විද්‍යාව.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>විද්‍යාව</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./magazines/magazines_විවිධ.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>විවිධ</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./magazines/magazines_literature.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>සාහිත්‍යය</h3>
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