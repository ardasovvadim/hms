<!DOCTYPE html>
<html lang="ru">
<head>
    <?php require_once 'parts/head-tags.php'; ?>

    <style>

    </style>

    <title>HMS</title>

</head>
<body>
<div class="position-xy">
    <p class="text-bold">X: </p>
    <p class="text-bold" id="x">0</p>
    <p class="text-bold"> Y: </p>
    <p class="text-bold" id="y">0</p>
</div>
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
    <?php require_once 'parts/bottom-scripts-include.php'; ?>
</body>
</html>