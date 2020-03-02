<?php
if (isset($_POST['checkbox'])) {
  $checkbox = $_POST['checkbox'];
?>
  <div id="tables">
    <?php
    foreach ($checkbox as $value) {
    ?>
      <div id="table">
        <?php
        for ($i = 1; $i <= 10; $i++) {
          echo ($value . " * " . $i . " = " . (intval($value) * $i) . "<br>");
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>
<?php
}
?>