
<?php
$page = basename($_SERVER['PHP_SELF'],'.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Raman e.V. | <?php echo $page == 'index'? $page='Homepage':$page ?></title>
    <link rel="icon" type="image/x-icon" href="/images/logo3.png">

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/44b00e015e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css_my/stylesheet.css">
    <script src="/js_my/script.js"></script>


</head>
<body class="pagecolor">