<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculator</title>
  </head>
  <body>
  <?php
// If the submit button has been pressed
if(isset($_POST['submit']))
{
// Check number values
if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
{
// Calculate total
if($_POST['operation'] == 'plus')
{
$total = $_POST['number1'] + $_POST['number2'];
}
if($_POST['operation'] == 'minus')
{
$total = $_POST['number1'] - $_POST['number2'];
}
if($_POST['operation'] == 'times')
{
$total = $_POST['number1'] * $_POST['number2'];
}
if($_POST['operation'] == 'divided by')
{
$total = $_POST['number1'] / $_POST['number2'];
}
// Print total to the browser
echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals {$total}</h1>";
} else {
// Print error message to the browser
echo 'Numeric values are required';
}
}
?>
<div class="container center_div">

<form method="post" action="home.php">
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Number 1 </span>
  <input name="number1" type="text" class="form-control" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
<select class="form-select" aria-label="Default select example" name="operation">
<option value="plus">Plus ➕ </option>
<option value="minus">Minus ➖</option>
<option value="times">Times ✖️</option>
<option value="divided by">Divided By ➗</option>
</select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Number 2</span>
  <input  name="number2" type="text" class="form-control" aria-describedby="basic-addon3">
</div>

  <button style="background-color:#FFC947;color:#0A1931" type="submit" class="btn btn-primary" name="submit">Calculate</button>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
