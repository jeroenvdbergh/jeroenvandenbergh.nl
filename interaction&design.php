<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeroen van den Bergh</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

</head>
<body>

    <?php include 'navbar.html'; ?>
    <?php
switch ($_GET['week']) {
    case 1:
    <?php include 'interaction&design/week1.php'; ?>
        break;
    case "2":
    <?php include 'interaction&design/week2.php'; ?>
        break;
    case "3":
    <?php include 'interaction&design/week3.php'; ?>
        break;
    default:
        <?php include 'interaction&design/index.php'; ?>

}
?>


<script src="scripts/jquery-3.1.0.min.js">
<script src="scripts/bootstrap.min.js"></script>

</body>
</html>
