<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        $title = "SSSite";
        $pageСss ="News.css";
    ?>
    <?php require_once "../blocks/head.php"?>

</head>
<body <!--class="bg-black"-->>
<?php
$name = basename(__FILE__);
require_once  "../blocks/header.php"
?>
<!-- блок ввода новостей -->
<!--<div class="row bg-light">
    <form name="form1" method="post" action="<? echo $PHP_SELF; ?>">
        <table width="50%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="50%">Name</td>
                <td><input name="name" type="text" id="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="email" type="text" id="email"></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td>Headline</td>
                <td><input name="headline" type="text" id="headline"></td>
            </tr>
            <tr>
                <td>News Story</td>
                <td><textarea name="story" id="story"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><div align="center">
                        <input name="hiddenField" type="hidden" value="add_n">
                        <input name="add" type="submit" id="add" value="Submit">
                    </div></td>
            </tr>
        </table>
    </form>
</div>-->
<!-- блок с новостями-->
<div class="row">

</div>



<!--<?php require_once "../blocks/footer.php"?>-->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="../node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
</body>
</html>