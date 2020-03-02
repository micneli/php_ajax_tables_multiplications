<?php
if (isset($_POST['checkbox'])) {
  $checkbox = $_POST['checkbox'];

  foreach ($checkbox as $value) {
?>
    <div id="tables">
    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo ($value . " * " . $i . " = " . (intval($value) * $i) . "<br>");
    }
  }
    ?>
    </div>
  <?php
}
  ?>