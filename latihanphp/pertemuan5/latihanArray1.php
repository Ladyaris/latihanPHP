<?php
    $orang = ["Léadre", 1102844469, "IT RPL", "ledfdla@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apa ini</title>
</head>
<body>
    <?php foreach($orang as $value)
    {
        echo "$value <br>";
    }
    ?>
</body>
</html>