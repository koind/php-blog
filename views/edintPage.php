
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Админ</title>

    <link rel='stylesheet' id='reset-css'  href='views/css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' id='superfish-css'  href='views/css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fontawsome-css'  href='views/css/font-awsome/css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='orbit-css-css'  href='views/css/orbit.css' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css'  href='views/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='color-scheme-css'  href='views/css/color/green.css' type='text/css' media='all' />
    <link rel="stylesheet" href="views/css/zerogrid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="views/css/responsive.css" type="text/css" media="screen">
    <script type='text/javascript' src='views/js/jquery.js'></script>
    <script type='text/javascript' src='views/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='views/js/jquery-1.10.2.min.js'></script>
    <script type='text/javascript' src='views/js/jquery.carouFredSel-6.2.1-packed.js'></script>
    <script type='text/javascript' src='views/js/hoverIntent.js'></script>
    <script type='text/javascript' src='views/js/superfish.js'></script>
    <script type='text/javascript' src='views/js/orbit.min.js'></script>
    <script src="views/js/css3-mediaqueries.js"></script>


</head>

<body class="home blog adminPage">

<!-- Start Header -->
<div class="container zerogrid">
    <div class="col-full"><div class="wrap-col">
            <div id="header-nav-container">
                <img src="views/images/logo.png" id="logo" />
                <!-- Navigation Menu -->
                <ul class="sf-menu">
                    <li class="menu-item"><a href="admin.php">Главная</a></li>
                    <li class="menu-item"><a href="?exit=1">Выход</a></li>
                </ul>
                <!-- End Navigation Menu -->
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<div class="spacing-30"></div>
<!-- End Header -->





<!-- Start Main Container -->
<div class="container zerogrid">

    <!-- Start Posts Container -->
    <div class="col-2-3" id="post-container">
        <div class="wrap-col">

            <!-- form -->
            <?php foreach ($resArr as $item) { ?>
            <div class="post">
                <div class="post-margin addForms">
                    <h3>Редактировать статью</h3><br>
                    <form action="editPage.php?change=<?php echo $item["id"]; ?>" method="post" enctype="multipart/form-data">
                        <label for="postName">Введите название</label>
                        <input type="text" id="postName" class="inputForm" name="postName" required value="<?php echo $item["articleName"]; ?>">
                        <label for="postData">Введите дату</label>
                        <input type="date" id="postData" class="inputForm" name="postData" required value="<?php echo $item["articleData"]; ?>">
                        <label for="postText">Ввод статьи</label>
                        <textarea id="postText" name="postText" required><?php echo $item["article"]; ?></textarea><hr>
                        <p>Текущая картинка:</p>
                        <img src="<?php echo $item["path"]; ?>" class="attachment-post-standard " width="600" /><br><br>
                        <hr>
                        <label for="postFile">Изменить текущую картинку на новую</label><br><br>
                        <input type="file" name="postFile" id="postFile">
                        <input type="hidden" name="id" value="<?php echo $item["id"]; ?>"" required>
                        <button type="submit">Добавить статью</button>
                    </form>
                </div>

            </div>
            <?php } ?>
            <!-- form -->



            <div class="clear"></div>
        </div>
    </div>
    <!-- End Posts Container -->



    <div class="clear"></div>
</div>
<!-- End Main Container -->








</body>

</html>