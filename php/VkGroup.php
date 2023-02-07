<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = "SSSite";
        $pageСss ="main.css";
    ?>
    <?php require_once "../blocks/head.php"?>
    <link rel="stylesheet" href="../css/VK.css">
</head>

<body class="bg-black">

<?php
    $name = basename(__FILE__);
    require_once  "../blocks/header.php"
?>
<img src="../images/Shapka.jpg" style="width: 100%;" alt="...">

<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <main class="container">
            <!-- <div class="text-center py-5"><h1 class="display-4 fw-normal text-white">СНО ИМИТ</h1></div>
             <div class="card text-bg-dark rounded-5">
                 <div class="row">
                     <div class="col">
                         <img src="../images/IMG_2623.JPG" class="img-fluid  rounded-5" alt="...">
                     </div>
                     <div class="col">
                         <div class="card-body">
                             <h2 class="card-title">Наш доблестный Император</h2>
                             <p class="card-text">В прошедшую пятницу наш величественный Император повел нас в Великий поход. Преодолевая все трудности, мы шли месяц. И вот, когда наши запасы были на исходе, наш великодушный Император вывел нас к Великой реке.</p>
                         </div>
                     </div>
                 </div>
             </div>
-->
            <hr class="my-5 mx-0">

            <div class="text-center"><h1 class="display-4 fw-normal text-white">Рубрики нашего ВК</h1></div>
            <div id="VKPostCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#СНОhelp@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-1">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-1">
                                <p>- «Дедлайны! Неужели ты не знаешь, что такое дедлайны? Дедлайны – это величайшие мотиваторы!» -</p>
                                <p>📎Кристофер Кокс – писатель и главный редактор Harper's Magazine.</p>
                                <p>Сроки горят, лабораторные и курсовые не сданы - вы очень сильно паникуете. Можно бесконечно долго обвинять обстоятельства и других людей в том, что вы не успели сдать работу вовремя. А можно научиться управлять дедлайнами и заставить их работать на вас.</p>
                                <p>⚙Кристофер Кокс провёл исследование методов, которые использовали различные организации в те моменты, когда сталкивались с жесткими сроками. Он выявил 9 стратегий эффективного управления временными рамками, которые помогут вам:</p>
                                <ul>
                                    <li>выполнять работу по графику без ущерба для качества,</li>
                                    <li>конкретизировать цели и задачи,</li>
                                    <li>научиться мыслить нестандартно,</li>
                                    <li>сохранять самообладание в стрессовых ситуациях.</li>
                                </ul>
                                <p>Книга поможет вам справиться с дедлайнами, не откладывать все на последний момент. Также вы сможете натренировать способность расставлять приоритеты. Кокс не сухо рассказывает теорию, а разбирает все на реальных примерах, даёт огромное количество советов.</p>
                                <p>⚙Если вы хотите сдавать лабораторные и курсовые вовремя - то эта книга точно для вас.</p>
                                <p>Автор : Иван Горте</p>


                            </div>
                            <img class="card-img-bottom" src="../images/post1.jpg">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#мероприятия@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-2">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-2">
                                <p>Мы видим, что ты совсем заскучал и поэтому спешим к тебе с мероприятиями, которые помогут хорошенько взбодриться!</p>
                                <ul>
                                    <li>«А почему?»</li>
                                    <li>«А ты видел сроки?! Самое время взять себя на слабо и ощутить приток адреналина.»</li>
                                </ul>
                                <p>Поехали!</p>
                                <ul>
                                    <li><h4>⚙XXVII РЕГИОНАЛЬНАЯ КОНФЕРЕНЦИЯ МОЛОДЫХ УЧЕННЫХ И ИССЛЕДОВАТЕЛЕЙ ВОЛГОГРАДСКОЙ ОБЛАСТИ</h4>
                                        <ul>
                                            <li><h5>Сроки:</h5>
                                                <p>Регистрация на портале АИС «Молодежь России» закрывается в 23:59 14.10.2022 по московскому времени.</p></li>
                                            <li><h5>Подробнее:</h5>
                                                <p>https://volsu.ru/struct/administrative/managscience/<br>АИС «Молодежь России»: https://myrosmol.ru</p></li>
                                        </ul>
                                    </li>
                                    <li><h4>⚙КОНКУРС НАУЧНО-ИССЛЕДОВАТЕЛЬСКИХ РАБОТ — НИРС 2022</h4>
                                        <p>Победители получат призы в виде стипендии, дополнительных баллов при поступлении в магистратуру и многое другое.</p>
                                        <ul>
                                            <li><h5>Сроки:</h5>
                                                <p>До 15.10.2022</p></li>
                                            <li><h5>Подробнее:</h5>
                                                <p>https://www.hse.ru/nirs/</p></li>
                                        </ul></li>
                                </ul>
                                <p>Бродячий художник: Тимур Жуков</p>

                            </div>
                            <img class="card-img-bottom" src="../images/post2.jpg">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#задача@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-3">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-3">
                                <p>СПИЧКИ - ДЕТЯМ НЕ ИГРУШКА</p>
                                <p>...или игрушка?</p>
                                <p>Только если в задачах CНО и под присмотром взрослых. Поэтому давайте поиграем!</p>
                                <p>Автор : Никита Чипликов</p>
                            </div>
                            <img class="card-img-bottom" src="../images/spichi.jpg">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#интереСНО@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-4">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-4">
                                <p>ЧТО ТАКОЕ ТЕОРИЯ СТРУН И С ЧЕМ ЕЁ ЕДЯТ</p>
                                <p>⚙Наверняка все слышали о такой популярной теории. В данное время все больше и больше ученых её придерживаются.</p>
                                <p>Так давайте же разберемся, почему теория струн так популярна и как ее понять.</p>
                                <p>Автор статьи: Маргарита Солодовникова</p>
                                <p>Бродячий художник: Тимур Жуков</p>

                            </div>
                            <img class="card-img-bottom" src="../images/fact.jpg">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#мыСНО@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-5">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-5">

                                <p>МЫ В ПЛАНЕТАРИИ</p>
                                <p>Даже в самые тёмные времена студенты Матфака будут познавать этот мир, и недавние события это доказывают.</p>
                                <p>ЧТО ЖЕ БЫЛО?</p>
                                <p>🌑Тьма, небо побагровело, а солнце перестало греть землю своими лучами.</p>
                                <p>Да, это было солнечное затмение, которое началось 25 октября в 12:39 и закончилось в 15:10. В самый пик этого события, а именно в 13:56, луна закрыла 65% солнечного диска.</p>
                                <p>🌕Среди нас, математиков, нашлись те, кто смог лицезреть это дивное и редкое природное явление. Конечно же они созерцали затмение не из простого места, а из храма знаний о небесных сферах и материях - Волгоградского планетария.</p>
                                <p>Что ж, порадуемся за наших товарищей - учащихся, так ясно увидевших все детали природного чуда.</p>
                            </div>
                            <img class="card-img-bottom" src="../images/miiiy.jpg">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#яСНО@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-6">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-6">
                                <p>🔥Что это тут у нас? Новая рубрика!</p>
                                <p>⚙«яСНО» - эта рубрика о необычных, граничащих с фантастикой, предметах исследования, которые мало поддаются объяснению или их объяснение не укладывается в голове. Наша задача состоит в том, чтобы донести идею тех или иных явлений, простым и доступным языком. После прочтения этой рубрики, вы точно скажете -</p>
                                <p>«Теперь мне все ясно!»</p>
                                <p>⚙Первым гостем сегодня становится теория, чье поведение непредсказуемо и странно, чье имя говорит о загадочности и таинственности... Встречайте - Теория Хаоса.</p>
                            </div>
                            <img class="card-img-bottom" src="../images/Chaos.jpg">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#интервью@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-7">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-7">
                                <p>Ровно неделя прошла с того дня, как мы выложили наш невероятно простой квест к Хэллоуину.</p>
                                <p>🕷За это время многое поменялось. А что самое главное, наш квест прошел 1 человек (из 25) Представляете? Прошел - от начала до конца.</p>
                                <p>Многие люди сходили с ума, кричали от боли - «расшифровывать огромный текст кодировкой Utf-8 на а4 вручную?! вы не а(неразборчиво)ли там!?»</p>
                                <p>🔪Теперь в их венах застывает кровь при произнесенной в слух фразе - «квест от СНО»</p>
                                <p>Но только ЕГО это не испугало. И ОН смог пройти через все круги ада, которые мы ему подготовили...</p>
                                <p>🕷Кто же он? Ответ вы узнаете в этой статье!</p>
                            </div>
                            <img class="card-img-bottom" src="../images/Toha1.png">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#СНОГейм</h3></div>
                            <a class="btn btn-primary" id="btn-target-8">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-8">
                                <p> *Звуки старческого кряхтения*...</p>
                                <p> - Вечерочка, сынок, садись, расскажу тебе историю моей жизни.📖</p>
                                <p> Был тогда вечер 9 октября 2021 года. Я играю в «XCom :Long War» на невозможной сложности и проигрываю игру! Несомненно ,игра была великолепна, ты только представь:</p>
                            </div>
                            <img class="card-img-bottom" src="../images/snogame.jpg">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#SNOvaBagi@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-9">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-9">
                                <p> Идеальная игра без ошибок словно тортик: выглядит вкусно и замечательно, но есть один нюанс:</p>
                                <p> - The cake is a lie -</p>
                                <p> 👾 Эти слова были багровым цветом выгравированы на стенах СНО ИМИТ в новой рубрике - «SNOva bagi» Она станет вашим путеводителем в мире багов и ошибок всевозможных игровых миров.</p>
                            </div>
                            <img class="card-img-bottom" src="../images/Bag.jpg ">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#Фильмы@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-10">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-10">
                                <p>📌Игра в имитацию (2014)</p>
                                <p> Вы забываете пароль от соц.сетей?📱 Иногда бывает крайне трудно вспомнить, начинается всеми нелюбимый перебор каких-то символов, а потом все равно доходит до сброса пароля.</p>
                                <p> А теперь представьте, что есть машина, которая каждый раз меняет пароль, а вам нужно ее взломать. Жуть, не правда ли?</p>
                                <p> Автор статьи: Яна Скобелкина</p>
                            </div>
                            <img class="card-img-bottom" src="../images/film.jpg">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#квест@snoimit</h3></div>
                            <a class="btn btn-primary" id="btn-target-11">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-11">
                                <p> 🔪Прежде чем мы начнем, тебе нужно кое-что зарубить себе на носу – этот мир ненастоящий.</p>
                                <p> Он, со всей его социальной драмой, устроен как испытание для избранных. Остальное – это декорации, реквизит и костюмированная массовка.</p>
                                <p> Ты можешь задаться вопросом – кто же ты во всем этом театре? </p>
                                <p> А ты всего лишь марионетка, которой управляют как хотят. И тебе это нравится. Можешь даже не отрицать.</p>
                            </div>
                            <img class="card-img-bottom" src="../images/kvest.jpg">
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="card rounded-5 p-3 text-bg-dark">
                            <div class="card-header"><h3>#Олимпиады</h3></div>
                            <!--<h3 class="card-title">ДАЙДЖЕСТ МЕРОПРИЯТИЙ</h3>-->
                            <a class="btn btn-primary" id="btn-target-12">Collapse</a>

                            <!-- #target -->
                            <div class="collapse" id="target-12">
                                <p>Comming soon</p>
                            </div>
                            <img class="card-img-bottom" src="../images/come.jpg">
                        </div>
                    </div>


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#VKPostCarousel"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#VKPostCarousel"  data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>
        </main>
    </div>
    <div class="col-1"></div>
