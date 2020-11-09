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
<html>
<?php echo getHeader('දේශපාලනය'); ?>

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
    <h2>දේශපාලනය</h2>
    <div class="panel-group" id="accordion">

      <?php
      $dir = scandir("./wijaya_newspapers/ඉතිහාසය/දේශපාලනය/");
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
          echo '<source src=' . '"wijaya_newspapers/ඉතිහාසය/දේශපාලනය/' . $file . '"';

          echo ' type="audio/mp3">';
          echo 'Your browser does not support the audio element.';
          echo '</audio>';
          echo '<script type="text/javascript" src="test.js"></script>';
          echo '<a href="download.php?file=./wijaya_newspapers/ඉතිහාසය/දේශපාලනය/' . $file . '"';
          echo '>';
          echo '<img src="downloads-icon.png" alt="Download file">';
          echo '</a>';

          echo '</div>';

          echo '</div>';
        }
      }

      ?>
    </div>
  </div>

 <!-- Footer -->
 <?php include_once('components/footer.php');?>

</body>

</html>