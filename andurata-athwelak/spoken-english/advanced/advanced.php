<?php
include_once('../../../components/header.php');
include_once('../../../components/navbar.php');
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<?php echo getHeader(' | Spoken English course | Beginner'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Select a section</h2>
            </header>
            <div class="highlights justify-content-center">
                <!--Selectable categories-->
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./conversations.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Conversations</h3>
                        </header>
                    </div>
                </section>

                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./conversations-with-translation.php'">
                        <header>
                            <img src="/images/audiobook-icon-66.png" alt="" width="50%" />
                            <h3>Conversations (With Translation)</h3>
                        </header>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include_once('../../../components/footer.php'); ?>

</body>

</html>