<?php //'login' - то, что, написано в input name=



//header('Content-Type: text/html; charset=UTF-8');
//require_once "data.php"; //нужно
session_start();
ob_end_clean();
$image = $_POST['file'];
$news_title = $_POST['news-title'];
$sh_text = $_POST['intro-text'];
$fl_text = $_POST['full-text'];
?>
    <div class="container news_bar">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-6">
                            <!--<img class="card-img-bottom" src="../images/fact.jpg">-->
                            <!--<script>
                                function readImage(file) {
                                    // Check if the file is an image.
                                    if (file.type && !file.type.startsWith('image/')) {
                                        console.log('File is not an image.', file.type, file);
                                        return;
                                    }
                                    const reader = new FileReader();
                                    reader.addEventListener('load', (event) => {
                                        img.src = event.target.result;
                                    });
                                    reader.readAsDataURL(file);
                                }
                            </script>-->
                            <!--document.getElementById('picField').onchange = function (evt) {
                            var tgt = evt.target || window.event.srcElement,
                            files = tgt.files;

                            // FileReader support
                            if (FileReader && files && files.length) {
                            var fr = new FileReader();
                            fr.onload = function () {
                            document.getElementById(outImage).src = fr.result;
                            }
                            fr.readAsDataURL(files[0]);
                            }


                            <img src="$image" class="rounded shadow img-fluid" alt="" srcset="">
                            <img src="data:image/jpeg;base64,' . $data[$i]['image'] . '" class="rounded shadow img-fluid" alt="" srcset="">-->
                        </div>
                        <div class="col-6">
                            <h5><?php echo " $news_title"; ?></h5>
                            <p><?php echo "$sh_text";?></p>
                            <p><?php echo "$fl_text";?></p>

                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>
    <!--<p>Изменить новость<a href="../functions/addNews.php">Изменить</a></p>-->

<?php ob_start();
$image = $_POST['file'];
$news_title = $_POST['news-title'];
$sh_text = $_POST['intro-text'];
$fl_text = $_POST['full-text'];?>