<?php
  include "includes/header.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ajax PHP</title>
</head>
<body>
  <form action="" id="formId" class="text-center" method="POST">
    <input type="checkbox" name="checkbox[]" value="1"><label>1</label>
    <input type="checkbox" name="checkbox[]" value="2"><label>2</label>
    <input type="checkbox" name="checkbox[]" value="3"><label>3</label>
    <input type="checkbox" name="checkbox[]" value="4"><label>4</label>
    <input type="checkbox" name="checkbox[]" value="5"><label>5</label>
    <input type="checkbox" name="checkbox[]" value="6"><label>6</label>
    <input type="checkbox" name="checkbox[]" value="7"><label>7</label>
    <input type="checkbox" name="checkbox[]" value="8"><label>8</label>
    <input type="checkbox" name="checkbox[]" value="9"><label>9</label>
    <input type="checkbox" name="checkbox[]" value="10"><label>10</label>
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>

  <div id="tables">
    <div id="table"></div>
  </div>

<script>
    let form = document.getElementById("formId");
    let table = document.getElementById("table");

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      let formData = new FormData(form);

      let xhr = new XMLHttpRequest();
      xhr.open ('POST', 'process.php', true);
      xhr.onload = function() {
        let result = '';
        result = this.responseText;
        table.innerHTML = result;
        }
      xhr.send(formData);
    });
  </script>
</body>
</html>

<?php
  include "includes/footer.php"; 
?>