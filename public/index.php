<?php

$page=isset($_GET["page"])?$_GET["page"]:"homepage";
?>
<?php include '../inc/init.php'?>

<?php include ROOT_PATH. 'public/teplate_parts/header.php' ?>
<div id="main" class="container" style="margin-top:100px;">
        <div class="row ">
            <div class="col-9">

            <?php include  ROOT_PATH. 'public/pages/'.$page. '.php';?>
            </div>
            <?php include  ROOT_PATH. 'public/teplate_parts/sidebar.php';?>
    </div>
    <?php include  ROOT_PATH. 'public/teplate_parts/footer.php';?>