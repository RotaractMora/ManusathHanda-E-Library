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
<?php echo getHeader(' | Past Papers | Sinhala Medium | Ordinary Level | Sinhala'); ?>

<body class="is-preload">
  <!-- Header -->
  <?php echo getNavBar(); ?>

  <!-- Heading -->
  <section id="audio-page-banner">
    <p>Past Papers</p>
  </section>



  <!-- Main -->
  <div class="container">
    <br />
    <h2>Select a Sinhala audiobook to listen to</h2>
    <p>Click on the expandable items to listen to & download audio questions of past papers.</p>
    <div>
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><button class="button button1">2016</button></a>
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><button class="button button1">2017</button></a>
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><button class="button button1">2018</button></a>
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><button class="button button1">2019</button></a>
    </div>

    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">2016</a>
          </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
          <?php


          $dir = scandir("../../voice_of_humanity_2019_OL_past_papers/sinhala/2016_sinhala/");
          $c = count($dir);
          sort($dir, 1);

          for ($x = 0; $x < $c; $x++) {
            $file = $dir[$x];
            if (strcmp($file, ".") != 0 and strcmp($file, "..") != 0) {
              echo '<div class="panel-body" class="raw">';
              if ($x >= 11) {
                echo substr($file, 3, strlen($file) - 7) . "</br>";
              } else {
                echo substr($file, 2, strlen($file) - 6) . "</br>";
              }


              echo '<audio controls preload="none">';
              echo '<source src=' . '"/voice_of_humanity_2019_OL_past_papers/sinhala/2016_sinhala/' . $file . '"';

              echo ' type="audio/mp3">';
              echo 'Your browser does not support the audio element.';
              echo '</audio>';
              echo '<script type="text/javascript" src="/test.js"></script>';




              echo '<a href="/download.php?file=./voice_of_humanity_2019_OL_past_papers/sinhala/2016_sinhala/' . $file . '"';
              echo '>';
              echo '<img src="/images/downloads-icon.png" alt="Download file">';
              echo '</a>';





              echo '</div>';
            }
          }

          //close


          ?>

        </div>
      </div>
      <div class="panel panel-default">


        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">2017</a>
          </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
          <?php


          $dir = scandir("../../voice_of_humanity_2019_OL_past_papers/sinhala/2017_sinhala/");
          $c = count($dir);
          sort($dir, 1);

          for ($x = 0; $x < $c; $x++) {
            $file = $dir[$x];
            if (strcmp($file, ".") != 0 and strcmp($file, "..") != 0) {
              //echo "<br>";
              echo '<div class="panel-body" class="raw">';
              if ($x >= 11) {
                echo substr($file, 3, strlen($file) - 7) . "</br>";
              } else {
                echo substr($file, 2, strlen($file) - 6) . "</br>";
              }


              echo '<audio controls preload="none">';
              echo '<source src=' . '"/voice_of_humanity_2019_OL_past_papers/sinhala/2017_sinhala/' . $file . '"';

              echo ' type="audio/mp3">';
              echo 'Your browser does not support the audio element.';
              echo '</audio>';

              echo '<script type="text/javascript" src="/test.js"></script>';




              echo '<a href="/download.php?file=./voice_of_humanity_2019_OL_past_papers/sinhala/2017_sinhala/' . $file . '"';
              echo '>';
              echo '<img src="/images/downloads-icon.png" alt="Download file">';
              echo '</a>';





              echo '</div>';
            }
          }

          //close


          ?>

        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">2018</a>
          </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
          <?php


          $dir = scandir("../../voice_of_humanity_2019_OL_past_papers/sinhala/2018_sinhala/");
          $c = count($dir);
          sort($dir, 1);

          for ($x = 0; $x < $c; $x++) {
            $file = $dir[$x];
            if (strcmp($file, ".") != 0 and strcmp($file, "..") != 0) {
              //echo "<br>";
              echo '<div class="panel-body" class="raw">';
              if ($x >= 11) {
                echo substr($file, 3, strlen($file) - 7) . "</br>";
              } else {
                echo substr($file, 2, strlen($file) - 6) . "</br>";
              }


              echo '<audio controls preload="none">';
              echo '<source src=' . '"/voice_of_humanity_2019_OL_past_papers/sinhala/2018_sinhala/' . $file . '"';

              echo ' type="audio/mp3">';
              echo 'Your browser does not support the audio element.';
              echo '</audio>';
              echo '<script type="text/javascript" src="/test.js"></script>';




              echo '<a href="/download.php?file=./voice_of_humanity_2019_OL_past_papers/sinhala/2018_sinhala/' . $file . '"';
              echo '>';
              echo '<img src="/images/downloads-icon.png" alt="Download file">';
              echo '</a>';





              echo '</div>';
            }
          }

          //close


          ?>

        </div>
      </div>



      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">2019</a>
          </h4>
        </div>
        <div id="collapse7" class="panel-collapse collapse">
          <?php


          $dir = scandir("../../voice_of_humanity_2019_OL_past_papers/sinhala/2019_sinhala/");
          $c = count($dir);
          sort($dir, 1);

          for ($x = 0; $x < $c; $x++) {
            $file = $dir[$x];
            if (strcmp($file, ".") != 0 and strcmp($file, "..") != 0) {
              echo '<div class="panel-body" class="raw">';
              echo substr($file, 0, strlen($file) - 4) . "</br>";


              echo '<audio controls preload="none">';
              echo '<source src=' . '"/voice_of_humanity_2019_OL_past_papers/sinhala/2019_sinhala/' . $file . '"';

              echo ' type="audio/mp3">';
              echo 'Your browser does not support the audio element.';
              echo '</audio>';
              echo '<script type="text/javascript" src="/test.js"></script>';




              echo '<a href="/download.php?file=./voice_of_humanity_2019_OL_past_papers/sinhala/2019_sinhala/' . $file . '"';
              echo '>';
              echo '<img src="/images/downloads-icon.png" alt="Download file">';
              echo '</a>';





              echo '</div>';
            }
          }

          //close


          ?>

        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include_once('../../components/footer.php'); ?>

</body>

</html>