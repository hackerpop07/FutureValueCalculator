
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="InventmentAmount" placeholder="InventmentAmount">
    <br>
    <input type="number" name="YearlyInterestRate" placeholder="YearlyInterestRate">
    <br>
    <input type="number" name="NumberofYears" placeholder="NumberofYears">
    <br>
    <input type="submit" value="Calculator">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $InventmentAmount = $_POST["InventmentAmount"];
        $YearlyInterestRate = $_POST["YearlyInterestRate"];
        $NumberofYears = $_POST["NumberofYears"];
        if ($InventmentAmount > 0 && $NumberofYears > 0 && $YearlyInterestRate > 0) {
            echo $InventmentAmount + ($InventmentAmount * $YearlyInterestRate) * $NumberofYears;
        }
    }
    ?>
</form>
</body>
</html>