</div>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script>
    const collapseElem1 = document.querySelector('#target-1');
    const collapse1 = new bootstrap.Collapse(collapseElem1, {toggle: false});
    document.querySelector('#btn-target-1').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse1.toggle();
    });
</script>
<script>
    const collapseElem2 = document.querySelector('#target-2');
    const collapse2 = new bootstrap.Collapse(collapseElem2, {toggle: false});
    document.querySelector('#btn-target-2').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse2.toggle();
    });
</script>
<script>
    const collapseElem3 = document.querySelector('#target-3');
    const collapse3 = new bootstrap.Collapse(collapseElem3, {toggle: false});
    document.querySelector('#btn-target-3').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse3.toggle();
    });
</script>
<script>
    const collapseElem4 = document.querySelector('#target-4');
    const collapse4 = new bootstrap.Collapse(collapseElem4, {toggle: false});
    document.querySelector('#btn-target-4').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse4.toggle();
    });
</script>
<script>
    const collapseElem5 = document.querySelector('#target-5');
    const collapse5 = new bootstrap.Collapse(collapseElem5, {toggle: false});
    document.querySelector('#btn-target-5').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse5.toggle();
    });
</script>
<script>
    const collapseElem6 = document.querySelector('#target-6');
    const collapse6 = new bootstrap.Collapse(collapseElem6, {toggle: false});
    document.querySelector('#btn-target-6').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse6.toggle();
    });
