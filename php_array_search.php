<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Search</title>
</head>

<body>
    <form action="php_array_search.php" method="post">
        <input type="text" placeholder="請輸入數字" name="value">
        <button type="submit">送出</button>
    </form>

    <?php
    $data = array(
        "A01KA029", "A02KA032", "A03KA028", "A01KA029001",
        "A01KA029002", "A01KA029003", "A01KA029004", "A01KA029005", "A02KA032001",
        "A02KA032002", "A02KA032003", "A02KA032004", "A02KA032005", "A03KA028001",
        "A03KA028002", "A03KA028003", "A03KA028004", "A03KA028005"
    );

    if (isset($_POST["value"])) {
        foreach ($data as $value) {
            if (strpos($value, $_POST["value"]) !== false) {
                $matches[] = $value;
            }
        };

        if (!empty($matches)) {
            foreach ($matches as $match) {
                print $match . "<br>";
            }
        } else {
            print "無找到";
        }
    }
    ?>
</body>

</html>