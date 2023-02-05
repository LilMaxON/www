<!doctype html>
<html lang="ru">
<head>
    <?php
        $title = "SSSite";
        $pageСss ="main.css";
    ?>
    <?php require_once "../blocks/head.php"?>

</head>
<body class="bg-black">
<?php
$name = basename(__FILE__);
require_once  "../blocks/header.php"
?>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <main class="container">
            <div class="text-center py-sm-5"><h1 class="display-6 fw-normal text-white">Студенческое Научное Общество (СНО) ИМИТ</h1></div>
            <div class="text-white w-90 text-center m-auto">
                Наше СНО - это объединение студентов Института Математики и Информационных Технологий ВОЛГУ, принимающих активное участие в научно-исследовательской и просветительской деятельности. И мы станем теми, благодаря кому <div class="blo">придет время, когда наука опередит фантазию</div>
            </div>
            <img src="../images/logoLike.jpg" class="img-fluid rounded-5 my-5" alt="LOGOLIKE">

            <hr>

            <div class="card rounded-5 text-bg-dark my-5">
                <div class="row g-0">
                    <div class="col-5">
                        <img src="../images/Mission.jpg" class="img-fluid rounded-5" alt="...">
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <h1 class="card-title">Миссия, Цель и Задачи</h1>
                            <p>Как устроена жизнь СНО?</p>
                            <p>Основная цель общества — создать творческую среду, способствующую раскрытию и реализации талантов студентов в научно-исследовательской деятельности.</p>
                            <p>Задачи общества:</p>
                            <ul>
                                <li>Показать каждому студенту, что важно идти непроторенными путями, преодолевать препятствия и неустанно трудиться.</li>
                                <li>Показать, что цель науки, как и искусства,  — бесконечный поиск ответов на вопросы.</li>
                                <li>Развитие научного мировоззрения и профессионального кругозора студентов.</li>
                                <li>Развитие навыков работы с литературой и анализом научной информации.</li>
                                <li>Формирование умений самостоятельной исследовательской деятельности.</li>
                                <li> Стать проводником для каждого, кто желает погрузиться в удивительный, хардкорный, но такой прекрасный мир науки.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card rounded-5 text-bg-dark my-5">
                <div class="row g-0">
                    <div class="col-7">
                        <div class="card-body">
                            <h1 class="card-title">Как устроена жизнь СНО?</h1>
                            <p>Раз в год все участники, помогающие развивать СНО проходят процедуру посвящения. В этом году была проведена массовая фотосессия команды.
                                Вся деятельность участников СНО поощряется. Помимо человеческой благодарности, у каждого есть возможность оформить повышенную стипендию, а также получить бонусы непосредственно от команды СНО.
                                Например, в этом году мы создали карточную игру, карты для которой ты можешь получить за участие в наших мероприятиях.
                            </p>
                            <p>Возможные активности:</p>
                            <ul>
                                <li>Участие в конференциях, мастер-классах, круглых столах и лекциях</li>
                                <li>Помощь руководителям проектов</li>
                                <li>Участие в организации конференций, круглых столов и пр.</li>
                                <li>Написание научных статей</li>
                                <li>Написание постов для группы СНО во ВКонтакте</li>
                            </ul>
                            <p>В конце учебного года наиболее активные участники СНО награждаются грамотами.</p>
                        </div>
                    </div>
                    <div class="col-5">
                        <img src="../images/SSSLive.JPG" class="img-fluid rounded-5" alt="...">
                    </div>
                </div>
            </div>
            <div class="card rounded-5 text-bg-dark my-5">
                <div class="row g-0">
                    <div class="col-5">
                        <img src="../images/Chernobly.JPG" class="img-fluid rounded-5" alt="...">
                    </div>
                    <div class="col-7">
                        <div class="card-body">
                            <h1 class="card-title">Возможности участников СНО</h1>
                            <ul>
                                <li>Реализовать себя в научной деятельности</li>
                                <li>Воплощать самые смелые идеи в увлекательных проектах</li>
                                <li>Стать активным участником и организатором всевозможных научных мероприятий и конференций</li>
                                <li>Повысить успеваемость</li>
                                <li>Погрузиться с интересом в изучение сложных материалов</li>
                                <li>Завести новые знакомства по интересам и расширить круго общения</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-5">

            <div class="text-center"><h1 class="display-4 fw-normal text-white m-5">Лучшая в мире команда СНО</h1></div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div id="PeoplesCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <!--<div class="carousel-item ">
                              <div class="card rounded-5 p-3 text-bg-dark">
                                <div class="card-header"><h3>Саня</h3></div>
                                <img class="card-img-bottom" src="../images/San_1.JPG">
                              </div>
                            </div>-->
                            <div class="carousel-item active">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>Макс</h3></div>
                                    <img class="card-img-bottom" src="../images/iiu.jpg">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>Настя</h3></div>
                                    <img class="card-img-bottom" src="../images/yuy.jpg">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>Ванька</h3></div>
                                    <img class="card-img-bottom" src="../images/Ivan.JPG">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>Валерка</h3></div>
                                    <img class="card-img-bottom" src="../images/Val.JPG">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>Никита</h3></div>
                                    <img class="card-img-bottom" src="../images/Sherlok_1.JPG">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>?</h3></div>
                                    <img class="card-img-bottom" src="../images/Uwu.JPG">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>Саня</h3></div>
                                    <img class="card-img-bottom" src="../images/MRkrutoy.JPG">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>И снова Никита</h3></div>
                                    <img class="card-img-bottom" src="../images/Sherlok_2.JPG">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>?</h3></div>
                                    <img class="card-img-bottom" src="../images/Runduk.JPG">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>Андрей</h3></div>
                                    <img class="card-img-bottom" src="../images/Chernobly.JPG">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card rounded-5 p-3 text-bg-dark">
                                    <div class="card-header"><h3>?2</h3></div>
                                    <img class="card-img-bottom" src="../images/ChestWoonan.JPG">
                                </div>
                            </div>
                            <!--<div class="carousel-item">
                              <div class="card rounded-5 p-3 text-bg-dark">
                                <div class="card-header"><h3>И снова снова Саня</h3></div>
                                <img class="card-img-bottom" src="../images/EEE.JPG">
                              </div>
                            </div>-->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#PeoplesCarousel"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Предыдущий</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#PeoplesCarousel"  data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Следующий</span>
                        </button>
                    </div>

                </div>
            </div>


            <hr class="my-5">

            <div class="card rounded-5 text-bg-dark my-5">
                <div class="row g-0">
                    <div class="col">
                        <div class="card-body">
                            <h1 class="card-title">Готов ли ты стать частью студенческого научного общества?</h1>
                            <p>Ты жаждешь изменить свою жизнь, и стать той лучшей версией себя, что так давно сидит у тебя в мечтах?</p>
                            <p>Команда СНО ИМИТ поможет тебе пройти путь тысячеликого героя мягче и веселее. Мы покажем как добраться до финального замка и как сразить дракона) Легко не будет, но мы всегда рядом, ведь матфак - семья!
                                Председатель СНО ИМИТ и его команда помогут вам:
                            <ul>
                                <li>узнать много интересных фактов, явлений и закономерностей про наш интересный мир</li>
                                <li>развить свои скрытые (или не очень) таланты в логике, математике, информатике и физике.</li>
                                <li>развеяться по научному! Квесты, научные игры, квизы и другие мероприятия частенько будут составлять ваш досуг.</li>
                                <li>и самое главное, стать лучше, ведь наука этот всегда про развитие.</li>
                            </ul>
                            </p>
                            <p>Если ты все еще читаешь это, значит ты готов стать частью нашей команды!
                                Заполни форму ниже, отправляй ее нам и продолжай идти навстречу будущему.</p>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a class="btn btn-outline-primary">Скачать форму</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <img src="../images/Part.JPG" class="img-fluid rounded-5" alt="...">
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php require_once "../blocks/footer.php"?>


<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>