</script>
<script>
    const collapseElem7 = document.querySelector('#target-7');
    const collapse7 = new bootstrap.Collapse(collapseElem7, {toggle: false});
    document.querySelector('#btn-target-7').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse7.toggle();
    });
</script>
<script>
    const collapseElem8 = document.querySelector('#target-8');
    const collapse8 = new bootstrap.Collapse(collapseElem8, {toggle: false});
    document.querySelector('#btn-target-8').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse8.toggle();
    });
</script>
<script>
    const collapseElem9 = document.querySelector('#target-9');
    const collapse9 = new bootstrap.Collapse(collapseElem9, {toggle: false});
    document.querySelector('#btn-target-9').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse9.toggle();
    });
</script>
<script>
    const collapseElem10 = document.querySelector('#target-10');
    const collapse10 = new bootstrap.Collapse(collapseElem10, {toggle: false});
    document.querySelector('#btn-target-10').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse10.toggle();
    });
</script>
<script>
    const collapseElem11 = document.querySelector('#target-11');
    const collapse11 = new bootstrap.Collapse(collapseElem11, {toggle: false});
    document.querySelector('#btn-target-11').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse11.toggle();
    });
</script>
<script>
    const collapseElem12 = document.querySelector('#target-12');
    const collapse12 = new bootstrap.Collapse(collapseElem12, {toggle: false});
    document.querySelector('#btn-target-12').addEventListener('click', (e) => {
        e.preventDefault();
        // сворачиваем или разворачиваем collapse-элемент
        collapse12.toggle();
    });
</script>

<?php require_once "../blocks/footer.php"?>

</body>
</html>