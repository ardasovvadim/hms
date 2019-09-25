<!doctype html>
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

    <title>Про школу</title>
</head>
<body>
<div class="container">
    <?php require_once 'parts/header.php'; ?>
    <main>
        <?php

            require_once 'parts/thisisus-section.php';
            require_once 'parts/right-gradientimage-section.php';
            require_once 'parts/bigschool-section.php';
            require_once 'parts/video-aboutus-section.php';

        ?>
        <section class="columns">
        <?php
            require_once 'generators/text_block_generators.php';
            echo right_text_block_generate(
                    "О методике обучения",
                    "или как мы добиваемся<br>результата",
                    "Мы в курсе актуальных и эффективных 
                            методик обучения: наши педагоги 
                            регулярно участвуют в профильных 
                            мастер-классах и перенимают опыт 
                            лучших украинских и международных 
                            педагогов.",
                    "Выбор конкретной методики всегда зависит от 
                            начального уровня ученика и тех целей, которые 
                            он перед собой ставит. Музыкальный материал 
                            для обучения педагог выбирает совместно с 
                            учеником. Таким образом, вы с самого начала 
                            исполняете ту музыку, которую вы любите, и 
                            которая вам подходит на текущем уровне 
                            развития ваших навыков.
                            <br>
                            <br>
                            Разумеется, вы работаете над необходимой 
                            технической базой, но на тех произведениях, 
                            которые вас вдохновляет. Обучение с 
                            удовольствием всегда эффективнее. Это 
                            подтверждает достижение наших учеников."
            ); ?>
        </section>
        <?php require_once 'parts/atmosphere-section.php'; ?>
        <?php require_once 'parts/ps.php'; ?>
    </main>
    <?php require_once 'parts/footer.php'; ?>
</div>
</body>
</html>
