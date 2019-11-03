<!doctype html>
<html lang="ru">
<head>
    <?php require_once 'parts/head-tags.php'; ?>
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
        <section class="stages">
            <div class="row">
                <div class="row">
                    <div class="col-12 title">
                        <h1>Этапы обучения вокалу в <br>
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
        <section class="duration-lesson grey-block">
            <div class="row">
                <div class="col-12">
                    <h1>Как проходит типичный урок вокала в Honey Music Studio</h1>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end">
                        <div class="col-auto text">
                            <h2 class="text-gradient">55 мин</h2>
                            <p class="text-bold"><mark>Длительность одного урока 55 минут.</mark></p>
                            <p>Все занятия по вокалу в школе индивидуальны.</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 image">
                    <img src="img/cello.png" alt="">
                </div>
            </div>
        </section>
        <section class="plan-lesson">
            <div class="row">
                <div class="col-12">
                    <h1>Структура урока</h1>
                </div>
                <div class="col-6">
                    <div class="item">
                        <p class="text-bold">1. Настройка</p>
                        <p>Часто говорят, что урок начинается с распевок. Но на самом деле для плодотворной работы нужно привести в порядок своё психоэмоциональное состояние, и настроится на урок.</p>
                    </div>
                    <div class="item">
                        <p class="text-bold">2. Работа над дыханием</p>
                        <p>Певческое дыхание - основа основ, и мы работаем над этим на каждом уроке до тех пор, пока пение на опоре не войдет в плоть и кровь вокалиста.</p>
                    </div>
                    <div class="item">
                        <p class="text-bold">3. Артикуляция и дикция</p>
                        <p>Правильное и четкое произношение слов является необходимой составляющей красивого исполнения. К тому же, певческая артикуцией гласных и согласных звуков отличается от речевой.</p>
                    </div>
                    <div class="item">
                        <p class="text-bold">4. Индивидуальный распевки</p>
                        <p>Из большого количества вольных упражнений и распевок мы отбираем те, которые подходят для конкретного ученика и развивают его сильные стороны. Или исправляют слабые.</p>
                    </div>
                    <div class="item">
                        <p class="text-grey text-smaller">~ 30 минут отводится работе на подготовительный этап. Чем более опытный вокалист, тем быстрее мы переходим к работе над песней</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <p class="text-bold">5. Работа над песней</p>
                    </div>
                    <div class="next-level">
                        <div class="item">
                            <p class="text-bold">5.1 Выбор репертуара</p>
                            <p>Необходимо, чтобы песня соответствовала возрасту, диапазону и вокальному уровню ученика.</p>
                        </div>
                        <div class="item">
                            <p class="text-bold">5.2 Работа с текстом</p>
                            <p>Если композиция на иностранном языке, то обязательно производится дословный перевод. Далее заучивается текст и мелодия. После чего мы делаем исполнение песни интересным с помощью фразировки, динамики, агогики.</p>
                        </div>
                        <div class="item">
                            <p class="text-bold">5.3 Работа над сценическим образом</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once 'parts/feedback-section.php'; ?>
        <?php require_once 'parts/way-goal-section.php'; ?>
        <?php require_once 'parts/atmosphere-section.php'; ?>

    </main>
    <?php require_once 'parts/footer.php'; ?>
    <?php require_once 'parts/bottom-scripts-include.php'; ?>
</div>
</body>
</html>
