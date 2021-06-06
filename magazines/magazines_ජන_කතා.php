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
<?php echo getHeader(' | Magazine | Folk tales'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>ජන කතා</h2>
            </header>
            <div class="highlights">
                <!--Selectable categories-->
                <section>
                    <a href="./folk-tales/magazines_ජන_කතා_දේශීය_ජන_කතා.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>දේශීය ජන කතා</h3>
                            </header>
                        </div>
                    </a>
                </section>
                <section>
                    <a href="./folk-tales/magazines_ජන_කතා_රට_රට_වල_ජන_කතා.php">
                        <div class="content" style="cursor: pointer;">
                            <header>
                                <img src="/images/audiobook-icon-66.png" alt="" class="audiobook-icon" />
                                <h3>රට රට වල ජන කතා</h3>
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