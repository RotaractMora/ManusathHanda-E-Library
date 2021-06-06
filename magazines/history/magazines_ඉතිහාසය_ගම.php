<?php
include_once('../../components/header.php');
include_once('../../components/navbar.php');
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">

<?php echo getHeader(' | Magazine | History | ගම'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>ගම</h2>
            </header>
            <div class="highlights">
                <!--Selectable categories-->
                <section>
                    <a href="./village/magazines_ඉතිහාසය_ගම_එදා_ගමට_ආ_අය.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>එදා ගමට ආ අය</h3>
                            </header>
                        </div>
                    </a>
                </section>
                <section>
                    <a href="./village/magazines_ඉතිහාසය_ගම_ගමරාලගේ_කතාබහා.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>ගමරාලගේ කතාබහ</h3>
                            </header>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once('../../components/footer.php'); ?>

</body>

</html>