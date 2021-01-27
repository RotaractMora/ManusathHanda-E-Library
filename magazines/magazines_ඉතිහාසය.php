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
<?php echo getHeader(' | Magazine | ඉතිහාසය'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>ඉතිහාසය</h2>
            </header>
            <div class="highlights">
                <!--Selectable categories-->
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./history/magazines_ඉතිහාසය_අපේ_පුරාණ_විත්ති_මහාචාර්ය_රාජ්_සෝමදේව.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>අපේ පුරාණ විත්ති මහාචාර්ය රාජ් සෝමදේව</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./history/magazines_ඉතිහාසය_ගම.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>ගම</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./history/magazines_ඉතිහාසය_දේශගවේෂණය.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>දේශ ගවේෂණය</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./history/magazines_ඉතිහාසය_දේශපාලනය.php';">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>දේශපාලනය</h3>
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