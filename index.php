<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- STYLES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="css/main.css?<?php echo time(); ?>">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap&subset=cyrillic" rel="stylesheet">
    <script src="https://kit.fontawesome.com/891ccb40dd.js"></script>

    <title>HMS</title>

</head>
<body>
<div class="container">
    <?php require_once 'parts/header.php'; ?>
    <main>
        <?php require_once 'parts/about-section.php'; ?>
        <?php require_once 'parts/experience-section.php'; ?>
        <?php require_once 'parts/course-section.php'; ?>
        <?php require_once 'parts/colums-section.php'; ?>
        <?php require_once 'parts/bigschool-section.php'; ?>
        <?php require_once 'parts/freelesson-section.php'; ?>
        <?php require_once 'parts/atmosphere-section.php'; ?>
    </main>
    <?php require_once 'parts/footer.php'; ?>
</div>
</body>
</html>