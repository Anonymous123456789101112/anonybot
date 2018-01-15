<?php
if(isset($_POST["t"])){
  date_default_timezone_set('Europe/Amsterdam');
  $date = date("[d/m/Y H:i:s]", time());

  $file = "ips";
  $current = file_get_contents($file);
  $new = $date . " " . $_POST["t"] . "\n" . $current;

  file_put_contents($file, $new);
}
?>
