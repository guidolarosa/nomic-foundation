<?php 
    $body_id = "homepage";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomic Foundation</title>
    <link rel="stylesheet" type="text/css" href="public/stylesheet.css" />
    <link rel="icon" href="icons/favicon.svg">
</head>
<body id="<?php echo $body_id ?>">
    <?php
        require("pages/" . $body_id . '.php');
    ?>
</body>
<script src="main.js"></script>
</html>

<?php ?>