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
<html lang="en">
<?php echo getHeader(' | Short stories | රත්තරන් ආසාව'); ?>

<body class="is-preload">
	<!-- Header -->
	<?php echo getNavBar(); ?>

	<!-- Heading -->
	<section id="audio-page-banner">
		<p>Short Stories</p>
	</section>

	<!-- Main -->
	<div class="container">
		<br />
		<h2>රත්තරන් ආසාව</h2>
		<div class="panel-group" id="accordion">

			<?php
			$dir = scandir("../short_stories/රත්තරන්_ආසාව/");
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
					echo '<source src=' . '"/short_stories/රත්තරන්_ආසාව/' . $file . '"';

					echo ' type="audio/mp3">';
					echo 'Your browser does not support the audio element.';
					echo '</audio>';
					echo '<script type="text/javascript" src="/test.js"></script>';
					echo '<a href="/download.php?file=./short_stories/රත්තරන්_ආසාව/' . $file . '"';
					echo '>';
					echo '<img src="/images/downloads-icon.png" alt="Download file">';
					echo '</a>';

					echo '</div>';

					echo '</div>';
				}
			}

			?>
		</div>
	</div>

	<!-- Footer -->
	<?php include_once('../components/footer.php'); ?>

</body>

</html>