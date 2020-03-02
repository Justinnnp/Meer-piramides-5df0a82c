<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>schaakbord</title>
</head>
<body>
<table cellspacing="0px" cellpadding="0px">
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";

            for ($j = 1; $j <= $i; $j++) {
                echo "<td height=30px width=30px bgcolor= #00000></td>";
            }
        }
?>
</body>
</html>