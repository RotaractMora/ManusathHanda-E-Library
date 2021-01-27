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
                    <div class="content" style="cursor: pointer;" onclick="window.location='./folk-tales/magazines_ජන_කතා_දේශීය_ජන_කතා.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>දේශීය ජන කතා</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./folk-tales/magazines_ජන_කතා_රට_රට_වල_ජන_කතා.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" width="50%" />
                            <h3>රට රට වල ජන කතා</h3>
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