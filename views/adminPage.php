
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
            <div class="post">
            	<div class="post-margin addForms"> 
            		<h3>Добавить новую статью</h3><br>               
	                <form action="admin.php" method="post" enctype="multipart/form-data">
	                	<label for="postName">Введите название</label>
	                	<input type="text" id="postName" class="inputForm" name="postName" required>
	                	<label for="postData">Введите дату</label>
	                	<input type="date" id="postData" class="inputForm" name="postData" required>
	                	<label for="postText">Ввод статьи</label>
	                	<textarea id="postText" name="postText" required></textarea>
	                	<label for="postFile">Добавить картинку</label><br><br>
	                	<input type="file" name="postFile" id="postFile" required>
	                	<button>Добавить статью</button>
	                </form>
                </div>   

            </div>
            <!-- form -->

            <?php foreach ($resArr as $item) { ?>
        	<!-- Start Post Item -->
            <div class="post">
            	<div class="post-margin">                
	                <div class="post-avatar">
	                    <div class="avatar-frame"></div>
	                    <img alt='' src='http://1.gravatar.com/avatar/16afd22c8bf5c2398b206a76c9316a3c?s=70&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D70&amp;r=G' class='avatar avatar-70 photo' height='70' width='70' />                
	                </div>

                	<h4 class="post-title"><?php echo $item["articleName"]; ?></h4>
                	<ul class="post-status">
                	    <li><i class="fa fa-clock-o"></i>Дата публикации: <?php echo $item["articleData"]; ?></li>
                    </ul>
                    <div class="clear"></div>
                </div>   

            	<div class="featured-image">
                    <img src="<?php echo $item["path"]; ?>" class="attachment-post-standard "  />
                </div>

            	<div class="post-margin"></div>            
	            <ul class="post-social">
	             	<li><a href="?delete=<?php echo $item["id"]; ?>">Удалить</a></li>
	             	<li><a href="editPage.php?change=<?php echo $item["id"]; ?>">Редактировать</a></li>
	            </ul>            
            	<div class="clear"></div>
            </div>
            <!-- End Post Item -->
            <?php } ?>

        <div class="clear"></div>
		</div>
        </div>
        <!-- End Posts Container -->
		
   
    
    <div class="clear"></div>
    </div>
	<!-- End Main Container -->
	
	
    
    

  


</body>

</html>