<?php
require_once __DIR__."/../config.php";


require_once SITE_ROOT."/components/nav_bar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/sec_style.css" />
</head>

<body>
    <section>

        <?php

        nav("../index.php", "foods.php", "join_partner.php", "about_us.php", "contact_us.php");
        ?>
    </section>



    <script type="text/javascript" src="../assets/js/index.js"></script>
</body>

</html>