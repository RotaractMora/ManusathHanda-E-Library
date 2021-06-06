<?php
if (isset($_GET['file'])) {
  $file = $_GET['file'];
  if (file_exists($file) && is_readable($file) && preg_match('/\.mp3$/', $file)) {


    $list = explode("/", $file);
    $list[0] = date("Y/m/d");
    $x = count($list);
    $gap = 6 - $x;
    if ($x < 6) {
      $item = $list[$x - 1];
      $list[$x - 1] = "";
      for ($y = 0; $y < $gap; $y++) {
        array_push($list, "");
      }
      $list[count($list) - 1] = $item;
    }

    $file2 = fopen("Data.csv", "a");


    fputcsv($file2, $list);


    fclose($file2);
    header('Content-type: application/mp3');
    header("Content-Disposition: attachment; filename=\"$file\"");
    readfile($file);
  }
} else {
  header("HTTP/1.0 404 Not Found");
  echo "<h1>Error 404: File Not Found: <br /><em>$file</em></h1>";
}
