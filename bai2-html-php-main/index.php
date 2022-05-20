<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>
    <!-- header -->
    <?php include_once './inc/header.php' ?>
    <h1>Html va PHP</h1>
    <?php echo 'Hello World' ?>
    <?php
    $language = 'ngon ngu lap trinh php';
    var_dump($language);
    ?>
    <?php include './inc/content.php' ?>
    <?php include './inc/content.php' ?>
    <!-- footer -->
    <?php include_once './inc/footer.php' ?>
</body>

</html>