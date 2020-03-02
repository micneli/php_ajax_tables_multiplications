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
    <input type="checkbox" name="checkbox[]" value="1">1
    <input type="checkbox" name="checkbox[]" value="2">2
    <input type="checkbox" name="checkbox[]" value="3">3
    <input type="checkbox" name="checkbox[]" value="4">4
    <input type="checkbox" name="checkbox[]" value="5">5
    <input type="submit" name="submit" value="Submit">
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