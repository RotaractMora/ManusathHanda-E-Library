<?php
    include_once('header.php');
    include_once('navbar.php');
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<?php echo getHeader('Past Papers'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php  echo getNavBar(); ?>

    <!-- Highlights -->
    <section class="wrapper">
        <div class="inner">
            <header class="special">
                <h2>Select a Subject</h2>
            </header>
            <div class="highlights">
                <!--Selectable categories-->
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./AL_past_papers_Buddhist_Civilisation.php';">
                        <header>
                            <img src="./images/audiobook-icon-66.png" width="50%" />
                            <h3>Buddhist Civilisation</h3>
                        </header>
                    </div>
                </section>

                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./AL_past_papers_Communication.php';">
                        <header>
                            <img src="./images/audiobook-icon-66.png" width="50%" />
                            <h3>Communication & Media Studies</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./AL_past_papers_History.php'">
                        <header>
                            <img src="./images/audiobook-icon-66.png" width="50%" />
                            <h3>History</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./AL_past_papers_Political_science.php'">
                        <header>
                            <img src="./images/audiobook-icon-66.png" width="50%" />
                            <h3>Political Science</h3>
                        </header>
                    </div>
                </section>
                <section>
                    <div class="content" style="cursor: pointer;" onclick="window.location='./AL_past_papers_Sinhala.php';">
                        <header>
                            <img src="./images/audiobook-icon-66.png" width="50%" />
                            <h3>Sinhala</h3>
                        </header>
                    </div>
                </section>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <div class="content">
                <section>
                    <h4>About Us</h4>
                    <p>Rotaract Mora has grown tremendously to a present member base of over 250 members. Rotaract Mora over the years has earned much recognition in the Rotaract movement, bagging multiple local, as well as international awards, and doing
                        projects with high quality, sustainability and continuity.</p>
                </section>
                <section>
                    <h4>Reach Us</h4>
                    <ul class="alt">
                        <li>
                            <img src="./images/post.png" class="footer-post-icon" />
                            <!--<strong>Post</strong>-->
                            <br /> Rotaract Club of University of Moratuwa,<br> University of Moratuwa,<br> Bandaranayake Mawatha,<br> Moratuwa. <br> 10400
                        </li>
                        <li>
                            <strong>Kaumada Gunasekara</strong>
                            <br/>
                            <img src="./images/phone.png" class="footer-phone-icon" />
                            <!--<strong>Post</strong>-->
                            +94 0719560458
                            <br/>
                            <img src="./images/email.png" class="footer-email-icon" />
                            <!--<strong>Post</strong>-->
                            kaugunasekara@gmail.com
                        </li>
                        <!--<li><a href="# ">Etiam vel lorem sed amet.</a></li>
								<li><a href="# ">Felis enim feugiat viverra.</a></li>
								<li><a href="# ">Dolor pulvinar magna etiam.</a></li>-->
                    </ul>
                </section>
                <section>
                    <h4>Follow Us</h4>
                    <ul class="plain ">
                        <li><a href="https://twitter.com/RotaractMora "><i class="icon fa-twitter ">&nbsp;</i>Twitter</a>
                        </li>
                        <li><a href="https://www.facebook.com/rotaractmora/ "><i
									class="icon fa-facebook ">&nbsp;</i>Facebook</a></li>
                        <li><a href="https://www.instagram.com/rotaractmora/ "><i
									class="icon fa-instagram ">&nbsp;</i>Instagram</a></li>
                        <li><a href="https://www.linkedin.com/company/rotaract-club-of-university-of-moratuwa/about/ "><i
									class="icon fa fa-linkedin-square ">&nbsp;</i>LinkedIn</a></li>
                    </ul>
                </section>
            </div>
            <div class="copyright ">
                <!--&copy; RotaractMora. Photos <a href="https://unsplash.co ">Unsplash</a>, Video <a href="https://coverr.co ">Coverr</a>.-->
                &copy; 2020
                <a href="http://rotaractmora.org ">
                    <img src="./images/logosrota/New folder (4)/white logo2.png " class="footer-rota-logo" />
                </a>
            </div>

        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js "></script>
    <script src="assets/js/browser.min.js "></script>
    <script src="assets/js/breakpoints.min.js "></script>
    <script src="assets/js/util.js "></script>
    <script src="assets/js/main.js "></script>
    <script>
        function navigateToRotaMora() {
            console.log("method ");
            window.location.href = 'http://rotaractmora.org';

        }

        function navigateToIndex() {
            console.log("method ");
            window.location.href = './index.php';

        }
    </script>

</body>

</html>