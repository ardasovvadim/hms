<!doctype html>
<html lang="ru">
<head>
    <?php require_once 'parts/head-tags.php'; ?>

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
    <?php require_once 'parts/bottom-scripts-include.php'; ?>
</div>
</body>
</html>
