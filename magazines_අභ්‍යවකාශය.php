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

<?php echo getHeader('RotaractMora Manusath Handa'); ?>

<body class="is-preload">
    <!-- Header -->
    <?php  echo getNavBar(); ?>

    <!-- Heading -->
    <section id="audio-page-banner">
        <p>Magazines</p>
    </section>

    <!-- Main -->
    <div class="container">
        <br />
        <h2>අභ්‍යවකාශය</h2>
        <div class="panel-group" id="accordion">

            <?php
            $dir = scandir("./wijaya_newspapers/space/");
            $c = count($dir);
            sort($dir, 1);
            for ($x = 0; $x < $c; $x++) {
                $file = $dir[$x];
                if (strcmp($file, ".") != 0 and strcmp($file, "..") != 0) {

                    echo '<div class="panel panel-default">';
                    echo '<div class="panel-heading">';
                    echo '<h4 class="panel-title">';
                    echo '<a data-toggle="collapse" data-parent="#accordion" href="#collapse' . $x . '">' . substr($file, 0, strlen($file) - 4) . '</a>';
                    echo '</h4>';
                    echo '</div>';
                    echo '<div id="collapse' . $x . '" class="panel-collapse collapse">';
                    echo '<br>';
                    echo '<audio controls preload="none">';
                    echo '<source src=' . '"http://manusathhanda.rotaractmora.org/wijaya_newspapers/space/' . $file . '"';

                    echo ' type="audio/mp3">';
                    echo 'Your browser does not support the audio element.';
                    echo '</audio>';
                    echo '<script type="text/javascript" src="test.js"></script>';

                    echo '<a href="download.php?file=./wijaya_newspapers/space/' . $file . '"';
                    echo '>';
                    echo '<img src="http://manusathhanda.rotaractmora.org/downloads-icon.png">';
                    echo '</a>';

                    echo '</div>';

                    echo '</div>';
                }
            }

            ?>
        </div>
    </div>

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