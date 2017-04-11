
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Euclid Free Responsive Html5 Themes</title>

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
<script type='text/javascript' src='views/js/comment-reply.min.js'></script>
 <script src="views/js/css3-mediaqueries.js"></script>
<script type="text/javascript" language="javascript">
	$(function() {
		
		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */
		
		
		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */
			
			
		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */
			
	});
</script>
</head>

<body class="single single-post postid-49 single-format-standard">

<!-- Comment Form -->
<div class="commen-form loginIdentificate">
    <form action="login.php" method="post" id="comment-form-container" class="comment-form">
        <h4>Вход</h4>
        <input type="text" name="login" placeholder="Введите Ваш логин" class="comment-name" required>
        <input type="password" name="password" placeholder="Введите Ваш пароль" class="comment-name" required>
        <input type="submit" id="comment-submit" value="Продолжить" />
        <?php if (!empty($login->error)) : ?>
        <p class="error"><?php echo $login->error; ?></p>
        <?php endif; ?>
    </form>
</div>
<!-- End Comment Form -->


</body>

</html>