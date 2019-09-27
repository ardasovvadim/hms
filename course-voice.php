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
        <section class="results grey-block">
            <div class="row justify-content-center">
                <h1 class="text-title">В результате обучения в Honey Music Studio
                    вы сможете:</h1>
                <div class="col-3 card card">
                    <h2 class="text-gradient">01</h2>
                    <p>Легко и красиво
                        исполнять results любимые
                        песни в различных
                        стилях (pop, rock, soul,
                        folk, jazz).</p>
                </div>
                <div class="col-3 card">
                    <h2 class="text-gradient">02</h2>
                    <p>Освоить вокальные
                        техники: субтон, гроул,results
                        фрай, бэлтинг,
                        мелизматика, вибрато и
                        другие.</p>
                </div>
                <div class="col-3 card">
                    <h2 class="text-gradient">03</h2>
                    <p>Преодолеть чувство
                        страха results перед
                        выступлением. Вести
                        себя на сцене свободно и
                        расковано.</p>
                </div>
                <div class="col-3 card">
                    <h2 class="text-gradient">04</h2>
                    <p>Петь сольно и
                        импровизировать. Петь
                        в составе дуэта или
                        ансамбля.</p>
                </div>
                <div class="col-3 card">
                    <h2 class="text-gradient">05</h2>
                    <p>Выступать на концертах
                        школы на одной сцене с
                        профессиональными
                        музыкантами.</p>
                </div>
                <div class="col-3 card">
                    <h2 class="text-gradient">06</h2>
                    <p>Участвовать в вокальных
                        фестивалях, конкурсах и
                        кастингах.</p>
                </div>
            </div>
        </section>
        <?php require_once 'parts/freelesson-section.php'; ?>
        <section>
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <h1>Этапы обучения вокалу в
                            Honey Music Studio</h1>
                        <p class="text-bold">Основная часть наших учеников хочет научиться петь для себя. Но есть и те, кто
                            приходит к нам за профессиональной подготовкой, чтобы в дальнейшем строить
                            свою музыкальную карьеру. Вне зависимости от целей, все проходят необходимые
                            базовые этапы становления вокалиста.</p>
                        <p>1 и 2 этапы базовые.</p>
                    </div>
                    <?php
                    unset($text);
                    $text[] = "<h1>1 этап. «Постановка голоса».</h1>";
                    $text[] = "<ul>
                        <li><div class='circle-marker'></div>Определяем тип голоса.</li>
                        <li><div class='circle-marker'></div>Гигиена голосового аппарата (профилактика и
                            необходимые меры по восстановлению голоса).
                            Выработка полезных вокальных привычек.</li>
                        <li><div class='circle-marker'></div>Обучение пению «на опоре». (Постановка
                            «певческого дыхания»).</li>
                        <li><div class='circle-marker'></div>Устранение вокальных «зажимов»
                            отрицательных качеств голоса: гнусавость,
                            гортанность, форсирование звука,
                            недостаточность силы звучания голоса, сип,
                            быстрая утомляемость голосовых связок.</li>
                        <li><div class='circle-marker'></div>Правильная дикция и артикуляция (коррекция
                            некоторых дефектов речи).</li>
                        <li><div class='circle-marker'></div>Формирование правильного певчего звучания.</li>
                        <li><div class='circle-marker'></div>Развитие музыкального слуха и чувства ритма.</li>
                    </ul>";
                    $image = "img/voice-girl.png";
                    echo left_yellow_image_text_block($text, $image);

                    unset($text);
                    $text[] = "<h1>2 этап. «Поиск и формирование индивидуального звучания».</h1>";
                    $text[] = "<ul>
                        <li><div class='circle-marker'></div>Подбор индивидуальных упражнений.</li>
                        <li><div class='circle-marker'></div>Расширение диапазона, «сглаживание» регистров.</li>
                        <li><div class='circle-marker'></div>Работа с микрофоном.</li>
                        <li><div class='circle-marker'></div>Разбор композиций (разбор формы произведения, работа с текстом, фразировка, расстановка акцентов, выбор и отработка вокальных приёмов).</li>
                        <li><div class='circle-marker'></div>Правильная дикция и артикуляция (коррекция некоторых дефектов речи).</li>
                        <li><div class='circle-marker'></div>Развитие гармоничного слуха. Бэк-вокал, умение «держать партию» в ансамблевом пении.</li>
                        <li><div class='circle-marker'></div>Пение в дуэте в ансамбле.</li>
                    </ul>";
                    $image = "img/voice-man.png";
                    echo right_yellow_image_text_block($text, $image);
                    ?>
                </div>
            </div>
        </section>
    </main>
<!--    --><?php //require_once 'parts/footer.php'; ?>
</div>
</body>
</html>
