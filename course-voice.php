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

    <title>Вокал</title>
</head>
<body>
<div class="container">
    <?php require_once 'parts/header.php'; ?>
    <main>
        <section class="about-course text-align-center">
            <h1>Мы. Учим. Петь.</h1>
            <p class="text-bold">Научиться петь может каждый. Мы ежедневно доказываем это на практике.
                «От нуля и до профи» - так можно охарактеризовать наш подход, ведь более
                <mark>80% наших учеников прежде не занимались вокалом.</mark> Даже будущие
                победители вокальных конкурсов.</p>
        </section>
        <section>
            <?php require_once 'generators/yellow_image_block_generator.php';
                $text[] = "<p>Занятие вокалом должны приносить удовольствие и радость, поэтому вы будете учиться петь, исполняя на уроках ваши любимые композиции.</p>";
                $text[] = "<p>Мы вместе пройдем путь от самых основ до вашего первого уверенного выступления на сцене.</p>";
                $text[] = "<p>Обучение вокалу - это сложная и тонкая работа, но под руководством опытного наставника вы сможете добиться хороших результатов.</p>";
                $image = "img/voice-girl.png";
                echo right_yellow_image_text_block($text, $image);
            ?>
        </section>
        <section class="grey-block">
            <div class="row justify-content-space-around from-beginner">
                <div class="col-12">
                    <h1>Обучаем вокалу с нуля. Обучаем опытных.</h1>
                </div>
                <div class="col-3">
                    <img src="img/voice-beginner.svg" alt="">
                    <h2>Начинающие</h2>
                    <p class="text-bold">Очень важно понять, зачем человек хочет учиться вокалу. Педагог и ученик должны одинаково видеть результат, к которому они стремятся.</p>
                    <p>Исходя из этого, педагог разрабатывает индивидуальный план занятий. Начинается обучение всегда с основы - постановки голоса (дыхание, дикция и артикуляция, формирования певческого звука, устранение вокальных зажимов.</p>
                </div>
                <div class="col-3">
                    <img src="img/voice-middle.svg" alt="">
                    <h2>Любители</h2>
                    <p class="text-bold">Один из самых уровней подготовки: ученик владеет базовыми знаниями и уже может исполнять несложные песни.</p>
                    <p>На этом этапе мы формируем индивидуальную манеру исполнения. Учимся петь в разных жанрах с учётом
                        стилистических особенностей  музыки, начинаем осваивать различные вокальные
                        техники. Цель этапа - сформировать собственный стиль исполнения.</p>
                </div>
                <div class="col-3">
                    <img src="img/voice-expert.svg" alt="">
                    <h2>Опытные</h2>
                    <p class="text-bold">С опытными мы работаем над освоением профессиональных вокальных техник, над подбором репертуара и раскрытием сценического образа.</p>
                    <p>На этом этапе урок представляет микс занятий по вокалу, актёрскому мастерству и сцендвижению. Задача школы - формирование вашей творческой индивидуальности, чтобы вас воспринимали не как ученика школы, а как настоящего артиста.</p>
                </div>
            </div>
        </section>
        <section class="teachers">
            <div class="row justify-content-center">
                <h1>Преподаватели вокала
                    Honey Music Home.</h1>
                <p class="text-bold">В нашей музыкальной школе работают только опытные педагоги, которые
                    ответственно подходят к обучению каждого студента. Они умеют
                    вдохновлять, поддерживать и доводить своих учеников до результата.</p>
                <div class="col-4 teacher-card">
                    <div class="image-card">
                        <div class="circle"></div>
                        <img src="img/teacher.png" alt="" class="teacher-image">
                        <div class="teacher-card-shadow"></div>
                    </div>
                    <div class="text">
                        <p class="text-bold">Анна Малинина</p>
                        <p class="text-grey">преподаватель вокала</p>
                    </div>
                </div>
                <div class="col-4 teacher-card">
                    <div class="image-card">
                        <div class="circle"></div>
                        <img src="img/teacher.png" alt="" class="teacher-image">
                        <div class="teacher-card-shadow"></div>
                    </div>
                    <div class="text">
                        <p class="text-bold">Анна Малинина</p>
                        <p class="text-grey">преподаватель вокала</p>
                    </div>
                </div>
                <div class="col-4 teacher-card">
                    <div class="image-card">
                        <div class="circle"></div>
                        <img src="img/teacher.png" alt="" class="teacher-image">
                        <div class="teacher-card-shadow"></div>
                    </div>
                    <div class="text">
                        <p class="text-bold">Анна Малинина</p>
                        <p class="text-grey">преподаватель вокала</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="grey-block">
            <div class="row">
                <h1>В результате обучения в Honey Music Studio
                    вы сможете:</h1>
                .col-3*4>h2
            </div>
        </section>
    </main>
<!--    --><?php //require_once 'parts/footer.php'; ?>
</div>
</body>
</html>
