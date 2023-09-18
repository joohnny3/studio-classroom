<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <form action="php_number.php" method="post" class="row g-3">
        <div class="col-auto">
            <input type="text" class="form-control mb-3 mt-3" placeholder="請輸入 數字 " name="number" required>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3 mt-3">送出</button>
        </div>
    </form>
    <?php
    if (isset($_POST["number"])) {

        if (!is_numeric($_POST["number"])) {
            print "<p style='color:red;'>" . "僅可以輸入數字" . "</p>";
        } else {
            $roundNumber = round($_POST["number"]);
            $formatNumber = number_format($roundNumber);

            print "<p>$formatNumber</p>";
        }
    }
    ?>

</body>

</html>